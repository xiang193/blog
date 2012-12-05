<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-11-27 15:47:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'user_model' (T_STRING), expecting variable (T_VARIABLE) ~ APPPATH\classes\Controller\Blog.php [ 4 ] in :
2012-11-27 15:47:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 15:47:22 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'user_model' (T_STRING), expecting variable (T_VARIABLE) ~ APPPATH\classes\Controller\Blog.php [ 4 ] in :
2012-11-27 15:47:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 15:47:23 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'user_model' (T_STRING), expecting variable (T_VARIABLE) ~ APPPATH\classes\Controller\Blog.php [ 4 ] in :
2012-11-27 15:47:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 15:47:23 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'user_model' (T_STRING), expecting variable (T_VARIABLE) ~ APPPATH\classes\Controller\Blog.php [ 4 ] in :
2012-11-27 15:47:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 15:47:24 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'user_model' (T_STRING), expecting variable (T_VARIABLE) ~ APPPATH\classes\Controller\Blog.php [ 4 ] in :
2012-11-27 15:47:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 15:47:24 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'user_model' (T_STRING), expecting variable (T_VARIABLE) ~ APPPATH\classes\Controller\Blog.php [ 4 ] in :
2012-11-27 15:47:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 15:47:24 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'user_model' (T_STRING), expecting variable (T_VARIABLE) ~ APPPATH\classes\Controller\Blog.php [ 4 ] in :
2012-11-27 15:47:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 15:47:24 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'user_model' (T_STRING), expecting variable (T_VARIABLE) ~ APPPATH\classes\Controller\Blog.php [ 4 ] in :
2012-11-27 15:47:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 15:48:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\classes\Controller\Blog.php [ 54 ] in :
2012-11-27 15:48:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 15:48:52 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in E:\web\www\blog\application\classes\Controller\Blog.php on line 16 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-27 15:48:52 --- DEBUG: #0 E:\web\www\blog\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'E:\web\www\blog...', 43, Array)
#1 E:\web\www\blog\application\classes\Controller\Blog.php(16): Kohana_Controller->__construct()
#2 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#3 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#7 {main} in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-27 15:50:41 --- CRITICAL: ErrorException [ 1 ]: Class 'Article_Model' not found ~ APPPATH\classes\Controller\Blog.php [ 17 ] in :
2012-11-27 15:50:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 15:50:42 --- CRITICAL: ErrorException [ 1 ]: Class 'Article_Model' not found ~ APPPATH\classes\Controller\Blog.php [ 17 ] in :
2012-11-27 15:50:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 15:51:35 --- CRITICAL: ErrorException [ 1 ]: Class 'User_Model' not found ~ APPPATH\classes\Controller\Blog.php [ 18 ] in :
2012-11-27 15:51:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 15:51:41 --- CRITICAL: ErrorException [ 1 ]: Class 'Article_Model' not found ~ APPPATH\classes\Controller\Blog.php [ 17 ] in :
2012-11-27 15:51:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 15:55:41 --- CRITICAL: ErrorException [ 1 ]: Class 'Article_Model' not found ~ APPPATH\classes\Controller\Blog.php [ 17 ] in :
2012-11-27 15:55:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 15:55:41 --- CRITICAL: ErrorException [ 1 ]: Class 'Article_Model' not found ~ APPPATH\classes\Controller\Blog.php [ 17 ] in :
2012-11-27 15:55:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 15:55:42 --- CRITICAL: ErrorException [ 1 ]: Class 'Article_Model' not found ~ APPPATH\classes\Controller\Blog.php [ 17 ] in :
2012-11-27 15:55:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 15:55:42 --- CRITICAL: ErrorException [ 1 ]: Class 'Article_Model' not found ~ APPPATH\classes\Controller\Blog.php [ 17 ] in :
2012-11-27 15:55:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 15:55:43 --- CRITICAL: ErrorException [ 1 ]: Class 'Article_Model' not found ~ APPPATH\classes\Controller\Blog.php [ 17 ] in :
2012-11-27 15:55:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 15:55:43 --- CRITICAL: ErrorException [ 1 ]: Class 'Article_Model' not found ~ APPPATH\classes\Controller\Blog.php [ 17 ] in :
2012-11-27 15:55:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 15:55:44 --- CRITICAL: ErrorException [ 1 ]: Class 'Article_Model' not found ~ APPPATH\classes\Controller\Blog.php [ 17 ] in :
2012-11-27 15:55:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 15:55:44 --- CRITICAL: ErrorException [ 1 ]: Class 'Article_Model' not found ~ APPPATH\classes\Controller\Blog.php [ 17 ] in :
2012-11-27 15:55:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 15:55:44 --- CRITICAL: ErrorException [ 1 ]: Class 'Article_Model' not found ~ APPPATH\classes\Controller\Blog.php [ 17 ] in :
2012-11-27 15:55:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 15:55:45 --- CRITICAL: ErrorException [ 1 ]: Class 'Article_Model' not found ~ APPPATH\classes\Controller\Blog.php [ 17 ] in :
2012-11-27 15:55:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 15:55:45 --- CRITICAL: ErrorException [ 1 ]: Class 'Article_Model' not found ~ APPPATH\classes\Controller\Blog.php [ 17 ] in :
2012-11-27 15:55:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 15:55:45 --- CRITICAL: ErrorException [ 1 ]: Class 'Article_Model' not found ~ APPPATH\classes\Controller\Blog.php [ 17 ] in :
2012-11-27 15:55:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 15:55:45 --- CRITICAL: ErrorException [ 1 ]: Class 'Article_Model' not found ~ APPPATH\classes\Controller\Blog.php [ 17 ] in :
2012-11-27 15:55:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 15:55:45 --- CRITICAL: ErrorException [ 1 ]: Class 'Article_Model' not found ~ APPPATH\classes\Controller\Blog.php [ 17 ] in :
2012-11-27 15:55:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 15:55:45 --- CRITICAL: ErrorException [ 1 ]: Class 'Article_Model' not found ~ APPPATH\classes\Controller\Blog.php [ 17 ] in :
2012-11-27 15:55:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 15:55:46 --- CRITICAL: ErrorException [ 1 ]: Class 'Article_Model' not found ~ APPPATH\classes\Controller\Blog.php [ 17 ] in :
2012-11-27 15:55:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 15:55:46 --- CRITICAL: ErrorException [ 1 ]: Class 'Article_Model' not found ~ APPPATH\classes\Controller\Blog.php [ 17 ] in :
2012-11-27 15:55:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 15:55:46 --- CRITICAL: ErrorException [ 1 ]: Class 'Article_Model' not found ~ APPPATH\classes\Controller\Blog.php [ 17 ] in :
2012-11-27 15:55:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 15:55:46 --- CRITICAL: ErrorException [ 1 ]: Class 'Article_Model' not found ~ APPPATH\classes\Controller\Blog.php [ 17 ] in :
2012-11-27 15:55:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 15:55:49 --- CRITICAL: ErrorException [ 1 ]: Class 'Article_Model' not found ~ APPPATH\classes\Controller\Blog.php [ 17 ] in :
2012-11-27 15:55:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 15:55:58 --- CRITICAL: ErrorException [ 1 ]: Class 'Article_Model' not found ~ APPPATH\classes\Controller\Blog.php [ 17 ] in :
2012-11-27 15:55:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 15:55:58 --- CRITICAL: ErrorException [ 1 ]: Class 'Article_Model' not found ~ APPPATH\classes\Controller\Blog.php [ 17 ] in :
2012-11-27 15:55:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 15:55:58 --- CRITICAL: ErrorException [ 1 ]: Class 'Article_Model' not found ~ APPPATH\classes\Controller\Blog.php [ 17 ] in :
2012-11-27 15:55:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 15:58:19 --- CRITICAL: ErrorException [ 1 ]: Class 'Article_Model' not found ~ APPPATH\classes\Controller\blog.php [ 17 ] in :
2012-11-27 15:58:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 15:58:20 --- CRITICAL: ErrorException [ 1 ]: Class 'Article_Model' not found ~ APPPATH\classes\Controller\blog.php [ 17 ] in :
2012-11-27 15:58:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 15:58:20 --- CRITICAL: ErrorException [ 1 ]: Class 'Article_Model' not found ~ APPPATH\classes\Controller\blog.php [ 17 ] in :
2012-11-27 15:58:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 16:02:36 --- CRITICAL: ErrorException [ 1 ]: Class 'Article_Model' not found ~ APPPATH\classes\Controller\blog.php [ 17 ] in :
2012-11-27 16:02:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 16:02:36 --- CRITICAL: ErrorException [ 1 ]: Class 'Article_Model' not found ~ APPPATH\classes\Controller\blog.php [ 17 ] in :
2012-11-27 16:02:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 16:02:36 --- CRITICAL: ErrorException [ 1 ]: Class 'Article_Model' not found ~ APPPATH\classes\Controller\blog.php [ 17 ] in :
2012-11-27 16:02:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 16:04:47 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\article.php [ 88 ] in :
2012-11-27 16:04:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 16:04:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\article.php [ 88 ] in :
2012-11-27 16:04:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 16:05:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\article.php [ 88 ] in :
2012-11-27 16:05:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 16:05:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\article.php [ 88 ] in :
2012-11-27 16:05:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 16:05:21 --- CRITICAL: ErrorException [ 1 ]: Cannot call constructor ~ APPPATH\classes\Model\article.php [ 9 ] in :
2012-11-27 16:05:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 16:05:42 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_User' not found ~ APPPATH\classes\Controller\blog.php [ 18 ] in :
2012-11-27 16:05:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 16:06:06 --- CRITICAL: ErrorException [ 1 ]: Cannot call constructor ~ APPPATH\classes\Model\user.php [ 10 ] in :
2012-11-27 16:06:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-27 16:06:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: uid ~ APPPATH\classes\Model\user.php [ 25 ] in E:\web\www\blog\application\classes\Model\user.php:25
2012-11-27 16:06:12 --- DEBUG: #0 E:\web\www\blog\application\classes\Model\user.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\web\www\blog...', 25, Array)
#1 E:\web\www\blog\application\classes\Model\user.php(12): Model_User->init()
#2 E:\web\www\blog\application\classes\Controller\blog.php(18): Model_User->__construct()
#3 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\application\classes\Model\user.php:25
2012-11-27 16:07:16 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_Article::$db ~ APPPATH\classes\Model\article.php [ 29 ] in E:\web\www\blog\application\classes\Model\article.php:29
2012-11-27 16:07:16 --- DEBUG: #0 E:\web\www\blog\application\classes\Model\article.php(29): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\web\www\blog...', 29, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(25): Model_Article->article_list()
#2 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#3 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#7 {main} in E:\web\www\blog\application\classes\Model\article.php:29