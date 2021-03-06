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

require __DIR__ . '/header.php';

require_once XOOPS_ROOT_PATH . '/modules/umfrage/include/constants.php';
require_once XOOPS_ROOT_PATH . '/modules/umfrage/class/umfrage.php';
require_once XOOPS_ROOT_PATH . '/modules/umfrage/class/umfrageoption.php';
require_once XOOPS_ROOT_PATH . '/modules/umfrage/class/umfragelog.php';
require_once XOOPS_ROOT_PATH . '/modules/umfrage/class/umfragerenderer.php';

if (!empty($_POST['poll_id'])) {
    $poll_id = (int)$_POST['poll_id'];
} elseif (!empty($_GET['poll_id'])) {
    $poll_id = (int)$_GET['poll_id'];
}
if (!empty($_POST['topic_id'])) {
    $topic_id = (int)$_POST['topic_id'];
} elseif (!empty($_GET['topic_id'])) {
    $topic_id = (int)$_GET['topic_id'];
}
if (!empty($_POST['forum'])) {
    $forum = (int)$_POST['forum'];
} elseif (!empty($_GET['forum'])) {
    $forum = (int)$_GET['forum'];
}

$topicHandler = xoops_getModuleHandler('topic', 'newbb');
$topic_obj    = $topicHandler->get($topic_id);
if (!$topicHandler->getPermission($topic_obj->getVar('forum_id'), $topic_obj->getVar('topic_status'), 'vote')) {
    redirect_header('javascript:history.go(-1);', 2, _NOPERM);
}

if (!empty($_POST['option_id'])) {
    $mail_author = false;

    $poll = new Umfrage($poll_id);

    if (is_object($xoopsUser)) {
        if (UmfrageLog::hasVoted($poll_id, $_SERVER['REMOTE_ADDR'], $xoopsUser->getVar('uid'))) {
            $msg = _PL_ALREADYVOTED;

            setcookie("bb_polls[$poll_id]", 1);
        } else {
            $poll->vote($_POST['option_id'], '', $xoopsUser->getVar('uid'));

            $poll->updateCount();

            $msg = _PL_THANKSFORVOTE;

            setcookie("bb_polls[$poll_id]", 1);
        }
    } else {
        if (UmfrageLog::hasVoted($poll_id, $_SERVER['REMOTE_ADDR'])) {
            $msg = _PL_ALREADYVOTED;

            setcookie("bb_polls[$poll_id]", 1);
        } else {
            $poll->vote($_POST['option_id'], $_SERVER['REMOTE_ADDR']);

            $poll->updateCount();

            $msg = _PL_THANKSFORVOTE;

            setcookie("bb_polls[$poll_id]", 1);
        }
    }

    redirect_header("viewtopic.php?topic_id=$topic_id&amp;forum=$forum&amp;poll_id=$poll_id&amp;pollresult=1", 1, $msg);

    exit();
}
redirect_header("viewtopic.php?topic_id=$topic_id&amp;forum=$forum", 1, 'You must choose an option !!');
