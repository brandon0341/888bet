<?php
    include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" type ="text/css" href="/EXAM/CSS/sign.css">
    <script>
        function validateForm() {
            var password = document.getElementById("password").value;
            var repassword = document.getElementById("repassword").value;
            if (password != repassword) {
                alert("Passwords do not match");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <div class="form">
    <h1><center>Register</center></h1>
    <form name="form" action="dbsign.php" method="post" onsubmit="return validateForm();">

        <label for="firstname">Firstname:</label><br>
        <input type="text" id="firstname" name="firstname" required><br><br>
        
        <label for="lastname">Lastname:</label><br>
        <input type="text" id="lastname" name="lastname" required><br><br>
        
        <label for="username">Username:</label><br>
        <input type="username" id="username" name="username" required><br><br>

        <label for="contact">Mobile No:</label><br>
        <input type="text" id="contact" name="contact" required><br><br>
        
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        
        <label for="repassword">Confirm Password:</label><br>
        <input type="password" id="repassword" name="repassword" required><br><br>
        
        <input type="button" id="bnt" name="cancel" value="Cancel" onclick="window.location.href='/EXAM/front.php';">
        <input type="submit" id="btn" name="submit" value="Register">
    </form>
    <p>Already have an account?<a href="/EXAM/PHP/log.php"> Login </p></a>
</div>
    
</body>
</html>
