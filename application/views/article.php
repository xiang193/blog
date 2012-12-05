<div id="main">
	<?php 
			echo '<p>';
			echo '<span><h2><a href="'.$base_url.'index.php/blog/article?aid='.$detail['aid'].'">'.$detail['title'].'</a></h2></span>';
			if ($uid != 0)
			{
				echo '<span class="nav_right"><a href="'.$base_url.'index.php/blog/delete?aid='.$detail['aid'].'">删除</a></span>';
				echo '<span class="nav_right"><a href="'.$base_url.'index.php/blog/update?aid='.$detail['aid'].'">修改</a></span>';
			}
			echo '</p>';
			echo '<p>'.$detail['content'].'</p>';	
	?>
</div>