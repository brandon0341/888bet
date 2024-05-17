<?php
$conn = new mysqli("localhost", "root", "", "exam");   //connect to database

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    // Get updated values from the form
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];

    // Update query
    $update_query = "UPDATE register SET Firstname=?, Lastname=?, Mobile_No=?, Password=? WHERE Username=?";
    
    // Prepare and bind the update statement
    $stmt = $conn->prepare($update_query);
    $stmt->bind_param("sssss", $firstname, $lastname, $contact, $password, $username);

    // Execute the update statement
    if ($stmt->execute()) {
        echo "<script>alert('User data updated successfully');</script>";
    } else {
        echo "<script>alert('Error updating user data');</script>";
    }

    $stmt->close();
}

$conn->close();

// Redirect back to the account information page
header("Location: /EXAM/PHP/prof.php");
exit();
?>
