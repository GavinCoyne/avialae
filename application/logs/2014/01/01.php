<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-01 00:02:36 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'SELECT sum(utu.amount) FROM unitstousers utu WHERE gu.userID=utu.userID) as size' at line 2 [ 
			SELECT u.userName, gu.userID, rt.gold, rt.level, rt.rank
				(SELECT sum(utu.amount) FROM unitstousers utu WHERE gu.userID=utu.userID) as size
			FROM guildstousers gu
			INNER JOIN user u ON u.userID=gu.userID 
			INNER JOIN roundtable rt ON rt.userID=gu.userID
			WHERE gu.guildID='8'
		 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-01 00:02:36 --- DEBUG: #0 /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, '?????SELECT u.u...', false, Array)
#1 /home/content/96/11745996/html/application/classes/Model/Guilds.php(75): Kohana_Database_Query->execute()
#2 /home/content/96/11745996/html/application/classes/Controller/Guilds.php(41): Model_Guilds->getGuildMembersByID('8')
#3 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(84): Controller_Guilds->action_Guild()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guilds))
#6 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#9 {main} in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-01 00:03:51 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant users - assumed 'users' ~ APPPATH/views/Guilds/guild.php [ 4 ] in /home/content/96/11745996/html/application/views/Guilds/guild.php:4
2014-01-01 00:03:51 --- DEBUG: #0 /home/content/96/11745996/html/application/views/Guilds/guild.php(4): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/content/9...', 4, Array)
#1 /home/content/96/11745996/html/system/classes/Kohana/View.php(61): include('/home/content/9...')
#2 /home/content/96/11745996/html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/content/9...', Array)
#3 /home/content/96/11745996/html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/content/96/11745996/html/application/views/template/template.php(37): Kohana_View->__toString()
#5 /home/content/96/11745996/html/system/classes/Kohana/View.php(61): include('/home/content/9...')
#6 /home/content/96/11745996/html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/content/9...', Array)
#7 /home/content/96/11745996/html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/content/96/11745996/html/application/classes/Controller/GameTemplate.php(208): Kohana_Controller_Template->after()
#9 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(87): Controller_GameTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guilds))
#12 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#15 {main} in /home/content/96/11745996/html/application/views/Guilds/guild.php:4
2014-01-01 00:43:32 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ':', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH/classes/Controller/Guilds.php [ 94 ] in file:line
2014-01-01 00:43:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-01 01:21:14 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/views/Guilds/invite.php [ 6 ] in file:line
2014-01-01 01:21:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-01 13:23:47 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/classes/Model/Guilds.php [ 68 ] in file:line
2014-01-01 13:23:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-01 13:24:05 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/classes/Model/Guilds.php [ 68 ] in file:line
2014-01-01 13:24:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-01 13:24:08 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/classes/Model/Guilds.php [ 68 ] in file:line
2014-01-01 13:24:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-01 13:24:14 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/classes/Model/Guilds.php [ 68 ] in file:line
2014-01-01 13:24:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-01 13:24:18 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/classes/Model/Guilds.php [ 68 ] in file:line
2014-01-01 13:24:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-01 13:35:34 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_Result_Cached could not be converted to string ~ APPPATH/classes/Model/Guilds.php [ 57 ] in /home/content/96/11745996/html/application/classes/Model/Guilds.php:57
2014-01-01 13:35:34 --- DEBUG: #0 /home/content/96/11745996/html/application/classes/Model/Guilds.php(57): Kohana_Core::error_handler(4096, 'Object of class...', '/home/content/9...', 57, Array)
#1 /home/content/96/11745996/html/application/classes/Controller/Guilds.php(95): Model_Guilds->sendInvite('Manager')
#2 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(84): Controller_Guilds->action_invite()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guilds))
#5 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#8 {main} in /home/content/96/11745996/html/application/classes/Model/Guilds.php:57
2014-01-01 13:36:10 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_Result_Cached could not be converted to string ~ APPPATH/classes/Model/Guilds.php [ 57 ] in /home/content/96/11745996/html/application/classes/Model/Guilds.php:57
2014-01-01 13:36:10 --- DEBUG: #0 /home/content/96/11745996/html/application/classes/Model/Guilds.php(57): Kohana_Core::error_handler(4096, 'Object of class...', '/home/content/9...', 57, Array)
#1 /home/content/96/11745996/html/application/classes/Controller/Guilds.php(95): Model_Guilds->sendInvite('Manager')
#2 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(84): Controller_Guilds->action_invite()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guilds))
#5 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#8 {main} in /home/content/96/11745996/html/application/classes/Model/Guilds.php:57
2014-01-01 13:36:47 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant SALT - assumed 'SALT' ~ APPPATH/classes/Model/Guilds.php [ 57 ] in /home/content/96/11745996/html/application/classes/Model/Guilds.php:57
2014-01-01 13:36:47 --- DEBUG: #0 /home/content/96/11745996/html/application/classes/Model/Guilds.php(57): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/content/9...', 57, Array)
#1 /home/content/96/11745996/html/application/classes/Controller/Guilds.php(95): Model_Guilds->sendInvite('Manager')
#2 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(84): Controller_Guilds->action_invite()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guilds))
#5 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#8 {main} in /home/content/96/11745996/html/application/classes/Model/Guilds.php:57
2014-01-01 13:36:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: salt ~ APPPATH/classes/Model/Guilds.php [ 57 ] in /home/content/96/11745996/html/application/classes/Model/Guilds.php:57
2014-01-01 13:36:58 --- DEBUG: #0 /home/content/96/11745996/html/application/classes/Model/Guilds.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/content/9...', 57, Array)
#1 /home/content/96/11745996/html/application/classes/Controller/Guilds.php(95): Model_Guilds->sendInvite('Manager')
#2 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(84): Controller_Guilds->action_invite()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guilds))
#5 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#8 {main} in /home/content/96/11745996/html/application/classes/Model/Guilds.php:57
2014-01-01 13:37:06 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant SALT - assumed 'SALT' ~ APPPATH/classes/Model/Guilds.php [ 57 ] in /home/content/96/11745996/html/application/classes/Model/Guilds.php:57
2014-01-01 13:37:06 --- DEBUG: #0 /home/content/96/11745996/html/application/classes/Model/Guilds.php(57): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/content/9...', 57, Array)
#1 /home/content/96/11745996/html/application/classes/Controller/Guilds.php(95): Model_Guilds->sendInvite('Manager')
#2 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(84): Controller_Guilds->action_invite()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guilds))
#5 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#8 {main} in /home/content/96/11745996/html/application/classes/Model/Guilds.php:57
2014-01-01 13:38:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH/classes/Model/Guilds.php [ 60 ] in /home/content/96/11745996/html/application/classes/Model/Guilds.php:60
2014-01-01 13:38:04 --- DEBUG: #0 /home/content/96/11745996/html/application/classes/Model/Guilds.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/content/9...', 60, Array)
#1 /home/content/96/11745996/html/application/classes/Controller/Guilds.php(95): Model_Guilds->sendInvite('Manager')
#2 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(84): Controller_Guilds->action_invite()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guilds))
#5 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#8 {main} in /home/content/96/11745996/html/application/classes/Model/Guilds.php:60
2014-01-01 13:47:11 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/classes/Controller/Guilds.php [ 107 ] in file:line
2014-01-01 13:47:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-01 14:00:27 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'return' (T_RETURN), expecting ')' ~ APPPATH/classes/Model/Guilds.php [ 87 ] in file:line
2014-01-01 14:00:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-01 14:00:44 --- EMERGENCY: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'fallofkingdoms.guildInvites' doesn't exist [ 
			INSERT INTO guildInvites (`guildName`, `invitee`)
			VALUES ('Guilds', 'Manager')
		 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-01 14:00:44 --- DEBUG: #0 /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, '?????INSERT INT...', false, Array)
#1 /home/content/96/11745996/html/application/classes/Model/Guilds.php(87): Kohana_Database_Query->execute()
#2 /home/content/96/11745996/html/application/classes/Model/Guilds.php(63): Model_Guilds->addInvite('Guilds', 'Manager')
#3 /home/content/96/11745996/html/application/classes/Controller/Guilds.php(95): Model_Guilds->sendInvite('Manager')
#4 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(84): Controller_Guilds->action_invite()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guilds))
#7 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#10 {main} in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-01 14:07:31 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':userName' at line 1 [ 
			SELECT guildID FROM user WHERE userName=:userName
		 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-01 14:07:31 --- DEBUG: #0 /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, '?????SELECT gui...', false, Array)
#1 /home/content/96/11745996/html/application/classes/Model/Guilds.php(119): Kohana_Database_Query->execute()
#2 /home/content/96/11745996/html/application/classes/Controller/Guilds.php(121): Model_Guilds->checkUserGuildState('Manager')
#3 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(84): Controller_Guilds->action_joinGuild()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guilds))
#6 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#9 {main} in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-01 14:08:40 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':userName' at line 1 [ 
			SELECT guildID FROM user WHERE userName=:userName
		 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-01 14:08:40 --- DEBUG: #0 /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, '?????SELECT gui...', false, Array)
#1 /home/content/96/11745996/html/application/classes/Model/Guilds.php(119): Kohana_Database_Query->execute()
#2 /home/content/96/11745996/html/application/classes/Controller/Guilds.php(121): Model_Guilds->checkUserGuildState('Manager')
#3 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(84): Controller_Guilds->action_joinGuild()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guilds))
#6 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
<<<<<<< HEAD
#9 {main} in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-01 18:23:39 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home4/gacoyne/public_html/system/classes/Kohana/Session.php:125
2014-01-01 18:23:39 --- DEBUG: #0 /home4/gacoyne/public_html/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home4/gacoyne/public_html/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home4/gacoyne/public_html/application/bootstrap.php(127): Kohana_Session::instance()
#3 /home4/gacoyne/public_html/index.php(104): require('/home4/gacoyne/...')
#4 {main} in /home4/gacoyne/public_html/system/classes/Kohana/Session.php:125
2014-01-01 18:27:23 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home4/gacoyne/public_html/system/classes/Kohana/Session.php:125
2014-01-01 18:27:23 --- DEBUG: #0 /home4/gacoyne/public_html/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home4/gacoyne/public_html/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home4/gacoyne/public_html/application/bootstrap.php(127): Kohana_Session::instance()
#3 /home4/gacoyne/public_html/index.php(104): require('/home4/gacoyne/...')
#4 {main} in /home4/gacoyne/public_html/system/classes/Kohana/Session.php:125
2014-01-01 18:29:45 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home4/gacoyne/public_html/system/classes/Kohana/Session.php:125
2014-01-01 18:29:45 --- DEBUG: #0 /home4/gacoyne/public_html/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home4/gacoyne/public_html/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home4/gacoyne/public_html/application/bootstrap.php(127): Kohana_Session::instance()
#3 /home4/gacoyne/public_html/index.php(104): require('/home4/gacoyne/...')
#4 {main} in /home4/gacoyne/public_html/system/classes/Kohana/Session.php:125
2014-01-01 18:31:15 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home4/gacoyne/public_html/system/classes/Kohana/Session.php:125
2014-01-01 18:31:15 --- DEBUG: #0 /home4/gacoyne/public_html/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home4/gacoyne/public_html/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home4/gacoyne/public_html/application/bootstrap.php(127): Kohana_Session::instance()
#3 /home4/gacoyne/public_html/index.php(104): require('/home4/gacoyne/...')
#4 {main} in /home4/gacoyne/public_html/system/classes/Kohana/Session.php:125
2014-01-01 18:31:58 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_GameTemplate' not found ~ APPPATH/classes/Controller/Public.php [ 3 ] in file:line
2014-01-01 18:31:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-01 18:36:18 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_GameTemplate' not found ~ APPPATH/classes/Controller/Public.php [ 3 ] in file:line
2014-01-01 18:36:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-01 18:37:08 --- EMERGENCY: ErrorException [ 1 ]: Class 'Captcha' not found ~ APPPATH/bootstrap.php [ 162 ] in file:line
2014-01-01 18:37:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-01 18:37:40 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_GameTemplate' not found ~ APPPATH/classes/Controller/Public.php [ 3 ] in file:line
2014-01-01 18:37:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-01 18:39:56 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_GameTemplate' not found ~ APPPATH/classes/Controller/Public.php [ 3 ] in file:line
2014-01-01 18:39:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-01 18:40:17 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_GameTemplate' not found ~ APPPATH/classes/Controller/Public.php [ 3 ] in file:line
2014-01-01 18:40:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-01 18:40:20 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_GameTemplate' not found ~ APPPATH/classes/Controller/Public.php [ 3 ] in file:line
2014-01-01 18:40:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-01 23:21:56 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_GameTemplate' not found ~ APPPATH/classes/Controller/Public.php [ 3 ] in file:line
2014-01-01 23:21:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-01 23:23:11 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Game' not found ~ APPPATH/classes/Controller/GameTemplate.php [ 49 ] in file:line
2014-01-01 23:23:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-01 23:24:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Captcha' not found ~ APPPATH/views/Game/captcha.php [ 6 ] in file:line
2014-01-01 23:24:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-01 23:25:44 --- EMERGENCY: ErrorException [ 1 ]: Class 'Captcha_Alpha' not found ~ MODPATH/captcha/classes/Captcha.php [ 70 ] in file:line
2014-01-01 23:25:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-01 23:26:11 --- EMERGENCY: ErrorException [ 1 ]: Class 'Captcha_Alpha' not found ~ MODPATH/captcha/classes/Captcha.php [ 70 ] in file:line
2014-01-01 23:26:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-01 23:27:33 --- EMERGENCY: ErrorException [ 1 ]: Class 'Captcha_Alpha' not found ~ MODPATH/captcha/classes/Captcha.php [ 70 ] in file:line
2014-01-01 23:27:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-01 23:28:46 --- EMERGENCY: ErrorException [ 1 ]: Class 'Captcha_Alpha' not found ~ MODPATH/captcha/classes/Captcha.php [ 70 ] in file:line
2014-01-01 23:28:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
=======
#9 {main} in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php:251
>>>>>>> remotes/master/master
