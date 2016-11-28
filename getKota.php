<?php
 
ini_set('display_errors',0);
require_once "db.php";
 
//ambil parameter
$idProvinsi = $_POST['idProvinsi'];
 
if($idProvinsi == ''){
     exit;
}else{
     $sql = "
          SELECT
               idKota,
               namaKota
          FROM
               kota
          WHERE
               idProvinsi = '$idProvinsi'
          ORDER BY namaKota
     ";
     $getNamaKota = mysql_query($sql,$koneksi) or die ('Query Gagal');
     while($data = mysql_fetch_array($getNamaKota)){
          echo '<option value="'.$data['idKota'].'">'.$data['namaKota'].'</option>';
     }
     exit;    
}
?>