<html>
    <head>
        <title>My first page</title>
    </head>
    <body>
        <form method="POST" action="index.php">
            Variable 1 <input type="text" name="var1">
            Variable 2 <input type="text" name="var2">
            <input type="submit" name="submit">
        </form>
    </body>
</html>

<?php
    if(isset($_POST['submit']))
    {
        $sum = $_POST['var1'] + $_POST['var2'];
        echo "Sum of 2 numbers is $sum";
    }
    else
    {
        echo "No input";
    }
 
 ?>

