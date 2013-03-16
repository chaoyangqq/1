<?php
include_once('admin_global.php');
 if(!empty($_POST[username])&& !empty($_POST[password])) $db->Get_user_login($_POST[username],$_POST[password]);
?>
<!DOCTYPE HTML>
<html><head>
<meta http-equiv='Content-Type' content='text/html; charset=gbk'>
<link rev=MADE href='mailto:haowubai@hotmail.com'>
<title>后台管理</title>
<link rel='stylesheet' type='text/css' href='images/index.css'>

<script> if(self!=top){ window.open(self.location,'_top'); } </script>
</head>
<body>

	<div class="wrapper">
		<form action="" method="post" >
		<div class="loginBox">
			<div class="loginBoxCenter" >
				<p><label for="username">用户名：</label></p>
				<p><input type="username" id="username" name="username" class="loginInput" autofocus required autocomplete="off" placeholder="请输入用户名" value="" /></p>
				<p><label for="password">密码：</label></p>
				<p><input type="password" id="password" name="password" class="loginInput" required placeholder="请输入密码" value="" /></p>
			</div>
			<div class="loginBoxButtons">
				
				<button class="loginBtn">登录</button>
			</div>
		</div>
		</form>
	</div>
	
	
</body></html>






