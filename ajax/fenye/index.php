<?php
header("Content-type: text/html; charset=utf-8");
$mysqli = new mysqli('localhost', 'root', 'root', 'yushunchao');
$mysqli->set_charset('utf8');
$sql = 'SELECT `name` FROM `fenye` WHERE 1';
$r = $mysqli->query($sql);

 $num= $r->fetch_all(MYSQLI_ASSOC);
$num = count($num);
//每页显示条数
$pageSize = 3 ;
//总结页数
$totlenum = ceil($num/$pageSize);
if(!empty($_GET['page'])){
    $page = intval($_GET['page']);
}else{
    $page = 1;
}
//计算上一页
if($page>1){
   $prepage = $page - 1;
}else{
    $prepage = 1;
}
//计算下一页
if($page<$totlenum){
    $nextpage = $page +1 ;
}else{
    $nextpage = $totlenum;
}
$rsd=$pageSize*($page-1);
 $sqls = "select * from `fenye` limit ".$rsd.",".$pageSize."";

$rs = $mysqli->query($sqls);

 $qqq= $rs->fetch_all(MYSQLI_ASSOC);

$return = array(
		'status' => 5,
		'data'   => $qqq,
		'totlenum'   => $totlenum,
		'page'   =>  $page,
		'prepage' =>  $prepage,
		'nextpage'  =>  $nextpage,
	);

echo json_encode($return);





?>