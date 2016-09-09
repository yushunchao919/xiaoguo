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
	 require("mysql.php");      //第一种
   // include('mysql.php');      第二种           加载快 不安全  
   if($id){
    	$sql = "select * from `sanwen` where `id`=".$id;
   }
	else{
	die;
	}
	//第二种  if(!$id){die;}
	//else{$sql = "select * from `sanwen` where `id`=".$id;}
	
	$query = mysql_query($sql);
	$rsdb = mysql_fetch_array($query);
	?>
<div class="box">
<h1 class="center"><?php echo $rsdb['title']?></h1>
<p class="center"><span><?php echo $rsdb['writer']?></span></p>
<p class="abbreviation"><?php echo $rsdb['center']?></p>
</div>
</body>
</html>
