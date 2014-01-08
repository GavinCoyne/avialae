<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-19 21:31:55 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\Game.php [ 284 ] in file:line
2013-12-19 21:31:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-19 21:42:47 --- CRITICAL: ErrorException [ 2 ]: Division by zero ~ APPPATH\classes\Controller\Game.php [ 291 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:291
2013-12-19 21:42:47 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(291): Kohana_Core::error_handler(2, 'Division by zer...', 'C:\xampp\htdocs...', 291, Array)
#1 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_attackAjax()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:291
2013-12-19 21:42:53 --- CRITICAL: ErrorException [ 2 ]: Division by zero ~ APPPATH\classes\Controller\Game.php [ 291 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:291
2013-12-19 21:42:53 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(291): Kohana_Core::error_handler(2, 'Division by zer...', 'C:\xampp\htdocs...', 291, Array)
#1 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_attackAjax()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:291
2013-12-19 21:43:19 --- CRITICAL: ErrorException [ 2 ]: Division by zero ~ APPPATH\classes\Controller\Game.php [ 291 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:291
2013-12-19 21:43:19 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(291): Kohana_Core::error_handler(2, 'Division by zer...', 'C:\xampp\htdocs...', 291, Array)
#1 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(84): Controller_Game->action_attackAjax()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php:291