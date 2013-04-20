<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-19 08:29:03 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/cms/article.php [ 9 ] in /var/www/cms/application/views/cms/article.php:9
2013-04-19 08:29:03 --- DEBUG: #0 /var/www/cms/application/views/cms/article.php(9): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/cms/ap...', 9, Array)
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
2013-04-19 10:36:33 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '.' ~ APPPATH/views/cms/article.php [ 19 ] in :
2013-04-19 10:36:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 13:13:22 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '' (T_ENCAPSED_AND_WHITESPACE), expecting identifier (T_STRING) or variable (T_VARIABLE) or number (T_NUM_STRING) ~ APPPATH/views/cms/article.php [ 12 ] in :
2013-04-19 13:13:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 14:34:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: dane ~ APPPATH/classes/Controller/Cms/Article.php [ 16 ] in /var/www/cms/application/classes/Controller/Cms/Article.php:16
2013-04-19 14:34:40 --- DEBUG: #0 /var/www/cms/application/classes/Controller/Cms/Article.php(16): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 16, Array)
#1 /var/www/cms/system/classes/Kohana/Controller.php(84): Controller_Cms_Article->action_show()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/cms/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms_Article))
#4 /var/www/cms/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/cms/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/cms/application/classes/Controller/Cms/Article.php:16
2013-04-19 14:34:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: dane ~ APPPATH/classes/Controller/Cms/Article.php [ 16 ] in /var/www/cms/application/classes/Controller/Cms/Article.php:16
2013-04-19 14:34:49 --- DEBUG: #0 /var/www/cms/application/classes/Controller/Cms/Article.php(16): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 16, Array)
#1 /var/www/cms/system/classes/Kohana/Controller.php(84): Controller_Cms_Article->action_show()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/cms/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms_Article))
#4 /var/www/cms/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/cms/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/cms/application/classes/Controller/Cms/Article.php:16
2013-04-19 15:26:05 --- EMERGENCY: ErrorException [ 2048 ]: Non-static method Kohana_Request::is_ajax() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in /var/www/cms/application/classes/Controller/Cms/Article.php:12
2013-04-19 15:26:05 --- DEBUG: #0 /var/www/cms/application/classes/Controller/Cms/Article.php(12): Kohana_Core::error_handler(2048, 'Non-static meth...', '/var/www/cms/ap...', 12, Array)
#1 /var/www/cms/system/classes/Kohana/Controller.php(69): Controller_Cms_Article->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/cms/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms_Article))
#4 /var/www/cms/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/cms/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/cms/application/classes/Controller/Cms/Article.php:12
2013-04-19 15:26:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Cms_Article::$Request ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in /var/www/cms/application/classes/Controller/Cms/Article.php:12
2013-04-19 15:26:28 --- DEBUG: #0 /var/www/cms/application/classes/Controller/Cms/Article.php(12): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/cms/ap...', 12, Array)
#1 /var/www/cms/system/classes/Kohana/Controller.php(69): Controller_Cms_Article->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/cms/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms_Article))
#4 /var/www/cms/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/cms/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/cms/application/classes/Controller/Cms/Article.php:12
2013-04-19 21:37:09 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debug_Toolbar_Core' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-19 21:37:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 21:38:05 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debug_Toolbar_Core' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-19 21:38:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 21:38:29 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debug_Toolbar_Core' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-19 21:38:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 21:38:37 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debug_Toolbar_Core' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-19 21:38:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 21:39:21 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO), expecting '(' ~ APPPATH/classes/Controller/Cms/Article.php [ 11 ] in :
2013-04-19 21:39:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 21:51:23 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debug_Toolbar_Core' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-19 21:51:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 21:51:31 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debug_Toolbar_Core' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-19 21:51:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 21:51:49 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debug_Toolbar_Core' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-19 21:51:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 21:52:46 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debug_Toolbar_Core' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-19 21:52:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 21:52:48 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debug_Toolbar_Core' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-19 21:52:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 21:53:13 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debug_Toolbar_Core' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-19 21:53:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 21:57:56 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debug_Toolbar_Core' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-19 21:57:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 21:58:06 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debug_Toolbar_Core' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-19 21:58:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 21:58:16 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debug_Toolbar' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-19 21:58:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:00:29 --- EMERGENCY: ErrorException [ 2 ]: Wrong parameter count for var_dump() ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-19 22:00:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'Wrong parameter...', '/var/www/cms/ap...', 12, Array)
#1 /var/www/cms/application/classes/Controller/Cms/Article.php(12): var_dump()
#2 /var/www/cms/system/classes/Kohana/Controller.php(69): Controller_Cms_Article->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/cms/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms_Article))
#5 /var/www/cms/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/cms/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-04-19 22:00:30 --- EMERGENCY: ErrorException [ 2 ]: Wrong parameter count for var_dump() ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-19 22:00:30 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'Wrong parameter...', '/var/www/cms/ap...', 12, Array)
#1 /var/www/cms/application/classes/Controller/Cms/Article.php(12): var_dump()
#2 /var/www/cms/system/classes/Kohana/Controller.php(69): Controller_Cms_Article->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/cms/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms_Article))
#5 /var/www/cms/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/cms/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-04-19 22:01:11 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debug_Toolbar_Core' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-19 22:01:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:03:52 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debug_Toolbar_Core' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-19 22:03:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:03:54 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debug_Toolbar_Core' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-19 22:03:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:03:55 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debug_Toolbar_Core' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-19 22:03:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:04:34 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debugtoolbar' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-19 22:04:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:05:05 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debugtoolbar' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-19 22:05:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:05:06 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debugtoolbar' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-19 22:05:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:05:51 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debugtoolbar' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-19 22:05:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:05:53 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debugtoolbar' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-19 22:05:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:05:59 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debugtoolbar' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-19 22:05:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:06:40 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debug_Toolbar_Core' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-19 22:06:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:07:43 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debug_Toolbar_Core' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-19 22:07:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:10:49 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debug_Toolbar_Core' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-19 22:10:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:11:41 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debug_Toolbar_Core' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-19 22:11:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:16:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debug_Toolbar_Core' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-19 22:16:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:16:51 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debug_Toolbar_Core' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-19 22:16:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:16:52 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debug_Toolbar_Core' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-19 22:16:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:17:41 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debug_Toolbar_Core' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-19 22:17:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:17:42 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debug_Toolbar_Core' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-19 22:17:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:17:42 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debug_Toolbar_Core' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-19 22:17:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:17:42 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debug_Toolbar_Core' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-19 22:17:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:20:13 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debug_Toolbar_Core' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-19 22:20:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:20:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debug_Toolbar_Core' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-19 22:20:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:20:15 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debug_Toolbar_Core' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-19 22:20:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:20:15 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debug_Toolbar_Core' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-19 22:20:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:20:20 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debug_Toolbar_Core' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-19 22:20:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:20:48 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-19 22:20:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:22:06 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant Debugtoolbar - assumed 'Debugtoolbar' ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in /var/www/cms/application/classes/Controller/Cms/Article.php:12
2013-04-19 22:22:06 --- DEBUG: #0 /var/www/cms/application/classes/Controller/Cms/Article.php(12): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/cms/ap...', 12, Array)
#1 /var/www/cms/system/classes/Kohana/Controller.php(69): Controller_Cms_Article->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/cms/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms_Article))
#4 /var/www/cms/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/cms/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/cms/application/classes/Controller/Cms/Article.php:12
2013-04-19 22:22:39 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant Debugtoolbar - assumed 'Debugtoolbar' ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in /var/www/cms/application/classes/Controller/Cms/Article.php:12
2013-04-19 22:22:39 --- DEBUG: #0 /var/www/cms/application/classes/Controller/Cms/Article.php(12): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/cms/ap...', 12, Array)
#1 /var/www/cms/system/classes/Kohana/Controller.php(69): Controller_Cms_Article->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/cms/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms_Article))
#4 /var/www/cms/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/cms/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/cms/application/classes/Controller/Cms/Article.php:12
2013-04-19 22:22:42 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debugtoolbar' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-19 22:22:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:22:43 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debugtoolbar' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-19 22:22:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:22:44 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debugtoolbar' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-19 22:22:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:22:45 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debugtoolbar' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-19 22:22:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:22:45 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debugtoolbar' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 12 ] in :
2013-04-19 22:22:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:23:10 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debugtoolbar' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 16 ] in :
2013-04-19 22:23:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:25:49 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debugtoolbar' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 16 ] in :
2013-04-19 22:25:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:27:57 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debugtoolbar' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 16 ] in :
2013-04-19 22:27:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:32:20 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debugtoolbar' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 16 ] in :
2013-04-19 22:32:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:49:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debugtoolbar' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 16 ] in :
2013-04-19 22:49:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:49:48 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debugtoolbar' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 16 ] in :
2013-04-19 22:49:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:49:48 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debugtoolbar' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 16 ] in :
2013-04-19 22:49:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:49:49 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debugtoolbar' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 16 ] in :
2013-04-19 22:49:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:49:49 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debugtoolbar' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 16 ] in :
2013-04-19 22:49:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:49:49 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debugtoolbar' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 16 ] in :
2013-04-19 22:49:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:49:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debugtoolbar' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 16 ] in :
2013-04-19 22:49:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:49:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debugtoolbar' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 16 ] in :
2013-04-19 22:49:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:49:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debugtoolbar' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 16 ] in :
2013-04-19 22:49:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:49:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debugtoolbar' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 16 ] in :
2013-04-19 22:49:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:49:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debugtoolbar' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 16 ] in :
2013-04-19 22:49:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:49:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debugtoolbar' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 16 ] in :
2013-04-19 22:49:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:49:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debugtoolbar' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 16 ] in :
2013-04-19 22:49:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:54:12 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debugtoolbar' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 16 ] in :
2013-04-19 22:54:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:57:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debugtoolbar' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 16 ] in :
2013-04-19 22:57:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:57:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debugtoolbar' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 16 ] in :
2013-04-19 22:57:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:57:51 --- EMERGENCY: ErrorException [ 1 ]: Class 'Debugtoolbar' not found ~ APPPATH/classes/Controller/Cms/Article.php [ 16 ] in :
2013-04-19 22:57:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :