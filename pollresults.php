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

require dirname(__DIR__, 2) . '/mainfile.php';
require XOOPS_ROOT_PATH . '/modules/umfrage/include/constants.php';
require_once XOOPS_ROOT_PATH . '/modules/umfrage/class/umfrage.php';
require_once XOOPS_ROOT_PATH . '/modules/umfrage/class/umfrageoption.php';
require_once XOOPS_ROOT_PATH . '/modules/umfrage/class/umfragelog.php';
require_once XOOPS_ROOT_PATH . '/modules/umfrage/class/umfragerenderer.php';

$poll_id = $_GET['poll_id'];

$poll_id = !empty($poll_id) ? intval($poll_id) : 0;
if (empty($poll_id)) {
    redirect_header('index.php', 0);

    exit();
}

$poll = new Umfrage($poll_id);

if ($poll->getVar('polltype') == 2 || $poll->getVar('polltype') == 3 && $poll->getVar(end_time) > time()) {
    redirect_header('index.php', 3, _PL_SHOW_ELECTIONSMODE);

    exit();
}

$GLOBALS['xoopsOption']['template_main'] = 'umfrage_results.html';
require XOOPS_ROOT_PATH . '/header.php';

$renderer = new UmfrageRenderer($poll);
$renderer->assignResults($xoopsTpl);

require XOOPS_ROOT_PATH . '/include/comment_view.php';

require XOOPS_ROOT_PATH . '/footer.php';
