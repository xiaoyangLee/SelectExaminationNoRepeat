<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>管理试题库</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<script type="text/javascript">
		//不知道为何出了故障，暂不使用。
		function loginCheck() {
			document.forms[0].username.value='';
		    document.forms[0].password.value='';
			}

	</script>
</head>
<body>
<div class="loginForm">
<form action="./loginProceed.php" method="POST">
	用户名：<input type="text" name="username"/>
	<br>
	密&nbsp;&nbsp;&nbsp;码：<input type="password" name="password"/>
	<br>
	<input type="submit" name="login" value="登录"/>
</form>
</div>
</body>
</html>

