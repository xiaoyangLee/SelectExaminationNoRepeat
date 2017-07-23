<!DOCTYPE html>
<?php 
	//判断session值，如果没有登录过而直接访问就重定向到login界面
	if ($_SESSION['flag']!=1) {
		session_unset();
 		session_destroy();
		header("location:login.php");
	}
 ?>
<html>
<head>
	<?php 
		include 'DBhelper.php';
		$db = new DBhelper();
	?>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<script type="text/javascript" src="./js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
		function editclick(){
			//var arr = document.getElementById("id").innerHTML;

			window.alert("你点击了edit");
			return;
		}
		function deleteclick(var value) {
			window.alert("你点击了delete"+value);
			return;
		}
	</script>
	<title>管理员页面</title>
</head>
<body>
<div class="add"><h3><a href="edit.php?flag=1">点击这里添加试题</a></h3></div>
<table class="showtable" border="1px">
	<?php 
		$db->queryAll();
	 ?>
</table>
</body>
</html>