<?php defined('SYSPATH') or die('No direct script access.');

class Model_Blog extends Model {
	private $article_table;
	private $comment_table;
	
	public function __construct()
	{
		//parent::__construct(Request $request ,Response $response);
		$this->article_table='article';
		$this->comment_table='comment';
	}
	
	//添加文章
	public function article_add($title = NULL, $content = NULL)
	{
		if ($title == NULL || $content == NULL)
			return FALSE;
		return DB::insert($this->article_table,array('title', 'content', 'view', 'count', 'time'))
				->values(array($title, $content, 0, 0, time()))
				->execute();
	}
	
	//查询十篇文章内容列表，默认$page为第一页
	public function article_list($page = 0)
	{
		$result = DB::select('aid', 'title', 'view', 'count', 'content')
					->from($this->article_table)
					->order_by('time','DESC')
					->limit(5)
					->offset($page*5)
					->execute()
					->as_array();
		return $result;
	}
	
	public function article_count()
	{
		$count = DB::select(DB::expr('COUNT(*) AS a_count'))
					->from($this->article_table)
					->execute()
					->as_array();
		$count = $count[0]['a_count'] ? $count[0]['a_count'] : 0;
		return $count;
	}

	//查询aid为$aid的文章内容
	public function article_detail($aid = NULL)
	{
		if ($aid == NULL)
			url::redirect('list');
		$result = DB::select()
					->from($this->article_table)
					->where('aid', '=', $aid)
					->execute()
					->as_array();
		if (empty($result))
			return FALSE;
		else
			DB::update($this->article_table)
				->set(
					array(
						'view' => $result[0]['view']+1
					)
				)
				->where('aid', '=', $aid)
				->execute();
		$result = $result[0];
		return $result;
	}
	
	//删除文章
	public function article_delete($aid = NULL)
	{
		if ($aid == NULL)
			return FALSE;
		return DB::delete($this->article_table)
				->where('aid', '=', $aid)
				->execute();
	}
	
	//更新文章内容
	public function article_update($aid = NULL,$title = NULL, $content = NULL)
	{
		if (empty($title) || empty($content))
			return FALSE;
		return DB::update($this->article_table)
				->set(
					array(
						'title'	  => $title,
						'content' => $content,
						'time' 	  => time()
					)
				)
				->where('aid','=',$aid)
				->execute();
	}

	//查询aid为$aid的文章评论列表
	public function comment_list($aid=0,$page=0)
	{
		if ($aid==0)
			return null;
		$result = DB::select()
					->from($this->comment_table)
					->where('aid','=',$aid)
					->order_by('time','DESC')
					->limit(10)
					->offset($page)
					->execute()
					->as_array();
		return $result;	
	}
	
	//评论添加
	public function comment_add($column,$value)
	{
		//$this->db->insert($this->comment_table,$data);
		DB::insert($this->comment_table,column)
			->values($value)
			->execute();
	}
	
	//查询cid为$cid的评论内容
	public function comment_detail($cid=0)
	{
		if ($cid==0)
			return null;
		$result = DB::select()
					->from($this->comment_table)
					->where('cid','=',$cid)
					->order_by('time','DESC')
					->limit(10)
					->offset($page)
					->execute()
					->as_array();
		return $result;
	}
	
	//删除评论
	public function comment_delete($cid=0)
	{
		if ($cid=0)
			return null;
		DB::delete($this->comment_table)
			->where('cid','=',$cid)
			->execute();
	}
	
} // End Article
