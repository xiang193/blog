<div id="main">
	<form method="post" action="<?php echo $base_url; ?>index.php/blog/update?aid=<?php echo $detail['aid']; ?>">			
	<p>		
		<label>标题</label>
		<input name="title" value="<?php echo $detail['title']; ?>" type="text" size="30"/>
		<label>正文</label>
		<textarea rows="5" cols="5" name="content" id="blog" style="height:200px;"><?php echo $detail['content'] ?></textarea>
		<br />	
		<input class="button" type="submit" value="提交修改"/>		
	</p>		
	</form>
</div>