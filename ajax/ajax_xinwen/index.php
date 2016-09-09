<?php
$mysqli=new mysqli('localhost','root','root','yushunchao');
$mysqli->set_charset('utf8');
$sql='SELECT `name` FROM `xinwen`';
$r = $mysqli->query($sql);
$arr = $r->fetch_all(MYSQLI_ASSOC);

 $return = array(
		'status' => 1,
		'info'   => '成功',
		'data'   => $arr,
	);


echo json_encode($return );
	?>