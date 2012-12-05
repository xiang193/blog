<div id="sidebar">
	<h2>友情链接</h2>
	<ul class="sidemenu">
		<li><a href="http://www.google.cn/" target="_blank">Google</a></li>
		<li><a href="http://www.baidu.com/" target="_blank">百度</a></li>
		<li><a href="http://www.php.net/" target="_blank">PHP</a></li>
	</ul>
	
	<h2>最新留言</h2>
	<ul class="sidemenu">
		<?php 
			foreach ($guests as $value)
			{
				echo '<p>';
				echo '<span><h2><a href="'.$base_url.'index.php/blog/guest?gid='.$value['gid'].'">'.$value['g_mail'].'</a></h2></span>';
				echo '<p>'.substr($value['content'], 0, 200).'</p>';
				echo '</p>';	
			}
		?>		
	</ul>
		
	<!--日志-->
	<h2>最新日志</h2>
	<ul class="sidemenu">
		<?php 
			foreach ($articles as $value)
			{
				echo '<p>';
				echo '<span><h2><a href="'.$base_url.'index.php/blog/article?aid='.$value['aid'].'">'.$value['title'].'</a></h2></span>';
				echo '</p>';	
			}
		?>
	</ul>
</div>