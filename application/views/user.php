<div>
	<?php
		if ($uid != 0)
		{
			echo '<div class="nav_right">';
			echo '<span><a href="'.$base_url.'index.php/blog/set">修改</a></span>';
			echo ' | ';
			echo '<span><a href="'.$base_url.'index.php/blog/changepwd">修改密码</a></span>';
			echo '</div><br />';
		}
	?>
	<div>
		<p>
			<span><strong>博客名称：</strong></span>
			<span><?php echo $detail['blog_name']; ?></span>
		</p>
		<p>
			<span><strong>邮箱:</strong></span>
			<span><?php echo $detail['mail']; ?></span>
		</p>
	</div>
</div>