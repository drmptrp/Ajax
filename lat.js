<script> 
		var drz, kata, x; 
		function cekuser()
			{     
				kata = document.getElementById("username").value;      
				if(kata.length>1)
					{         
						document.getElementById("teks").innerHTML = "checking...";         
						drz = buatajax();         
						var url="cekid.php";         
						url=url+"?q="+kata;       
						url=url+"&sid="+Math.random();         
						drz.onreadystatechange=stateChanged;         
						drz.open("GET",url,true);         
						drz.send(null); 
   					 }else
   					 {         
   					 	fokus();     
   					 } 
			} 
			function cekemail()
			{     
				kata = document.getElementById("email").value;      
				if(kata.length>1)
					{         
						document.getElementById("teks1").innerHTML = "checking...";         
						drz = buatajax();         
						var url="cekemail.php";         
						url=url+"?x="+kata;       
						url=url+"&mail="+Math.random();         
						drz.onreadystatechange=stateChanged1;         
						drz.open("GET",url,true);         
						drz.send(null); 
   					 }else
   					 {         
   					 	fokus();     
   					 } 
			} 
 
		function buatajax()
			{     
				if (window.XMLHttpRequest)
					{         
						return new XMLHttpRequest(); 
   					 } 
    			if (window.ActiveXObject)
    				{         
    					return new ActiveXObject("Microsoft.XMLHTTP"); 
    			} 
   				 return null; 
			} 
 
		function stateChanged()
			{ 
				var data;     
				if (drz.readyState==4)
					{         
						data=drz.responseText;         
						document.getElementById("teks").innerHTML = data; 
    				} 
			} 
			function stateChanged1()
			{ 
				var data;     
				if (drz.readyState==4)
					{         
						data=drz.responseText;         
						document.getElementById("teks1").innerHTML = data; 
    				} 
			} 
 
		function fokus(){     document.getElementById("userid").focus(); 
						} 
</script> 