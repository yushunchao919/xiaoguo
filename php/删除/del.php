<?php
require('mysql.php');
$id = $_GET['id'];
if(!$id)die;
$sql = "delete from `news` where `id`=".intval($id);
$query = mysql_query($sql);
echo ($query>0)?'SUC':'FAIL';

echo "<script> 
			setTimeout('window.location=\"index.php\"',1000);
		  </script>";
?>