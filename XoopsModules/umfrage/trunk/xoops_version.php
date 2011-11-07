<?php
// $Id$
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
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

$modversion['name'] = _MI_POLLS_NAME;
$modversion['version'] = "1.1";
$modversion['description'] = _MI_POLLS_DESC;
$modversion['author'] = "LupusC and changes by Nachenko, Debianus and JoAT<br/> based on the module xoopspoll of Kazumi Ono and wellwine";
$modversion['credits'] = "The XOOPS Project";
$modversion['help'] = "umfrage.html";
$modversion['license'] = "GPL see LICENSE";
$modversion['official'] = 1;
$modversion['image'] = "images/umfrage_slogo.png";
$modversion['dirname'] = "umfrage";

// Sql file (must contain sql generated by phpMyAdmin or phpPgAdmin)
// All tables should not have any prefix!
$modversion['sqlfile']['mysql'] = "sql/mysql.sql";
//$modversion['sqlfile']['postgresql'] = "sql/pgsql.sql";

// Tables created by sql file (without prefix!)
$modversion['tables'][0] = "umfrage_option";
$modversion['tables'][1] = "umfrage_desc";
$modversion['tables'][2] = "umfrage_log";

// Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin/index.php";
$modversion['adminmenu'] = "admin/menu.php";

// Config options
// wellwine
$modversion['config'][1]['name'] = 'lookuphost';
$modversion['config'][1]['title'] = '_MI_POLLS_LOOKUPHOST';
$modversion['config'][1]['description'] = '_MI_POLLS_LOOKUPHOSTDESC';
$modversion['config'][1]['formtype'] = 'yesno';
$modversion['config'][1]['valuetype'] = 'int';
$modversion['config'][1]['default'] = 0;

// ISegura.es: Control by Cookie and IP for voters. The module does it by default, but it whould be an option.
$modversion['config'][2]['name'] = 'controlbycookie';
$modversion['config'][2]['title'] = '_MI_POLLS_CONTROLBYCOOKIE';
$modversion['config'][2]['description'] = '_MI_POLLS_CONTROLBYCOOKIEDESC';
$modversion['config'][2]['formtype'] = 'yesno';
$modversion['config'][2]['valuetype'] = 'int';
$modversion['config'][2]['default'] = 1;

$modversion['config'][3]['name'] = 'controlbyip';
$modversion['config'][3]['title'] = '_MI_POLLS_CONTROLBYIP';
$modversion['config'][3]['description'] = '_MI_POLLS_CONTROLBYIPDESC';
$modversion['config'][3]['formtype'] = 'yesno';
$modversion['config'][3]['valuetype'] = 'int';
$modversion['config'][3]['default'] = 1;

$modversion['templates'][1]['file'] = 'umfrage_index.html';
$modversion['templates'][1]['description'] = '';
$modversion['templates'][2]['file'] = 'umfrage_view.html';
$modversion['templates'][2]['description'] = '';
$modversion['templates'][3]['file'] = 'umfrage_results.html';
$modversion['templates'][3]['description'] = '';

//Blocks
$modversion['blocks'][1]['file'] = "umfrage.php";
$modversion['blocks'][1]['name'] = _MI_POLLS_BNAME1;
$modversion['blocks'][1]['description'] = "Shows unlimited number of polls";
$modversion['blocks'][1]['show_func'] = "b_umfrage_show";
$modversion['blocks'][1]['edit_func'] = "b_umfrage_edit";
$modversion['blocks'][1]['template'] = 'umfrage_block_poll.html';
$modversion['blocks'][1]['options'] = '1|1|0';

// Menu
$modversion['hasMain'] = 1;

// Comments
$modversion['hasComments'] = 1;
$modversion['comments']['pageName'] = 'pollresults.php';
$modversion['comments']['itemName'] = 'poll_id';
?>