<?php
$hostname = "localhost";
$username = "root";
$password = "";
$databasename = "Web";
$conn = mysqli_connect($hostname,$username,$password,$databasename);
if($conn)
{
    echo "Connection Successfull";

}
else
{
    echo "Connection Failed" + mysqli_connect_error();
}
?>