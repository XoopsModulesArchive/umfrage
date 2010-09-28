$Id: README.TXT 26 2010-03-24 10:48:00Z nachenko $

Name:        umfrage
Version:     1.1
Author:      Wolfgang Murth (LupusC), changes to 1.0.5 by JoAT and changes to 1.1 by Ignacio Segura (Nachenko) and Juan Calzado (debianus)
Xoops:       2.0.x, 2.3.x
ImpressCMS:  1.0, 1.1.x, 1.2.x
sourceforge: http://sourceforge.net/projects/umfrage

======================================================================
NEW IN 1.1
Now the module can notify by email to a voter that his vote has been collected.
We can also limit the number of selected options for a multiple choice poll. For example, in a multiple choice poll with ten options, we can put a limit of three, so people can only mark three options at most of those ten.
Besides that, the voting control by Cookie and IP are now optional and configured in the module's Preferences dialog. This was required for the module to work in a net with proxies.
-----
Ignacio Segura (Nachenko) and Juan Calzado (debianus)

NEW IN 1.0.5
Since many hosting turned off 
register_long_arrays = 0
in php.ini for reduce overhead with duplicated superglobals like $HTTP_*_VARS 
which are anyway deprecated by PHP, I change all those superglobals to 
appropriate equivalents of $_SERVER, $_GET, $_POST, etc.
Also, I include to package Russian language. (UTF-8 no BOM)

------
JoAT


NEW IN 1.0.4
 Only bugfixes


NEW IN 1.0.3:
 In the directory _hack_cbb are the files for CBB 3.08 to use umfrage
with that module. Simply copy the files into the newbb directory of 
your installation. It's important that you exchange your newbb_poll_results.html
with the included file, because for the handling of the blind votes.
======================================================================

 This Xoops module is an enhancement of xoopspoll and the Blind Voting
supplement, where the result of the vote is not shown.

Why a new module?
 The reasons for a new module where
* No official enhancement of xoopspoll
* Existing hack from GibaPhp with Version 1.23
Any kind of own versioning would lead to a confusion between three different
modules. So the decision was to create a new module name.

Why a german name for the module?
 Why not? This will differentiate this module from other polls modules

Why new functions?
 During test of xoopspoll with the blind voting it was soon clear that the
blind voting has to be implemented for each poll and not globally.
 In addition it was confusing, that many links and buttons will result in
actions that the user may not allowed. this is when the user has already
voted or has not the rights for that action.
 These were the main reasons for modificating xoopspoll.
 GibaPhp made an enhancement, to forbid the multiple voting from an IP
address. This has not been implemented due to the fact that many users have
dynamic IP's and that could lead into a situation where different users
could have the same IP and will not be allowed for voting.

What are the new features?
* Three different voting types
   - Normal voting, preliminary and final result always visible
   - Blind voting, preliminary and final result not visible
   - Blind voting, preliminary result not visible and final result visible
* Only hyperlinks that result in an allowed action are visible
* Only buttons that result in an allowed action are visible
* Presentation of the block is changeable via CSS
   - #pollheader (Question of the poll)
   - .polleven   (even rows of options)
   - .pollodd    (odd rows of options )
   - .pollfooter (footer of the poll)
* Text changes in the Block
   - When a poll is not over, the bottons and links to the current result are
      named "Current Standings"
   - When a poll is over, the bottons and links to current result are named 
      "Final Result"
* If the poll owner gets a mail at the end of the poll the final result is
   included in the mail.
* The generation of the poll owner after the end of the poll is done when the
   summaries of the polls are shown.
* Optional removal of polls at the end of the vote from the front block
* End time of poll can be shown in the front block
* When creating or editing polls, the title can be entered in a textarea
* When creating or editing polls, the description is no longer mandatory
* Reworking of the templates
* support of CBB 3.08
   
What's about further development?
 A good question, that cannot be answered definately right now. Such a module
depends also from the user feedback
 Currently the result of the vote is used directly from the SQL table
umfrage_option and not calculated from the logs. A possible enhancement could
be the recalculation of the votes from the logs

How can I move from xoopspoll to umfrage?
 At first you have to make a backup of your Xoops database. Then install 
umfrage and export the records from the xoopspolltables with phpmyadmin.
Take care that you only export the data with the option "complete inserts".
Then change the table names in the exported file and use this file for
importing the records into umfrage.

Bugs, Requests and so on
 For bug reporting or feature request please use sourceforge. The link to the
project is at the top of the page.
