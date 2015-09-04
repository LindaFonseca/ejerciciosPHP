<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


                 <form  > 
                  Ingrese el total de kilometros que recorra su automovil : <input name = 'numero' type='text'/> 
                 
                 <br>
                 <input name='enviar' type='submit' value='Enviar Numero' />
                 
                 
                 </form>



      <?php 

      if(!empty($_REQUEST['enviar'])){
    
   			 $kilometro = $_REQUEST['numero'];
    
    	     $total = $kilometro * 16.4;
             $total = number_format($total, 0, '.', ''); 
 
   
              echo "Su vehiculo gastara  ".$total. " litros ";
       }


      ?>


</body>
</html>