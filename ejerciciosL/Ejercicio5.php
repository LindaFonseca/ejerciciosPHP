<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>




<form method="POST" >
<?php 


datos('Primer', 'edad1' ,'altura1');
datos('Segundo', 'edad2' ,'altura2');
datos('Tercer', 'edad3' ,'altura3');
datos('Cuarto', 'edad4' ,'altura4');
datos('Quinto', 'edad5' ,'altura5');

function datos($estudiante, $edad, $altura){ 

echo '  
	
	
	<h3>Ingrese los datos del '.$estudiante.'  estudiante </h3>	
	<br>
	Ingrese la edad : <input type="number" name="'.$edad.'"  required> <br>
	Ingrese la altura :<input type="text" name="'.$altura.'"  required>	



	
	';
}

?>
	<br>
	<input type='submit' value='Enviar Datos' name ='enviar' >
 
</form>

<?php 

$aux = 0; $aux2 = 0;

if(!empty($_REQUEST['enviar'])){
	
$a = $_REQUEST['edad1'];$b = $_REQUEST['edad2'];$c = $_REQUEST['edad3'];$d = $_REQUEST['edad4'];$e = $_REQUEST['edad5'];


$suma = $a +$b +$c + $d + $e;
$suma = $suma/5;

if($a >= 18){$aux++;} if($b >= 18){$aux++;} if($c >= 18){$aux++;} if($d >= 18){$aux++;} if($e >= 18){$aux++;}

$a = $_REQUEST['altura1'];$b = $_REQUEST['altura2'];$c = $_REQUEST['altura3'];$d = $_REQUEST['altura4'];$e = $_REQUEST['altura5'];

$altura = $a +$b +$c + $d + $e;
$altura = $altura / 5;

if($a >= 1.75){$aux2++;} if($b >= 1.75){$aux2++;} if($c >= 1.75){$aux2++;} if($d >= 1.75){$aux2++;} if($e >= 1.75){$aux2++;}

echo" 
  La media de las edades es ". $suma." <br>
  La media de las alturas es ". $altura ." <br>
  Hay $aux alumnos mayores de 18 años <br>
  Hay $aux2 que miden mas de 1.75

";


}

?>

</body>
</html>