
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

            <input type="submit"  name="submit" value="Update">
    </form>
    </body>
</html>
