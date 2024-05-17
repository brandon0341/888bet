<?php
session_start();
include("database.php");

if(isset($_POST['submit'])){
    $Username = $_POST['user'];
    $Password = $_POST['pass'];

    $sql = "SELECT * FROM register WHERE username = '$Username' AND password = '$Password'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if($count == 1) {
        $_SESSION['username'] = $Username;
        header("Location: home.php");
        exit();
    } else {
        echo '<script>
            window.location.href = "log.php";
            alert("Login Failed. Invalid username or password!!!");
            </script>';
        exit();
    }
}
?>
