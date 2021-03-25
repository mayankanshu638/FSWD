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
<?php
 $sql = "SELECT * FROM 'users'";

 $result = mysqli_query($conn, $sql);
 if($result->num_rows > 0)
 {
?>
<table border="1px">
    <thead>
        <tr>
            <th>ID</th>
            <th>User Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>City</th>
        </tr>
    </thead>
    <tbody>
    <?php
    //while($row = $result->fetch_array){
    while($row = $result->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['username']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['contact']?></td>
            <td><?php echo $row['city']?></td>
        </tr>
      <?php } ?>
    </tbody>
</table>
<?php
 }
?>
<html>
    <head>
        <title>User Details</title>
    </head>
    <body>
        
    </body>
</html>