<?php 
    if(isset($_GET["num"])) {
    
            $num1 = $_GET["num"];
    
    }
    
    $z = 0;
    $rest = 0;
    $num = 1;
    
    while($num <= $_GET["num"]) {
        
        
        
//        echo $num1 % $num;
//        echo "<br>";
        
        if($num1 % $num == 0) {
        
            $z = $z + 1;
            
          
           
            
            
        }
        
        
        
        $num++;   
        
       
        
        
        
    }
    
      if($z < 3) {
             
             echo" <h1 style ='text-align: center; color: green;'> É primo </h1>";
             
         }
        else {
            
            echo " <h1 style='text-align: center; color: red;'> Não é primo </h1>";
            
        }
    
        
    
    
    ?>
    
    <style>
    
        a:visited {
            
            color: green;
            
        }
        
        a {
            
            font-size: 18px;
            
            
        }


    </style>
    
   <a href="questao2.php">Voltar para o Index</a>