<?php

declare(strict_types=1);

// $Id$
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <https://www.xoops.org>                             //
// ------------------------------------------------------------------------- //
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
require dirname(__DIR__, 2) . '/mainfile.php';
require XOOPS_ROOT_PATH . '/modules/umfrage/include/constants.php';
require_once XOOPS_ROOT_PATH . '/modules/umfrage/class/umfrage.php';
require_once XOOPS_ROOT_PATH . '/modules/umfrage/class/umfrageoption.php';
require_once XOOPS_ROOT_PATH . '/modules/umfrage/class/umfragelog.php';
require_once XOOPS_ROOT_PATH . '/modules/umfrage/class/umfragerenderer.php';

// ISegura.es: HTTP_POST_VARS is from Stone age. Replacing.
if (!empty($_POST['poll_id'])) {
    $poll_id = (int)$_POST['poll_id'];
} elseif (!empty($_GET['poll_id'])) {
    $poll_id = (int)$_GET['poll_id'];
}
global $xoopsModuleConfig, $xoopsConfig;

if (empty($poll_id)) {
    $GLOBALS['xoopsOption']['template_main'] = 'umfrage_index.html';

    require XOOPS_ROOT_PATH . '/header.php';

    $limit = !empty($_GET['limit']) ? (int)$_GET['limit'] : 50;

    $start = !empty($_GET['start']) ? (int)$_GET['start'] : 0;

    $xoopsTpl->assign('lang_pollslist', _PL_POLLSLIST);

    $xoopsTpl->assign('lang_pollquestion', _PL_POLLQUESTION);

    $xoopsTpl->assign('lang_pollvoters', _PL_VOTERS);

    $xoopsTpl->assign('lang_votes', _PL_VOTES);

    $xoopsTpl->assign('lang_expiration', _PL_EXPIRATION);

    // add 1 to $limit to know whether there are more polls
    $polls_arr = &Umfrage::getAll([], true, 'weight ASC, end_time DESC', $limit + 1, $start);

    $polls_count = count($polls_arr);

    $max = $polls_count > $limit ? $limit : $polls_count;

    // Last column is only shown when there is a result available for viewing
    $showlastcol = 0;

    for ($i = 0; $i < $max; $i++) {
        $polls = [];

        $polls['pollId'] = $polls_arr[$i]->getVar('poll_id');

        if ($polls_arr[$i]->getVar('end_time') > time()) {
            $polls['pollEnd'] = formatTimestamp($polls_arr[$i]->getVar('end_time'), 'm');

            $polls['pollQuestion'] = $polls_arr[$i]->getVar('question');

            if ($xoopsUser) {
                if (UmfrageLog::hasVoted($polls_arr[$i]->getVar('poll_id'), xoops_getenv('REMOTE_ADDR'), $xoopsUser->getVar('uid'))) {
                    $polls['pollQuestion'] = $polls_arr[$i]->getVar('question');
                } else {
                    $polls['pollQuestion'] = "<a href='index.php?poll_id=" . $polls_arr[$i]->getVar('poll_id') . "'>" . $polls_arr[$i]->getVar('question') . '</a>';
                }
            }

            $polls['expired'] = 0;

            $polls['lang_results'] = _PL_STANDINGS;
        } else {
            $polls['expired'] = 1;

            $polls['lang_results'] = _PL_RESULTS;

            $polls['pollEnd'] = "<span style='color:#ff0000;'>" . _PL_EXPIRED . '</span>';

            $polls['pollQuestion'] = $polls_arr[$i]->getVar('question');
        }

        if ($polls_arr[$i]->getVar('polltype') != 2) {
            $showlastcol = 1;
        }

        $polls['pollVoters'] = $polls_arr[$i]->getVar('voters');

        $polls['pollVotes'] = $polls_arr[$i]->getVar('votes');

        $polls['polltype'] = $polls_arr[$i]->getVar('polltype');

        $xoopsTpl->assign('showlastcol', $showlastcol);

        $xoopsTpl->append('polls', $polls);

        // Test if the Front block has to be removed at the end of the poll
        if ($polls_arr[$i]->hasExpired() && $polls_arr[$i]->getVar('autoblockremove') && $polls_arr[$i]->getVar('display')) {
            $polls_arr[$i]->setVar('display', 0);

            $polls_arr[$i]->store();
        }

        if ($polls_arr[$i]->hasExpired() && $polls_arr[$i]->getVar('mail_status') != POLL_MAILED) {
            $polls_mail = &Umfrage::getAll(['poll_id=' . $polls['pollId']], true, 'weight ASC, end_time DESC');

            $xoopsMailer = getMailer();

            $xoopsMailer->useMail();

            $xoopsMailer->setTemplateDir(XOOPS_ROOT_PATH . '/modules/umfrage/language/' . $xoopsConfig['language'] . '/mail_template/');

            $xoopsMailer->setTemplate('mail_results.tpl');

            $author = new XoopsUser($polls_arr[$i]->getVar('user_id'));

            $xoopsMailer->setToUsers($author);

            $xoopsMailer->assign('POLL_QUESTION', $polls_arr[$i]->getVar('question'));

            $xoopsMailer->assign('POLL_START', formatTimestamp($polls_arr[$i]->getVar('start_time'), 'l', $author->timezone()));

            $xoopsMailer->assign('POLL_END', formatTimestamp($polls_arr[$i]->getVar('end_time'), 'l', $author->timezone()));

            $xoopsMailer->assign('POLL_VOTES', $polls_arr[$i]->getVar('votes'));

            $xoopsMailer->assign('POLL_VOTERS', $polls_arr[$i]->getVar('voters'));

            $xoopsMailer->assign('POLL_ID', $polls_arr[$i]->getVar('poll_id'));

            $xoopsMailer->assign('SITENAME', $xoopsConfig['sitename']);

            $xoopsMailer->assign('ADMINMAIL', $xoopsConfig['adminmail']);

            $xoopsMailer->assign('SITEURL', $xoopsConfig['xoops_url'] . '/');

            $xoopsMailer->setFromEmail($xoopsConfig['adminmail']);

            $xoopsMailer->setFromName($xoopsConfig['sitename']);

            $xoopsMailer->setSubject(sprintf(_PL_YOURPOLLAT, $author->uname(), $xoopsConfig['sitename']));

            $polls_mail = &Umfrage::getAll(['poll_id=' . $polls['pollId']], true, 'weight ASC, end_time DESC');

            if (!empty($polls)) {
                $options_arr = &UmfrageOption::getAllByPollId($polls['pollId']);

                $total = $polls_arr[$i]->getVar('votes');

                // Number of digits for Formatting
                if ($total != 0) {
                    $digits = 1 + floor(log10($total));
                } else {
                    $digits = 1;
                }

                $mailbody = '';

                foreach ($options_arr as $option) {
                    if ($total > 0) {
                        $percent = 100 * $option->getVar('option_count') / $total;
                    } else {
                        $percent = 0;
                    }

                    $mailbody .= sprintf(
                        '%' . $digits . 'd (%3d%%) ' . _PL_MAILBODY2 . "%s\n",
                        $option->getVar('option_count'),
                        $percent,
                        $option->getVar('option_text')
                    );
                }

                $mailbody .= sprintf(_PL_MAILBODY3, $total);

                $xoopsMailer->assign('MAILBODY', $mailbody);

                if ($xoopsMailer->send() !== false) {
                    $polls_arr[$i]->setVar('mail_status', POLL_MAILED);

                    $polls_arr[$i]->store();
                }
            }
        }

        unset($polls);
    }

    require XOOPS_ROOT_PATH . '/footer.php';
} elseif (!empty($_POST['option_id'])) {
    $voted_polls = !empty($_COOKIE['voted_polls']) ? $_COOKIE['voted_polls'] : [];

    $mail_author = false;

    $poll = new Umfrage($poll_id);

    if (!$poll->hasExpired()) {
        if (empty($voted_polls[$poll_id]) or $xoopsModuleConfig['controlbycookie'] == 0) {
            // ISegura.es: Check poll response limit if Multiple
            $multilimit = $poll->getVar('multilimit');

            if ($multilimit > 0 and $poll->getVar('multiple') == 1 and (count($_POST['option_id']) > $multilimit)) {
                $msg = sprintf(_PL_VOTEOVERLIMIT, $multilimit);

                redirect_header(XOOPS_URL . "/modules/umfrage/index.php?poll_id=$poll_id", 2, $msg);
            }

            if ($xoopsUser) {
                if (UmfrageLog::hasVoted($poll_id, xoops_getenv('REMOTE_ADDR'), $xoopsUser->getVar('uid'))) {
                    setcookie("voted_polls[$poll_id]", 1, 0);

                    $msg = _PL_ALREADYVOTED;
                } else {
                    $poll->vote($_POST['option_id'], xoops_getenv('REMOTE_ADDR'), $xoopsUser->getVar('uid'), $xoopsUser);

                    $poll->updateCount();

                    setcookie("voted_polls[$poll_id]", 1, 0);

                    $msg = _PL_THANKSFORVOTE;
                }
            } else {
                if ($poll->getVars('polltype') == 1) {
                    if (UmfrageLog::hasVoted($poll_id, xoops_getenv('REMOTE_ADDR'))) {
                        setcookie("voted_polls[$poll_id]", 1, 0);

                        $msg = _PL_ALREADYVOTED;
                    } else {
                        $poll->vote($_POST['option_id'], xoops_getenv('REMOTE_ADDR'));

                        $poll->updateCount();

                        setcookie("voted_polls[$poll_id]", 1, 0);

                        $msg = _PL_THANKSFORVOTE;
                    }
                } else {
                    $msg = _PL_LOGINTOVOTE;
                }
            }
        } else {
            $msg = _PL_ALREADYVOTED;
        }
    }

    //election mode
    if ($poll->getVars('polltype') != 1) {
        redirect_header(XOOPS_URL . '/modules/umfrage/index.php', 2, $msg);
    } else {
        redirect_header(XOOPS_URL . "/modules/umfrage/pollresults.php?poll_id=$poll_id", 2, $msg);
    }

    exit();
} elseif (!empty($poll_id)) {
    $GLOBALS['xoopsOption']['template_main'] = 'umfrage_view.html';

    require XOOPS_ROOT_PATH . '/header.php';

    $poll = new Umfrage($poll_id);

    if ($xoopsUser) {
        $hasvoted = 0;

        if (UmfrageLog::hasVoted($poll_id, xoops_getenv('REMOTE_ADDR'), $xoopsUser->getVar('uid'))) {
            $hasvoted = 1;
        }
    } else {
        $hasvoted = 1;
    }

    $xoopsTpl->assign('hasVoted', $hasvoted);

    $xoopsTpl->assign('hasEnded', $poll->getVar('end_time') < time() ? 1 : 0);

    $renderer = new UmfrageRenderer($poll);

    $renderer->assignForm($xoopsTpl);

    $xoopsTpl->assign('lang_vote', _PL_VOTE);

    $xoopsTpl->assign('lang_results', $poll->getVar('end_time') < time() ? _PL_RESULTS : _PL_STANDINGS);

    $xoopsTpl->assign('lang_alreadyvoted2', _PL_ALREADYVOTED2);

    require XOOPS_ROOT_PATH . '/footer.php';
}
