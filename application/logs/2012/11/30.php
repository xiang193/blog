<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-11-30 12:12:07 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Blog::$article_model ~ APPPATH\classes\Controller\blog.php [ 36 ] in E:\web\www\blog\application\classes\Controller\blog.php:36
2012-11-30 12:12:07 --- DEBUG: #0 E:\web\www\blog\application\classes\Controller\blog.php(36): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\web\www\blog...', 36, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(16): Controller_Blog->init()
#2 E:\web\www\blog\system\classes\Kohana\Controller.php(69): Controller_Blog->before()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\application\classes\Controller\blog.php:36
2012-11-30 12:12:11 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Blog::$article_model ~ APPPATH\classes\Controller\blog.php [ 36 ] in E:\web\www\blog\application\classes\Controller\blog.php:36
2012-11-30 12:12:11 --- DEBUG: #0 E:\web\www\blog\application\classes\Controller\blog.php(36): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\web\www\blog...', 36, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(16): Controller_Blog->init()
#2 E:\web\www\blog\system\classes\Kohana\Controller.php(69): Controller_Blog->before()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\application\classes\Controller\blog.php:36
2012-11-30 12:12:12 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Blog::$article_model ~ APPPATH\classes\Controller\blog.php [ 36 ] in E:\web\www\blog\application\classes\Controller\blog.php:36
2012-11-30 12:12:12 --- DEBUG: #0 E:\web\www\blog\application\classes\Controller\blog.php(36): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\web\www\blog...', 36, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(16): Controller_Blog->init()
#2 E:\web\www\blog\system\classes\Kohana\Controller.php(69): Controller_Blog->before()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\application\classes\Controller\blog.php:36
2012-11-30 12:12:40 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\views\main.php [ 3 ] in :
2012-11-30 12:12:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 12:22:17 --- CRITICAL: View_Exception [ 0 ]: The requested view welcome could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in E:\web\www\blog\system\classes\Kohana\View.php:137
2012-11-30 12:22:17 --- DEBUG: #0 E:\web\www\blog\system\classes\Kohana\View.php(137): Kohana_View->set_filename('welcome')
#1 E:\web\www\blog\application\classes\Controller\blog.php(56): Kohana_View->__construct('welcome')
#2 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\system\classes\Kohana\View.php:137
2012-11-30 12:27:13 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\views\main.php [ 3 ] in :
2012-11-30 12:27:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 12:27:49 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\views\main.php [ 3 ] in :
2012-11-30 12:27:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 12:27:49 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\views\main.php [ 3 ] in :
2012-11-30 12:27:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 12:27:50 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\views\main.php [ 3 ] in :
2012-11-30 12:27:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 12:27:50 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\views\main.php [ 3 ] in :
2012-11-30 12:27:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 12:27:50 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\views\main.php [ 3 ] in :
2012-11-30 12:27:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 12:27:50 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\views\main.php [ 3 ] in :
2012-11-30 12:27:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 12:27:51 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\views\main.php [ 3 ] in :
2012-11-30 12:27:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 12:28:08 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\views\main.php [ 3 ] in :
2012-11-30 12:28:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 12:28:08 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\views\main.php [ 3 ] in :
2012-11-30 12:28:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 12:28:08 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\views\main.php [ 3 ] in :
2012-11-30 12:28:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 12:28:29 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\views\main.php [ 3 ] in :
2012-11-30 12:28:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 12:28:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\views\main.php [ 3 ] in :
2012-11-30 12:28:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 20:37:49 --- CRITICAL: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH\classes\Controller\blog.php [ 75 ] in :
2012-11-30 20:37:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 20:38:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\views\main.php [ 3 ] in :
2012-11-30 20:38:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 20:42:08 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\views\main.php [ 3 ] in :
2012-11-30 20:42:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 21:00:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: blog_name ~ APPPATH\views\user.php [ 9 ] in E:\web\www\blog\application\views\user.php:9
2012-11-30 21:00:58 --- DEBUG: #0 E:\web\www\blog\application\views\user.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\web\www\blog...', 9, Array)
#1 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#2 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#3 E:\web\www\blog\application\views\main.php(3): Kohana_View->render()
#4 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#5 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#6 E:\web\www\blog\application\classes\Controller\blog.php(175): Kohana_View->render()
#7 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_user()
#8 [internal function]: Kohana_Controller->execute()
#9 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#13 {main} in E:\web\www\blog\application\views\user.php:9
2012-11-30 21:03:55 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::getdetail() ~ APPPATH\classes\Controller\blog.php [ 173 ] in :
2012-11-30 21:03:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 21:05:47 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::getdetail() ~ APPPATH\classes\Controller\blog.php [ 173 ] in :
2012-11-30 21:05:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 21:13:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: a ~ APPPATH\classes\Controller\blog.php [ 202 ] in E:\web\www\blog\application\classes\Controller\blog.php:202
2012-11-30 21:13:47 --- DEBUG: #0 E:\web\www\blog\application\classes\Controller\blog.php(202): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\web\www\blog...', 202, Array)
#1 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#7 {main} in E:\web\www\blog\application\classes\Controller\blog.php:202
2012-11-30 21:16:30 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\Controller\blog.php [ 201 ] in :
2012-11-30 21:16:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 21:16:46 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\Controller\blog.php [ 201 ] in :
2012-11-30 21:16:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 21:16:47 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\Controller\blog.php [ 201 ] in :
2012-11-30 21:16:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 21:28:41 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\Controller\blog.php [ 201 ] in :
2012-11-30 21:28:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 21:29:02 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::getdetail() ~ APPPATH\classes\Controller\blog.php [ 173 ] in :
2012-11-30 21:29:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 21:29:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: detail ~ APPPATH\classes\Controller\blog.php [ 176 ] in E:\web\www\blog\application\classes\Controller\blog.php:176
2012-11-30 21:29:15 --- DEBUG: #0 E:\web\www\blog\application\classes\Controller\blog.php(176): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\web\www\blog...', 176, Array)
#1 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_user()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#7 {main} in E:\web\www\blog\application\classes\Controller\blog.php:176
2012-11-30 21:29:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: detail ~ APPPATH\views\user.php [ 9 ] in E:\web\www\blog\application\views\user.php:9
2012-11-30 21:29:21 --- DEBUG: #0 E:\web\www\blog\application\views\user.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\web\www\blog...', 9, Array)
#1 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#2 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#3 E:\web\www\blog\application\views\main.php(3): Kohana_View->render()
#4 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#5 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#6 E:\web\www\blog\application\classes\Controller\blog.php(178): Kohana_View->render()
#7 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_user()
#8 [internal function]: Kohana_Controller->execute()
#9 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#13 {main} in E:\web\www\blog\application\views\user.php:9
2012-11-30 21:30:12 --- CRITICAL: View_Exception [ 0 ]: The requested view changpwd could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in E:\web\www\blog\system\classes\Kohana\View.php:137
2012-11-30 21:30:12 --- DEBUG: #0 E:\web\www\blog\system\classes\Kohana\View.php(137): Kohana_View->set_filename('changpwd')
#1 E:\web\www\blog\application\classes\Controller\blog.php(196): Kohana_View->__construct('changpwd')
#2 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_changepwd()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\system\classes\Kohana\View.php:137
2012-11-30 21:38:59 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ SYSPATH\classes\URL.php [ 13 ] in :
2012-11-30 21:38:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 21:41:08 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\URL.php [ 15 ] in E:\web\www\blog\system\classes\URL.php:15
2012-11-30 21:41:08 --- DEBUG: #0 E:\web\www\blog\system\classes\URL.php(15): Kohana_Core::error_handler(8, 'Array to string...', 'E:\web\www\blog...', 15, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(205): URL::redirect('blog/welcome')
#2 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\system\classes\URL.php:15
2012-11-30 21:41:09 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\URL.php [ 15 ] in E:\web\www\blog\system\classes\URL.php:15
2012-11-30 21:41:09 --- DEBUG: #0 E:\web\www\blog\system\classes\URL.php(15): Kohana_Core::error_handler(8, 'Array to string...', 'E:\web\www\blog...', 15, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(205): URL::redirect('blog/welcome')
#2 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\system\classes\URL.php:15
2012-11-30 21:41:09 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\URL.php [ 15 ] in E:\web\www\blog\system\classes\URL.php:15
2012-11-30 21:41:09 --- DEBUG: #0 E:\web\www\blog\system\classes\URL.php(15): Kohana_Core::error_handler(8, 'Array to string...', 'E:\web\www\blog...', 15, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(205): URL::redirect('blog/welcome')
#2 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\system\classes\URL.php:15
2012-11-30 21:42:23 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ SYSPATH\classes\URL.php [ 13 ] in :
2012-11-30 21:42:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 21:43:34 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ SYSPATH\classes\URL.php [ 14 ] in :
2012-11-30 21:43:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 21:43:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: lng ~ SYSPATH\classes\URL.php [ 16 ] in E:\web\www\blog\system\classes\URL.php:16
2012-11-30 21:43:40 --- DEBUG: #0 E:\web\www\blog\system\classes\URL.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\web\www\blog...', 16, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(205): URL::redirect('blog/welcome')
#2 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\system\classes\URL.php:16
2012-11-30 21:46:35 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ SYSPATH\classes\URL.php [ 14 ] in :
2012-11-30 21:46:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 21:47:06 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'die' (T_EXIT) ~ SYSPATH\classes\URL.php [ 14 ] in :
2012-11-30 21:47:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 21:47:06 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'die' (T_EXIT) ~ SYSPATH\classes\URL.php [ 14 ] in :
2012-11-30 21:47:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 21:47:06 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'die' (T_EXIT) ~ SYSPATH\classes\URL.php [ 14 ] in :
2012-11-30 21:47:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 21:47:21 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'params' ~ SYSPATH\classes\URL.php [ 13 ] in :
2012-11-30 21:47:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 21:47:55 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ SYSPATH\classes\URL.php [ 12 ] in :
2012-11-30 21:47:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 21:47:56 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ SYSPATH\classes\URL.php [ 12 ] in :
2012-11-30 21:47:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 21:47:56 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ SYSPATH\classes\URL.php [ 12 ] in :
2012-11-30 21:47:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 21:47:56 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ SYSPATH\classes\URL.php [ 12 ] in :
2012-11-30 21:47:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 21:48:44 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ SYSPATH\classes\URL.php [ 13 ] in :
2012-11-30 21:48:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 21:48:45 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ SYSPATH\classes\URL.php [ 13 ] in :
2012-11-30 21:48:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 21:48:45 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ SYSPATH\classes\URL.php [ 13 ] in :
2012-11-30 21:48:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 21:48:45 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ SYSPATH\classes\URL.php [ 13 ] in :
2012-11-30 21:48:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 21:48:57 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'params' ~ SYSPATH\classes\URL.php [ 13 ] in :
2012-11-30 21:48:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 21:48:58 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'params' ~ SYSPATH\classes\URL.php [ 13 ] in :
2012-11-30 21:48:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 21:48:58 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'params' ~ SYSPATH\classes\URL.php [ 13 ] in :
2012-11-30 21:48:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 21:48:58 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'params' ~ SYSPATH\classes\URL.php [ 13 ] in :
2012-11-30 21:48:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 21:48:58 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'params' ~ SYSPATH\classes\URL.php [ 13 ] in :
2012-11-30 21:48:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 21:48:59 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'params' ~ SYSPATH\classes\URL.php [ 13 ] in :
2012-11-30 21:48:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 21:48:59 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'params' ~ SYSPATH\classes\URL.php [ 13 ] in :
2012-11-30 21:48:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 21:49:04 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method URL::params() ~ SYSPATH\classes\URL.php [ 13 ] in :
2012-11-30 21:49:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 21:49:05 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method URL::params() ~ SYSPATH\classes\URL.php [ 13 ] in :
2012-11-30 21:49:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 21:49:05 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method URL::params() ~ SYSPATH\classes\URL.php [ 13 ] in :
2012-11-30 21:49:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-30 21:58:59 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_User::$input ~ APPPATH\classes\Model\user.php [ 32 ] in E:\web\www\blog\application\classes\Model\user.php:32
2012-11-30 21:58:59 --- DEBUG: #0 E:\web\www\blog\application\classes\Model\user.php(32): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\web\www\blog...', 32, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(206): Model_User->login()
#2 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\application\classes\Model\user.php:32
2012-11-30 22:02:30 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_User::$input ~ APPPATH\classes\Model\user.php [ 35 ] in E:\web\www\blog\application\classes\Model\user.php:35
2012-11-30 22:02:30 --- DEBUG: #0 E:\web\www\blog\application\classes\Model\user.php(35): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\web\www\blog...', 35, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(206): Model_User->login()
#2 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\application\classes\Model\user.php:35