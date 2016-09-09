<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>form</title>
</head>
<body>
	<?php
		require('mysql.php');
		$id=$_GET['id'];
		$sql="select * from `sanwen` where `id`=".$id;
    $query=mysql_query($sql);
	$rs=mysql_fetch_assoc($query);
		?>
<form action="s2.php" method="post">
题目:<input type="text" name="title"  value="<?php echo $rs['title']?>"/>
<br>
作者:<input type="text" name="writer"   value="<?php echo $rs['writer']?>"/>
<br>
	内容:<input type="text" name="center"  value="<?php echo $rs['center']?>" />
<br>
	<input type="hidden" name='u_id' value = <?php echo $rs['id']?> >
<input type="submit" name="submit" value="修改" />
</form>
</body>
</html>