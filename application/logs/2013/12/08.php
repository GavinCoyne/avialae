<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-08 11:39:31 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\gametemplate.php [ 95 ] in file:line
2013-12-08 11:39:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-08 11:42:28 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::setLinks() ~ APPPATH\classes\Controller\gametemplate.php [ 95 ] in file:line
2013-12-08 11:42:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-08 12:20:07 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\Controller\Game.php [ 43 ] in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\Game.php:43
2013-12-08 12:20:07 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\Game.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp2\htdoc...', 43, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_activate()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\Game.php:43
2013-12-08 12:20:24 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in file:line
2013-12-08 12:20:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'C:\xampp2\htdoc...', 33, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #78, 'userName')
#2 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('userName')
#3 C:\xampp2\htdocs\fallofkingdoms\application\views\Game\activate.php(1): Kohana_Database_Result->offsetGet('userName')
#4 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp2\htdoc...')
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp2\htdoc...', Array)
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(228): Kohana_View->render()
#7 C:\xampp2\htdocs\fallofkingdoms\application\views\template\template.php(41): Kohana_View->__toString()
#8 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp2\htdoc...')
#9 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp2\htdoc...', Array)
#10 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#11 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(106): Kohana_Controller_Template->after()
#12 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(87): Controller_GameTemplate->after()
#13 [internal function]: Kohana_Controller->execute()
#14 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#15 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#18 {main} in file:line
2013-12-08 12:22:47 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in file:line
2013-12-08 12:22:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'C:\xampp2\htdoc...', 33, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #78, 'userName')
#2 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('userName')
#3 C:\xampp2\htdocs\fallofkingdoms\application\views\Game\activate.php(1): Kohana_Database_Result->offsetGet('userName')
#4 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp2\htdoc...')
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp2\htdoc...', Array)
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(228): Kohana_View->render()
#7 C:\xampp2\htdocs\fallofkingdoms\application\views\template\template.php(41): Kohana_View->__toString()
#8 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp2\htdoc...')
#9 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp2\htdoc...', Array)
#10 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#11 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(106): Kohana_Controller_Template->after()
#12 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(87): Controller_GameTemplate->after()
#13 [internal function]: Kohana_Controller->execute()
#14 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#15 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#18 {main} in file:line
2013-12-08 12:23:46 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in file:line
2013-12-08 12:23:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'C:\xampp2\htdoc...', 33, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #78, 'userName')
#2 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('userName')
#3 C:\xampp2\htdocs\fallofkingdoms\application\views\Game\activate.php(1): Kohana_Database_Result->offsetGet('userName')
#4 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp2\htdoc...')
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp2\htdoc...', Array)
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(228): Kohana_View->render()
#7 C:\xampp2\htdocs\fallofkingdoms\application\views\template\template.php(41): Kohana_View->__toString()
#8 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp2\htdoc...')
#9 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp2\htdoc...', Array)
#10 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#11 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(106): Kohana_Controller_Template->after()
#12 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(87): Controller_GameTemplate->after()
#13 [internal function]: Kohana_Controller->execute()
#14 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#15 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#18 {main} in file:line
2013-12-08 12:38:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Game.php [ 58 ] in file:line
2013-12-08 12:38:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-08 15:48:25 --- CRITICAL: Database_Exception [ 8192 ]: mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\MySQL.php:431
2013-12-08 15:48:25 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\MySQL.php(431): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database.php(478): Kohana_Database_MySQL->escape('gacoyne')
#2 [internal function]: Kohana_Database->quote('gacoyne')
#3 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(196): array_map(Array, Array)
#4 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query->compile(Object(Database_MySQL))
#5 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\login.php(42): Kohana_Database_Query->execute()
#6 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\login.php(7): Model_Login->check('gacoyne')
#7 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Login.php(30): Model_Login->login('gacoyne', 'K@ktuskat33')
#8 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\MySQL.php:431
2013-12-08 15:48:29 --- CRITICAL: Database_Exception [ 8192 ]: mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\MySQL.php:431
2013-12-08 15:48:29 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\MySQL.php(431): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database.php(478): Kohana_Database_MySQL->escape('gacoyne')
#2 [internal function]: Kohana_Database->quote('gacoyne')
#3 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(196): array_map(Array, Array)
#4 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query->compile(Object(Database_MySQL))
#5 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\login.php(42): Kohana_Database_Query->execute()
#6 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\login.php(7): Model_Login->check('gacoyne')
#7 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Login.php(30): Model_Login->login('gacoyne', 'K@ktuskat33')
#8 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\MySQL.php:431
2013-12-08 15:49:01 --- CRITICAL: Database_Exception [ 8192 ]: mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\MySQL.php:431
2013-12-08 15:49:01 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\MySQL.php(431): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database.php(478): Kohana_Database_MySQL->escape('gacoyne')
#2 [internal function]: Kohana_Database->quote('gacoyne')
#3 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(196): array_map(Array, Array)
#4 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query->compile(Object(Database_MySQL))
#5 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\login.php(42): Kohana_Database_Query->execute()
#6 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\login.php(7): Model_Login->check('gacoyne')
#7 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Login.php(30): Model_Login->login('gacoyne', 'K@ktuskat33')
#8 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\MySQL.php:431
2013-12-08 16:12:35 --- CRITICAL: Database_Exception [ 8192 ]: mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\MySQL.php:431
2013-12-08 16:12:35 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\MySQL.php(431): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database.php(478): Kohana_Database_MySQL->escape('gacoyne')
#2 [internal function]: Kohana_Database->quote('gacoyne')
#3 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(196): array_map(Array, Array)
#4 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query->compile(Object(Database_MySQL))
#5 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\login.php(42): Kohana_Database_Query->execute()
#6 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\login.php(7): Model_Login->check('gacoyne')
#7 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Login.php(30): Model_Login->login('gacoyne', 'K@ktuskat33')
#8 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\MySQL.php:431
2013-12-08 16:32:02 --- CRITICAL: Database_Exception [ 1045 ]: SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 59 ] in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\PDO.php:242
2013-12-08 16:32:02 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\PDO.php(242): Kohana_Database_PDO->connect()
#1 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database.php(478): Kohana_Database_PDO->escape('gacoyne')
#2 [internal function]: Kohana_Database->quote('gacoyne')
#3 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(196): array_map(Array, Array)
#4 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query->compile(Object(Database_PDO))
#5 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\login.php(42): Kohana_Database_Query->execute()
#6 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\login.php(7): Model_Login->check('gacoyne')
#7 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Login.php(30): Model_Login->login('gacoyne', 'K@ktuskat33')
#8 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\PDO.php:242
2013-12-08 17:00:26 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '(SELECT userName FROM user u WHERE u.userID = r.userID) username
				(SELECT ra' at line 2 [ 
				SELECT rank, gold, race, points, level
				(SELECT userName FROM user u WHERE u.userID = r.userID) username
				(SELECT raceName FROM race WHERE race.raceID = r.race) raceName
				FROM roundtable r
				 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-08 17:00:26 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, '??????SELECT ra...', false, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php(63): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(30): Model_Game->getRankedUsers()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_ranking()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-08 17:01:13 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '(SELECT userName FROM user u WHERE u.userID = r.userID) username
				(SELECT ra' at line 2 [ 
				SELECT rank, gold, race, points, level
				(SELECT userName FROM user u WHERE u.userID = r.userID) username
				(SELECT raceName FROM race WHERE race.raceID = r.race) raceName
				FROM roundtable r
				 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-08 17:01:13 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, '??????SELECT ra...', false, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php(63): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(30): Model_Game->getRankedUsers()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_ranking()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-08 17:01:29 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '(SELECT userName FROM user u WHERE u.userID = r.userID) username,
				(SELECT r' at line 2 [ 
				SELECT rank, gold, race, points, level
				(SELECT userName FROM user u WHERE u.userID = r.userID) username,
				(SELECT race.raceName FROM race WHERE race.raceID = r.race) raceName
				FROM roundtable r
				 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-08 17:01:29 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, '??????SELECT ra...', false, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php(63): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(30): Model_Game->getRankedUsers()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_ranking()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-08 17:08:58 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\game.php [ 88 ] in file:line
2013-12-08 17:08:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-08 17:13:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\gametemplate.php [ 72 ] in file:line
2013-12-08 17:13:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-08 17:23:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\Game\activate.php [ 1 ] in C:\xampp\htdocs\fallofkingdoms\application\views\Game\activate.php:1
2013-12-08 17:23:36 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\views\Game\activate.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 1, Array)
#1 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\fallofkingdoms\application\views\template\template.php(41): Kohana_View->__toString()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(107): Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(87): Controller_GameTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#12 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\fallofkingdoms\application\views\Game\activate.php:1
2013-12-08 17:23:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\Game\activate.php [ 1 ] in C:\xampp\htdocs\fallofkingdoms\application\views\Game\activate.php:1
2013-12-08 17:23:43 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\views\Game\activate.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 1, Array)
#1 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\fallofkingdoms\application\views\template\template.php(41): Kohana_View->__toString()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(107): Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(87): Controller_GameTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#12 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\fallofkingdoms\application\views\Game\activate.php:1
2013-12-08 17:31:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '(', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\classes\Controller\Game.php [ 94 ] in file:line
2013-12-08 17:31:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-08 17:31:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: unitTypes ~ APPPATH\views\Game\recruit.php [ 2 ] in C:\xampp\htdocs\fallofkingdoms\application\views\Game\recruit.php:2
2013-12-08 17:31:43 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\views\Game\recruit.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 2, Array)
#1 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\fallofkingdoms\application\views\template\template.php(41): Kohana_View->__toString()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(107): Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(87): Controller_GameTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#12 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\fallofkingdoms\application\views\Game\recruit.php:2
2013-12-08 17:31:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: unittypes ~ APPPATH\views\Game\recruit.php [ 2 ] in C:\xampp\htdocs\fallofkingdoms\application\views\Game\recruit.php:2
2013-12-08 17:31:59 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\views\Game\recruit.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 2, Array)
#1 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\fallofkingdoms\application\views\template\template.php(41): Kohana_View->__toString()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(107): Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(87): Controller_GameTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#12 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\fallofkingdoms\application\views\Game\recruit.php:2
2013-12-08 17:39:15 --- CRITICAL: ErrorException [ 8 ]: Undefined index: positionName ~ APPPATH\views\Game\recruit.php [ 28 ] in C:\xampp\htdocs\fallofkingdoms\application\views\Game\recruit.php:28
2013-12-08 17:39:15 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\views\Game\recruit.php(28): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 28, Array)
#1 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\fallofkingdoms\application\views\template\template.php(41): Kohana_View->__toString()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(107): Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(87): Controller_GameTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#12 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\fallofkingdoms\application\views\Game\recruit.php:28
2013-12-08 17:39:43 --- CRITICAL: ErrorException [ 8 ]: Undefined index: cost ~ APPPATH\views\Game\recruit.php [ 36 ] in C:\xampp\htdocs\fallofkingdoms\application\views\Game\recruit.php:36
2013-12-08 17:39:43 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\views\Game\recruit.php(36): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 36, Array)
#1 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\fallofkingdoms\application\views\template\template.php(41): Kohana_View->__toString()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(107): Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(87): Controller_GameTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#12 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\fallofkingdoms\application\views\Game\recruit.php:36
2013-12-08 17:42:46 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':user) amount
					FROM unittypes t' at line 2 [ 
					SELECT *, 
					(SELECT amount FROM unitstousers u WHERE u.unitID = t.unitID AND u.userID = :user) amount
					FROM unittypes t
					 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-08 17:42:46 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, '???????SELECT *...', false, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php(102): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(91): Model_Game->getUnits()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_recruit()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-08 18:15:58 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\classes\Controller\Game.php [ 107 ] in file:line
2013-12-08 18:15:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-08 18:22:56 --- CRITICAL: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'cost' in 'field list' [ 
					SELECT cost
					FROM unittypes t
					WHERE unitID='23'
					 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-08 18:22:56 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, '???????SELECT c...', false, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php(115): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(108): Model_Game->getUnitCost('23')
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_recruitAjax()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-08 18:23:13 --- CRITICAL: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'cost' in 'field list' [ 
					SELECT cost
					FROM unittypes t
					WHERE unitID='23'
					 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-08 18:23:13 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, '???????SELECT c...', false, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php(115): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(108): Model_Game->getUnitCost('23')
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_recruitAjax()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-08 18:26:31 --- CRITICAL: ErrorException [ 8 ]: Undefined index: gold ~ MODPATH\database\classes\Kohana\Database\Result\Cached.php [ 48 ] in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Result\Cached.php:48
2013-12-08 18:26:31 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Result\Cached.php(48): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 48, Array)
#1 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Result.php(243): Kohana_Database_Result_Cached->current()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(109): Kohana_Database_Result->offsetGet('gold')
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_recruitAjax()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Result\Cached.php:48
2013-12-08 18:30:06 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Game.php [ 112 ] in file:line
2013-12-08 18:30:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-08 18:31:22 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH\classes\Controller\Game.php [ 115 ] in file:line
2013-12-08 18:31:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-08 18:40:48 --- CRITICAL: ErrorException [ 2 ]: Illegal string offset 'userID' ~ APPPATH\classes\Model\game.php [ 133 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php:133
2013-12-08 18:40:48 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php(133): Kohana_Core::error_handler(2, 'Illegal string ...', 'C:\xampp\htdocs...', 133, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(121): Model_Game->addUnits('50', '1')
#2 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_recruitAjax()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php:133
2013-12-08 18:59:40 --- CRITICAL: ErrorException [ 2 ]: var_dump() expects at least 1 parameter, 0 given ~ APPPATH\classes\Model\game.php [ 135 ] in file:line
2013-12-08 18:59:40 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'var_dump() expe...', 'C:\xampp\htdocs...', 135, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php(135): var_dump()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(121): Model_Game->addUnits('1', '1')
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_recruitAjax()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-12-08 18:59:48 --- CRITICAL: ErrorException [ 2 ]: var_dump() expects at least 1 parameter, 0 given ~ APPPATH\classes\Model\game.php [ 135 ] in file:line
2013-12-08 18:59:48 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'var_dump() expe...', 'C:\xampp\htdocs...', 135, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php(135): var_dump()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(121): Model_Game->addUnits('1', '1')
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_recruitAjax()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-12-08 19:00:01 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant amount - assumed 'amount' ~ APPPATH\classes\Model\game.php [ 157 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php:157
2013-12-08 19:00:01 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php(157): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\xampp\htdocs...', 157, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(121): Model_Game->addUnits('1', '1')
#2 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_recruitAjax()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php:157
2013-12-08 19:08:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: userID ~ APPPATH\classes\Model\game.php [ 172 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php:172
2013-12-08 19:08:52 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php(172): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 172, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(124): Model_Game->updateUserGold(12500)
#2 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_recruitAjax()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php:172
2013-12-08 19:26:36 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM roundupdates n' at line 2 [ 
			SELECT max(time) time,
			FROM roundupdates n
			
		 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-08 19:26:36 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, '?????SELECT max...', false, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php(202): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(39): Model_Game->getLastRankUpdate()
#3 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(12): Controller_GameTemplate->before()
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Controller_Game->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-08 19:32:51 --- CRITICAL: Exception [ 0 ]: DateTime::__construct() expects parameter 1 to be string, array given ~ APPPATH\classes\Controller\gametemplate.php [ 41 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php:41
2013-12-08 19:32:51 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(41): DateTime->__construct(Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(12): Controller_GameTemplate->before()
#2 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Controller_Game->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php:41
2013-12-08 19:33:06 --- CRITICAL: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\classes\Controller\gametemplate.php [ 40 ] in file:line
2013-12-08 19:33:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', 'C:\xampp\htdocs...', 40, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(40): getdate('2013-12-08 17:2...')
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(12): Controller_GameTemplate->before()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Controller_Game->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-12-08 19:33:32 --- CRITICAL: ErrorException [ 1 ]: Unsupported operand types ~ APPPATH\classes\Controller\gametemplate.php [ 43 ] in file:line
2013-12-08 19:33:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-08 19:34:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: lastRankin ~ APPPATH\classes\Controller\gametemplate.php [ 43 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php:43
2013-12-08 19:34:53 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 43, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(12): Controller_GameTemplate->before()
#2 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Controller_Game->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php:43
2013-12-08 19:35:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: lastRankin ~ APPPATH\classes\Controller\gametemplate.php [ 43 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php:43
2013-12-08 19:35:00 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 43, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(12): Controller_GameTemplate->before()
#2 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Controller_Game->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php:43
2013-12-08 19:35:17 --- CRITICAL: ErrorException [ 8 ]: Object of class DateTime could not be converted to int ~ APPPATH\classes\Controller\gametemplate.php [ 43 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php:43
2013-12-08 19:35:17 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(43): Kohana_Core::error_handler(8, 'Object of class...', 'C:\xampp\htdocs...', 43, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(12): Controller_GameTemplate->before()
#2 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Controller_Game->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php:43
2013-12-08 19:36:51 --- CRITICAL: ErrorException [ 1 ]: Class 'getTime' not found ~ APPPATH\classes\Controller\gametemplate.php [ 41 ] in file:line
2013-12-08 19:36:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-08 19:37:32 --- CRITICAL: ErrorException [ 1 ]: Unsupported operand types ~ APPPATH\classes\Controller\gametemplate.php [ 43 ] in file:line
2013-12-08 19:37:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-08 20:18:02 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method DateInterval::toString() ~ APPPATH\classes\Controller\gametemplate.php [ 43 ] in file:line
2013-12-08 20:18:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-08 20:18:57 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant m - assumed 'm' ~ APPPATH\classes\Controller\gametemplate.php [ 43 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php:43
2013-12-08 20:18:57 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(43): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\xampp\htdocs...', 43, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(12): Controller_GameTemplate->before()
#2 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Controller_Game->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php:43
2013-12-08 20:19:03 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type DateInterval as array ~ APPPATH\classes\Controller\gametemplate.php [ 43 ] in file:line
2013-12-08 20:19:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-08 20:21:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'var_dump' (T_STRING) ~ APPPATH\classes\Controller\gametemplate.php [ 44 ] in file:line
2013-12-08 20:21:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-08 20:21:59 --- CRITICAL: ErrorException [ 8 ]: Object of class DateTime could not be converted to int ~ APPPATH\classes\Controller\gametemplate.php [ 43 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php:43
2013-12-08 20:21:59 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(43): Kohana_Core::error_handler(8, 'Object of class...', 'C:\xampp\htdocs...', 43, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(12): Controller_GameTemplate->before()
#2 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Controller_Game->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php:43
2013-12-08 20:22:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '(' ~ APPPATH\classes\Controller\gametemplate.php [ 40 ] in file:line
2013-12-08 20:22:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-08 20:22:51 --- CRITICAL: ErrorException [ 8 ]: Object of class Date could not be converted to int ~ APPPATH\classes\Controller\gametemplate.php [ 43 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php:43
2013-12-08 20:22:51 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(43): Kohana_Core::error_handler(8, 'Object of class...', 'C:\xampp\htdocs...', 43, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(12): Controller_GameTemplate->before()
#2 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Controller_Game->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php:43
2013-12-08 20:23:46 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Date::format() ~ APPPATH\classes\Controller\gametemplate.php [ 44 ] in file:line
2013-12-08 20:23:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-08 20:27:42 --- CRITICAL: ErrorException [ 2 ]: strtotime() expects parameter 1 to be string, object given ~ APPPATH\classes\Controller\gametemplate.php [ 41 ] in file:line
2013-12-08 20:27:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'strtotime() exp...', 'C:\xampp\htdocs...', 41, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(41): strtotime(Object(DateTime))
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(12): Controller_GameTemplate->before()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Controller_Game->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-12-08 20:28:08 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function DateTime() ~ APPPATH\classes\Controller\gametemplate.php [ 41 ] in file:line
2013-12-08 20:28:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-08 20:28:33 --- CRITICAL: ErrorException [ 2 ]: strtotime() expects parameter 1 to be string, object given ~ APPPATH\classes\Controller\gametemplate.php [ 42 ] in file:line
2013-12-08 20:28:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'strtotime() exp...', 'C:\xampp\htdocs...', 42, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(42): strtotime(Object(DateTime))
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(12): Controller_GameTemplate->before()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Controller_Game->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-12-08 20:28:49 --- CRITICAL: ErrorException [ 2 ]: strtotime() expects parameter 1 to be string, object given ~ APPPATH\classes\Controller\gametemplate.php [ 42 ] in file:line
2013-12-08 20:28:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'strtotime() exp...', 'C:\xampp\htdocs...', 42, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(42): strtotime(Object(Date))
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(12): Controller_GameTemplate->before()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Controller_Game->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-12-08 20:29:26 --- CRITICAL: ErrorException [ 1 ]: Class 'now' not found ~ APPPATH\classes\Controller\gametemplate.php [ 41 ] in file:line
2013-12-08 20:29:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-08 20:29:55 --- CRITICAL: ErrorException [ 1 ]: Class 'time' not found ~ APPPATH\classes\Controller\gametemplate.php [ 41 ] in file:line
2013-12-08 20:29:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-08 20:30:11 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function inteval() ~ APPPATH\classes\Controller\gametemplate.php [ 44 ] in file:line
2013-12-08 20:30:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-08 20:30:34 --- CRITICAL: ErrorException [ 1 ]: Call to a member function format() on a non-object ~ APPPATH\classes\Controller\gametemplate.php [ 45 ] in file:line
2013-12-08 20:30:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-08 20:31:48 --- CRITICAL: ErrorException [ 1 ]: Class 'time' not found ~ APPPATH\classes\Controller\gametemplate.php [ 41 ] in file:line
2013-12-08 20:31:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-08 20:32:12 --- CRITICAL: ErrorException [ 2 ]: strtotime() expects parameter 1 to be string, object given ~ APPPATH\classes\Controller\gametemplate.php [ 42 ] in file:line
2013-12-08 20:32:12 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'strtotime() exp...', 'C:\xampp\htdocs...', 42, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(42): strtotime(Object(Date))
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(12): Controller_GameTemplate->before()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Controller_Game->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-12-08 20:33:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: current ~ APPPATH\classes\Controller\gametemplate.php [ 44 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php:44
2013-12-08 20:33:06 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 44, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(12): Controller_GameTemplate->before()
#2 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Controller_Game->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php:44
2013-12-08 20:41:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: difference ~ APPPATH\classes\Controller\gametemplate.php [ 45 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php:45
2013-12-08 20:41:09 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(45): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 45, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(12): Controller_GameTemplate->before()
#2 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Controller_Game->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php:45
2013-12-08 20:41:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: diffence ~ APPPATH\classes\Controller\gametemplate.php [ 47 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php:47
2013-12-08 20:41:30 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(47): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 47, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(12): Controller_GameTemplate->before()
#2 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Controller_Game->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php:47
2013-12-08 21:14:51 --- CRITICAL: ErrorException [ 2 ]: date() expects at least 1 parameter, 0 given ~ APPPATH\classes\Controller\gametemplate.php [ 50 ] in file:line
2013-12-08 21:14:51 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'date() expects ...', 'C:\xampp\htdocs...', 50, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(50): date()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(12): Controller_GameTemplate->before()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Controller_Game->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-12-08 21:49:08 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: execute ~ APPPATH\classes\Model\game.php [ 177 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php:177
2013-12-08 21:49:08 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php(177): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 177, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php(135): Model_Game->updateUserArmyStats(5, '1')
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(121): Model_Game->addUnits('5', '1')
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_recruitAjax()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php:177
2013-12-08 21:49:30 --- CRITICAL: ErrorException [ 8 ]: Undefined index: airAttack ~ MODPATH\database\classes\Kohana\Database\Result\Cached.php [ 48 ] in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Result\Cached.php:48
2013-12-08 21:49:30 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Result\Cached.php(48): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 48, Array)
#1 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Result.php(243): Kohana_Database_Result_Cached->current()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php(187): Kohana_Database_Result->offsetGet('airAttack')
#3 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php(135): Model_Game->updateUserArmyStats(5, '1')
#4 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(121): Model_Game->addUnits('5', '1')
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_recruitAjax()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#8 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Result\Cached.php:48
2013-12-08 21:50:04 --- CRITICAL: ErrorException [ 8 ]: Undefined index: inteligence ~ APPPATH\classes\Model\game.php [ 191 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php:191
2013-12-08 21:50:04 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php(191): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 191, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php(135): Model_Game->updateUserArmyStats(5, '1')
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(121): Model_Game->addUnits('5', '1')
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_recruitAjax()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php:191
2013-12-08 22:06:13 --- CRITICAL: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'userID' in 'where clause' [ 
				SELECT * FROM unittypes where userID='15'
		 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-08 22:06:13 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, '??????SELECT * ...', false, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php(177): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php(135): Model_Game->updateUserArmyStats(45, '1')
#3 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(121): Model_Game->addUnits('45', '1')
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_recruitAjax()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-08 22:06:19 --- CRITICAL: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'userID' in 'where clause' [ 
				SELECT * FROM unittypes where userID='15'
		 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-08 22:06:19 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, '??????SELECT * ...', false, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php(177): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php(135): Model_Game->updateUserArmyStats(45, '1')
#3 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(121): Model_Game->addUnits('45', '1')
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_recruitAjax()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-08 22:11:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: unitID ~ APPPATH\classes\Model\game.php [ 189 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php:189
2013-12-08 22:11:14 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php(189): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 189, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php(135): Model_Game->updateUserArmyStats(45, '1')
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(121): Model_Game->addUnits('45', '1')
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_recruitAjax()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php:189
2013-12-08 22:17:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: updateUser ~ APPPATH\classes\Model\game.php [ 263 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php:263
2013-12-08 22:17:14 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php(263): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 263, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(48): Model_Game->updateRanks()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(12): Controller_GameTemplate->before()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Controller_Game->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php:263
2013-12-08 22:17:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: updateUser ~ APPPATH\classes\Model\game.php [ 263 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php:263
2013-12-08 22:17:19 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php(263): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 263, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(48): Model_Game->updateRanks()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(12): Controller_GameTemplate->before()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Controller_Game->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php:263
2013-12-08 22:21:47 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'l' (T_STRING) ~ APPPATH\classes\Model\game.php [ 257 ] in file:line
2013-12-08 22:21:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-08 22:21:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: unitStats ~ APPPATH\classes\Model\game.php [ 271 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php:271
2013-12-08 22:21:57 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php(271): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 271, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(48): Model_Game->updateRanks()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(12): Controller_GameTemplate->before()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Controller_Game->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php:271
2013-12-08 22:27:41 --- CRITICAL: ErrorException [ 8 ]: Undefined index: user ~ APPPATH\classes\Model\game.php [ 248 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php:248
2013-12-08 22:27:41 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php(248): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 248, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(48): Model_Game->updateRanks()
#2 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Controller_GameTemplate->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php:248
2013-12-08 22:28:35 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'airAttack' (T_STRING), expecting ']' ~ APPPATH\classes\Model\game.php [ 268 ] in file:line
2013-12-08 22:28:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-08 22:29:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: userID ~ APPPATH\classes\Model\game.php [ 284 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php:284
2013-12-08 22:29:01 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php(284): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 284, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(48): Model_Game->updateRanks()
#2 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Controller_GameTemplate->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php:284
2013-12-08 22:29:26 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ASCd' at line 4 [ 
			SELECT userID
			FROM roundtable round
			WHERE totalStats > 0
			ORDER BY totalStats ASCd
		 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-08 22:29:26 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, '?????SELECT use...', false, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php(298): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(48): Model_Game->updateRanks()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Controller_GameTemplate->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-08 22:32:48 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 140 ] in file:line
2013-12-08 22:32:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-08 22:48:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'return' (T_RETURN) ~ APPPATH\classes\Model\game.php [ 332 ] in file:line
2013-12-08 22:48:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-08 23:00:49 --- CRITICAL: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'n.time' in 'field list' [ 
			SELECT max(n.time) as time
			FROM roundgolddrops gd
		 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-08 23:00:49 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, '?????SELECT max...', false, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php(388): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(51): Model_Game->getLastGoldDrop()
#3 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(12): Controller_GameTemplate->before()
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Controller_Game->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-08 23:01:35 --- CRITICAL: ErrorException [ 8 ]: Undefined index: totalStats ~ MODPATH\database\classes\Kohana\Database\Result\Cached.php [ 48 ] in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Result\Cached.php:48
2013-12-08 23:01:35 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Result\Cached.php(48): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 48, Array)
#1 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Result.php(243): Kohana_Database_Result_Cached->current()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php(270): Kohana_Database_Result->offsetGet('totalStats')
#3 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(61): Model_Game->dropGolds(23, '2013-12-08 23:0...')
#4 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(12): Controller_GameTemplate->before()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Controller_Game->before()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#8 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Result\Cached.php:48
2013-12-08 23:09:59 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Game::getBuildings() ~ APPPATH\classes\Controller\Game.php [ 158 ] in file:line
2013-12-08 23:09:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-08 23:13:39 --- CRITICAL: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 't.buildingID' in 'where clause' [ 
					SELECT *, 
					(SELECT amount FROM buildingstousers u WHERE u.buildingID = t.buildingID AND u.userID = '15') amount
					FROM unittypes t
					 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-08 23:13:39 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, '???????SELECT *...', false, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php(417): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(158): Model_Game->getBuildings()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_buildings()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-08 23:13:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: unit ~ APPPATH\views\Game\build.php [ 22 ] in C:\xampp\htdocs\fallofkingdoms\application\views\Game\build.php:22
2013-12-08 23:13:57 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\views\Game\build.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 22, Array)
#1 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\fallofkingdoms\application\views\template\template.php(41): Kohana_View->__toString()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(131): Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(87): Controller_GameTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#12 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\fallofkingdoms\application\views\Game\build.php:22
2013-12-08 23:14:17 --- CRITICAL: ErrorException [ 8 ]: Undefined index: unitID ~ APPPATH\views\Game\build.php [ 22 ] in C:\xampp\htdocs\fallofkingdoms\application\views\Game\build.php:22
2013-12-08 23:14:17 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\views\Game\build.php(22): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 22, Array)
#1 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\fallofkingdoms\application\views\template\template.php(41): Kohana_View->__toString()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(131): Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(87): Controller_GameTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#12 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\fallofkingdoms\application\views\Game\build.php:22
2013-12-08 23:24:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: unitID ~ APPPATH\classes\Controller\Game.php [ 179 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:179
2013-12-08 23:24:50 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(179): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 179, Array)
#1 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_buildAjax()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:179
2013-12-08 23:25:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: unittypes ~ APPPATH\classes\Controller\Game.php [ 189 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:189
2013-12-08 23:25:35 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(189): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 189, Array)
#1 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_buildAjax()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:189
2013-12-08 23:26:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: unitID ~ APPPATH\classes\Controller\Game.php [ 187 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:187
2013-12-08 23:26:29 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(187): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 187, Array)
#1 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_buildAjax()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:187
2013-12-08 23:26:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: unitID ~ APPPATH\classes\Controller\Game.php [ 187 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:187
2013-12-08 23:26:49 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(187): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 187, Array)
#1 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_buildAjax()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:187
2013-12-08 23:27:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: buildingID ~ APPPATH\classes\Controller\Game.php [ 187 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:187
2013-12-08 23:27:09 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(187): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 187, Array)
#1 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_buildAjax()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:187
2013-12-08 23:30:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: unittypes ~ APPPATH\classes\Controller\Game.php [ 189 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:189
2013-12-08 23:30:25 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(189): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 189, Array)
#1 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_buildAjax()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:189
2013-12-08 23:33:42 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':buildingID, '6')' at line 1 [ 
					INSERT INTO buildingstousers VALUES ('15', :buildingID, '6')
				 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-08 23:33:42 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(2, '???????INSERT I...', false, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php(448): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(187): Model_Game->addBuilding('6', '1')
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_buildAjax()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-08 23:39:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH\classes\Model\game.php [ 445 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php:445
2013-12-08 23:39:14 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php(445): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 445, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(187): Model_Game->addBuilding('11', '1')
#2 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_buildAjax()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php:445
2013-12-08 23:39:31 --- CRITICAL: Database_Exception [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry '15-1' for key 'PRIMARY' [ 
					INSERT INTO buildingstousers VALUES ('15', '1', '11')
				 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-08 23:39:31 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(2, '???????INSERT I...', false, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php(460): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(187): Model_Game->addBuilding('11', '1')
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_buildAjax()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-08 23:40:06 --- CRITICAL: Database_Exception [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry '15-1' for key 'PRIMARY' [ 
					INSERT INTO buildingstousers VALUES ('15', '1', '11')
				 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-08 23:40:06 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(2, '???????INSERT I...', false, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php(460): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(187): Model_Game->addBuilding('11', '1')
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_buildAjax()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251