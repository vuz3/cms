<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-18 20:38:51 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/cms/system/classes/Kohana/Session.php:125
2013-04-18 20:38:51 --- DEBUG: #0 /var/www/cms/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/cms/modules/database/classes/Kohana/Session/Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /var/www/cms/system/classes/Kohana/Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /var/www/cms/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('database')
#4 /var/www/cms/modules/auth/classes/Kohana/Auth/File.php(21): Kohana_Auth->__construct(Object(Config_Group))
#5 /var/www/cms/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth_File->__construct(Object(Config_Group))
#6 /var/www/cms/application/classes/Controller/Welcome.php(95): Kohana_Auth::instance()
#7 /var/www/cms/system/classes/Kohana/Controller.php(87): Controller_Welcome->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/cms/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 /var/www/cms/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/cms/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/cms/system/classes/Kohana/Session.php:125
2013-04-18 20:40:21 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/cms/system/classes/Kohana/Session.php:125
2013-04-18 20:40:21 --- DEBUG: #0 /var/www/cms/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/cms/modules/database/classes/Kohana/Session/Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /var/www/cms/system/classes/Kohana/Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /var/www/cms/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('database')
#4 /var/www/cms/modules/auth/classes/Kohana/Auth/File.php(21): Kohana_Auth->__construct(Object(Config_Group))
#5 /var/www/cms/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth_File->__construct(Object(Config_Group))
#6 /var/www/cms/application/classes/Controller/Welcome.php(94): Kohana_Auth::instance()
#7 /var/www/cms/system/classes/Kohana/Controller.php(87): Controller_Welcome->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/cms/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 /var/www/cms/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/cms/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/cms/system/classes/Kohana/Session.php:125
2013-04-18 20:40:24 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/cms/system/classes/Kohana/Session.php:125
2013-04-18 20:40:24 --- DEBUG: #0 /var/www/cms/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/cms/modules/database/classes/Kohana/Session/Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /var/www/cms/system/classes/Kohana/Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /var/www/cms/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('database')
#4 /var/www/cms/modules/auth/classes/Kohana/Auth/File.php(21): Kohana_Auth->__construct(Object(Config_Group))
#5 /var/www/cms/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth_File->__construct(Object(Config_Group))
#6 /var/www/cms/application/classes/Controller/Welcome.php(94): Kohana_Auth::instance()
#7 /var/www/cms/system/classes/Kohana/Controller.php(87): Controller_Welcome->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/cms/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 /var/www/cms/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/cms/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/cms/system/classes/Kohana/Session.php:125
2013-04-18 20:40:41 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/cms/system/classes/Kohana/Session.php:125
2013-04-18 20:40:41 --- DEBUG: #0 /var/www/cms/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/cms/modules/database/classes/Kohana/Session/Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /var/www/cms/system/classes/Kohana/Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /var/www/cms/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('database')
#4 /var/www/cms/modules/auth/classes/Kohana/Auth/File.php(21): Kohana_Auth->__construct(Object(Config_Group))
#5 /var/www/cms/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth_File->__construct(Object(Config_Group))
#6 /var/www/cms/application/classes/Controller/Welcome.php(94): Kohana_Auth::instance()
#7 /var/www/cms/system/classes/Kohana/Controller.php(87): Controller_Welcome->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/cms/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 /var/www/cms/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/cms/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/cms/system/classes/Kohana/Session.php:125
2013-04-18 21:51:39 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'kohana.article' doesn't exist [ SHOW FULL COLUMNS FROM `article` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/cms/modules/database/classes/Kohana/Database/MySQL.php:358
2013-04-18 21:51:39 --- DEBUG: #0 /var/www/cms/modules/database/classes/Kohana/Database/MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/Kohana/ORM.php(1665): Kohana_Database_MySQL->list_columns('article')
#2 /var/www/cms/modules/orm/classes/Kohana/ORM.php(441): Kohana_ORM->list_columns()
#3 /var/www/cms/modules/orm/classes/Kohana/ORM.php(386): Kohana_ORM->reload_columns()
#4 /var/www/cms/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#6 /var/www/cms/application/classes/Controller/Cms/Article.php(17): Kohana_ORM::factory('Article')
#7 /var/www/cms/system/classes/Kohana/Controller.php(84): Controller_Cms_Article->action_show()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/cms/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms_Article))
#10 /var/www/cms/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/cms/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/cms/modules/database/classes/Kohana/Database/MySQL.php:358
2013-04-18 21:52:02 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'kohana.article' doesn't exist [ SHOW FULL COLUMNS FROM `article` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/cms/modules/database/classes/Kohana/Database/MySQL.php:358
2013-04-18 21:52:02 --- DEBUG: #0 /var/www/cms/modules/database/classes/Kohana/Database/MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/Kohana/ORM.php(1665): Kohana_Database_MySQL->list_columns('article')
#2 /var/www/cms/modules/orm/classes/Kohana/ORM.php(441): Kohana_ORM->list_columns()
#3 /var/www/cms/modules/orm/classes/Kohana/ORM.php(386): Kohana_ORM->reload_columns()
#4 /var/www/cms/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#6 /var/www/cms/application/classes/Controller/Cms/Article.php(17): Kohana_ORM::factory('Article')
#7 /var/www/cms/system/classes/Kohana/Controller.php(84): Controller_Cms_Article->action_show()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/cms/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms_Article))
#10 /var/www/cms/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/cms/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/cms/modules/database/classes/Kohana/Database/MySQL.php:358
2013-04-18 21:59:40 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Article::bind() ~ APPPATH/classes/Controller/Cms/Article.php [ 21 ] in :
2013-04-18 21:59:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-18 21:59:59 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '\"articles"\
                 ORDER BY id ASC
                 LIMIT NULL
      ' at line 2 [ SELECT *
                 FROM \"articles"\
                 ORDER BY id ASC
                 LIMIT NULL
                 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/cms/modules/database/classes/Kohana/Database/Query.php:251
2013-04-18 21:59:59 --- DEBUG: #0 /var/www/cms/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT *?      ...', false, Array)
#1 /var/www/cms/application/classes/Model/Pagination.php(53): Kohana_Database_Query->execute()
#2 /var/www/cms/application/classes/Controller/Cms/Article.php(36): Model_Pagination->load_segregate_element(NULL, 0)
#3 /var/www/cms/system/classes/Kohana/Controller.php(84): Controller_Cms_Article->action_show()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/cms/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms_Article))
#6 /var/www/cms/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/cms/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/cms/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/cms/modules/database/classes/Kohana/Database/Query.php:251
2013-04-18 22:01:05 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '\"articles"\
                 ORDER BY id ASC
                 LIMIT NULL
      ' at line 2 [ SELECT *
                 FROM \"articles"\
                 ORDER BY id ASC
                 LIMIT NULL
                 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/cms/modules/database/classes/Kohana/Database/Query.php:251
2013-04-18 22:01:05 --- DEBUG: #0 /var/www/cms/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT *?      ...', false, Array)
#1 /var/www/cms/application/classes/Model/Pagination.php(53): Kohana_Database_Query->execute()
#2 /var/www/cms/application/classes/Controller/Cms/Article.php(34): Model_Pagination->load_segregate_element(NULL, 0)
#3 /var/www/cms/system/classes/Kohana/Controller.php(84): Controller_Cms_Article->action_show()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/cms/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms_Article))
#6 /var/www/cms/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/cms/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/cms/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/cms/modules/database/classes/Kohana/Database/Query.php:251
2013-04-18 22:02:16 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '\"articles"\
                 ORDER BY id ASC
                 LIMIT NULL
      ' at line 2 [ SELECT *
                 FROM \"articles"\
                 ORDER BY id ASC
                 LIMIT NULL
                 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/cms/modules/database/classes/Kohana/Database/Query.php:251
2013-04-18 22:02:16 --- DEBUG: #0 /var/www/cms/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT *?      ...', false, Array)
#1 /var/www/cms/application/classes/Model/Pagination.php(53): Kohana_Database_Query->execute()
#2 /var/www/cms/application/classes/Controller/Cms/Article.php(32): Model_Pagination->load_segregate_element(NULL, 0)
#3 /var/www/cms/system/classes/Kohana/Controller.php(84): Controller_Cms_Article->action_show()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/cms/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms_Article))
#6 /var/www/cms/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/cms/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/cms/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/cms/modules/database/classes/Kohana/Database/Query.php:251
2013-04-18 22:02:24 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '\"articles"\
                 ORDER BY id ASC
                 LIMIT NULL
      ' at line 2 [ SELECT *
                 FROM \"articles"\
                 ORDER BY id ASC
                 LIMIT NULL
                 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/cms/modules/database/classes/Kohana/Database/Query.php:251
2013-04-18 22:02:24 --- DEBUG: #0 /var/www/cms/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT *?      ...', false, Array)
#1 /var/www/cms/application/classes/Model/Pagination.php(53): Kohana_Database_Query->execute()
#2 /var/www/cms/application/classes/Controller/Cms/Article.php(34): Model_Pagination->load_segregate_element(NULL, 0)
#3 /var/www/cms/system/classes/Kohana/Controller.php(84): Controller_Cms_Article->action_show()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/cms/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms_Article))
#6 /var/www/cms/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/cms/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/cms/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/cms/modules/database/classes/Kohana/Database/Query.php:251
2013-04-18 22:03:08 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '\"articles"\
                 ORDER BY id ASC
                 LIMIT NULL
      ' at line 2 [ SELECT *
                 FROM \"articles"\
                 ORDER BY id ASC
                 LIMIT NULL
                 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/cms/modules/database/classes/Kohana/Database/Query.php:251
2013-04-18 22:03:08 --- DEBUG: #0 /var/www/cms/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT *?      ...', false, Array)
#1 /var/www/cms/application/classes/Model/Pagination.php(53): Kohana_Database_Query->execute()
#2 /var/www/cms/application/classes/Controller/Cms/Article.php(34): Model_Pagination->load_segregate_element(NULL, 0)
#3 /var/www/cms/system/classes/Kohana/Controller.php(84): Controller_Cms_Article->action_show()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/cms/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms_Article))
#6 /var/www/cms/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/cms/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/cms/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/cms/modules/database/classes/Kohana/Database/Query.php:251
2013-04-18 22:03:40 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '\"articles"\
                 ORDER BY id ASC
                 LIMIT 2
         ' at line 2 [ SELECT *
                 FROM \"articles"\
                 ORDER BY id ASC
                 LIMIT 2
                 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/cms/modules/database/classes/Kohana/Database/Query.php:251
2013-04-18 22:03:40 --- DEBUG: #0 /var/www/cms/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT *?      ...', false, Array)
#1 /var/www/cms/application/classes/Model/Pagination.php(53): Kohana_Database_Query->execute()
#2 /var/www/cms/application/classes/Controller/Cms/Article.php(33): Model_Pagination->load_segregate_element(2, 0)
#3 /var/www/cms/system/classes/Kohana/Controller.php(84): Controller_Cms_Article->action_show()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/cms/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms_Article))
#6 /var/www/cms/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/cms/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/cms/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/cms/modules/database/classes/Kohana/Database/Query.php:251
2013-04-18 22:04:11 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '\"articles"\
                 ORDER BY id ASC
                 LIMIT 2
         ' at line 2 [ SELECT *
                 FROM \"articles"\
                 ORDER BY id ASC
                 LIMIT 2
                 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/cms/modules/database/classes/Kohana/Database/Query.php:251
2013-04-18 22:04:11 --- DEBUG: #0 /var/www/cms/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT *?      ...', false, Array)
#1 /var/www/cms/application/classes/Model/Pagination.php(53): Kohana_Database_Query->execute()
#2 /var/www/cms/application/classes/Controller/Cms/Article.php(35): Model_Pagination->load_segregate_element(2, 0)
#3 /var/www/cms/system/classes/Kohana/Controller.php(84): Controller_Cms_Article->action_show()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/cms/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms_Article))
#6 /var/www/cms/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/cms/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/cms/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/cms/modules/database/classes/Kohana/Database/Query.php:251
2013-04-18 22:06:45 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ': offset' at line 3 [ SELECT * 
                               FROM `articles` 
                               ORDER BY `id` ASC LIMIT 2 OFFSET : offset ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/cms/modules/database/classes/Kohana/Database/Query.php:251
2013-04-18 22:06:45 --- DEBUG: #0 /var/www/cms/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * ?     ...', false, Array)
#1 /var/www/cms/application/classes/Model/Pagination.php(52): Kohana_Database_Query->execute()
#2 /var/www/cms/application/classes/Controller/Cms/Article.php(33): Model_Pagination->load_segregate_element(2, 0)
#3 /var/www/cms/system/classes/Kohana/Controller.php(84): Controller_Cms_Article->action_show()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/cms/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms_Article))
#6 /var/www/cms/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/cms/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/cms/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/cms/modules/database/classes/Kohana/Database/Query.php:251
2013-04-18 22:08:49 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/cms/article.php [ 8 ] in /var/www/cms/application/views/cms/article.php:8
2013-04-18 22:08:49 --- DEBUG: #0 /var/www/cms/application/views/cms/article.php(8): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/cms/ap...', 8, Array)
#1 /var/www/cms/system/classes/Kohana/View.php(61): include('/var/www/cms/ap...')
#2 /var/www/cms/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/cms/ap...', Array)
#3 /var/www/cms/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/cms/application/views/site.php(54): Kohana_View->__toString()
#5 /var/www/cms/system/classes/Kohana/View.php(61): include('/var/www/cms/ap...')
#6 /var/www/cms/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/cms/ap...', Array)
#7 /var/www/cms/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/cms/application/classes/Controller/Welcome.php(103): Kohana_Controller_Template->after()
#9 /var/www/cms/system/classes/Kohana/Controller.php(87): Controller_Welcome->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/cms/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms_Article))
#12 /var/www/cms/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/cms/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/cms/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/cms/application/views/cms/article.php:8
2013-04-18 22:09:19 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/cms/article.php [ 9 ] in /var/www/cms/application/views/cms/article.php:9
2013-04-18 22:09:19 --- DEBUG: #0 /var/www/cms/application/views/cms/article.php(9): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/cms/ap...', 9, Array)
#1 /var/www/cms/system/classes/Kohana/View.php(61): include('/var/www/cms/ap...')
#2 /var/www/cms/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/cms/ap...', Array)
#3 /var/www/cms/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/cms/application/views/site.php(54): Kohana_View->__toString()
#5 /var/www/cms/system/classes/Kohana/View.php(61): include('/var/www/cms/ap...')
#6 /var/www/cms/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/cms/ap...', Array)
#7 /var/www/cms/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/cms/application/classes/Controller/Welcome.php(103): Kohana_Controller_Template->after()
#9 /var/www/cms/system/classes/Kohana/Controller.php(87): Controller_Welcome->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/cms/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms_Article))
#12 /var/www/cms/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/cms/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/cms/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/cms/application/views/cms/article.php:9
2013-04-18 22:09:34 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/cms/article.php [ 9 ] in /var/www/cms/application/views/cms/article.php:9
2013-04-18 22:09:34 --- DEBUG: #0 /var/www/cms/application/views/cms/article.php(9): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/cms/ap...', 9, Array)
#1 /var/www/cms/system/classes/Kohana/View.php(61): include('/var/www/cms/ap...')
#2 /var/www/cms/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/cms/ap...', Array)
#3 /var/www/cms/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/cms/application/views/site.php(54): Kohana_View->__toString()
#5 /var/www/cms/system/classes/Kohana/View.php(61): include('/var/www/cms/ap...')
#6 /var/www/cms/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/cms/ap...', Array)
#7 /var/www/cms/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/cms/application/classes/Controller/Welcome.php(103): Kohana_Controller_Template->after()
#9 /var/www/cms/system/classes/Kohana/Controller.php(87): Controller_Welcome->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/cms/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms_Article))
#12 /var/www/cms/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/cms/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/cms/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/cms/application/views/cms/article.php:9
2013-04-18 22:10:01 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::array() ~ APPPATH/classes/Controller/Cms/Article.php [ 34 ] in :
2013-04-18 22:10:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-18 22:10:11 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/cms/article.php [ 9 ] in /var/www/cms/application/views/cms/article.php:9
2013-04-18 22:10:11 --- DEBUG: #0 /var/www/cms/application/views/cms/article.php(9): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/cms/ap...', 9, Array)
#1 /var/www/cms/system/classes/Kohana/View.php(61): include('/var/www/cms/ap...')
#2 /var/www/cms/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/cms/ap...', Array)
#3 /var/www/cms/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/cms/application/views/site.php(54): Kohana_View->__toString()
#5 /var/www/cms/system/classes/Kohana/View.php(61): include('/var/www/cms/ap...')
#6 /var/www/cms/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/cms/ap...', Array)
#7 /var/www/cms/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/cms/application/classes/Controller/Welcome.php(103): Kohana_Controller_Template->after()
#9 /var/www/cms/system/classes/Kohana/Controller.php(87): Controller_Welcome->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/cms/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms_Article))
#12 /var/www/cms/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/cms/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/cms/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/cms/application/views/cms/article.php:9