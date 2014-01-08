<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-30 23:07:55 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW) ~ APPPATH/classes/Model/Guilds.php [ 42 ] in file:line
2013-12-30 23:07:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-30 23:09:02 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW) ~ APPPATH/classes/Model/Guilds.php [ 44 ] in file:line
2013-12-30 23:09:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-30 23:09:09 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW) ~ APPPATH/classes/Model/Guilds.php [ 44 ] in file:line
2013-12-30 23:09:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-30 23:11:57 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW) ~ APPPATH/classes/Model/Guilds.php [ 40 ] in file:line
2013-12-30 23:11:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-30 23:12:16 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':guildID, :userID, 0)' at line 2 [ 
			INSERT INTO guildstosuers (guildID, userID, rank)
			VALUES (:guildID, :userID, 0)
		 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php:251
2013-12-30 23:12:16 --- DEBUG: #0 /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, '?????INSERT INT...', false, Array)
#1 /home/content/96/11745996/html/application/classes/Model/Guilds.php(41): Kohana_Database_Query->execute()
#2 /home/content/96/11745996/html/application/classes/Controller/Guilds.php(68): Model_Guilds->createGuild('Tests')
#3 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(84): Controller_Guilds->action_buyGuild()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guilds))
#6 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#9 {main} in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php:251
2013-12-30 23:13:41 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':guildID, '0', 0)' at line 2 [ 
			INSERT INTO guildstosuers (guildID, userID, rank)
			VALUES (:guildID, '0', 0)
		 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php:251
2013-12-30 23:13:41 --- DEBUG: #0 /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, '?????INSERT INT...', false, Array)
#1 /home/content/96/11745996/html/application/classes/Model/Guilds.php(41): Kohana_Database_Query->execute()
#2 /home/content/96/11745996/html/application/classes/Controller/Guilds.php(68): Model_Guilds->createGuild('Tests')
#3 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(84): Controller_Guilds->action_buyGuild()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guilds))
#6 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#9 {main} in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php:251
2013-12-30 23:28:04 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/classes/Model/Guilds.php [ 33 ] in file:line
2013-12-30 23:28:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-30 23:28:25 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/classes/Model/Guilds.php [ 33 ] in file:line
2013-12-30 23:28:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-30 23:28:34 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/classes/Model/Guilds.php [ 33 ] in file:line
2013-12-30 23:28:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-30 23:28:48 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$query' (T_VARIABLE) ~ APPPATH/classes/Model/Guilds.php [ 37 ] in file:line
2013-12-30 23:28:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-30 23:29:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ',', expecting ']' ~ APPPATH/classes/Model/Guilds.php [ 37 ] in file:line
2013-12-30 23:29:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-30 23:29:17 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHETE userID='0'' at line 1 [ 
			UPDATE user SET guildID='4' WHETE userID='0'
		 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php:251
2013-12-30 23:29:17 --- DEBUG: #0 /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, '?????UPDATE use...', false, Array)
#1 /home/content/96/11745996/html/application/classes/Model/Guilds.php(38): Kohana_Database_Query->execute()
#2 /home/content/96/11745996/html/application/classes/Controller/Guilds.php(68): Model_Guilds->createGuild('Scanner')
#3 /home/content/96/11745996/html/system/classes/Kohana/Controller.php(84): Controller_Guilds->action_buyGuild()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/content/96/11745996/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guilds))
#6 /home/content/96/11745996/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/content/96/11745996/html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/content/96/11745996/html/index.php(130): Kohana_Request->execute()
#9 {main} in /home/content/96/11745996/html/modules/database/classes/Kohana/Database/Query.php:251
2013-12-30 23:44:57 --- EMERGENCY: ErrorException [ 1 ]: Class 'Captcha_' not found ~ MODPATH/captcha/classes/Captcha.php [ 70 ] in file:line
2013-12-30 23:44:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line