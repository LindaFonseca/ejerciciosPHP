<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form methos='POST'>

		Digite el dia : <input type="number" value='dia' name='dia' > <br>
		Digite el mes : <input type="number" value='mes' name='mes' > <br>
		Digite el año : <input type="number" value='anio' name='anio'  > <br>

		<input type='submit' value='Enviar' name='enviar' > 

</form>



<?php

$aux = 0;

if(!empty($_REQUEST['enviar'])){

	
	$dia = $_REQUEST['dia'];
	$mes = $_REQUEST['mes'];
	$anio = $_REQUEST['anio'];


	if($mes == 1 || $mes == 3 || $mes == 5 || $mes == 7 || $mes == 8 || $mes == 10 || $mes == 12){//Van los meses enero marzo mayo julio agosto octubre y diciembre de 31 dias
			if($dia <= 31){ $aux++;}
    }
	if( $mes == 4 || $mes == 6 || $mes == 9 || $mes == 11){//va abril junio septiembre y noviembre de 30 dias
             if($dia <= 30){ $aux++; }
     }
	if( $mes == 2){// va para febreo de solo 28 dias sin años bisiestos
	         if($dia <= 28){ $aux++; }
	}


	if($aux == 1){
	echo  "La fecha ".$dia. "-" . $mes. "-".$anio ."es correcta" ;

	}else{
		echo  "La fecha ".$dia. "-" . $mes. "-".$anio ."es incorrecta" ;
	}


}


?>

</body>
</html>

