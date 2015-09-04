<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
  <form  >
        
        <h2>Por favor ingrese las variables para realizar la operacion </h2> <br>
          Variable a:  <input type='number' name='a' required /> <br>
          Variable b:  <input type='number' name='b' required/><br>
         Variable c:  <input type='number' name='c' required/> <br>
        <input type='submit' name='enviar'/>
 </form>
        
        <?php
        
 

if(isset($_REQUEST['enviar'])){ 

        
        $b1 = $_REQUEST['b'] * 2;
        
        $a1 = $_REQUEST['a'];
        $a2 = $_REQUEST['c'];
        $b2 = ($a1 * $a2);
        $b3 = 4 * $b2;
         $y =  sqrt($b3);
      
    
      
        $b4= $b1 - $y;
        $b5 = $_REQUEST['b'] + $b4;
        $b6 = $b5 / (2*$a1);
        echo "<br>";
        echo "El Resultado de la ecuacion es: ". $b6;
   
   }     
        ?>
    </body>
</html>
