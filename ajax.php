<html> 
<head> 
<title>Latihan Ajax 1</title> 
	<script type="text/javascript"> 
	function Ajax_AmbilHalaman(uri)
	{ 
		var conn; 
		try{ 
			conn = new XMLHttpRequest(); 
		} catch (e){ 
			conn = null; 
		} if(!conn)
			{ 
				var msxmlhttp = new Array('Msxml2.XMLHTTP.5.0', 
										'Msxml2.XMLHTTP.4.0', 
										'Msxml2.XMLHTTP.3.0', 
										'Msxml2.XMLHTTP', 
										'Microsoft.XMLHTTP'); 
				for (var i = 0; i < msxmlhttp.length; i++) 
					{ 
						try{ 
							conn = new ActiveXObject(msxmlhttp[i]); 
							} catch (e)
							{ 
								conn = null; 
							} 
					} 
			}  if (!conn)
				{ 
					alert("Browser Tidak Mendukung Interface Ajax (XMLHttpRequest)!"); 
					return false; 
				}  conn.open("GET", uri, false); 
				conn.send('\n\n'); 
				return conn.responseText; 
	} 
	</script> 
</head> 
<body> 
	<h1>Contoh Ajax Paling Sederhana</h1> 
	<div style="border:4px solid #000000;padding:5px"> 
		<script type="text/javascript"> 
			document.write(Ajax_AmbilHalaman("http://localhost/bab11Ajax")); 
		</script> 
	</div> 
</body> 
</html> 

<?php
	if (mysql_num_rows($query)>0) {
		echo "<select name='prop' id='prop' onchange=cek_kec()>";
		echo "<option value='0'>Pilih<br>";
		while ($row=mysql_fetch_array($query)) {
			echo "<option  value='$row[0]'>$row[1]<br>";
		}
		echo "</select>";
	}
?>