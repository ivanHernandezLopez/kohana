<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-19 19:43:08 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 3 for Kohana_ORM::where(), called in /var/www/kohana/application/classes/Model/Usuarios.php on line 21 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 1849 ] in /var/www/kohana/modules/orm/classes/Kohana/ORM.php:1849
2014-05-19 19:43:08 --- DEBUG: #0 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(1849): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/kohana...', 1849, Array)
#1 /var/www/kohana/application/classes/Model/Usuarios.php(21): Kohana_ORM->where('id_user=', '1')
#2 /var/www/kohana/application/classes/Controller/Usuarios.php(52): Model_Usuarios->select_object('1')
#3 /var/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Usuarios->action_editar()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Usuarios))
#6 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/kohana/modules/orm/classes/Kohana/ORM.php:1849
2014-05-19 19:43:18 --- EMERGENCY: View_Exception [ 0 ]: The requested view crud/editar_usuarios could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/kohana/system/classes/Kohana/View.php:137
2014-05-19 19:43:18 --- DEBUG: #0 /var/www/kohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('crud/editar_usu...')
#1 /var/www/kohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('crud/editar_usu...', NULL)
#2 /var/www/kohana/application/classes/Controller/Usuarios.php(53): Kohana_View::factory('crud/editar_usu...')
#3 /var/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Usuarios->action_editar()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Usuarios))
#6 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/kohana/system/classes/Kohana/View.php:137
2014-05-19 19:43:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: msg ~ APPPATH/views/crud/editar_usuarios.php [ 91 ] in /var/www/kohana/application/views/crud/editar_usuarios.php:91
2014-05-19 19:43:46 --- DEBUG: #0 /var/www/kohana/application/views/crud/editar_usuarios.php(91): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 91, Array)
#1 /var/www/kohana/system/classes/Kohana/View.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/kohana/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /var/www/kohana/application/classes/Controller/Usuarios.php(58): Kohana_Response->body(Object(View))
#6 /var/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Usuarios->action_editar()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Usuarios))
#9 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/kohana/application/views/crud/editar_usuarios.php:91
2014-05-19 19:46:45 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Model_Usuarios::editar(), called in /var/www/kohana/application/classes/Controller/Usuarios.php on line 57 and defined ~ APPPATH/classes/Model/Usuarios.php [ 24 ] in /var/www/kohana/application/classes/Model/Usuarios.php:24
2014-05-19 19:46:45 --- DEBUG: #0 /var/www/kohana/application/classes/Model/Usuarios.php(24): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/kohana...', 24, Array)
#1 /var/www/kohana/application/classes/Controller/Usuarios.php(57): Model_Usuarios->editar(Array)
#2 /var/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Usuarios->action_editar()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Usuarios))
#5 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/kohana/application/classes/Model/Usuarios.php:24