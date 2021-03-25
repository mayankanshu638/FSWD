<?php
include('config.php');
$id = $_GET['id'];
$sql = "SELECT * FROM users where id=$id";
$result=mysqli_query($conn, $sql);
$row = $result->fetch_assoc();
$username = $row['username'];
$email = $row['email'];
$contact = $row['contact'];
$city = $row['city'];
?>
<?php
if(isset($_POST['update']))
{
    $username =$_POST['username'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $city = $_POST['city'];

    $sql = "UPDATE users SET username='$username', email='$email', contact='$contact', city='$city' where id = '$id'";
    if(mysqli_query($conn, $sql))
    {
        echo "Updated";
    }
    else
    {
        echo "Not Updated";
    }
 //   echo "$username";
  //  echo "$email";
   // echo "$contact";
    //echo "$city";

}
?>
<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <form method="POST" action="edit.php?id=<?php echo $id ?>">
            USERNAME : <input type="text" name="username" value = <?php echo "$username"; ?> placeholder="Enter Username" required><br>
            E-MAIL : <input type="email" name="email" value = <?php echo "$email"; ?> placeholder="Enter Email" required><br>
            Contact : <input type="text" name="contact" value = <?php echo "$contact"; ?> placeholder="Enter Contact Number" required><br>
            
            Select City <select name="city" value = <?php echo "$city"; ?>>
                <option value="dehradun" <?php if($city=="dehradun") echo "selected"?>>Dehradun</option>
                <option value="jaipur" <?php if($city=="jaipur") echo "selected"?>>Jaipur</option>
            </select>
            <br>

            <input type="submit"  name="update" value="update">
    </form>
    </body>
</html>
