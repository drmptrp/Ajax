<?php
mysql_connect("localhost","root",""); //{user dan password disesuaikan}
mysql_select_db("user");

$id = $_GET['q'];

//$query1 = mysql_query("select userid from tabeluser where userid='$id'");
$query = mysql_query("SELECT `userid` FROM `table_user` WHERE `userid`='$id'");

if(mysql_num_rows($query)==0){
    echo "$id belum ada yang pakai";
}else{
    echo "$id sudah ada yang pakai";
}
?> 