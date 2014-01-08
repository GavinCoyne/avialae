<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-29 00:08:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Admin::$groupID ~ APPPATH/classes/Controller/Admin.php [ 27 ] in /home/content/96/11745996/html/application/classes/Controller/Admin.php:27
2013-12-29 00:08:34 --- DEBUG: #0 /home/content/96/11745996/html/application/classes/Controller/Admin.php(27): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/content/9...', 27, Array)
#1 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(84): Controller_Admin->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#7 {main} in /home/content/96/11745996/html/application/classes/Controller/Admin.php:27
2013-12-29 14:48:46 --- EMERGENCY: ErrorException [ 1 ]: Class 'Captcha_' not found ~ MODPATH/captcha/classes/Captcha.php [ 70 ] in file:line
2013-12-29 14:48:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-29 14:54:03 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'user.race' in 'where clause' [ 
							SELECT karma, rank, gold, race, points, salt, r.userID, r.guildID,
							(SELECT sum(amount) FROM unitstousers utu WHERE user.userID = utu.userID ) army,
							(SELECT raceName FROM race WHERE race.raceID=user.race) raceName
							FROM user
							INNER JOIN  roundtable r
							ON r.userID = user.userID
							WHERE userName='speed_sk8er'
							 
							 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php:251
2013-12-29 14:54:03 --- DEBUG: #0 /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, '????????SELECT ...', false, Array)
#1 /home/content/96/11745996/html/application/classes/Model/Profile.php(38): Kohana_Database_Query->execute()
#2 /home/content/96/11745996/html/application/classes/Controller/Profile.php(11): Model_Profile->getProfileByName('speed_sk8er')
#3 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(84): Controller_Profile->action_user()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#9 {main} in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php:251
2013-12-29 15:03:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: forum ~ APPPATH/views/Forums/Forum.php [ 14 ] in /home/content/96/11745996/html/application/views/Forums/Forum.php:14
2013-12-29 15:03:45 --- DEBUG: #0 /home/content/96/11745996/html/application/views/Forums/Forum.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/content/9...', 14, Array)
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
#11 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Forums))
#12 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#15 {main} in /home/content/96/11745996/html/application/views/Forums/Forum.php:14
2013-12-29 15:06:22 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR), expecting ')' ~ APPPATH/classes/Model/Forums.php [ 18 ] in file:line
2013-12-29 15:06:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-29 15:07:01 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Forums.php [ 12 ] in /home/content/96/11745996/html/application/classes/Controller/Forums.php:12
2013-12-29 15:07:01 --- DEBUG: #0 /home/content/96/11745996/html/application/classes/Controller/Forums.php(12): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/content/9...', 12, Array)
#1 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(84): Controller_Forums->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Forums))
#4 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#7 {main} in /home/content/96/11745996/html/application/classes/Controller/Forums.php:12
2013-12-29 15:07:28 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Forums.php [ 12 ] in /home/content/96/11745996/html/application/classes/Controller/Forums.php:12
2013-12-29 15:07:28 --- DEBUG: #0 /home/content/96/11745996/html/application/classes/Controller/Forums.php(12): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/content/9...', 12, Array)
#1 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(84): Controller_Forums->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Forums))
#4 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#7 {main} in /home/content/96/11745996/html/application/classes/Controller/Forums.php:12
2013-12-29 15:08:06 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Model_Forums::getThreads(), called in /home/content/96/11745996/html/application/classes/Controller/Forums.php on line 26 and defined ~ APPPATH/classes/Model/Forums.php [ 13 ] in /home/content/96/11745996/html/application/classes/Model/Forums.php:13
2013-12-29 15:08:06 --- DEBUG: #0 /home/content/96/11745996/html/application/classes/Model/Forums.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/content/9...', 13, Array)
#1 /home/content/96/11745996/html/application/classes/Controller/Forums.php(26): Model_Forums->getThreads()
#2 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(84): Controller_Forums->action_forum()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Forums))
#5 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#8 {main} in /home/content/96/11745996/html/application/classes/Model/Forums.php:13
2013-12-29 15:08:15 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Model_Forums::getThreads(), called in /home/content/96/11745996/html/application/classes/Controller/Forums.php on line 26 and defined ~ APPPATH/classes/Model/Forums.php [ 13 ] in /home/content/96/11745996/html/application/classes/Model/Forums.php:13
2013-12-29 15:08:15 --- DEBUG: #0 /home/content/96/11745996/html/application/classes/Model/Forums.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/content/9...', 13, Array)
#1 /home/content/96/11745996/html/application/classes/Controller/Forums.php(26): Model_Forums->getThreads()
#2 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(84): Controller_Forums->action_forum()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Forums))
#5 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#8 {main} in /home/content/96/11745996/html/application/classes/Model/Forums.php:13
2013-12-29 15:14:31 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'action_thread' (T_STRING), expecting variable (T_VARIABLE) ~ APPPATH/classes/Controller/Forums.php [ 33 ] in file:line
2013-12-29 15:14:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-29 15:23:46 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$threadID' (T_VARIABLE), expecting ',' or ';' ~ APPPATH/views/Forums/Forum.php [ 1 ] in file:line
2013-12-29 15:23:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-29 15:23:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: threadID ~ APPPATH/views/Forums/Forum.php [ 1 ] in /home/content/96/11745996/html/application/views/Forums/Forum.php:1
2013-12-29 15:23:58 --- DEBUG: #0 /home/content/96/11745996/html/application/views/Forums/Forum.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/content/9...', 1, Array)
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
#11 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Forums))
#12 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#15 {main} in /home/content/96/11745996/html/application/views/Forums/Forum.php:1
2013-12-29 15:53:50 --- EMERGENCY: Database_Exception [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry '0' for key 1 [ 
				INSERT INTO forumThreads (creatorID, forumID, threadTitle)
				VALUES ('0', '1', 'STuf')
			 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php:251
2013-12-29 15:53:50 --- DEBUG: #0 /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, '??????INSERT IN...', false, Array)
#1 /home/content/96/11745996/html/application/classes/Model/Forums.php(35): Kohana_Database_Query->execute()
#2 /home/content/96/11745996/html/application/classes/Controller/Forums.php(70): Model_Forums->createThread('1', 'STuf', '0')
#3 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(84): Controller_Forums->action_createThreadPOST()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Forums))
#6 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#9 {main} in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php:251
2013-12-29 15:54:21 --- EMERGENCY: Database_Exception [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry '0' for key 1 [ 
				INSERT INTO forumThreads (creatorID, forumID, threadTitle)
				VALUES ('0', '1', 'STuf')
			 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php:251
2013-12-29 15:54:21 --- DEBUG: #0 /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, '??????INSERT IN...', false, Array)
#1 /home/content/96/11745996/html/application/classes/Model/Forums.php(35): Kohana_Database_Query->execute()
#2 /home/content/96/11745996/html/application/classes/Controller/Forums.php(70): Model_Forums->createThread('1', 'STuf', '0')
#3 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(84): Controller_Forums->action_createThreadPOST()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Forums))
#6 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#9 {main} in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php:251
2013-12-29 15:54:46 --- EMERGENCY: Database_Exception [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry '0' for key 1 [ 
				INSERT INTO forumThreads (creatorID, forumID, threadTitle)
				VALUES ('0', '1', 'STuf')
			 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php:251
2013-12-29 15:54:46 --- DEBUG: #0 /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, '??????INSERT IN...', false, Array)
#1 /home/content/96/11745996/html/application/classes/Model/Forums.php(35): Kohana_Database_Query->execute()
#2 /home/content/96/11745996/html/application/classes/Controller/Forums.php(70): Model_Forums->createThread('1', 'STuf', '0')
#3 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(84): Controller_Forums->action_createThreadPOST()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Forums))
#6 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#9 {main} in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php:251
2013-12-29 15:55:51 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Model_Forums::post(), called in /home/content/96/11745996/html/application/classes/Controller/Forums.php on line 72 and defined ~ APPPATH/classes/Model/Forums.php [ 39 ] in /home/content/96/11745996/html/application/classes/Model/Forums.php:39
2013-12-29 15:55:51 --- DEBUG: #0 /home/content/96/11745996/html/application/classes/Model/Forums.php(39): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/content/9...', 39, Array)
#1 /home/content/96/11745996/html/application/classes/Controller/Forums.php(72): Model_Forums->post()
#2 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(84): Controller_Forums->action_createThreadPOST()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Forums))
#5 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#8 {main} in /home/content/96/11745996/html/application/classes/Model/Forums.php:39
2013-12-29 15:56:22 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Model_Forums::post(), called in /home/content/96/11745996/html/application/classes/Controller/Forums.php on line 72 and defined ~ APPPATH/classes/Model/Forums.php [ 39 ] in /home/content/96/11745996/html/application/classes/Model/Forums.php:39
2013-12-29 15:56:22 --- DEBUG: #0 /home/content/96/11745996/html/application/classes/Model/Forums.php(39): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/content/9...', 39, Array)
#1 /home/content/96/11745996/html/application/classes/Controller/Forums.php(72): Model_Forums->post()
#2 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(84): Controller_Forums->action_createThreadPOST()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Forums))
#5 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#8 {main} in /home/content/96/11745996/html/application/classes/Model/Forums.php:39
2013-12-29 15:58:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: forumID ~ APPPATH/classes/Model/Forums.php [ 47 ] in /home/content/96/11745996/html/application/classes/Model/Forums.php:47
2013-12-29 15:58:28 --- DEBUG: #0 /home/content/96/11745996/html/application/classes/Model/Forums.php(47): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/content/9...', 47, Array)
#1 /home/content/96/11745996/html/application/classes/Controller/Forums.php(72): Model_Forums->post('4', 'things', '0')
#2 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(84): Controller_Forums->action_createThreadPOST()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Forums))
#5 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#8 {main} in /home/content/96/11745996/html/application/classes/Model/Forums.php:47
2013-12-29 15:58:47 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'post' in 'field list' [ 
				INSERT INTO forumThreads (creatorID, forumID, post)
				VALUES ('0', '5', 'things')
			 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php:251
2013-12-29 15:58:47 --- DEBUG: #0 /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, '??????INSERT IN...', false, Array)
#1 /home/content/96/11745996/html/application/classes/Model/Forums.php(51): Kohana_Database_Query->execute()
#2 /home/content/96/11745996/html/application/classes/Controller/Forums.php(72): Model_Forums->post('5', 'things', '0')
#3 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(84): Controller_Forums->action_createThreadPOST()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Forums))
#6 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#9 {main} in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php:251
2013-12-29 15:59:07 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'creatorID' in 'field list' [ 
				INSERT INTO forumPosts (creatorID, forumID, post)
				VALUES ('0', '6', 'things')
			 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php:251
2013-12-29 15:59:07 --- DEBUG: #0 /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, '??????INSERT IN...', false, Array)
#1 /home/content/96/11745996/html/application/classes/Model/Forums.php(51): Kohana_Database_Query->execute()
#2 /home/content/96/11745996/html/application/classes/Controller/Forums.php(72): Model_Forums->post('6', 'things', '0')
#3 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(84): Controller_Forums->action_createThreadPOST()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Forums))
#6 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#9 {main} in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php:251
2013-12-29 15:59:19 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'forumID' in 'field list' [ 
				INSERT INTO forumPosts (userID, forumID, post)
				VALUES ('0', '7', 'things')
			 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php:251
2013-12-29 15:59:19 --- DEBUG: #0 /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, '??????INSERT IN...', false, Array)
#1 /home/content/96/11745996/html/application/classes/Model/Forums.php(51): Kohana_Database_Query->execute()
#2 /home/content/96/11745996/html/application/classes/Controller/Forums.php(72): Model_Forums->post('7', 'things', '0')
#3 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(84): Controller_Forums->action_createThreadPOST()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Forums))
#6 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#9 {main} in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php:251
2013-12-29 16:05:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: post ~ APPPATH/views/Forums/Thread.php [ 19 ] in /home/content/96/11745996/html/application/views/Forums/Thread.php:19
2013-12-29 16:05:16 --- DEBUG: #0 /home/content/96/11745996/html/application/views/Forums/Thread.php(19): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/9...', 19, Array)
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
#11 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Forums))
#12 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#15 {main} in /home/content/96/11745996/html/application/views/Forums/Thread.php:19
2013-12-29 16:05:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: post ~ APPPATH/views/Forums/Thread.php [ 19 ] in /home/content/96/11745996/html/application/views/Forums/Thread.php:19
2013-12-29 16:05:39 --- DEBUG: #0 /home/content/96/11745996/html/application/views/Forums/Thread.php(19): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/9...', 19, Array)
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
#11 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Forums))
#12 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#15 {main} in /home/content/96/11745996/html/application/views/Forums/Thread.php:19
2013-12-29 16:06:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: post ~ APPPATH/views/Forums/Thread.php [ 20 ] in /home/content/96/11745996/html/application/views/Forums/Thread.php:20
2013-12-29 16:06:10 --- DEBUG: #0 /home/content/96/11745996/html/application/views/Forums/Thread.php(20): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/9...', 20, Array)
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
#11 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Forums))
#12 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#15 {main} in /home/content/96/11745996/html/application/views/Forums/Thread.php:20
2013-12-29 16:17:20 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Forums.php [ 102 ] in file:line
2013-12-29 16:17:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-29 16:17:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: host ~ APPPATH/classes/Controller/Forums.php [ 101 ] in /home/content/96/11745996/html/application/classes/Controller/Forums.php:101
2013-12-29 16:17:30 --- DEBUG: #0 /home/content/96/11745996/html/application/classes/Controller/Forums.php(101): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/9...', 101, Array)
#1 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(84): Controller_Forums->action_addPost()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Forums))
#4 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#7 {main} in /home/content/96/11745996/html/application/classes/Controller/Forums.php:101
2013-12-29 16:18:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: post ~ APPPATH/classes/Controller/Forums.php [ 99 ] in /home/content/96/11745996/html/application/classes/Controller/Forums.php:99
2013-12-29 16:18:45 --- DEBUG: #0 /home/content/96/11745996/html/application/classes/Controller/Forums.php(99): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/9...', 99, Array)
#1 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(84): Controller_Forums->action_addPost()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Forums))
#4 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#7 {main} in /home/content/96/11745996/html/application/classes/Controller/Forums.php:99