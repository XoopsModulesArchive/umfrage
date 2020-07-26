<?php declare(strict_types=1);

// $Id$
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <https://www.xoops.org>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //
global $xoopsConfig;
require_once XOOPS_ROOT_PATH . '/modules/umfrage/class/umfrage.php';
require_once XOOPS_ROOT_PATH . '/modules/umfrage/class/umfragelog.php';
require_once XOOPS_ROOT_PATH . '/modules/umfrage/class/umfrageoption.php';
require_once XOOPS_ROOT_PATH . '/modules/umfrage/language/' . $xoopsConfig['language'] . '/main.php';

function hasVoted($poll_id)
{
    global $_COOKIE;

    global $xoopsUser, $xoopsModuleConfig;

    $voted_polls = (!empty($_COOKIE['voted_polls'])) ? $_COOKIE['voted_polls'] : [];

    if (empty($voted_polls[$poll_id]) or 0 == $xoopsModuleConfig['controlbycookie']) {
        if (is_object($xoopsUser)) {
            $uid = $xoopsUser->getVar('uid');
        } else {
            $uid = null;
        }

        if (UmfrageLog :: hasVoted($poll_id, xoops_getenv('REMOTE_ADDR'), $uid)) {
            if (!headers_sent()) {
                setcookie("voted_polls[$poll_id]", 1, 0);
            }

            return true;
        }
  

        return false;
    }
  

    return true;
}

/**
 * $opts[0] = show result if expired or voted (1=yes)
 * $opts[1] = show percent (1=yes)
 * $opts[2] = show bar (1=yes)
 * @param mixed $opts
 */
function b_umfrage_show($opts)
{
    global $xoopsUser;

    global $xoopsDB;

    $poll_res = $xoopsDB->query('SELECT conf_value FROM ' . $xoopsDB->prefix('config') . " WHERE conf_name='election'");

    $poll_sicht = 0;

    if ($poll_res) {
        list($poll_sicht) = $xoopsDB->fetchrow($poll_res);

        $poll_sicht = intval($poll_sicht);
    }

    if (1 == $poll_sicht) {
        $show_result = false;
    } else {
        $show_result = (1 == $opts[0]) ? true : false;
    }

    if (is_object($xoopsUser)) {
        $uid = $xoopsUser->getVar('uid');
    } else {
        $uid = null;
    }

    $show_percent = (1 == $opts[1]) ? true : false;

    $show_bar = (1 == $opts[2]) ? true : false;

    $block = [];

    $polls = &Umfrage :: getAll(['display=1'], true, 'weight ASC, end_time DESC');

    $count = count($polls);

    if ($count < 1) {
        return false;
    }

    $block['lang_vote'] = _PL_VOTE;

    //$block['lang_results'] = _PL_RESULTS;

    $block['lang_alreadyvoted'] = _PL_ALREADYVOTED2;

    $block['lang_expiration'] = _PL_EXPIRATION;

    $block['lang_expiredon'] = _PL_EXPIREDON;

    $block['lang_onlyregistered'] = _PL_ONLYREGISTERED;

    $block['notregistered'] = (null === $uid) ? 1 : 0;

    $block['csspath'] = XOOPS_URL . '/modules/umfrage/templates';

    for ($i = 0; $i < $count; $i++) {
        $options_arr = &UmfrageOption :: getAllByPollId($polls[$i]->getVar('poll_id'));

        $expired = $polls[$i]->hasExpired() ? 1 : 0;

        if ($expired) {
            $lang_results = _PL_RESULTS;
        } else {
            $lang_results = _PL_STANDINGS;
        }

        $poll_end = formatTimestamp($polls[$i]->getVar('end_time'), 'm');

        if (($expired || hasVoted($polls[$i]->getVar('poll_id'))) && $show_result) {
            $total = $polls[$i]->getVar('votes');

            foreach ($options_arr as $option) {
                if ($total > 0) {
                    $percent = 100 * $option->getVar('option_count') / $total;
                } else {
                    $percent = 0;
                }

                if (intval($percent) > 0 && $show_bar) {
                    $width = intval($percent);

                    $img = "<img src='" . XOOPS_URL . '/modules/umfrage/images/colorbars/' . $option->getVar('option_color', 'E') . "' height='14' width='" . $width . "%' align='middle' alt='" . intval($percent) . " %'>";
                } else {
                    $img = '';
                }

                if ($show_percent) {
                    $percent = sprintf('%d%%', $percent);
                } else {
                    $percent = '';
                }

                $options[] = ['percent' => $percent, 'image' => $img, 'text' => $option->getVar('option_text')];
            }

            $poll = ['expired' => $expired,
                'id' => $polls[$i]->getVar('poll_id'),
                'question' => $polls[$i]->getVar('question'),
                'options' => $options,
                'hasVoted' => hasVoted($polls[$i]->getVar('poll_id')) ? 1 : 0,
                'poll_end' => $poll_end,
                'polltype' => $polls[$i]->getVar('polltype'),
                'lang_result' => $lang_results, ];
        } else {
            $option_type = 'radio';

            $option_name = 'option_id';

            if (1 == $polls[$i]->getVar('multiple')) {
                $option_type = 'checkbox';

                $option_name .= '[]';
            }

            foreach ($options_arr as $option) {
                $options[] = ['id' => $option->getVar('option_id'), 'text' => $option->getVar('option_text')];
            }

            $poll = ['expired' => $expired,
                'id' => $polls[$i]->getVar('poll_id'),
                'question' => $polls[$i]->getVar('question'),
                'option_type' => $option_type,
                'option_name' => $option_name,
                'options' => $options,
                'hasVoted' => hasVoted($polls[$i]->getVar('poll_id')) ? 1 : 0,
                'poll_end' => $poll_end,
                'polltype' => $polls[$i]->getVar('polltype'),
                'lang_result' => $lang_results, ];
        }

        $block['polls'][] = &$poll;

        $block['election'] = false === $show_result ? 1 : 0;

        unset($options);

        unset($poll);

        unset($election);

        unset($poll_end);
    }

    return $block;
}

/**
 * $options[0] = show result if expired or voted (1=yes)
 * $options[1] = show percent (1=yes)
 * $options[2] = show bar (1=yes)
 * @param mixed $options
 */
function b_umfrage_edit($options)
{
    $form = '<table><tr><td align="left" width="1%" nowrap>';

    $form .= _BL_POLL_EDIT_SHOWRESULTS . '&nbsp;&nbsp;</td><td align="left">&nbsp;&nbsp;<select name="options[0]">';

    $form .= '<option value="0"';

    if (0 == $options[0]) {
        $form .= ' selected="selected"';
    }

    $form .= '> ' . _NO . '</option>';

    $form .= '<option value="1"';

    if (1 == $options[0]) {
        $form .= ' selected="selected"';
    }

    $form .= '> ' . _YES . '</option>';

    $form .= '</select></td></tr>';

    $form .= '<tr><td align="left" width="1%" nowrap>';

    $form .= _BL_POLL_EDIT_SHOWPERCENT . '&nbsp;&nbsp;</td><td align="left">&nbsp;&nbsp;<select name="options[1]">';

    $form .= '<option value="0"';

    if (0 == $options[1]) {
        $form .= ' selected="selected"';
    }

    $form .= '> ' . _NO . '</option>';

    $form .= '<option value="1"';

    if (1 == $options[1]) {
        $form .= ' selected="selected"';
    }

    $form .= '> ' . _YES . '</option>';

    $form .= '</select></td></tr>';

    $form .= '<tr><td align="left" width="1%" nowrap>';

    $form .= _BL_POLL_EDIT_SHOWBAR . '&nbsp;&nbsp;</td><td align="left">&nbsp;&nbsp;<select name="options[2]">';

    $form .= '<option value="0"';

    if (0 == $options[2]) {
        $form .= ' selected="selected"';
    }

    $form .= '> ' . _NO . '</option>';

    $form .= '<option value="1"';

    if (1 == $options[2]) {
        $form .= ' selected="selected"';
    }

    $form .= '> ' . _YES . '</option>';

    $form .= '</select></td></tr>';

    $form .= '</table>';

    return $form;
}
