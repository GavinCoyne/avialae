<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-06 12:46:55 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function parameters() on a non-object ~ APPPATH/classes/Model/Guilds.php [ 303 ] in file:line
2014-01-06 12:46:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-06 13:00:48 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'inivitee' in 'where clause' [ 			UPDATE guildinvites SET accept=1 WHERE inivitee='Manager' AND guildName='Guilds'		 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-06 13:00:48 --- DEBUG: #0 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, '????UPDATE guil...', false, Array)
#1 /home4/gacoyne/public_html/application/classes/Model/Guilds.php(305): Kohana_Database_Query->execute()
#2 /home4/gacoyne/public_html/application/classes/Controller/Guilds.php(240): Model_Guilds->acceptInvite('Guilds', 'Manager')
#3 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(84): Controller_Guilds->action_joinGuild()
#4 [internal function]: Kohana_Controller->execute()
#5 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guilds))
#6 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#9 {main} in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-06 13:01:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: sender ~ APPPATH/classes/Model/Guilds.php [ 278 ] in /home4/gacoyne/public_html/application/classes/Model/Guilds.php:278
2014-01-06 13:01:07 --- DEBUG: #0 /home4/gacoyne/public_html/application/classes/Model/Guilds.php(278): Kohana_Core::error_handler(8, 'Undefined varia...', '/home4/gacoyne/...', 278, Array)
#1 /home4/gacoyne/public_html/application/classes/Controller/Guilds.php(241): Model_Guilds->addUserToGuild('Guilds', 'Manager')
#2 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(84): Controller_Guilds->action_joinGuild()
#3 [internal function]: Kohana_Controller->execute()
#4 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guilds))
#5 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#8 {main} in /home4/gacoyne/public_html/application/classes/Model/Guilds.php:278
2014-01-06 13:14:49 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Model/Guilds.php [ 283 ] in file:line
2014-01-06 13:14:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-06 13:21:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: guildID ~ APPPATH/classes/Model/Guilds.php [ 266 ] in /home4/gacoyne/public_html/application/classes/Model/Guilds.php:266
2014-01-06 13:21:01 --- DEBUG: #0 /home4/gacoyne/public_html/application/classes/Model/Guilds.php(266): Kohana_Core::error_handler(8, 'Undefined varia...', '/home4/gacoyne/...', 266, Array)
#1 /home4/gacoyne/public_html/application/classes/Controller/Guilds.php(240): Model_Guilds->acceptInvite('Guilds', 'Manager')
#2 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(84): Controller_Guilds->action_joinGuild()
#3 [internal function]: Kohana_Controller->execute()
#4 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guilds))
#5 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#8 {main} in /home4/gacoyne/public_html/application/classes/Model/Guilds.php:266
2014-01-06 13:25:14 --- EMERGENCY: ErrorException [ 8 ]: Constant MAX_MEMBERS already defined ~ APPPATH/classes/Controller/GameTemplate.php [ 3 ] in file:line
2014-01-06 13:25:14 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Constant MAX_ME...', '/home4/gacoyne/...', 3, Array)
#1 /home4/gacoyne/public_html/application/classes/Controller/GameTemplate.php(3): define('MAX_MEMBERS', 8)
#2 /home4/gacoyne/public_html/system/classes/Kohana/Core.php(511): require('/home4/gacoyne/...')
#3 [internal function]: Kohana_Core::auto_load('Controller_Game...')
#4 /home4/gacoyne/public_html/application/classes/Controller/Guilds.php(5): spl_autoload_call('Controller_Game...')
#5 /home4/gacoyne/public_html/system/classes/Kohana/Core.php(511): require('/home4/gacoyne/...')
#6 [internal function]: Kohana_Core::auto_load('Controller_Guil...')
#7 [internal function]: spl_autoload_call('Controller_Guil...')
#8 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(74): class_exists('Controller_Guil...')
#9 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#12 {main} in file:line
2014-01-06 13:25:37 --- EMERGENCY: ErrorException [ 8 ]: Constant MAX_MEMBERS already defined ~ APPPATH/classes/Controller/GameTemplate.php [ 3 ] in file:line
2014-01-06 13:25:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Constant MAX_ME...', '/home4/gacoyne/...', 3, Array)
#1 /home4/gacoyne/public_html/application/classes/Controller/GameTemplate.php(3): define('MAX_MEMBERS', 8)
#2 /home4/gacoyne/public_html/system/classes/Kohana/Core.php(511): require('/home4/gacoyne/...')
#3 [internal function]: Kohana_Core::auto_load('Controller_Game...')
#4 /home4/gacoyne/public_html/application/classes/Controller/Guilds.php(5): spl_autoload_call('Controller_Game...')
#5 /home4/gacoyne/public_html/system/classes/Kohana/Core.php(511): require('/home4/gacoyne/...')
#6 [internal function]: Kohana_Core::auto_load('Controller_Guil...')
#7 [internal function]: spl_autoload_call('Controller_Guil...')
#8 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(74): class_exists('Controller_Guil...')
#9 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#12 {main} in file:line
2014-01-06 13:51:38 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_GameTemplate' not found ~ APPPATH/classes/Controller/Guilds.php [ 3 ] in file:line
2014-01-06 13:51:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-06 13:52:20 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_GameTemplate' not found ~ APPPATH/classes/Controller/Guilds.php [ 3 ] in file:line
2014-01-06 13:52:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-06 14:07:05 --- EMERGENCY: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'gacoyne_fallofkingdoms.guildRankingUpdates' doesn't exist [ 				UPDATE guildRankingUpdates				SET rank=1, points=340309				WHERE userID='27'			 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-06 14:07:05 --- DEBUG: #0 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, '?????UPDATE gui...', false, Array)
#1 /home4/gacoyne/public_html/application/classes/Model/Guilds.php(344): Kohana_Database_Query->execute()
#2 /home4/gacoyne/public_html/application/classes/Controller/GameTemplate.php(81): Model_Guilds->updateRanks(1, '2014-01-06 14:0...')
#3 /home4/gacoyne/public_html/application/classes/Controller/Guilds.php(20): Controller_GameTemplate->before()
#4 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(69): Controller_Guilds->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guilds))
#7 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#10 {main} in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-06 14:09:21 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant o - assumed 'o' ~ APPPATH/classes/Model/Guilds.php [ 316 ] in /home4/gacoyne/public_html/application/classes/Model/Guilds.php:316
2014-01-06 14:09:21 --- DEBUG: #0 /home4/gacoyne/public_html/application/classes/Model/Guilds.php(316): Kohana_Core::error_handler(8, 'Use of undefine...', '/home4/gacoyne/...', 316, Array)
#1 /home4/gacoyne/public_html/application/classes/Controller/GameTemplate.php(81): Model_Guilds->updateRanks(0, '2014-01-06 14:0...')
#2 /home4/gacoyne/public_html/application/classes/Controller/Game.php(12): Controller_GameTemplate->before()
#3 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(69): Controller_Game->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#9 {main} in /home4/gacoyne/public_html/application/classes/Model/Guilds.php:316
2014-01-06 14:10:13 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'userID' in 'where clause' [ 				UPDATE guildRankingsUpdates				SET rank=1, points=339285				WHERE userID='27'			 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-06 14:10:13 --- DEBUG: #0 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, '?????UPDATE gui...', false, Array)
#1 /home4/gacoyne/public_html/application/classes/Model/Guilds.php(344): Kohana_Database_Query->execute()
#2 /home4/gacoyne/public_html/application/classes/Controller/GameTemplate.php(81): Model_Guilds->updateRanks(0, '2014-01-06 14:0...')
#3 /home4/gacoyne/public_html/application/classes/Controller/Game.php(12): Controller_GameTemplate->before()
#4 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(69): Controller_Game->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#7 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#10 {main} in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-06 14:11:33 --- EMERGENCY: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'gacoyne_fallofkingdoms.guildRankings' doesn't exist [ 				UPDATE guildRankings				SET rank=1, points=339285				WHERE userID='27'			 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-06 14:11:33 --- DEBUG: #0 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, '?????UPDATE gui...', false, Array)
#1 /home4/gacoyne/public_html/application/classes/Model/Guilds.php(344): Kohana_Database_Query->execute()
#2 /home4/gacoyne/public_html/application/classes/Controller/GameTemplate.php(81): Model_Guilds->updateRanks(0, '2014-01-06 14:0...')
#3 /home4/gacoyne/public_html/application/classes/Controller/Game.php(12): Controller_GameTemplate->before()
#4 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(69): Controller_Game->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#7 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#10 {main} in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-06 14:11:57 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'userID' in 'where clause' [ 				UPDATE guildrankings				SET rank=1, points=339285				WHERE userID='27'			 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-06 14:11:57 --- DEBUG: #0 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, '?????UPDATE gui...', false, Array)
#1 /home4/gacoyne/public_html/application/classes/Model/Guilds.php(344): Kohana_Database_Query->execute()
#2 /home4/gacoyne/public_html/application/classes/Controller/GameTemplate.php(81): Model_Guilds->updateRanks(0, '2014-01-06 14:0...')
#3 /home4/gacoyne/public_html/application/classes/Controller/Game.php(12): Controller_GameTemplate->before()
#4 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(69): Controller_Game->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#7 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#10 {main} in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-06 14:51:17 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'userID' in 'where clause' [ 				UPDATE guildrankings				SET rank=1, points=341333				WHERE userID='27'			 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-06 14:51:17 --- DEBUG: #0 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, '?????UPDATE gui...', false, Array)
#1 /home4/gacoyne/public_html/application/classes/Model/Guilds.php(344): Kohana_Database_Query->execute()
#2 /home4/gacoyne/public_html/application/classes/Controller/GameTemplate.php(81): Model_Guilds->updateRanks(1, '2014-01-06 14:3...')
#3 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(69): Controller_GameTemplate->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#6 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#9 {main} in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-06 17:22:21 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'userID' in 'where clause' [ 				UPDATE guildrankings				SET rank=1, points=350549				WHERE userID='27'			 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-06 17:22:21 --- DEBUG: #0 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, '?????UPDATE gui...', false, Array)
#1 /home4/gacoyne/public_html/application/classes/Model/Guilds.php(344): Kohana_Database_Query->execute()
#2 /home4/gacoyne/public_html/application/classes/Controller/GameTemplate.php(81): Model_Guilds->updateRanks(5, '2014-01-06 17:0...')
#3 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(69): Controller_GameTemplate->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#6 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#9 {main} in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-06 20:20:02 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'userID' in 'where clause' [ 				UPDATE guildrankings				SET rank=1, points=357717				WHERE userID='27'			 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-06 20:20:02 --- DEBUG: #0 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, '?????UPDATE gui...', false, Array)
#1 /home4/gacoyne/public_html/application/classes/Model/Guilds.php(344): Kohana_Database_Query->execute()
#2 /home4/gacoyne/public_html/application/classes/Controller/GameTemplate.php(81): Model_Guilds->updateRanks(6, '2014-01-06 20:0...')
#3 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(69): Controller_GameTemplate->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#6 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#9 {main} in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-06 22:12:39 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'userID' in 'where clause' [ 				UPDATE guildrankings				SET rank=1, points=359765				WHERE userID='27'			 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-06 22:12:39 --- DEBUG: #0 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, '?????UPDATE gui...', false, Array)
#1 /home4/gacoyne/public_html/application/classes/Model/Guilds.php(344): Kohana_Database_Query->execute()
#2 /home4/gacoyne/public_html/application/classes/Controller/GameTemplate.php(81): Model_Guilds->updateRanks(4, '2014-01-06 22:0...')
#3 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(69): Controller_GameTemplate->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#6 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#9 {main} in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-06 22:32:16 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'userID' in 'where clause' [ 				UPDATE guildrankings				SET rank=1, points=357717				WHERE userID='27'			 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-06 22:32:16 --- DEBUG: #0 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, '?????UPDATE gui...', false, Array)
#1 /home4/gacoyne/public_html/application/classes/Model/Guilds.php(344): Kohana_Database_Query->execute()
#2 /home4/gacoyne/public_html/application/classes/Controller/GameTemplate.php(81): Model_Guilds->updateRanks(1, '2014-01-06 22:3...')
#3 /home4/gacoyne/public_html/application/classes/Controller/Game.php(12): Controller_GameTemplate->before()
#4 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(69): Controller_Game->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#7 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#10 {main} in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-06 22:32:26 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'userID' in 'where clause' [ 				UPDATE guildrankings				SET rank=1, points=356693				WHERE userID='27'			 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-06 22:32:26 --- DEBUG: #0 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, '?????UPDATE gui...', false, Array)
#1 /home4/gacoyne/public_html/application/classes/Model/Guilds.php(344): Kohana_Database_Query->execute()
#2 /home4/gacoyne/public_html/application/classes/Controller/GameTemplate.php(81): Model_Guilds->updateRanks(0, '2014-01-06 22:3...')
#3 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(69): Controller_GameTemplate->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#6 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#9 {main} in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-06 23:20:59 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'userID' in 'where clause' [ 				UPDATE guildrankings				SET rank=1, points=358741				WHERE userID='27'			 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-06 23:20:59 --- DEBUG: #0 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, '?????UPDATE gui...', false, Array)
#1 /home4/gacoyne/public_html/application/classes/Model/Guilds.php(344): Kohana_Database_Query->execute()
#2 /home4/gacoyne/public_html/application/classes/Controller/GameTemplate.php(81): Model_Guilds->updateRanks(1, '2014-01-06 23:0...')
#3 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(69): Controller_GameTemplate->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#6 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#9 {main} in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php:251