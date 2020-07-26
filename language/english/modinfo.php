<?php declare(strict_types=1);
// $Id$
// Module Info

// The name of this module
define('_MI_POLLS_NAME', 'Polls');

// A brief description of this module
define('_MI_POLLS_DESC', 'Module for polls');

// Names of blocks for this module (Not all module has blocks)
define('_MI_POLLS_BNAME1', 'Polls');

// Names of admin menu items
define('_MI_POLLS_ADMENU1', 'List Polls');
define('_MI_POLLS_ADMENU2', 'Add Poll');

// wellwine
define('_MI_POLLS_LOOKUPHOST', 'Show hostname instead of IP address');
define('_MI_POLLS_LOOKUPHOSTDESC', 'List host names instead of IP addresses in viewing poll log. Since nslookup is used, It might take longer to show names.');

// Voting controls
define('_MI_POLLS_CONTROLBYCOOKIE', 'Prevent voting twice using cookies.');
define('_MI_POLLS_CONTROLBYCOOKIEDESC', "The browser receives a cookie on voting. While the cookie is there, the user is not allowed to vote a second time. The user will still be able to vote again anyway if he uses a different browser in the same computer, or if he clears browser's cookies.");

define('_MI_POLLS_CONTROLBYIP', 'Prevent voting twice checking IP.');
define('_MI_POLLS_CONTROLBYIPDESC', "User's IP is checked to prevent voting twice from the same IP. Please notice that if there are two different users using the same public IP, the last one won't be able to vote.");

// hyperpod
define('_MI_POLLS_ELECTION', 'Run in Election mode?');
define('_MI_POLLS_ELECTIONDESC', 'In Election Mode, only registered users can vote and results are not shown.');
