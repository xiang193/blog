<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-12-02 00:45:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\blog.php [ 225 ] in :
2012-12-02 00:45:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-02 00:45:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\user.php [ 121 ] in :
2012-12-02 00:45:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-02 00:48:03 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_User::$table ~ APPPATH\classes\Model\user.php [ 114 ] in E:\web\www\blog\application\classes\Model\user.php:114
2012-12-02 00:48:03 --- DEBUG: #0 E:\web\www\blog\application\classes\Model\user.php(114): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\web\www\blog...', 114, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(218): Model_User->changePwd('21232f297a57a5a...', 'e10adc3949ba59a...', 'e10adc3949ba59a...')
#2 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_changepwd()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\application\classes\Model\user.php:114
2012-12-02 00:50:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: tip ~ APPPATH\views\login.php [ 12 ] in E:\web\www\blog\application\views\login.php:12
2012-12-02 00:50:23 --- DEBUG: #0 E:\web\www\blog\application\views\login.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\web\www\blog...', 12, Array)
#1 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#2 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#3 E:\web\www\blog\application\views\main.php(3): Kohana_View->render()
#4 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#5 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#6 E:\web\www\blog\application\classes\Controller\blog.php(34): Kohana_View->render()
#7 E:\web\www\blog\system\classes\Kohana\Controller.php(87): Controller_Blog->after()
#8 [internal function]: Kohana_Controller->execute()
#9 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#13 {main} in E:\web\www\blog\application\views\login.php:12
2012-12-02 00:50:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: tip ~ APPPATH\views\login.php [ 12 ] in E:\web\www\blog\application\views\login.php:12
2012-12-02 00:50:55 --- DEBUG: #0 E:\web\www\blog\application\views\login.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\web\www\blog...', 12, Array)
#1 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#2 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#3 E:\web\www\blog\application\views\main.php(3): Kohana_View->render()
#4 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#5 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#6 E:\web\www\blog\application\classes\Controller\blog.php(34): Kohana_View->render()
#7 E:\web\www\blog\system\classes\Kohana\Controller.php(87): Controller_Blog->after()
#8 [internal function]: Kohana_Controller->execute()
#9 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#13 {main} in E:\web\www\blog\application\views\login.php:12
2012-12-02 02:02:17 --- CRITICAL: ErrorException [ 1 ]: Call to a member function guestList() on a non-object ~ APPPATH\classes\Controller\blog.php [ 149 ] in :
2012-12-02 02:02:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-02 02:02:41 --- CRITICAL: ErrorException [ 1 ]: Call to a member function wordList() on a non-object ~ APPPATH\classes\Controller\blog.php [ 149 ] in :
2012-12-02 02:02:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-02 02:03:29 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::form() ~ APPPATH\classes\Model\guest.php [ 37 ] in :
2012-12-02 02:03:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-02 02:08:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\classes\Model\guest.php [ 16 ] in E:\web\www\blog\application\classes\Model\guest.php:16
2012-12-02 02:08:04 --- DEBUG: #0 E:\web\www\blog\application\classes\Model\guest.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\web\www\blog...', 16, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(172): Model_Guest->wordAdd('xiang19891018@1...', 'for test')
#2 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_guestadd()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\application\classes\Model\guest.php:16
2012-12-02 02:08:31 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Query_Builder_Insert::values() must be of the type array, string given, called in E:\web\www\blog\application\classes\Model\guest.php on line 19 and defined ~ MODPATH\database\classes\Kohana\Database\Query\Builder\Insert.php [ 80 ] in E:\web\www\blog\modules\database\classes\Kohana\Database\Query\Builder\Insert.php:80
2012-12-02 02:08:31 --- DEBUG: #0 E:\web\www\blog\modules\database\classes\Kohana\Database\Query\Builder\Insert.php(80): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'E:\web\www\blog...', 80, Array)
#1 E:\web\www\blog\application\classes\Model\guest.php(19): Kohana_Database_Query_Builder_Insert->values('xiang19891018@1...', 'for test', 1354385311)
#2 E:\web\www\blog\application\classes\Controller\blog.php(172): Model_Guest->wordAdd('xiang19891018@1...', 'for test')
#3 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_guestadd()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#6 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#9 {main} in E:\web\www\blog\modules\database\classes\Kohana\Database\Query\Builder\Insert.php:80
2012-12-02 02:08:54 --- CRITICAL: ErrorException [ 8 ]: Undefined index: email ~ APPPATH\views\guest.php [ 6 ] in E:\web\www\blog\application\views\guest.php:6
2012-12-02 02:08:54 --- DEBUG: #0 E:\web\www\blog\application\views\guest.php(6): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\web\www\blog...', 6, Array)
#1 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#2 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#3 E:\web\www\blog\application\views\main.php(3): Kohana_View->render()
#4 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#5 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#6 E:\web\www\blog\application\classes\Controller\blog.php(34): Kohana_View->render()
#7 E:\web\www\blog\system\classes\Kohana\Controller.php(87): Controller_Blog->after()
#8 [internal function]: Kohana_Controller->execute()
#9 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#13 {main} in E:\web\www\blog\application\views\guest.php:6
2012-12-02 02:16:58 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH\classes\Controller\blog.php [ 159 ] in :
2012-12-02 02:16:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-02 02:36:14 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Query_Builder_Insert::values() must be of the type array, null given, called in E:\web\www\blog\application\classes\Model\blog.php on line 18 and defined ~ MODPATH\database\classes\Kohana\Database\Query\Builder\Insert.php [ 80 ] in E:\web\www\blog\modules\database\classes\Kohana\Database\Query\Builder\Insert.php:80
2012-12-02 02:36:14 --- DEBUG: #0 E:\web\www\blog\modules\database\classes\Kohana\Database\Query\Builder\Insert.php(80): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'E:\web\www\blog...', 80, Array)
#1 E:\web\www\blog\application\classes\Model\blog.php(18): Kohana_Database_Query_Builder_Insert->values(NULL)
#2 E:\web\www\blog\application\classes\Controller\blog.php(105): Model_Blog->article_add(NULL, NULL)
#3 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#6 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#9 {main} in E:\web\www\blog\modules\database\classes\Kohana\Database\Query\Builder\Insert.php:80
2012-12-02 02:52:02 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_Blog::$_user ~ APPPATH\classes\Model\blog.php [ 17 ] in E:\web\www\blog\application\classes\Model\blog.php:17
2012-12-02 02:52:02 --- DEBUG: #0 E:\web\www\blog\application\classes\Model\blog.php(17): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\web\www\blog...', 17, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(105): Model_Blog->article_add(NULL, NULL)
#2 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\application\classes\Model\blog.php:17
2012-12-02 02:53:21 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'tid' in 'field list' [ SELECT `tid`, `title`, `content`, `COUNT(*) count` FROM `article` ORDER BY `time` DESC LIMIT 10 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-12-02 02:53:21 --- DEBUG: #0 E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `tid`, `...', false, Array)
#1 E:\web\www\blog\application\classes\Model\blog.php(32): Kohana_Database_Query->execute()
#2 E:\web\www\blog\application\classes\Controller\blog.php(27): Model_Blog->article_list()
#3 E:\web\www\blog\system\classes\Kohana\Controller.php(87): Controller_Blog->after()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#6 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#9 {main} in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-12-02 02:53:43 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'tid' in 'field list' [ SELECT `tid`, `title`, `content`, `COUNT(*)` FROM `article` ORDER BY `time` DESC LIMIT 10 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-12-02 02:53:43 --- DEBUG: #0 E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `tid`, `...', false, Array)
#1 E:\web\www\blog\application\classes\Model\blog.php(32): Kohana_Database_Query->execute()
#2 E:\web\www\blog\application\classes\Controller\blog.php(27): Model_Blog->article_list()
#3 E:\web\www\blog\system\classes\Kohana\Controller.php(87): Controller_Blog->after()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#6 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#9 {main} in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-12-02 02:53:51 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'tid' in 'field list' [ SELECT `tid`, `title`, `content` FROM `article` ORDER BY `time` DESC LIMIT 10 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-12-02 02:53:51 --- DEBUG: #0 E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `tid`, `...', false, Array)
#1 E:\web\www\blog\application\classes\Model\blog.php(32): Kohana_Database_Query->execute()
#2 E:\web\www\blog\application\classes\Controller\blog.php(27): Model_Blog->article_list()
#3 E:\web\www\blog\system\classes\Kohana\Controller.php(87): Controller_Blog->after()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#6 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#9 {main} in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-12-02 02:54:38 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_Blog::$uid ~ APPPATH\classes\Model\blog.php [ 20 ] in E:\web\www\blog\application\classes\Model\blog.php:20
2012-12-02 02:54:38 --- DEBUG: #0 E:\web\www\blog\application\classes\Model\blog.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\web\www\blog...', 20, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(105): Model_Blog->article_add('test', 'for test')
#2 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\application\classes\Model\blog.php:20
2012-12-02 02:56:01 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_Blog::$uid ~ APPPATH\classes\Model\blog.php [ 20 ] in E:\web\www\blog\application\classes\Model\blog.php:20
2012-12-02 02:56:01 --- DEBUG: #0 E:\web\www\blog\application\classes\Model\blog.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\web\www\blog...', 20, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(105): Model_Blog->article_add('1', 'test', 'for test')
#2 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\application\classes\Model\blog.php:20
2012-12-02 02:56:14 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'uid' in 'field list' [ INSERT INTO `article` (`uid`, `title`, `content`, `time`) VALUES ('1', 'test', 'for test', 1354388174) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-12-02 02:56:14 --- DEBUG: #0 E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ar...', false, Array)
#1 E:\web\www\blog\application\classes\Model\blog.php(21): Kohana_Database_Query->execute()
#2 E:\web\www\blog\application\classes\Controller\blog.php(105): Model_Blog->article_add('1', 'test', 'for test')
#3 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#6 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#9 {main} in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-12-02 02:58:17 --- CRITICAL: Database_Exception [ 1364 ]: Field 'view' doesn't have a default value [ INSERT INTO `article` (`title`, `content`, `time`) VALUES ('1', 'test', 1354388297) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-12-02 02:58:17 --- DEBUG: #0 E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ar...', false, Array)
#1 E:\web\www\blog\application\classes\Model\blog.php(21): Kohana_Database_Query->execute()
#2 E:\web\www\blog\application\classes\Controller\blog.php(105): Model_Blog->article_add('1', 'test', 'for test')
#3 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#6 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#9 {main} in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-12-02 02:58:28 --- CRITICAL: Database_Exception [ 1364 ]: Field 'view' doesn't have a default value [ INSERT INTO `article` (`title`, `content`, `time`) VALUES ('test', 'for test', 1354388308) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-12-02 02:58:28 --- DEBUG: #0 E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ar...', false, Array)
#1 E:\web\www\blog\application\classes\Model\blog.php(21): Kohana_Database_Query->execute()
#2 E:\web\www\blog\application\classes\Controller\blog.php(105): Model_Blog->article_add('test', 'for test')
#3 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#6 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#9 {main} in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-12-02 02:59:49 --- CRITICAL: ErrorException [ 1 ]: Class 'blog' not found ~ APPPATH\views\list.php [ 51 ] in :
2012-12-02 02:59:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-02 03:02:36 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\views\list.php [ 3 ] in E:\web\www\blog\application\views\list.php:3
2012-12-02 03:02:36 --- DEBUG: #0 E:\web\www\blog\application\views\list.php(3): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\web\www\blog...', 3, Array)
#1 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#2 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#3 E:\web\www\blog\application\views\main.php(3): Kohana_View->render()
#4 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#5 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#6 E:\web\www\blog\application\classes\Controller\blog.php(35): Kohana_View->render()
#7 E:\web\www\blog\system\classes\Kohana\Controller.php(87): Controller_Blog->after()
#8 [internal function]: Kohana_Controller->execute()
#9 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#13 {main} in E:\web\www\blog\application\views\list.php:3
2012-12-02 03:03:58 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\views\list.php [ 3 ] in E:\web\www\blog\application\views\list.php:3
2012-12-02 03:03:58 --- DEBUG: #0 E:\web\www\blog\application\views\list.php(3): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\web\www\blog...', 3, Array)
#1 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#2 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#3 E:\web\www\blog\application\views\main.php(3): Kohana_View->render()
#4 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#5 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#6 E:\web\www\blog\application\classes\Controller\blog.php(35): Kohana_View->render()
#7 E:\web\www\blog\system\classes\Kohana\Controller.php(87): Controller_Blog->after()
#8 [internal function]: Kohana_Controller->execute()
#9 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#13 {main} in E:\web\www\blog\application\views\list.php:3
2012-12-02 03:15:01 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant title - assumed 'title' ~ APPPATH\views\list.php [ 6 ] in E:\web\www\blog\application\views\list.php:6
2012-12-02 03:15:01 --- DEBUG: #0 E:\web\www\blog\application\views\list.php(6): Kohana_Core::error_handler(8, 'Use of undefine...', 'E:\web\www\blog...', 6, Array)
#1 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#2 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#3 E:\web\www\blog\application\views\main.php(3): Kohana_View->render()
#4 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#5 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#6 E:\web\www\blog\application\classes\Controller\blog.php(35): Kohana_View->render()
#7 E:\web\www\blog\system\classes\Kohana\Controller.php(87): Controller_Blog->after()
#8 [internal function]: Kohana_Controller->execute()
#9 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#13 {main} in E:\web\www\blog\application\views\list.php:6
2012-12-02 03:16:38 --- CRITICAL: ErrorException [ 1 ]: Class 'blog' not found ~ APPPATH\views\article.php [ 51 ] in :
2012-12-02 03:16:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-02 03:18:56 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Blog::$input ~ APPPATH\classes\Controller\blog.php [ 133 ] in E:\web\www\blog\application\classes\Controller\blog.php:133
2012-12-02 03:18:56 --- DEBUG: #0 E:\web\www\blog\application\classes\Controller\blog.php(133): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\web\www\blog...', 133, Array)
#1 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#7 {main} in E:\web\www\blog\application\classes\Controller\blog.php:133
2012-12-02 03:19:45 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_Blog::$_user ~ APPPATH\classes\Model\blog.php [ 56 ] in E:\web\www\blog\application\classes\Model\blog.php:56
2012-12-02 03:19:45 --- DEBUG: #0 E:\web\www\blog\application\classes\Model\blog.php(56): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\web\www\blog...', 56, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(134): Model_Blog->article_delete('')
#2 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_delete()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\application\classes\Model\blog.php:56
2012-12-02 03:22:14 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Blog::$_user ~ APPPATH\classes\Controller\blog.php [ 153 ] in E:\web\www\blog\application\classes\Controller\blog.php:153
2012-12-02 03:22:14 --- DEBUG: #0 E:\web\www\blog\application\classes\Controller\blog.php(153): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\web\www\blog...', 153, Array)
#1 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_guestdel()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#7 {main} in E:\web\www\blog\application\classes\Controller\blog.php:153
2012-12-02 03:24:41 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Blog::$input ~ APPPATH\classes\Controller\blog.php [ 117 ] in E:\web\www\blog\application\classes\Controller\blog.php:117
2012-12-02 03:24:41 --- DEBUG: #0 E:\web\www\blog\application\classes\Controller\blog.php(117): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\web\www\blog...', 117, Array)
#1 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#7 {main} in E:\web\www\blog\application\classes\Controller\blog.php:117
2012-12-02 03:24:45 --- CRITICAL: ErrorException [ 1 ]: Class 'blog' not found ~ APPPATH\views\article.php [ 51 ] in :
2012-12-02 03:24:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-02 03:27:08 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: list ~ APPPATH\views\article.php [ 3 ] in E:\web\www\blog\application\views\article.php:3
2012-12-02 03:27:08 --- DEBUG: #0 E:\web\www\blog\application\views\article.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\web\www\blog...', 3, Array)
#1 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#2 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#3 E:\web\www\blog\application\views\main.php(3): Kohana_View->render()
#4 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#5 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#6 E:\web\www\blog\application\classes\Controller\blog.php(35): Kohana_View->render()
#7 E:\web\www\blog\system\classes\Kohana\Controller.php(87): Controller_Blog->after()
#8 [internal function]: Kohana_Controller->execute()
#9 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#13 {main} in E:\web\www\blog\application\views\article.php:3
2012-12-02 03:45:36 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_Blog::$article_talbe ~ APPPATH\classes\Model\blog.php [ 68 ] in E:\web\www\blog\application\classes\Model\blog.php:68
2012-12-02 03:45:36 --- DEBUG: #0 E:\web\www\blog\application\classes\Model\blog.php(68): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\web\www\blog...', 68, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(123): Model_Blog->article_update('1', 'test', 'for test')
#2 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\application\classes\Model\blog.php:68
2012-12-02 03:58:47 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_Blog::$acticle_table ~ APPPATH\classes\Model\blog.php [ 40 ] in E:\web\www\blog\application\classes\Model\blog.php:40
2012-12-02 03:58:47 --- DEBUG: #0 E:\web\www\blog\application\classes\Model\blog.php(40): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\web\www\blog...', 40, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(80): Model_Blog->article_count()
#2 E:\web\www\blog\system\classes\Kohana\Controller.php(84): Controller_Blog->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\application\classes\Model\blog.php:40
2012-12-02 04:45:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: list ~ APPPATH\views\slider.php [ 18 ] in E:\web\www\blog\application\views\slider.php:18
2012-12-02 04:45:30 --- DEBUG: #0 E:\web\www\blog\application\views\slider.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\web\www\blog...', 18, Array)
#1 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#2 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#3 E:\web\www\blog\application\views\main.php(2): Kohana_View->render()
#4 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#5 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#6 E:\web\www\blog\application\classes\Controller\blog.php(35): Kohana_View->render()
#7 E:\web\www\blog\system\classes\Kohana\Controller.php(87): Controller_Blog->after()
#8 [internal function]: Kohana_Controller->execute()
#9 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#13 {main} in E:\web\www\blog\application\views\slider.php:18
2012-12-02 04:52:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$result' (T_VARIABLE) ~ APPPATH\classes\Model\blog.php [ 66 ] in :
2012-12-02 04:52:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-02 05:07:34 --- CRITICAL: ErrorException [ 8 ]: Undefined index: mail ~ APPPATH\views\slider.php [ 15 ] in E:\web\www\blog\application\views\slider.php:15
2012-12-02 05:07:34 --- DEBUG: #0 E:\web\www\blog\application\views\slider.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\web\www\blog...', 15, Array)
#1 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#2 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#3 E:\web\www\blog\application\views\main.php(2): Kohana_View->render()
#4 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#5 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#6 E:\web\www\blog\application\classes\Controller\blog.php(35): Kohana_View->render()
#7 E:\web\www\blog\system\classes\Kohana\Controller.php(87): Controller_Blog->after()
#8 [internal function]: Kohana_Controller->execute()
#9 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#13 {main} in E:\web\www\blog\application\views\slider.php:15
2012-12-02 05:08:44 --- CRITICAL: ErrorException [ 2 ]: Illegal string offset 'gid' ~ APPPATH\views\slider.php [ 15 ] in E:\web\www\blog\application\views\slider.php:15
2012-12-02 05:08:44 --- DEBUG: #0 E:\web\www\blog\application\views\slider.php(15): Kohana_Core::error_handler(2, 'Illegal string ...', 'E:\web\www\blog...', 15, Array)
#1 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#2 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#3 E:\web\www\blog\application\views\main.php(2): Kohana_View->render()
#4 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#5 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#6 E:\web\www\blog\application\classes\Controller\blog.php(35): Kohana_View->render()
#7 E:\web\www\blog\system\classes\Kohana\Controller.php(87): Controller_Blog->after()
#8 [internal function]: Kohana_Controller->execute()
#9 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#13 {main} in E:\web\www\blog\application\views\slider.php:15
2012-12-02 05:08:45 --- CRITICAL: ErrorException [ 2 ]: Illegal string offset 'gid' ~ APPPATH\views\slider.php [ 15 ] in E:\web\www\blog\application\views\slider.php:15
2012-12-02 05:08:45 --- DEBUG: #0 E:\web\www\blog\application\views\slider.php(15): Kohana_Core::error_handler(2, 'Illegal string ...', 'E:\web\www\blog...', 15, Array)
#1 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#2 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#3 E:\web\www\blog\application\views\main.php(2): Kohana_View->render()
#4 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#5 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#6 E:\web\www\blog\application\classes\Controller\blog.php(35): Kohana_View->render()
#7 E:\web\www\blog\system\classes\Kohana\Controller.php(87): Controller_Blog->after()
#8 [internal function]: Kohana_Controller->execute()
#9 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#13 {main} in E:\web\www\blog\application\views\slider.php:15
2012-12-02 05:08:45 --- CRITICAL: ErrorException [ 2 ]: Illegal string offset 'gid' ~ APPPATH\views\slider.php [ 15 ] in E:\web\www\blog\application\views\slider.php:15
2012-12-02 05:08:45 --- DEBUG: #0 E:\web\www\blog\application\views\slider.php(15): Kohana_Core::error_handler(2, 'Illegal string ...', 'E:\web\www\blog...', 15, Array)
#1 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#2 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#3 E:\web\www\blog\application\views\main.php(2): Kohana_View->render()
#4 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#5 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#6 E:\web\www\blog\application\classes\Controller\blog.php(35): Kohana_View->render()
#7 E:\web\www\blog\system\classes\Kohana\Controller.php(87): Controller_Blog->after()
#8 [internal function]: Kohana_Controller->execute()
#9 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#13 {main} in E:\web\www\blog\application\views\slider.php:15
2012-12-02 05:09:07 --- CRITICAL: ErrorException [ 8 ]: Undefined index: mail ~ APPPATH\views\slider.php [ 15 ] in E:\web\www\blog\application\views\slider.php:15
2012-12-02 05:09:07 --- DEBUG: #0 E:\web\www\blog\application\views\slider.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\web\www\blog...', 15, Array)
#1 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#2 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#3 E:\web\www\blog\application\views\main.php(2): Kohana_View->render()
#4 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#5 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#6 E:\web\www\blog\application\classes\Controller\blog.php(35): Kohana_View->render()
#7 E:\web\www\blog\system\classes\Kohana\Controller.php(87): Controller_Blog->after()
#8 [internal function]: Kohana_Controller->execute()
#9 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#13 {main} in E:\web\www\blog\application\views\slider.php:15
2012-12-02 05:09:08 --- CRITICAL: ErrorException [ 8 ]: Undefined index: mail ~ APPPATH\views\slider.php [ 15 ] in E:\web\www\blog\application\views\slider.php:15
2012-12-02 05:09:08 --- DEBUG: #0 E:\web\www\blog\application\views\slider.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\web\www\blog...', 15, Array)
#1 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#2 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#3 E:\web\www\blog\application\views\main.php(2): Kohana_View->render()
#4 E:\web\www\blog\system\classes\Kohana\View.php(61): include('E:\web\www\blog...')
#5 E:\web\www\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\web\www\blog...', Array)
#6 E:\web\www\blog\application\classes\Controller\blog.php(35): Kohana_View->render()
#7 E:\web\www\blog\system\classes\Kohana\Controller.php(87): Controller_Blog->after()
#8 [internal function]: Kohana_Controller->execute()
#9 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#13 {main} in E:\web\www\blog\application\views\slider.php:15