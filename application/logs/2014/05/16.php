<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-16 20:25:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'validation' not found ~ APPPATH/classes/Controller/Usuarios.php [ 52 ] in file:line
2014-05-16 20:25:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 20:26:31 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Usuarios::agregar() ~ APPPATH/classes/Controller/Usuarios.php [ 36 ] in file:line
2014-05-16 20:26:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 20:53:08 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'ORM' (T_STRING) ~ APPPATH/classes/Model/Usuarios.php [ 12 ] in file:line
2014-05-16 20:53:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 20:53:18 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/classes/Model/Usuarios.php [ 14 ] in file:line
2014-05-16 20:53:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-16 20:53:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/Model/Usuarios.php [ 13 ] in /var/www/kohana/application/classes/Model/Usuarios.php:13
2014-05-16 20:53:29 --- DEBUG: #0 /var/www/kohana/application/classes/Model/Usuarios.php(13): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 13, Array)
#1 /var/www/kohana/application/classes/Controller/Usuarios.php(31): Model_Usuarios->agregar(Array)
#2 /var/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Usuarios->action_agregar()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Usuarios))
#5 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/kohana/application/classes/Model/Usuarios.php:13
2014-05-16 20:54:43 --- EMERGENCY: Kohana_Exception [ 0 ]: The url property does not exist in the Model_Usuarios class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /var/www/kohana/modules/orm/classes/Kohana/ORM.php:702
2014-05-16 20:54:43 --- DEBUG: #0 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('url', 'http://localhos...')
#1 /var/www/kohana/application/classes/Model/Usuarios.php(15): Kohana_ORM->__set('url', 'http://localhos...')
#2 /var/www/kohana/application/classes/Controller/Usuarios.php(31): Model_Usuarios->agregar(Array)
#3 /var/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Usuarios->action_agregar()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Usuarios))
#6 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/kohana/modules/orm/classes/Kohana/ORM.php:702
2014-05-16 20:57:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: msg ~ APPPATH/classes/Controller/Usuarios.php [ 42 ] in /var/www/kohana/application/classes/Controller/Usuarios.php:42
2014-05-16 20:57:19 --- DEBUG: #0 /var/www/kohana/application/classes/Controller/Usuarios.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 42, Array)
#1 /var/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Usuarios->action_agregar()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Usuarios))
#4 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/kohana/application/classes/Controller/Usuarios.php:42