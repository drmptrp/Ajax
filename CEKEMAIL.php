<?php mysql_connect("localhost","root","");
mysql_select_db("user"); 
 

$email = $_GET['x']; 
 

$query = mysql_query("SELECT `email` FROM `tabeluser` WHERE `email`='$email'"); 
 
if(mysql_num_rows($query)==0)
	{     
		echo "$email	 belum ada yang pakai"; 
	}else{     echo "$email	 sudah ada yang pakai"; 
} 
?> 
