<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-23 19:37:59 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 19:37:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 19:40:08 --- EMERGENCY: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'Auth' at 'MODPATH/Auth' ~ SYSPATH/classes/Kohana/Core.php [ 579 ] in /var/www/kohana/application/bootstrap.php:129
2014-06-23 19:40:08 --- DEBUG: #0 /var/www/kohana/application/bootstrap.php(129): Kohana_Core::modules(Array)
#1 /var/www/kohana/index.php(102): require('/var/www/kohana...')
#2 {main} in /var/www/kohana/application/bootstrap.php:129
2014-06-23 19:43:23 --- EMERGENCY: ErrorException [ 1 ]: Class 'auth' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 19:43:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 19:43:23 --- EMERGENCY: ErrorException [ 1 ]: Class 'auth' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 19:43:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 19:44:39 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'demos.user' doesn't exist [ SHOW FULL COLUMNS FROM `user` ] ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 192 ] in /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php:357
2014-06-23 19:44:39 --- DEBUG: #0 /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php(357): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQLi->list_columns('user')
#2 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#6 /var/www/kohana/modules/orm/classes/Kohana/Auth/ORM.php(79): Kohana_ORM::factory('User')
#7 /var/www/kohana/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('admin@admin.com', '123', false)
#8 /var/www/kohana/application/classes/Controller/Login.php(22): Kohana_Auth->login('admin@admin.com', '123')
#9 /var/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#12 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/kohana/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php:357
2014-06-23 19:44:41 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'demos.user' doesn't exist [ SHOW FULL COLUMNS FROM `user` ] ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 192 ] in /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php:357
2014-06-23 19:44:41 --- DEBUG: #0 /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php(357): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQLi->list_columns('user')
#2 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#6 /var/www/kohana/modules/orm/classes/Kohana/Auth/ORM.php(79): Kohana_ORM::factory('User')
#7 /var/www/kohana/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('admin@admin.com', '123', false)
#8 /var/www/kohana/application/classes/Controller/Login.php(22): Kohana_Auth->login('admin@admin.com', '123')
#9 /var/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#12 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/kohana/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php:357
2014-06-23 19:45:01 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'demos.usuarios' doesn't exist [ SHOW FULL COLUMNS FROM `usuarios` ] ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 192 ] in /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php:357
2014-06-23 19:45:01 --- DEBUG: #0 /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php(357): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQLi->list_columns('usuarios')
#2 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/kohana/application/classes/Controller/Login.php(10): Kohana_ORM->__construct()
#6 /var/www/kohana/system/classes/Kohana/Controller.php(69): Controller_Login->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#9 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php:357
2014-06-23 19:45:03 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'demos.usuarios' doesn't exist [ SHOW FULL COLUMNS FROM `usuarios` ] ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 192 ] in /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php:357
2014-06-23 19:45:03 --- DEBUG: #0 /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php(357): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQLi->list_columns('usuarios')
#2 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/kohana/application/classes/Controller/Login.php(10): Kohana_ORM->__construct()
#6 /var/www/kohana/system/classes/Kohana/Controller.php(69): Controller_Login->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#9 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php:357
2014-06-23 19:45:40 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'demos.user' doesn't exist [ SHOW FULL COLUMNS FROM `user` ] ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 192 ] in /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php:357
2014-06-23 19:45:40 --- DEBUG: #0 /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php(357): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQLi->list_columns('user')
#2 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#6 /var/www/kohana/modules/orm/classes/Kohana/Auth/ORM.php(79): Kohana_ORM::factory('User')
#7 /var/www/kohana/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('admin@admin.com', '123', false)
#8 /var/www/kohana/application/classes/Controller/Login.php(22): Kohana_Auth->login('admin@admin.com', '123')
#9 /var/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#12 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/kohana/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php:357
2014-06-23 19:45:51 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'demos.role' doesn't exist [ SHOW FULL COLUMNS FROM `role` ] ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 192 ] in /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php:357
2014-06-23 19:45:51 --- DEBUG: #0 /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php(357): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQLi->list_columns('role')
#2 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(Array)
#6 /var/www/kohana/modules/orm/classes/Kohana/Auth/ORM.php(90): Kohana_ORM::factory('Role', Array)
#7 /var/www/kohana/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('admin@admin.com', '123', false)
#8 /var/www/kohana/application/classes/Controller/Login.php(22): Kohana_Auth->login('admin@admin.com', '123')
#9 /var/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#12 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/kohana/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php:357
2014-06-23 19:45:52 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'demos.role' doesn't exist [ SHOW FULL COLUMNS FROM `role` ] ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 192 ] in /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php:357
2014-06-23 19:45:52 --- DEBUG: #0 /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php(357): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQLi->list_columns('role')
#2 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(Array)
#6 /var/www/kohana/modules/orm/classes/Kohana/Auth/ORM.php(90): Kohana_ORM::factory('Role', Array)
#7 /var/www/kohana/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('admin@admin.com', '123', false)
#8 /var/www/kohana/application/classes/Controller/Login.php(22): Kohana_Auth->login('admin@admin.com', '123')
#9 /var/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#12 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/kohana/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php:357
2014-06-23 19:45:52 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'demos.role' doesn't exist [ SHOW FULL COLUMNS FROM `role` ] ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 192 ] in /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php:357
2014-06-23 19:45:52 --- DEBUG: #0 /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php(357): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQLi->list_columns('role')
#2 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(Array)
#6 /var/www/kohana/modules/orm/classes/Kohana/Auth/ORM.php(90): Kohana_ORM::factory('Role', Array)
#7 /var/www/kohana/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('admin@admin.com', '123', false)
#8 /var/www/kohana/application/classes/Controller/Login.php(22): Kohana_Auth->login('admin@admin.com', '123')
#9 /var/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#12 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/kohana/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php:357
2014-06-23 19:48:16 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT `role`.`id_rol` AS `id_rol`, `role`.`id_usuario` AS `id_usuario` FROM `role` AS `role` WHERE `name` = 'login' LIMIT 1 ] ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 192 ] in /var/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-06-23 19:48:16 --- DEBUG: #0 /var/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT `role`.`...', false, Array)
#1 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(266): Kohana_ORM->find()
#4 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(Array)
#5 /var/www/kohana/modules/orm/classes/Kohana/Auth/ORM.php(90): Kohana_ORM::factory('Role', Array)
#6 /var/www/kohana/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('admin@admin.com', '123', false)
#7 /var/www/kohana/application/classes/Controller/Login.php(22): Kohana_Auth->login('admin@admin.com', '123')
#8 /var/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-06-23 19:48:16 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT `role`.`id_rol` AS `id_rol`, `role`.`id_usuario` AS `id_usuario` FROM `role` AS `role` WHERE `name` = 'login' LIMIT 1 ] ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 192 ] in /var/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-06-23 19:48:16 --- DEBUG: #0 /var/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT `role`.`...', false, Array)
#1 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(266): Kohana_ORM->find()
#4 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(Array)
#5 /var/www/kohana/modules/orm/classes/Kohana/Auth/ORM.php(90): Kohana_ORM::factory('Role', Array)
#6 /var/www/kohana/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('admin@admin.com', '123', false)
#7 /var/www/kohana/application/classes/Controller/Login.php(22): Kohana_Auth->login('admin@admin.com', '123')
#8 /var/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-06-23 19:48:37 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT `role`.`id_rol` AS `id_rol`, `role`.`id_usuario` AS `id_usuario` FROM `role` AS `role` WHERE `name` = 'login' LIMIT 1 ] ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 192 ] in /var/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-06-23 19:48:37 --- DEBUG: #0 /var/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT `role`.`...', false, Array)
#1 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(266): Kohana_ORM->find()
#4 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(Array)
#5 /var/www/kohana/modules/orm/classes/Kohana/Auth/ORM.php(90): Kohana_ORM::factory('Role', Array)
#6 /var/www/kohana/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('admin@admin.com', '123', false)
#7 /var/www/kohana/application/classes/Controller/Login.php(22): Kohana_Auth->login('admin@admin.com', '123')
#8 /var/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-06-23 19:48:38 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT `role`.`id_rol` AS `id_rol`, `role`.`id_usuario` AS `id_usuario` FROM `role` AS `role` WHERE `name` = 'login' LIMIT 1 ] ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 192 ] in /var/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-06-23 19:48:38 --- DEBUG: #0 /var/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT `role`.`...', false, Array)
#1 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(266): Kohana_ORM->find()
#4 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(Array)
#5 /var/www/kohana/modules/orm/classes/Kohana/Auth/ORM.php(90): Kohana_ORM::factory('Role', Array)
#6 /var/www/kohana/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('admin@admin.com', '123', false)
#7 /var/www/kohana/application/classes/Controller/Login.php(22): Kohana_Auth->login('admin@admin.com', '123')
#8 /var/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-06-23 19:48:50 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT `role`.`id_rol` AS `id_rol`, `role`.`id_usuario` AS `id_usuario` FROM `role` AS `role` WHERE `name` = 'login' LIMIT 1 ] ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 192 ] in /var/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-06-23 19:48:50 --- DEBUG: #0 /var/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT `role`.`...', false, Array)
#1 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(266): Kohana_ORM->find()
#4 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(Array)
#5 /var/www/kohana/modules/orm/classes/Kohana/Auth/ORM.php(90): Kohana_ORM::factory('Role', Array)
#6 /var/www/kohana/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('admin@admin.com', '123', false)
#7 /var/www/kohana/application/classes/Controller/Login.php(22): Kohana_Auth->login('admin@admin.com', '123')
#8 /var/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-06-23 19:48:59 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT `role`.`id_rol` AS `id_rol`, `role`.`id_usuario` AS `id_usuario` FROM `role` AS `role` WHERE `name` = 'login' LIMIT 1 ] ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 192 ] in /var/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-06-23 19:48:59 --- DEBUG: #0 /var/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT `role`.`...', false, Array)
#1 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(266): Kohana_ORM->find()
#4 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(Array)
#5 /var/www/kohana/modules/orm/classes/Kohana/Auth/ORM.php(90): Kohana_ORM::factory('Role', Array)
#6 /var/www/kohana/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('admin@admin.com', '123', false)
#7 /var/www/kohana/application/classes/Controller/Login.php(22): Kohana_Auth->login('admin@admin.com', '123')
#8 /var/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-06-23 19:48:59 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT `role`.`id_rol` AS `id_rol`, `role`.`id_usuario` AS `id_usuario` FROM `role` AS `role` WHERE `name` = 'login' LIMIT 1 ] ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 192 ] in /var/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-06-23 19:48:59 --- DEBUG: #0 /var/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT `role`.`...', false, Array)
#1 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(266): Kohana_ORM->find()
#4 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(Array)
#5 /var/www/kohana/modules/orm/classes/Kohana/Auth/ORM.php(90): Kohana_ORM::factory('Role', Array)
#6 /var/www/kohana/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('admin@admin.com', '123', false)
#7 /var/www/kohana/application/classes/Controller/Login.php(22): Kohana_Auth->login('admin@admin.com', '123')
#8 /var/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-06-23 19:49:00 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT `role`.`id_rol` AS `id_rol`, `role`.`id_usuario` AS `id_usuario` FROM `role` AS `role` WHERE `name` = 'login' LIMIT 1 ] ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 192 ] in /var/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-06-23 19:49:00 --- DEBUG: #0 /var/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT `role`.`...', false, Array)
#1 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(266): Kohana_ORM->find()
#4 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(Array)
#5 /var/www/kohana/modules/orm/classes/Kohana/Auth/ORM.php(90): Kohana_ORM::factory('Role', Array)
#6 /var/www/kohana/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('admin@admin.com', '123', false)
#7 /var/www/kohana/application/classes/Controller/Login.php(22): Kohana_Auth->login('admin@admin.com', '123')
#8 /var/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-06-23 19:49:00 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT `role`.`id_rol` AS `id_rol`, `role`.`id_usuario` AS `id_usuario` FROM `role` AS `role` WHERE `name` = 'login' LIMIT 1 ] ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 192 ] in /var/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-06-23 19:49:00 --- DEBUG: #0 /var/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT `role`.`...', false, Array)
#1 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(266): Kohana_ORM->find()
#4 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(Array)
#5 /var/www/kohana/modules/orm/classes/Kohana/Auth/ORM.php(90): Kohana_ORM::factory('Role', Array)
#6 /var/www/kohana/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('admin@admin.com', '123', false)
#7 /var/www/kohana/application/classes/Controller/Login.php(22): Kohana_Auth->login('admin@admin.com', '123')
#8 /var/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-06-23 19:49:20 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT `role`.`id_rol` AS `id_rol`, `role`.`id_usuario` AS `id_usuario` FROM `role` AS `role` WHERE `name` = 'login' LIMIT 1 ] ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 192 ] in /var/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-06-23 19:49:20 --- DEBUG: #0 /var/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT `role`.`...', false, Array)
#1 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(266): Kohana_ORM->find()
#4 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(Array)
#5 /var/www/kohana/modules/orm/classes/Kohana/Auth/ORM.php(90): Kohana_ORM::factory('Role', Array)
#6 /var/www/kohana/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('admin@admin.com', '123', false)
#7 /var/www/kohana/application/classes/Controller/Login.php(22): Kohana_Auth->login('admin@admin.com', '123')
#8 /var/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-06-23 19:49:20 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT `role`.`id_rol` AS `id_rol`, `role`.`id_usuario` AS `id_usuario` FROM `role` AS `role` WHERE `name` = 'login' LIMIT 1 ] ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 192 ] in /var/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-06-23 19:49:20 --- DEBUG: #0 /var/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT `role`.`...', false, Array)
#1 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(266): Kohana_ORM->find()
#4 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(Array)
#5 /var/www/kohana/modules/orm/classes/Kohana/Auth/ORM.php(90): Kohana_ORM::factory('Role', Array)
#6 /var/www/kohana/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('admin@admin.com', '123', false)
#7 /var/www/kohana/application/classes/Controller/Login.php(22): Kohana_Auth->login('admin@admin.com', '123')
#8 /var/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-06-23 19:49:27 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 19:49:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 19:49:34 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 19:49:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 19:50:20 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 19:50:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 19:50:43 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 19:50:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 19:51:27 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 19:51:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 19:51:27 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 19:51:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 19:51:28 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 19:51:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 19:51:28 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 19:51:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 19:52:02 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 19:52:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 19:52:03 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 19:52:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 19:52:03 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 19:52:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 19:52:03 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 19:52:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 19:52:19 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 19:52:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 19:52:20 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 19:52:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 19:52:20 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 19:52:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 19:52:20 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 19:52:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 19:52:20 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 19:52:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 19:56:33 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 19:56:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 19:56:34 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 19:56:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 19:57:17 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 19:57:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 19:57:17 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 19:57:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 19:57:17 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 19:57:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 19:57:34 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 19:57:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 19:57:34 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 19:57:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 19:57:34 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 19:57:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 19:57:34 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 19:57:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 19:57:56 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 19:57:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 19:57:57 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 19:57:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 19:57:57 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 19:57:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 19:57:57 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 19:57:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 19:58:52 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 19:58:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 19:58:52 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 19:58:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 19:58:52 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 19:58:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 19:58:52 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 19:58:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 19:58:53 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 19:58:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 19:58:53 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 19:58:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 19:58:53 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 19:58:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:00:19 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 20:00:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:00:19 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 20:00:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:00:20 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 20:00:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:00:20 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 20:00:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:00:20 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 20:00:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:00:27 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 20:00:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:00:28 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 20:00:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:00:28 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 20:00:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:01:01 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 20:01:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:01:02 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 20:01:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:01:02 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 20:01:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:01:02 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 20:01:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:01:15 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 20:01:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:01:15 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 20:01:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:01:16 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 20:01:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:01:16 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 20:01:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:01:53 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 20:01:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:01:54 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 20:01:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:01:54 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 20:01:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:01:54 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 20:01:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:01:54 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 20:01:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:01:54 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 20:01:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:01:55 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 20:01:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:01:55 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 20:01:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:01:55 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 20:01:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:01:55 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 20:01:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:02:16 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 20:02:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:02:16 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 20:02:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:02:17 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 20:02:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:02:17 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 20:02:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:02:17 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 20:02:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:02:17 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 20:02:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:02:17 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 20:02:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:02:55 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 20:02:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:02:56 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 20:02:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:02:56 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 20:02:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:04:15 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:04:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:04:15 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:04:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:04:16 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:04:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:04:16 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:04:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:04:16 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:04:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:04:16 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:04:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:04:16 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:04:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:04:25 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:04:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:04:26 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:04:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:04:56 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:04:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:04:57 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:04:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:04:57 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:04:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:04:57 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:04:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:05:29 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:05:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:05:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:05:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:05:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:05:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:05:31 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:05:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:05:31 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:05:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:05:31 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:05:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:05:38 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:05:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:05:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:05:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:05:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:05:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:08:19 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:08:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:08:29 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:08:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:08:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:08:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:08:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:08:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:08:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:08:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:08:38 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:08:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:08:38 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:08:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:08:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:08:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:08:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:08:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:08:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:08:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:09:08 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:09:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:09:09 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:09:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:09:09 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:09:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:09:09 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:09:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:09:10 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:09:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:09:17 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:09:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:09:18 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:09:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:09:18 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:09:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:09:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:09:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:09:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:09:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:09:31 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:09:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:09:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:09:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:09:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:09:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:09:40 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:09:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:09:40 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:09:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:12:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:12:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:12:40 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:12:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:12:40 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:12:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:12:41 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:12:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:12:41 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:12:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:12:41 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:12:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:12:41 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:12:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:12:41 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 16 ] in file:line
2014-06-23 20:12:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:17:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Login::$auth ~ APPPATH/classes/Controller/Login.php [ 21 ] in /var/www/kohana/application/classes/Controller/Login.php:21
2014-06-23 20:17:32 --- DEBUG: #0 /var/www/kohana/application/classes/Controller/Login.php(21): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/kohana...', 21, Array)
#1 /var/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/kohana/application/classes/Controller/Login.php:21
2014-06-23 20:19:58 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/classes/Controller/Login.php [ 21 ] in file:line
2014-06-23 20:19:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:21:59 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'emails' in 'where clause' [ SELECT `usuarios`.`id_user` AS `id_user`, `usuarios`.`name` AS `name`, `usuarios`.`email` AS `email`, `usuarios`.`web` AS `web`, `usuarios`.`password` AS `password`, `usuarios`.`token` AS `token` FROM `usuarios` AS `usuarios` WHERE `emails` = 'admin@admin.com' LIMIT 1 ] ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 192 ] in /var/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-06-23 20:21:59 --- DEBUG: #0 /var/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT `usuario...', false, Array)
#1 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(266): Kohana_ORM->find()
#4 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(Array)
#5 /var/www/kohana/modules/A1/classes/A1/Driver/ORM.php(13): Kohana_ORM::factory('usuarios', Array)
#6 /var/www/kohana/modules/A1/classes/A1/Core.php(281): A1_Driver_ORM->_load_user('admin@admin.com')
#7 /var/www/kohana/application/classes/Controller/Login.php(22): A1_Core->login('admin@admin.com', '123', true)
#8 /var/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-06-23 20:37:15 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 20:37:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:38:27 --- EMERGENCY: ErrorException [ 1 ]: Class 'Jelly' not found ~ MODPATH/A1/classes/A1/Driver/Jelly.php [ 13 ] in file:line
2014-06-23 20:38:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:38:38 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1_Spring' not found ~ MODPATH/A1/classes/A1/Core.php [ 42 ] in file:line
2014-06-23 20:38:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:38:40 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1_Spring' not found ~ MODPATH/A1/classes/A1/Core.php [ 42 ] in file:line
2014-06-23 20:38:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:38:48 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1_Orm' not found ~ MODPATH/A1/classes/A1/Core.php [ 42 ] in file:line
2014-06-23 20:38:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:39:00 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1_Orm' not found ~ MODPATH/A1/classes/A1/Core.php [ 42 ] in file:line
2014-06-23 20:39:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:44:33 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1_Driver_ORM' not found ~ MODPATH/A1/classes/A1/ORM.php [ 3 ] in file:line
2014-06-23 20:44:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:44:34 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1_Driver_ORM' not found ~ MODPATH/A1/classes/A1/ORM.php [ 3 ] in file:line
2014-06-23 20:44:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:44:34 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1_Driver_ORM' not found ~ MODPATH/A1/classes/A1/ORM.php [ 3 ] in file:line
2014-06-23 20:44:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:44:34 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1_Driver_ORM' not found ~ MODPATH/A1/classes/A1/ORM.php [ 3 ] in file:line
2014-06-23 20:44:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:45:04 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1_Driver_ORM' not found ~ MODPATH/A1/classes/A1/ORM.php [ 3 ] in file:line
2014-06-23 20:45:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:45:05 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1_Driver_ORM' not found ~ MODPATH/A1/classes/A1/ORM.php [ 3 ] in file:line
2014-06-23 20:45:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:45:05 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1_Driver_ORM' not found ~ MODPATH/A1/classes/A1/ORM.php [ 3 ] in file:line
2014-06-23 20:45:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:45:05 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1_Driver_ORM' not found ~ MODPATH/A1/classes/A1/ORM.php [ 3 ] in file:line
2014-06-23 20:45:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:45:06 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1_Driver_ORM' not found ~ MODPATH/A1/classes/A1/ORM.php [ 3 ] in file:line
2014-06-23 20:45:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:45:06 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1_Driver_ORM' not found ~ MODPATH/A1/classes/A1/ORM.php [ 3 ] in file:line
2014-06-23 20:45:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:45:06 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1_Driver_ORM' not found ~ MODPATH/A1/classes/A1/ORM.php [ 3 ] in file:line
2014-06-23 20:45:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:46:41 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::response() ~ MODPATH/A1/classes/A1/Core.php [ 120 ] in file:line
2014-06-23 20:46:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:46:52 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::response() ~ MODPATH/A1/classes/A1/Core.php [ 120 ] in file:line
2014-06-23 20:46:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:48:06 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 20:48:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:48:08 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 20:48:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:48:23 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 20:48:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:48:40 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 20:48:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:48:43 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 20:48:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:48:46 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 20:48:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:49:19 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2014-06-23 20:49:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:49:28 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1_Core' not found ~ MODPATH/A1/classes/A1.php [ 3 ] in file:line
2014-06-23 20:49:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:49:29 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1_Core' not found ~ MODPATH/A1/classes/A1.php [ 3 ] in file:line
2014-06-23 20:49:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:49:29 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1_Core' not found ~ MODPATH/A1/classes/A1.php [ 3 ] in file:line
2014-06-23 20:49:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:49:29 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1_Core' not found ~ MODPATH/A1/classes/A1.php [ 3 ] in file:line
2014-06-23 20:49:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:49:44 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1_ORM' not found ~ MODPATH/A1/classes/A1/Core.php [ 42 ] in file:line
2014-06-23 20:49:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:49:45 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1_ORM' not found ~ MODPATH/A1/classes/A1/Core.php [ 42 ] in file:line
2014-06-23 20:49:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:49:54 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1_Driver_ORM' not found ~ MODPATH/A1/classes/A1/ORM.php [ 3 ] in file:line
2014-06-23 20:49:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:49:55 --- EMERGENCY: ErrorException [ 1 ]: Class 'A1_Driver_ORM' not found ~ MODPATH/A1/classes/A1/ORM.php [ 3 ] in file:line
2014-06-23 20:49:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 20:50:08 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::response() ~ MODPATH/A1/classes/A1/Core.php [ 120 ] in file:line
2014-06-23 20:50:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 21:04:03 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_usuarios' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-06-23 21:04:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 21:17:34 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Controller/Login.php [ 29 ] in file:line
2014-06-23 21:17:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-23 21:17:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH/views/login.php [ 305 ] in /var/www/kohana/application/views/login.php:305
2014-06-23 21:17:47 --- DEBUG: #0 /var/www/kohana/application/views/login.php(305): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 305, Array)
#1 /var/www/kohana/system/classes/Kohana/View.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/kohana/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /var/www/kohana/application/classes/Controller/Login.php(22): Kohana_Response->body(Object(View))
#6 /var/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#9 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/kohana/application/views/login.php:305
2014-06-23 21:18:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH/views/login.php [ 305 ] in /var/www/kohana/application/views/login.php:305
2014-06-23 21:18:06 --- DEBUG: #0 /var/www/kohana/application/views/login.php(305): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 305, Array)
#1 /var/www/kohana/system/classes/Kohana/View.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/kohana/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /var/www/kohana/application/classes/Controller/Login.php(22): Kohana_Response->body(Object(View))
#6 /var/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#9 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/kohana/application/views/login.php:305
2014-06-23 21:18:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: mensaje ~ APPPATH/views/login.php [ 271 ] in /var/www/kohana/application/views/login.php:271
2014-06-23 21:18:40 --- DEBUG: #0 /var/www/kohana/application/views/login.php(271): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 271, Array)
#1 /var/www/kohana/system/classes/Kohana/View.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/kohana/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /var/www/kohana/application/classes/Controller/Login.php(22): Kohana_Response->body(Object(View))
#6 /var/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#9 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/kohana/application/views/login.php:271
2014-06-23 21:20:56 --- EMERGENCY: View_Exception [ 0 ]: The requested view acess could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/kohana/system/classes/Kohana/View.php:137
2014-06-23 21:20:56 --- DEBUG: #0 /var/www/kohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('acess')
#1 /var/www/kohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('acess', NULL)
#2 /var/www/kohana/application/classes/Controller/Login.php(29): Kohana_View::factory('acess')
#3 /var/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Login->action_access()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/kohana/system/classes/Kohana/View.php:137
2014-06-23 21:22:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/access.php [ 30 ] in /var/www/kohana/application/views/access.php:30
2014-06-23 21:22:23 --- DEBUG: #0 /var/www/kohana/application/views/access.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 30, Array)
#1 /var/www/kohana/system/classes/Kohana/View.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/kohana/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /var/www/kohana/application/classes/Controller/Login.php(29): Kohana_Response->body(Object(View))
#6 /var/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Login->action_access()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#9 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/kohana/application/views/access.php:30
2014-06-23 21:22:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/access.php [ 30 ] in /var/www/kohana/application/views/access.php:30
2014-06-23 21:22:24 --- DEBUG: #0 /var/www/kohana/application/views/access.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 30, Array)
#1 /var/www/kohana/system/classes/Kohana/View.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/kohana/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /var/www/kohana/application/classes/Controller/Login.php(29): Kohana_Response->body(Object(View))
#6 /var/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Login->action_access()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#9 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/kohana/application/views/access.php:30