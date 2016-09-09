<meta charset="utf-8">	
<?php
 $conn = mysql_connect("localhost","root","root"); //连接数据库
if (!$conn){
    die("连接数据库失败：" . mysql_error());
}
mysql_select_db("yushunchao", $conn);//连接数据库名

//接受值
 $id = $_GET['id'];

 $sql = "SELECT name,chengji FROM chengji where id=".$id;
$result = mysql_query($sql);                //得到查询结果数据集
//循环从数据集取出数据

$list = mysql_fetch_row($result);

mysql_query("SET NAMES `UTF-8`");
print_r($list);//数组 输出
?>
