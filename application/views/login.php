<h2>会员登录</h2>
<form method="post" action="<?php echo $base_url; ?>index.php/blog/login">			
<p>		
	<label>登录名</label>
	<input name="username" value="" type="text" size="30" />
	<label>密码</label>
	<input name="password" value="" type="password" size="30"/>
	<br />
	<input class="button" type="submit" value="登录"/>&nbsp;&nbsp;&nbsp;
</p>
</form>
<h3><?php echo $tip; ?></h3>