<!DOCTYPE html>
<?php 
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
	<meta charset="utf-8">
	<title>编辑已有的条目</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<script type="text/javascript" src="./js/util.js"></script>
	<script type="text/javascript" src="./js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
		function resetOrNotReset() {
			if (getUrlParam('flag')==1) {
				reset();
			}
		}

		function reset() {
			//重置操作
			document.getElementById("ask").value="";
			document.getElementById("answer").value="";
		}
		function submit() {

			if (document.getElementById("ask").value==""||document.getElementById("answer").value=="") {
				window.alert("不得为空！");
				return;
 			}
 			//获取到url中的flag参数
 			var flag = getUrlParam('flag');
 			//window.alert(flag);
 			//flag=0执行修改操作
 			if (flag==0) {
 				var id = getUrlParam('id');
 				window.location.href="./editProceed.php?flag=0&id="+id+"&ask="+document.getElementById("ask").value+"&answer="+document.getElementById("answer").value;
 			}
 			//flag=1执行新建操作
 			if (flag==1){
 			 	window.location.href="./editProceed.php?flag=1&ask="+document.getElementById("ask").value+"&answer="+document.getElementById("answer").value;
	 }
		}
	</script>
</head>

<body onload="resetOrNotReset()">
<div class="editdiv">
	试题信息：
	<textarea class="textarea" id="ask">
	<?php 
		if ($_GET['flag']==0) {
			echo $db->queryById($_GET['id']);
		}
		
	?>
	</textarea>
	<br>
	答案：
	<textarea class="textarea" id= "answer">
	<?php 
		if ($_GET['flag']==0) {
			echo $db->queryAnswerById($_GET['id']);
		}
	 ?>
	</textarea>
	<button onclick="reset()">重置</button>
	<button onclick="submit()">提交</button>
</div>
</form>
</body>
</html>