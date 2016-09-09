<?php
header("Content-type: text/html; charset=utf-8");
$mysqli = new mysqli('localhost', 'root', 'root', 'yushunchao');
$mysqli->set_charset('utf8');
$sql = "SELECT `name` FROM `liuyanban` WHERE 1";
$r = $mysqli->query($sql);
$data = $r->fetch_all(MYSQLI_ASSOC);

$rn = array(
		'status' => 1,
		'info'   => '成功',
		'data'   => $data
	);

echo json_encode($rn);

?>