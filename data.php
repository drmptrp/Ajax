<?php
mysql_connect("localhost","root",""); //{user dan password disesuaikan}
mysql_select_db("user");
$query = mysql_query("SELECT  `prov` FROM `provinsi`");
?>
<html>
<head>
<script>
var drz, kata, x;
function cekuser(){
    kata = document.getElementById("username").value;
        if(kata.length>2){
        document.getElementById("teks").innerHTML = "checking...";
        drz = buatajax();
        var url="cekusername.php";
        url=url+"?q="+kata;
        url=url+"&sid="+Math.random();
        drz.onreadystatechange=stateChanged;
        drz.open("GET",url,true);
        drz.send(null);
    }else{
        fokus();
 }
}
function ceknama(){
    kata = document.getElementById("namalengkap").value;
    if(kata.length>2){
        document.getElementById("teks1").innerHTML = "checking...";
        drz = buatajax();
        var url="ceknama.php";
        url=url+"?r="+kata;
        url=url+"&mail="+Math.random();
        drz.onreadystatechange=stateChanged1;
        drz.open("GET",url,true);
        drz.send(null);
    }else{
        document.getElementById("usia").focus();
 }
}
function cekusia(){
    kata = document.getElementById("usia").value;
    if(kata.length>0){
        document.getElementById("teks2").innerHTML = "checking...";
        drz = buatajax();
        var url="cekusia.php";
        url=url+"?s="+kata;
        url=url+"&usia="+Math.random();
        drz.onreadystatechange=stateChanged2;
        drz.open("GET",url,true);
        drz.send(null);
    }else{
        document.getElementById("provinsi").focus();
 }
}

function cekprop(){
    kata = document.getElementById("prop").value;
    if(kata.length>0){
        document.getElementById("teks3").innerHTML = "checking...";
        drz = buatajax();
        var url="cekprop.php";
        url=url+"?t="+kata;
       // url=url+"&Prop="+Math.random();
        drz.onreadystatechange=stateChanged3;
        drz.open("GET",url,true);
        drz.send(null);
    }else{
        document.getElementById("provinsi").focus();
 }
}
function buatajax(){
    if (window.XMLHttpRequest){
        return new XMLHttpRequest();
    }
    if (window.ActiveXObject){
        return new ActiveXObject("Microsoft.XMLHTTP");
    }
    return null;
}

function stateChanged(){
var data;
    if (drz.readyState==4){
        data=drz.responseText;
        document.getElementById("teks").innerHTML = data;
    }
}
function stateChanged1(){
var data;
    if (drz.readyState==4){
        data=drz.responseText;
        document.getElementById("teks1").innerHTML = data;
    }
}
function stateChanged2(){
var data;
    if (drz.readyState==4){
        data=drz.responseText;
        document.getElementById("teks2").innerHTML = data;
    }
}
function stateChanged3(){
var data;
    if (drz.readyState==4){
        data=drz.responseText;
        document.getElementById("teks3").innerHTML = data;
    }
}

function fokus(){
    document.getElementById("username").focus();
}
</script>
</head>
<body style="font-family:verdana;font-size:9pt">
<form>
    <center><h3>Form Data</h3>
    <table>
        <tr><td>Username</td>
            <td>:</td>
            <td><input type=text name=username id=username onblur=cekuser()></td>
            <td><span id=teks style="color:red;font-size:8pt"></span></td>
        </tr>
        <tr><td>Nama Lengkap</td>
            <td>:</td>
            <td><input type=text name=namalengkap id=namalengkap onblur=ceknama()></td>
            <td><span id=teks1 style="color:red;font-size:8pt"></span></td>
        </tr>
        <tr><td>Usia</td>
            <td>:</td>
            <td><input type=text name=usia id=usia onblur=cekusia()></td>
            <td><span id=teks2 style="color:red;font-size:8pt"></span></td>
        </tr>
        <tr><td>Provinsi</td>
            <td>:</td>
            <td><?php 
                if(mysql_num_rows($query)>0){
                   echo "<select name='provinsi' id='provinsi' onblur=cekprop()>
                        <option value='0'>Pilih<br>";
                    while ($row=mysql_fetch_array($query)) {
                        echo "<option>$row[provinsi]<br>";
                    }
                        echo "</select>";
                } 

                ?>
            </td>
            <td><span id=teks3 style="color:red;font-size:8pt"></span></td>
        </tr>
        
    </table>
  
 </center>
</form>
</body>
</html>