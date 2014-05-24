<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-22 23:08:29 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '/' ~ APPPATH/classes/Controller/Usuarios.php [ 57 ] in file:line
2014-05-22 23:08:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-22 23:22:57 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '* from usuarios where id_user=1' at line 1 [ delete * from usuarios where id_user=1 ] ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 192 ] in /var/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-05-22 23:22:57 --- DEBUG: #0 /var/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(4, 'delete * from u...', false, Array)
#1 /var/www/kohana/application/classes/Model/Usuarios.php(37): Kohana_Database_Query->execute()
#2 /var/www/kohana/application/classes/Controller/Usuarios.php(78): Model_Usuarios->eliminar('1')
#3 /var/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Usuarios->action_eliminar()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Usuarios))
#6 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/kohana/modules/database/classes/Kohana/Database/Query.php:251