<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-31 19:35:23 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHETE userID='0'' at line 1 [ 
			UPDATE user SET guildID='5' WHETE userID='0'
		 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php:251
2013-12-31 19:35:23 --- DEBUG: #0 /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, '?????UPDATE use...', false, Array)
#1 /home/content/96/11745996/html/application/classes/Model/Guilds.php(38): Kohana_Database_Query->execute()
#2 /home/content/96/11745996/html/application/classes/Controller/Guilds.php(68): Model_Guilds->createGuild('Guild')
#3 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(84): Controller_Guilds->action_buyGuild()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guilds))
#6 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#9 {main} in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php:251
2013-12-31 19:35:56 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHETE userID='0'' at line 1 [ 
			UPDATE user SET guildID='6' WHETE userID='0'
		 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php:251
2013-12-31 19:35:56 --- DEBUG: #0 /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, '?????UPDATE use...', false, Array)
#1 /home/content/96/11745996/html/application/classes/Model/Guilds.php(38): Kohana_Database_Query->execute()
#2 /home/content/96/11745996/html/application/classes/Controller/Guilds.php(68): Model_Guilds->createGuild('Guild')
#3 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(84): Controller_Guilds->action_buyGuild()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guilds))
#6 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#9 {main} in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php:251
2013-12-31 19:36:39 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHETE userID='0'' at line 1 [ 
			UPDATE user SET guildID='7' WHETE userID='0'
		 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php:251
2013-12-31 19:36:39 --- DEBUG: #0 /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, '?????UPDATE use...', false, Array)
#1 /home/content/96/11745996/html/application/classes/Model/Guilds.php(38): Kohana_Database_Query->execute()
#2 /home/content/96/11745996/html/application/classes/Controller/Guilds.php(68): Model_Guilds->createGuild('Guild')
#3 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(84): Controller_Guilds->action_buyGuild()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guilds))
#6 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#9 {main} in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php:251
2013-12-31 19:38:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH/views/Guilds/guild.php [ 4 ] in /home/content/96/11745996/html/application/views/Guilds/guild.php:4
2013-12-31 19:38:30 --- DEBUG: #0 /home/content/96/11745996/html/application/views/Guilds/guild.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/content/9...', 4, Array)
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
2013-12-31 19:38:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: info ~ APPPATH/views/Guilds/guild.php [ 13 ] in /home/content/96/11745996/html/application/views/Guilds/guild.php:13
2013-12-31 19:38:57 --- DEBUG: #0 /home/content/96/11745996/html/application/views/Guilds/guild.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/content/9...', 13, Array)
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
#15 {main} in /home/content/96/11745996/html/application/views/Guilds/guild.php:13
2013-12-31 19:46:22 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Guild' not found ~ APPPATH/classes/Controller/Guilds.php [ 39 ] in file:line
2013-12-31 19:46:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-31 19:46:28 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Guild' not found ~ APPPATH/classes/Controller/Guilds.php [ 39 ] in file:line
2013-12-31 19:46:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-31 19:46:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: guildname ~ MODPATH/database/classes/Kohana/Database/Result/Cached.php [ 48 ] in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Result/Cached.php:48
2013-12-31 19:46:42 --- DEBUG: #0 /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Result/Cached.php(48): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/9...', 48, Array)
#1 /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Result.php(243): Kohana_Database_Result_Cached->current()
#2 /home/content/96/11745996/html/application/views/Guilds/guild.php(15): Kohana_Database_Result->offsetGet('guildname')
#3 /home/content/96/11745996/html/system/classes/Kohana/View.php(61): include('/home/content/9...')
#4 /home/content/96/11745996/html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/content/9...', Array)
#5 /home/content/96/11745996/html/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /home/content/96/11745996/html/application/views/template/template.php(37): Kohana_View->__toString()
#7 /home/content/96/11745996/html/system/classes/Kohana/View.php(61): include('/home/content/9...')
#8 /home/content/96/11745996/html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/content/9...', Array)
#9 /home/content/96/11745996/html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#10 /home/content/96/11745996/html/application/classes/Controller/GameTemplate.php(208): Kohana_Controller_Template->after()
#11 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(87): Controller_GameTemplate->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guilds))
#14 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#17 {main} in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Result/Cached.php:48
2013-12-31 19:47:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: guildName ~ MODPATH/database/classes/Kohana/Database/Result/Cached.php [ 48 ] in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Result/Cached.php:48
2013-12-31 19:47:33 --- DEBUG: #0 /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Result/Cached.php(48): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/9...', 48, Array)
#1 /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Result.php(243): Kohana_Database_Result_Cached->current()
#2 /home/content/96/11745996/html/application/views/Guilds/guild.php(15): Kohana_Database_Result->offsetGet('guildName')
#3 /home/content/96/11745996/html/system/classes/Kohana/View.php(61): include('/home/content/9...')
#4 /home/content/96/11745996/html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/content/9...', Array)
#5 /home/content/96/11745996/html/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /home/content/96/11745996/html/application/views/template/template.php(37): Kohana_View->__toString()
#7 /home/content/96/11745996/html/system/classes/Kohana/View.php(61): include('/home/content/9...')
#8 /home/content/96/11745996/html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/content/9...', Array)
#9 /home/content/96/11745996/html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#10 /home/content/96/11745996/html/application/classes/Controller/GameTemplate.php(208): Kohana_Controller_Template->after()
#11 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(87): Controller_GameTemplate->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guilds))
#14 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#17 {main} in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Result/Cached.php:48
2013-12-31 19:48:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: guildName ~ MODPATH/database/classes/Kohana/Database/Result/Cached.php [ 48 ] in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Result/Cached.php:48
2013-12-31 19:48:13 --- DEBUG: #0 /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Result/Cached.php(48): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/9...', 48, Array)
#1 /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Result.php(243): Kohana_Database_Result_Cached->current()
#2 /home/content/96/11745996/html/application/views/Guilds/guild.php(13): Kohana_Database_Result->offsetGet('guildName')
#3 /home/content/96/11745996/html/system/classes/Kohana/View.php(61): include('/home/content/9...')
#4 /home/content/96/11745996/html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/content/9...', Array)
#5 /home/content/96/11745996/html/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /home/content/96/11745996/html/application/views/template/template.php(37): Kohana_View->__toString()
#7 /home/content/96/11745996/html/system/classes/Kohana/View.php(61): include('/home/content/9...')
#8 /home/content/96/11745996/html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/content/9...', Array)
#9 /home/content/96/11745996/html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#10 /home/content/96/11745996/html/application/classes/Controller/GameTemplate.php(208): Kohana_Controller_Template->after()
#11 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(87): Controller_GameTemplate->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guilds))
#14 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#17 {main} in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Result/Cached.php:48
2013-12-31 19:50:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: guildName ~ MODPATH/database/classes/Kohana/Database/Result/Cached.php [ 48 ] in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Result/Cached.php:48
2013-12-31 19:50:52 --- DEBUG: #0 /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Result/Cached.php(48): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/9...', 48, Array)
#1 /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Result.php(243): Kohana_Database_Result_Cached->current()
#2 /home/content/96/11745996/html/application/views/Guilds/guild.php(13): Kohana_Database_Result->offsetGet('guildName')
#3 /home/content/96/11745996/html/system/classes/Kohana/View.php(61): include('/home/content/9...')
#4 /home/content/96/11745996/html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/content/9...', Array)
#5 /home/content/96/11745996/html/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /home/content/96/11745996/html/application/views/template/template.php(37): Kohana_View->__toString()
#7 /home/content/96/11745996/html/system/classes/Kohana/View.php(61): include('/home/content/9...')
#8 /home/content/96/11745996/html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/content/9...', Array)
#9 /home/content/96/11745996/html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#10 /home/content/96/11745996/html/application/classes/Controller/GameTemplate.php(208): Kohana_Controller_Template->after()
#11 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(87): Controller_GameTemplate->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guilds))
#14 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#17 {main} in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Result/Cached.php:48
2013-12-31 19:51:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: guildName ~ MODPATH/database/classes/Kohana/Database/Result/Cached.php [ 48 ] in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Result/Cached.php:48
2013-12-31 19:51:35 --- DEBUG: #0 /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Result/Cached.php(48): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/9...', 48, Array)
#1 /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Result.php(243): Kohana_Database_Result_Cached->current()
#2 /home/content/96/11745996/html/application/views/Guilds/guild.php(13): Kohana_Database_Result->offsetGet('guildName')
#3 /home/content/96/11745996/html/system/classes/Kohana/View.php(61): include('/home/content/9...')
#4 /home/content/96/11745996/html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/content/9...', Array)
#5 /home/content/96/11745996/html/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /home/content/96/11745996/html/application/views/template/template.php(37): Kohana_View->__toString()
#7 /home/content/96/11745996/html/system/classes/Kohana/View.php(61): include('/home/content/9...')
#8 /home/content/96/11745996/html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/content/9...', Array)
#9 /home/content/96/11745996/html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#10 /home/content/96/11745996/html/application/classes/Controller/GameTemplate.php(208): Kohana_Controller_Template->after()
#11 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(87): Controller_GameTemplate->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guilds))
#14 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#17 {main} in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Result/Cached.php:48
2013-12-31 19:52:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: guildName ~ MODPATH/database/classes/Kohana/Database/Result/Cached.php [ 48 ] in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Result/Cached.php:48
2013-12-31 19:52:12 --- DEBUG: #0 /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Result/Cached.php(48): Kohana_Core::error_handler(8, 'Undefined index...', '/home/content/9...', 48, Array)
#1 /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Result.php(243): Kohana_Database_Result_Cached->current()
#2 /home/content/96/11745996/html/application/views/Guilds/guild.php(13): Kohana_Database_Result->offsetGet('guildName')
#3 /home/content/96/11745996/html/system/classes/Kohana/View.php(61): include('/home/content/9...')
#4 /home/content/96/11745996/html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/content/9...', Array)
#5 /home/content/96/11745996/html/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /home/content/96/11745996/html/application/views/template/template.php(37): Kohana_View->__toString()
#7 /home/content/96/11745996/html/system/classes/Kohana/View.php(61): include('/home/content/9...')
#8 /home/content/96/11745996/html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/content/9...', Array)
#9 /home/content/96/11745996/html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#10 /home/content/96/11745996/html/application/classes/Controller/GameTemplate.php(208): Kohana_Controller_Template->after()
#11 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(87): Controller_GameTemplate->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guilds))
#14 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#17 {main} in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Result/Cached.php:48
2013-12-31 20:02:30 --- EMERGENCY: Database_Exception [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1052 Column 'guildID' in where clause is ambiguous [ 
			SELECT * FROM guildstousers gu
			INNER JOIN user u ON u.userdID=gu.userID 
			
			WHERE guildID='8'
		 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php:251
2013-12-31 20:02:30 --- DEBUG: #0 /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, '?????SELECT * F...', false, Array)
#1 /home/content/96/11745996/html/application/classes/Model/Guilds.php(73): Kohana_Database_Query->execute()
#2 /home/content/96/11745996/html/application/classes/Controller/Guilds.php(41): Model_Guilds->getGuildMembersByID('8')
#3 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(84): Controller_Guilds->action_Guild()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guilds))
#6 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#9 {main} in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php:251
2013-12-31 20:02:51 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'u.userdID' in 'on clause' [ 
			SELECT * FROM guildstousers gu
			INNER JOIN user u ON u.userdID=gu.userID 
			
			WHERE gu.guildID='8'
		 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php:251
2013-12-31 20:02:51 --- DEBUG: #0 /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, '?????SELECT * F...', false, Array)
#1 /home/content/96/11745996/html/application/classes/Model/Guilds.php(73): Kohana_Database_Query->execute()
#2 /home/content/96/11745996/html/application/classes/Controller/Guilds.php(41): Model_Guilds->getGuildMembersByID('8')
#3 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(84): Controller_Guilds->action_Guild()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guilds))
#6 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#9 {main} in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php:251
2013-12-31 23:56:12 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'utu.amount' in 'field list' [ 
			SELECT u.userName, gu.userID, rt.gold, rt.level,
				(SELECT count(utu.amount) FROM unitstousers) as size
			FROM guildstousers gu
			INNER JOIN user u ON u.userID=gu.userID 
			INNER JOIN roundtable rt ON rt.userID=gu.userID
			WHERE gu.guildID='8'
		 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php:251
2013-12-31 23:56:12 --- DEBUG: #0 /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, '?????SELECT u.u...', false, Array)
#1 /home/content/96/11745996/html/application/classes/Model/Guilds.php(75): Kohana_Database_Query->execute()
#2 /home/content/96/11745996/html/application/classes/Controller/Guilds.php(41): Model_Guilds->getGuildMembersByID('8')
#3 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(84): Controller_Guilds->action_Guild()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guilds))
#6 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#9 {main} in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php:251