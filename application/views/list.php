<div id="main">
	<div>
		<span>共<?php echo $totalpage; ?>页</span>
		<span>当前第<?php echo $page + 1; ?>页</span>
		<?php
			if ($prepage >= 0)
				echo '<span><a href="'.$base_url.'index.php/blog/list?page='.$prepage.'">上一页</a></span>';
			if ($nextpage < $totalpage)
				echo '<span><a href="'.$base_url.'index.php/blog/list?page='.$nextpage.'">下一页</a></span>';
			if ($uid != 0)
				echo '<span class="nav_right"><a href="'.$base_url.'index.php/blog/add">新日志</a></span>';
		?>
	</div>
	<div>
	<?php 
		foreach ($list as $value)
		{
			echo '<p>';
			echo '<span><h2><a href="'.$base_url.'index.php/blog/article?aid='.$value['aid'].'">'.$value['title'].'</a></h2></span>';
			echo '</p>';
			echo '<p>'.substr($value['content'], 0, 200).'</p>';	
			echo '<p><span>浏览'.$value['view'].'次</span><span class="nav_right"><a href="'.$base_url.'index.php/blog/article?aid='.$value['aid'].'">Read more</a></span></p>';
		}
	?>
	</div>
	<div></div>
</div>