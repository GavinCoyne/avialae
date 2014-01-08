<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-26 00:01:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: guildID ~ APPPATH/classes/Controller/Guilds.php [ 30 ] in /home/content/96/11745996/html/application/classes/Controller/Guilds.php:30
2013-12-26 00:01:31 --- DEBUG: #0 /home/content/96/11745996/html/application/classes/Controller/Guilds.php(30): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/9...', 30, Array)
#1 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(84): Controller_Guilds->action_Guild()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guilds))
#4 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#7 {main} in /home/content/96/11745996/html/application/classes/Controller/Guilds.php:30
2013-12-26 00:01:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: guildID ~ APPPATH/classes/Controller/Guilds.php [ 30 ] in /home/content/96/11745996/html/application/classes/Controller/Guilds.php:30
2013-12-26 00:01:40 --- DEBUG: #0 /home/content/96/11745996/html/application/classes/Controller/Guilds.php(30): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/9...', 30, Array)
#1 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(84): Controller_Guilds->action_Guild()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guilds))
#4 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#7 {main} in /home/content/96/11745996/html/application/classes/Controller/Guilds.php:30
2013-12-26 00:06:16 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'SELECT sum(amount) FROM unitstousers utu WHERE user.userID = utu.userID ) army
	' at line 2 [ 
							SELECT karma, rank, gold, race, points, salt, r.userID, r.guildID
							(SELECT sum(amount) FROM unitstousers utu WHERE user.userID = utu.userID ) army
							FROM user
							INNER JOIN  roundtable r
							ON r.userID = user.userID
							WHERE userName='speed_sk8er'
							 
							 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php:251
2013-12-26 00:06:16 --- DEBUG: #0 /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, '????????SELECT ...', false, Array)
#1 /home/content/96/11745996/html/application/classes/Model/Profile.php(37): Kohana_Database_Query->execute()
#2 /home/content/96/11745996/html/application/classes/Controller/Guilds.php(30): Model_Profile->getProfileByName('speed_sk8er')
#3 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(84): Controller_Guilds->action_Guild()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guilds))
#6 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#9 {main} in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php:251
2013-12-26 19:54:07 --- EMERGENCY: ErrorException [ 1 ]: Class 'Captcha' not found ~ APPPATH/views/Game/captcha.php [ 6 ] in file:line
2013-12-26 19:54:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-26 19:59:03 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/classes/Controller/Guilds.php [ 58 ] in file:line
2013-12-26 19:59:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-26 20:02:02 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW) ~ APPPATH/classes/Controller/Guilds.php [ 65 ] in file:line
2013-12-26 20:02:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-26 20:21:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: userName ~ MODPATH/database/classes/Kohana/Database/Result/Cached.php [ 48 ] in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Result/Cached.php:48
2013-12-26 20:21:29 --- DEBUG: #0 /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Result/Cached.php(48): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/9...', 48, Array)
#1 /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Result.php(243): Kohana_Database_Result_Cached->current()
#2 /home/content/96/11745996/html/application/classes/Controller/Guilds.php(64): Kohana_Database_Result->offsetGet('userName')
#3 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(84): Controller_Guilds->action_buyGuild()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guilds))
#6 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#9 {main} in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Result/Cached.php:48
2013-12-26 20:22:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: gold ~ MODPATH/database/classes/Kohana/Database/Result/Cached.php [ 48 ] in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Result/Cached.php:48
2013-12-26 20:22:20 --- DEBUG: #0 /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Result/Cached.php(48): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/9...', 48, Array)
#1 /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Result.php(243): Kohana_Database_Result_Cached->current()
#2 /home/content/96/11745996/html/application/classes/Controller/Guilds.php(65): Kohana_Database_Result->offsetGet('gold')
#3 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(84): Controller_Guilds->action_buyGuild()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guilds))
#6 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#9 {main} in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Result/Cached.php:48
2013-12-26 20:22:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: check ~ APPPATH/views/Guilds/buyGuild.php [ 2 ] in /home/content/96/11745996/html/application/views/Guilds/buyGuild.php:2
2013-12-26 20:22:31 --- DEBUG: #0 /home/content/96/11745996/html/application/views/Guilds/buyGuild.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/content/9...', 2, Array)
#1 /home/content/96/11745996/html/system/classes/Kohana/View.php(61): include('/home/content/9...')
#2 /home/content/96/11745996/html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/content/9...', Array)
#3 /home/content/96/11745996/html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/content/96/11745996/html/application/views/template/template.php(41): Kohana_View->__toString()
#5 /home/content/96/11745996/html/system/classes/Kohana/View.php(61): include('/home/content/9...')
#6 /home/content/96/11745996/html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/content/9...', Array)
#7 /home/content/96/11745996/html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/content/96/11745996/html/application/classes/Controller/GameTemplate.php(196): Kohana_Controller_Template->after()
#9 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(87): Controller_GameTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guilds))
#12 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#15 {main} in /home/content/96/11745996/html/application/views/Guilds/buyGuild.php:2
2013-12-26 20:22:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: check ~ APPPATH/views/Guilds/buyGuild.php [ 2 ] in /home/content/96/11745996/html/application/views/Guilds/buyGuild.php:2
2013-12-26 20:22:49 --- DEBUG: #0 /home/content/96/11745996/html/application/views/Guilds/buyGuild.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/content/9...', 2, Array)
#1 /home/content/96/11745996/html/system/classes/Kohana/View.php(61): include('/home/content/9...')
#2 /home/content/96/11745996/html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/content/9...', Array)
#3 /home/content/96/11745996/html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/content/96/11745996/html/application/views/template/template.php(41): Kohana_View->__toString()
#5 /home/content/96/11745996/html/system/classes/Kohana/View.php(61): include('/home/content/9...')
#6 /home/content/96/11745996/html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/content/9...', Array)
#7 /home/content/96/11745996/html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/content/96/11745996/html/application/classes/Controller/GameTemplate.php(196): Kohana_Controller_Template->after()
#9 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(87): Controller_GameTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guilds))
#12 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#15 {main} in /home/content/96/11745996/html/application/views/Guilds/buyGuild.php:2
2013-12-26 20:23:59 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/Guilds.php [ 62 ] in file:line
2013-12-26 20:23:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-26 20:45:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: user ~ APPPATH/classes/Model/Game.php [ 103 ] in /home/content/96/11745996/html/application/classes/Model/Game.php:103
2013-12-26 20:45:26 --- DEBUG: #0 /home/content/96/11745996/html/application/classes/Model/Game.php(103): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/9...', 103, Array)
#1 /home/content/96/11745996/html/application/classes/Controller/Game.php(91): Model_Game->getUnits()
#2 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(84): Controller_Game->action_recruit()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#5 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#8 {main} in /home/content/96/11745996/html/application/classes/Model/Game.php:103
2013-12-26 20:51:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: user ~ APPPATH/classes/Model/Game.php [ 103 ] in /home/content/96/11745996/html/application/classes/Model/Game.php:103
2013-12-26 20:51:42 --- DEBUG: #0 /home/content/96/11745996/html/application/classes/Model/Game.php(103): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/9...', 103, Array)
#1 /home/content/96/11745996/html/application/classes/Controller/Game.php(91): Model_Game->getUnits()
#2 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(84): Controller_Game->action_recruit()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#5 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#8 {main} in /home/content/96/11745996/html/application/classes/Model/Game.php:103
2013-12-26 20:51:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: user ~ APPPATH/classes/Model/Game.php [ 103 ] in /home/content/96/11745996/html/application/classes/Model/Game.php:103
2013-12-26 20:51:44 --- DEBUG: #0 /home/content/96/11745996/html/application/classes/Model/Game.php(103): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/9...', 103, Array)
#1 /home/content/96/11745996/html/application/classes/Controller/Game.php(91): Model_Game->getUnits()
#2 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(84): Controller_Game->action_recruit()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#5 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#8 {main} in /home/content/96/11745996/html/application/classes/Model/Game.php:103
2013-12-26 21:04:54 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '?>' ~ APPPATH/views/Game/controlPanel.php [ 11 ] in file:line
2013-12-26 21:04:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-26 21:13:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: kohana_uri ~ APPPATH/classes/Controller/GameTemplate.php [ 124 ] in /home/content/96/11745996/html/application/classes/Controller/GameTemplate.php:124
2013-12-26 21:13:16 --- DEBUG: #0 /home/content/96/11745996/html/application/classes/Controller/GameTemplate.php(124): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/9...', 124, Array)
#1 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(69): Controller_GameTemplate->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#7 {main} in /home/content/96/11745996/html/application/classes/Controller/GameTemplate.php:124
2013-12-26 21:14:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: kohana_uri ~ APPPATH/classes/Controller/GameTemplate.php [ 124 ] in /home/content/96/11745996/html/application/classes/Controller/GameTemplate.php:124
2013-12-26 21:14:05 --- DEBUG: #0 /home/content/96/11745996/html/application/classes/Controller/GameTemplate.php(124): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/9...', 124, Array)
#1 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(69): Controller_GameTemplate->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#7 {main} in /home/content/96/11745996/html/application/classes/Controller/GameTemplate.php:124
2013-12-26 21:14:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: kohana_uri ~ APPPATH/classes/Controller/GameTemplate.php [ 124 ] in /home/content/96/11745996/html/application/classes/Controller/GameTemplate.php:124
2013-12-26 21:14:08 --- DEBUG: #0 /home/content/96/11745996/html/application/classes/Controller/GameTemplate.php(124): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/9...', 124, Array)
#1 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(69): Controller_GameTemplate->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#7 {main} in /home/content/96/11745996/html/application/classes/Controller/GameTemplate.php:124
2013-12-26 21:14:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: REQUEST_URI ~ APPPATH/classes/Controller/GameTemplate.php [ 124 ] in /home/content/96/11745996/html/application/classes/Controller/GameTemplate.php:124
2013-12-26 21:14:17 --- DEBUG: #0 /home/content/96/11745996/html/application/classes/Controller/GameTemplate.php(124): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/9...', 124, Array)
#1 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(69): Controller_GameTemplate->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#7 {main} in /home/content/96/11745996/html/application/classes/Controller/GameTemplate.php:124
2013-12-26 21:15:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: REQUEST_URI ~ APPPATH/classes/Controller/GameTemplate.php [ 125 ] in /home/content/96/11745996/html/application/classes/Controller/GameTemplate.php:125
2013-12-26 21:15:48 --- DEBUG: #0 /home/content/96/11745996/html/application/classes/Controller/GameTemplate.php(125): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/9...', 125, Array)
#1 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(69): Controller_GameTemplate->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#7 {main} in /home/content/96/11745996/html/application/classes/Controller/GameTemplate.php:125
2013-12-26 21:18:42 --- EMERGENCY: ErrorException [ 1 ]: Class 'Captcha' not found ~ APPPATH/views/Game/captcha.php [ 6 ] in file:line
2013-12-26 21:18:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-26 21:21:16 --- EMERGENCY: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'Captcha' at 'MODPATH/Captcha' ~ SYSPATH/classes/Kohana/Core.php [ 579 ] in /home/content/96/11745996/html/application/bootstrap.php:145
2013-12-26 21:21:16 --- DEBUG: #0 /home/content/96/11745996/html/application/bootstrap.php(145): Kohana_Core::modules(Array)
#1 /home/content/96/11745996/html/index.php(102): require('/home/content/9...')
#2 {main} in /home/content/96/11745996/html/application/bootstrap.php:145
2013-12-26 21:21:45 --- EMERGENCY: ErrorException [ 1 ]: Class 'Captcha_' not found ~ MODPATH/captcha/classes/Captcha.php [ 70 ] in file:line
2013-12-26 21:21:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-26 21:23:13 --- EMERGENCY: ErrorException [ 1 ]: Class 'Captcha_' not found ~ MODPATH/captcha/classes/Captcha.php [ 70 ] in file:line
2013-12-26 21:23:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-26 21:25:37 --- EMERGENCY: ErrorException [ 1 ]: Class 'Captcha_' not found ~ MODPATH/captcha/classes/Captcha.php [ 70 ] in file:line
2013-12-26 21:25:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-26 21:25:51 --- EMERGENCY: ErrorException [ 1 ]: Class 'Captcha_' not found ~ MODPATH/captcha/classes/Captcha.php [ 70 ] in file:line
2013-12-26 21:25:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-26 21:26:02 --- EMERGENCY: ErrorException [ 1 ]: Class 'Captcha_' not found ~ MODPATH/captcha/classes/Captcha.php [ 70 ] in file:line
2013-12-26 21:26:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-26 21:26:04 --- EMERGENCY: ErrorException [ 1 ]: Class 'Captcha_' not found ~ MODPATH/captcha/classes/Captcha.php [ 70 ] in file:line
2013-12-26 21:26:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-26 21:26:37 --- EMERGENCY: ErrorException [ 1 ]: Class 'Captcha_' not found ~ MODPATH/captcha/classes/Captcha.php [ 70 ] in file:line
2013-12-26 21:26:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-26 21:26:51 --- EMERGENCY: ErrorException [ 1 ]: Class 'Captcha_' not found ~ MODPATH/captcha/classes/Captcha.php [ 70 ] in file:line
2013-12-26 21:26:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-26 21:27:13 --- EMERGENCY: ErrorException [ 1 ]: Class 'Captcha_' not found ~ MODPATH/captcha/classes/Captcha.php [ 70 ] in file:line
2013-12-26 21:27:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-26 21:27:58 --- EMERGENCY: ErrorException [ 1 ]: Class 'Captcha_' not found ~ MODPATH/captcha/classes/Captcha.php [ 70 ] in file:line
2013-12-26 21:27:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line