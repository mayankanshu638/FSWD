<?php
include('config.php')
?>

<?php
    if(isset($_POST['submit']))
    {
        $username =$_POST['username'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $city = $_POST['city'];
        $sql = "INSERT INTO `users` (`id`, `username`, `email`, `contact`, `city`) VALUES (NULL, '$username', '$email', '$contact', '$city')";
        mysqli_query($conn, $sql);

    }
    else
    {
        echo "Please click submit button";
    }
?>
<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <form method="POST" action="add.php">
            USERNAME : <input type="text" name="username" placeholder="Enter Username" required><br>
            E-MAIL : <input type="email" name="email" placeholder="Enter Email" required><br>
            Contact : <input type="text" name="contact" placeholder="Enter Contact Number" required><br>
            
            Select City <select name="city">
                <option value="dehradun">Dehradun</option>
                <option value="jaipur">Jaipur</option>
            </select>
            <br>

            <input type="submit"  name="submit" value="Click Here To submit data">
    </form>
    </body>
</html>
