<?php
mysql_connect("localhost","root",""); //{user dan password disesuaikan}
mysql_select_db("user");

$nama = $_GET['r'];
if (is_null($nama)){
	echo "Nama Lengkap harus diisi";
}else{
	echo "Nama Lengkap sudah terisi";
}

/*$query1 = mysql_query("select userid from tabeluser where userid='$id'");
$query = mysql_query("select namalengkap from data where namalengkap='$id'");

if(mysql_num_rows($query)==0){
    echo "$id belum ada yang pakai";
}else{
    echo "$id sudah ada yang pakai";
}*/
?> 