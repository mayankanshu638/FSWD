<?php
    // $var1 = 10;
    // $var2 = 20;
    $sum = $_GET['var1'] + $_GET['var2'];
    echo "Sum of 2 variables is $sum";
?>

<html>
    <head>
        <title>PHP First Program</title>
    </head>
    <body>
       <form method="get" action="index.php">
           Variable 1 <input type="text" name='var1'>
           Variable 2 <input type="text" name='var2'>
           <br>
           <input type = "submit">
       </form> 
   
    </body>
</html>
