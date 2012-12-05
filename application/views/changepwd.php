<h2>密码修改</h2>
<form method="post" action="<?php echo $base_url; ?>index.php/blog/changepwd">			
<p>		
	<label>原始密码</label>
	<input name="pwd1" value="" type="password" size="30"/>
	<label>新密码</label>
	<input name="pwd2" value="" type="password" size="30"/>
	<label>重复密码</label>
	<input name="pwd3" value="" type="password" size="30"/>
	<br />
	<input class="button" type="submit" value="提交"/>&nbsp;&nbsp;&nbsp;
</p>
</form>
<h3><?php echo $tip; ?></h3>