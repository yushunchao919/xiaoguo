<?php
			$con=mysql_connect('localhost','root','root');
			mysql_select_db('yushunchao',$con);
			mysql_query("set names 'utf8'");  			
			$text=$_POST["tet"];			
          $pswd=$_POST["pswd"];		
		  $sqls= "select * from `input` where `name`='".$text."'";
		  $query=mysql_query($sqls);
	        $rows= mysql_num_rows($query);
		  	if($rows==true){
		  		echo '账号已存在';
				
		  	}else{
		  		echo '成功';
				  $sql="insert into `input`  (`name`,`pswd`) values ('".$text."','".$pswd."') ";
			 if(mysql_query($sql)){
			 	echo '成功';
			 }else{
			 	echo '错误';
			 }
		  	}
		
	?>