<?php
include('config.php');
$id = $_GET['id'];
$sql = "DELETE from users where id = '$id'";
if(mysqli_query($conn,$sql))
{
    header("Location:details.php");
}
else
    echo "Record Not Deleted";
?>