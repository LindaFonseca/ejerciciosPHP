<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


                 <form> 
                 Ingrese un numero : <input name = 'numero' type='text'/> <br>
                 
                 <input name='enviar' type='submit' value='Enviar Numero' />
                 
                 
                 </form>



<?php 


$numero =  123  ; //es mi numero a adivinar


if(!empty($_REQUEST['enviar'])){
    
    $a = $_REQUEST['numero'];
    
    if($a == $numero){ echo"Felicitaciones ";
        
    }else if($a > $numero){ echo " Es menor que $a";
        
    }else if($a < $numero){ echo "Es mayor que $a";

}

}


 ?>

</body>
</html>