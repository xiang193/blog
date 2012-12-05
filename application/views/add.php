<div id="main">
	<h3>新日志</h3>
	<form method="post" action="<?php echo $base_url; ?>index.php/blog/add">			
	<p>		
		<label>标题</label>
		<input name="title" value="" type="text" size="30"/>
		<label>正文</label>
		<textarea rows="5" cols="5" name="content" id="blog" style="height:200px;"></textarea>
		<br />	
		<input class="button" type="submit" value="发布"/>		
	</p>		
	</form>
</div>