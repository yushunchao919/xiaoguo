<?php
header("Content-type: text/html; charset=utf-8");
$conn = mysql_connect("localhost","root","root");
if(!$conn){
    die("连接失败");
}else {
    mysql_select_db("yushunchao", $conn);
}
    mysql_query("set character set 'utf8'");
	$title = $_GET['title'];
 	$center = $_GET['center'];
    $sql="insert into `sanwen` (`title`,`center`) VALUES ('".$_GET['title']."','".$_GET['center']."')";//插入添加insert into   
    $query = mysql_query($sql);
    //执行SQL语句
?>