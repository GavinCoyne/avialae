<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-09 22:11:36 --- CRITICAL: ErrorException [ 2 ]: PDO::__construct(): MySQL server has gone away ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 55 ] in file:line
2013-12-09 22:11:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'PDO::__construc...', 'C:\xampp\htdocs...', 55, Array)
#1 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\PDO.php(55): PDO->__construct('mysql:host=loca...', 'root', '', Array)
#2 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\PDO.php(130): Kohana_Database_PDO->connect()
#3 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, '?????SELECT max...', false, Array)
#4 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php(386): Kohana_Database_Query->execute()
#5 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(39): Model_Game->getLastRankUpdate()
#6 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(12): Controller_GameTemplate->before()
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Controller_Game->before()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#10 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2013-12-09 22:11:49 --- CRITICAL: ErrorException [ 2 ]: PDO::__construct(): MySQL server has gone away ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 55 ] in file:line
2013-12-09 22:11:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'PDO::__construc...', 'C:\xampp\htdocs...', 55, Array)
#1 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\PDO.php(55): PDO->__construct('mysql:host=loca...', 'root', '', Array)
#2 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\PDO.php(130): Kohana_Database_PDO->connect()
#3 C:\xampp\htdocs\fallofkingdoms\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, '?????SELECT max...', false, Array)
#4 C:\xampp\htdocs\fallofkingdoms\application\classes\Model\game.php(386): Kohana_Database_Query->execute()
#5 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(39): Model_Game->getLastRankUpdate()
#6 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(12): Controller_GameTemplate->before()
#7 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Controller_Game->before()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#10 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2013-12-09 23:15:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: currentGold ~ APPPATH\classes\Controller\gametemplate.php [ 59 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php:59
2013-12-09 23:15:11 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(59): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 59, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(12): Controller_GameTemplate->before()
#2 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Controller_Game->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php:59
2013-12-09 23:15:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: currentGold ~ APPPATH\classes\Controller\gametemplate.php [ 59 ] in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php:59
2013-12-09 23:15:29 --- DEBUG: #0 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php(59): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 59, Array)
#1 C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\Game.php(12): Controller_GameTemplate->before()
#2 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Controller.php(69): Controller_Game->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#5 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\fallofkingdoms\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\fallofkingdoms\application\classes\Controller\gametemplate.php:59