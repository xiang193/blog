<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
		<?php
			echo html::style(
				'./application/assets/css/style/CoolWater.css'
			);
		?>
		<title>blog-by-xiang</title>
	</head>
<body>
	<!-- wrap starts here -->
	<div id="wrap">
		<!--header -->
		<div id="header">			
			<h1 id="logo-text"><a href="<?php echo $base_url; ?>index.php/blog/index">blog</a></h1>		
			<p id="slogan"></p>		
				
			<div id="header-links">
				<p>
				<?php
					echo '<a href="'.$base_url.'index.php/blog/index">主页</a>';
					echo ' | ';
					if ($uid == 0)
						echo '<a href="'.$base_url.'index.php/blog/login">登陆</a>';
					else
						echo '<a href="'.$base_url.'index.php/blog/logout">退出</a>';
				?>
				</p>		
			</div>		
		</div>
		<!-- navigation -->	
		<div  id="menu">
			<ul>
				<li id="current"><a href="<?php echo $base_url; ?>index.php/blog/index">主页</a></li>
				<li><a href="<?php echo $base_url; ?>index.php/blog/guest">留言板</a></li>
				<li><a href="<?php echo $base_url; ?>index.php/blog/list">日志</a></li>
				<li><a href="<?php echo $base_url; ?>index.php/blog/user">会员中心</a></li>
			</ul>
		</div>	
		<!-- content-wrap starts here -->
		<div id="content-wrap">