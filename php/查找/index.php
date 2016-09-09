<meta charset="utf-8">	
<?php
 $conn = mysql_connect("localhost","root","root"); //连接数据库
if (!$conn){
    die("连接数据库失败：" . mysql_error());
}
mysql_select_db("yushunchao", $conn);//连接数据库名
$sql = "SELECT id,name,chengji FROM chengji";
$result = mysql_query($sql);          //得到查询结果数据集
//循环从数据集取出数据
mysql_query("SET NAMES `UTF-8`");

while( $row = mysql_fetch_array($result) ){
 $encode = mb_detect_encoding($row['name'], array('ASCII','UTF-8','GB2312','GBK','BIG5')); //判断编码格式

		if ($encode == "EUC-CN"){
			$row['name'] = iconv("EUC-CN","UTF-8",$row['name']);
		}
    echo '用户名：<a href="info.php?id='.$row['id'].'"'.$row['name'].'</a><br />';
    echo '成绩:'.$row['chengji'].'<br />';
}
?>
