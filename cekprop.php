<?php
 
mysql_connect("localhost","root",""); //{user dan password disesuaikan}
mysql_select_db("user");
 
//ambil parameter
$idNegara = $_GET['t'];
 
if($idNegara == ''){
     exit;
}else{
     $sql = "
         SELECT  `idk`, `kabupaten` FROM `kabupaten` WHERE `idp` = '$idNegara'
     ";
     $getNamaProvinsi = mysql_query($sql,$koneksi) or die ('Query Gagal');
     while($data = mysql_fetch_array($getNamaProvinsi)){
          echo '<option value="'.$data[0].'">'.$data[1].'</option>';
     }
     exit;    
}
?>