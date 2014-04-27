<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-26 16:23:32 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Estados' not found ~ APPPATH/classes/Controller/Mysql.php [ 7 ] in file:line
2014-04-26 16:23:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:26:37 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Estados' not found ~ APPPATH/classes/Controller/Mysql.php [ 11 ] in file:line
2014-04-26 16:26:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:31:43 --- EMERGENCY: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH/classes/Model/Estados.php [ 3 ] in file:line
2014-04-26 16:31:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:31:44 --- EMERGENCY: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH/classes/Model/Estados.php [ 3 ] in file:line
2014-04-26 16:31:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:32:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH/classes/Model/Estados.php [ 3 ] in file:line
2014-04-26 16:32:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:32:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH/classes/Model/Estados.php [ 3 ] in file:line
2014-04-26 16:32:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:32:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH/classes/Model/Estados.php [ 3 ] in file:line
2014-04-26 16:32:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:32:15 --- EMERGENCY: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH/classes/Model/Estados.php [ 3 ] in file:line
2014-04-26 16:32:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:32:20 --- EMERGENCY: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH/classes/Model/Estados.php [ 3 ] in file:line
2014-04-26 16:32:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:34:42 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /var/www/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-04-26 16:34:42 --- DEBUG: #0 /var/www/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /var/www/kohana/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('estadoses')
#3 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /var/www/kohana/application/classes/Controller/Mysql.php(11): Kohana_ORM->__construct()
#7 /var/www/kohana/system/classes/Kohana/Controller.php(69): Controller_Mysql->before()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mysql))
#10 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/kohana/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-04-26 16:34:42 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /var/www/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-04-26 16:34:42 --- DEBUG: #0 /var/www/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /var/www/kohana/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('estadoses')
#3 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /var/www/kohana/application/classes/Controller/Mysql.php(11): Kohana_ORM->__construct()
#7 /var/www/kohana/system/classes/Kohana/Controller.php(69): Controller_Mysql->before()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mysql))
#10 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/kohana/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-04-26 16:34:42 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /var/www/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-04-26 16:34:42 --- DEBUG: #0 /var/www/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /var/www/kohana/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('estadoses')
#3 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /var/www/kohana/application/classes/Controller/Mysql.php(11): Kohana_ORM->__construct()
#7 /var/www/kohana/system/classes/Kohana/Controller.php(69): Controller_Mysql->before()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mysql))
#10 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/kohana/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-04-26 16:34:43 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /var/www/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-04-26 16:34:43 --- DEBUG: #0 /var/www/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /var/www/kohana/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('estadoses')
#3 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /var/www/kohana/application/classes/Controller/Mysql.php(11): Kohana_ORM->__construct()
#7 /var/www/kohana/system/classes/Kohana/Controller.php(69): Controller_Mysql->before()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mysql))
#10 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/kohana/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-04-26 16:38:28 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:38:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:38:29 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:38:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:39:12 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:39:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:39:13 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:39:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:39:41 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:39:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:39:42 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:39:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:39:53 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:39:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:39:54 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:39:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:39:54 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:39:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:39:54 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:39:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:39:55 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:39:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:39:55 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:39:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:40:29 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:40:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:40:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:40:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:41:57 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:41:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:41:57 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:41:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:41:58 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:41:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:41:58 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:41:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:41:58 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:41:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:42:15 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:42:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:43:20 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:43:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:43:21 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:43:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:43:21 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:43:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:43:21 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:43:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:43:21 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:43:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:43:21 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:43:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:43:22 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:43:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:43:22 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:43:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:43:22 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:43:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:43:22 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:43:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:43:22 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:43:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:43:22 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:43:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:43:22 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:43:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:43:44 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:43:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:43:45 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:43:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:43:45 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:43:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:43:45 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:43:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:43:45 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:43:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:43:57 --- EMERGENCY: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'Mysqli' at 'MODPATH/Mysqli' ~ SYSPATH/classes/Kohana/Core.php [ 579 ] in /var/www/kohana/application/bootstrap.php:127
2014-04-26 16:43:57 --- DEBUG: #0 /var/www/kohana/application/bootstrap.php(127): Kohana_Core::modules(Array)
#1 /var/www/kohana/index.php(102): require('/var/www/kohana...')
#2 {main} in /var/www/kohana/application/bootstrap.php:127
2014-04-26 16:43:58 --- EMERGENCY: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'Mysqli' at 'MODPATH/Mysqli' ~ SYSPATH/classes/Kohana/Core.php [ 579 ] in /var/www/kohana/application/bootstrap.php:127
2014-04-26 16:43:58 --- DEBUG: #0 /var/www/kohana/application/bootstrap.php(127): Kohana_Core::modules(Array)
#1 /var/www/kohana/index.php(102): require('/var/www/kohana...')
#2 {main} in /var/www/kohana/application/bootstrap.php:127
2014-04-26 16:43:58 --- EMERGENCY: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'Mysqli' at 'MODPATH/Mysqli' ~ SYSPATH/classes/Kohana/Core.php [ 579 ] in /var/www/kohana/application/bootstrap.php:127
2014-04-26 16:43:58 --- DEBUG: #0 /var/www/kohana/application/bootstrap.php(127): Kohana_Core::modules(Array)
#1 /var/www/kohana/index.php(102): require('/var/www/kohana...')
#2 {main} in /var/www/kohana/application/bootstrap.php:127
2014-04-26 16:43:58 --- EMERGENCY: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'Mysqli' at 'MODPATH/Mysqli' ~ SYSPATH/classes/Kohana/Core.php [ 579 ] in /var/www/kohana/application/bootstrap.php:127
2014-04-26 16:43:58 --- DEBUG: #0 /var/www/kohana/application/bootstrap.php(127): Kohana_Core::modules(Array)
#1 /var/www/kohana/index.php(102): require('/var/www/kohana...')
#2 {main} in /var/www/kohana/application/bootstrap.php:127
2014-04-26 16:43:59 --- EMERGENCY: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'Mysqli' at 'MODPATH/Mysqli' ~ SYSPATH/classes/Kohana/Core.php [ 579 ] in /var/www/kohana/application/bootstrap.php:127
2014-04-26 16:43:59 --- DEBUG: #0 /var/www/kohana/application/bootstrap.php(127): Kohana_Core::modules(Array)
#1 /var/www/kohana/index.php(102): require('/var/www/kohana...')
#2 {main} in /var/www/kohana/application/bootstrap.php:127
2014-04-26 16:44:12 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:44:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:44:13 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:44:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:44:51 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function list_columns() on a non-object ~ MODPATH/orm/classes/Kohana/ORM.php [ 1668 ] in file:line
2014-04-26 16:44:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:44:52 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function list_columns() on a non-object ~ MODPATH/orm/classes/Kohana/ORM.php [ 1668 ] in file:line
2014-04-26 16:44:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:44:52 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function list_columns() on a non-object ~ MODPATH/orm/classes/Kohana/ORM.php [ 1668 ] in file:line
2014-04-26 16:44:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:44:52 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function list_columns() on a non-object ~ MODPATH/orm/classes/Kohana/ORM.php [ 1668 ] in file:line
2014-04-26 16:44:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:44:52 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function list_columns() on a non-object ~ MODPATH/orm/classes/Kohana/ORM.php [ 1668 ] in file:line
2014-04-26 16:44:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:44:53 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function list_columns() on a non-object ~ MODPATH/orm/classes/Kohana/ORM.php [ 1668 ] in file:line
2014-04-26 16:44:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:44:53 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function list_columns() on a non-object ~ MODPATH/orm/classes/Kohana/ORM.php [ 1668 ] in file:line
2014-04-26 16:44:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:44:53 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function list_columns() on a non-object ~ MODPATH/orm/classes/Kohana/ORM.php [ 1668 ] in file:line
2014-04-26 16:44:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:45:37 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:45:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:46:02 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:46:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:46:04 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:46:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:46:18 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:46:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:46:18 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:46:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:46:19 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:46:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:46:19 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:46:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:46:19 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:46:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:46:19 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:46:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:46:19 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:46:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:46:19 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:46:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:46:41 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:46:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:46:42 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:46:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:46:42 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:46:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:46:42 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:46:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:46:42 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:46:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:46:42 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:46:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:46:43 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:46:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:47:23 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:47:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:47:25 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:47:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:49:35 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /var/www/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-04-26 16:49:35 --- DEBUG: #0 /var/www/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /var/www/kohana/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('estadoses')
#3 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /var/www/kohana/application/classes/Controller/Mysql.php(11): Kohana_ORM->__construct()
#7 /var/www/kohana/system/classes/Kohana/Controller.php(69): Controller_Mysql->before()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mysql))
#10 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/kohana/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-04-26 16:49:36 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /var/www/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-04-26 16:49:36 --- DEBUG: #0 /var/www/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /var/www/kohana/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('estadoses')
#3 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /var/www/kohana/application/classes/Controller/Mysql.php(11): Kohana_ORM->__construct()
#7 /var/www/kohana/system/classes/Kohana/Controller.php(69): Controller_Mysql->before()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mysql))
#10 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/kohana/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-04-26 16:49:56 --- EMERGENCY: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 235 ] in /var/www/kohana/modules/orm/classes/Kohana/ORM.php:1668
2014-04-26 16:49:56 --- DEBUG: #0 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_PDO->list_columns('estadoses')
#1 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#2 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#3 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#4 /var/www/kohana/application/classes/Controller/Mysql.php(11): Kohana_ORM->__construct()
#5 /var/www/kohana/system/classes/Kohana/Controller.php(69): Controller_Mysql->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mysql))
#8 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/kohana/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/kohana/modules/orm/classes/Kohana/ORM.php:1668
2014-04-26 16:49:57 --- EMERGENCY: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 235 ] in /var/www/kohana/modules/orm/classes/Kohana/ORM.php:1668
2014-04-26 16:49:57 --- DEBUG: #0 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_PDO->list_columns('estadoses')
#1 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#2 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#3 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#4 /var/www/kohana/application/classes/Controller/Mysql.php(11): Kohana_ORM->__construct()
#5 /var/www/kohana/system/classes/Kohana/Controller.php(69): Controller_Mysql->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mysql))
#8 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/kohana/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/kohana/modules/orm/classes/Kohana/ORM.php:1668
2014-04-26 16:50:22 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:50:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:50:42 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:50:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:50:42 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:50:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:50:43 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:50:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:50:43 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:50:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:50:43 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:50:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:50:43 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:50:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:51:55 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:51:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:51:56 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:51:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:51:56 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:51:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:51:56 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:51:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:51:56 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:51:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:51:56 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:51:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:51:56 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:51:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:51:57 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:51:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:52:01 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:52:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:52:01 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:52:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:52:01 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:52:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:52:02 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:52:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:52:02 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:52:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:52:16 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:52:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:52:17 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:52:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:52:17 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:52:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:52:17 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:52:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:52:17 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:52:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:52:18 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:52:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:52:18 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:52:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:52:18 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:52:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:52:18 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:52:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:52:18 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:52:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:52:18 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:52:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:52:19 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:52:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:52:19 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:52:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:52:19 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:52:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:52:19 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:52:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:52:19 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:52:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:52:19 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:52:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:52:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:52:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:52:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:52:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:52:35 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:52:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:53:44 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:53:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:53:45 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:53:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:53:45 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:53:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:53:45 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:53:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:53:45 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:53:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:53:53 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:53:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:53:54 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:53:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:53:55 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:53:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:53:55 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:53:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:53:55 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:53:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:53:55 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:53:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:55:21 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysql' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:55:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:55:21 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysql' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:55:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:55:22 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysql' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:55:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:55:22 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysql' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:55:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:55:22 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysql' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:55:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:55:22 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysql' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:55:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:55:22 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysql' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:55:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:55:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_MYSQL' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:55:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:55:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_MYSQL' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:55:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:55:48 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_MYSQL' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:55:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:55:48 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_MYSQL' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:55:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:56:27 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /var/www/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-04-26 16:56:27 --- DEBUG: #0 /var/www/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /var/www/kohana/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('estadoses')
#3 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /var/www/kohana/application/classes/Controller/Mysql.php(11): Kohana_ORM->__construct()
#7 /var/www/kohana/system/classes/Kohana/Controller.php(69): Controller_Mysql->before()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mysql))
#10 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/kohana/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-04-26 16:56:28 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /var/www/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-04-26 16:56:28 --- DEBUG: #0 /var/www/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /var/www/kohana/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('estadoses')
#3 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /var/www/kohana/application/classes/Controller/Mysql.php(11): Kohana_ORM->__construct()
#7 /var/www/kohana/system/classes/Kohana/Controller.php(69): Controller_Mysql->before()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mysql))
#10 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/kohana/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-04-26 16:56:37 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-04-26 16:56:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-26 16:56:46 --- EMERGENCY: Database_Exception [ 1049 ]: Unknown database 'kohana' ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 106 ] in /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php:73
2014-04-26 16:56:46 --- DEBUG: #0 /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php(73): Kohana_Database_MySQLi->_select_db('kohana')
#1 /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php(169): Kohana_Database_MySQLi->connect()
#2 /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php(357): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#3 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQLi->list_columns('estadoses')
#4 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#5 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#6 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /var/www/kohana/application/classes/Controller/Mysql.php(11): Kohana_ORM->__construct()
#8 /var/www/kohana/system/classes/Kohana/Controller.php(69): Controller_Mysql->before()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mysql))
#11 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php:73
2014-04-26 16:56:47 --- EMERGENCY: Database_Exception [ 1049 ]: Unknown database 'kohana' ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 106 ] in /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php:73
2014-04-26 16:56:47 --- DEBUG: #0 /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php(73): Kohana_Database_MySQLi->_select_db('kohana')
#1 /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php(169): Kohana_Database_MySQLi->connect()
#2 /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php(357): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#3 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQLi->list_columns('estadoses')
#4 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#5 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#6 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /var/www/kohana/application/classes/Controller/Mysql.php(11): Kohana_ORM->__construct()
#8 /var/www/kohana/system/classes/Kohana/Controller.php(69): Controller_Mysql->before()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mysql))
#11 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php:73
2014-04-26 16:56:54 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'demos.estadoses' doesn't exist [ SHOW FULL COLUMNS FROM `estadoses` ] ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 192 ] in /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php:357
2014-04-26 16:56:54 --- DEBUG: #0 /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php(357): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQLi->list_columns('estadoses')
#2 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/kohana/application/classes/Controller/Mysql.php(11): Kohana_ORM->__construct()
#6 /var/www/kohana/system/classes/Kohana/Controller.php(69): Controller_Mysql->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mysql))
#9 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php:357
2014-04-26 17:00:27 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'demos.estadoses' doesn't exist [ SHOW FULL COLUMNS FROM `estadoses` ] ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 192 ] in /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php:357
2014-04-26 17:00:27 --- DEBUG: #0 /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php(357): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQLi->list_columns('estadoses')
#2 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/kohana/application/classes/Controller/Mysql.php(11): Kohana_ORM->__construct()
#6 /var/www/kohana/system/classes/Kohana/Controller.php(69): Controller_Mysql->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mysql))
#9 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php:357
2014-04-26 17:01:44 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'demos.estadoses' doesn't exist [ SHOW FULL COLUMNS FROM `estadoses` ] ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 192 ] in /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php:357
2014-04-26 17:01:44 --- DEBUG: #0 /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php(357): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQLi->list_columns('estadoses')
#2 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/kohana/application/classes/Controller/Mysql.php(11): Kohana_ORM->__construct()
#6 /var/www/kohana/system/classes/Kohana/Controller.php(69): Controller_Mysql->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mysql))
#9 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php:357
2014-04-26 17:01:45 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'demos.estadoses' doesn't exist [ SHOW FULL COLUMNS FROM `estadoses` ] ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 192 ] in /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php:357
2014-04-26 17:01:45 --- DEBUG: #0 /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php(357): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQLi->list_columns('estadoses')
#2 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/kohana/application/classes/Controller/Mysql.php(11): Kohana_ORM->__construct()
#6 /var/www/kohana/system/classes/Kohana/Controller.php(69): Controller_Mysql->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mysql))
#9 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php:357
2014-04-26 17:01:45 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'demos.estadoses' doesn't exist [ SHOW FULL COLUMNS FROM `estadoses` ] ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 192 ] in /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php:357
2014-04-26 17:01:45 --- DEBUG: #0 /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php(357): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQLi->list_columns('estadoses')
#2 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/kohana/application/classes/Controller/Mysql.php(11): Kohana_ORM->__construct()
#6 /var/www/kohana/system/classes/Kohana/Controller.php(69): Controller_Mysql->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mysql))
#9 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php:357
2014-04-26 17:01:45 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'demos.estadoses' doesn't exist [ SHOW FULL COLUMNS FROM `estadoses` ] ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 192 ] in /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php:357
2014-04-26 17:01:45 --- DEBUG: #0 /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php(357): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQLi->list_columns('estadoses')
#2 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /var/www/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/kohana/application/classes/Controller/Mysql.php(11): Kohana_ORM->__construct()
#6 /var/www/kohana/system/classes/Kohana/Controller.php(69): Controller_Mysql->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mysql))
#9 /var/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/kohana/modules/mysqli/classes/Kohana/Database/MySQLi.php:357