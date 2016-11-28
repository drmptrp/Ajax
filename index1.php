<?php
 
require_once "db.php";
 
// ambil data
$sql = "
SELECT
     idNegara,
     namaNegara
FROM
     negara
ORDER BY namaNegara
";
$getComboNegara = mysql_query($sql,$koneksi) or die ('Query Gagal');
 
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
 
<link rel="Shortcut Icon" href="favicon.ico" />
<title>Dropdown List Bertingkat dengan jQuery-AJAX</title>
 
<!—Include Script jQuery, sesuaikan nama versi jQuery yang digunakan pada bagian src -->
<script type="text/javascript" src="jquery17.min.js"></script>
 
<!-- Script Ajax untuk Mengontrol Dropdown List Bertingkat -->
<script type="text/javascript">
$(function() {
     $("#cmbNegara").change(function(){
          $("img#imgLoad").show();
          var idNegara = $(this).val();
 
          $.ajax({
             type: "POST",
             dataType: "html",
             url: "getProvinsi.php",
             data: "idNegara="+idNegara,
             success: function(msg){
                 if(msg == ''){
                         $("select#cmbProvinsi").html('<option value="">--Pilih Provinsi--</option>');
                         $("select#cmbKota").html('<option value="">--Pilih Kota--</option>');
                 }else{
                           $("select#cmbProvinsi").html(msg);                                                       
                 }
                 $("img#imgLoad").hide();
 
                 getAjaxAlamat();                                                        
             }
          });                    
     });
 
     $("#cmbProvinsi").change(getAjaxAlamat);
     function getAjaxAlamat(){
          $("img#imgLoadMerk").show();
          var idProvinsi = $("#cmbProvinsi").val();
 
          $.ajax({
             type: "POST",
             dataType: "html",
             url: "getKota.php",
             data: "idProvinsi="+idProvinsi,
             success: function(msg){
                 if(msg == ''){
                         $("select#cmbKota").html('<option value="">--Pilih Kota--</option>');                                                                                  
                 }else{
                           $("select#cmbKota").html(msg);                              
                 }
                 $("img#imgLoadMerk").hide();                                                        
             }
          });
     }    
});
</script>
 
</head>
<body>
<div id="container">
<h3>Dropdown List Bertingkat dengan jQuery-AJAX</h3>
 
<form>
<table width="500" border="0" id="tabelForm">
<tr>
<td width="120">Nama</td>
<td><input type="text" name="nama" id="nama" size="30"></input></td>
</tr>
 
<tr>
<td width="120">Negara</td>
<td>
<select name="cmbNegara" id="cmbNegara">
<option value="">--Pilih Negara--</option>
<?php
                                   while($data = mysql_fetch_array($getComboNegara)){
                                        echo '<option value="'.$data['idNegara'].'">'.$data['namaNegara'].'</option>';
                                   }
                              ?>
</select>
&nbsp;&nbsp;<img src="loading.gif" width="18" id="imgLoad" style="display:none;" />
</td>
</tr>
<tr>
<td width="120">Provinsi</td>
<td>
<select name="cmbProvinsi" id="cmbProvinsi" width="300">
<option value="">--Pilih Provinsi--</option>
</select>
&nbsp;&nbsp;<img src="loading.gif" width="18" id="imgLoadMerk" style="display:none;" />
</td>
</tr>
<tr>
<td width="120">Kota/Kabupaten</td>
<td>
<select name="cmbKota" id="cmbKota">
<option value="">--Pilih Kota--</option>
</select>
</td>
</tr>
</table>
</form>
 
</div>
</body>
</html>