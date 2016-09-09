<?php
header("Content-type: text/html; charset=utf-8");
$mysqli = new mysqli('localhost', 'root', 'root', 'yushunchao');
$mysqli->set_charset('utf8');
$sql = "SELECT `name` FROM `liuyanban` WHERE 1";
$r = $mysqli->query($sql);
$return = $r->fetch_all(MYSQLI_ASSOC);
$return = array(
		'status' => 1,
		'info'   => '成功',
		'data'   => $data
	);
$p=isset($_POST['text'])?$_POST['text']:'';
$sq="insert into `liuyanban` (`name`) values ('".$p."')";
$rs = $mysqli->query($sq);

echo json_encode($return);
?>
