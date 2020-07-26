<?php

declare(strict_types=1);

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
//  Author: phppp (D.J., infomax@gmail.com)                                  //
//  URL: http://xoopsforge.com, http://xoops.org.cn                          //
//  Project: Article Project                                                 //
//  ------------------------------------------------------------------------ //
require __DIR__ . '/header.php';

if (isset($_POST['submit'])) {
    foreach (['forum', 'topic_id', 'newforum', 'newtopic'] as $getint) {
        ${$getint} = isset($_POST[$getint]) ? (int)$_POST[$getint] : 0;
    }
} else {
    foreach (['forum', 'topic_id'] as $getint) {
        ${$getint} = isset($_GET[$getint]) ? (int)$_GET[$getint] : 0;
    }
}

if (!$topic_id) {
    $redirect = empty($forum_id) ? 'index.php' : 'viewforum.php?forum=' . $forum;

    redirect_header($redirect, 2, _MD_ERRORTOPIC);
}

$topicHandler = xoops_getModuleHandler('topic', 'newbb');
$forum = $topicHandler->get($topic_id, 'forum_id');
$forum_new = !empty($newtopic) ? $topicHandler->get($newtopic, 'forum_id') : 0;

$forumHandler = xoops_getModuleHandler('forum', 'newbb');
if (!$forumHandler->getPermission($forum, 'moderate')
    || (!empty($forum_new) && !$forumHandler->getPermission($forum_new, 'reply')) // The forum for the topic to be merged to
    || (!empty($newforum) && !$forumHandler->getPermission($newforum, 'post')) // The forum to be moved to
) {
    redirect_header("viewtopic.php?forum=$forum&amp;topic_id=$topic_id", 2, _NOPERM);

    exit();
}

if ($xoopsModuleConfig['wol_enabled']) {
    $onlineHandler = xoops_getModuleHandler('online', 'newbb');

    $onlineHandler->init($forum);
}

$action_array = ['merge', 'delete', 'move', 'lock', 'unlock', 'sticky', 'unsticky', 'digest', 'undigest'];
foreach ($action_array as $_action) {
    $action[$_action] = [
        'name' => $_action,
        'desc' => constant(mb_strtoupper('_MD_DESC_' . $_action)),
        'submit' => constant(mb_strtoupper('_MD_' . $_action)),
        'sql' => 'topic_' . $_action . '=1',
        'msg' => constant(mb_strtoupper('_MD_TOPIC' . $_action)),
    ];
}
$action['lock']['sql'] = 'topic_status = 1';
$action['unlock']['sql'] = 'topic_status = 0';
$action['unsticky']['sql'] = 'topic_sticky = 0';
$action['undigest']['sql'] = 'topic_digest = 0';
$action['digest']['sql'] = 'topic_digest = 1, digest_time = ' . time();

// Disable cache
$xoopsConfig['module_cache'][$xoopsModule->getVar('mid')] = 0;
require XOOPS_ROOT_PATH . '/header.php';

if (isset($_POST['submit'])) {
    $mode = $_POST['mode'];

    if ($mode == 'delete') {
        //$topicHandler = xoops_getModuleHandler('topic', 'newbb');
        $topicHandler->delete($topic_id);

        $forumHandler->synchronization($forum);

        //sync($topic_id, "topic");
        //xoops_notification_deletebyitem ($xoopsModule->getVar('mid'), 'thread', $topic_id);
        echo $action[$mode]['msg'] . "<p><a href='viewforum.php?forum=$forum'>" . _MD_RETURNTOTHEFORUM . "</a></p><p><a href='index.php'>" . _MD_RETURNFORUMINDEX . '</a></p>';
    } elseif ($mode == 'merge') {
        //$topicHandler = xoops_getModuleHandler('topic', 'newbb');
        $postHandler = xoops_getModuleHandler('post', 'newbb');

        $newtopic_obj = $topicHandler->get($newtopic);

        /* return false if destination topic is newer or not existing */

        if ($newtopic > $topic_id || !is_object($newtopic_obj)) {
            redirect_header('javascript:history.go(-1)', 2, _MD_ERROR);

            exit();
        }

        $criteria_topic = new Criteria('topic_id', $topic_id);

        $criteria = new CriteriaCompo($criteria_topic);

        $criteria->add(new Criteria('pid', 0));

        $postHandler->updateAll('pid', $topicHandler->getTopPostId($newtopic), $criteria, true);

        $postHandler->updateAll('topic_id', $newtopic, $criteria_topic, true);

        $topic_views = $topicHandler->get($topic_id, 'topic_views') + $newtopic_obj->getVar('topic_views');

        $criteria_newtopic = new Criteria('topic_id', $newtopic);

        $topicHandler->updateAll('topic_views', $topic_views, $criteria_newtopic, true);

        $topicHandler->synchronization($newtopic);

        $poll_id = $topicHandler->get($topic_id, 'poll_id');

        if ($poll_id > 0) {
            if (is_dir(XOOPS_ROOT_PATH . '/modules/umfrage/')) {
                require_once XOOPS_ROOT_PATH . '/modules/umfrage/class/umfrage.php';

                require_once XOOPS_ROOT_PATH . '/modules/umfrage/class/umfrageoption.php';

                require_once XOOPS_ROOT_PATH . '/modules/umfrage/class/umfragelog.php';

                require_once XOOPS_ROOT_PATH . '/modules/umfrage/class/umfragerenderer.php';

                $poll = new Umfrage($poll_id);

                if ($poll->delete() !== false) {
                    UmfrageOption::deleteByPollId($poll->getVar('poll_id'));

                    UmfrageLog::deleteByPollId($poll->getVar('poll_id'));

                    xoops_comment_delete($xoopsModule->getVar('mid'), $poll->getVar('poll_id'));
                }
            }
        }

        $sql = sprintf('DELETE FROM %s WHERE topic_id = %u', $xoopsDB->prefix('bb_topics'), $topic_id);

        $result = $xoopsDB->queryF($sql);

        $sql = sprintf('DELETE FROM %s WHERE topic_id = %u', $xoopsDB->prefix('bb_votedata'), $topic_id);

        $result = $xoopsDB->queryF($sql);

        $sql = sprintf('UPDATE %s SET forum_topics = forum_topics-1 WHERE forum_id = %u', $xoopsDB->prefix('bb_forums'), $forum);

        $result = $xoopsDB->queryF($sql);

        echo $action[$mode]['msg'] .
                "<p><a href='viewtopic.php?topic_id=$newtopic'>" . _MD_VIEWTHETOPIC . '</a></p>' .
                "<p><a href='viewforum.php?forum=$forum'>" . _MD_RETURNTOTHEFORUM . '</a></p>' .
                "<p><a href='index.php'>" . _MD_RETURNFORUMINDEX . '</a></p>';
    } elseif ($mode == 'move') {
        if ($newforum > 0) {
            $sql = sprintf('UPDATE %s SET forum_id = %u WHERE topic_id = %u', $xoopsDB->prefix('bb_topics'), $newforum, $topic_id);

            if (!$r = $xoopsDB->query($sql)) {
                return false;
            }

            $sql = sprintf('UPDATE %s SET forum_id = %u WHERE topic_id = %u', $xoopsDB->prefix('bb_posts'), $newforum, $topic_id);

            if (!$r = $xoopsDB->query($sql)) {
                return false;
            }

            $forumHandler->synchronization($newforum);

            $forumHandler->synchronization($forum);

            echo $action[$mode]['msg'] . "<p><a href='viewtopic.php?topic_id=$topic_id&amp;forum=$newforum'>" . _MD_GOTONEWFORUM . "</a></p><p><a href='index.php'>" . _MD_RETURNFORUMINDEX . '</a></p>';
        } else {
            redirect_header('javascript:history.go(-1)', 2, _MD_ERRORFORUM);
        }
    } else {
        $sql = sprintf('UPDATE %s SET ' . $action[$mode]['sql'] . ' WHERE topic_id = %u', $xoopsDB->prefix('bb_topics'), $topic_id);

        if (!$r = $xoopsDB->query($sql)) {
            redirect_header("viewtopic.php?forum=$forum&amp;topic_id=$topic_id&amp;order=$order&amp;viewmode=$viewmode", 2, _MD_ERROR_BACK . '<br>sql:' . $sql);

            exit();
        }

        echo $action[$mode]['msg'] . "<p><a href='viewtopic.php?topic_id=$topic_id&amp;forum=$forum'>" . _MD_VIEWTHETOPIC . "</a></p><p><a href='viewforum.php?forum=" . $forum . "'>" . _MD_RETURNFORUMINDEX . '</a></p>';
    }
} else {  // No submit
    $mode = $_GET['mode'];

    echo "<form action='" . $_SERVER['PHP_SELF'] . "' method='post'>";

    echo "<table border='0' cellpadding='1' cellspacing='0' align='center' width='95%'>";

    echo "<tr><td class='bg2'>";

    echo "<table border='0' cellpadding='1' cellspacing='1' width='100%'>";

    echo "<tr class='bg3' align='left'>";

    echo "<td colspan='2' align='center'>" . $action[$mode]['desc'] . '</td></tr>';

    if ($mode == 'move') {
        echo '<tr><td class="bg3">' . _MD_MOVETOPICTO . '</td><td class="bg1">';

        $box = '<select name="newforum" size="1">';

        $categoryHandler = xoops_getModuleHandler('category', 'newbb');

        $categories = $categoryHandler->getAllCats('access', true);

        $forums = $forumHandler->getForumsByCategory(array_keys($categories), 'post', false);

        if (count($categories) > 0 && count($forums) > 0) {
            foreach (array_keys($forums) as $key) {
                $box .= "<option value='-1'>[" . $categories[$key]->getVar('cat_title') . ']</option>';

                foreach ($forums[$key] as $forumid => $_forum) {
                    $box .= "<option value='" . $forumid . "'>-- " . $_forum['title'] . '</option>';

                    if (!isset($_forum['sub'])) {
                        continue;
                    }

                    foreach (array_keys($_forum['sub']) as $fid) {
                        $box .= "<option value='" . $fid . "'>---- " . $_forum['sub'][$fid]['title'] . '</option>';
                    }
                }
            }
        } else {
            $box .= "<option value='-1'>" . _MD_NOFORUMINDB . '</option>';
        }

        unset($forums, $categories);

        echo $box;

        echo '</select></td></tr>';
    }

    if ($mode == 'merge') {
        echo '<tr><td class="bg3">' . _MD_MERGETOPICTO . '</td><td class="bg1">';

        echo _MD_TOPIC . "ID-$topic_id -> ID: <input name='newtopic' value=''>";

        echo '</td></tr>';
    }

    echo '<tr class="bg3"><td colspan="2" align="center">';

    echo "<input type='hidden' name='mode' value='" . $action[$mode]['name'] . "'>";

    echo "<input type='hidden' name='topic_id' value='" . $topic_id . "'>";

    echo "<input type='hidden' name='forum' value='" . $forum . "'>";

    echo "<input type='submit' name='submit' value='" . $action[$mode]['submit'] . "'>";

    echo '</td></tr></form></table></td></tr></table>';
}
require XOOPS_ROOT_PATH . '/footer.php';
