<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

       <form >
        

        Por Favor <br>
        Ingrese el numero : <input name = 'numero'  type='number' min='0' max ='9999' > 
        
        <br> <input type='submit' value='Enviar'/>
        
         </form>
        
        <?php 
           
          
        if(!empty($_REQUEST['numero'])){
    
        
        $a =  $_REQUEST['numero'];
        
        
      
        
       echo "<br>Tu numero al reves es ".strrev($a);

        }
        ?>


</body>
</html>