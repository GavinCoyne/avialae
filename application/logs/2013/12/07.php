<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-07 12:25:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: auth ~ APPPATH\classes\Controller\Welcome.php [ 14 ] in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\Welcome.php:14
2013-12-07 12:25:33 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\Welcome.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp2\htdoc...', 14, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_stuff()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\Welcome.php:14
2013-12-07 13:00:45 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 101 ] in file:line
2013-12-07 13:00:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-07 13:01:01 --- CRITICAL: View_Exception [ 0 ]: The requested view 1 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php:339
2013-12-07 13:01:01 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(339): Kohana_View->set_filename(true)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(102): Kohana_View->render(true)
#2 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Kohana_Controller->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php:339
2013-12-07 13:01:18 --- CRITICAL: View_Exception [ 0 ]: The requested view template/template.php could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php:137
2013-12-07 13:01:18 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template/templa...')
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(101): Kohana_View->__construct('template/templa...')
#2 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Kohana_Controller->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php:137
2013-12-07 13:01:28 --- CRITICAL: View_Exception [ 0 ]: The requested view /template/template.php could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php:137
2013-12-07 13:01:28 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/template/templ...')
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(101): Kohana_View->__construct('/template/templ...')
#2 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Kohana_Controller->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php:137
2013-12-07 13:01:36 --- CRITICAL: View_Exception [ 0 ]: The requested view views/template/template.php could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php:137
2013-12-07 13:01:36 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(137): Kohana_View->set_filename('views/template/...')
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(101): Kohana_View->__construct('views/template/...')
#2 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Kohana_Controller->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php:137
2013-12-07 13:12:44 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_Master_Template' not found ~ APPPATH\classes\Controller\Public.php [ 3 ] in file:line
2013-12-07 13:12:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-07 13:15:50 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\template\template.php [ 3 ] in file:line
2013-12-07 13:15:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-07 13:16:21 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\template\template.php [ 3 ] in file:line
2013-12-07 13:16:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-07 13:17:56 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Public.php [ 8 ] in file:line
2013-12-07 13:17:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-07 13:25:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting variable (T_VARIABLE) or '$' ~ APPPATH\classes\Controller\Forums.php [ 9 ] in file:line
2013-12-07 13:25:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-07 13:50:46 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_Query::$execute ~ APPPATH\classes\Controller\Public.php [ 10 ] in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\Public.php:10
2013-12-07 13:50:46 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\Public.php(10): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp2\htdoc...', 10, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Public->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\Public.php:10
2013-12-07 13:58:23 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting variable (T_VARIABLE) or '$' ~ APPPATH\classes\Controller\Forums.php [ 9 ] in file:line
2013-12-07 13:58:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-07 14:01:51 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Login.php [ 7 ] in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\Login.php:7
2013-12-07 14:01:51 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\Login.php(7): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\xampp2\htdoc...', 7, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\Login.php:7
2013-12-07 14:03:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting variable (T_VARIABLE) or '$' ~ APPPATH\classes\Controller\Forums.php [ 9 ] in file:line
2013-12-07 14:03:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-07 14:16:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Login.php [ 13 ] in file:line
2013-12-07 14:16:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-07 14:16:41 --- CRITICAL: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\Controller\Login.php [ 11 ] in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\Login.php:11
2013-12-07 14:16:41 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\Login.php(11): Kohana_Core::error_handler(8, 'Object of class...', 'C:\xampp2\htdoc...', 11, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\Login.php:11
2013-12-07 14:18:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH\views\template\template.php [ 28 ] in C:\xampp2\htdocs\fallofkingdoms\application\views\template\template.php:28
2013-12-07 14:18:01 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\views\template\template.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp2\htdoc...', 28, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp2\htdoc...')
#2 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp2\htdoc...', Array)
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(65): Kohana_Controller_Template->after()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(87): Controller_GameTemplate->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp2\htdocs\fallofkingdoms\application\views\template\template.php:28
2013-12-07 15:32:24 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '=1' at line 1 [ SELECT * FROM user WHERE userName='gacoyne' LIMIT=1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 15:32:24 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM u...', false, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\register.php(10): Kohana_Database_Query->execute()
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\Register.php(32): Model_Register->checkUserName('gacoyne')
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Register->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 15:32:59 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_Register::$auth ~ APPPATH\classes\Model\register.php [ 19 ] in C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\register.php:19
2013-12-07 15:32:59 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\register.php(19): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp2\htdoc...', 19, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\Register.php(34): Model_Register->registerUser('gacoyne', 'K@ktuskat33', 'speed.sk8@gmail...')
#2 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Register->action_register()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\register.php:19
2013-12-07 15:35:30 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':password, :salt, :email' at line 1 [ INSERT INTO user (userID, userName, password, salt, email) VALUES (null, 'speed.sk8@gmail.com', :password, :salt, :email ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 15:35:30 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO use...', false, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\register.php(30): Kohana_Database_Query->execute()
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\Register.php(34): Model_Register->registerUser('gacoyne', 'K@ktuskat33', 'speed.sk8@gmail...')
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Register->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 15:35:59 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO user (userID, userName, password, salt, email) VALUES (null, 'gacoyne', 'b3b40e2d913f0533442c48a7120350e29b6a3621aa10a077239a7e09c368223d58b34bc5d08c52b421ad8275830e2f671a4898133025e69e631c80cb4e6511e3', '3e0e81fa870989464e725e4d257d85906773ede01228d400631daaab261abf0f5847a73ea9dce6d780db0059ea7aeb0fc04d98c9d00aa5b534c02100c5fdc379', 'speed.sk8@gmail.com' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 15:35:59 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO use...', false, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\register.php(30): Kohana_Database_Query->execute()
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\Register.php(34): Model_Register->registerUser('gacoyne', 'K@ktuskat33', 'speed.sk8@gmail...')
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Register->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 15:37:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH\classes\Model\register.php [ 31 ] in C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\register.php:31
2013-12-07 15:37:41 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\register.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp2\htdoc...', 31, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\Register.php(34): Model_Register->registerUser('gacoyne', 'K@ktuskat33', 'speed.sk8@gmail...')
#2 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Register->action_register()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\register.php:31
2013-12-07 15:56:12 --- CRITICAL: ErrorException [ 2 ]: json_decode() expects parameter 1 to be string, array given ~ APPPATH\classes\Controller\Register.php [ 35 ] in file:line
2013-12-07 15:56:12 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'json_decode() e...', 'C:\xampp2\htdoc...', 35, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\Register.php(35): json_decode(Array)
#2 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Register->action_register()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2013-12-07 15:57:13 --- CRITICAL: ErrorException [ 2 ]: json_decode() expects parameter 1 to be string, array given ~ APPPATH\classes\Controller\Register.php [ 36 ] in file:line
2013-12-07 15:57:13 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'json_decode() e...', 'C:\xampp2\htdoc...', 36, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\Register.php(36): json_decode(Array)
#2 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Register->action_register()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2013-12-07 16:02:00 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'passowrd' in 'field list' [ SELECT userName, passowrd FROM user WHERE userName='admin' OR email='admin' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 16:02:00 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT userName...', false, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\login.php(18): Kohana_Database_Query->execute()
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\login.php(7): Model_Login->check('admin')
#3 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\Login.php(30): Model_Login->login('admin', 'K@ktuskat33')
#4 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 16:03:00 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant result - assumed 'result' ~ APPPATH\classes\Model\login.php [ 8 ] in C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\login.php:8
2013-12-07 16:03:00 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\login.php(8): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\xampp2\htdoc...', 8, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\Login.php(30): Model_Login->login('admin', 'F@wndogy3')
#2 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\login.php:8
2013-12-07 16:08:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: logout ~ APPPATH\views\template\template.php [ 29 ] in C:\xampp2\htdocs\fallofkingdoms\application\views\template\template.php:29
2013-12-07 16:08:03 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\views\template\template.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp2\htdoc...', 29, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp2\htdoc...')
#2 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp2\htdoc...', Array)
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(71): Kohana_Controller_Template->after()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(87): Controller_GameTemplate->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#8 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp2\htdocs\fallofkingdoms\application\views\template\template.php:29
2013-12-07 16:08:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: logout ~ APPPATH\classes\Controller\gametemplate.php [ 22 ] in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php:22
2013-12-07 16:08:36 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp2\htdoc...', 22, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Controller_GameTemplate->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php:22
2013-12-07 17:35:21 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Session.php:125
2013-12-07 17:35:21 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 C:\xampp2\htdocs\fallofkingdoms\modules\auth\classes\Kohana\Auth.php(58): Kohana_Session::instance('native')
#3 C:\xampp2\htdocs\fallofkingdoms\modules\auth\classes\Kohana\Auth\File.php(21): Kohana_Auth->__construct(Object(Config_Group))
#4 C:\xampp2\htdocs\fallofkingdoms\modules\auth\classes\Kohana\Auth.php(37): Kohana_Auth_File->__construct(Object(Config_Group))
#5 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(35): Kohana_Auth::instance()
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Controller_GameTemplate->before()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#9 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Session.php:125
2013-12-07 17:37:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH\classes\Controller\gametemplate.php [ 35 ] in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php:35
2013-12-07 17:37:38 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp2\htdoc...', 35, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Controller_GameTemplate->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php:35
2013-12-07 17:38:16 --- CRITICAL: ErrorException [ 8 ]: Undefined index: user ~ APPPATH\classes\Controller\gametemplate.php [ 35 ] in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php:35
2013-12-07 17:38:16 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(35): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp2\htdoc...', 35, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Controller_GameTemplate->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public))
#4 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php:35
2013-12-07 17:38:35 --- CRITICAL: ErrorException [ 8 ]: Undefined index: user ~ APPPATH\classes\Controller\gametemplate.php [ 35 ] in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php:35
2013-12-07 17:38:35 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(35): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp2\htdoc...', 35, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Controller_GameTemplate->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php:35
2013-12-07 17:38:57 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Session.php:125
2013-12-07 17:38:57 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 C:\xampp2\htdocs\fallofkingdoms\modules\auth\classes\Kohana\Auth.php(58): Kohana_Session::instance('native')
#3 C:\xampp2\htdocs\fallofkingdoms\modules\auth\classes\Kohana\Auth\File.php(21): Kohana_Auth->__construct(Object(Config_Group))
#4 C:\xampp2\htdocs\fallofkingdoms\modules\auth\classes\Kohana\Auth.php(37): Kohana_Auth_File->__construct(Object(Config_Group))
#5 C:\xampp2\htdocs\fallofkingdoms\application\views\Register\login.php(4): Kohana_Auth::instance()
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp2\htdoc...')
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp2\htdoc...', Array)
#8 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(228): Kohana_View->render()
#9 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\Login.php(11): Kohana_View->__toString()
#10 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#13 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#16 {main} in C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Session.php:125
2013-12-07 17:39:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: session ~ APPPATH\classes\Controller\gametemplate.php [ 35 ] in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php:35
2013-12-07 17:39:45 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp2\htdoc...', 35, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Controller_GameTemplate->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php:35
2013-12-07 17:40:53 --- CRITICAL: ErrorException [ 1 ]: Function name must be a string ~ APPPATH\classes\Controller\gametemplate.php [ 34 ] in file:line
2013-12-07 17:40:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-07 17:41:18 --- CRITICAL: ErrorException [ 1 ]: Function name must be a string ~ APPPATH\classes\Controller\gametemplate.php [ 34 ] in file:line
2013-12-07 17:41:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-07 17:41:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\gametemplate.php [ 35 ] in file:line
2013-12-07 17:41:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-07 17:42:14 --- CRITICAL: ErrorException [ 1 ]: Function name must be a string ~ APPPATH\classes\Controller\gametemplate.php [ 34 ] in file:line
2013-12-07 17:42:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-07 17:51:05 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\Register\login.php [ 4 ] in file:line
2013-12-07 17:51:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-07 18:02:04 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_Login::$session ~ APPPATH\classes\Model\login.php [ 13 ] in C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\login.php:13
2013-12-07 18:02:04 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\login.php(13): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp2\htdoc...', 13, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\Login.php(29): Model_Login->login('gacoyne', 'K@ktuskat33')
#2 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\login.php:13
2013-12-07 18:05:01 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function get() ~ APPPATH\classes\Controller\Login.php [ 30 ] in file:line
2013-12-07 18:05:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-07 18:16:07 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Session.php:125
2013-12-07 18:16:07 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Session\Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(34): Kohana_Session::instance()
#4 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Controller_GameTemplate->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Session.php:125
2013-12-07 18:17:13 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Session.php:125
2013-12-07 18:17:13 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Session\Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(34): Kohana_Session::instance()
#4 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Controller_GameTemplate->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Session.php:125
2013-12-07 18:20:47 --- CRITICAL: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH\classes\Controller\Login.php [ 30 ] in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\Login.php:30
2013-12-07 18:20:47 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\Login.php(30): Kohana_Core::error_handler(2048, 'Only variables ...', 'C:\xampp2\htdoc...', 30, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\Login.php:30
2013-12-07 18:24:30 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Login::$session ~ APPPATH\classes\Controller\gametemplate.php [ 35 ] in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php:35
2013-12-07 18:24:30 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(35): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp2\htdoc...', 35, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Controller_GameTemplate->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php:35
2013-12-07 18:24:38 --- CRITICAL: ErrorException [ 1 ]: Call to a member function write() on a non-object ~ APPPATH\classes\Controller\gametemplate.php [ 34 ] in file:line
2013-12-07 18:24:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-07 18:24:45 --- CRITICAL: ErrorException [ 1 ]: Call to a member function write() on a non-object ~ APPPATH\classes\Controller\gametemplate.php [ 35 ] in file:line
2013-12-07 18:24:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-07 18:25:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH\classes\Controller\gametemplate.php [ 39 ] in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php:39
2013-12-07 18:25:03 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp2\htdoc...', 39, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Controller_GameTemplate->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php:39
2013-12-07 18:25:38 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Login::$session ~ APPPATH\classes\Controller\gametemplate.php [ 42 ] in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php:42
2013-12-07 18:25:38 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(42): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp2\htdoc...', 42, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Controller_GameTemplate->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php:42
2013-12-07 18:26:04 --- CRITICAL: ErrorException [ 8 ]: Undefined index: user ~ APPPATH\classes\Controller\gametemplate.php [ 42 ] in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php:42
2013-12-07 18:26:04 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(42): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp2\htdoc...', 42, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Controller_GameTemplate->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php:42
2013-12-07 18:27:10 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Session.php:125
2013-12-07 18:27:10 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\Login.php(29): Kohana_Session::instance()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Session.php:125
2013-12-07 18:27:30 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Session.php:125
2013-12-07 18:27:30 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 C:\xampp2\htdocs\fallofkingdoms\modules\auth\classes\Kohana\Auth.php(58): Kohana_Session::instance('native')
#3 C:\xampp2\htdocs\fallofkingdoms\modules\auth\classes\Kohana\Auth\File.php(21): Kohana_Auth->__construct(Object(Config_Group))
#4 C:\xampp2\htdocs\fallofkingdoms\modules\auth\classes\Kohana\Auth.php(37): Kohana_Auth_File->__construct(Object(Config_Group))
#5 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\login.php(6): Kohana_Auth::instance()
#6 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\Login.php(30): Model_Login->login('gacoyne', 'K@ktuskat33')
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#10 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Session.php:125
2013-12-07 18:30:33 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Session.php:125
2013-12-07 18:30:33 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 C:\xampp2\htdocs\fallofkingdoms\modules\auth\classes\Kohana\Auth.php(58): Kohana_Session::instance('native')
#3 C:\xampp2\htdocs\fallofkingdoms\modules\auth\classes\Kohana\Auth\File.php(21): Kohana_Auth->__construct(Object(Config_Group))
#4 C:\xampp2\htdocs\fallofkingdoms\modules\auth\classes\Kohana\Auth.php(37): Kohana_Auth_File->__construct(Object(Config_Group))
#5 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(39): Kohana_Auth::instance()
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Controller_GameTemplate->before()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#9 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Session.php:125
2013-12-07 18:31:08 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Session.php:125
2013-12-07 18:31:08 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 C:\xampp2\htdocs\fallofkingdoms\modules\auth\classes\Kohana\Auth.php(58): Kohana_Session::instance('native')
#3 C:\xampp2\htdocs\fallofkingdoms\modules\auth\classes\Kohana\Auth\File.php(21): Kohana_Auth->__construct(Object(Config_Group))
#4 C:\xampp2\htdocs\fallofkingdoms\modules\auth\classes\Kohana\Auth.php(37): Kohana_Auth_File->__construct(Object(Config_Group))
#5 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(36): Kohana_Auth::instance()
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Controller_GameTemplate->before()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#9 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Session.php:125
2013-12-07 18:31:40 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Session.php:125
2013-12-07 18:31:40 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 C:\xampp2\htdocs\fallofkingdoms\modules\auth\classes\Kohana\Auth.php(58): Kohana_Session::instance('native')
#3 C:\xampp2\htdocs\fallofkingdoms\modules\auth\classes\Kohana\Auth\File.php(21): Kohana_Auth->__construct(Object(Config_Group))
#4 C:\xampp2\htdocs\fallofkingdoms\modules\auth\classes\Kohana\Auth.php(37): Kohana_Auth_File->__construct(Object(Config_Group))
#5 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(36): Kohana_Auth::instance()
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Controller_GameTemplate->before()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#9 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Session.php:125
2013-12-07 18:33:05 --- CRITICAL: ErrorException [ 1 ]: Class 'Auth_Auth' not found ~ MODPATH\auth\classes\Kohana\Auth.php [ 37 ] in file:line
2013-12-07 18:33:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-07 18:33:13 --- CRITICAL: ErrorException [ 1 ]: Class 'Auth_Default' not found ~ MODPATH\auth\classes\Kohana\Auth.php [ 37 ] in file:line
2013-12-07 18:33:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-07 18:33:45 --- CRITICAL: ErrorException [ 1 ]: Cannot access protected property Auth_File::$_users ~ APPPATH\classes\Controller\gametemplate.php [ 39 ] in file:line
2013-12-07 18:33:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-07 18:35:04 --- CRITICAL: ErrorException [ 1 ]: Call to protected method Kohana_Auth_File::_login() from context 'Model_Login' ~ APPPATH\classes\Model\login.php [ 13 ] in file:line
2013-12-07 18:35:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-07 18:39:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: sucess ~ APPPATH\classes\Model\login.php [ 14 ] in C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\login.php:14
2013-12-07 18:39:06 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\login.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp2\htdoc...', 14, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\Login.php(30): Model_Login->login('gacoyne', 'K@ktuskat33')
#2 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\login.php:14
2013-12-07 18:44:26 --- CRITICAL: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH\classes\Model\login.php [ 6 ] in file:line
2013-12-07 18:44:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-07 18:46:02 --- CRITICAL: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH\classes\Controller\gametemplate.php [ 58 ] in file:line
2013-12-07 18:46:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-07 18:49:53 --- CRITICAL: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH\classes\Model\register.php [ 22 ] in file:line
2013-12-07 18:49:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-07 18:53:12 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Login::$session ~ APPPATH\classes\Controller\Login.php [ 43 ] in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\Login.php:43
2013-12-07 18:53:12 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\Login.php(43): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp2\htdoc...', 43, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Login->action_logout()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\Login.php:43
2013-12-07 19:14:58 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\online.php [ 11 ] in file:line
2013-12-07 19:14:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-07 19:23:58 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'INNER JOIN user u ON u.salt = us.salt' at line 1 [ SELECT * FROM usersessions us WHERE INNER JOIN user u ON u.salt = us.salt ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 19:23:58 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM u...', false, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\online.php(8): Kohana_Database_Query->execute()
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\online.php(12): Model_Online->getAllOnline()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Online->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Online))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 19:24:14 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'us.salt' in 'on clause' [ SELECT * FROM usersessions us INNER JOIN user u ON u.salt = us.salt ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 19:24:14 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM u...', false, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\online.php(8): Kohana_Database_Query->execute()
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\online.php(12): Model_Online->getAllOnline()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Online->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Online))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 19:34:01 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'us 
					INNER JOIN  u ON u.salt = us.userSalt
					WHERE us.time > date_sub(n' at line 1 [ 
					SELECT DISTINCT us.userSalt, u.userID, u.salt, u.userName, us.time FROM user usersessions us 
					INNER JOIN  u ON u.salt = us.userSalt
					WHERE us.time > date_sub(now(), interval 5 minute)
					ORDER BY us.time DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 19:34:01 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, '???????SELECT D...', false, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\online.php(12): Kohana_Database_Query->execute()
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\online.php(12): Model_Online->getAllOnline()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Online->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Online))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 19:34:48 --- CRITICAL: ErrorException [ 8 ]: Undefined index: userName ~ APPPATH\views\Game\online.php [ 8 ] in C:\xampp2\htdocs\fallofkingdoms\application\views\Game\online.php:8
2013-12-07 19:34:48 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\views\Game\online.php(8): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp2\htdoc...', 8, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp2\htdoc...')
#2 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp2\htdoc...', Array)
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp2\htdocs\fallofkingdoms\application\views\template\template.php(32): Kohana_View->__toString()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp2\htdoc...')
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp2\htdoc...', Array)
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(90): Kohana_Controller_Template->after()
#9 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(87): Controller_GameTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Online))
#12 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp2\htdocs\fallofkingdoms\application\views\Game\online.php:8
2013-12-07 19:34:58 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '* FROM usersessions us 
					INNER JOIN user u ON u.salt = us.userSalt
					WH' at line 1 [ 
					SELECT DISTINCT us.userSalt, * FROM usersessions us 
					INNER JOIN user u ON u.salt = us.userSalt
					WHERE us.time > date_sub(now(), interval 5 minute)
					ORDER BY us.time DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 19:34:58 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, '???????SELECT D...', false, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\online.php(12): Kohana_Database_Query->execute()
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\online.php(12): Model_Online->getAllOnline()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Online->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Online))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 19:35:56 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM usersessions us 
					INNER JOIN user u ON u.salt = us.userSalt
					WHER' at line 1 [ 
					SELECT DISTINCT us.userSalt * FROM usersessions us 
					INNER JOIN user u ON u.salt = us.userSalt
					WHERE us.time > date_sub(now(), interval 5 minute)
					ORDER BY us.time DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 19:35:56 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, '???????SELECT D...', false, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\online.php(12): Kohana_Database_Query->execute()
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\online.php(12): Model_Online->getAllOnline()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Online->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Online))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 19:37:42 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'GROUP BY us.userSalt' at line 5 [ 
					SELECT DISTINCT us.userSalt, u.userID, u.salt, u.userName, us.time FROM usersessions us 
					INNER JOIN user u ON u.salt = us.userSalt
					WHERE us.time > date_sub(now(), interval 5 minute)
					ORDER BY us.time DESC
					GROUP BY us.userSalt ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 19:37:42 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, '???????SELECT D...', false, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\online.php(13): Kohana_Database_Query->execute()
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\online.php(12): Model_Online->getAllOnline()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Online->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Online))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 19:37:56 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'GROUP BY us.userSalt' at line 5 [ 
					SELECT us.userSalt, u.userID, u.salt, u.userName, us.time FROM usersessions us 
					INNER JOIN user u ON u.salt = us.userSalt
					WHERE us.time > date_sub(now(), interval 5 minute)
					ORDER BY us.time DESC
					GROUP BY us.userSalt ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 19:37:56 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, '???????SELECT u...', false, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\online.php(13): Kohana_Database_Query->execute()
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\online.php(12): Model_Online->getAllOnline()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Online->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Online))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 19:38:10 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE us.time > date_sub(now(), interval 5 minute)
					ORDER BY us.time DESC' at line 4 [ 
					SELECT us.userSalt, u.userID, u.salt, u.userName, us.time FROM usersessions us 
					INNER JOIN user u ON u.salt = us.userSalt
					GROUP BY us.userSalt
					WHERE us.time > date_sub(now(), interval 5 minute)
					ORDER BY us.time DESC
					 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 19:38:10 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, '???????SELECT u...', false, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\online.php(14): Kohana_Database_Query->execute()
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\online.php(12): Model_Online->getAllOnline()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Online->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Online))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 19:38:22 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE us.time > date_sub(now(), interval 5 minute)
					ORDER BY us.time DESC' at line 4 [ 
					SELECT DISTINCT us.userSalt, u.userID, u.salt, u.userName, us.time FROM usersessions us 
					INNER JOIN user u ON u.salt = us.userSalt
					GROUP BY us.userSalt
					WHERE us.time > date_sub(now(), interval 5 minute)
					ORDER BY us.time DESC
					 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 19:38:22 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, '???????SELECT D...', false, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\online.php(14): Kohana_Database_Query->execute()
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\online.php(12): Model_Online->getAllOnline()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Online->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Online))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 19:39:16 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'GROUP BY us.userSalt' at line 5 [ 
					SELECT DISTINCT us.userSalt, u.userID, u.salt, u.userName, us.time FROM usersessions us 
					INNER JOIN user u ON u.salt = us.userSalt
					WHERE us.time > date_sub(now(), interval 5 minute)
					ORDER BY us.time DESC
					GROUP BY us.userSalt
					
					 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 19:39:16 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, '???????SELECT D...', false, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\online.php(15): Kohana_Database_Query->execute()
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\online.php(12): Model_Online->getAllOnline()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Online->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Online))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 19:39:24 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'GROUP BY us.userSalt' at line 5 [ 
					SELECT DISTINCT us.userSalt, u.userID, u.salt, u.userName, us.time FROM usersessions us 
					INNER JOIN user u ON u.salt = us.userSalt
					WHERE us.time > date_sub(now(), interval 5 minute)
					ORDER BY us.time DESC
					GROUP BY us.userSalt
					
					 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 19:39:24 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, '???????SELECT D...', false, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\online.php(15): Kohana_Database_Query->execute()
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\online.php(12): Model_Online->getAllOnline()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Online->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Online))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 19:39:26 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'GROUP BY us.userSalt' at line 5 [ 
					SELECT DISTINCT us.userSalt, u.userID, u.salt, u.userName, us.time FROM usersessions us 
					INNER JOIN user u ON u.salt = us.userSalt
					WHERE us.time > date_sub(now(), interval 5 minute)
					ORDER BY us.time DESC
					GROUP BY us.userSalt
					
					 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 19:39:26 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, '???????SELECT D...', false, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\online.php(15): Kohana_Database_Query->execute()
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\online.php(12): Model_Online->getAllOnline()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Online->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Online))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 19:44:29 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.userID, us.userSalt,  u.salt, u.userName, us.time FROM  user u 
					INNER JOI' at line 1 [ 
					SELECT DISTICNT u.userID, us.userSalt,  u.salt, u.userName, us.time FROM  user u 
					INNER JOIN  usersessions us ON u.salt = us.userSalt
					WHERE us.time > date_sub(now(), interval 5 minute)
					GROUP BY u.userID
					ORDER BY us.sessionID DESC
					 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 19:44:29 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, '???????SELECT D...', false, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\online.php(14): Kohana_Database_Query->execute()
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\online.php(12): Model_Online->getAllOnline()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Online->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Online))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 19:45:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: loginSession ~ APPPATH\views\Register\login.php [ 4 ] in C:\xampp2\htdocs\fallofkingdoms\application\views\Register\login.php:4
2013-12-07 19:45:35 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\views\Register\login.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp2\htdoc...', 4, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp2\htdoc...')
#2 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp2\htdoc...', Array)
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\Register.php(11): Kohana_View->__toString()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Register->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#8 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp2\htdocs\fallofkingdoms\application\views\Register\login.php:4
2013-12-07 19:46:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: loginSession ~ APPPATH\views\Register\login.php [ 4 ] in C:\xampp2\htdocs\fallofkingdoms\application\views\Register\login.php:4
2013-12-07 19:46:18 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\views\Register\login.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp2\htdoc...', 4, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp2\htdoc...')
#2 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp2\htdoc...', Array)
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\Register.php(11): Kohana_View->__toString()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Register->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#8 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp2\htdocs\fallofkingdoms\application\views\Register\login.php:4
2013-12-07 19:47:55 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY us.sessionID DESC' at line 5 [ 
					SELECT DISTINCT us.time, u.userID, us.userSalt,  u.salt, u.userName FROM  user u 
					INNER JOIN  usersessions us ON u.salt = us.userSalt
					WHERE us.time > date_sub(now(), interval 5 minute)
					ORDER BY u.userID
					ORDER BY us.sessionID DESC
					 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 19:47:55 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, '???????SELECT D...', false, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\online.php(14): Kohana_Database_Query->execute()
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\online.php(12): Model_Online->getAllOnline()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Online->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Online))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:02:36 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'usersessions us ON u.salt = us.userSalt
					WHERE us.time > date_sub(now(), in' at line 2 [ 
					SELECT u.userName, us.time FROM  user u 
					UNION  usersessions us ON u.salt = us.userSalt
					WHERE us.time > date_sub(now(), interval 5 minute)
					
					ORDER BY us.sessionID DESC
					 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:02:36 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, '???????SELECT u...', false, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\online.php(14): Kohana_Database_Query->execute()
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\online.php(12): Model_Online->getAllOnline()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Online->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Online))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:02:51 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'usersessions us ON u.salt = us.userSalt
					WHERE us.time > date_sub(now(), in' at line 2 [ 
					SELECT u.userName, us.time FROM  user u 
					UNION  usersessions us ON u.salt = us.userSalt
					WHERE us.time > date_sub(now(), interval 5 minute)
					GROUP BY u.userID
					ORDER BY us.sessionID DESC
					 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:02:51 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, '???????SELECT u...', false, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\online.php(14): Kohana_Database_Query->execute()
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\online.php(12): Model_Online->getAllOnline()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Online->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Online))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:09:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: loginSession ~ APPPATH\views\Register\login.php [ 4 ] in C:\xampp2\htdocs\fallofkingdoms\application\views\Register\login.php:4
2013-12-07 20:09:31 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\views\Register\login.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp2\htdoc...', 4, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp2\htdoc...')
#2 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp2\htdoc...', Array)
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\Register.php(11): Kohana_View->__toString()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Register->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#8 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp2\htdocs\fallofkingdoms\application\views\Register\login.php:4
2013-12-07 20:10:10 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'email' in 'where clause' [ SELECT * FROM user WHERE userName='test' OR email='email@email.com' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:10:10 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM u...', false, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\register.php(11): Kohana_Database_Query->execute()
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\Register.php(32): Model_Register->checkUserName('test', 'email@email.com')
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Register->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:12:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: loginSession ~ APPPATH\views\Register\login.php [ 4 ] in C:\xampp2\htdocs\fallofkingdoms\application\views\Register\login.php:4
2013-12-07 20:12:52 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\views\Register\login.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp2\htdoc...', 4, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp2\htdoc...')
#2 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp2\htdoc...', Array)
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\Register.php(11): Kohana_View->__toString()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Register->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#8 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp2\htdocs\fallofkingdoms\application\views\Register\login.php:4
2013-12-07 20:12:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: loginSession ~ APPPATH\views\Register\login.php [ 4 ] in C:\xampp2\htdocs\fallofkingdoms\application\views\Register\login.php:4
2013-12-07 20:12:59 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\views\Register\login.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp2\htdoc...', 4, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp2\htdoc...')
#2 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp2\htdoc...', Array)
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\Register.php(11): Kohana_View->__toString()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Register->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#8 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp2\htdocs\fallofkingdoms\application\views\Register\login.php:4
2013-12-07 20:13:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: loginSession ~ APPPATH\views\Register\login.php [ 4 ] in C:\xampp2\htdocs\fallofkingdoms\application\views\Register\login.php:4
2013-12-07 20:13:12 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\views\Register\login.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp2\htdoc...', 4, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp2\htdoc...')
#2 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp2\htdoc...', Array)
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\Register.php(11): Kohana_View->__toString()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Register->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#8 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp2\htdocs\fallofkingdoms\application\views\Register\login.php:4
2013-12-07 20:14:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: loginSession ~ APPPATH\views\Register\login.php [ 4 ] in C:\xampp2\htdocs\fallofkingdoms\application\views\Register\login.php:4
2013-12-07 20:14:00 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\views\Register\login.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp2\htdoc...', 4, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp2\htdoc...')
#2 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp2\htdoc...', Array)
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\Register.php(11): Kohana_View->__toString()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Register->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#8 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp2\htdocs\fallofkingdoms\application\views\Register\login.php:4
2013-12-07 20:14:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: loginSession ~ APPPATH\views\Register\login.php [ 4 ] in C:\xampp2\htdocs\fallofkingdoms\application\views\Register\login.php:4
2013-12-07 20:14:10 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\views\Register\login.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp2\htdoc...', 4, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp2\htdoc...')
#2 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp2\htdoc...', Array)
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\Register.php(11): Kohana_View->__toString()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Register->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#8 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp2\htdocs\fallofkingdoms\application\views\Register\login.php:4
2013-12-07 20:15:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: loginSession ~ APPPATH\views\Register\login.php [ 4 ] in C:\xampp2\htdocs\fallofkingdoms\application\views\Register\login.php:4
2013-12-07 20:15:00 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\views\Register\login.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp2\htdoc...', 4, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp2\htdoc...')
#2 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp2\htdoc...', Array)
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\Register.php(11): Kohana_View->__toString()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Register->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#8 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp2\htdocs\fallofkingdoms\application\views\Register\login.php:4
2013-12-07 20:15:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: loginSession ~ APPPATH\views\Register\login.php [ 4 ] in C:\xampp2\htdocs\fallofkingdoms\application\views\Register\login.php:4
2013-12-07 20:15:23 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\views\Register\login.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp2\htdoc...', 4, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp2\htdoc...')
#2 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp2\htdoc...', Array)
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\Register.php(11): Kohana_View->__toString()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Register->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#8 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp2\htdocs\fallofkingdoms\application\views\Register\login.php:4
2013-12-07 20:17:16 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'usersessions.sessionID' at line 5 [ 
					SELECT * FROM user
					INNER JOIN usersessions
					ON user.salt = usersessions.userSalt
					GROUP BY user.userID
					ORDER usersessions.sessionID
					 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:17:16 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, '???????SELECT *...', false, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\online.php(14): Kohana_Database_Query->execute()
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\online.php(12): Model_Online->getAllOnline()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Online->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Online))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:23:22 --- CRITICAL: Database_Exception [ 1248 ]: Every derived table must have its own alias [ 
					SELECT * FROM user
					INNER JOIN 
					(
						SELECT MAX(sessionID), time, userSalt
						FROM usersessions
						WHERE time > DATE_SUB(now(), INTERVAL 5 MINUTE)
						GROUP BY userSalt
						ORDER BY time DESC
					)
					 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:23:22 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, '???????SELECT *...', false, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\online.php(18): Kohana_Database_Query->execute()
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\online.php(12): Model_Online->getAllOnline()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Online->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Online))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:23:39 --- CRITICAL: Database_Exception [ 1248 ]: Every derived table must have its own alias [ 
					SELECT * FROM user u
					INNER JOIN 
					(
						SELECT MAX(sessionID), time, userSalt
						FROM usersessions
						WHERE time > DATE_SUB(now(), INTERVAL 5 MINUTE)
						GROUP BY userSalt
						ORDER BY time DESC
					)
					 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:23:39 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, '???????SELECT *...', false, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\online.php(18): Kohana_Database_Query->execute()
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\online.php(12): Model_Online->getAllOnline()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Online->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Online))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:23:46 --- CRITICAL: Database_Exception [ 1248 ]: Every derived table must have its own alias [ 
					SELECT * FROM user u
					INNER JOIN 
					(
						SELECT MAX(sessionID), time, userSalt
						FROM usersessions us
						WHERE time > DATE_SUB(now(), INTERVAL 5 MINUTE)
						GROUP BY userSalt
						ORDER BY time DESC
					)
					 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:23:46 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, '???????SELECT *...', false, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\online.php(18): Kohana_Database_Query->execute()
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\online.php(12): Model_Online->getAllOnline()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Online->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Online))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:25:33 --- CRITICAL: ErrorException [ 8 ]: Undefined index: userName ~ APPPATH\views\Game\online.php [ 8 ] in C:\xampp2\htdocs\fallofkingdoms\application\views\Game\online.php:8
2013-12-07 20:25:33 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\views\Game\online.php(8): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp2\htdoc...', 8, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp2\htdoc...')
#2 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp2\htdoc...', Array)
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp2\htdocs\fallofkingdoms\application\views\template\template.php(32): Kohana_View->__toString()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp2\htdoc...')
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp2\htdoc...', Array)
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(90): Kohana_Controller_Template->after()
#9 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(87): Controller_GameTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Online))
#12 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp2\htdocs\fallofkingdoms\application\views\Game\online.php:8
2013-12-07 20:25:50 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'users.userName' in 'field list' [ 
					
					
						
						
					
					SELECT MAX(sessionID), time, userSalt, users.userName
					FROM usersessions
					INNER JOIN 
					(
						SELECT * FROM user
					) uesrs
					WHERE time > DATE_SUB(now(), INTERVAL 5 MINUTE)
					GROUP BY userSalt
					ORDER BY time DESC
					 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:25:50 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, '???????????????...', false, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\online.php(23): Kohana_Database_Query->execute()
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\online.php(12): Model_Online->getAllOnline()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Online->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Online))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:27:13 --- CRITICAL: ErrorException [ 8 ]: Undefined index: userName ~ APPPATH\views\Game\online.php [ 8 ] in C:\xampp2\htdocs\fallofkingdoms\application\views\Game\online.php:8
2013-12-07 20:27:13 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\views\Game\online.php(8): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp2\htdoc...', 8, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp2\htdoc...')
#2 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp2\htdoc...', Array)
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp2\htdocs\fallofkingdoms\application\views\template\template.php(32): Kohana_View->__toString()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp2\htdoc...')
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp2\htdoc...', Array)
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(90): Kohana_Controller_Template->after()
#9 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(87): Controller_GameTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Online))
#12 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp2\htdocs\fallofkingdoms\application\views\Game\online.php:8
2013-12-07 20:27:57 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'usersession.salt' in 'on clause' [ 
					SELECT * FROM usersessions
					INNER JOIN 
					(
						SELECT MAX(sessionID), time, userSalt
						FROM usersessions
						WHERE time > DATE_SUB(now(), INTERVAL 5 MINUTE)
						GROUP BY userSalt
					) userSessions
					INNER JOIN user
					ON user.salt = usersession.salt
					ORDER BY time DESC
					 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:27:57 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, '???????SELECT *...', false, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\online.php(20): Kohana_Database_Query->execute()
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\online.php(12): Model_Online->getAllOnline()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Online->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Online))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:28:15 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'usersession.userSalt' in 'on clause' [ 
					SELECT * FROM usersessions
					INNER JOIN 
					(
						SELECT MAX(sessionID), time, userSalt
						FROM usersessions
						WHERE time > DATE_SUB(now(), INTERVAL 5 MINUTE)
						GROUP BY userSalt
					) userSessions
					INNER JOIN user
					ON user.salt = usersession.userSalt
					ORDER BY time DESC
					 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:28:15 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, '???????SELECT *...', false, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\online.php(20): Kohana_Database_Query->execute()
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\online.php(12): Model_Online->getAllOnline()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Online->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Online))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:28:23 --- CRITICAL: Database_Exception [ 1052 ]: Column 'usersessions.userSalt' in on clause is ambiguous [ 
					SELECT * FROM usersessions
					INNER JOIN 
					(
						SELECT MAX(sessionID), time, userSalt
						FROM usersessions
						WHERE time > DATE_SUB(now(), INTERVAL 5 MINUTE)
						GROUP BY userSalt
					) userSessions
					INNER JOIN user
					ON user.salt = usersessions.userSalt
					ORDER BY time DESC
					 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:28:23 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, '???????SELECT *...', false, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\online.php(20): Kohana_Database_Query->execute()
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\online.php(12): Model_Online->getAllOnline()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Online->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Online))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:28:46 --- CRITICAL: Database_Exception [ 1052 ]: Column 'userSessions.userSalt' in on clause is ambiguous [ 
					SELECT * FROM usersessions
					INNER JOIN 
					(
						SELECT MAX(sessionID), time, userSalt
						FROM usersessions
						WHERE time > DATE_SUB(now(), INTERVAL 5 MINUTE)
						GROUP BY userSalt
					) userSessions
					INNER JOIN user
					ON user.salt = userSessions.userSalt
					ORDER BY time DESC
					 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:28:46 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, '???????SELECT *...', false, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\online.php(20): Kohana_Database_Query->execute()
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\online.php(12): Model_Online->getAllOnline()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Online->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Online))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:31:59 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE time > DATE_SUB(now(), INTERVAL 5 MINUTE)' at line 11 [ 
					SELECT * FROM user
					INNER JOIN 
					(
						SELECT MAX(time), time, userSalt
						FROM usersessions
						ORDER BY userSessions.time DESC
						
					) userSessions
					ON user.salt = userSessions.userSalt
					GROUP BY userSalt
					WHERE time > DATE_SUB(now(), INTERVAL 5 MINUTE)
					 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:31:59 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, '???????SELECT *...', false, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\online.php(20): Kohana_Database_Query->execute()
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\online.php(12): Model_Online->getAllOnline()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Online->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Online))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:32:11 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'GROUP BY userSalt
					WHERE time > DATE_SUB(now(), INTERVAL 5 MINUTE)' at line 11 [ 
					SELECT * FROM user
					INNER JOIN 
					(
						SELECT MAX(time), time, userSalt
						FROM usersessions
						
						
					) userSessions
					ON user.salt = userSessions.userSalt
					ORDER BY userSessions.time DESC
					GROUP BY userSalt
					WHERE time > DATE_SUB(now(), INTERVAL 5 MINUTE)
					 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:32:11 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, '???????SELECT *...', false, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\online.php(21): Kohana_Database_Query->execute()
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\online.php(12): Model_Online->getAllOnline()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Online->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Online))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:32:21 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE time > DATE_SUB(now(), INTERVAL 5 MINUTE)' at line 12 [ 
					SELECT * FROM user
					INNER JOIN 
					(
						SELECT MAX(time), time, userSalt
						FROM usersessions
						
						
					) userSessions
					ON user.salt = userSessions.userSalt
					GROUP BY userSalt
					ORDER BY userSessions.time DESC
					WHERE time > DATE_SUB(now(), INTERVAL 5 MINUTE)
					 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:32:21 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, '???????SELECT *...', false, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\online.php(21): Kohana_Database_Query->execute()
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\online.php(12): Model_Online->getAllOnline()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Online->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Online))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:32:22 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE time > DATE_SUB(now(), INTERVAL 5 MINUTE)' at line 12 [ 
					SELECT * FROM user
					INNER JOIN 
					(
						SELECT MAX(time), time, userSalt
						FROM usersessions
						
						
					) userSessions
					ON user.salt = userSessions.userSalt
					GROUP BY userSalt
					ORDER BY userSessions.time DESC
					WHERE time > DATE_SUB(now(), INTERVAL 5 MINUTE)
					 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:32:22 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, '???????SELECT *...', false, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\online.php(21): Kohana_Database_Query->execute()
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\online.php(12): Model_Online->getAllOnline()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Online->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Online))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:32:30 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'GROUP BY userSalt
					WHERE time > DATE_SUB(now(), INTERVAL 5 MINUTE)' at line 12 [ 
					SELECT * FROM user
					INNER JOIN 
					(
						SELECT MAX(time), time, userSalt
						FROM usersessions
						
						
					) userSessions
					ON user.salt = userSessions.userSalt
					
					ORDER BY userSessions.time DESC
					GROUP BY userSalt
					WHERE time > DATE_SUB(now(), INTERVAL 5 MINUTE)
					 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:32:30 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, '???????SELECT *...', false, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\online.php(22): Kohana_Database_Query->execute()
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\online.php(12): Model_Online->getAllOnline()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Online->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Online))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:32:30 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'GROUP BY userSalt
					WHERE time > DATE_SUB(now(), INTERVAL 5 MINUTE)' at line 12 [ 
					SELECT * FROM user
					INNER JOIN 
					(
						SELECT MAX(time), time, userSalt
						FROM usersessions
						
						
					) userSessions
					ON user.salt = userSessions.userSalt
					
					ORDER BY userSessions.time DESC
					GROUP BY userSalt
					WHERE time > DATE_SUB(now(), INTERVAL 5 MINUTE)
					 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:32:30 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, '???????SELECT *...', false, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\online.php(22): Kohana_Database_Query->execute()
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\online.php(12): Model_Online->getAllOnline()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Online->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Online))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:32:50 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE time > DATE_SUB(now(), INTERVAL 5 MINUTE)' at line 11 [ 
					SELECT * FROM user
					INNER JOIN 
					(
						SELECT MAX(time), time, userSalt
						FROM usersessions
						ORDER BY userSessions.time DESC
						
					) userSessions
					ON user.salt = userSessions.userSalt
					GROUP BY userSessions.userSalt
					WHERE time > DATE_SUB(now(), INTERVAL 5 MINUTE)
					 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:32:50 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, '???????SELECT *...', false, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\online.php(20): Kohana_Database_Query->execute()
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\online.php(12): Model_Online->getAllOnline()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Online->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Online))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:32:57 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE time > DATE_SUB(now(), INTERVAL 5 MINUTE)' at line 12 [ 
					SELECT * FROM user
					INNER JOIN 
					(
						SELECT MAX(time), time, userSalt
						FROM usersessions
						
						
					) userSessions
					ON user.salt = userSessions.userSalt
					GROUP BY userSessions.userSalt
					ORDER BY userSessions.time DESC
					WHERE time > DATE_SUB(now(), INTERVAL 5 MINUTE)
					 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:32:57 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, '???????SELECT *...', false, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\online.php(21): Kohana_Database_Query->execute()
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\online.php(12): Model_Online->getAllOnline()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Online->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Online))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:32:58 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE time > DATE_SUB(now(), INTERVAL 5 MINUTE)' at line 12 [ 
					SELECT * FROM user
					INNER JOIN 
					(
						SELECT MAX(time), time, userSalt
						FROM usersessions
						
						
					) userSessions
					ON user.salt = userSessions.userSalt
					GROUP BY userSessions.userSalt
					ORDER BY userSessions.time DESC
					WHERE time > DATE_SUB(now(), INTERVAL 5 MINUTE)
					 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:32:58 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, '???????SELECT *...', false, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\online.php(21): Kohana_Database_Query->execute()
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\online.php(12): Model_Online->getAllOnline()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Online->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Online))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:32:58 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE time > DATE_SUB(now(), INTERVAL 5 MINUTE)' at line 12 [ 
					SELECT * FROM user
					INNER JOIN 
					(
						SELECT MAX(time), time, userSalt
						FROM usersessions
						
						
					) userSessions
					ON user.salt = userSessions.userSalt
					GROUP BY userSessions.userSalt
					ORDER BY userSessions.time DESC
					WHERE time > DATE_SUB(now(), INTERVAL 5 MINUTE)
					 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:32:58 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, '???????SELECT *...', false, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\online.php(21): Kohana_Database_Query->execute()
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\online.php(12): Model_Online->getAllOnline()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Online->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Online))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:33:21 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE time > DATE_SUB(now(), INTERVAL 5 MINUTE)' at line 12 [ 
					SELECT * FROM user
					INNER JOIN 
					(
						SELECT MAX(time), time, userSalt
						FROM usersessions
						
						
					) userSessions
					ON user.salt = userSessions.userSalt
					GROUP BY userSessions.userSalt
					ORDER BY userSessions.time DESC
					WHERE time > DATE_SUB(now(), INTERVAL 5 MINUTE)
					 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:33:21 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, '???????SELECT *...', false, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\online.php(21): Kohana_Database_Query->execute()
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\online.php(12): Model_Online->getAllOnline()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Online->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Online))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:33:26 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE time > DATE_SUB(now(), INTERVAL 5 MINUTE)' at line 11 [ 
					SELECT * FROM user
					INNER JOIN 
					(
						SELECT MAX(time), time, userSalt
						FROM usersessions
						
						GROUP BY userSalt
					) userSessions
					ON user.salt = userSessions.userSalt
					ORDER BY userSessions.time DESC
					WHERE time > DATE_SUB(now(), INTERVAL 5 MINUTE)
					 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:33:26 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, '???????SELECT *...', false, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\online.php(20): Kohana_Database_Query->execute()
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\online.php(12): Model_Online->getAllOnline()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Online->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Online))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:33:27 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE time > DATE_SUB(now(), INTERVAL 5 MINUTE)' at line 11 [ 
					SELECT * FROM user
					INNER JOIN 
					(
						SELECT MAX(time), time, userSalt
						FROM usersessions
						
						GROUP BY userSalt
					) userSessions
					ON user.salt = userSessions.userSalt
					ORDER BY userSessions.time DESC
					WHERE time > DATE_SUB(now(), INTERVAL 5 MINUTE)
					 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:33:27 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, '???????SELECT *...', false, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\online.php(20): Kohana_Database_Query->execute()
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\online.php(12): Model_Online->getAllOnline()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Online->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Online))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:35:04 --- CRITICAL: ErrorException [ 8 ]: Undefined index: userName ~ APPPATH\views\Game\online.php [ 8 ] in C:\xampp2\htdocs\fallofkingdoms\application\views\Game\online.php:8
2013-12-07 20:35:04 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\views\Game\online.php(8): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp2\htdoc...', 8, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp2\htdoc...')
#2 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp2\htdoc...', Array)
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp2\htdocs\fallofkingdoms\application\views\template\template.php(32): Kohana_View->__toString()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp2\htdoc...')
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp2\htdoc...', Array)
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(90): Kohana_Controller_Template->after()
#9 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(87): Controller_GameTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Online))
#12 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp2\htdocs\fallofkingdoms\application\views\Game\online.php:8
2013-12-07 20:36:26 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '> DATE_SUB(now(), INTERVAL 5 MINUTE)' at line 6 [ 
					SELECT time,
					(
						SELECT userName FROM user where user.salt = us.userSalt
					) userName
					FROM usersessions us
					WHERE > DATE_SUB(now(), INTERVAL 5 MINUTE)
					
					 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:36:26 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, '???????SELECT t...', false, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\online.php(16): Kohana_Database_Query->execute()
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\online.php(12): Model_Online->getAllOnline()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Online->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Online))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 20:37:57 --- CRITICAL: ErrorException [ 8 ]: Undefined index: time ~ APPPATH\views\Game\online.php [ 9 ] in C:\xampp2\htdocs\fallofkingdoms\application\views\Game\online.php:9
2013-12-07 20:37:57 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\views\Game\online.php(9): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp2\htdoc...', 9, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp2\htdoc...')
#2 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp2\htdoc...', Array)
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp2\htdocs\fallofkingdoms\application\views\template\template.php(32): Kohana_View->__toString()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(61): include('C:\xampp2\htdoc...')
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp2\htdoc...', Array)
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(90): Kohana_Controller_Template->after()
#9 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(87): Controller_GameTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Online))
#12 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp2\htdocs\fallofkingdoms\application\views\Game\online.php:9
2013-12-07 21:36:29 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Profile::action_user(), called in C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\profile.php [ 5 ] in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\profile.php:5
2013-12-07 21:36:29 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\profile.php(5): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\xampp2\htdoc...', 5, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Profile->action_user()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\profile.php:5
2013-12-07 21:36:55 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Profile::action_user(), called in C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\profile.php [ 5 ] in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\profile.php:5
2013-12-07 21:36:55 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\profile.php(5): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\xampp2\htdoc...', 5, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Profile->action_user()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\profile.php:5
2013-12-07 21:36:57 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Profile::action_user(), called in C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\profile.php [ 5 ] in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\profile.php:5
2013-12-07 21:36:57 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\profile.php(5): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\xampp2\htdoc...', 5, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Profile->action_user()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\profile.php:5
2013-12-07 21:37:27 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Profile::action_user(), called in C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\profile.php [ 5 ] in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\profile.php:5
2013-12-07 21:37:27 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\profile.php(5): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\xampp2\htdoc...', 5, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Profile->action_user()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\profile.php:5
2013-12-07 21:38:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\classes\Controller\profile.php [ 7 ] in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\profile.php:7
2013-12-07 21:38:28 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\profile.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp2\htdoc...', 7, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Profile->action_user()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\profile.php:7
2013-12-07 21:39:33 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Profile::action_user(), called in C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\profile.php [ 5 ] in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\profile.php:5
2013-12-07 21:39:33 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\profile.php(5): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\xampp2\htdoc...', 5, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Profile->action_user()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\profile.php:5
2013-12-07 21:40:47 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Profile::action_user(), called in C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\profile.php [ 5 ] in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\profile.php:5
2013-12-07 21:40:47 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\profile.php(5): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\xampp2\htdoc...', 5, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Profile->action_user()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\profile.php:5
2013-12-07 21:41:45 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Profile::action_user(), called in C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\profile.php [ 5 ] in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\profile.php:5
2013-12-07 21:41:45 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\profile.php(5): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\xampp2\htdoc...', 5, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Profile->action_user()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\profile.php:5
2013-12-07 21:43:37 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Profile::action_user(), called in C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\profile.php [ 5 ] in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\profile.php:5
2013-12-07 21:43:37 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\profile.php(5): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\xampp2\htdoc...', 5, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Profile->action_user()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\profile.php:5
2013-12-07 21:44:27 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Profile::action_user(), called in C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\profile.php [ 5 ] in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\profile.php:5
2013-12-07 21:44:27 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\profile.php(5): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\xampp2\htdoc...', 5, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Profile->action_user()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\profile.php:5
2013-12-07 21:47:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: userName ~ APPPATH\classes\Controller\profile.php [ 11 ] in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\profile.php:11
2013-12-07 21:47:01 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\profile.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp2\htdoc...', 11, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Profile->action_user()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\profile.php:11
2013-12-07 21:47:09 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':userName
							LIMIT 1' at line 1 [ 
							SELECT * FROM user WHERE userName=:userName
							LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 21:47:09 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, '?????????SELECT...', false, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\profile.php(12): Kohana_Database_Query->execute()
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\profile.php(11): Model_Profile->getProfileByName('gacoyne')
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Profile->action_user()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 21:47:58 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE userName=:userName' at line 3 [ 
							SELECT * FROM user 
							LIMIT 1 
							WHERE userName=:userName
							 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 21:47:58 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, '?????????SELECT...', false, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\profile.php(14): Kohana_Database_Query->execute()
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\profile.php(11): Model_Profile->getProfileByName('gacoyne')
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Profile->action_user()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 21:48:19 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':userName
							LIMIT 1' at line 2 [ 
							SELECT * FROM user 
							WHERE userName=:userName
							LIMIT 1 
							 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 21:48:19 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, '?????????SELECT...', false, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\profile.php(14): Kohana_Database_Query->execute()
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\profile.php(11): Model_Profile->getProfileByName('gacoyne')
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Profile->action_user()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 21:48:24 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':userName' at line 2 [ 
							SELECT * FROM user 
							WHERE userName=:userName
							 
							 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 21:48:24 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, '?????????SELECT...', false, Array)
#1 C:\xampp2\htdocs\fallofkingdoms\application\classes\Model\profile.php(14): Kohana_Database_Query->execute()
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\profile.php(11): Model_Profile->getProfileByName('gacoyne')
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Profile->action_user()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php:251
2013-12-07 22:15:21 --- CRITICAL: View_Exception [ 0 ]: The requested view game/rankig could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php:137
2013-12-07 22:15:21 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(137): Kohana_View->set_filename('game/rankig')
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php(30): Kohana_View->__construct('game/rankig', NULL)
#2 C:\xampp2\htdocs\fallofkingdoms\application\classes\Controller\Game.php(12): Kohana_View::factory('game/rankig')
#3 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_ranking()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#6 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp2\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\View.php:137
2013-12-07 22:15:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '?>' ~ APPPATH\views\Game\ranking.php [ 20 ] in file:line
2013-12-07 22:15:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line