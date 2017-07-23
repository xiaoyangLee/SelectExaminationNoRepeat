<?php 
	
	if ($_POST['username']==""||$_POST['password']=="") {
		echo "账户名或者密码不得为空";
		echo "<br>";
		echo "<a href = './login.php'>点此返回重新登陆</a>";
		exit();
	}
	
	$mysqli = new mysqli('127.0.0.1', 'root', '','OnlineEvaluation');
	if ($mysqli->connect_error) {
		die('Connect Error (' . $mysqli->connect_errno . ') '
		. $mysqli->connect_error);
	}

		
	if ($result = $mysqli->query("SELECT * FROM t_user")) {
		//printf ("%s %s %s\n", $row[0], $row[1],$row[2]);
   		while($row=$result->fetch_array())
	{
		if ($row[1]==$_POST['username']&&$row[2]==$_POST['password']) {
		
			session_start();
			$_SESSION['flag']=1;
			header("location:./admin.php");
		}
		else{
			$flag=false;
		}
	}
		if ($flag==false) {
			# code...
			echo "账户名或者密码错误";
			
			echo "<br>";
			echo "<a href = './login.php'>点此返回重新登陆</a>";
		//	exit();
		}
   	 	$result->close();
	}
    $mysqli->close();
   ?>