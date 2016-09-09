<?php 
require('mysql.php');
//连接MySQL
if($_POST['submit']){
require('mysql.php');
//接收数据
$user = $_POST['user'];
$pwd  = $_POST['pwd'];
$center  = $_POST['center'];
//SQL语句
$sql = "insert into `sanwen`(`title`,`writer`,`center`)values
      ('".$user."','".$pwd."','".$center."')";
$query = mysql_query($sql);
echo ($query>0)?'SUC':'FAIL';
//页面跳转
echo "<script>
setTimeout(\"window.location='index.php'\",1000);</script>";
}else{
?>
<form action="" method="post">
题目:<input type="text" name="user"/>
<br>
作者:<input type="text" name="pwd" />
<br>
	内容:<input type="text" name="centers" />
<br>
<input type="submit" name="submit" value="添加" />
</form>
<?}?>