<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>

     <table border="1" width="80%" cellpadding="0" cellspacing="0">
	 <tr>
	    <td>编号</td>
	    <td>标题</td>
	    <td>作者</td>
	    <td>删除</td>
	 </tr>
<?php
    require('mysql.php');
	$sql = "select * from `news` where 1";
	$query = mysql_query($sql);
	$i = 1;
	while($rs=mysql_fetch_assoc($query)){
	if($i<10)$flag = '0'.$i;
?>
     <tr>
	    <td><?php echo $flag;?></td>
	    <td><?php echo $rs['title']?></td>
	    <td><?php echo $rs['author']?></td>
	    <td><a href="del.php?id=<?php echo $rs['id']?>">删除</a></td>
	 </tr>
<?php
$i++;
}
?> 
	 </table>
	</body>
</html>