<?php 
		include 'DBhelper.php';
		$db = new DBhelper();
		//标志位为0判断为编辑一条已有信息
		if ($_GET['flag']==0) {
			$db->update($_GET['id'],addslashes($_GET['ask']),addslashes($_GET['answer']));
		}
		
		//标志为1判断为新建一条信息
		if ($_GET['flag']==1) {
			$db->insert(addslashes($_GET['ask']),addslashes($_GET['answer']));
		}	
		//标志位为2判断为删除一条信息
		if ($_GET['flag']==2) {
			$db->delete($_GET['id']);
		}
		
 ?>