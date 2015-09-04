<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



<?php
echo " 

        <form method='POST'>  
        
         Ingrese un numero : <input name = 'numero' type='text'>  
        
     ";   
    

        @$a =  $_POST['numero']; 
          
   echo "       
         <input type='submit' name='enviar'>  
        
        </form>

";

 @$c = 0;

   if(!empty($_REQUEST['enviar'])){ 
        

        for($i = 0 ; $i <= $a ; $i++){
            
            if((($i % 2)!= 0 && ($i % 3)!= 0 && ($i % 5)!= 0 && ($i % 7)!= 0 ) || ($i == 3 || $i == 5  || $i == 7 || $i == 2)){
               $c+= 1;
                
            }
            if($i == 1){

            	$c -= 1;
            }
 

        }
        

        
        echo "Tiene ".$c." numeros primos entre 1 y ".$a;

    }    
?>



</body>
</html>