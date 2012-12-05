<div id="main">
	<h2>留言板</h2>
	<p>欢迎您的到来，谢谢留言。</p>
	<?php foreach($list as $value) :?>
		<blockquote>
			<p>
				<span>
					<?php echo $value["g_mail"]; ?>说：
				</span>
				<?php
					if ($uid != 0)
						echo '<span class="nav_right"><a href="'.$base_url.'index.php/blog/guestdel?gid='.$value['gid'].'">删除</a></span>';
				?>
			</p>
			<p><?php echo $value["content"]; ?></p>
		</blockquote>
		<br />
	<?php endforeach; ?>	
	<br />
	<h3>留言</h3>
	<form method="post" action="guestadd">			
	<p>		
		<label>Your Email:</label>
		<input name="mail" value="" type="text" size="30"/>
		<label>Your Comments:</label>
		<textarea rows="5" cols="5" name="content" id="guest" style="height:200px;"></textarea>
		<br />	
		<input class="button" type="submit" />		
	</p>		
	</form>	

</div>
