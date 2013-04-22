<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-20 19:11:22 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debugtoolbar' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 16 ] in :
2013-04-20 19:11:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-20 19:12:00 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debugtoolbar' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 17 ] in :
2013-04-20 19:12:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-20 19:14:08 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debugtoolbar' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 13 ] in :
2013-04-20 19:14:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-20 19:15:13 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debug_Toolbar_Core' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 13 ] in :
2013-04-20 19:15:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-20 19:19:09 --- EMERGENCY: ErrorException [ 2 ]: Wrong parameter count for var_dump() ~ APPPATH/classes/Controller/Cms/Article.php [ 13 ] in :
2013-04-20 19:19:09 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'Wrong parameter...', '/var/www/cms/ap...', 13, Array)
#1 /var/www/cms/application/classes/Controller/Cms/Article.php(13): var_dump()
#2 /var/www/cms/system/classes/Kohana/Controller.php(69): Controller_Cms_Article->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/cms/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms_Article))
#5 /var/www/cms/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/cms/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-04-20 19:19:11 --- EMERGENCY: ErrorException [ 2 ]: Wrong parameter count for var_dump() ~ APPPATH/classes/Controller/Cms/Article.php [ 13 ] in :
2013-04-20 19:19:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'Wrong parameter...', '/var/www/cms/ap...', 13, Array)
#1 /var/www/cms/application/classes/Controller/Cms/Article.php(13): var_dump()
#2 /var/www/cms/system/classes/Kohana/Controller.php(69): Controller_Cms_Article->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/cms/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms_Article))
#5 /var/www/cms/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/cms/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-04-20 19:19:49 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH/classes/Controller/Cms/Article.php [ 13 ] in :
2013-04-20 19:19:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-20 19:20:49 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debugtoolbar' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 13 ] in :
2013-04-20 19:20:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-20 19:24:06 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-20 19:24:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-20 19:24:16 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-20 19:24:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-20 20:09:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/classes/Controller/Cms/Article.php [ 21 ] in /var/www/cms/application/classes/Controller/Cms/Article.php:21
2013-04-20 20:09:46 --- DEBUG: #0 /var/www/cms/application/classes/Controller/Cms/Article.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/cms/ap...', 21, Array)
#1 /var/www/cms/system/classes/Kohana/Controller.php(84): Controller_Cms_Article->action_show()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/cms/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms_Article))
#4 /var/www/cms/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/cms/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/cms/application/classes/Controller/Cms/Article.php:21
2013-04-20 20:10:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/classes/Controller/Cms/Article.php [ 21 ] in /var/www/cms/application/classes/Controller/Cms/Article.php:21
2013-04-20 20:10:30 --- DEBUG: #0 /var/www/cms/application/classes/Controller/Cms/Article.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/cms/ap...', 21, Array)
#1 /var/www/cms/system/classes/Kohana/Controller.php(84): Controller_Cms_Article->action_show()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/cms/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms_Article))
#4 /var/www/cms/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/cms/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/cms/application/classes/Controller/Cms/Article.php:21
2013-04-20 20:15:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/classes/Controller/Cms/Article.php [ 20 ] in /var/www/cms/application/classes/Controller/Cms/Article.php:20
2013-04-20 20:15:36 --- DEBUG: #0 /var/www/cms/application/classes/Controller/Cms/Article.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/cms/ap...', 20, Array)
#1 /var/www/cms/system/classes/Kohana/Controller.php(84): Controller_Cms_Article->action_show()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/cms/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms_Article))
#4 /var/www/cms/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/cms/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/cms/application/classes/Controller/Cms/Article.php:20
2013-04-20 20:16:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/classes/Controller/Cms/Article.php [ 20 ] in /var/www/cms/application/classes/Controller/Cms/Article.php:20
2013-04-20 20:16:20 --- DEBUG: #0 /var/www/cms/application/classes/Controller/Cms/Article.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/cms/ap...', 20, Array)
#1 /var/www/cms/system/classes/Kohana/Controller.php(84): Controller_Cms_Article->action_show()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/cms/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms_Article))
#4 /var/www/cms/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/cms/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/cms/application/classes/Controller/Cms/Article.php:20
2013-04-20 20:16:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/classes/Controller/Cms/Article.php [ 20 ] in /var/www/cms/application/classes/Controller/Cms/Article.php:20
2013-04-20 20:16:29 --- DEBUG: #0 /var/www/cms/application/classes/Controller/Cms/Article.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/cms/ap...', 20, Array)
#1 /var/www/cms/system/classes/Kohana/Controller.php(84): Controller_Cms_Article->action_show()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/cms/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms_Article))
#4 /var/www/cms/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/cms/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/cms/application/classes/Controller/Cms/Article.php:20
2013-04-20 20:16:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/classes/Controller/Cms/Article.php [ 20 ] in /var/www/cms/application/classes/Controller/Cms/Article.php:20
2013-04-20 20:16:43 --- DEBUG: #0 /var/www/cms/application/classes/Controller/Cms/Article.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/cms/ap...', 20, Array)
#1 /var/www/cms/system/classes/Kohana/Controller.php(84): Controller_Cms_Article->action_show()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/cms/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms_Article))
#4 /var/www/cms/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/cms/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/cms/application/classes/Controller/Cms/Article.php:20
2013-04-20 20:17:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/classes/Controller/Cms/Article.php [ 19 ] in /var/www/cms/application/classes/Controller/Cms/Article.php:19
2013-04-20 20:17:40 --- DEBUG: #0 /var/www/cms/application/classes/Controller/Cms/Article.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/cms/ap...', 19, Array)
#1 /var/www/cms/system/classes/Kohana/Controller.php(84): Controller_Cms_Article->action_show()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/cms/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms_Article))
#4 /var/www/cms/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/cms/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/cms/application/classes/Controller/Cms/Article.php:19
2013-04-20 20:18:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/classes/Controller/Cms/Article.php [ 19 ] in /var/www/cms/application/classes/Controller/Cms/Article.php:19
2013-04-20 20:18:00 --- DEBUG: #0 /var/www/cms/application/classes/Controller/Cms/Article.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/cms/ap...', 19, Array)
#1 /var/www/cms/system/classes/Kohana/Controller.php(84): Controller_Cms_Article->action_show()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/cms/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms_Article))
#4 /var/www/cms/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/cms/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/cms/application/classes/Controller/Cms/Article.php:19
2013-04-20 20:38:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Request::$post ~ APPPATH/classes/Controller/Cms/Article.php [ 14 ] in /var/www/cms/application/classes/Controller/Cms/Article.php:14
2013-04-20 20:38:39 --- DEBUG: #0 /var/www/cms/application/classes/Controller/Cms/Article.php(14): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/cms/ap...', 14, Array)
#1 /var/www/cms/system/classes/Kohana/Controller.php(69): Controller_Cms_Article->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/cms/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms_Article))
#4 /var/www/cms/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/cms/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/cms/application/classes/Controller/Cms/Article.php:14
2013-04-20 20:53:27 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-20 20:53:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :