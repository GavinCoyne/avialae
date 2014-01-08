<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-07 02:21:36 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'userID' in 'where clause' [ 				UPDATE guildrankings				SET rank=1, points=370005				WHERE userID='27'			 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-07 02:21:36 --- DEBUG: #0 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, '?????UPDATE gui...', false, Array)
#1 /home4/gacoyne/public_html/application/classes/Model/Guilds.php(344): Kohana_Database_Query->execute()
#2 /home4/gacoyne/public_html/application/classes/Controller/GameTemplate.php(81): Model_Guilds->updateRanks(6, '2014-01-07 02:0...')
#3 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(69): Controller_GameTemplate->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#6 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#9 {main} in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-07 05:24:29 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'userID' in 'where clause' [ 				UPDATE guildrankings				SET rank=1, points=376149				WHERE userID='27'			 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-07 05:24:29 --- DEBUG: #0 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, '?????UPDATE gui...', false, Array)
#1 /home4/gacoyne/public_html/application/classes/Model/Guilds.php(344): Kohana_Database_Query->execute()
#2 /home4/gacoyne/public_html/application/classes/Controller/GameTemplate.php(81): Model_Guilds->updateRanks(6, '2014-01-07 05:0...')
#3 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(69): Controller_GameTemplate->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#6 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#9 {main} in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-07 06:08:52 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'userID' in 'where clause' [ 				UPDATE guildrankings				SET rank=1, points=374101				WHERE userID='27'			 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-07 06:08:52 --- DEBUG: #0 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, '?????UPDATE gui...', false, Array)
#1 /home4/gacoyne/public_html/application/classes/Model/Guilds.php(344): Kohana_Database_Query->execute()
#2 /home4/gacoyne/public_html/application/classes/Controller/GameTemplate.php(81): Model_Guilds->updateRanks(2, '2014-01-07 06:0...')
#3 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(69): Controller_GameTemplate->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#6 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#9 {main} in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-07 08:31:57 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'userID' in 'where clause' [ 				UPDATE guildrankings				SET rank=1, points=382293				WHERE userID='27'			 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-07 08:31:57 --- DEBUG: #0 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, '?????UPDATE gui...', false, Array)
#1 /home4/gacoyne/public_html/application/classes/Model/Guilds.php(344): Kohana_Database_Query->execute()
#2 /home4/gacoyne/public_html/application/classes/Controller/GameTemplate.php(81): Model_Guilds->updateRanks(5, '2014-01-07 08:3...')
#3 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(69): Controller_GameTemplate->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#6 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#9 {main} in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-07 09:20:22 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'userID' in 'where clause' [ 				UPDATE guildrankings				SET rank=1, points=379221				WHERE userID='27'			 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-07 09:20:22 --- DEBUG: #0 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, '?????UPDATE gui...', false, Array)
#1 /home4/gacoyne/public_html/application/classes/Model/Guilds.php(344): Kohana_Database_Query->execute()
#2 /home4/gacoyne/public_html/application/classes/Controller/GameTemplate.php(81): Model_Guilds->updateRanks(1, '2014-01-07 09:0...')
#3 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(69): Controller_GameTemplate->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#6 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#9 {main} in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-07 09:34:46 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'userID' in 'where clause' [ 				UPDATE guildrankings				SET rank=1, points=380245				WHERE userID='27'			 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-07 09:34:46 --- DEBUG: #0 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, '?????UPDATE gui...', false, Array)
#1 /home4/gacoyne/public_html/application/classes/Model/Guilds.php(344): Kohana_Database_Query->execute()
#2 /home4/gacoyne/public_html/application/classes/Controller/GameTemplate.php(81): Model_Guilds->updateRanks(1, '2014-01-07 09:3...')
#3 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(69): Controller_GameTemplate->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#6 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#9 {main} in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-07 12:05:52 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'userID' in 'where clause' [ 				UPDATE guildrankings				SET rank=1, points=389461				WHERE userID='27'			 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-07 12:05:52 --- DEBUG: #0 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, '?????UPDATE gui...', false, Array)
#1 /home4/gacoyne/public_html/application/classes/Model/Guilds.php(344): Kohana_Database_Query->execute()
#2 /home4/gacoyne/public_html/application/classes/Controller/GameTemplate.php(81): Model_Guilds->updateRanks(5, '2014-01-07 12:0...')
#3 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(69): Controller_GameTemplate->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#6 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#9 {main} in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-07 12:34:59 --- EMERGENCY: ErrorException [ 1 ]: Class 'Validate' not found ~ APPPATH/classes/Controller/Register.php [ 24 ] in file:line
2014-01-07 12:34:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-07 12:37:25 --- EMERGENCY: ErrorException [ 1 ]: Class 'Validate' not found ~ APPPATH/classes/Controller/Register.php [ 24 ] in file:line
2014-01-07 12:37:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-07 12:39:47 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Kohana_Valid::min_length() ~ SYSPATH/classes/Kohana/Valid.php [ 49 ] in /home4/gacoyne/public_html/system/classes/Kohana/Valid.php:49
2014-01-07 12:39:47 --- DEBUG: #0 /home4/gacoyne/public_html/system/classes/Kohana/Valid.php(49): Kohana_Core::error_handler(2, 'Missing argumen...', '/home4/gacoyne/...', 49, Array)
#1 [internal function]: Kohana_Valid::min_length(2)
#2 /home4/gacoyne/public_html/system/classes/Kohana/Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#3 /home4/gacoyne/public_html/application/classes/Controller/Register.php(26): Kohana_Validation->check()
#4 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(84): Controller_Register->action_register()
#5 [internal function]: Kohana_Controller->execute()
#6 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#7 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#10 {main} in /home4/gacoyne/public_html/system/classes/Kohana/Valid.php:49
2014-01-07 12:47:26 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Kohana_Valid::min_length() ~ SYSPATH/classes/Kohana/Valid.php [ 49 ] in /home4/gacoyne/public_html/system/classes/Kohana/Valid.php:49
2014-01-07 12:47:26 --- DEBUG: #0 /home4/gacoyne/public_html/system/classes/Kohana/Valid.php(49): Kohana_Core::error_handler(2, 'Missing argumen...', '/home4/gacoyne/...', 49, Array)
#1 [internal function]: Kohana_Valid::min_length(2)
#2 /home4/gacoyne/public_html/system/classes/Kohana/Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#3 /home4/gacoyne/public_html/application/classes/Controller/Register.php(26): Kohana_Validation->check()
#4 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(84): Controller_Register->action_register()
#5 [internal function]: Kohana_Controller->execute()
#6 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#7 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#10 {main} in /home4/gacoyne/public_html/system/classes/Kohana/Valid.php:49
2014-01-07 12:48:58 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Kohana_Valid::min_length() ~ SYSPATH/classes/Kohana/Valid.php [ 49 ] in /home4/gacoyne/public_html/system/classes/Kohana/Valid.php:49
2014-01-07 12:48:58 --- DEBUG: #0 /home4/gacoyne/public_html/system/classes/Kohana/Valid.php(49): Kohana_Core::error_handler(2, 'Missing argumen...', '/home4/gacoyne/...', 49, Array)
#1 [internal function]: Kohana_Valid::min_length(2)
#2 /home4/gacoyne/public_html/system/classes/Kohana/Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#3 /home4/gacoyne/public_html/application/classes/Controller/Register.php(26): Kohana_Validation->check()
#4 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(84): Controller_Register->action_register()
#5 [internal function]: Kohana_Controller->execute()
#6 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#7 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#10 {main} in /home4/gacoyne/public_html/system/classes/Kohana/Valid.php:49
2014-01-07 12:51:53 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/classes/Controller/Register.php [ 28 ] in file:line
2014-01-07 12:51:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-07 12:52:53 --- EMERGENCY: ReflectionException [ 0 ]: Function password() does not exist ~ SYSPATH/classes/Kohana/Validation.php [ 396 ] in /home4/gacoyne/public_html/system/classes/Kohana/Validation.php:396
2014-01-07 12:52:53 --- DEBUG: #0 /home4/gacoyne/public_html/system/classes/Kohana/Validation.php(396): ReflectionFunction->__construct('password')
#1 /home4/gacoyne/public_html/application/classes/Controller/Register.php(28): Kohana_Validation->check()
#2 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(84): Controller_Register->action_register()
#3 [internal function]: Kohana_Controller->execute()
#4 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#5 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#8 {main} in /home4/gacoyne/public_html/system/classes/Kohana/Validation.php:396
2014-01-07 12:58:57 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 3 for Kohana_Valid::matches() ~ SYSPATH/classes/Kohana/Valid.php [ 546 ] in /home4/gacoyne/public_html/system/classes/Kohana/Valid.php:546
2014-01-07 12:58:57 --- DEBUG: #0 /home4/gacoyne/public_html/system/classes/Kohana/Valid.php(546): Kohana_Core::error_handler(2, 'Missing argumen...', '/home4/gacoyne/...', 546, Array)
#1 [internal function]: Kohana_Valid::matches('Gavin3', 'passwordCheck')
#2 /home4/gacoyne/public_html/system/classes/Kohana/Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#3 /home4/gacoyne/public_html/application/classes/Controller/Register.php(29): Kohana_Validation->check()
#4 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(84): Controller_Register->action_register()
#5 [internal function]: Kohana_Controller->execute()
#6 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#7 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#10 {main} in /home4/gacoyne/public_html/system/classes/Kohana/Valid.php:546
2014-01-07 13:12:41 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 3 for Kohana_Valid::matches() ~ SYSPATH/classes/Kohana/Valid.php [ 546 ] in /home4/gacoyne/public_html/system/classes/Kohana/Valid.php:546
2014-01-07 13:12:41 --- DEBUG: #0 /home4/gacoyne/public_html/system/classes/Kohana/Valid.php(546): Kohana_Core::error_handler(2, 'Missing argumen...', '/home4/gacoyne/...', 546, Array)
#1 [internal function]: Kohana_Valid::matches('Gavin3', 'passwordCheck')
#2 /home4/gacoyne/public_html/system/classes/Kohana/Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#3 /home4/gacoyne/public_html/application/classes/Controller/Register.php(31): Kohana_Validation->check()
#4 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(84): Controller_Register->action_register()
#5 [internal function]: Kohana_Controller->execute()
#6 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#7 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#10 {main} in /home4/gacoyne/public_html/system/classes/Kohana/Valid.php:546
2014-01-07 13:14:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: passwordCheck ~ SYSPATH/classes/Kohana/Validation.php [ 102 ] in /home4/gacoyne/public_html/system/classes/Kohana/Validation.php:102
2014-01-07 13:14:14 --- DEBUG: #0 /home4/gacoyne/public_html/system/classes/Kohana/Validation.php(102): Kohana_Core::error_handler(8, 'Undefined index...', '/home4/gacoyne/...', 102, Array)
#1 /home4/gacoyne/public_html/system/classes/Kohana/Valid.php(548): Kohana_Validation->offsetGet('passwordCheck')
#2 [internal function]: Kohana_Valid::matches(Object(Validation), 'passwordCheck', 'password')
#3 /home4/gacoyne/public_html/system/classes/Kohana/Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#4 /home4/gacoyne/public_html/application/classes/Controller/Register.php(31): Kohana_Validation->check()
#5 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(84): Controller_Register->action_register()
#6 [internal function]: Kohana_Controller->execute()
#7 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#8 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#11 {main} in /home4/gacoyne/public_html/system/classes/Kohana/Validation.php:102
2014-01-07 13:19:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: passwordCheck ~ SYSPATH/classes/Kohana/Validation.php [ 102 ] in /home4/gacoyne/public_html/system/classes/Kohana/Validation.php:102
2014-01-07 13:19:03 --- DEBUG: #0 /home4/gacoyne/public_html/system/classes/Kohana/Validation.php(102): Kohana_Core::error_handler(8, 'Undefined index...', '/home4/gacoyne/...', 102, Array)
#1 /home4/gacoyne/public_html/system/classes/Kohana/Valid.php(548): Kohana_Validation->offsetGet('passwordCheck')
#2 [internal function]: Kohana_Valid::matches(Object(Validation), 'passwordCheck', 'Gavin3')
#3 /home4/gacoyne/public_html/system/classes/Kohana/Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#4 /home4/gacoyne/public_html/application/classes/Controller/Register.php(31): Kohana_Validation->check()
#5 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(84): Controller_Register->action_register()
#6 [internal function]: Kohana_Controller->execute()
#7 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#8 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#11 {main} in /home4/gacoyne/public_html/system/classes/Kohana/Validation.php:102
2014-01-07 20:45:34 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH/classes/Controller/GameTemplate.php [ 8 ] in file:line
2014-01-07 20:45:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-07 20:45:38 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH/classes/Controller/GameTemplate.php [ 8 ] in file:line
2014-01-07 20:45:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-07 20:46:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: captcha ~ APPPATH/classes/Controller/GameTemplate.php [ 125 ] in /home4/gacoyne/public_html/application/classes/Controller/GameTemplate.php:125
2014-01-07 20:46:39 --- DEBUG: #0 /home4/gacoyne/public_html/application/classes/Controller/GameTemplate.php(125): Kohana_Core::error_handler(8, 'Undefined varia...', '/home4/gacoyne/...', 125, Array)
#1 /home4/gacoyne/public_html/application/classes/Controller/Login.php(9): Controller_GameTemplate->before()
#2 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(69): Controller_Login->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#8 {main} in /home4/gacoyne/public_html/application/classes/Controller/GameTemplate.php:125
2014-01-07 21:55:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: user ~ APPPATH/views/Register/login.php [ 4 ] in /home4/gacoyne/public_html/application/views/Register/login.php:4
2014-01-07 21:55:55 --- DEBUG: #0 /home4/gacoyne/public_html/application/views/Register/login.php(4): Kohana_Core::error_handler(8, 'Undefined index...', '/home4/gacoyne/...', 4, Array)
#1 /home4/gacoyne/public_html/system/classes/Kohana/View.php(61): include('/home4/gacoyne/...')
#2 /home4/gacoyne/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home4/gacoyne/...', Array)
#3 /home4/gacoyne/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home4/gacoyne/public_html/application/views/template/template.php(29): Kohana_View->__toString()
#5 /home4/gacoyne/public_html/system/classes/Kohana/View.php(61): include('/home4/gacoyne/...')
#6 /home4/gacoyne/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home4/gacoyne/...', Array)
#7 /home4/gacoyne/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home4/gacoyne/public_html/application/classes/Controller/GameTemplate.php(231): Kohana_Controller_Template->after()
#9 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(87): Controller_GameTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#12 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#15 {main} in /home4/gacoyne/public_html/application/views/Register/login.php:4
2014-01-07 21:55:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: user ~ APPPATH/views/Register/register.php [ 3 ] in /home4/gacoyne/public_html/application/views/Register/register.php:3
2014-01-07 21:55:55 --- DEBUG: #0 /home4/gacoyne/public_html/application/views/Register/register.php(3): Kohana_Core::error_handler(8, 'Undefined index...', '/home4/gacoyne/...', 3, Array)
#1 /home4/gacoyne/public_html/system/classes/Kohana/View.php(61): include('/home4/gacoyne/...')
#2 /home4/gacoyne/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home4/gacoyne/...', Array)
#3 /home4/gacoyne/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home4/gacoyne/public_html/application/views/template/template.php(37): Kohana_View->__toString()
#5 /home4/gacoyne/public_html/system/classes/Kohana/View.php(61): include('/home4/gacoyne/...')
#6 /home4/gacoyne/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home4/gacoyne/...', Array)
#7 /home4/gacoyne/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home4/gacoyne/public_html/application/classes/Controller/GameTemplate.php(231): Kohana_Controller_Template->after()
#9 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(87): Controller_GameTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#12 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#15 {main} in /home4/gacoyne/public_html/application/views/Register/register.php:3
2014-01-07 22:12:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: user ~ APPPATH/views/Register/login.php [ 4 ] in /home4/gacoyne/public_html/application/views/Register/login.php:4
2014-01-07 22:12:27 --- DEBUG: #0 /home4/gacoyne/public_html/application/views/Register/login.php(4): Kohana_Core::error_handler(8, 'Undefined index...', '/home4/gacoyne/...', 4, Array)
#1 /home4/gacoyne/public_html/system/classes/Kohana/View.php(61): include('/home4/gacoyne/...')
#2 /home4/gacoyne/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home4/gacoyne/...', Array)
#3 /home4/gacoyne/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home4/gacoyne/public_html/application/views/template/template.php(29): Kohana_View->__toString()
#5 /home4/gacoyne/public_html/system/classes/Kohana/View.php(61): include('/home4/gacoyne/...')
#6 /home4/gacoyne/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home4/gacoyne/...', Array)
#7 /home4/gacoyne/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home4/gacoyne/public_html/application/classes/Controller/GameTemplate.php(231): Kohana_Controller_Template->after()
#9 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(87): Controller_GameTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#12 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#15 {main} in /home4/gacoyne/public_html/application/views/Register/login.php:4
2014-01-07 22:12:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: user ~ APPPATH/views/Register/register.php [ 3 ] in /home4/gacoyne/public_html/application/views/Register/register.php:3
2014-01-07 22:12:27 --- DEBUG: #0 /home4/gacoyne/public_html/application/views/Register/register.php(3): Kohana_Core::error_handler(8, 'Undefined index...', '/home4/gacoyne/...', 3, Array)
#1 /home4/gacoyne/public_html/system/classes/Kohana/View.php(61): include('/home4/gacoyne/...')
#2 /home4/gacoyne/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home4/gacoyne/...', Array)
#3 /home4/gacoyne/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home4/gacoyne/public_html/application/views/template/template.php(37): Kohana_View->__toString()
#5 /home4/gacoyne/public_html/system/classes/Kohana/View.php(61): include('/home4/gacoyne/...')
#6 /home4/gacoyne/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home4/gacoyne/...', Array)
#7 /home4/gacoyne/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home4/gacoyne/public_html/application/classes/Controller/GameTemplate.php(231): Kohana_Controller_Template->after()
#9 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(87): Controller_GameTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#12 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#15 {main} in /home4/gacoyne/public_html/application/views/Register/register.php:3
2014-01-07 22:13:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: user ~ APPPATH/views/Register/login.php [ 4 ] in /home4/gacoyne/public_html/application/views/Register/login.php:4
2014-01-07 22:13:13 --- DEBUG: #0 /home4/gacoyne/public_html/application/views/Register/login.php(4): Kohana_Core::error_handler(8, 'Undefined index...', '/home4/gacoyne/...', 4, Array)
#1 /home4/gacoyne/public_html/system/classes/Kohana/View.php(61): include('/home4/gacoyne/...')
#2 /home4/gacoyne/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home4/gacoyne/...', Array)
#3 /home4/gacoyne/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home4/gacoyne/public_html/application/views/template/template.php(29): Kohana_View->__toString()
#5 /home4/gacoyne/public_html/system/classes/Kohana/View.php(61): include('/home4/gacoyne/...')
#6 /home4/gacoyne/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home4/gacoyne/...', Array)
#7 /home4/gacoyne/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home4/gacoyne/public_html/application/classes/Controller/GameTemplate.php(231): Kohana_Controller_Template->after()
#9 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(87): Controller_GameTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#12 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#15 {main} in /home4/gacoyne/public_html/application/views/Register/login.php:4
2014-01-07 22:30:00 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'userID' in 'where clause' [ 				UPDATE guildrankings				SET rank=1, points=406869				WHERE userID='27'			 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-07 22:30:00 --- DEBUG: #0 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, '?????UPDATE gui...', false, Array)
#1 /home4/gacoyne/public_html/application/classes/Model/Guilds.php(337): Kohana_Database_Query->execute()
#2 /home4/gacoyne/public_html/application/classes/Controller/GameTemplate.php(82): Model_Guilds->updateRanks(1, '2014-01-07 22:3...')
#3 /home4/gacoyne/public_html/application/classes/Controller/Guilds.php(20): Controller_GameTemplate->before()
#4 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(69): Controller_Guilds->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guilds))
#7 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#10 {main} in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-07 22:38:12 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Model/Guilds.php [ 310 ] in file:line
2014-01-07 22:38:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-07 22:57:50 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Register.php [ 60 ] in file:line
2014-01-07 22:57:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-07 22:58:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/classes/Controller/Register.php [ 59 ] in /home4/gacoyne/public_html/application/classes/Controller/Register.php:59
2014-01-07 22:58:10 --- DEBUG: #0 /home4/gacoyne/public_html/application/classes/Controller/Register.php(59): Kohana_Core::error_handler(8, 'Undefined varia...', '/home4/gacoyne/...', 59, Array)
#1 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(84): Controller_Register->action_register()
#2 [internal function]: Kohana_Controller->execute()
#3 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#4 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#7 {main} in /home4/gacoyne/public_html/application/classes/Controller/Register.php:59
2014-01-07 22:58:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Controller/Register.php [ 62 ] in /home4/gacoyne/public_html/application/classes/Controller/Register.php:62
2014-01-07 22:58:44 --- DEBUG: #0 /home4/gacoyne/public_html/application/classes/Controller/Register.php(62): Kohana_Core::error_handler(8, 'Undefined offse...', '/home4/gacoyne/...', 62, Array)
#1 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(84): Controller_Register->action_register()
#2 [internal function]: Kohana_Controller->execute()
#3 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#4 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#7 {main} in /home4/gacoyne/public_html/application/classes/Controller/Register.php:62
2014-01-07 23:20:18 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant console - assumed 'console' ~ APPPATH/classes/Controller/GameTemplate.php [ 180 ] in /home4/gacoyne/public_html/application/classes/Controller/GameTemplate.php:180
2014-01-07 23:20:18 --- DEBUG: #0 /home4/gacoyne/public_html/application/classes/Controller/GameTemplate.php(180): Kohana_Core::error_handler(8, 'Use of undefine...', '/home4/gacoyne/...', 180, Array)
#1 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(87): Controller_GameTemplate->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#7 {main} in /home4/gacoyne/public_html/application/classes/Controller/GameTemplate.php:180
2014-01-07 23:25:06 --- EMERGENCY: Database_Exception [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry '1-33' for key 'PRIMARY' [ 
		INSERT INTO buildingstousers 
		(buildingID, userID, amount) 
		VALUES (1, '33', 1) ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-07 23:25:06 --- DEBUG: #0 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, '???INSERT INTO ...', false, Array)
#1 /home4/gacoyne/public_html/application/classes/Model/Game.php(61): Kohana_Database_Query->execute()
#2 /home4/gacoyne/public_html/application/classes/Controller/Game.php(74): Model_Game->activateUser('0')
#3 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(84): Controller_Game->action_ativateAjax()
#4 [internal function]: Kohana_Controller->execute()
#5 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#9 {main} in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-07 23:34:16 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function isActive() on a non-object ~ APPPATH/classes/Controller/Game.php [ 42 ] in file:line
2014-01-07 23:34:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line