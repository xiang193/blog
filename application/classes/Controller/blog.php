<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Blog extends Controller {
	
	private $user_login = FALSE;
	private $user_model;
	private $blog_model;
	private $guest_model;
	
	private $header_view;
	private $footer_view;
	private $slider_view;
	private $content_view;
	private $main_view;
	
	public function before()
	{
		$this->init();
	}
	
	public function after()
	{
		$base_url = url::base(TRUE);
		View::set_global('base_url',$base_url);
		View::set_global('uid',$this->user_model->getUid());
		$this->header_view->set('uid',$this->user_model->getUid());
		$articles = $this->blog_model->article_list();
		$guests = $this->guest_model->wordList();
		$this->slider_view->set('articles',$articles);
		$this->slider_view->set('guests',$guests);
		$this->main_view->set('header',$this->header_view);
		$this->main_view->set('slider',$this->slider_view);
		$this->main_view->set('content', $this->content_view);
		$this->main_view->set('footer',$this->footer_view);
		$this->request->response = $this->main_view->render();
		$this->show();
	}
	
	
	public function init()
	{
		//model,view初始化
		$this->blog_model = new Model_Blog;
		$this->user_model = new Model_User;
		$this->guest_model = new Model_Guest;
		$this->user_login = $this->user_model->getUser();
		$this->header_view = new View('header');
		$this->footer_view = new View('footer');
		$this->slider_view = new View('slider');
		$this->main_view = new View('main');
	}
	
	public function show()
	{
		echo $this->request->response;
	}
	
	public function action_index()
	{
		$this->content_view = new View('welcome');
		$this->main_view->set('content',$this->content_view);
		
	}
	
	public function action_welcome()
	{
		$this->content_view = new View('welcome');
		$this->main_view->set('content',$this->content_view);

	}
	
/************************************************************/
//					文章相关
//					文章增删改查操作
/************************************************************/
	//文章列表
	public function action_list()
	{
		$page = Arr::get($_GET, 'page', 0);
		$list = $this->blog_model->article_list($page);
		$count = $this->blog_model->article_count();
		$prepage = $page - 1;
		$nextpage = $page + 1;
		$totalpage = ceil($count/5);
		$this->content_view = new View('list');
		$this->content_view->set('list', $list);
		$this->content_view->set('page', $page);
		$this->content_view->set('prepage', $prepage);
		$this->content_view->set('nextpage', $nextpage);
		$this->content_view->set('totalpage', $totalpage);
	}
	
	//文章
	public function action_article()
	{
		$aid = Arr::get($_GET, 'aid', NULL);
		if ($aid == NULL)
			url::redirect('list');
		$detail = $this->blog_model->article_detail($aid);
		$this->content_view = new View('article');
		$this->content_view->set('detail',$detail);
	}
	
	//增加
	public function action_add()
	{
		if (!$this->user_login)
			url::redirect('login');
		$title = $this->request->post('title');
		$content = htmlspecialchars($this->request->post('content'));
		if ($this->blog_model->article_add($title, $content))
			url::redirect('list');
		else
		{
			$this->content_view = new View('add');
		}
	}
	
	//修改
	public function action_update()
	{
		if (!$this->user_login)
			url::redirect('login');
		$aid = Arr::get($_GET, 'aid', NULL);
		if ($aid == NULL)
			url::redirect('list');
		$title = $this->request->post('title');
		$content = htmlspecialchars($this->request->post('content'));
		if ($title != NULL && $content != NULL)
		{
			$this->blog_model->article_update($aid, $title, $content);
			url::redirect('article?aid='.$aid);	
		}
		else
		{
			$detail = $this->blog_model->article_detail($aid);
			$this->content_view = new View('update');
			$this->content_view->set('detail', $detail);
		}
	}
	
	//删除
	public function action_delete()
	{
		if (!$this->user_login)
			url::redirect('list');
		$aid = Arr::get($_GET, 'aid', NULL);
		$this->blog_model->article_delete($aid);
		url::redirect('list');
	}
/*******************************************************/
/*				留言相关
/*				留言删查
/*******************************************************/
	//留言
	public function action_guest()
	{
		$list = $this->guest_model->wordList();
		$this->content_view = new View('guest');
		$this->content_view->set('list', $list);
		
	}
	
	//删除留言
	public function action_guestdel()
	{
		if (!$this->user_login)
			url::redirect('login');
		$gid = Arr::get($_GET, 'gid', NULL);
		$this->guest_model->wordDel($gid);
		$list = $this->guest_model->wordList();
		$this->content_view = new View('guest');
		$this->content_view->set('list', $list);

	}
	
	//增加留言
	public function action_guestadd()
	{
		$mail = $this->request->post('mail');
		$content = htmlspecialchars($this->request->post('content'));
		$this->guest_model->wordAdd($mail, $content);
		$list = $this->guest_model->wordList();
		$this->content_view = new View('guest');
		$this->content_view->set('list', $list);
		
	}
/**********************************************************/
/*				用户相关
/*				登陆 退出 信息设置
/**********************************************************/

	//用户信息页
	public function action_user()
	{
		if (!$this->user_login)
			url::redirect('login');
		$detail = $this->user_model->getDetail();
		
		$this->content_view = new View('user');
		$this->content_view->set('detail', $detail);
	}
	
	//修改用户信息页
	public function action_set()
	{
		if (!$this->user_login)
			url::redirect('login');
		$mail = $this->request->post('mail');
		$blog = $this->request->post('blog_name');
		if ($this->user_model->setDetail($blog, $mail))
		{
			url::redirect('user');
		}
		$detail = $this->user_model->getDetail();
		$detail = $detail ? 
							$detail 
						  : array(
								'blog_name' => 'blog',
								'mail' 		=> 'xiang19891018@163.com'
							);
		$this->content_view = new View('set');
		$this->content_view->set('detail', $detail);
		

	}
	
	//修改密码
	public function action_changepwd()
	{
		if (!$this->user_login)
			url::redirect('login');
		$tip = '';
		$pwd1 = $this->request->post('pwd1');
		$pwd2 = $this->request->post('pwd2');
		$pwd3 = $this->request->post('pwd3');
		if (!empty($pwd1) || !empty($pwd3) || !empty($pwd2))
		{
			if ($this->user_model->changePwd(md5($pwd1),md5($pwd2),md5($pwd3)))
			{
				$tip = '修改成功！';
			}
			else
			{
				$tip = '修改失败！';
			}
		}
		$this->content_view = new View('changepwd');
		$this->content_view->set('tip', $tip);
		
	}
	
	//登陆
	public function action_login()
	{
		if ($this->user_login)
			url::redirect('welcome');
		$tip = '';
		$username = $this->request->post('username');
		$password = md5($this->request->post('password'));
		if ($username != NULL)
		{
			if ($this->user_model->login($username, $password))
			{
				$this->user_login = TRUE;
				url::redirect('welcome');
			}
			else
			{
				$tip = '登陆失败！';
			}
		}
		$this->content_view = new View('login');
		$this->content_view->set('tip', $tip);
		
	}
	
	//退出
	public function action_logout()
	{
		if (!$this->user_login)
			url::redirect('login');	
		if ($this->user_model->logout())
			$this->user_login = FALSE;
		url::redirect('login');
	}
} // End Welcome