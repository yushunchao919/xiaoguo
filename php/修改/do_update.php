<?php
  header("Content-type: text/html; charset=utf-8");
	$conn = mysql_connect("localhost","root","root");
	mysql_select_db("yushunchao", $conn);
    mysql_query("set character set 'utf8'");
	//修改SQL语句
	//格式 $sql = "update `表名`    set  `要修改的字段名` = '修改字段的值'  where  修改条件"；
	$zhanghao=$_POST['text'];
	$pwd = $_POST['password'];
	$id = $_POST['u_id'];
    $sql="update `menu` set `account` = '".$zhanghao."' , `password`='".$pwd."' where  id=".$id;//修改
	$query=mysql_query($sql);
	if($query == true){
		echo '修改成功';
	}else{
		echo '修改失败';
	}
?>