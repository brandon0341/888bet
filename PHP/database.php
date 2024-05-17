<?php
    $servername = "localhost";
    $Username = "root";
    $Password = "";
    $db_name = "exam";
    $conn = new mysqli ($servername, $Username, $Password, $db_name);
    if ($conn-> connect_error)
    {
        die("Connection Failed" .$conn->connect_error);
    }
    echo "";

?>