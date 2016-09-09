<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>文章</title>
<style>
.box{width:800px;margin: 0 auto;}
.center{text-align: center;}
.abbreviation{text-indent:2em}
</style>
</head>
<body>
		<?php
	 header("Content-type: text/html; charset=utf-8");
	 $id = $_GET['id'];
	//连接数据库MySQL
	$con=mysql_connect('localhsot','root','root');
	//选择数据库
	mysql_select_db('test',$con);
	mysql_query("set names 'utf8'"); 
	
	$sql = "select * from `sanwen` where `id`=".$id;
	$query = mysql_query($sql);
	$rsdb = mysql_fetch_array($query);
	
	?>
<div class="box">
<h1 class="center"><?php echo $rsdb['title']?></h1>
<p class="center"><span><?php echo $rsdb['writer']?></span></p>
<p class="abbreviation"><?php echo $rsdb['content']?></p>
</div>



</body>
</html>
