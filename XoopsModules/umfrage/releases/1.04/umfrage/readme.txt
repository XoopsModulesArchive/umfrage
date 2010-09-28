$Id: readme.txt 26 2007-11-26 16:27:52Z LupusC $

Name:        umfrage
Version:     1.0.4
Author:      Wolfgang Murth (LupusC)
Xoops:       2.0.x
sourceforge: http://sourceforge.net/projects/umfrage

======================================================================
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
