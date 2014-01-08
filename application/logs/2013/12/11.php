<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-11 13:11:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: currentTurn ~ APPPATH\classes\Controller\gametemplate.php [ 74 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php:74
2013-12-11 13:11:34 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(74): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 74, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(12): Controller_GameTemplate->before()
#2 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Controller_Game->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php:74
2013-12-11 14:05:02 --- CRITICAL: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'fallofkingdoms.rondtable' doesn't exist [ 
							SELECT * FROM user
							INNER JOIN  rondtable r
							ON r.userID = user.userID
							WHERE userName='admin'
							 
							 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-11 14:05:02 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, '?????????SELECT...', false, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\profile.php(19): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\profile.php(11): Model_Profile->getProfileByName('admin')
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Profile->action_user()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-11 14:09:24 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM user) army
							INNER JOIN  roundtable r
							ON r.userID = user.user' at line 2 [ 
							SELECT *,
							(SELECT count(amount) FROM unitstousers utu WHERE user.userID = utu.userID FROM user) army
							INNER JOIN  roundtable r
							ON r.userID = user.userID
							WHERE userName='admin'
							 
							 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-11 14:09:24 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, '?????????SELECT...', false, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\profile.php(20): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\profile.php(11): Model_Profile->getProfileByName('admin')
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Profile->action_user()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-11 14:10:18 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM user) army
							INNER JOIN  roundtable r
							ON r.userID = user.user' at line 2 [ 
							SELECT karma, rank, gold, race, points,
							(SELECT sum(amount) FROM unitstousers utu WHERE user.userID = utu.userID FROM user) army
							INNER JOIN  roundtable r
							ON r.userID = user.userID
							WHERE userName='admin'
							 
							 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-11 14:10:18 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, '?????????SELECT...', false, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\profile.php(20): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\profile.php(11): Model_Profile->getProfileByName('admin')
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Profile->action_user()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-11 14:10:39 --- CRITICAL: ErrorException [ 8 ]: Undefined index: salt ~ APPPATH\views\profile\profile.php [ 46 ] in C:\xampp\htdocs\fallofkingdoms\application\views\profile\profile.php:46
2013-12-11 14:10:39 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\views\profile\profile.php(46): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 46, Array)
#1 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\fallofkingdoms\application\views\template\template.php(41): Kohana_View->__toString()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(158): Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(87): Controller_GameTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#12 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\fallofkingdoms\application\views\profile\profile.php:46
2013-12-11 14:33:06 --- CRITICAL: Database_Exception [ 21000 ]: SQLSTATE[21000]: Cardinality violation: 1241 Operand should contain 1 column(s) [ 
					SELECT *, 
					(SELECT amount, multiple FROM buildingstousers u WHERE u.buildingID = t.buildingID AND u.userID = '15') amount
					FROM buildingtypes t
					 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-11 14:33:06 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, '???????SELECT *...', false, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php(454): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(158): Model_Game->getBuildings()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_buildings()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-11 14:33:34 --- CRITICAL: Database_Exception [ 21000 ]: SQLSTATE[21000]: Cardinality violation: 1241 Operand should contain 1 column(s) [ 
					SELECT *, 
					(SELECT amount, multiple FROM buildingstousers u WHERE u.buildingID = t.buildingID AND u.userID = '15')
					FROM buildingtypes t
					 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-11 14:33:34 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, '???????SELECT *...', false, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php(454): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(158): Model_Game->getBuildings()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_buildings()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-11 14:34:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: buildingtypes ~ APPPATH\classes\Controller\Game.php [ 159 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:159
2013-12-11 14:34:41 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(159): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 159, Array)
#1 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_buildings()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:159
2013-12-11 20:13:24 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'class' (T_CLASS) ~ APPPATH\classes\Controller\gametemplate.php [ 3 ] in file:line
2013-12-11 20:13:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-11 20:14:14 --- CRITICAL: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 132644864 bytes) ~ APPPATH\views\Game\attack.php [ 16 ] in file:line
2013-12-11 20:14:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-11 20:44:20 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'SELECT sum(amount) FROM unitstousers utu WHERE user.userID = utu.userID ) army
' at line 2 [ 
							SELECT karma, rank, gold, race, points, salt, userID
							(SELECT sum(amount) FROM unitstousers utu WHERE user.userID = utu.userID ) army
							FROM user
							INNER JOIN  roundtable r
							ON r.userID = user.userID
							WHERE userName='admin'
							 
							 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-11 20:44:20 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, '?????????SELECT...', false, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\profile.php(21): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(232): Model_Profile->getProfileByName('admin')
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_attackAjax()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-11 20:44:32 --- CRITICAL: Database_Exception [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1052 Column 'userID' in field list is ambiguous [ 
							SELECT karma, rank, gold, race, points, salt, userID,
							(SELECT sum(amount) FROM unitstousers utu WHERE user.userID = utu.userID ) army
							FROM user
							INNER JOIN  roundtable r
							ON r.userID = user.userID
							WHERE userName='admin'
							 
							 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-11 20:44:32 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, '?????????SELECT...', false, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\profile.php(21): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(232): Model_Profile->getProfileByName('admin')
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_attackAjax()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-11 20:44:51 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':userID' at line 3 [ 
							SELECT *
							FROM untistousers
							WHERE userID=:userID
							 
							 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-11 20:44:51 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, '?????????SELECT...', false, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\attack.php(16): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(236): Model_Attack->getUserStats('16')
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_attackAjax()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-11 20:45:16 --- CRITICAL: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'fallofkingdoms.untistousers' doesn't exist [ 
							SELECT *
							FROM untistousers
							WHERE userID='16'
							 
							 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-11 20:45:16 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, '?????????SELECT...', false, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\attack.php(16): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(236): Model_Attack->getUserStats('16')
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_attackAjax()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-11 20:53:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: postion ~ APPPATH\classes\Controller\Game.php [ 243 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:243
2013-12-11 20:53:30 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(243): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 243, Array)
#1 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_attackAjax()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:243
2013-12-11 20:54:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: attackAP ~ APPPATH\classes\Controller\Game.php [ 254 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:254
2013-12-11 20:54:38 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(254): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 254, Array)
#1 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_attackAjax()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:254
2013-12-11 20:56:55 --- CRITICAL: ErrorException [ 8 ]: Undefined index: inteligence ~ APPPATH\classes\Controller\Game.php [ 247 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:247
2013-12-11 20:56:55 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(247): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 247, Array)
#1 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_attackAjax()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:247
2013-12-11 21:07:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: targetInt ~ APPPATH\classes\Controller\Game.php [ 265 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:265
2013-12-11 21:07:33 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(265): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 265, Array)
#1 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_attackAjax()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:265
2013-12-11 21:31:54 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Game.php [ 278 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:278
2013-12-11 21:31:54 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(278): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 278, Array)
#1 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_attackAjax()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:278
2013-12-11 21:32:12 --- CRITICAL: ErrorException [ 8 ]: Undefined index: unitName ~ APPPATH\classes\Controller\Game.php [ 278 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:278
2013-12-11 21:32:12 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(278): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 278, Array)
#1 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_attackAjax()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:278
2013-12-11 21:32:20 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Game.php [ 278 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:278
2013-12-11 21:32:20 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(278): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 278, Array)
#1 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_attackAjax()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:278
2013-12-11 21:32:37 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_Result_Cached could not be converted to string ~ APPPATH\classes\Controller\Game.php [ 278 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:278
2013-12-11 21:32:37 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(278): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\xampp\htdocs...', 278, Array)
#1 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_attackAjax()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:278
2013-12-11 21:32:55 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_Result_Cached could not be converted to string ~ APPPATH\classes\Controller\Game.php [ 275 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:275
2013-12-11 21:32:55 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(275): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\xampp\htdocs...', 275, Array)
#1 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_attackAjax()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:275
2013-12-11 21:33:16 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_Result_Cached could not be converted to string ~ APPPATH\classes\Controller\Game.php [ 275 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:275
2013-12-11 21:33:16 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(275): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\xampp\htdocs...', 275, Array)
#1 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_attackAjax()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:275
2013-12-11 21:33:25 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Game.php [ 275 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:275
2013-12-11 21:33:25 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(275): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 275, Array)
#1 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_attackAjax()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:275
2013-12-11 21:33:31 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Game.php [ 275 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:275
2013-12-11 21:33:31 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(275): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 275, Array)
#1 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_attackAjax()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:275
2013-12-11 21:43:19 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\database\classes\Kohana\Database\Result.php [ 227 ] in file:line
2013-12-11 21:43:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-11 21:44:19 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\database\classes\Kohana\Database\Result\Cached.php [ 48 ] in file:line
2013-12-11 21:44:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-11 22:12:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: aa ~ APPPATH\classes\Model\attack.php [ 68 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Model\attack.php:68
2013-12-11 22:12:40 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\attack.php(68): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 68, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(282): Model_Attack->updateUnit('1', 4, '16')
#2 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_attackAjax()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Model\attack.php:68
2013-12-11 22:13:16 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 8 [ 
			UPDATE roundtable
			SET airAttack=(airAttack - 0.000000),
				airDefense=(airDefense - 0.000000), 
				groundAttack=(groundAttack -4.000000), 
				groundDefense=(groundDefense -4.000000),
				inteligence=(inteligence -4.000000), 
				goldGather=(goldGather -4.000000)
			WHERE userID=(airAttack -'16'
		 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-11 22:13:16 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(3, '?????UPDATE rou...', false, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\attack.php(77): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(282): Model_Attack->updateUnit('1', 4, '16')
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_attackAjax()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-11 22:14:01 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 8 [ 
			UPDATE roundtable
			SET airAttack=(airAttack - 0),
				airDefense=(airDefense - 0), 
				groundAttack=(groundAttack -4), 
				groundDefense=(groundDefense -4),
				inteligence=(inteligence -4), 
				goldGather=(goldGather -4)
			WHERE userID=(airAttack -'16'
		 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-11 22:14:01 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(3, '?????UPDATE rou...', false, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\attack.php(77): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(282): Model_Attack->updateUnit('1', 4, '16')
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_attackAjax()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-11 22:14:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: type ~ APPPATH\classes\Model\attack.php [ 86 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Model\attack.php:86
2013-12-11 22:14:25 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\attack.php(86): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 86, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(282): Model_Attack->updateUnit('1', 4, '16')
#2 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_attackAjax()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Model\attack.php:86
2013-12-11 22:26:03 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'SELECT sum(amount) FROM unitstousers u WHERE u.userID = '16') army
							FROM ' at line 3 [ 
							SELECT airAttack, airDefense, groundAttack, groundDefense, Inteligence,
								turns, gold, userID, exp, level, totalStats, race, karma, rank
							(SELECT sum(amount) FROM unitstousers u WHERE u.userID = '16') army
							FROM roundtable
							WHERE userID='16'
							 
							 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-11 22:26:03 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, '?????????SELECT...', false, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\attack.php(18): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(236): Model_Attack->getUserStats('16')
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_attackAjax()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-11 22:28:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '""' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' ~ APPPATH\classes\Controller\Game.php [ 265 ] in file:line
2013-12-11 22:28:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-11 22:39:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Game.php [ 271 ] in file:line
2013-12-11 22:39:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-11 22:59:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: attackerKarma ~ APPPATH\classes\Controller\Game.php [ 271 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:271
2013-12-11 22:59:13 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(271): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 271, Array)
#1 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_attackAjax()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:271
2013-12-11 23:00:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: karma ~ APPPATH\classes\Controller\Game.php [ 296 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:296
2013-12-11 23:00:12 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(296): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 296, Array)
#1 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_attackAjax()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:296
2013-12-11 23:00:36 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':level
			WHERE userID='15'' at line 3 [ 
			UPDATE roundtable
			SET gold=(gold + 5523.932857), karma=(karma + -5.000000), turns=(turns - '15'), exp=680.200000,
				level=:level
			WHERE userID='15'
		 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-11 23:00:36 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(3, '?????UPDATE rou...', false, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\attack.php(145): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(296): Model_Attack->updateAttacker(5523.9328571429, -5, '15', 680.2, 3.6758176320519, '15')
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_attackAjax()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-11 23:01:03 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':level
			WHERE userID='15'' at line 3 [ 
			UPDATE roundtable
			SET gold=(gold + 5541), karma=(karma + -5), turns=(turns - 15), exp=680,
				level=:level
			WHERE userID='15'
		 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-11 23:01:03 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(3, '?????UPDATE rou...', false, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\attack.php(145): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(296): Model_Attack->updateAttacker(5541.8019793072, -5, '15', 680.2, 3.6758176320519, '15')
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_attackAjax()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-11 23:01:23 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':level
			WHERE userID='15'' at line 3 [ 
			UPDATE roundtable
			SET gold=(gold + 5559), karma=(karma + -5), turns=(turns - 15), exp=680,
				level=:level
			WHERE userID='15'
		 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-11 23:01:23 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(3, '?????UPDATE rou...', false, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\attack.php(145): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(296): Model_Attack->updateAttacker(5559.9465095195, -5, '15', 680.2, 3.6758176320519, '15')
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_attackAjax()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-11 23:01:59 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':level 
			WHERE userID='15'' at line 2 [ 
			UPDATE roundtable
			SET gold=(gold + 5578), karma=(karma + -5), turns=(turns - 15), exp=680, level=:level 
			WHERE userID='15'
		 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-11 23:01:59 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(3, '?????UPDATE rou...', false, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\attack.php(144): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(296): Model_Attack->updateAttacker(5578.3728643216, -5, '15', 680.2, 3.6758176320519, '15')
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_attackAjax()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-11 23:02:25 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':level 
			WHERE userID='15'' at line 2 [ 
			UPDATE roundtable 
			SET gold=(gold + 5597), karma=(karma + -5), turns=(turns - 15), exp=680, level=:level 
			WHERE userID='15' 
		 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-11 23:02:25 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(3, '?????UPDATE rou...', false, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\attack.php(144): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(296): Model_Attack->updateAttacker(5597.0876611418, -5, '15', 680.2, 3.6758176320519, '15')
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_attackAjax()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-11 23:03:07 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Attack::updateTarget() ~ APPPATH\classes\Controller\Game.php [ 297 ] in file:line
2013-12-11 23:03:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-11 23:10:55 --- CRITICAL: ErrorException [ 8 ]: Undefined index: user ~ APPPATH\classes\Model\game.php [ 92 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php:92
2013-12-11 23:10:55 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php(92): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 92, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(91): Model_Game->getUnits()
#2 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_recruit()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php:92
2013-12-11 23:12:27 --- CRITICAL: ErrorException [ 2 ]: Division by zero ~ APPPATH\classes\Controller\Game.php [ 270 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:270
2013-12-11 23:12:27 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(270): Kohana_Core::error_handler(2, 'Division by zer...', 'C:\xampp\htdocs...', 270, Array)
#1 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_attackAjax()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:270
2013-12-11 23:16:08 --- CRITICAL: ErrorException [ 2 ]: Division by zero ~ APPPATH\classes\Controller\Game.php [ 270 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:270
2013-12-11 23:16:08 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(270): Kohana_Core::error_handler(2, 'Division by zer...', 'C:\xampp\htdocs...', 270, Array)
#1 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_attackAjax()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:270
2013-12-11 23:21:18 --- CRITICAL: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'karma' in 'field list' [ 
							SELECT karma, rank, gold, race, points, salt, r.userID
							FROM user
							WHERE userName='gacoyne'
							 
							 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-11 23:21:18 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, '?????????SELECT...', false, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\profile.php(17): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\profile.php(25): Model_Profile->getProfileByNameNotActivate('gacoyne')
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Profile->action_user()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-11 23:21:38 --- CRITICAL: ErrorException [ 8 ]: Undefined index: rank ~ APPPATH\views\profile\profile.php [ 15 ] in C:\xampp\htdocs\fallofkingdoms\application\views\profile\profile.php:15
2013-12-11 23:21:38 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\views\profile\profile.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 15, Array)
#1 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\fallofkingdoms\application\views\template\template.php(41): Kohana_View->__toString()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(158): Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(87): Controller_GameTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#12 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\fallofkingdoms\application\views\profile\profile.php:15
2013-12-11 23:25:43 --- CRITICAL: ErrorException [ 8 ]: Undefined index: karma ~ MODPATH\database\classes\Kohana\Database\Result\Cached.php [ 48 ] in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Result\Cached.php:48
2013-12-11 23:25:43 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Result\Cached.php(48): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 48, Array)
#1 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Result.php(243): Kohana_Database_Result_Cached->current()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(272): Kohana_Database_Result->offsetGet('karma')
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_attackAjax()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Result\Cached.php:48
2013-12-11 23:25:53 --- CRITICAL: ErrorException [ 8 ]: Undefined index: karma ~ MODPATH\database\classes\Kohana\Database\Result\Cached.php [ 48 ] in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Result\Cached.php:48
2013-12-11 23:25:53 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Result\Cached.php(48): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 48, Array)
#1 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Result.php(243): Kohana_Database_Result_Cached->current()
#2 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(272): Kohana_Database_Result->offsetGet('karma')
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_attackAjax()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Result\Cached.php:48
2013-12-11 23:27:26 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant Karma - assumed 'Karma' ~ APPPATH\classes\Controller\Game.php [ 272 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:272
2013-12-11 23:27:26 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(272): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\xampp\htdocs...', 272, Array)
#1 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_attackAjax()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:272
2013-12-11 23:34:08 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: turn ~ APPPATH\classes\Controller\Game.php [ 245 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:245
2013-12-11 23:34:08 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(245): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 245, Array)
#1 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_attackAjax()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:245
2013-12-11 23:41:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: unitsAmounts ~ APPPATH\classes\Model\attack.php [ 48 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Model\attack.php:48
2013-12-11 23:41:14 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\attack.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 48, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(281): Model_Attack->updateUnit('1', 15, '16')
#2 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_attackAjax()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Model\attack.php:48
2013-12-11 23:41:41 --- CRITICAL: ErrorException [ 8 ]: Object of class Database_Result_Cached could not be converted to int ~ APPPATH\classes\Model\attack.php [ 48 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Model\attack.php:48
2013-12-11 23:41:41 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\attack.php(48): Kohana_Core::error_handler(8, 'Object of class...', 'C:\xampp\htdocs...', 48, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(281): Model_Attack->updateUnit('1', 15, '16')
#2 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_attackAjax()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Model\attack.php:48