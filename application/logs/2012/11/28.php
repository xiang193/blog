<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-11-28 15:20:03 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'return' (T_RETURN) ~ APPPATH\classes\Model\article.php [ 84 ] in :
2012-11-28 15:20:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 15:27:13 --- CRITICAL: Database_Exception [ 1146 ]: Table 'blog.blogarticle' doesn't exist [ SELECT * FROM `blogarticle` ORDER BY `time` DESC LIMIT 10 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-11-28 15:27:13 --- DEBUG: #0 E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 E:\web\www\blog\application\classes\Model\article.php(39): Kohana_Database_Query->execute()
#2 E:\web\www\blog\application\classes\Controller\blog.php(25): Model_Article->article_list()
#3 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-11-28 15:30:07 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'return' (T_RETURN) ~ APPPATH\classes\Model\article.php [ 41 ] in :
2012-11-28 15:30:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 15:30:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'return' (T_RETURN) ~ APPPATH\classes\Model\article.php [ 41 ] in :
2012-11-28 15:30:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 15:30:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'return' (T_RETURN) ~ APPPATH\classes\Model\article.php [ 41 ] in :
2012-11-28 15:30:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 15:30:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'return' (T_RETURN) ~ APPPATH\classes\Model\article.php [ 41 ] in :
2012-11-28 15:30:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 15:30:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'return' (T_RETURN) ~ APPPATH\classes\Model\article.php [ 41 ] in :
2012-11-28 15:30:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 15:30:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'return' (T_RETURN) ~ APPPATH\classes\Model\article.php [ 41 ] in :
2012-11-28 15:30:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 15:30:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'return' (T_RETURN) ~ APPPATH\classes\Model\article.php [ 41 ] in :
2012-11-28 15:30:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 15:31:18 --- CRITICAL: Database_Exception [ 1146 ]: Table 'blog.blogarticle' doesn't exist [ SELECT * FROM `blogarticle` ORDER BY `time` DESC LIMIT 10 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-11-28 15:31:18 --- DEBUG: #0 E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 E:\web\www\blog\application\classes\Model\article.php(39): Kohana_Database_Query->execute()
#2 E:\web\www\blog\application\classes\Controller\blog.php(25): Model_Article->article_list()
#3 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-11-28 15:32:13 --- CRITICAL: Database_Exception [ 1146 ]: Table 'blog.blogarticle' doesn't exist [ SELECT * FROM `blogarticle` ORDER BY `time` DESC LIMIT 10 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-11-28 15:32:13 --- DEBUG: #0 E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 E:\web\www\blog\application\classes\Model\article.php(39): Kohana_Database_Query->execute()
#2 E:\web\www\blog\application\classes\Controller\blog.php(25): Model_Article->article_list()
#3 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-11-28 15:32:15 --- CRITICAL: Database_Exception [ 1146 ]: Table 'blog.blogarticle' doesn't exist [ SELECT * FROM `blogarticle` ORDER BY `time` DESC LIMIT 10 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-11-28 15:32:15 --- DEBUG: #0 E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 E:\web\www\blog\application\classes\Model\article.php(39): Kohana_Database_Query->execute()
#2 E:\web\www\blog\application\classes\Controller\blog.php(25): Model_Article->article_list()
#3 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-11-28 15:32:16 --- CRITICAL: Database_Exception [ 1146 ]: Table 'blog.blogarticle' doesn't exist [ SELECT * FROM `blogarticle` ORDER BY `time` DESC LIMIT 10 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-11-28 15:32:16 --- DEBUG: #0 E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 E:\web\www\blog\application\classes\Model\article.php(39): Kohana_Database_Query->execute()
#2 E:\web\www\blog\application\classes\Controller\blog.php(25): Model_Article->article_list()
#3 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-11-28 15:32:17 --- CRITICAL: Database_Exception [ 1146 ]: Table 'blog.blogarticle' doesn't exist [ SELECT * FROM `blogarticle` ORDER BY `time` DESC LIMIT 10 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-11-28 15:32:17 --- DEBUG: #0 E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 E:\web\www\blog\application\classes\Model\article.php(39): Kohana_Database_Query->execute()
#2 E:\web\www\blog\application\classes\Controller\blog.php(25): Model_Article->article_list()
#3 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-11-28 15:32:17 --- CRITICAL: Database_Exception [ 1146 ]: Table 'blog.blogarticle' doesn't exist [ SELECT * FROM `blogarticle` ORDER BY `time` DESC LIMIT 10 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-11-28 15:32:17 --- DEBUG: #0 E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 E:\web\www\blog\application\classes\Model\article.php(39): Kohana_Database_Query->execute()
#2 E:\web\www\blog\application\classes\Controller\blog.php(25): Model_Article->article_list()
#3 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-11-28 15:32:18 --- CRITICAL: Database_Exception [ 1146 ]: Table 'blog.blogarticle' doesn't exist [ SELECT * FROM `blogarticle` ORDER BY `time` DESC LIMIT 10 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-11-28 15:32:18 --- DEBUG: #0 E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 E:\web\www\blog\application\classes\Model\article.php(39): Kohana_Database_Query->execute()
#2 E:\web\www\blog\application\classes\Controller\blog.php(25): Model_Article->article_list()
#3 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-11-28 15:32:19 --- CRITICAL: Database_Exception [ 1146 ]: Table 'blog.blogarticle' doesn't exist [ SELECT * FROM `blogarticle` ORDER BY `time` DESC LIMIT 10 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-11-28 15:32:19 --- DEBUG: #0 E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 E:\web\www\blog\application\classes\Model\article.php(39): Kohana_Database_Query->execute()
#2 E:\web\www\blog\application\classes\Controller\blog.php(25): Model_Article->article_list()
#3 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-11-28 15:32:19 --- CRITICAL: Database_Exception [ 1146 ]: Table 'blog.blogarticle' doesn't exist [ SELECT * FROM `blogarticle` ORDER BY `time` DESC LIMIT 10 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-11-28 15:32:19 --- DEBUG: #0 E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 E:\web\www\blog\application\classes\Model\article.php(39): Kohana_Database_Query->execute()
#2 E:\web\www\blog\application\classes\Controller\blog.php(25): Model_Article->article_list()
#3 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-11-28 15:32:19 --- CRITICAL: Database_Exception [ 1146 ]: Table 'blog.blogarticle' doesn't exist [ SELECT * FROM `blogarticle` ORDER BY `time` DESC LIMIT 10 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-11-28 15:32:19 --- DEBUG: #0 E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 E:\web\www\blog\application\classes\Model\article.php(39): Kohana_Database_Query->execute()
#2 E:\web\www\blog\application\classes\Controller\blog.php(25): Model_Article->article_list()
#3 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-11-28 15:32:19 --- CRITICAL: Database_Exception [ 1146 ]: Table 'blog.blogarticle' doesn't exist [ SELECT * FROM `blogarticle` ORDER BY `time` DESC LIMIT 10 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-11-28 15:32:19 --- DEBUG: #0 E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 E:\web\www\blog\application\classes\Model\article.php(39): Kohana_Database_Query->execute()
#2 E:\web\www\blog\application\classes\Controller\blog.php(25): Model_Article->article_list()
#3 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-11-28 15:32:19 --- CRITICAL: Database_Exception [ 1146 ]: Table 'blog.blogarticle' doesn't exist [ SELECT * FROM `blogarticle` ORDER BY `time` DESC LIMIT 10 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-11-28 15:32:19 --- DEBUG: #0 E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 E:\web\www\blog\application\classes\Model\article.php(39): Kohana_Database_Query->execute()
#2 E:\web\www\blog\application\classes\Controller\blog.php(25): Model_Article->article_list()
#3 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-11-28 15:32:20 --- CRITICAL: Database_Exception [ 1146 ]: Table 'blog.blogarticle' doesn't exist [ SELECT * FROM `blogarticle` ORDER BY `time` DESC LIMIT 10 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-11-28 15:32:20 --- DEBUG: #0 E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 E:\web\www\blog\application\classes\Model\article.php(39): Kohana_Database_Query->execute()
#2 E:\web\www\blog\application\classes\Controller\blog.php(25): Model_Article->article_list()
#3 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-11-28 15:33:14 --- CRITICAL: Database_Exception [ 1146 ]: Table 'blog.blogarticle' doesn't exist [ SELECT * FROM `blogarticle` ORDER BY `time` DESC LIMIT 10 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-11-28 15:33:14 --- DEBUG: #0 E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 E:\web\www\blog\application\classes\Model\article.php(39): Kohana_Database_Query->execute()
#2 E:\web\www\blog\application\classes\Controller\blog.php(25): Model_Article->article_list()
#3 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-11-28 15:33:15 --- CRITICAL: Database_Exception [ 1146 ]: Table 'blog.blogarticle' doesn't exist [ SELECT * FROM `blogarticle` ORDER BY `time` DESC LIMIT 10 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-11-28 15:33:15 --- DEBUG: #0 E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 E:\web\www\blog\application\classes\Model\article.php(39): Kohana_Database_Query->execute()
#2 E:\web\www\blog\application\classes\Controller\blog.php(25): Model_Article->article_list()
#3 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-11-28 15:33:16 --- CRITICAL: Database_Exception [ 1146 ]: Table 'blog.blogarticle' doesn't exist [ SELECT * FROM `blogarticle` ORDER BY `time` DESC LIMIT 10 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-11-28 15:33:16 --- DEBUG: #0 E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 E:\web\www\blog\application\classes\Model\article.php(39): Kohana_Database_Query->execute()
#2 E:\web\www\blog\application\classes\Controller\blog.php(25): Model_Article->article_list()
#3 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-11-28 15:33:16 --- CRITICAL: Database_Exception [ 1146 ]: Table 'blog.blogarticle' doesn't exist [ SELECT * FROM `blogarticle` ORDER BY `time` DESC LIMIT 10 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-11-28 15:33:16 --- DEBUG: #0 E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 E:\web\www\blog\application\classes\Model\article.php(39): Kohana_Database_Query->execute()
#2 E:\web\www\blog\application\classes\Controller\blog.php(25): Model_Article->article_list()
#3 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-11-28 15:33:16 --- CRITICAL: Database_Exception [ 1146 ]: Table 'blog.blogarticle' doesn't exist [ SELECT * FROM `blogarticle` ORDER BY `time` DESC LIMIT 10 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-11-28 15:33:16 --- DEBUG: #0 E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 E:\web\www\blog\application\classes\Model\article.php(39): Kohana_Database_Query->execute()
#2 E:\web\www\blog\application\classes\Controller\blog.php(25): Model_Article->article_list()
#3 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-11-28 15:33:16 --- CRITICAL: Database_Exception [ 1146 ]: Table 'blog.blogarticle' doesn't exist [ SELECT * FROM `blogarticle` ORDER BY `time` DESC LIMIT 10 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-11-28 15:33:16 --- DEBUG: #0 E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 E:\web\www\blog\application\classes\Model\article.php(39): Kohana_Database_Query->execute()
#2 E:\web\www\blog\application\classes\Controller\blog.php(25): Model_Article->article_list()
#3 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-11-28 15:33:19 --- CRITICAL: Database_Exception [ 1146 ]: Table 'blog.blogarticle' doesn't exist [ SELECT * FROM `blogarticle` ORDER BY `time` DESC LIMIT 10 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-11-28 15:33:19 --- DEBUG: #0 E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 E:\web\www\blog\application\classes\Model\article.php(39): Kohana_Database_Query->execute()
#2 E:\web\www\blog\application\classes\Controller\blog.php(25): Model_Article->article_list()
#3 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-11-28 15:33:19 --- CRITICAL: Database_Exception [ 1146 ]: Table 'blog.blogarticle' doesn't exist [ SELECT * FROM `blogarticle` ORDER BY `time` DESC LIMIT 10 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-11-28 15:33:19 --- DEBUG: #0 E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 E:\web\www\blog\application\classes\Model\article.php(39): Kohana_Database_Query->execute()
#2 E:\web\www\blog\application\classes\Controller\blog.php(25): Model_Article->article_list()
#3 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#8 {main} in E:\web\www\blog\modules\database\classes\Kohana\Database\Query.php:251
2012-11-28 15:33:51 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 72 ] in :
2012-11-28 15:33:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 15:33:53 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 72 ] in :
2012-11-28 15:33:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 15:35:51 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 72 ] in :
2012-11-28 15:35:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 15:35:53 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 72 ] in :
2012-11-28 15:35:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 15:35:54 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 72 ] in :
2012-11-28 15:35:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 15:35:54 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 72 ] in :
2012-11-28 15:35:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 15:35:54 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 72 ] in :
2012-11-28 15:35:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 15:35:54 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 72 ] in :
2012-11-28 15:35:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 15:35:55 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 72 ] in :
2012-11-28 15:35:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 15:37:16 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 72 ] in :
2012-11-28 15:37:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 15:37:17 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 72 ] in :
2012-11-28 15:37:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 15:37:34 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 72 ] in :
2012-11-28 15:37:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 15:37:35 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 72 ] in :
2012-11-28 15:37:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 15:38:50 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 73 ] in :
2012-11-28 15:38:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 15:38:51 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 73 ] in :
2012-11-28 15:38:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 15:38:52 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 73 ] in :
2012-11-28 15:38:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 15:38:52 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 73 ] in :
2012-11-28 15:38:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 15:38:52 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 73 ] in :
2012-11-28 15:38:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 15:38:53 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 73 ] in :
2012-11-28 15:38:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 15:39:19 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 71 ] in :
2012-11-28 15:39:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 15:39:20 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 71 ] in :
2012-11-28 15:39:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 15:39:20 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 71 ] in :
2012-11-28 15:39:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 15:39:21 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 71 ] in :
2012-11-28 15:39:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 15:39:21 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 71 ] in :
2012-11-28 15:39:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 15:39:21 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 71 ] in :
2012-11-28 15:39:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 15:39:22 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 71 ] in :
2012-11-28 15:39:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 15:39:22 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 71 ] in :
2012-11-28 15:39:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 15:39:22 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 71 ] in :
2012-11-28 15:39:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 15:39:23 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 71 ] in :
2012-11-28 15:39:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 15:41:40 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in E:\web\www\blog\application\classes\Controller\blog.php on line 16 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 15:41:40 --- DEBUG: #0 E:\web\www\blog\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'E:\web\www\blog...', 43, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(16): Kohana_Controller->__construct()
#2 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#3 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#7 {main} in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:10:33 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in E:\web\www\blog\application\classes\Controller\blog.php on line 16 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:10:33 --- DEBUG: #0 E:\web\www\blog\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'E:\web\www\blog...', 43, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(16): Kohana_Controller->__construct()
#2 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#3 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#7 {main} in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:10:34 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in E:\web\www\blog\application\classes\Controller\blog.php on line 16 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:10:34 --- DEBUG: #0 E:\web\www\blog\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'E:\web\www\blog...', 43, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(16): Kohana_Controller->__construct()
#2 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#3 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#7 {main} in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:10:34 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in E:\web\www\blog\application\classes\Controller\blog.php on line 16 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:10:34 --- DEBUG: #0 E:\web\www\blog\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'E:\web\www\blog...', 43, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(16): Kohana_Controller->__construct()
#2 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#3 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#7 {main} in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:10:35 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in E:\web\www\blog\application\classes\Controller\blog.php on line 16 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:10:35 --- DEBUG: #0 E:\web\www\blog\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'E:\web\www\blog...', 43, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(16): Kohana_Controller->__construct()
#2 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#3 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#7 {main} in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:10:35 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in E:\web\www\blog\application\classes\Controller\blog.php on line 16 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:10:35 --- DEBUG: #0 E:\web\www\blog\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'E:\web\www\blog...', 43, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(16): Kohana_Controller->__construct()
#2 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#3 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#7 {main} in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:10:35 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in E:\web\www\blog\application\classes\Controller\blog.php on line 16 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:10:35 --- DEBUG: #0 E:\web\www\blog\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'E:\web\www\blog...', 43, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(16): Kohana_Controller->__construct()
#2 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#3 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#7 {main} in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:10:35 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in E:\web\www\blog\application\classes\Controller\blog.php on line 16 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:10:35 --- DEBUG: #0 E:\web\www\blog\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'E:\web\www\blog...', 43, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(16): Kohana_Controller->__construct()
#2 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#3 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#7 {main} in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:10:36 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in E:\web\www\blog\application\classes\Controller\blog.php on line 16 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:10:36 --- DEBUG: #0 E:\web\www\blog\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'E:\web\www\blog...', 43, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(16): Kohana_Controller->__construct()
#2 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#3 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#7 {main} in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:10:37 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in E:\web\www\blog\application\classes\Controller\blog.php on line 16 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:10:37 --- DEBUG: #0 E:\web\www\blog\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'E:\web\www\blog...', 43, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(16): Kohana_Controller->__construct()
#2 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#3 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#7 {main} in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:10:37 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in E:\web\www\blog\application\classes\Controller\blog.php on line 16 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:10:37 --- DEBUG: #0 E:\web\www\blog\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'E:\web\www\blog...', 43, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(16): Kohana_Controller->__construct()
#2 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#3 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#7 {main} in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:10:37 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in E:\web\www\blog\application\classes\Controller\blog.php on line 16 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:10:37 --- DEBUG: #0 E:\web\www\blog\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'E:\web\www\blog...', 43, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(16): Kohana_Controller->__construct()
#2 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#3 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#7 {main} in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:10:43 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in E:\web\www\blog\application\classes\Controller\blog.php on line 16 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:10:43 --- DEBUG: #0 E:\web\www\blog\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'E:\web\www\blog...', 43, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(16): Kohana_Controller->__construct()
#2 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#3 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#7 {main} in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:10:43 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in E:\web\www\blog\application\classes\Controller\blog.php on line 16 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:10:43 --- DEBUG: #0 E:\web\www\blog\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'E:\web\www\blog...', 43, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(16): Kohana_Controller->__construct()
#2 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#3 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#7 {main} in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:10:43 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in E:\web\www\blog\application\classes\Controller\blog.php on line 16 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:10:43 --- DEBUG: #0 E:\web\www\blog\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'E:\web\www\blog...', 43, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(16): Kohana_Controller->__construct()
#2 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#3 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#7 {main} in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:11:08 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in E:\web\www\blog\application\classes\Controller\blog.php on line 16 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:11:08 --- DEBUG: #0 E:\web\www\blog\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'E:\web\www\blog...', 43, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(16): Kohana_Controller->__construct()
#2 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#3 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#7 {main} in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:11:08 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in E:\web\www\blog\application\classes\Controller\blog.php on line 16 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:11:08 --- DEBUG: #0 E:\web\www\blog\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'E:\web\www\blog...', 43, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(16): Kohana_Controller->__construct()
#2 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#3 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#7 {main} in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:11:08 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in E:\web\www\blog\application\classes\Controller\blog.php on line 16 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:11:08 --- DEBUG: #0 E:\web\www\blog\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'E:\web\www\blog...', 43, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(16): Kohana_Controller->__construct()
#2 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#3 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#7 {main} in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:11:34 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in E:\web\www\blog\application\classes\Controller\blog.php on line 16 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:11:34 --- DEBUG: #0 E:\web\www\blog\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'E:\web\www\blog...', 43, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(16): Kohana_Controller->__construct()
#2 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#3 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#7 {main} in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:12:25 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in E:\web\www\blog\application\classes\Controller\blog.php on line 16 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:12:25 --- DEBUG: #0 E:\web\www\blog\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'E:\web\www\blog...', 43, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(16): Kohana_Controller->__construct()
#2 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#3 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#7 {main} in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:12:26 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in E:\web\www\blog\application\classes\Controller\blog.php on line 16 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:12:26 --- DEBUG: #0 E:\web\www\blog\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'E:\web\www\blog...', 43, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(16): Kohana_Controller->__construct()
#2 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#3 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#7 {main} in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:12:26 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in E:\web\www\blog\application\classes\Controller\blog.php on line 16 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:12:26 --- DEBUG: #0 E:\web\www\blog\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'E:\web\www\blog...', 43, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(16): Kohana_Controller->__construct()
#2 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#3 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#7 {main} in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:12:26 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in E:\web\www\blog\application\classes\Controller\blog.php on line 16 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:12:26 --- DEBUG: #0 E:\web\www\blog\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'E:\web\www\blog...', 43, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(16): Kohana_Controller->__construct()
#2 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#3 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#7 {main} in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:12:27 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in E:\web\www\blog\application\classes\Controller\blog.php on line 16 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:12:27 --- DEBUG: #0 E:\web\www\blog\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'E:\web\www\blog...', 43, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(16): Kohana_Controller->__construct()
#2 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#3 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#7 {main} in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:12:27 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in E:\web\www\blog\application\classes\Controller\blog.php on line 16 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:12:27 --- DEBUG: #0 E:\web\www\blog\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'E:\web\www\blog...', 43, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(16): Kohana_Controller->__construct()
#2 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#3 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#7 {main} in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:12:27 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in E:\web\www\blog\application\classes\Controller\blog.php on line 16 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:12:27 --- DEBUG: #0 E:\web\www\blog\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'E:\web\www\blog...', 43, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(16): Kohana_Controller->__construct()
#2 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#3 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#7 {main} in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:12:27 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in E:\web\www\blog\application\classes\Controller\blog.php on line 16 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:12:27 --- DEBUG: #0 E:\web\www\blog\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'E:\web\www\blog...', 43, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(16): Kohana_Controller->__construct()
#2 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#3 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#7 {main} in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:12:27 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in E:\web\www\blog\application\classes\Controller\blog.php on line 16 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:12:27 --- DEBUG: #0 E:\web\www\blog\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'E:\web\www\blog...', 43, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(16): Kohana_Controller->__construct()
#2 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#3 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#7 {main} in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:12:27 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in E:\web\www\blog\application\classes\Controller\blog.php on line 16 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:12:27 --- DEBUG: #0 E:\web\www\blog\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'E:\web\www\blog...', 43, Array)
#1 E:\web\www\blog\application\classes\Controller\blog.php(16): Kohana_Controller->__construct()
#2 [internal function]: Controller_Blog->__construct(Object(Request), Object(Response))
#3 E:\web\www\blog\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 E:\web\www\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\web\www\blog\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 E:\web\www\blog\index.php(121): Kohana_Request->execute()
#7 {main} in E:\web\www\blog\system\classes\Kohana\Controller.php:43
2012-11-28 16:12:49 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 72 ] in :
2012-11-28 16:12:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 16:12:50 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 72 ] in :
2012-11-28 16:12:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 16:12:50 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 72 ] in :
2012-11-28 16:12:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 16:12:50 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 72 ] in :
2012-11-28 16:12:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 16:12:51 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 72 ] in :
2012-11-28 16:12:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 16:12:51 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 72 ] in :
2012-11-28 16:12:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 16:13:07 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$request' (T_VARIABLE) ~ APPPATH\classes\Controller\blog.php [ 16 ] in :
2012-11-28 16:13:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 16:13:08 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$request' (T_VARIABLE) ~ APPPATH\classes\Controller\blog.php [ 16 ] in :
2012-11-28 16:13:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 16:13:42 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 72 ] in :
2012-11-28 16:13:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 16:13:43 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 72 ] in :
2012-11-28 16:13:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 16:13:43 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 72 ] in :
2012-11-28 16:13:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 16:14:03 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 72 ] in :
2012-11-28 16:14:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 16:14:04 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 72 ] in :
2012-11-28 16:14:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 16:14:04 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 72 ] in :
2012-11-28 16:14:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 16:14:05 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 72 ] in :
2012-11-28 16:14:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 16:14:09 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 72 ] in :
2012-11-28 16:14:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 16:14:09 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 72 ] in :
2012-11-28 16:14:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-28 16:14:46 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 72 ] in :
2012-11-28 16:14:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :