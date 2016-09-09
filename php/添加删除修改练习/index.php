<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>unsh2der演示</title>
<style>
	ul h2{margin-bottom: 10px;}
</style>
</head>
<body>
<h2 style="text-align:center">   <a href="s3.php">添加</a></h2>
	<?php
		  header("Content-type: text/html; charset=utf-8");
			//include('mysql.php');    加载快 不安全
			require("mysql.php");
			//写SQL语句
			$sql = "select * from `sanwen` ";
			//执行语句
			$query = mysql_query($sql);
			//操作数据
			//echo $query;
			while($rs=mysql_fetch_array($query)){
			$id = $rs['id'];
			?>
			   <h2><a href="inof.php	?id=<?php echo $id?>"><?php echo $rs['title']?></a></h2>	
			   <h2>
			       <a href="del.php?id=<?php echo $id?>">删除</a>
				   <a href="s1.php?id=<?php echo $id?>">修改</a>
				
				</h2>
		  <?php
		}
		?>


</body>
</html>
