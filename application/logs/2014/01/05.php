<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-05 21:07:08 --- EMERGENCY: Database_Exception [ 1045 ]: SQLSTATE[28000] [1045] Access denied for user 'gacoyne_root'@'192.232.220.104' (using password: YES) ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/PDO.php:242
2014-01-05 21:07:08 --- DEBUG: #0 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/PDO.php(242): Kohana_Database_PDO->connect()
#1 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database.php(478): Kohana_Database_PDO->escape('48b2aaced050913...')
#2 [internal function]: Kohana_Database->quote('48b2aaced050913...')
#3 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php(196): array_map(Array, Array)
#4 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query->compile(Object(Database_PDO))
#5 /home4/gacoyne/public_html/application/classes/Model/Profile.php(52): Kohana_Database_Query->execute()
#6 /home4/gacoyne/public_html/application/classes/Controller/GameTemplate.php(24): Model_Profile->getUserBySalt('48b2aaced050913...')
#7 /home4/gacoyne/public_html/application/classes/Controller/Game.php(12): Controller_GameTemplate->before()
#8 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(69): Controller_Game->before()
#9 [internal function]: Kohana_Controller->execute()
#10 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#11 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#14 {main} in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/PDO.php:242
2014-01-05 21:08:59 --- EMERGENCY: Database_Exception [ 1044 ]: SQLSTATE[42000] [1044] Access denied for user 'gacoyne_root'@'localhost' to database 'gacoyne_fallofkingdoms' ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/PDO.php:242
2014-01-05 21:08:59 --- DEBUG: #0 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/PDO.php(242): Kohana_Database_PDO->connect()
#1 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database.php(478): Kohana_Database_PDO->escape('48b2aaced050913...')
#2 [internal function]: Kohana_Database->quote('48b2aaced050913...')
#3 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php(196): array_map(Array, Array)
#4 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query->compile(Object(Database_PDO))
#5 /home4/gacoyne/public_html/application/classes/Model/Profile.php(52): Kohana_Database_Query->execute()
#6 /home4/gacoyne/public_html/application/classes/Controller/GameTemplate.php(24): Model_Profile->getUserBySalt('48b2aaced050913...')
#7 /home4/gacoyne/public_html/application/classes/Controller/Game.php(12): Controller_GameTemplate->before()
#8 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(69): Controller_Game->before()
#9 [internal function]: Kohana_Controller->execute()
#10 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#11 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#14 {main} in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/PDO.php:242
2014-01-05 21:13:59 --- EMERGENCY: Database_Exception [ 1044 ]: SQLSTATE[42000] [1044] Access denied for user 'gacoyne_root'@'localhost' to database 'gacoyne_fallofkingdoms' ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/PDO.php:242
2014-01-05 21:13:59 --- DEBUG: #0 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/PDO.php(242): Kohana_Database_PDO->connect()
#1 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database.php(478): Kohana_Database_PDO->escape('48b2aaced050913...')
#2 [internal function]: Kohana_Database->quote('48b2aaced050913...')
#3 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php(196): array_map(Array, Array)
#4 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query->compile(Object(Database_PDO))
#5 /home4/gacoyne/public_html/application/classes/Model/Profile.php(52): Kohana_Database_Query->execute()
#6 /home4/gacoyne/public_html/application/classes/Controller/GameTemplate.php(24): Model_Profile->getUserBySalt('48b2aaced050913...')
#7 /home4/gacoyne/public_html/application/classes/Controller/Game.php(12): Controller_GameTemplate->before()
#8 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(69): Controller_Game->before()
#9 [internal function]: Kohana_Controller->execute()
#10 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#11 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#14 {main} in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/PDO.php:242
2014-01-05 21:15:55 --- EMERGENCY: Database_Exception [ 1045 ]: SQLSTATE[28000] [1045] Access denied for user 'gacoyne_root'@'192.232.220.104' (using password: YES) ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/PDO.php:242
2014-01-05 21:15:55 --- DEBUG: #0 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/PDO.php(242): Kohana_Database_PDO->connect()
#1 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database.php(478): Kohana_Database_PDO->escape('48b2aaced050913...')
#2 [internal function]: Kohana_Database->quote('48b2aaced050913...')
#3 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php(196): array_map(Array, Array)
#4 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query->compile(Object(Database_PDO))
#5 /home4/gacoyne/public_html/application/classes/Model/Profile.php(52): Kohana_Database_Query->execute()
#6 /home4/gacoyne/public_html/application/classes/Controller/GameTemplate.php(24): Model_Profile->getUserBySalt('48b2aaced050913...')
#7 /home4/gacoyne/public_html/application/classes/Controller/Game.php(12): Controller_GameTemplate->before()
#8 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(69): Controller_Game->before()
#9 [internal function]: Kohana_Controller->execute()
#10 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#11 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#14 {main} in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/PDO.php:242
2014-01-05 21:18:06 --- EMERGENCY: Database_Exception [ 1045 ]: SQLSTATE[28000] [1045] Access denied for user 'gacoyne_root'@'192.232.220.104' (using password: YES) ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/PDO.php:130
2014-01-05 21:18:06 --- DEBUG: #0 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/PDO.php(130): Kohana_Database_PDO->connect()
#1 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, '????SELECT max(...', false, Array)
#2 /home4/gacoyne/public_html/application/classes/Model/Game.php(442): Kohana_Database_Query->execute()
#3 /home4/gacoyne/public_html/application/classes/Controller/GameTemplate.php(51): Model_Game->getLastRankUpdate()
#4 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(69): Controller_GameTemplate->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#7 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#10 {main} in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/PDO.php:130
2014-01-05 21:18:12 --- EMERGENCY: Database_Exception [ 1045 ]: SQLSTATE[28000] [1045] Access denied for user 'gacoyne_root'@'192.232.220.104' (using password: YES) ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/PDO.php:242
2014-01-05 21:18:12 --- DEBUG: #0 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/PDO.php(242): Kohana_Database_PDO->connect()
#1 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database.php(478): Kohana_Database_PDO->escape('48b2aaced050913...')
#2 [internal function]: Kohana_Database->quote('48b2aaced050913...')
#3 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php(196): array_map(Array, Array)
#4 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query->compile(Object(Database_PDO))
#5 /home4/gacoyne/public_html/application/classes/Model/Profile.php(52): Kohana_Database_Query->execute()
#6 /home4/gacoyne/public_html/application/classes/Controller/GameTemplate.php(24): Model_Profile->getUserBySalt('48b2aaced050913...')
#7 /home4/gacoyne/public_html/application/classes/Controller/Game.php(12): Controller_GameTemplate->before()
#8 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(69): Controller_Game->before()
#9 [internal function]: Kohana_Controller->execute()
#10 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#11 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#14 {main} in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/PDO.php:242
2014-01-05 21:19:20 --- EMERGENCY: Database_Exception [ 1045 ]: SQLSTATE[28000] [1045] Access denied for user 'gacoyne_root'@'192.232.220.104' (using password: YES) ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/PDO.php:242
2014-01-05 21:19:20 --- DEBUG: #0 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/PDO.php(242): Kohana_Database_PDO->connect()
#1 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database.php(478): Kohana_Database_PDO->escape('48b2aaced050913...')
#2 [internal function]: Kohana_Database->quote('48b2aaced050913...')
#3 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php(196): array_map(Array, Array)
#4 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query->compile(Object(Database_PDO))
#5 /home4/gacoyne/public_html/application/classes/Model/Profile.php(52): Kohana_Database_Query->execute()
#6 /home4/gacoyne/public_html/application/classes/Controller/GameTemplate.php(24): Model_Profile->getUserBySalt('48b2aaced050913...')
#7 /home4/gacoyne/public_html/application/classes/Controller/Game.php(12): Controller_GameTemplate->before()
#8 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(69): Controller_Game->before()
#9 [internal function]: Kohana_Controller->execute()
#10 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#11 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#14 {main} in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/PDO.php:242
2014-01-05 21:21:46 --- EMERGENCY: Database_Exception [ 1044 ]: SQLSTATE[42000] [1044] Access denied for user 'gacoyne_root'@'localhost' to database 'gacoyne_fallofkingdoms' ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/PDO.php:242
2014-01-05 21:21:46 --- DEBUG: #0 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/PDO.php(242): Kohana_Database_PDO->connect()
#1 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database.php(478): Kohana_Database_PDO->escape('48b2aaced050913...')
#2 [internal function]: Kohana_Database->quote('48b2aaced050913...')
#3 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php(196): array_map(Array, Array)
#4 /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query->compile(Object(Database_PDO))
#5 /home4/gacoyne/public_html/application/classes/Model/Profile.php(52): Kohana_Database_Query->execute()
#6 /home4/gacoyne/public_html/application/classes/Controller/GameTemplate.php(24): Model_Profile->getUserBySalt('48b2aaced050913...')
#7 /home4/gacoyne/public_html/application/classes/Controller/Game.php(12): Controller_GameTemplate->before()
#8 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(69): Controller_Game->before()
#9 [internal function]: Kohana_Controller->execute()
#10 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#11 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#14 {main} in /home4/gacoyne/public_html/modules/database/classes/Kohana/Database/PDO.php:242
2014-01-05 21:25:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'Captcha_Alpha' not found ~ MODPATH/captcha/classes/captcha.php [ 70 ] in file:line
2014-01-05 21:25:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-05 21:25:41 --- EMERGENCY: ErrorException [ 1 ]: Class 'Captcha_Alpha' not found ~ MODPATH/captcha/classes/captcha.php [ 70 ] in file:line
2014-01-05 21:25:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-05 21:29:25 --- EMERGENCY: ErrorException [ 1 ]: Class 'Captcha_Alpha' not found ~ MODPATH/captcha/classes/captcha.php [ 70 ] in file:line
2014-01-05 21:29:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-05 21:29:29 --- EMERGENCY: ErrorException [ 1 ]: Class 'Captcha_Alpha' not found ~ MODPATH/captcha/classes/captcha.php [ 70 ] in file:line
2014-01-05 21:29:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-05 21:38:10 --- EMERGENCY: ErrorException [ 1 ]: Class 'Captcha_Alpha' not found ~ MODPATH/captcha/classes/captcha.php [ 70 ] in file:line
2014-01-05 21:38:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-05 21:53:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: recaptcha_challenge_field ~ APPPATH/views/Game/captcha.php [ 38 ] in /home4/gacoyne/public_html/application/views/Game/captcha.php:38
2014-01-05 21:53:51 --- DEBUG: #0 /home4/gacoyne/public_html/application/views/Game/captcha.php(38): Kohana_Core::error_handler(8, 'Undefined index...', '/home4/gacoyne/...', 38, Array)
#1 /home4/gacoyne/public_html/system/classes/Kohana/View.php(61): include('/home4/gacoyne/...')
#2 /home4/gacoyne/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home4/gacoyne/...', Array)
#3 /home4/gacoyne/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home4/gacoyne/public_html/application/views/template/template.php(37): Kohana_View->__toString()
#5 /home4/gacoyne/public_html/system/classes/Kohana/View.php(61): include('/home4/gacoyne/...')
#6 /home4/gacoyne/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home4/gacoyne/...', Array)
#7 /home4/gacoyne/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home4/gacoyne/public_html/application/classes/Controller/GameTemplate.php(208): Kohana_Controller_Template->after()
#9 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(87): Controller_GameTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#12 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#15 {main} in /home4/gacoyne/public_html/application/views/Game/captcha.php:38
2014-01-05 21:56:45 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/views/Game/captcha.php [ 3 ] in file:line
2014-01-05 21:56:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-05 23:00:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH/classes/Controller/Profile.php [ 44 ] in /home4/gacoyne/public_html/application/classes/Controller/Profile.php:44
2014-01-05 23:00:27 --- DEBUG: #0 /home4/gacoyne/public_html/application/classes/Controller/Profile.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', '/home4/gacoyne/...', 44, Array)
#1 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(84): Controller_Profile->action_settings()
#2 [internal function]: Kohana_Controller->execute()
#3 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#7 {main} in /home4/gacoyne/public_html/application/classes/Controller/Profile.php:44
2014-01-05 23:04:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: user ~ APPPATH/classes/Controller/Profile.php [ 45 ] in /home4/gacoyne/public_html/application/classes/Controller/Profile.php:45
2014-01-05 23:04:15 --- DEBUG: #0 /home4/gacoyne/public_html/application/classes/Controller/Profile.php(45): Kohana_Core::error_handler(8, 'Undefined index...', '/home4/gacoyne/...', 45, Array)
#1 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(84): Controller_Profile->action_settings()
#2 [internal function]: Kohana_Controller->execute()
#3 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#7 {main} in /home4/gacoyne/public_html/application/classes/Controller/Profile.php:45
2014-01-05 23:04:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH/classes/Controller/Profile.php [ 52 ] in /home4/gacoyne/public_html/application/classes/Controller/Profile.php:52
2014-01-05 23:04:32 --- DEBUG: #0 /home4/gacoyne/public_html/application/classes/Controller/Profile.php(52): Kohana_Core::error_handler(8, 'Undefined varia...', '/home4/gacoyne/...', 52, Array)
#1 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(84): Controller_Profile->action_settings()
#2 [internal function]: Kohana_Controller->execute()
#3 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#7 {main} in /home4/gacoyne/public_html/application/classes/Controller/Profile.php:52
2014-01-05 23:04:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH/classes/Controller/Profile.php [ 52 ] in /home4/gacoyne/public_html/application/classes/Controller/Profile.php:52
2014-01-05 23:04:44 --- DEBUG: #0 /home4/gacoyne/public_html/application/classes/Controller/Profile.php(52): Kohana_Core::error_handler(8, 'Undefined varia...', '/home4/gacoyne/...', 52, Array)
#1 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(84): Controller_Profile->action_settings()
#2 [internal function]: Kohana_Controller->execute()
#3 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#7 {main} in /home4/gacoyne/public_html/application/classes/Controller/Profile.php:52
2014-01-05 23:05:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/profile/Settings.php [ 3 ] in /home4/gacoyne/public_html/application/views/profile/Settings.php:3
2014-01-05 23:05:34 --- DEBUG: #0 /home4/gacoyne/public_html/application/views/profile/Settings.php(3): Kohana_Core::error_handler(8, 'Undefined offse...', '/home4/gacoyne/...', 3, Array)
#1 /home4/gacoyne/public_html/system/classes/Kohana/View.php(61): include('/home4/gacoyne/...')
#2 /home4/gacoyne/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home4/gacoyne/...', Array)
#3 /home4/gacoyne/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home4/gacoyne/public_html/application/views/template/template.php(37): Kohana_View->__toString()
#5 /home4/gacoyne/public_html/system/classes/Kohana/View.php(61): include('/home4/gacoyne/...')
#6 /home4/gacoyne/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home4/gacoyne/...', Array)
#7 /home4/gacoyne/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home4/gacoyne/public_html/application/classes/Controller/GameTemplate.php(208): Kohana_Controller_Template->after()
#9 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(87): Controller_GameTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#12 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#15 {main} in /home4/gacoyne/public_html/application/views/profile/Settings.php:3
2014-01-05 23:05:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/profile/Settings.php [ 3 ] in /home4/gacoyne/public_html/application/views/profile/Settings.php:3
2014-01-05 23:05:46 --- DEBUG: #0 /home4/gacoyne/public_html/application/views/profile/Settings.php(3): Kohana_Core::error_handler(8, 'Undefined offse...', '/home4/gacoyne/...', 3, Array)
#1 /home4/gacoyne/public_html/system/classes/Kohana/View.php(61): include('/home4/gacoyne/...')
#2 /home4/gacoyne/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home4/gacoyne/...', Array)
#3 /home4/gacoyne/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home4/gacoyne/public_html/application/views/template/template.php(37): Kohana_View->__toString()
#5 /home4/gacoyne/public_html/system/classes/Kohana/View.php(61): include('/home4/gacoyne/...')
#6 /home4/gacoyne/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home4/gacoyne/...', Array)
#7 /home4/gacoyne/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home4/gacoyne/public_html/application/classes/Controller/GameTemplate.php(208): Kohana_Controller_Template->after()
#9 /home4/gacoyne/public_html/system/classes/Kohana/Controller.php(87): Controller_GameTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#12 /home4/gacoyne/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home4/gacoyne/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /home4/gacoyne/public_html/index.php(130): Kohana_Request->execute()
#15 {main} in /home4/gacoyne/public_html/application/views/profile/Settings.php:3
2014-01-05 23:16:15 --- EMERGENCY: ErrorException [ 1 ]: Class 'Validate' not found ~ APPPATH/views/profile/Settings.php [ 5 ] in file:line
2014-01-05 23:16:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-05 23:24:00 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/views/profile/Settings.php [ 17 ] in file:line
2014-01-05 23:24:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-05 23:24:12 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_AS, expecting ';' ~ APPPATH/views/profile/Settings.php [ 28 ] in file:line
2014-01-05 23:24:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-05 23:24:29 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/views/profile/Settings.php [ 25 ] in file:line
2014-01-05 23:24:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-05 23:24:48 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/views/profile/Settings.php [ 31 ] in file:line
2014-01-05 23:24:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line