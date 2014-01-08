<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-05 10:34:03 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Cookie.php:67
2013-12-05 10:34:03 --- DEBUG: #0 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CAKEPHP', NULL)
#1 C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CAKEPHP')
#2 C:\xampp2\htdocs\fallofkingdoms\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\xampp2\htdocs\fallofkingdoms\system\classes\Kohana\Cookie.php:67