<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-11-29 18:04:54 --- CRITICAL: View_Exception [ 0 ]: The requested view 1 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in E:\web\www\blog\system\classes\Kohana\View.php:339
2012-11-29 18:04:54 --- DEBUG: #0 E:\web\www\blog\system\classes\Kohana\View.php(339): Kohana_View->set_filename(true)
#1 E:\web\www\blog\application\classes\Controller\blog.php(34): Kohana_View->render(true)
#2 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\system\classes\Kohana\View.php:339
2012-11-29 18:15:16 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method HTML::stylesheet() ~ APPPATH\views\header.php [ 5 ] in :
2012-11-29 18:15:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-29 18:15:17 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method HTML::stylesheet() ~ APPPATH\views\header.php [ 5 ] in :
2012-11-29 18:15:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-29 18:15:17 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method HTML::stylesheet() ~ APPPATH\views\header.php [ 5 ] in :
2012-11-29 18:15:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-29 18:16:41 --- CRITICAL: ErrorException [ 2 ]: strpos() expects parameter 1 to be string, array given ~ SYSPATH\classes\Kohana\HTML.php [ 209 ] in :
2012-11-29 18:16:41 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'strpos() expect...', 'E:\web\www\blog...', 209, Array)
#1 E:\web\www\blog\system\classes\Kohana\HTML.php(209): strpos(Array, '://')
#2 E:\web\www\blog\application\views\header.php(14): Kohana_HTML::style(Array, Array, false)
#3 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#4 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#5 E:\web\www\blog\application\views\main.php(1): Kohana_View->render()
#6 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#7 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#8 E:\web\www\blog\application\classes\Controller\blog.php(38): Kohana_View->render()
#9 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#12 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#15 {main} in :
2012-11-29 18:20:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: uid ~ APPPATH\views\header.php [ 24 ] in E:\web\www\blog\application\views\header.php:24
2012-11-29 18:20:52 --- DEBUG: #0 E:\web\www\blog\application\views\header.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\web\www\blog...', 24, Array)
#1 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#2 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#3 E:\web\www\blog\application\views\main.php(1): Kohana_View->render()
#4 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#5 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#6 E:\web\www\blog\application\classes\Controller\blog.php(38): Kohana_View->render()
#7 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#13 {main} in E:\web\www\blog\application\views\header.php:24
2012-11-29 18:22:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: uid ~ APPPATH\views\header.php [ 24 ] in E:\web\www\blog\application\views\header.php:24
2012-11-29 18:22:26 --- DEBUG: #0 E:\web\www\blog\application\views\header.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\web\www\blog...', 24, Array)
#1 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#2 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#3 E:\web\www\blog\application\views\main.php(1): Kohana_View->render()
#4 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#5 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#6 E:\web\www\blog\application\classes\Controller\blog.php(38): Kohana_View->render()
#7 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#13 {main} in E:\web\www\blog\application\views\header.php:24
2012-11-29 18:22:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: uid ~ APPPATH\views\header.php [ 24 ] in E:\web\www\blog\application\views\header.php:24
2012-11-29 18:22:27 --- DEBUG: #0 E:\web\www\blog\application\views\header.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\web\www\blog...', 24, Array)
#1 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#2 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#3 E:\web\www\blog\application\views\main.php(1): Kohana_View->render()
#4 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#5 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#6 E:\web\www\blog\application\classes\Controller\blog.php(38): Kohana_View->render()
#7 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#13 {main} in E:\web\www\blog\application\views\header.php:24
2012-11-29 18:22:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: uid ~ APPPATH\views\header.php [ 24 ] in E:\web\www\blog\application\views\header.php:24
2012-11-29 18:22:27 --- DEBUG: #0 E:\web\www\blog\application\views\header.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\web\www\blog...', 24, Array)
#1 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#2 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#3 E:\web\www\blog\application\views\main.php(1): Kohana_View->render()
#4 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#5 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#6 E:\web\www\blog\application\classes\Controller\blog.php(38): Kohana_View->render()
#7 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#13 {main} in E:\web\www\blog\application\views\header.php:24
2012-11-29 18:22:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: uid ~ APPPATH\views\header.php [ 24 ] in E:\web\www\blog\application\views\header.php:24
2012-11-29 18:22:28 --- DEBUG: #0 E:\web\www\blog\application\views\header.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\web\www\blog...', 24, Array)
#1 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#2 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#3 E:\web\www\blog\application\views\main.php(1): Kohana_View->render()
#4 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#5 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#6 E:\web\www\blog\application\classes\Controller\blog.php(38): Kohana_View->render()
#7 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#13 {main} in E:\web\www\blog\application\views\header.php:24
2012-11-29 18:22:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: uid ~ APPPATH\views\header.php [ 24 ] in E:\web\www\blog\application\views\header.php:24
2012-11-29 18:22:28 --- DEBUG: #0 E:\web\www\blog\application\views\header.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\web\www\blog...', 24, Array)
#1 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#2 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#3 E:\web\www\blog\application\views\main.php(1): Kohana_View->render()
#4 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#5 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#6 E:\web\www\blog\application\classes\Controller\blog.php(38): Kohana_View->render()
#7 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#13 {main} in E:\web\www\blog\application\views\header.php:24
2012-11-29 18:22:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: uid ~ APPPATH\views\header.php [ 24 ] in E:\web\www\blog\application\views\header.php:24
2012-11-29 18:22:28 --- DEBUG: #0 E:\web\www\blog\application\views\header.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\web\www\blog...', 24, Array)
#1 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#2 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#3 E:\web\www\blog\application\views\main.php(1): Kohana_View->render()
#4 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#5 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#6 E:\web\www\blog\application\classes\Controller\blog.php(38): Kohana_View->render()
#7 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#13 {main} in E:\web\www\blog\application\views\header.php:24
2012-11-29 18:22:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: uid ~ APPPATH\views\header.php [ 24 ] in E:\web\www\blog\application\views\header.php:24
2012-11-29 18:22:28 --- DEBUG: #0 E:\web\www\blog\application\views\header.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\web\www\blog...', 24, Array)
#1 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#2 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#3 E:\web\www\blog\application\views\main.php(1): Kohana_View->render()
#4 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#5 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#6 E:\web\www\blog\application\classes\Controller\blog.php(38): Kohana_View->render()
#7 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#13 {main} in E:\web\www\blog\application\views\header.php:24
2012-11-29 18:22:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: uid ~ APPPATH\views\header.php [ 24 ] in E:\web\www\blog\application\views\header.php:24
2012-11-29 18:22:29 --- DEBUG: #0 E:\web\www\blog\application\views\header.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\web\www\blog...', 24, Array)
#1 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#2 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#3 E:\web\www\blog\application\views\main.php(1): Kohana_View->render()
#4 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#5 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#6 E:\web\www\blog\application\classes\Controller\blog.php(38): Kohana_View->render()
#7 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#13 {main} in E:\web\www\blog\application\views\header.php:24
2012-11-29 18:22:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: uid ~ APPPATH\views\header.php [ 24 ] in E:\web\www\blog\application\views\header.php:24
2012-11-29 18:22:29 --- DEBUG: #0 E:\web\www\blog\application\views\header.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\web\www\blog...', 24, Array)
#1 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#2 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#3 E:\web\www\blog\application\views\main.php(1): Kohana_View->render()
#4 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#5 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#6 E:\web\www\blog\application\classes\Controller\blog.php(38): Kohana_View->render()
#7 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#13 {main} in E:\web\www\blog\application\views\header.php:24
2012-11-29 18:22:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: uid ~ APPPATH\views\header.php [ 24 ] in E:\web\www\blog\application\views\header.php:24
2012-11-29 18:22:40 --- DEBUG: #0 E:\web\www\blog\application\views\header.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\web\www\blog...', 24, Array)
#1 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#2 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#3 E:\web\www\blog\application\views\main.php(1): Kohana_View->render()
#4 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#5 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#6 E:\web\www\blog\application\classes\Controller\blog.php(38): Kohana_View->render()
#7 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#13 {main} in E:\web\www\blog\application\views\header.php:24
2012-11-29 18:22:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: uid ~ APPPATH\views\header.php [ 24 ] in E:\web\www\blog\application\views\header.php:24
2012-11-29 18:22:41 --- DEBUG: #0 E:\web\www\blog\application\views\header.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\web\www\blog...', 24, Array)
#1 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#2 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#3 E:\web\www\blog\application\views\main.php(1): Kohana_View->render()
#4 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#5 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#6 E:\web\www\blog\application\classes\Controller\blog.php(38): Kohana_View->render()
#7 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#13 {main} in E:\web\www\blog\application\views\header.php:24
2012-11-29 18:22:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: uid ~ APPPATH\views\header.php [ 24 ] in E:\web\www\blog\application\views\header.php:24
2012-11-29 18:22:41 --- DEBUG: #0 E:\web\www\blog\application\views\header.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\web\www\blog...', 24, Array)
#1 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#2 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#3 E:\web\www\blog\application\views\main.php(1): Kohana_View->render()
#4 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#5 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#6 E:\web\www\blog\application\classes\Controller\blog.php(38): Kohana_View->render()
#7 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#13 {main} in E:\web\www\blog\application\views\header.php:24
2012-11-29 18:22:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: uid ~ APPPATH\views\header.php [ 24 ] in E:\web\www\blog\application\views\header.php:24
2012-11-29 18:22:41 --- DEBUG: #0 E:\web\www\blog\application\views\header.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\web\www\blog...', 24, Array)
#1 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#2 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#3 E:\web\www\blog\application\views\main.php(1): Kohana_View->render()
#4 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#5 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#6 E:\web\www\blog\application\classes\Controller\blog.php(38): Kohana_View->render()
#7 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#13 {main} in E:\web\www\blog\application\views\header.php:24
2012-11-29 18:22:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: uid ~ APPPATH\views\header.php [ 24 ] in E:\web\www\blog\application\views\header.php:24
2012-11-29 18:22:41 --- DEBUG: #0 E:\web\www\blog\application\views\header.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\web\www\blog...', 24, Array)
#1 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#2 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#3 E:\web\www\blog\application\views\main.php(1): Kohana_View->render()
#4 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#5 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#6 E:\web\www\blog\application\classes\Controller\blog.php(38): Kohana_View->render()
#7 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#13 {main} in E:\web\www\blog\application\views\header.php:24
2012-11-29 18:22:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: uid ~ APPPATH\views\header.php [ 24 ] in E:\web\www\blog\application\views\header.php:24
2012-11-29 18:22:41 --- DEBUG: #0 E:\web\www\blog\application\views\header.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\web\www\blog...', 24, Array)
#1 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#2 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#3 E:\web\www\blog\application\views\main.php(1): Kohana_View->render()
#4 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#5 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#6 E:\web\www\blog\application\classes\Controller\blog.php(38): Kohana_View->render()
#7 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#13 {main} in E:\web\www\blog\application\views\header.php:24
2012-11-29 18:22:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: uid ~ APPPATH\views\header.php [ 24 ] in E:\web\www\blog\application\views\header.php:24
2012-11-29 18:22:42 --- DEBUG: #0 E:\web\www\blog\application\views\header.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\web\www\blog...', 24, Array)
#1 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#2 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#3 E:\web\www\blog\application\views\main.php(1): Kohana_View->render()
#4 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#5 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#6 E:\web\www\blog\application\classes\Controller\blog.php(38): Kohana_View->render()
#7 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#13 {main} in E:\web\www\blog\application\views\header.php:24
2012-11-29 18:22:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: uid ~ APPPATH\views\header.php [ 24 ] in E:\web\www\blog\application\views\header.php:24
2012-11-29 18:22:42 --- DEBUG: #0 E:\web\www\blog\application\views\header.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\web\www\blog...', 24, Array)
#1 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#2 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#3 E:\web\www\blog\application\views\main.php(1): Kohana_View->render()
#4 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#5 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#6 E:\web\www\blog\application\classes\Controller\blog.php(38): Kohana_View->render()
#7 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#13 {main} in E:\web\www\blog\application\views\header.php:24
2012-11-29 18:27:28 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\slider.php [ 13 ] in E:\web\www\blog\application\views\slider.php:13
2012-11-29 18:27:28 --- DEBUG: #0 E:\web\www\blog\application\views\slider.php(13): Kohana_Core::error_handler(2, 'Invalid argumen...', 'E:\web\www\blog...', 13, Array)
#1 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#2 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#3 E:\web\www\blog\application\views\main.php(2): Kohana_View->render()
#4 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#5 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#6 E:\web\www\blog\application\classes\Controller\blog.php(41): Kohana_View->render()
#7 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#13 {main} in E:\web\www\blog\application\views\slider.php:13
2012-11-29 18:31:26 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Blog::$right_view ~ APPPATH\classes\Controller\blog.php [ 29 ] in E:\web\www\blog\application\classes\Controller\blog.php:29
2012-11-29 18:31:26 --- DEBUG: #0 E:\web\www\blog\application\classes\Controller\blog.php(29): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\web\www\blog...', 29, Array)
#1 E:\web\www\blog\system\classes\Kohana\Controller.php(69): Controller_Blog->before()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#7 {main} in E:\web\www\blog\application\classes\Controller\blog.php:29
2012-11-29 18:31:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: value ~ APPPATH\views\slider.php [ 15 ] in E:\web\www\blog\application\views\slider.php:15
2012-11-29 18:31:53 --- DEBUG: #0 E:\web\www\blog\application\views\slider.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\web\www\blog...', 15, Array)
#1 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#2 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#3 E:\web\www\blog\application\views\main.php(2): Kohana_View->render()
#4 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#5 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#6 E:\web\www\blog\application\classes\Controller\blog.php(41): Kohana_View->render()
#7 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#13 {main} in E:\web\www\blog\application\views\slider.php:15
2012-11-29 18:32:07 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\views\main.php [ 3 ] in :
2012-11-29 18:32:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :