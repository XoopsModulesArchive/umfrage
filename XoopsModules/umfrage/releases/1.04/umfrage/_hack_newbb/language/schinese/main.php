<?php
// $Id$
if(defined('MAIN_DEFINED')) return;
define('MAIN_DEFINED',true);

define("_MD_ERROR","����");
define("_MD_NOPOSTS","��������");
define("_MD_GO","�鿴");
define("_MD_SELFORUM","ѡ��������");

define('_MD_THIS_FILE_WAS_ATTACHED_TO_THIS_POST','����:');
define('_MD_ALLOWED_EXTENSIONS','������ļ�����');
define('_MD_MAX_FILESIZE','������ļ���С');
define('_MD_ATTACHMENT','����');
define('_MD_FILESIZE','��С');
define('_MD_HITS','���ش���');
define('_MD_GROUPS','Ⱥ��:');
define('_MD_DEL_ONE','ֻɾ������');
define('_MD_DEL_RELATED','ɾ�������������');
define('_MD_MARK_ALL_FORUMS','���������̳Ϊ');
define('_MD_MARK_ALL_TOPICS','�����������Ϊ');
define('_MD_MARK_UNREAD','δ��');
define('_MD_MARK_READ','�Ѷ�');
define('_MD_ALL_FORUM_MARKED','������̳�ѱ��');
define('_MD_ALL_TOPIC_MARKED','���������ѱ��');
define('_MD_BOARD_DISCLAIMER','��������');


//index.php
define('_MD_ADMINCP','�������');
define('_MD_FORUM','��̳');
define('_MD_WELCOME','%s ��̳');
define("_MD_TOPICS","����");
define("_MD_POSTS","����");
define('_MD_LASTPOST','���·���');
define('_MD_MODERATOR','����');
define("_MD_NEWPOSTS","����");
define('_MD_NONEWPOSTS','������');
define('_MD_PRIVATEFORUM','�ڲ���̳');
define('_MD_BY','����'); // Posted by
define("_MD_TOSTART","ѡ����Ҫ��������������������ʺϸ��������Ļ���");
define("_MD_TOTALTOPICSC","��������: ");
define("_MD_TOTALPOSTSC","��������: ");
define('_MD_TOTALUSER','�û�����: ');
define('_MD_TIMENOW','��ǰʱ��: %s');
define('_MD_LASTVISIT','�ϴ�����: %s');
define('_MD_ADVSEARCH','�߼�����');
define('_MD_POSTEDON','');
define('_MD_SUBJECT','����');
define('_MD_INACTIVEFORUM_NEWPOSTS','�ѹرգ���������');
define('_MD_INACTIVEFORUM_NONEWPOSTS','�ѹرգ���������');
define('_MD_SUBFORUMS','����̳');
define('_MD_MAINFORUMOPT','��̳ѡ��');
define("_MD_PENDING_POSTS_FOR_AUTH","�Ⱥ���˵�����:");



//page_header.php
define('_MD_MODERATEDBY','����');
define('_MD_SEARCH','����');
//define('_MD_SEARCHRESULTS','�������');
define('_MD_FORUMINDEX','%s ������');
define('_MD_POSTNEW','����');
define('_MD_REGTOPOST','[�޷���Ȩ] ���¼����ע��');

//search.php
define('_MD_SEARCHALLFORUMS','��������������');
define('_MD_FORUMC','������');
define('_MD_AUTHORC','����:');
define('_MD_SORTBY','����');
define('_MD_DATE','��󷢱�');
define('_MD_TOPIC','����');
define('_MD_POST2','����');
define('_MD_USERNAME','�û���');
define('_MD_BODY','����');
define('_MD_SINCE','ʱ�䷶Χ');

//viewforum.php
define('_MD_REPLIES','�ظ�');
define('_MD_POSTER','����');
define('_MD_VIEWS','���');
define('_MD_MORETHAN','������ [����]');
define('_MD_MORETHAN2','������ [����]');
define('_MD_TOPICSHASATT','��������������');
define('_MD_TOPICHASPOLL','������ͶƱ������');
define('_MD_TOPICLOCKED','�������Ѿ���������ֹ�ظ�');
define('_MD_LEGEND','˵��');
define('_MD_NEXTPAGE','��ҳ');
define('_MD_SORTEDBY','ѡ��');
define('_MD_TOPICTITLE','����');
define('_MD_NUMBERREPLIES','�ظ�');
define('_MD_TOPICPOSTER','��������');
define('_MD_TOPICTIME','��������');
define('_MD_LASTPOSTTIME','���ظ�');
define('_MD_ASCENDING','��������');
define('_MD_DESCENDING','��������');
define('_MD_FROMLASTHOURS','%sСʱ����');
define('_MD_FROMLASTDAYS','%s������');
define('_MD_THELASTYEAR','һ������');
define('_MD_BEGINNING','ȫ��');
define('_MD_SEARCHTHISFORUM','��������');
define('_MD_TOPIC_SUBJECTC','�������:');


define('_MD_RATINGS','����');
define("_MD_CAN_ACCESS","��<strong><font color='green'>����</font></strong>���ʸð�.<br />");
define("_MD_CANNOT_ACCESS","��<strong>����</strong>���ʸð�.<br />");
define("_MD_CAN_POST","��<strong><font color='green'>����</font></strong>����.<br />");
define("_MD_CANNOT_POST","��<strong><font color='red'>����</font></strong>����.<br />");
define("_MD_CAN_VIEW","��<strong><font color='green'>����</font></strong>�鿴����.<br />");
define("_MD_CANNOT_VIEW","��<strong><font color='red'>����</font></strong>�鿴����.<br />");
define("_MD_CAN_REPLY","��<strong><font color='green'>����</font></strong>�ظ�.<br />");
define("_MD_CANNOT_REPLY","��<strong><font color='red'>����</font></strong>�ظ�.<br />");
define("_MD_CAN_EDIT","��<strong><font color='green'>����</font></strong>�༭�Լ�������.<br />");
define("_MD_CANNOT_EDIT","��<strong><font color='red'>����</font></strong>�༭�Լ�������.<br />");
define("_MD_CAN_DELETE","��<strong><font color='green'>����</font></strong>ɾ���Լ�������.<br />");
define("_MD_CANNOT_DELETE","��<strong><font color='red'>����</font></strong>ɾ���Լ�������.<br />");
define("_MD_CAN_ADDPOLL","��<strong><font color='green'>����</font></strong>����ͶƱ����.<br />");
define("_MD_CANNOT_ADDPOLL","��<strong><font color='red'>����</font></strong>����ͶƱ����.<br />");
define("_MD_CAN_VOTE","��<strong><font color='green'>����</font></strong>��ͶƱ������ͶƱ.<br />");
define("_MD_CANNOT_VOTE","��<strong><font color='red'>����</font></strong>��ͶƱ������ͶƱ.<br />");
define("_MD_CAN_ATTACH","��<strong><font color='green'>����</font></strong>�ϴ�����.<br />");
define("_MD_CANNOT_ATTACH","��<strong><font color='red'>����</font></strong>�ϴ�����.<br />");
define("_MD_CAN_NOAPPROVE","��<strong><font color='green'>����</font></strong>�������ֱ�ӷ���.<br />");
define("_MD_CANNOT_NOAPPROVE","��<strong><font color='red'>����</font></strong>�������ֱ�ӷ���.<br />");
define("_MD_IMTOPICS","��Ҫ����");
define("_MD_NOTIMTOPICS","��ͨ����");
define('_MD_FORUMOPTION','��̳ѡ��');

define('_MD_VAUP','�鿴����û�лظ�������');
define('_MD_VANP','�鿴��������������');


define('_MD_UNREPLIED','û�лظ�������');
define('_MD_UNREAD','δ�Ķ�������');
define('_MD_ALL','��������');
define('_MD_ALLPOSTS','��������');
define('_MD_VIEW','�鿴');

//viewtopic.php
define('_MD_AUTHOR','����');
define('_MD_LOCKTOPIC','��������');
define('_MD_UNLOCKTOPIC','�������');
define('_MD_UNSTICKYTOPIC','����ö�');
define('_MD_STICKYTOPIC','�����ö�');
define('_MD_DIGESTTOPIC','��Ϊ����');
define('_MD_UNDIGESTTOPIC','ȡ������');
define('_MD_MERGETOPIC','�ϲ�����');
define('_MD_MOVETOPIC','�ƶ�����');
define('_MD_DELETETOPIC','ɾ������');
define('_MD_TOP','�ض���');
define('_MD_BOTTOM','���ײ�');
define('_MD_PREVTOPIC','ǰһ������');
define('_MD_NEXTTOPIC','��һ������');
define('_MD_GROUP','����Ⱥ��:');
define('_MD_QUICKREPLY','���ٻظ�����');
define('_MD_POSTREPLY','����ظ�');
define('_MD_PRINTTOPICS','��ӡ����');
define('_MD_PRINT','��ӡ');
define('_MD_REPORT','�ٱ�');
define('_MD_PM','����Ϣ');
define('_MD_EMAIL','Email');
define('_MD_WWW','��ҳ');
define('_MD_AIM','AIM');
define('_MD_YIM','YIM');
define('_MD_MSNM','MSNM');
define('_MD_ICQ','OICQ');
define('_MD_PRINT_TOPIC_LINK','������ַ');
define('_MD_ADDTOLIST','������ϵ����');
define('_MD_TOPICOPT','����ѡ��');
define('_MD_VIEWMODE','���ģʽ');
define('_MD_NEWEST','�µ���ǰ');
define('_MD_OLDEST','�ɵ���ǰ');

define('_MD_FORUMSEARCH','��̳����');

define('_MD_RATED','����:');
define('_MD_RATE','��������');
define('_MD_RATEDESC','�Ը���������');
define('_MD_RATING','����');
define('_MD_RATE1','ǿ�ҷ���');
define('_MD_RATE2','��֪����');
define('_MD_RATE3','һ��');
define('_MD_RATE4','����');
define('_MD_RATE5','�� !');

define('_MD_TOPICOPTION','����ѡ��');
define('_MD_KARMA_REQUIREMENT','���Karma���� %s û�дﵽ����Ҫ��ı�׼ %s. <br /> ����������������.');
define('_MD_REPLY_REQUIREMENT','��Ҫ�ظ����ܲ鿴����.');
define('_MD_TOPICOPTIONADMIN','�������ѡ��');
define('_MD_POLLOPTIONADMIN','ͶƱ�������ѡ��');

define('_MD_EDITPOLL','�༭ͶƱ����');
define('_MD_DELETEPOLL','ɾ��ͶƱ����');
define('_MD_RESTARTPOLL','�����ͶƱ����');
define('_MD_ADDPOLL','���ͶƱ����');

define('_MD_QUICKREPLY_EMPTY','��������ٻظ�������');

define('_MD_LEVEL','�ȼ�:');
define('_MD_HP','HP :');
define('_MD_MP','MP :');
define('_MD_EXP','EXP:');

define('_MD_BROWSING','�������:');
define('_MD_POSTTONEWS','������������');

define('_MD_EXCEEDTHREADVIEW','������Ŀ������״��ʾ�����������<br />תΪչ��ģʽ');


//forumform.inc
define('_MD_PRIVATE','����һ��<strong>�ڲ�</strong>������.<br />ֻ����Ȩ�û����ܷ���');
define('_MD_QUOTE','����');
define('_MD_VIEW_REQUIRE','�鿴Ҫ��');
define('_MD_REQUIRE_KARMA','Karma����');
define('_MD_REQUIRE_REPLY','�ظ�');
define('_MD_REQUIRE_NULL','��');

define("_MD_SELECT_FORMTYPE","ѡ��༭��");

define("_MD_FORM_COMPACT","���");
define("_MD_FORM_DHTML","��׼");
define("_MD_FORM_SPAW","Spaw");
define("_MD_FORM_HTMLAREA","HTMLArea");
define("_MD_FORM_FCK","FCK");
define("_MD_FORM_KOIVI","Koivi");
define("_MD_FORM_TINYMCE","TinyMCE");

// ERROR messages
define('_MD_ERRORFORUM','����: δѡ��������!');
define('_MD_ERRORPOST','����: δѡ������!');
define('_MD_NORIGHTTOVIEW','��û��Ȩ�޲鿴������.');
define('_MD_NORIGHTTOPOST','��û��Ȩ���ڸ�����������.');
define('_MD_NORIGHTTOEDIT','��û��Ȩ���޸ĸ�������������.');
define('_MD_NORIGHTTOREPLY','��û��Ȩ���ڸ��������ظ�.');
define('_MD_NORIGHTTOACCESS','��û��Ȩ�޷��ʸ�������.');
define('_MD_ERRORTOPIC','����: δѡ������!');
define('_MD_ERRORCONNECT','����: �޷����ӵ����������ݿ�.');
define('_MD_ERROREXIST','����: ����ѡ��������������ڣ�������һ��.');
define('_MD_ERROROCCURED','��������');
define('_MD_COULDNOTQUERY','�޷���ѯ����������.');
define('_MD_FORUMNOEXIST','����: ��ѡ�������/�����������ڣ�������һ��.');
define('_MD_USERNOEXIST','�û��߲�����. ��������һ��.');
define('_MD_COULDNOTREMOVE','����: �޷�ɾ������!');
define('_MD_COULDNOTREMOVETXT','����: �޷�ɾ����������!');
define('_MD_TIMEISUP','�Ѿ�������������ı༭ʱ������.');
define('_MD_TIMEISUPDEL','�Ѿ�������ɾ����ʱ������.');

//reply.php
define('_MD_ON','��'); //Posted on
define('_MD_USERWROTE','%s д��:'); // %s is username
define('_MD_RE','�ظ�');

//post.php
define('_MD_EDITNOTALLOWED','û��Ȩ���޸�����!');
define('_MD_EDITEDBY','');
define('_MD_ANONNOTALLOWED','�ο�û�з���Ȩ.<br />����ע��.');
define('_MD_THANKSSUBMIT','��л���ķ���!');
define('_MD_REPLYPOSTED','�����������˻ظ�.');
define('_MD_HELLO','���� %s,');
define('_MD_URRECEIVING','���յ���email����Ϊ���� %s ������������������˻�Ӧ.'); // %s is your site name
define('_MD_CLICKBELOW','���������Ӳ鿴����:');
define('_MD_WAITFORAPPROVAL','�ǳ���л���ύ���ӣ�����ͨ����˺󷢱�.');
define('_MD_POSTING_LIMITED','�벻Ҫ�� %d ������������');

//forumform.inc
define('_MD_NAMEMAIL','����/Email:');
define('_MD_LOGOUT','ע��');
define('_MD_REGISTER','ע��');
define('_MD_SUBJECTC','����:');
define('_MD_MESSAGEICON','ͼ��:');
define('_MD_MESSAGEC','����:');
define('_MD_ALLOWEDHTML','�����HTML��ǩ:');
define('_MD_OPTIONS','����ѡ��:');
define('_MD_POSTANONLY','��������');
define('_MD_DOSMILEY','ʹ�ñ���ͼ');
define('_MD_DOXCODE','����Xoops������');
define('_MD_DOBR','���û��з�(�������HTML��ǩ������ر�)');
define('_MD_DOHTML','ʹ��HTML��ǩ');
define('_MD_NEWPOSTNOTIFY','������ʱ֪ͨ��');
define('_MD_ATTACHSIG','ʹ��ǩ����');
define('_MD_POST','����');
define('_MD_SUBMIT','ȷ��');
define('_MD_CANCELPOST','ȡ��');
define('_MD_REMOVE','ȡ��');
define('_MD_UPLOAD','�ϴ�');

// forumuserpost.php
define('_MD_ADD','��������');
define('_MD_REPLY','�ظ�');

// topicmanager.php
define('_MD_VIEWTHETOPIC','�鿴������');
define('_MD_RETURNTOTHEFORUM','�ص��������б�');
define('_MD_RETURNFORUMINDEX','����������ҳ');
define('_MD_ERROR_BACK','����!������һ��.');
define('_MD_GOTONEWFORUM','�鿴�޸Ľ��');

define('_MD_TOPICDELETE','�������ѱ�ɾ��.');
define('_MD_TOPICMERGE','�������ѱ��ϲ�.');
define('_MD_TOPICMOVE','�������Ѿ���ת�Ƶ�����������.');
define('_MD_TOPICLOCK','�������ѱ�����.');
define('_MD_TOPICUNLOCK','�������ѽ������.');
define('_MD_TOPICSTICKY','�������Ѿ��ö�.');
define('_MD_TOPICUNSTICKY','�������ѱ�ȡ���ö�.');
define('_MD_TOPICDIGEST','�������ѱ����Ϊ����.');
define('_MD_TOPICUNDIGEST','�������ѱ�ȡ������.');

define('_MD_DELETE','ɾ��');
define('_MD_MOVE','�ƶ�');
define('_MD_MERGE','�ϲ�');
define('_MD_LOCK','����');
define('_MD_UNLOCK','�������');
define('_MD_STICKY','�ö�');
define('_MD_UNSTICKY','ȡ���ö�');
define('_MD_DIGEST','����');
define('_MD_UNDIGEST','ȡ������');

define('_MD_DESC_DELETE','��ɾ����ť��<strong>����</strong>ɾ��������');
define('_MD_DESC_MOVE','���ƶ���ť��ת�Ƹ����⵽����ѡ�İ���');
define('_MD_DESC_MERGE','���ϲ���ť���ϲ������⵽��ѡ������<br /><strong>Ҫ�ϲ���������ID����С�ڵ�ǰ����ID.</strong>');
define('_MD_DESC_LOCK','��������ť�������������������ͨ�û����������ǽ���������ָܻ�');
define('_MD_DESC_UNLOCK','�����������ť�����¿��Ÿ�����');
define('_MD_DESC_STICKY','���ö���ť��������̶��ڶ���');
define('_MD_DESC_UNSTICKY','��ȡ���ö���ť������ö�');
define('_MD_DESC_DIGEST','�����þ�����ť����������Ϊ����');
define('_MD_DESC_UNDIGEST','��ȡ��������ť������ȡ������');

define('_MD_MERGETOPICTO','�ϲ����⵽:');
define('_MD_MOVETOPICTO','�ƶ����⵽:');
define('_MD_NOFORUMINDB','��������');

// delete.php
define('_MD_DELNOTALLOWED','��Ǹ!��û��Ȩ��ɾ������.');
define('_MD_AREUSUREDEL','��ȷ��Ҫɾ�����������µĻظ�?');
define('_MD_POSTSDELETED','ѡ������Ӽ���ظ���ɾ��.');
define('_MD_POSTDELETED','ѡ���������ɾ��.');

// definitions moved from global.
define('_MD_THREAD','��������');
define('_MD_FROM','����');
define('_MD_JOINED','ע������');
define('_MD_ONLINE','����');
define('_MD_OFFLINE','����');
define('_MD_FLAT','ȫ��չ��');


// online.php
define('_MD_USERS_ONLINE','�����û�:');
define('_MD_ANONYMOUS_USERS','���ο�');
define('_MD_REGISTERED_USERS','��ע���û�: ');
define('_MD_BROWSING_FORUM','�������������');
define('_MD_TOTAL_ONLINE','�ܹ� %d ���û�����.');
define('_MD_ADMINISTRATOR','����Ա');

define('_MD_NO_SUCH_FILE','�ļ�������!');
define('_MD_ERROR_UPATEATTACHMENT','���¸���ʱ��������');

// ratethread.php
define("_MD_CANTVOTEOWN","���ܶ��Լ�����������.<br />����������Ϣ���ᱻ��¼�����.");
define("_MD_VOTEONCE","�벻Ҫ��ͬһ����������.");
define("_MD_VOTEAPPRE","��л��������.");
define("_MD_THANKYOU","��л����ʱ���� %s ����"); // %s is your site name
define("_MD_VOTES","�˴�");
define("_MD_NOVOTERATE","��û�жԸ���������");


// polls.php
define("_MD_POLL_DBUPDATED","���ݿ���³ɹ�!");
define("_MD_POLL_POLLCONF","ͶƱ��������");
define("_MD_POLL_POLLSLIST","ͶƱ�����б�");
define("_MD_POLL_AUTHOR","��ͶƱ����ķ�����");
define("_MD_POLL_DISPLAYBLOCK","����������ʾ?");
define("_MD_POLL_POLLQUESTION","ͶƱ��������");
define("_MD_POLL_VOTERS","��ͶƱ��������");
define("_MD_POLL_VOTES","��Ʊ��");
define("_MD_POLL_EXPIRATION","��������");
define("_MD_POLL_EXPIRED","�ѹ���");
define("_MD_POLL_VIEWLOG","�鿴��¼");
define("_MD_POLL_CREATNEWPOLL","������ͶƱ����");
define("_MD_POLL_POLLDESC","����");
define("_MD_POLL_DISPLAYORDER","˳��");
define("_MD_POLL_ALLOWMULTI","�����ѡ?");
define("_MD_POLL_NOTIFY","ͶƱ���鵽��ʱ֪ͨ������?");
define("_MD_POLL_POLLOPTIONS","ѡ��");
define("_MD_POLL_EDITPOLL","�༭ͶƱ����");
define("_MD_POLL_FORMAT","��ʽ: yyyy-mm-dd hh:mm:ss");
define("_MD_POLL_CURRENTTIME","��ǰʱ�� %s");
define("_MD_POLL_EXPIREDAT","��Ч�� %s");
define("_MD_POLL_RESTART","���������ͶƱ����");
define("_MD_POLL_ADDMORE","���ѡ��");
define("_MD_POLL_RUSUREDEL","ȷ��Ҫɾ��ͶƱ���鼰����?");
define("_MD_POLL_RESTARTPOLL","�������ͶƱ����");
define("_MD_POLL_RESET","�����ͶƱ����ļ�¼?");
define("_MD_POLL_ADDPOLL","����ͶƱ����");
define("_MD_POLLMODULE_ERROR","umfrage��������ʹ��");

//report.php
define("_MD_REPORTED","��л���ٱ�! ����Ա���ᾡ�촦��.");
define("_MD_REPORT_ERROR","���;ٱ�ʱ��������.");
define("_MD_REPORT_TEXT","�ٱ���Ϣ:");

define("_MD_PDF","����PDF�ļ�");
define("_MD_PDF_PAGE","�� %s ҳ");

//print.php
define("_MD_COMEFROM","����:");

//viewpost.php
define("_MD_VIEWALLPOSTS","�鿴��������");
define("_MD_VIEWTOPIC","����");
define("_MD_VIEWFORUM","��̳");

define("_MD_COMPACT","�����ʾ");

define("_MD_MENU_SELECT","����ѡ���");
define("_MD_MENU_HOVER","HOVERչ��");
define("_MD_MENU_CLICK","���չ��");

define("_MD_WELCOME_SUBJECT","�»�Ա %s ����");
define("_MD_WELCOME_MESSAGE","��Һã�<strong>%s</strong> ���ι��٣�����ָ�̡�");

define("_MD_VIEWNEWPOSTS","�鿴������");

define("_MD_INVALID_SUBMIT","��Ч�ύ������ϵͳsessionʧЧ���ǳ���ϵͳ�涨��ʱ����˳�, �������ύ�򱣴����ӵ����ݲ����µ�½�ύ��");

define("_MD_ACCOUNT","�ʺ�");
define("_MD_NAME","�û���");
define("_MD_PASSWORD","����");
define("_MD_LOGIN","��¼");

define("_MD_TRANSFER","������");
define("_MD_TRANSFER_DESC","Ӧ����չ");
define("_MD_TRANSFER_DONE","�����ѳɹ�ִ��: %s");

define("_MD_APPROVE","���");
define("_MD_RESTORE","�ָ�");
define("_MD_SPLIT_ONE","�ָ��");
define("_MD_SPLIT_TREE","�ָ���������");
define("_MD_SPLIT_ALL","�ָ����к�������");

define("_MD_TYPE_ADMIN","����");
define("_MD_TYPE_VIEW","���");
define("_MD_TYPE_PENDING","�����");
define("_MD_TYPE_DELETED","����վ");
define("_MD_TYPE_SUSPEND","����ʺ�");

define("_MD_DBUPDATED","�����ѳɹ�����!");

define("_MD_SUSPEND_SUBJECT","�û� %s ����ֹ���� %d ��");
define("_MD_SUSPEND_TEXT","�û� %s ����ֹ���� %d �죬ԭ��:<br />[quote]%s[/quote]<br /><br />����ڳ����� %s");
define("_MD_SUSPEND_UID","�û� ID");
define("_MD_SUSPEND_IP","IP����");
define("_MD_SUSPEND_DURATION","���ʱ��");
define("_MD_SUSPEND_DESC","ԭ��");
define("_MD_SUSPEND_LIST","����б�");
define("_MD_SUSPEND_START","��ʼ");
define("_MD_SUSPEND_EXPIRE","��ֹ");
define("_MD_SUSPEND_SCOPE","��Χ");
define("_MD_SUSPEND_MANAGEMENT","�û����ӹ���");
define("_MD_SUSPEND_NOACCESS","����ʺŻ�IP�ѱ���ֹ����");

// !!IMPORTANT!! insert '\' before any char among reserved chars: "a","A","B","c","d","D","F","g","G","h","H","i","I","j","l","L","m","M","n","O","r","s","S","t","T","U","w","W","Y","y","z","Z"	
// insert double '\' before 't','r','n'
define("_MD_TODAY","���� G:i:s");
define("_MD_YESTERDAY","���� G:i:s");
define("_MD_MONTHDAY","n/j G:i:s");
define("_MD_YEARMONTHDAY","Y/n/j G:i");

// For user info
require_once(XOOPS_ROOT_PATH."/modules/newbb/class/user.php");
class User_language extends User
{
    function User_language(&$user)
    {
	    $this->User($user);
    }

    function &getUserbar()
    {
	    global $xoopsModuleConfig, $xoopsUser, $isadmin;
    	if (empty($xoopsModuleConfig['userbar_enabled'])) return null;
    	$user =& $this->user;
    	$userbar = array();
        $userbar[] = array("link"=>XOOPS_URL . "/userinfo.php?uid=" . $user->getVar("uid"), "name" =>_PROFILE);
		if (is_object($xoopsUser))
        $userbar[]= array("link"=>"javascript:void openWithSelfMain('" . XOOPS_URL . "/pmlite.php?send2=1&amp;to_userid=" . $user->getVar("uid") . "','pmlite', 450, 380);","name"=>_MD_PM);
        if($user->getVar('user_viewemail') || $isadmin)
        $userbar[]= array("link"=>"javascript:void window.open('mailto:" . $user->getVar('email') . "','new');","name"=>_MD_EMAIL);
        if($user->getVar('url'))
        $userbar[]= array("link"=>"javascript:void window.open('" . $user->getVar('url') . "','new');","name"=>_MD_WWW);
        if($user->getVar('user_icq'))
        $userbar[]= array("link"=>"javascript:void window.open('http://friend.qq.com/cgi-bin/friend/user_show_info?ln=" . $user->getVar('user_icq')."','new');","name" => _MD_ICQ);
        if($user->getVar('user_aim'))
        $userbar[]= array("link"=>"javascript:void window.open('aim:goim?screenname=" . $user->getVar('user_aim') . "&amp;message=Hi+" . $user->getVar('user_aim') . "+Are+you+there?" . "','new');","name"=>_MD_AIM);
        if($user->getVar('user_yim'))
        $userbar[]= array("link"=>"javascript:void window.open('http://edit.yahoo.com/config/send_webmesg?.target=" . $user->getVar('user_yim') . "&.src=pg" . "','new');","name"=> _MD_YIM);
        if($user->getVar('user_msnm'))
        $userbar[]= array("link"=>"javascript:void window.open('http://members.msn.com?mem=" . $user->getVar('user_msnm') . "','new');","name" => _MD_MSNM);
		return $userbar;
    }
}
?>