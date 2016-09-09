<?php  
			$con=mysql_connect('localhost','root','root');
			mysql_select_db('yushunchao',$con);
			mysql_query("set names 'utf8'");  			
			$text=$_POST["user"];
          $pswd=$_POST["pwd"];
   $sql = "select * from `input` where `name`='".$text."' and `pswd`= '".$pswd."' ";
     $query  =  mysql_query($sql);
   $row = mysql_num_rows($query);
 if($row==true){
 	echo '成功';
 }else{
 	echo '错误';
 }
   
	?>