<?php declare(strict_types=1);
// $Id$
if (defined('MAIN_DEFINED')) {
    return;
}
define('MAIN_DEFINED', true);

define('_MD_ERROR', 'Fehler');
define('_MD_NOPOSTS', 'Keine Beitr&auml;ge');
define('_MD_GO', 'Los');
define('_MD_SELFORUM', 'Forum w&auml;hlen');

define('_MD_THIS_FILE_WAS_ATTACHED_TO_THIS_POST', 'Angeh&auml;ngte Datei:');
define('_MD_ALLOWED_EXTENSIONS', 'Erlaubte Endungen');
define('_MD_MAX_FILESIZE', 'Maximale Dateigr&ouml;&szlig;e');
define('_MD_ATTACHMENT', 'Datei anh&auml;ngen');
define('_MD_FILESIZE', 'Gr&ouml;&szlig;e');
define('_MD_HITS', 'Hits');
define('_MD_GROUPS', 'Gruppen:');
define('_MD_DEL_ONE', 'Nur diesen Beitrag l&ouml;schen');
define('_MD_DEL_RELATED', 'Alle Beitr&auml;ge zu diesen Thema l&ouml;schen');
define('_MD_MARK_ALL_FORUMS', 'Alle Foren markieren als');
define('_MD_MARK_ALL_TOPICS', 'Alle Themen markieren als');
define('_MD_MARK_UNREAD', 'ungelesen');
define('_MD_MARK_READ', 'gelesen');
define('_MD_ALL_FORUM_MARKED', 'Alle Foren markiert als');
define('_MD_ALL_TOPIC_MARKED', 'Alle Themen markiert als');
define('_MD_BOARD_DISCLAIMER', 'Forum Beschreibung');

//index.php
define('_MD_ADMINCP', 'Admin Bereich');
define('_MD_FORUM', 'Forum');
define('_MD_WELCOME', '%s - Forum');
define('_MD_TOPICS', 'Themen');
define('_MD_POSTS', 'Beitr&auml;ge');
define('_MD_LASTPOST', 'Letzter Beitrag');
define('_MD_MODERATOR', 'Moderator(en)');
define('_MD_NEWPOSTS', 'Neue Beitr&auml;ge');
define('_MD_NONEWPOSTS', 'Keine neuen Beitr&auml;ge');
define('_MD_PRIVATEFORUM', 'Inaktives Forum');
define('_MD_BY', 'von'); // Posted by
define('_MD_TOSTART', 'Um Beitr&auml;ge zu lesen, einen Forenbereich ausw&auml;hlen.');
define('_MD_TOTALTOPICSC', 'Themen insgesamt: ');
define('_MD_TOTALPOSTSC', 'Beitr&auml;ge insgesamt: ');
define('_MD_TOTALUSER', 'Benutzer insgesamt: ');
define('_MD_TIMENOW', 'Aktuell: %s');
define('_MD_LASTVISIT', 'Letzter Besuch: %s');
define('_MD_ADVSEARCH', 'Erweiterte Suche');
define('_MD_POSTEDON', 'Geschrieben am: ');
define('_MD_SUBJECT', 'Thema: ');
define('_MD_INACTIVEFORUM_NEWPOSTS', 'Inaktives Forum mit neuen Beitr&auml;gen');
define('_MD_INACTIVEFORUM_NONEWPOSTS', 'Inaktives Forum ohne neue Beitr&auml;ge');
define('_MD_SUBFORUMS', 'Unterforen');
define('_MD_MAINFORUMOPT', 'Hauptoptionen');
define('_MD_PENDING_POSTS_FOR_AUTH', 'Auf Freigabe wartende Beitr&auml;ge:');

//page_header.php
define('_MD_MODERATEDBY', 'Moderiert von');
define('_MD_SEARCH', 'Im Forum suchen');
//define('_MD_SEARCHRESULTS','Search Results');
define('_MD_FORUMINDEX', '%s Foren&uuml;bersicht');
define('_MD_POSTNEW', 'Neuen Beitrag schreiben');
define('_MD_REGTOPOST', 'Bitte erst registrieren. Danach ist es m&ouml;glich Beitr&auml;ge zu schreiben.');

//search.php
define('_MD_SEARCHALLFORUMS', 'Suche in allen Foren');
define('_MD_FORUMC', 'Forum:');
define('_MD_AUTHORC', 'Autor:');
define('_MD_SORTBY', 'Sortiert nach:');
define('_MD_DATE', 'Datum');
define('_MD_TOPIC', 'Thema');
define('_MD_POST2', 'Post');
define('_MD_USERNAME', 'Benutzername');
define('_MD_BODY', 'Beitragstext');
define('_MD_SINCE', 'Seit');

//viewforum.php
define('_MD_REPLIES', 'Antworten');
define('_MD_POSTER', 'Autor');
define('_MD_VIEWS', 'Gelesen');
define('_MD_MORETHAN', 'Neue Beitr&auml;ge [Popul&auml;r]');
define('_MD_MORETHAN2', 'Keine neuen Beitr&auml;ge [Popul&auml;r]');
define('_MD_TOPICSHASATT', 'Thema hat Anh&auml;nge');
define('_MD_TOPICHASPOLL', 'Thema hat eine Umfrage');
define('_MD_TOPICLOCKED', 'Thema geschlossen');
define('_MD_LEGEND', 'Legende');
define('_MD_NEXTPAGE', 'N&auml;chste Seite');
define('_MD_SORTEDBY', 'Sortiert nach');
define('_MD_TOPICTITLE', 'Thementitel');
define('_MD_NUMBERREPLIES', 'Anzahl der Antworten');
define('_MD_TOPICPOSTER', 'Themenautor');
define('_MD_TOPICTIME', 'Ver&ouml;ffentlicht');
define('_MD_LASTPOSTTIME', 'Letzter Beitrag um');
define('_MD_ASCENDING', 'Aufsteigende Reihenfolge');
define('_MD_DESCENDING', 'Absteigende Reihenfolge');
define('_MD_FROMLASTHOURS', 'Innerhalb der letzten %s Stunden');
define('_MD_FROMLASTDAYS', 'In den letzten %s Tagen');
define('_MD_THELASTYEAR', 'Im letzten Jahr');
define('_MD_BEGINNING', 'Seit Er&ouml;ffnung des Forums');
define('_MD_SEARCHTHISFORUM', 'Durchsuche dieses Forum');
define('_MD_TOPIC_SUBJECTC', 'Themenpr&auml;fix:');

define('_MD_RATINGS', 'Bewertungen');
define('_MD_CAN_ACCESS', '<b>Erlaubt</b>, dieses Forum zu betreten.<br>');
define('_MD_CANNOT_ACCESS', '<b>Nicht erlaubt</b>, dieses Forum zu betreten.<br>');
define('_MD_CAN_POST', '<b>Erlaubt</b>, ein neues Thema zu erstellen.<br>');
define('_MD_CANNOT_POST', '<b>Nicht erlaubt</b>, ein neues Thema zu erstellen.<br>');
define('_MD_CAN_VIEW', '<b>Erlaubt</b>, Themen anzuschauen.<br>');
define('_MD_CANNOT_VIEW', '<b>Nicht erlaubt</b>, Themen anzuschauen.<br>');
define('_MD_CAN_REPLY', '<b>Erlaubt</b>, auf Beitr&auml;ge zu antworten.<br>');
define('_MD_CANNOT_REPLY', '<b>Nicht erlaubt</b>, auf Beitr&auml;ge zu antworten.<br>');
define('_MD_CAN_EDIT', '<b>Erlaubt</b>, Beitr&auml;ge zu editieren.<br>');
define('_MD_CANNOT_EDIT', '<b>Nicht erlaubt</b>, Beitr&auml;ge zu editieren.<br>');
define('_MD_CAN_DELETE', '<b>Erlaubt</b>, Beitr&auml;ge zu l&ouml;schen.<br>');
define('_MD_CANNOT_DELETE', '<b>Nicht erlaubt</b>, Beitr&auml;ge zu l&ouml;schen.<br>');
define('_MD_CAN_ADDPOLL', '<b>Erlaubt</b>, neue Umfragen zu erstellen.<br>');
define('_MD_CANNOT_ADDPOLL', '<b>Nicht erlaubt</b>, Umfragen zu erstellen.<br>');
define('_MD_CAN_VOTE', '<b>Erlaubt</b>, in Umfragen abzustimmen.<br>');
define('_MD_CANNOT_VOTE', '<b>Nicht erlaubt</b>, in Umfragen abzustimmen.<br>');
define('_MD_CAN_ATTACH', '<b>Erlaubt</b>, Dateien hoch zu laden.<br>');
define('_MD_CANNOT_ATTACH', '<b>Nicht erlaubt</b>, Dateien hoch zu laden.<br>');
define('_MD_CAN_NOAPPROVE', '<b>Erlaubt</b>, Beitr&auml;ge ohne Pr&uuml;fung zu schreiben.<br>');
define('_MD_CANNOT_NOAPPROVE', '<b>Nicht erlaubt</b>, Beitr&auml;ge ohne Pr&uuml;fung zu schreiben.<br>');
define('_MD_IMTOPICS', 'Wichtige Themen');
define('_MD_NOTIMTOPICS', 'Forumthemen');
define('_MD_FORUMOPTION', 'Forumoptionen');

define('_MD_VAUP', 'Zeige alle unbeantworteten Beitr&auml;ge');
define('_MD_VANP', 'Zeige alle neuen Beitr&auml;ge');

define('_MD_UNREPLIED', 'unbeantwortete Themen');
define('_MD_UNREAD', 'ungelesene Themen');
define('_MD_ALL', 'alle Themen');
define('_MD_ALLPOSTS', 'alle Beitr&auml;ge');
define('_MD_VIEW', 'Zeige');

//viewtopic.php
define('_MD_AUTHOR', 'Autor');
define('_MD_LOCKTOPIC', 'Thema schliessen');
define('_MD_UNLOCKTOPIC', 'Thema &ouml;ffnen');
define('_MD_UNSTICKYTOPIC', 'Thema entpinnen');
define('_MD_STICKYTOPIC', 'Thema pinnen');
define('_MD_DIGESTTOPIC', 'Thema als Digest');
define('_MD_UNDIGESTTOPIC', 'Thema nicht als Digest');
define('_MD_MERGETOPIC', 'Thema verbinden');
define('_MD_MOVETOPIC', 'Thema verschieben');
define('_MD_DELETETOPIC', 'Thema l&ouml;schen');
define('_MD_TOP', 'Nach oben');
define('_MD_BOTTOM', 'Nach unten');
define('_MD_PREVTOPIC', 'Vorheriges Thema');
define('_MD_NEXTTOPIC', 'N&auml;chstes Thema');
define('_MD_GROUP', 'Gruppe:');
define('_MD_QUICKREPLY', 'Schnellantwort');
define('_MD_POSTREPLY', 'Antworte');
define('_MD_PRINTTOPICS', 'Thema drucken');
define('_MD_PRINT', 'Drucke');
define('_MD_REPORT', 'Melden');
define('_MD_PM', 'PN');
define('_MD_EMAIL', 'Email');
define('_MD_WWW', 'www');
define('_MD_AIM', 'AIM');
define('_MD_YIM', 'YIM');
define('_MD_MSNM', 'MSNM');
define('_MD_ICQ', 'ICQ');
define('_MD_PRINT_TOPIC_LINK', 'URL f&uuml;r dieses Thema');
define('_MD_ADDTOLIST', 'Zur Kontaktliste hinzuf&uuml;gen');
define('_MD_TOPICOPT', 'Themenoptionen');
define('_MD_VIEWMODE', 'Anzeigemodus');
define('_MD_NEWEST', 'Aktuelleste zuerst');
define('_MD_OLDEST', '&Auml;lteste zuerst');

define('_MD_FORUMSEARCH', 'Forum durchsuchen');

define('_MD_RATED', 'Bewertung:');
define('_MD_RATE', 'Themenbewertung');
define('_MD_RATEDESC', 'Dieses Thema bewerten');
define('_MD_RATING', 'Jetzt bewerten');
define('_MD_RATE1', 'Sehr schlecht');
define('_MD_RATE2', 'Schlecht');
define('_MD_RATE3', 'Mittel');
define('_MD_RATE4', 'Gut');
define('_MD_RATE5', 'Sehr gut');

define('_MD_TOPICOPTION', 'Themenoptionen');
define('_MD_KARMA_REQUIREMENT', 'Das pers&ouml;nliche Karma %s ist nicht ausreichend f&uuml;r das ben&ouml;tigte Karma von %s. <br> Bitte sp&auml;ter nochmals versuchen.');
define('_MD_REPLY_REQUIREMENT', 'Um diesen Beitrag lesen zu k&ouml;nnen, bitte einloggen und eine Antwort erstellen.');
define('_MD_TOPICOPTIONADMIN', 'Thema Admin Optionen');
define('_MD_POLLOPTIONADMIN', 'Umfrage Admin Optionen');

define('_MD_EDITPOLL', 'Umfrage bearbeiten');
define('_MD_DELETEPOLL', 'Umfrage l&ouml;schen');
define('_MD_RESTARTPOLL', 'Umfrage neu starten');
define('_MD_ADDPOLL', 'Umfrage hinzuf&uuml;gen');

define('_MD_QUICKREPLY_EMPTY', 'Eingabebereich f&uuml;r die Schnellantwort');

define('_MD_LEVEL', 'Level:');
define('_MD_HP', 'HP:');
define('_MD_MP', 'MP:');
define('_MD_EXP', 'EXP:');

define('_MD_BROWSING', 'Leser in diesem Thema:');
define('_MD_POSTTONEWS', 'Diesen Beitrag als News ver&ouml;ffentlichen');

define('_MD_EXCEEDTHREADVIEW', 'Anzahl der Beitr&auml;ge &uuml;bersteigt das Maximum f&uuml;r diese Ansicht, <br>bitte zur flachen Ansicht wechseln.');

//forumform.inc
define('_MD_PRIVATE', 'Dies ist ein <b>privates</b> Forum. Nur Mitglieder mit besonderen Rechten k&ouml;nnen in diesem Forum Themen starten und Antworten schreiben');
define('_MD_QUOTE', 'Zitat');
define('_MD_VIEW_REQUIRE', 'Anforderungen zeigen');
define('_MD_REQUIRE_KARMA', 'Karma');
define('_MD_REQUIRE_REPLY', 'Antworten');
define('_MD_REQUIRE_NULL', 'Keine Anforderungen');

define('_MD_SELECT_FORMTYPE', 'Bevorzugten Editor w&auml;hlen');

define('_MD_FORM_COMPACT', 'Kompakt');
define('_MD_FORM_DHTML', 'DHTML');
define('_MD_FORM_SPAW', 'Spaw Editor');
define('_MD_FORM_HTMLAREA', 'HTMLArea');
define('_MD_FORM_FCK', 'FCK Editor');
define('_MD_FORM_KOIVI', 'Koivi Editor');
define('_MD_FORM_TINYMCE', 'TinyMCE Editor');

// ERROR messages
define('_MD_ERRORFORUM', 'Fehler, kein Forum ausgew&auml;hlt!');
define('_MD_ERRORPOST', 'Fehler, kein Beitrag ausgew&auml;hlt!');
define('_MD_NORIGHTTOVIEW', 'Keine Rechte um dieses Thema zu lesen.');
define('_MD_NORIGHTTOPOST', 'Keine Rechte um in diesem Forum zu schreiben.');
define('_MD_NORIGHTTOEDIT', 'Keine Rechte um in diesem Forum zu editieren.');
define('_MD_NORIGHTTOREPLY', 'Keine Rechte um in diesem Forum zu antworten.');
define('_MD_NORIGHTTOACCESS', 'Keine Rechte dieses Forum zu betreten.');
define('_MD_ERRORTOPIC', 'Fehler, kein Thema ausgew&auml;hlt!');
define('_MD_ERRORCONNECT', 'Fehler, konnte Datenbank nicht erreichen.');
define('_MD_ERROREXIST', 'Fehler, das Forum welches ausgew&auml;hlt wurde existiert nicht. Bitte zur&uuml;ck und erneut versuchen.');
define('_MD_ERROROCCURED', 'Ein Fehler ist aufgetreten.');
define('_MD_COULDNOTQUERY', 'Konnte Datenbank nicht erreichen.');
define('_MD_FORUMNOEXIST', 'Fehler, das Forum oder Thema welches ausgew&auml;hlt wurde existiert nicht. Bitte zur&uuml;ck und erneut versuchen.');
define('_MD_USERNOEXIST', 'Dieser Benutzer existiert nicht. Bitte zur&uuml;ck und erneut versuchen.');
define('_MD_COULDNOTREMOVE', 'Fehler, der Beitrag konnte nicht in der Datenbank gel&ouml;scht werden!');
define('_MD_COULDNOTREMOVETXT', 'Fehler, konnte den Beitragstext nicht l&ouml;schen!');
define('_MD_TIMEISUP', 'Das vorgegebene Zeitlimit zum &auml;ndern eines Beitrags wurde &uuml;berschritten.');
define('_MD_TIMEISUPDEL', 'Das vorgegebene Zeitlimit zum l&ouml;schen eines Beitrags wurde &uuml;berschritten.');

//reply.php
define('_MD_ON', 'am'); //Posted on
define('_MD_USERWROTE', '%s schrieb:'); // %s is username
define('_MD_RE', 'Re');

//post.php
define('_MD_EDITNOTALLOWED', 'Nicht erlaubt, diesen Beitrag zu editieren.');
define('_MD_EDITEDBY', 'Bearbeitet von ');
define('_MD_ANONNOTALLOWED', 'G&auml;sten ist es nicht gestattet Beitr&auml;ge zu ver&ouml;ffentlichen. Bitte registrieren, um sich aktiv in diesem Thema zu beteiligen.');
define('_MD_THANKSSUBMIT', 'Danke f&uuml;r den Beitrag.');
define('_MD_REPLYPOSTED', 'Eine Antwort auf einen Beitrag wurde verfasst.');
define('_MD_HELLO', 'Hallo %s,');
define('_MD_URRECEIVING', 'Diese E-Mail wurde gesendet, weil eine Antwort auf dem %s Forum zu einem Beitrag verfasst wurde.'); // %s is your site name
define('_MD_CLICKBELOW', 'Der Beitrag befindet sich unter folgender URL:');
define('_MD_WAITFORAPPROVAL', 'Danke f&uuml;r den Beitrag. Der Beitrag wird gepr&uuml;ft, bevor dieser ver&ouml;ffentlicht wird.');
define('_MD_POSTING_LIMITED', 'In diesem Forum ist eine Spamsperre aktiviert, bitte in %d Sekunden erneut versuchen.');

//forumform.inc
define('_MD_NAMEMAIL', 'Name/Email:');
define('_MD_LOGOUT', 'Abmelden');
define('_MD_REGISTER', 'Registrieren');
define('_MD_SUBJECTC', 'Titel:');
define('_MD_MESSAGEICON', 'Beitragssymbol:');
define('_MD_MESSAGEC', 'Beitragstext:');
define('_MD_ALLOWEDHTML', 'Erlaubte HTML-Tags:');
define('_MD_OPTIONS', 'Optionen:');
define('_MD_POSTANONLY', 'Anonym ver&ouml;ffentlichen');
define('_MD_DOSMILEY', 'Smilies aktivieren');
define('_MD_DOXCODE', 'XOOPS-Code aktivieren');
define('_MD_DOBR', 'Zeilenvorschub einschalten (Ausschalten, wenn HTML eingeschaltet ist)');
define('_MD_DOHTML', 'HTML aktivieren');
define('_MD_NEWPOSTNOTIFY', 'Benachrichtigen bei neuen Beitr&auml;gen in diesem Thema');
define('_MD_ATTACHSIG', 'Signatur anh&auml;ngen');
define('_MD_POST', 'Ver&ouml;ffentlichen');
define('_MD_SUBMIT', 'Abschicken');
define('_MD_CANCELPOST', 'Ver&ouml;ffentlichung abbrechen');
define('_MD_REMOVE', 'L&ouml;schen');
define('_MD_UPLOAD', 'Hochladen');

// forumuserpost.php
define('_MD_ADD', 'Hinzuf&uuml;gen');
define('_MD_REPLY', 'Antworten');

// topicmanager.php
define('_MD_VIEWTHETOPIC', 'Thema anschauen');
define('_MD_RETURNTOTHEFORUM', 'Zur&uuml;ck zum Forum');
define('_MD_RETURNFORUMINDEX', 'Zur&uuml;ck zum Forenindex');
define('_MD_ERROR_BACK', 'Fehler, bitte zur&uuml;ck und erneut versuchen.');
define('_MD_GOTONEWFORUM', 'Anschauen des aktualisierten Themas');

define('_MD_TOPICDELETE', 'Thema wurde gel&ouml;scht.');
define('_MD_TOPICMERGE', 'Thema wurde verbunden.');
define('_MD_TOPICMOVE', 'Thema wurde verschoben');
define('_MD_TOPICLOCK', 'Thema wurde geschlossen');
define('_MD_TOPICUNLOCK', 'Thema wurde ge&ouml;ffnet');
define('_MD_TOPICSTICKY', 'Thema wurde gepinnt');
define('_MD_TOPICUNSTICKY', 'Thema wurde entpinnt');
define('_MD_TOPICDIGEST', 'Thema wurde zusammengefasst');
define('_MD_TOPICUNDIGEST', 'Zusammenfassung des Themas wurde aufgehoben.');

define('_MD_DELETE', 'L&ouml;schen');
define('_MD_MOVE', 'Verschieben');
define('_MD_MERGE', 'Verbinden');
define('_MD_LOCK', 'Sperren');
define('_MD_UNLOCK', 'Entsperren');
define('_MD_STICKY', 'Pinnen');
define('_MD_UNSTICKY', 'Entpinnen');
define('_MD_DIGEST', 'Digest');
define('_MD_UNDIGEST', 'Digest aufheben');

define('_MD_DESC_DELETE', 'Wirklich das Thema und alle damit verbundenen Beitr&auml;ge <b>endg&uuml;ltig l&ouml;schen?</b>');
define('_MD_DESC_MOVE', 'Sicher, das Thema und alle damit verbundenen Beitr&auml;ge in das ausgew&auml;hlte Forum zu verschieben.');
define('_MD_DESC_MERGE', 'Sicher, das Thema und alle damit verbundenen Beitr&auml;ge mit dem ausgew&auml;hlten Thema zu verbinden.<br><strong>Die ID des Zielthemas muss kleiner sein, als die des zu verbindenden Themas</strong>.');
define('_MD_DESC_LOCK', 'Sicher, das ausgew&auml;hlte Thema zu sperren? Es kann es zu einem sp&auml;teren Zeitpunkt wieder entsperrt werden.');
define('_MD_DESC_UNLOCK', 'Sicher, das ausgew&auml;hlte Thema zu entsperren? Es kann zu einem sp&auml;teren Zeitpunkt wieder gesperrt werden.');
define('_MD_DESC_STICKY', 'Sicher, das ausgew&auml;hlte Thema zu pinnen? Dies kann zu einem sp&auml;teren Zeitpunkt wieder aufgehoben werden.');
define('_MD_DESC_UNSTICKY', 'Sicher, die Markierung (gepinnt) des ausgew&auml;hlten Themas wieder aufzugeheben? Es kann zu einem sp&auml;teren Zeitpunkt wieder markiert (gepinnt) werden.');
define('_MD_DESC_DIGEST', 'Sicher, das ausgew&auml;hlte Thema zusammenzufassen? Die Zusammenfassung kann zu einem sp&auml;teren Zeitpunkt wieder aufgehoben werden.');
define('_MD_DESC_UNDIGEST', 'Sicher, die Zusammenfassung des ausgew&auml;hlten Themas wieder aufzugeheben? Das Thema kann zu einem sp&auml;teren Zeitpunkt wieder zusammengefasst werden.');

define('_MD_MERGETOPICTO', 'Verbinde Thema mit:');
define('_MD_MOVETOPICTO', 'Verschiebe Thema nach:');
define('_MD_NOFORUMINDB', 'Es ist kein Forum in der Datenbank vorhanden.');

// delete.php
define('_MD_DELNOTALLOWED', 'Keine Rechte vorhanden um diesen Beitrag zu l&ouml;schen.');
define('_MD_AREUSUREDEL', 'Wirklich sicher, dass dieser Beitrag und alle damit verbundenen Antworten gel&ouml;scht werden soll?');
define('_MD_POSTSDELETED', 'Ausgew&auml;hlter Beitrag und die damit verbundenen Antworten wurden erfolgreich gel&ouml;scht.');
define('_MD_POSTDELETED', 'Ausgew&auml;hlter Beitrag wurde gel&ouml;scht.');

// definitions moved from global.
define('_MD_THREAD', 'Diskussion');
define('_MD_FROM', 'Aus:');
define('_MD_JOINED', 'Registriert seit');
define('_MD_ONLINE', 'Online');
define('_MD_OFFLINE', 'Offline');
define('_MD_FLAT', 'Flach');

// online.php
define('_MD_USERS_ONLINE', 'Besucher online:');
define('_MD_ANONYMOUS_USERS', 'Anonyme(r)');
define('_MD_REGISTERED_USERS', 'Mitglied(er): ');
define('_MD_BROWSING_FORUM', 'Besucher sind im Forum');
define('_MD_TOTAL_ONLINE', 'Insgesamt %d Besucher online.');
define('_MD_ADMINISTRATOR', 'Administrator');

define('_MD_NO_SUCH_FILE', 'Datei existiert nicht!');
define('_MD_ERROR_UPATEATTACHMENT', 'Ein Fehler ist beim Aktualisieren der Dateianh&auml;nge aufgetreten');

// ratethread.php
define('_MD_CANTVOTEOWN', 'Es darf nicht f&uuml;r die eigenen Themen abgestimmt werden..<br>Alle Stimmen werden aufgezeichnet und &uuml;berpr&uuml;ft.');
define('_MD_VOTEONCE', 'Bitte nicht mehrfach für das gleiche Thema abstimmen.');
define('_MD_VOTEAPPRE', 'Ihre Bewertung ist willkommen.');
define('_MD_THANKYOU', 'Danke, f&uuml;r den Zeitaufwand auf %s abzustimmen.'); // %s is your site name
define('_MD_VOTES', 'Stimmen');
define('_MD_NOVOTERATE', 'Dieses Thema noch nicht bewertet.');

// polls.php
define('_MD_POLL_DBUPDATED', 'Datenbank wurde erfolgreich aktualisiert!');
define('_MD_POLL_POLLCONF', 'Umfragekonfiguration');
define('_MD_POLL_POLLSLIST', 'Umfragenliste');
define('_MD_POLL_AUTHOR', 'Autor dieser Umfrage');
define('_MD_POLL_DISPLAYBLOCK', 'Im Block anzeigen?');
define('_MD_POLL_POLLQUESTION', 'Umfragetitel');
define('_MD_POLL_VOTERS', 'Insgesamt haben abgestimmt');
define('_MD_POLL_VOTES', 'Stimmen insgesamt');
define('_MD_POLL_EXPIRATION', 'Ablaufdatum');
define('_MD_POLL_EXPIRED', 'Abgelaufen');
define('_MD_POLL_VIEWLOG', 'Logs anzeigen');
define('_MD_POLL_CREATNEWPOLL', 'Neue Umfrage erstellen');
define('_MD_POLL_POLLDESC', 'Umfragebeschreibung');
define('_MD_POLL_DISPLAYORDER', 'Position');
define('_MD_POLL_ALLOWMULTI', 'Darf mehr als eine Stimme abgegeben werden?');
define('_MD_POLL_NOTIFY', 'Den Umfrageautor nach Ablauf der Umfrage benachrichtigen?');
define('_MD_POLL_POLLOPTIONS', 'Optionen');
define('_MD_POLL_EDITPOLL', 'Umfrage bearbeiten');
define('_MD_POLL_FORMAT', 'Format: yyyy-mm-dd hh:mm:ss');
define('_MD_POLL_CURRENTTIME', 'Aktuelle Uhrzeit ist %s');
define('_MD_POLL_EXPIREDAT', 'Abgelaufen am %s');
define('_MD_POLL_RESTART', 'Diese Umfrage neu starten');
define('_MD_POLL_ADDMORE', 'Mehr Optionen hinzuf&uuml;gen');
define('_MD_POLL_RUSUREDEL', 'Sicher das diese Abstimmung und alle damit verbundenen Kommentare gel&ouml;scht werden sollen?');
define('_MD_POLL_RESTARTPOLL', 'Umfrage neu starten');
define('_MD_POLL_RESET', 'Neustarten der Logs f&uuml;r diese Umfrage?');
define('_MD_POLL_ADDPOLL', 'Umfrage hinzuf&uuml;gen');
define('_MD_POLLMODULE_ERROR', 'Xoops umfrage Modul steht nicht zur Verf&uuml;gung');

//report.php
define('_MD_REPORTED', 'Danke f&uuml;r die Meldung dieses Beitrags/Themas! Ein Moderator wird sich in K&uuml;rze dieser Meldung annehmen.');
define('_MD_REPORT_ERROR', 'Ein Fehler ist aufgetreten beim Versenden der Meldung.');
define('_MD_REPORT_TEXT', 'Meldungstext:');

define('_MD_PDF', 'Erstelle PDF des Beitrags');
define('_MD_PDF_PAGE', 'Seite %s');

//print.php
define('_MD_COMEFROM', 'Dieser Beitrag stammt von:');

//viewpost.php
define('_MD_VIEWALLPOSTS', 'Alle Beitr&auml;ge');
define('_MD_VIEWTOPIC', 'Thema');
define('_MD_VIEWFORUM', 'Forum');

define('_MD_COMPACT', 'Kompakt');

define('_MD_MENU_SELECT', 'Men&uuml;anzeige = Auswahl');
define('_MD_MENU_HOVER', 'Men&uuml;anzeige = hover');
define('_MD_MENU_CLICK', 'Men&uuml;anzeige = klick');

define('_MD_WELCOME_SUBJECT', '%s hat das Forum zum ersten mal betreten');
define('_MD_WELCOME_MESSAGE', 'Hallo %s,<br>herzlich willkommen im Forum. An dieser Stelle nur eine kleine Anmerkung: Um die Anzahl der doppelten Eintr&auml;ge gering zu halten, ist es w&uuml;nschenswert das vorher die Forumsuche verwendet wird, bevor eine Frage gestellt wird.<br><br>');

define('_MD_VIEWNEWPOSTS', 'Neue Beitr&auml;ge zeigen');

define('_MD_INVALID_SUBMIT', 'Fehler, bitte eine Kopie des Textes anfertigen und nochmals versuchen.');

define('_MD_ACCOUNT', 'Profil');
define('_MD_NAME', 'Name');
define('_MD_PASSWORD', 'Passwort');
define('_MD_LOGIN', 'Login');

define('_MD_TRANSFER', 'Übertragung');
define('_MD_TRANSFER_DESC', 'Beitrag in eine andere Anwendung übertragen');
define('_MD_TRANSFER_DONE', 'Die Aktion ist erfolgreich abgeschlossen: %s');

define('_MD_APPROVE', 'Genehmigen');
define('_MD_RESTORE', 'Wiederherstellen');
define('_MD_SPLIT_ONE', 'Spalten');
define('_MD_SPLIT_TREE', 'Alle abghängige spalten');
define('_MD_SPLIT_ALL', 'Alle spalten');

define('_MD_TYPE_ADMIN', 'Admin');
define('_MD_TYPE_VIEW', 'Ansicht');
define('_MD_TYPE_PENDING', 'Abhängig');
define('_MD_TYPE_DELETED', 'Gelöscht');
define('_MD_TYPE_SUSPEND', 'Gesperrt');

define('_MD_DBUPDATED', 'Datenbank Update war erfolgreich!');

define('_MD_SUSPEND_SUBJECT', 'Benutzer %s ist für %d Tage gesperrt');
define('_MD_SUSPEND_TEXT', 'Benutzer %s ist für %d Tage gesperrt. Grund:<br>[quote]%s[/quote]<br><br>Die Sperrung ist bis %s gültig');
define('_MD_SUSPEND_UID', 'Benutzer ID');
define('_MD_SUSPEND_IP', 'IP Segmente (voll oder nur Segmente)');
define('_MD_SUSPEND_DURATION', 'Dauer der Sperrung (Tage)');
define('_MD_SUSPEND_DESC', 'Grund der Sperrung');
define('_MD_SUSPEND_LIST', 'Liste der Sperrung');
define('_MD_SUSPEND_START', 'Start');
define('_MD_SUSPEND_EXPIRE', 'Ende');
define('_MD_SUSPEND_SCOPE', 'Bereich');
define('_MD_SUSPEND_MANAGEMENT', 'Moderation Management');
define('_MD_SUSPEND_NOACCESS', 'Zutritt verboten. Die ID oder IP wurde gesperrt');

// !!IMPORTANT!! insert '\' before any char among reserved chars: "a","A","B","c","d","D","F","g","G","h","H","i","I","j","l","L","m","M","n","O","r","s","S","t","T","U","w","W","Y","y","z","Z"
// insert double '\' before 't','r','n'
define('_MD_TODAY', "\h\e\u\\t\e G:i:s");
define('_MD_YESTERDAY', "\g\e\s\\t\e\\r\\n G:i:s");
define('_MD_MONTHDAY', 'j/n G:i:s');
define('_MD_YEARMONTHDAY', 'Y/j/n G:i');

define('_NEWBB_SECURITY_CODE', 'Sicherheitscode eingeben');
define('_NEWBB_SECURITY_CODE_FAILED', 'Sicherheitscode falsch');

// For user info
// If you have customized userbar, define here.
require_once XOOPS_ROOT_PATH . '/modules/newbb/class/user.php';
class User_language extends User
{
    public function User_language(&$user)
    {
        $this->User($user);
    }

    public function &getUserbar()
    {
        global $xoopsModuleConfig, $xoopsUser, $isadmin;

        if (empty($xoopsModuleConfig['userbar_enabled'])) {
            return null;
        }

        $user = &$this->user;

        $userbar = [];

        $userbar[] = ['link' => XOOPS_URL . '/userinfo.php?uid=' . $user->getVar('uid'), 'name' => _PROFILE];

        if (is_object($xoopsUser)) {
            $userbar[] = ['link' => "javascript:void openWithSelfMain('" . XOOPS_URL . '/pmlite.php?send2=1&amp;to_userid=' . $user->getVar('uid') . "','pmlite', 450, 380);", 'name' => _MD_PM];
        }

        if ($user->getVar('user_viewemail') || $isadmin) {
            $userbar[] = ['link' => "javascript:void window.open('mailto:" . $user->getVar('email') . "','new');", 'name' => _MD_EMAIL];
        }

        if ($user->getVar('url')) {
            $userbar[] = ['link' => "javascript:void window.open('" . $user->getVar('url') . "','new');", 'name' => _MD_WWW];
        }

        if ($user->getVar('user_icq')) {
            $userbar[] = ['link' => "javascript:void window.open('http://wwp.icq.com/scripts/search.dll?to=" . $user->getVar('user_icq') . "','new');", 'name' => _MD_ICQ];
        }

        if ($user->getVar('user_aim')) {
            $userbar[] = ['link' => "javascript:void window.open('aim:goim?screenname=" . $user->getVar('user_aim') . '&amp;message=Hi+' . $user->getVar('user_aim') . '+Are+you+there?' . "','new');", 'name' => _MD_AIM];
        }

        if ($user->getVar('user_yim')) {
            $userbar[] = ['link' => "javascript:void window.open('http://edit.yahoo.com/config/send_webmesg?.target=" . $user->getVar('user_yim') . '&.src=pg' . "','new');", 'name' => _MD_YIM];
        }

        if ($user->getVar('user_msnm')) {
            $userbar[] = ['link' => "javascript:void window.open('http://members.msn.com?mem=" . $user->getVar('user_msnm') . "','new');", 'name' => _MD_MSNM];
        }

        return $userbar;
    }
}
