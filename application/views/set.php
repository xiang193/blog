<h2>基本信息修改</h2>
<form method="post" action="<?php echo $base_url; ?>index.php/blog/set">			
<p>		
	<label>博客名称</label>
	<input name="blog_name" value="<?php echo $detail['blog_name']; ?>" type="text" size="30"/>
	<label>邮箱</label>
	<input name="mail" value="<?php echo $detail['mail']; ?>" type="text" size="30"/>
	<br />
	<input class="button" type="submit" value="提交"/>&nbsp;&nbsp;&nbsp;
</p>
</form>