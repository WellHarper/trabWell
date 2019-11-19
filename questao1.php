<html lang="pt-br">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <div class="container">
       <div class="col-4">
            <h2>Tomadas</h2>
            <form action="" method="get">
              <label>T1 </label>
               <select name="t1">
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
                </select><br>
                <label>T2 </label>
                 <select name="t2">
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
                </select><br>
                <label>T3 </label>
                <select name="t3">
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
                </select><br>
                <label>T4 </label>
                <select name="t4">
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
                </select><br><br>
                <input type="submit" value="Entrar">
            </form>
        </div>
    </div>
    <?php
     if(isset($_GET['t1'])) {
         
         $t1 = $_GET['t1'];
         
     }
      if(isset($_GET['t2'])) {
        
        $t2 = $_GET['t2'];
        
    }
    if(isset($_GET['t3'])) {
         
         $t3 = $_GET['t3'];
             
    }
        if(isset($_GET['t4'])) {
         
         $t4 = $_GET['t4'];
             
    }
       
    
        //if(empty($_GET)){//isset($_GET)) {
            echo $t1+$t2+$t3+$t4-3;
        //}
  
  
    ?>
    
    
</body>
</html>