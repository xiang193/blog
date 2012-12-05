<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-12-01 12:36:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'user_model' (T_STRING), expecting variable (T_VARIABLE) ~ APPPATH\classes\Controller\user.php [ 4 ] in :
2012-12-01 12:36:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-01 12:39:55 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'user_model' (T_STRING), expecting variable (T_VARIABLE) ~ APPPATH\classes\Controller\user.php [ 4 ] in :
2012-12-01 12:39:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-01 12:52:06 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\blog.php [ 18 ] in E:\web\www\blog\application\classes\Controller\blog.php:18
2012-12-01 12:52:06 --- DEBUG: #0 E:\web\www\blog\application\classes\Controller\blog.php(18): Kohana_Core::error_handler(8, 'Array to string...', 'E:\web\www\blog...', 18, Array)
#1 E:\web\www\blog\system\classes\Kohana\Controller.php(69): Controller_Blog->before()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#7 {main} in E:\web\www\blog\application\classes\Controller\blog.php:18
2012-12-01 13:00:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO), expecting identifier (T_STRING) ~ APPPATH\classes\Controller\blog.php [ 18 ] in :
2012-12-01 13:00:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-01 13:00:48 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO), expecting identifier (T_STRING) ~ APPPATH\classes\Controller\blog.php [ 18 ] in :
2012-12-01 13:00:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-01 13:09:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: base_url ~ APPPATH\views\header.php [ 17 ] in E:\web\www\blog\application\views\header.php:17
2012-12-01 13:09:27 --- DEBUG: #0 E:\web\www\blog\application\views\header.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\web\www\blog...', 17, Array)
#1 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#2 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#3 E:\web\www\blog\application\views\main.php(1): Kohana_View->render()
#4 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#5 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#6 E:\web\www\blog\application\classes\Controller\blog.php(59): Kohana_View->render()
#7 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#13 {main} in E:\web\www\blog\application\views\header.php:17
2012-12-01 19:07:24 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method DB::where() ~ APPPATH\classes\Model\user.php [ 36 ] in :
2012-12-01 19:07:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-01 19:19:14 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_User::$request ~ APPPATH\classes\Model\user.php [ 32 ] in E:\web\www\blog\application\classes\Model\user.php:32
2012-12-01 19:19:14 --- DEBUG: #0 E:\web\www\blog\application\classes\Model\user.php(32): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\web\www\blog...', 32, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(208): Model_User->login()
#2 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\application\classes\Model\user.php:32
2012-12-01 19:30:23 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Kohana_Cookie::get(), called in E:\web\www\blog\application\classes\Model\user.php on line 29 and defined ~ SYSPATH\classes\Kohana\Cookie.php [ 55 ] in E:\web\www\blog\system\classes\Kohana\Cookie.php:55
2012-12-01 19:30:23 --- DEBUG: #0 E:\web\www\blog\system\classes\Kohana\Cookie.php(55): Kohana_Core::error_handler(2, 'Missing argumen...', 'E:\web\www\blog...', 55, Array)
#1 E:\web\www\blog\application\classes\Model\user.php(29): Kohana_Cookie::get()
#2 E:\web\www\blog\application\classes\Model\user.php(11): Model_User->init()
#3 E:\web\www\blog\application\classes\Controller\blog.php(33): Model_User->__construct()
#4 E:\web\www\blog\application\classes\Controller\blog.php(20): Controller_Blog->init()
#5 E:\web\www\blog\system\classes\Kohana\Controller.php(69): Controller_Blog->before()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#8 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#11 {main} in E:\web\www\blog\system\classes\Kohana\Cookie.php:55
2012-12-01 19:34:14 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'salt' ~ APPPATH\classes\Model\user.php [ 29 ] in :
2012-12-01 19:34:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-01 19:38:34 --- CRITICAL: ErrorException [ 8 ]: Undefined index: uid ~ APPPATH\classes\Model\user.php [ 43 ] in E:\web\www\blog\application\classes\Model\user.php:43
2012-12-01 19:38:34 --- DEBUG: #0 E:\web\www\blog\application\classes\Model\user.php(43): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\web\www\blog...', 43, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(211): Model_User->login('xiang', '21232f297a57a5a...')
#2 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\application\classes\Model\user.php:43
2012-12-01 20:15:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Model\user.php [ 41 ] in :
2012-12-01 20:15:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-01 20:15:20 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::as_array() ~ APPPATH\classes\Model\user.php [ 40 ] in :
2012-12-01 20:15:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-01 20:22:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Model\user.php [ 40 ] in :
2012-12-01 20:22:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-01 20:24:33 --- CRITICAL: ErrorException [ 8 ]: Undefined index: password ~ APPPATH\classes\Model\user.php [ 43 ] in E:\web\www\blog\application\classes\Model\user.php:43
2012-12-01 20:24:33 --- DEBUG: #0 E:\web\www\blog\application\classes\Model\user.php(43): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\web\www\blog...', 43, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(211): Model_User->login('admin', '21232f297a57a5a...')
#2 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\application\classes\Model\user.php:43
2012-12-01 20:26:38 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_assoc() ~ APPPATH\classes\Model\user.php [ 40 ] in :
2012-12-01 20:26:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-01 20:28:10 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in E:\web\www\blog\system\classes\Kohana\Cookie.php:115
2012-12-01 20:28:10 --- DEBUG: #0 E:\web\www\blog\system\classes\Kohana\Cookie.php(115): Kohana_Cookie::salt('login', true)
#1 E:\web\www\blog\application\classes\Model\user.php(46): Kohana_Cookie::set('login', true)
#2 E:\web\www\blog\application\classes\Controller\blog.php(211): Model_User->login('admin', '21232f297a57a5a...')
#3 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#6 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#9 {main} in E:\web\www\blog\system\classes\Kohana\Cookie.php:115
2012-12-01 20:28:42 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in E:\web\www\blog\system\classes\Kohana\Cookie.php:115
2012-12-01 20:28:42 --- DEBUG: #0 E:\web\www\blog\system\classes\Kohana\Cookie.php(115): Kohana_Cookie::salt('uid', '1')
#1 E:\web\www\blog\application\classes\Model\user.php(46): Kohana_Cookie::set('uid', '1')
#2 E:\web\www\blog\application\classes\Controller\blog.php(211): Model_User->login('admin', '21232f297a57a5a...')
#3 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#6 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#9 {main} in E:\web\www\blog\system\classes\Kohana\Cookie.php:115
2012-12-01 20:28:44 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in E:\web\www\blog\system\classes\Kohana\Cookie.php:115
2012-12-01 20:28:44 --- DEBUG: #0 E:\web\www\blog\system\classes\Kohana\Cookie.php(115): Kohana_Cookie::salt('uid', '1')
#1 E:\web\www\blog\application\classes\Model\user.php(46): Kohana_Cookie::set('uid', '1')
#2 E:\web\www\blog\application\classes\Controller\blog.php(211): Model_User->login('admin', '21232f297a57a5a...')
#3 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#6 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#9 {main} in E:\web\www\blog\system\classes\Kohana\Cookie.php:115
2012-12-01 20:29:38 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in E:\web\www\blog\system\classes\Kohana\Cookie.php:115
2012-12-01 20:29:38 --- DEBUG: #0 E:\web\www\blog\system\classes\Kohana\Cookie.php(115): Kohana_Cookie::salt('uid', '1')
#1 E:\web\www\blog\application\classes\Model\user.php(47): Kohana_Cookie::set('uid', '1')
#2 E:\web\www\blog\application\classes\Controller\blog.php(211): Model_User->login('admin', '21232f297a57a5a...')
#3 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#6 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#9 {main} in E:\web\www\blog\system\classes\Kohana\Cookie.php:115
2012-12-01 20:32:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: uid ~ APPPATH\classes\Model\user.php [ 47 ] in E:\web\www\blog\application\classes\Model\user.php:47
2012-12-01 20:32:41 --- DEBUG: #0 E:\web\www\blog\application\classes\Model\user.php(47): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\web\www\blog...', 47, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(211): Model_User->login('admin', '21232f297a57a5a...')
#2 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\application\classes\Model\user.php:47
2012-12-01 20:38:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: uid ~ APPPATH\classes\Model\user.php [ 47 ] in E:\web\www\blog\application\classes\Model\user.php:47
2012-12-01 20:38:35 --- DEBUG: #0 E:\web\www\blog\application\classes\Model\user.php(47): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\web\www\blog...', 47, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(211): Model_User->login('admin', '21232f297a57a5a...')
#2 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\application\classes\Model\user.php:47
2012-12-01 20:38:37 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: uid ~ APPPATH\classes\Model\user.php [ 47 ] in E:\web\www\blog\application\classes\Model\user.php:47
2012-12-01 20:38:37 --- DEBUG: #0 E:\web\www\blog\application\classes\Model\user.php(47): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\web\www\blog...', 47, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(211): Model_User->login('admin', '21232f297a57a5a...')
#2 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\application\classes\Model\user.php:47
2012-12-01 20:38:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: uid ~ APPPATH\classes\Model\user.php [ 47 ] in E:\web\www\blog\application\classes\Model\user.php:47
2012-12-01 20:38:39 --- DEBUG: #0 E:\web\www\blog\application\classes\Model\user.php(47): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\web\www\blog...', 47, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(211): Model_User->login('admin', '21232f297a57a5a...')
#2 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\application\classes\Model\user.php:47
2012-12-01 20:38:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: uid ~ APPPATH\classes\Model\user.php [ 47 ] in E:\web\www\blog\application\classes\Model\user.php:47
2012-12-01 20:38:45 --- DEBUG: #0 E:\web\www\blog\application\classes\Model\user.php(47): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\web\www\blog...', 47, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(211): Model_User->login('admin', '21232f297a57a5a...')
#2 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\application\classes\Model\user.php:47
2012-12-01 20:38:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: uid ~ APPPATH\classes\Model\user.php [ 47 ] in E:\web\www\blog\application\classes\Model\user.php:47
2012-12-01 20:38:48 --- DEBUG: #0 E:\web\www\blog\application\classes\Model\user.php(47): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\web\www\blog...', 47, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(211): Model_User->login('admin', '21232f297a57a5a...')
#2 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\application\classes\Model\user.php:47
2012-12-01 20:38:50 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\user.php [ 42 ] in E:\web\www\blog\application\classes\Model\user.php:42
2012-12-01 20:38:50 --- DEBUG: #0 E:\web\www\blog\application\classes\Model\user.php(42): Kohana_Core::error_handler(8, 'Undefined offse...', 'E:\web\www\blog...', 42, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(211): Model_User->login(NULL, 'd41d8cd98f00b20...')
#2 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\application\classes\Model\user.php:42
2012-12-01 20:39:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Model\user.php [ 42 ] in :
2012-12-01 20:39:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-01 20:39:34 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\user.php [ 43 ] in E:\web\www\blog\application\classes\Model\user.php:43
2012-12-01 20:39:34 --- DEBUG: #0 E:\web\www\blog\application\classes\Model\user.php(43): Kohana_Core::error_handler(8, 'Undefined offse...', 'E:\web\www\blog...', 43, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(211): Model_User->login(NULL, 'd41d8cd98f00b20...')
#2 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\application\classes\Model\user.php:43
2012-12-01 20:40:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: uid ~ APPPATH\classes\Model\user.php [ 47 ] in E:\web\www\blog\application\classes\Model\user.php:47
2012-12-01 20:40:19 --- DEBUG: #0 E:\web\www\blog\application\classes\Model\user.php(47): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\web\www\blog...', 47, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(211): Model_User->login('admin', '21232f297a57a5a...')
#2 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\application\classes\Model\user.php:47
2012-12-01 21:52:37 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant user_login - assumed 'user_login' ~ APPPATH\classes\Controller\blog.php [ 227 ] in E:\web\www\blog\application\classes\Controller\blog.php:227
2012-12-01 21:52:37 --- DEBUG: #0 E:\web\www\blog\application\classes\Controller\blog.php(227): Kohana_Core::error_handler(8, 'Use of undefine...', 'E:\web\www\blog...', 227, Array)
#1 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_logout()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#7 {main} in E:\web\www\blog\application\classes\Controller\blog.php:227
2012-12-01 21:56:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: _user ~ APPPATH\classes\Model\user.php [ 60 ] in E:\web\www\blog\application\classes\Model\user.php:60
2012-12-01 21:56:04 --- DEBUG: #0 E:\web\www\blog\application\classes\Model\user.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\web\www\blog...', 60, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(229): Model_User->logout()
#2 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_logout()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\application\classes\Model\user.php:60
2012-12-01 21:58:37 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\views\main.php [ 1 ] in :
2012-12-01 21:58:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-01 22:06:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: uid ~ APPPATH\views\header.php [ 24 ] in E:\web\www\blog\application\views\header.php:24
2012-12-01 22:06:38 --- DEBUG: #0 E:\web\www\blog\application\views\header.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\web\www\blog...', 24, Array)
#1 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#2 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#3 E:\web\www\blog\application\views\main.php(1): Kohana_View->render()
#4 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#5 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#6 E:\web\www\blog\application\classes\Controller\blog.php(34): Kohana_View->render()
#7 E:\web\www\blog\system\classes\Kohana\Controller.php(87): Controller_Blog->after()
#8 [internal function]: Kohana_Controller->execute()
#9 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#13 {main} in E:\web\www\blog\application\views\header.php:24
2012-12-01 22:07:58 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\views\main.php [ 1 ] in :
2012-12-01 22:07:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-01 22:08:06 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\views\main.php [ 1 ] in :
2012-12-01 22:08:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-01 23:40:57 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\classes\Model\user.php [ 75 ] in :
2012-12-01 23:40:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-01 23:42:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\classes\Model\user.php [ 75 ] in :
2012-12-01 23:42:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-01 23:42:43 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\user.php [ 81 ] in :
2012-12-01 23:42:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :