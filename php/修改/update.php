<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>form</title>
	<style>
		.box{width: 300px;height:200px;border:2px solid #eee;margin:  0 auto;text-align: center;}
	</style>
</head>
<body>
	<div class="box">
      <form method="post" action="do_update.php">
	  <?php 
	  header("Content-type: text/html; charset=utf-8");
	$conn = mysql_connect("localhost","root","root");
	 mysql_select_db("yushunchao", $conn);
    mysql_query("set character set 'utf8'");
	$sql="select * from `list` where `id`=1";
    $query=mysql_query($sql);
	$rs=mysql_fetch_assoc($query);
	  ?>
	  <p>账号：<input type="text" name="text" value="<?php echo $rs['account']?>"></p>
	  <p>密码：<input type="text" name="password" value="<?php echo $rs['password']?>"></p>
	  <input type="hidden" name='u_id' value = <?php echo $rs['id']?> >
	    <input type="submit" value="修改">
	</form>
	</div>
</body>
</html>