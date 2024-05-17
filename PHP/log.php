<?php
    include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG IN</title>
    <link rel = "stylesheet" type = "text/css" href = "/EXAM/CSS/log.css"> 
</head>
<body>
<div id="form">
        <h1><center>LOG IN </center></h1>
        <div class="form-group">
        <form name = "form" action= "dblog.php" method = "POST">
            <label>Username: </label>
            <input type="text" id="user" name="user"> </br> </br>
            <label>Password:  </label>
            <input type="password" id="pass" name = "pass"> </br> </br>
            <input type="button" id="bnt" name="cancel" value="Cancel" onclick="window.location.href='/EXAM/front.php';">
            <input type="submit" id="btn" value="Login" name="submit"> 
        </form>
        <p>Don't have an account?<a href="/EXAM/PHP/sign.php"> Register</p></a>
    </div>
</div>
</body>
</html>