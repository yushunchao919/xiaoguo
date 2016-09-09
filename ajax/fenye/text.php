<?php
header("Content-type: text/html; charset=utf-8");
$mysqli = new mysqli('localhost', 'root', 'root', 'yushunchao');
$mysqli->set_charset('utf8');
$sql = 'SELECT `name` FROM `fenye` WHERE 1';
$r = $mysqli->query($sql);
 $num= $r->fetch_all(MYSQLI_ASSOC);
 $sqls = "select * from `fenye`";

$rs = $mysqli->query($sqls);

 $qqq= $rs->fetch_all(MYSQLI_ASSOC);

$return = array(
		'data'   => $qqq
	);
echo json_encode($return);






?>