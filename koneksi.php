<?php
 
$hostname = "localhost"; /*nama server*/
$dbuser = "root"; /*nama username database*/
$dbpass = "12345abcde"; /*password database*/
$dbName = "alamat"; /*nama database*/
 
$koneksi = mysql_connect($hostname,$dbuser,$dbpass) or die ('Tidak bisa konek DB');
$konekDB = mysql_select_db($dbName,$koneksi) or die ('DB tidak ada');
?>
