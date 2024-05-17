<?php
include("database.php"); 

session_start();
session_destroy();

if (isset($_POST['submit'])) {
    $Firstname = $_POST['firstname'];
    $Lastname = $_POST['lastname'];
    $Username = $_POST['username'];
    $Mobile_No = $_POST['contact'];
    $Password = $_POST['password'];
    $Confirm = $_POST['repassword'];

    $check_query = "SELECT * FROM register WHERE username='$Username'";
    $check_result = mysqli_query($conn, $check_query);
    if (mysqli_num_rows($check_result) > 0) {
        echo '<script>
                window.location.href = "sign.php";
                alert("Username already exists. Please choose a different one.");
              </script>';
        exit();
    }
    else{
        $insert_query = "INSERT INTO register (Firstname, Lastname, Username, `Mobile_No`, Password, `Confirm Password`) 
        VALUES ('$Firstname', '$Lastname', '$Username', '$Mobile_No', '$Password', '$Confirm')";
        if ($conn->query($insert_query) === TRUE) {
            header("Location: log.php");
            exit();
        } else {
            echo "Error: " . $insert_query . "<br>" . mysqli_error($conn);
        }

    }
}