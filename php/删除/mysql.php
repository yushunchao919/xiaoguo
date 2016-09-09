<?php
//连接数据库MySQL
$con=mysql_connect('localhost','root','root');
//选择数据库
if(!$con){
   die ('连接失败');
}else{
   mysql_select_db('test',$con);
}
mysql_query("set names 'utf8'"); //数据库编码格式  utf8
?>