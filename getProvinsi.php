<?php
 
ini_set('display_errors',0);
require_once "db.php";
 
//ambil parameter
$idNegara = $_POST['idNegara'];
 
if($idNegara == ''){
     exit;
}else{
     $sql = "
          SELECT
               idProvinsi,
               namaProvinsi
          FROM
               provinsi
          WHERE
               idNegara = '$idNegara'
          ORDER BY namaProvinsi
     ";
     $getNamaProvinsi = mysql_query($sql,$koneksi) or die ('Query Gagal');
     while($data = mysql_fetch_array($getNamaProvinsi)){
          echo '<option value="'.$data['idProvinsi'].'">'.$data['namaProvinsi'].'</option>';
     }
     exit;    
}
?>