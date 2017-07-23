<?php 
	/**
	* Database操作类
	*/
	class DBhelper
	{	

		//清空t_id中的useid
		public function deleteId()
		{
			$mysqli = new mysqli('127.0.0.1', 'root', '','OnlineEvaluation');
		if ($mysqli->connect_error) {
		die('Connect Error (' . $mysqli->connect_errno . ') '
		. $mysqli->connect_error);
		}	
			$result=$mysqli->query("DELETE from t_id");
			if ($result) {
			//	echo "清理成功";
			}else{
				echo "清理失败";
			}
		}

		//查询t_id表的useid
		public function queryUseId($id)
		{
			$mysqli = new mysqli('127.0.0.1', 'root', '','OnlineEvaluation');
		if ($mysqli->connect_error) {
		die('Connect Error (' . $mysqli->connect_errno . ') '
		. $mysqli->connect_error);
		}	
			if ($result = $mysqli->query("SELECT useid from t_id")) {

				while($row=$result->fetch_array()){
					//比较输入的$id，如果有相同的则返回ture
					if ($id==$row[0]) {
						return true;
					}	
				}
			}
			$result->close();
			$mysqli->close();
		}
		//将使用过的表id插入到t_id中
		public function insertId($id)
		{
			$mysqli = new mysqli('127.0.0.1', 'root', '','OnlineEvaluation');
		if ($mysqli->connect_error) {
		die('Connect Error (' . $mysqli->connect_errno . ') '
		. $mysqli->connect_error);
		}	
			//设置utf-8编码
			//$mysqli->query('SET NAMES utf8');
			$result = $mysqli->query("insert into t_id values(null,".$id.")");
			if ($result) {
				//echo "插入id成功";
			}else{
				echo "出现异常情况,请再次刷新！";
				exit();
			}
		
		}

		//查询所有id，存入到一个array[]中。
		public function queryId()
		{
			$mysqli = new mysqli('127.0.0.1', 'root', '','OnlineEvaluation');
		if ($mysqli->connect_error) {
		die('Connect Error (' . $mysqli->connect_errno . ') '
		. $mysqli->connect_error);
		}	
			if ($result = $mysqli->query("SELECT id FROM t_info")) {

				while($row=$result->fetch_array()){
					//print_r($row[0]."&nbsp;");
					$arr[] = $row[0];
				}
				return $arr;
		}
		$result->close();
		$mysqli->close();
	}

		//根据id删除数据
		public function delete($id)
		{
			$mysqli = new mysqli('127.0.0.1', 'root', '','OnlineEvaluation');
		if ($mysqli->connect_error) {
		die('Connect Error (' . $mysqli->connect_errno . ') '
		. $mysqli->connect_error);
		}	
			$result = $mysqli->query("DELETE FROM t_info WHERE id = ".$id);
			if ($result) {
				header("location:./admin.php");
			
			}else{
				echo "修改失败";
				exit();
			}
			$result->close();
			$mysqli->close();
		}


		//根据id修改数据
		public function update($id,$ask,$answer)
		{
			$mysqli = new mysqli('127.0.0.1', 'root', '','OnlineEvaluation');
		if ($mysqli->connect_error) {
		die('Connect Error (' . $mysqli->connect_errno . ') '
		. $mysqli->connect_error);
		}	
			//设置utf-8编码
			$mysqli->query('SET NAMES utf8');
			$result = $mysqli->query("UPDATE t_info SET exam ='".$ask."' ,answer ='".$answer."'
			WHERE id =".$id);
			if ($result) {
				header("location:./admin.php");
			
			}else{
				echo "修改失败";
				exit();
			}
			$result->close();
			$mysqli->close();
		}


		//根据id查询exam数据
		public function queryById($id)
		{
			$mysqli = new mysqli('127.0.0.1', 'root', '','OnlineEvaluation');
		if ($mysqli->connect_error) {
		die('Connect Error (' . $mysqli->connect_errno . ') '
		. $mysqli->connect_error);
		}	
			//设置utf-8编码
			$mysqli->query('SET NAMES utf8');
			$result = $mysqli->query("SELECT exam FROM t_info where id =".$id);
			while($row=$result->fetch_array()){
				echo $row[0];
			}
			$result->close();
			$mysqli->close();
		}
		//根据id查询answer数据
		public function queryAnswerById($id)
		{
			$mysqli = new mysqli('127.0.0.1', 'root', '','OnlineEvaluation');
		if ($mysqli->connect_error) {
		die('Connect Error (' . $mysqli->connect_errno . ') '
		. $mysqli->connect_error);
		}	
			//设置utf-8编码
			$mysqli->query('SET NAMES utf8');
			$result = $mysqli->query("SELECT answer FROM t_info where id =".$id);
			while($row=$result->fetch_array()){
				echo $row[0];
			}
			$result->close();
			$mysqli->close();
		}

		//新建一条数据
		public function insert($ask,$answer)
		{
			$mysqli = new mysqli('127.0.0.1', 'root', '','OnlineEvaluation');
		if ($mysqli->connect_error) {
		die('Connect Error (' . $mysqli->connect_errno . ') '
		. $mysqli->connect_error);
		}	
			//设置utf-8编码
			$mysqli->query('SET NAMES utf8');
			$result = $mysqli->query("insert into t_info values(null,'".$ask."','".$answer."')");
			if ($result) {
				header("location:./admin.php");
			}else{
				echo "插入失败";
				exit();
			}
			$result->close();
			$mysqli->close();
		}

		//查询所有
		function queryAll(){

		$mysqli = new mysqli('127.0.0.1', 'root', '','OnlineEvaluation');
		if ($mysqli->connect_error) {
		die('Connect Error (' . $mysqli->connect_errno . ') '
		. $mysqli->connect_error);
		}
		//设置utf-8编码
		$mysqli->query('SET NAMES utf8');
	if ($result = $mysqli->query("SELECT * FROM t_info group by id desc")) {
		//printf ("%s %s %s\n", $row[0], $row[1],$row[2]);
   		while($row=$result->fetch_array()){	
   			echo "<tr>";
   			
   			echo "<td id='id'>";
   			echo $row[0];
  			echo "</td>";
 			
 			echo "<td>";
   			echo $row[1];
   			echo "</td>";

   			echo "<td>";
   			echo $row[2];
   			echo "</td>";
   			
   			echo "<td>";
   			echo "<button><a href='edit.php?flag=0&id=".$row[0]."'>编辑</a></button>";
   			echo "</td>";

   			echo "<td>";
   			echo "<button><a href='editProceed.php?flag=2&id=".$row[0]."'>删除</a></button>";
   			echo "</td>";
			echo "</tr>";
		}	
		$result->close();
		}
	$mysqli->close();
	}
	
}
	
