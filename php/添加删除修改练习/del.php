<?php 
	 require('mysql.php');
	 $id=intval($_GET['id']);
	 if(!$id)die;
	 $sql="delete from `sanwen` where `id`=".$id;
	 $query = mysql_query($sql);
	 echo ($query>0)?'成功':'失败';
	 echo "<script> 
			setTimeout('window.location=\"index.php\"',1000);
		  </script>";
	?>