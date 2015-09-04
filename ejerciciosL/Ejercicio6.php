<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h4>Digite el numero acontinuacion</h4>



<form >

    Ingrese su numero: 
    
<input type='number' name='capi' required/>
<br>
<input name='enviar' type='submit' value='Enviar'  />
<br>
<?php

if(!empty($_REQUEST['enviar'] )){
    
    $numero = $_REQUEST['capi'];
    
    $capicuo = strrev($numero);
    
   
    
    if($numero == $capicuo) echo "El numero $numero es capicuo";
    else echo "El numero $numero no es capicuo";
    
}


?>
</body>
</html>