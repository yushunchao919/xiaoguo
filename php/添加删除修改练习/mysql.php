<?php
     //编码
         header("Content-type: text/html; charset=utf-8");
          //连接数据库MySQL         
			$con=mysql_connect('localhost','root','root');
			//选择数据库
			mysql_select_db('yushunchao',$con);
			mysql_query("set names 'utf8'"); 
	?>