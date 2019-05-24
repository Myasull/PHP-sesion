<?php
session_start();
if (!isset($_SESSION['count'])){
	$_SESSION['count'] = 0;
}else {
	$_SESSION['count']++;
}
echo 'Odczytana'.$_SESSION['count'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<input type="password" id="x">
	<input type="submit" onclick="f()">
	<div id="demo"></div>
	<script>
		function f(){
			var x = document.getElementById('x').value;
 			if(x==""){
 			document.getElementById('demo').innerHTML="wpisz haslo";
 			}
 			else if(x.search("[0-9]")>=0 && x.length>6){
 			document.getElementById('demo').innerHTML="dobre";        
 			}
 			else if(x.search("[0-9]")>=0 && x.length>=4 && x.length<=6){
 			document.getElementById('demo').innerHTML="srednie";      
 			}
 			else {
 			document.getElementById('demo').innerHTML="slabe";
 			}
 		}
	</script>
</body>
</html>