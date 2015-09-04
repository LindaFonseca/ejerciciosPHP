<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

   <form  > 
   Por favor <br> 
   Ingrese las millas : <input name = 'millas' type='text'/>  <br>
   <input name='enviar' type='submit' value='Enviar' />
   </form>




<?php 

	if(!empty($_REQUEST['enviar'])){

		$millas = $_REQUEST['millas'];


    $km =  $millas / 0.6214 ;
    $metros = $km * 1000;
    $cm = $metros * 100;
    $mm = $cm * 10;
    $yarda = $millas / 1760;
    $pulgada = $yarda * 36;
    $pie = $yarda * 3;
    



		   echo "Hay en $millas millas: <br><br>";
    
           echo "Kilometros ". $km.   "<br>Metros ".$metros .  "<br>Centimetros ".$cm . "<br>Milimetros ".$mm .  "<br>Yardas ".$yarda."<br>Pulgadas ".$pulgada.
           "<br>Pies ".$pie ;

	}


 ?>

</body>
</html>