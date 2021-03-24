<?php
if(isset($_POST['submit']))
{
    $interests = $_POST['Interest'];
    echo "Gender".$_POST['Gender']."<br>";
    foreach($interests as $interest)
    {
        echo $interest." ";
    }
}
?>
<hhtml>
    <head>
        <title>
            Form HTML
        </title>
    </head>
    <body>
        <form method="POST" action="form2p.php">
            Username <input type="text" placeholder="Enter Username" name="username"><br>
            Password <input type="password" placeholder="Enter Password" name="password"><br>
            Email <input type="email" placeholder="Enter Email" name="email"><br>

            Gender - <br>
            Male <input type="radio" value="Male" name="Gender">
            Female <input type="radio" value="Female" name="Gender"><br>
            Interest<br>
            Coding <input type="checkbox" value="coding" name="Interest[]">
            Sports <input type="checkbox" value="sports" name="Interest[]"><br>
            <br>Select Your city<br>
          <select name="city">
            <option value="dehradun">Dehradun</option>
            <option value="mussorie">Mussorie</option>
            <option value="haryana" selected>Haryana</option>
            <option value="delhi">Delhi</option>
          </select>
            <input type="submit" name="submit" value="submit">
        </form>
    </body>
</hhtml>