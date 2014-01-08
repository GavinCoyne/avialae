<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-08 06:45:51 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home4/gacoyne/public_html/system/classes/Kohana/Session.php:125
2014-01-08 06:45:51 --- DEBUG: #0 /home4/gacoyne/public_html/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home4/gacoyne/public_html/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home4/gacoyne/public_html/application/bootstrap.php(128): Kohana_Session::instance()
#3 /home4/gacoyne/public_html/index.php(102): require('/home4/gacoyne/...')
#4 {main} in /home4/gacoyne/public_html/system/classes/Kohana/Session.php:125
2014-01-08 06:51:54 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home4/gacoyne/public_html/system/classes/Kohana/Session.php:125
2014-01-08 06:51:54 --- DEBUG: #0 /home4/gacoyne/public_html/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home4/gacoyne/public_html/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home4/gacoyne/public_html/application/bootstrap.php(128): Kohana_Session::instance()
#3 /home4/gacoyne/public_html/index.php(102): require('/home4/gacoyne/...')
#4 {main} in /home4/gacoyne/public_html/system/classes/Kohana/Session.php:125
2014-01-08 12:51:00 --- EMERGENCY: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Email.php [ 12 ] in /home4/gacoyne/public_html/dev/fallofkingdoms/application/classes/Controller/Email.php:12
2014-01-08 12:51:00 --- DEBUG: #0 /home4/gacoyne/public_html/dev/fallofkingdoms/application/classes/Controller/Email.php(12): Kohana_Core::error_handler(2048, 'Creating defaul...', '/home4/gacoyne/...', 12, Array)
#1 /home4/gacoyne/public_html/dev/fallofkingdoms/system/classes/Kohana/Controller.php(84): Controller_Email->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home4/gacoyne/public_html/dev/fallofkingdoms/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Email))
#4 /home4/gacoyne/public_html/dev/fallofkingdoms/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home4/gacoyne/public_html/dev/fallofkingdoms/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home4/gacoyne/public_html/dev/fallofkingdoms/index.php(130): Kohana_Request->execute()
#7 {main} in /home4/gacoyne/public_html/dev/fallofkingdoms/application/classes/Controller/Email.php:12
2014-01-08 12:51:53 --- EMERGENCY: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Email.php [ 12 ] in /home4/gacoyne/public_html/dev/fallofkingdoms/application/classes/Controller/Email.php:12
2014-01-08 12:51:53 --- DEBUG: #0 /home4/gacoyne/public_html/dev/fallofkingdoms/application/classes/Controller/Email.php(12): Kohana_Core::error_handler(2048, 'Creating defaul...', '/home4/gacoyne/...', 12, Array)
#1 /home4/gacoyne/public_html/dev/fallofkingdoms/system/classes/Kohana/Controller.php(84): Controller_Email->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home4/gacoyne/public_html/dev/fallofkingdoms/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Email))
#4 /home4/gacoyne/public_html/dev/fallofkingdoms/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home4/gacoyne/public_html/dev/fallofkingdoms/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home4/gacoyne/public_html/dev/fallofkingdoms/index.php(130): Kohana_Request->execute()
#7 {main} in /home4/gacoyne/public_html/dev/fallofkingdoms/application/classes/Controller/Email.php:12
2014-01-08 12:52:05 --- EMERGENCY: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Email.php [ 12 ] in /home4/gacoyne/public_html/dev/fallofkingdoms/application/classes/Controller/Email.php:12
2014-01-08 12:52:05 --- DEBUG: #0 /home4/gacoyne/public_html/dev/fallofkingdoms/application/classes/Controller/Email.php(12): Kohana_Core::error_handler(2048, 'Creating defaul...', '/home4/gacoyne/...', 12, Array)
#1 /home4/gacoyne/public_html/dev/fallofkingdoms/system/classes/Kohana/Controller.php(84): Controller_Email->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home4/gacoyne/public_html/dev/fallofkingdoms/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Email))
#4 /home4/gacoyne/public_html/dev/fallofkingdoms/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home4/gacoyne/public_html/dev/fallofkingdoms/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home4/gacoyne/public_html/dev/fallofkingdoms/index.php(130): Kohana_Request->execute()
#7 {main} in /home4/gacoyne/public_html/dev/fallofkingdoms/application/classes/Controller/Email.php:12
2014-01-08 13:51:22 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Email::body() ~ APPPATH/classes/Controller/Email.php [ 15 ] in file:line
2014-01-08 13:51:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-08 13:52:45 --- EMERGENCY: Kohana_Exception [ 0 ]: Hi, guys! This is my awesome email. configuration is not defined ~ MODPATH/email/classes/Kohana/Email.php [ 61 ] in /home4/gacoyne/public_html/dev/fallofkingdoms/application/classes/Controller/Email.php:12
2014-01-08 13:52:45 --- DEBUG: #0 /home4/gacoyne/public_html/dev/fallofkingdoms/application/classes/Controller/Email.php(12): Kohana_Email::instance('Hi, guys! This ...')
#1 /home4/gacoyne/public_html/dev/fallofkingdoms/system/classes/Kohana/Controller.php(84): Controller_Email->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home4/gacoyne/public_html/dev/fallofkingdoms/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Email))
#4 /home4/gacoyne/public_html/dev/fallofkingdoms/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home4/gacoyne/public_html/dev/fallofkingdoms/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home4/gacoyne/public_html/dev/fallofkingdoms/index.php(130): Kohana_Request->execute()
#7 {main} in /home4/gacoyne/public_html/dev/fallofkingdoms/application/classes/Controller/Email.php:12
2014-01-08 13:53:03 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Email::body() ~ APPPATH/classes/Controller/Email.php [ 15 ] in file:line
2014-01-08 13:53:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-08 13:54:05 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Email::body() ~ APPPATH/classes/Controller/Email.php [ 16 ] in file:line
2014-01-08 13:54:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-08 16:02:57 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant COMPANY_NAME - assumed 'COMPANY_NAME' ~ APPPATH/classes/Controller/GameTemplate.php [ 40 ] in /home4/gacoyne/public_html/avialae/application/classes/Controller/GameTemplate.php:40
2014-01-08 16:02:57 --- DEBUG: #0 /home4/gacoyne/public_html/avialae/application/classes/Controller/GameTemplate.php(40): Kohana_Core::error_handler(8, 'Use of undefine...', '/home4/gacoyne/...', 40, Array)
#1 /home4/gacoyne/public_html/avialae/application/classes/Controller/Login.php(9): Controller_GameTemplate->before()
#2 /home4/gacoyne/public_html/avialae/system/classes/Kohana/Controller.php(69): Controller_Login->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /home4/gacoyne/public_html/avialae/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 /home4/gacoyne/public_html/avialae/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home4/gacoyne/public_html/avialae/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home4/gacoyne/public_html/avialae/index.php(130): Kohana_Request->execute()
#8 {main} in /home4/gacoyne/public_html/avialae/application/classes/Controller/GameTemplate.php:40
2014-01-08 16:04:48 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting ')' ~ MODPATH/database/config/database.php [ 43 ] in file:line
2014-01-08 16:04:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-08 16:05:03 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting ')' ~ MODPATH/database/config/database.php [ 43 ] in file:line
2014-01-08 16:05:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-08 16:05:22 --- EMERGENCY: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'gacoyne_avialae.roundtable' doesn't exist [ 
				SELECT * FROM roundtable
				WHERE userID='34';
				 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home4/gacoyne/public_html/avialae/modules/database/classes/Kohana/Database/Query.php:251
2014-01-08 16:05:22 --- DEBUG: #0 /home4/gacoyne/public_html/avialae/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, '?????SELECT * F...', false, Array)
#1 /home4/gacoyne/public_html/avialae/application/classes/Model/Game.php(32): Kohana_Database_Query->execute()
#2 /home4/gacoyne/public_html/avialae/application/classes/Controller/GameTemplate.php(27): Model_Game->isActive()
#3 /home4/gacoyne/public_html/avialae/application/classes/Controller/Login.php(9): Controller_GameTemplate->before()
#4 /home4/gacoyne/public_html/avialae/system/classes/Kohana/Controller.php(69): Controller_Login->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home4/gacoyne/public_html/avialae/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /home4/gacoyne/public_html/avialae/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home4/gacoyne/public_html/avialae/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home4/gacoyne/public_html/avialae/index.php(130): Kohana_Request->execute()
#10 {main} in /home4/gacoyne/public_html/avialae/modules/database/classes/Kohana/Database/Query.php:251
2014-01-08 16:09:22 --- EMERGENCY: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'gacoyne_avialae.roundtable' doesn't exist [ 
				SELECT rank, gold, race, points, level,karma,housing,turns,exp,
				(SELECT userName FROM user u WHERE u.userID = r.userID) username,
				(SELECT race.raceName FROM race WHERE race.raceID = r.race) raceName,
				(SELECT sum(units.amount) FROM unitstousers units WHERE units.userID = r.userID) army
				FROM roundtable r
				WHERE r.userID = '34'
				 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home4/gacoyne/public_html/avialae/modules/database/classes/Kohana/Database/Query.php:251
2014-01-08 16:09:22 --- DEBUG: #0 /home4/gacoyne/public_html/avialae/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, '?????SELECT ran...', false, Array)
#1 /home4/gacoyne/public_html/avialae/application/classes/Model/Game.php(97): Kohana_Database_Query->execute()
#2 /home4/gacoyne/public_html/avialae/application/classes/Controller/GameTemplate.php(98): Model_Game->getStats()
#3 /home4/gacoyne/public_html/avialae/system/classes/Kohana/Controller.php(87): Controller_GameTemplate->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /home4/gacoyne/public_html/avialae/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 /home4/gacoyne/public_html/avialae/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home4/gacoyne/public_html/avialae/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home4/gacoyne/public_html/avialae/index.php(130): Kohana_Request->execute()
#9 {main} in /home4/gacoyne/public_html/avialae/modules/database/classes/Kohana/Database/Query.php:251
2014-01-08 16:10:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: rank ~ APPPATH/views/Game/controlPanel.php [ 11 ] in /home4/gacoyne/public_html/avialae/application/views/Game/controlPanel.php:11
2014-01-08 16:10:18 --- DEBUG: #0 /home4/gacoyne/public_html/avialae/application/views/Game/controlPanel.php(11): Kohana_Core::error_handler(8, 'Undefined index...', '/home4/gacoyne/...', 11, Array)
#1 /home4/gacoyne/public_html/avialae/system/classes/Kohana/View.php(61): include('/home4/gacoyne/...')
#2 /home4/gacoyne/public_html/avialae/system/classes/Kohana/View.php(348): Kohana_View::capture('/home4/gacoyne/...', Array)
#3 /home4/gacoyne/public_html/avialae/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home4/gacoyne/public_html/avialae/application/views/template/template.php(30): Kohana_View->__toString()
#5 /home4/gacoyne/public_html/avialae/system/classes/Kohana/View.php(61): include('/home4/gacoyne/...')
#6 /home4/gacoyne/public_html/avialae/system/classes/Kohana/View.php(348): Kohana_View::capture('/home4/gacoyne/...', Array)
#7 /home4/gacoyne/public_html/avialae/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home4/gacoyne/public_html/avialae/application/classes/Controller/GameTemplate.php(145): Kohana_Controller_Template->after()
#9 /home4/gacoyne/public_html/avialae/system/classes/Kohana/Controller.php(87): Controller_GameTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home4/gacoyne/public_html/avialae/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#12 /home4/gacoyne/public_html/avialae/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home4/gacoyne/public_html/avialae/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /home4/gacoyne/public_html/avialae/index.php(130): Kohana_Request->execute()
#15 {main} in /home4/gacoyne/public_html/avialae/application/views/Game/controlPanel.php:11
2014-01-08 16:11:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: level ~ APPPATH/views/Game/controlPanel.php [ 16 ] in /home4/gacoyne/public_html/avialae/application/views/Game/controlPanel.php:16
2014-01-08 16:11:35 --- DEBUG: #0 /home4/gacoyne/public_html/avialae/application/views/Game/controlPanel.php(16): Kohana_Core::error_handler(8, 'Undefined index...', '/home4/gacoyne/...', 16, Array)
#1 /home4/gacoyne/public_html/avialae/system/classes/Kohana/View.php(61): include('/home4/gacoyne/...')
#2 /home4/gacoyne/public_html/avialae/system/classes/Kohana/View.php(348): Kohana_View::capture('/home4/gacoyne/...', Array)
#3 /home4/gacoyne/public_html/avialae/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home4/gacoyne/public_html/avialae/application/views/template/template.php(30): Kohana_View->__toString()
#5 /home4/gacoyne/public_html/avialae/system/classes/Kohana/View.php(61): include('/home4/gacoyne/...')
#6 /home4/gacoyne/public_html/avialae/system/classes/Kohana/View.php(348): Kohana_View::capture('/home4/gacoyne/...', Array)
#7 /home4/gacoyne/public_html/avialae/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home4/gacoyne/public_html/avialae/application/classes/Controller/GameTemplate.php(145): Kohana_Controller_Template->after()
#9 /home4/gacoyne/public_html/avialae/system/classes/Kohana/Controller.php(87): Controller_GameTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home4/gacoyne/public_html/avialae/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#12 /home4/gacoyne/public_html/avialae/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home4/gacoyne/public_html/avialae/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /home4/gacoyne/public_html/avialae/index.php(130): Kohana_Request->execute()
#15 {main} in /home4/gacoyne/public_html/avialae/application/views/Game/controlPanel.php:16
2014-01-08 16:13:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: turns ~ APPPATH/views/Game/controlPanel.php [ 26 ] in /home4/gacoyne/public_html/avialae/application/views/Game/controlPanel.php:26
2014-01-08 16:13:24 --- DEBUG: #0 /home4/gacoyne/public_html/avialae/application/views/Game/controlPanel.php(26): Kohana_Core::error_handler(8, 'Undefined index...', '/home4/gacoyne/...', 26, Array)
#1 /home4/gacoyne/public_html/avialae/system/classes/Kohana/View.php(61): include('/home4/gacoyne/...')
#2 /home4/gacoyne/public_html/avialae/system/classes/Kohana/View.php(348): Kohana_View::capture('/home4/gacoyne/...', Array)
#3 /home4/gacoyne/public_html/avialae/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home4/gacoyne/public_html/avialae/application/views/template/template.php(30): Kohana_View->__toString()
#5 /home4/gacoyne/public_html/avialae/system/classes/Kohana/View.php(61): include('/home4/gacoyne/...')
#6 /home4/gacoyne/public_html/avialae/system/classes/Kohana/View.php(348): Kohana_View::capture('/home4/gacoyne/...', Array)
#7 /home4/gacoyne/public_html/avialae/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home4/gacoyne/public_html/avialae/application/classes/Controller/GameTemplate.php(145): Kohana_Controller_Template->after()
#9 /home4/gacoyne/public_html/avialae/system/classes/Kohana/Controller.php(87): Controller_GameTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home4/gacoyne/public_html/avialae/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#12 /home4/gacoyne/public_html/avialae/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home4/gacoyne/public_html/avialae/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /home4/gacoyne/public_html/avialae/index.php(130): Kohana_Request->execute()
#15 {main} in /home4/gacoyne/public_html/avialae/application/views/Game/controlPanel.php:26
2014-01-08 16:13:55 --- EMERGENCY: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'gacoyne_avialae.roundtable' doesn't exist [ 
				SELECT rank, gold, race, points, level,
				(SELECT userName FROM user u WHERE u.userID = r.userID) username,
				(SELECT race.raceName FROM race WHERE race.raceID = r.race) raceName,
				(SELECT sum(units.amount) FROM unitstousers units WHERE units.userID = r.userID) army
				FROM roundtable r
				WHERE r.rank > 0
				ORDER BY r.rank ASC
				 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home4/gacoyne/public_html/avialae/modules/database/classes/Kohana/Database/Query.php:251
2014-01-08 16:13:55 --- DEBUG: #0 /home4/gacoyne/public_html/avialae/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, '?????SELECT ran...', false, Array)
#1 /home4/gacoyne/public_html/avialae/application/classes/Model/Game.php(78): Kohana_Database_Query->execute()
#2 /home4/gacoyne/public_html/avialae/application/classes/Controller/Game.php(30): Model_Game->getRankedUsers()
#3 /home4/gacoyne/public_html/avialae/system/classes/Kohana/Controller.php(84): Controller_Game->action_ranking()
#4 [internal function]: Kohana_Controller->execute()
#5 /home4/gacoyne/public_html/avialae/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 /home4/gacoyne/public_html/avialae/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home4/gacoyne/public_html/avialae/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home4/gacoyne/public_html/avialae/index.php(130): Kohana_Request->execute()
#9 {main} in /home4/gacoyne/public_html/avialae/modules/database/classes/Kohana/Database/Query.php:251
2014-01-08 16:14:25 --- EMERGENCY: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'gacoyne_avialae.unitstousers' doesn't exist [ 
							SELECT karma, rank, gold, race, points, salt, r.userID, r.guildID,
							(SELECT sum(amount) FROM unitstousers utu WHERE user.userID = utu.userID ) army,
							(SELECT raceName FROM race WHERE race.raceID=race) raceName
							FROM user
							INNER JOIN  roundtable r
							ON r.userID = user.userID
							WHERE userName='gacoyne'
							 
							 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home4/gacoyne/public_html/avialae/modules/database/classes/Kohana/Database/Query.php:251
2014-01-08 16:14:25 --- DEBUG: #0 /home4/gacoyne/public_html/avialae/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, '????????SELECT ...', false, Array)
#1 /home4/gacoyne/public_html/avialae/application/classes/Model/Profile.php(38): Kohana_Database_Query->execute()
#2 /home4/gacoyne/public_html/avialae/application/classes/Controller/Profile.php(11): Model_Profile->getProfileByName('gacoyne')
#3 /home4/gacoyne/public_html/avialae/system/classes/Kohana/Controller.php(84): Controller_Profile->action_user()
#4 [internal function]: Kohana_Controller->execute()
#5 /home4/gacoyne/public_html/avialae/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 /home4/gacoyne/public_html/avialae/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home4/gacoyne/public_html/avialae/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home4/gacoyne/public_html/avialae/index.php(130): Kohana_Request->execute()
#9 {main} in /home4/gacoyne/public_html/avialae/modules/database/classes/Kohana/Database/Query.php:251
2014-01-08 16:15:43 --- EMERGENCY: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'gacoyne_avialae.unitstousers' doesn't exist [ 
							SELECT karma, rank, gold, race, points, salt, r.userID, r.guildID,
							(SELECT sum(amount) FROM unitstousers utu WHERE user.userID = utu.userID ) army,
							(SELECT raceName FROM race WHERE race.raceID=race) raceName
							FROM user
							INNER JOIN  roundtable r
							ON r.userID = user.userID
							WHERE userName='gacoyne'
							 
							 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home4/gacoyne/public_html/avialae/modules/database/classes/Kohana/Database/Query.php:251
2014-01-08 16:15:43 --- DEBUG: #0 /home4/gacoyne/public_html/avialae/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, '????????SELECT ...', false, Array)
#1 /home4/gacoyne/public_html/avialae/application/classes/Model/Profile.php(38): Kohana_Database_Query->execute()
#2 /home4/gacoyne/public_html/avialae/application/classes/Controller/Profile.php(11): Model_Profile->getProfileByName('gacoyne')
#3 /home4/gacoyne/public_html/avialae/system/classes/Kohana/Controller.php(84): Controller_Profile->action_user()
#4 [internal function]: Kohana_Controller->execute()
#5 /home4/gacoyne/public_html/avialae/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 /home4/gacoyne/public_html/avialae/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home4/gacoyne/public_html/avialae/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home4/gacoyne/public_html/avialae/index.php(130): Kohana_Request->execute()
#9 {main} in /home4/gacoyne/public_html/avialae/modules/database/classes/Kohana/Database/Query.php:251
2014-01-08 16:31:52 --- EMERGENCY: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'gacoyne_avialae.roundtable' doesn't exist [ 
				SELECT rank, gold, race, points, level,
				(SELECT userName FROM user u WHERE u.userID = r.userID) username,
				(SELECT race.raceName FROM race WHERE race.raceID = r.race) raceName,
				(SELECT sum(units.amount) FROM unitstousers units WHERE units.userID = r.userID) army
				FROM roundtable r
				WHERE r.rank > 0
				ORDER BY r.rank ASC
				 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home4/gacoyne/public_html/avialae/modules/database/classes/Kohana/Database/Query.php:251
2014-01-08 16:31:52 --- DEBUG: #0 /home4/gacoyne/public_html/avialae/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, '?????SELECT ran...', false, Array)
#1 /home4/gacoyne/public_html/avialae/application/classes/Model/Game.php(78): Kohana_Database_Query->execute()
#2 /home4/gacoyne/public_html/avialae/application/classes/Controller/Game.php(30): Model_Game->getRankedUsers()
#3 /home4/gacoyne/public_html/avialae/system/classes/Kohana/Controller.php(84): Controller_Game->action_ranking()
#4 [internal function]: Kohana_Controller->execute()
#5 /home4/gacoyne/public_html/avialae/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 /home4/gacoyne/public_html/avialae/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home4/gacoyne/public_html/avialae/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home4/gacoyne/public_html/avialae/index.php(130): Kohana_Request->execute()
#9 {main} in /home4/gacoyne/public_html/avialae/modules/database/classes/Kohana/Database/Query.php:251