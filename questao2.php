<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tomadas Numeros Primos</title>
</head>
<body>
   <form action="questao2.php" method="get">
    <label for="">Digite o Número</label>
    <input name="num" type="number">
    <input type="submit">
    
   
    </form>
    <?php 
    if(isset($_GET['num'])) {
    
        $num1 = $_GET['num'];
    
    };
    
    $z = 0;
    $rest = 0;
    $num = 1;
    while($num <= $num1) {
        
        
        
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
</body>
</html>