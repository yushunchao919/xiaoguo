<!DOCUYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    </head>
<body>
<?php
header('content-type:text/html;charset=utf-8');
$con=mysql_connect('localhost','root','root');
mysql_select_db('yushunchao',$con);
mysql_query('set names `utf8`');
$sql = "select * from `fenye` where 1";
$query = mysql_query($sql);
//总记录数
$num = mysql_num_rows($query);
//每页显示条数
$pageSize = 3 ;
//总结页数
$totlenum = ceil($num/$pageSize);
/*分页 */
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

$r=$pageSize*($page-1);
 $sqls = "select * from `fenye` limit ".$r.",".$pageSize."";
$queryee = mysql_query($sqls);
while($rs = mysql_fetch_assoc($queryee)) {
    ?>
    <ul>
        <li><?php echo $rs['name'] ?></li>
    </ul>
    <?php
}

?>
<tr>
 <td>第<?php echo $page ;?> 页</td>
    <td>共<?php echo $totlenum ;?> 页</td>
    <td><a href="page.php?page=1">首页</a></td>
    <td><a href="page.php?page=<?php echo $prepage;?>">上页</a></td>
    <td><a href="page.php?page=<?php echo $nextpage;?>">下一页</a></td>
    <td><a href="page.php?page=<?php echo $totlenum;?>">尾页</a></td>
</tr>
</body>
</html>