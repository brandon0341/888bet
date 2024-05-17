<?php
$conn = new mysqli("localhost", "root", "", "exam");   //connect to database

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username']; // Get the username from the POST request

    // Prepare and bind
    $stmt = $conn->prepare("DELETE FROM register WHERE Username = ?");
    $stmt->bind_param("s", $username);

    if ($stmt->execute()) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $stmt->close();
}

$conn->close();

// Redirect back to the account information page
header("Location: /EXAM/PHP/acc.php");
exit();
?>
