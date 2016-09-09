<?php
require('mysql.php');
//连接MySQL
 $title = $_POST['title'];
$writer = $_POST['writer'];
$center = $_POST['center'];

$id = $_POST['u_id'];
//SQL语句
$sql = "update `sanwen` set `title`='".$title."',`writer`='".$writer."',`center`='".$center."' where  id=".$id;
 $query=mysql_query($sql);  
 echo "<script>
setTimeout(\"window.location='index.php'\",1000);</script>";
if($query == true){
		echo '修改成功';
	}else{
		echo '修改失败';
	}
?>

