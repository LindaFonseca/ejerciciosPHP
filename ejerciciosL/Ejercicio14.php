<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>





<?php session_start(); ?>



                 <form action='Desarrollo14.php' method='POST'  > 
        
                 Ingrese un numero : <input name = 'nume' type='text'/> 
                 
                 <input name='emm' type='submit' value='Enviar Numero' />
                 
                 
                 </form>
  

                 
 <?php   
 
 if(isset($_POST['emm'])){
 
 $numero = $_POST['nume'];
 
$_SESSION['numero'] = $numero;
 }

?>




</body>
</html>