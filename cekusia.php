<?php
mysql_connect("localhost","root",""); //{user dan password disesuaikan}
mysql_select_db("user");

$usia = $_GET['s'];
if(is_numeric($usia)){
	echo "Angka";
}
else{
	echo "bukan angka";
}

/*$query1 = mysql_query("select userid from tabeluser where userid='$id'");
$query = mysql_query("select usia from data where usia='$usia'");

if(mysql_num_rows($query)==0){
    echo "$usia belum ada yang pakai";
}else{
    echo "$usia sudah ada yang pakai";
}*/
?> 