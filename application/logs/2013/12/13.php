<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-13 12:57:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: sessionSalt ~ APPPATH\classes\Model\login.php [ 36 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Model\login.php:36
2013-12-13 12:57:21 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\login.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 36, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(96): Model_Login->logUser()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(12): Controller_GameTemplate->before()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Controller_Game->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Model\login.php:36
2013-12-13 12:58:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: length ~ APPPATH\classes\Model\login.php [ 14 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Model\login.php:14
2013-12-13 12:58:45 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\login.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 14, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Login.php(30): Model_Login->login('speed_sk8er', 'K@ktuskat33')
#2 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Model\login.php:14
2013-12-13 13:15:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: type ~ APPPATH\classes\Controller\Game.php [ 186 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:186
2013-12-13 13:15:39 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(186): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 186, Array)
#1 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_buildAjax()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:186
2013-12-13 13:16:29 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':amount)' at line 2 [ 
				INSERT INTO buildingstousers
				VALUES ('2', 1, :amount)
		 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 13:16:29 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(2, '??????INSERT IN...', false, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php(476): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(193): Model_Game->addBuilding(1, '2')
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_buildAjax()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 13:32:15 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_Result_Cached could not be converted to string ~ APPPATH\views\Game\controlPanel.php [ 7 ] in C:\xampp\htdocs\fallofkingdoms\application\views\Game\controlPanel.php:7
2013-12-13 13:32:15 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\views\Game\controlPanel.php(7): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\xampp\htdocs...', 7, Array)
#1 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\fallofkingdoms\application\views\template\template.php(30): Kohana_View->__toString()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(162): Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(87): Controller_GameTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#12 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\fallofkingdoms\application\views\Game\controlPanel.php:7
2013-12-13 13:32:36 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_Result_Cached could not be converted to string ~ APPPATH\views\Game\controlPanel.php [ 7 ] in C:\xampp\htdocs\fallofkingdoms\application\views\Game\controlPanel.php:7
2013-12-13 13:32:36 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\views\Game\controlPanel.php(7): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\xampp\htdocs...', 7, Array)
#1 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\fallofkingdoms\application\views\template\template.php(30): Kohana_View->__toString()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(162): Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(87): Controller_GameTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#12 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\fallofkingdoms\application\views\Game\controlPanel.php:7
2013-12-13 13:32:48 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\classes\Controller\gametemplate.php [ 127 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php:127
2013-12-13 13:32:48 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(127): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 127, Array)
#1 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(87): Controller_GameTemplate->after()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php:127
2013-12-13 13:32:56 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\classes\Controller\gametemplate.php [ 124 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php:124
2013-12-13 13:32:56 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(124): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 124, Array)
#1 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(87): Controller_GameTemplate->after()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php:124
2013-12-13 13:33:15 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':buildingID, '15', 1)' at line 3 [ 
		INSERT INTO buildingstousers 
		(buildingID, userID, amount) 
		VALUES (:buildingID, '15', 1) ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 13:33:15 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(2, '????INSERT INTO...', false, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php(61): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(74): Model_Game->activateUser('1')
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_ativateAjax()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 13:33:50 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':buildingID, '15', 1)' at line 3 [ 
		INSERT INTO buildingstousers 
		(buildingID, userID, amount) 
		VALUES (:buildingID, '15', 1) ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 13:33:50 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(2, '????INSERT INTO...', false, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php(61): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(74): Model_Game->activateUser('1')
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_ativateAjax()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 13:36:55 --- CRITICAL: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'buildingID' in 'where clause' [ 
				UPDATE unitstousers
				SET amount=2
				WHERE userID='15' AND buildingID = 1
			 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 13:36:55 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(3, '??????UPDATE un...', false, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php(531): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(188): Model_Game->addBuildingRoundTable('1', '1')
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_buildAjax()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-13 13:41:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\views\Game\build.php [ 32 ] in file:line
2013-12-13 13:41:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-13 13:41:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: buildingID ~ APPPATH\views\Game\build.php [ 32 ] in C:\xampp\htdocs\fallofkingdoms\application\views\Game\build.php:32
2013-12-13 13:41:18 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\views\Game\build.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 32, Array)
#1 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\fallofkingdoms\application\views\template\template.php(41): Kohana_View->__toString()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(162): Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(87): Controller_GameTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#12 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\fallofkingdoms\application\views\Game\build.php:32
2013-12-13 13:41:28 --- CRITICAL: ErrorException [ 8 ]: Undefined index: buildingId ~ APPPATH\views\Game\build.php [ 32 ] in C:\xampp\htdocs\fallofkingdoms\application\views\Game\build.php:32
2013-12-13 13:41:28 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\views\Game\build.php(32): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 32, Array)
#1 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\fallofkingdoms\application\views\template\template.php(41): Kohana_View->__toString()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(162): Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(87): Controller_GameTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#12 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\fallofkingdoms\application\views\Game\build.php:32