<?php
// Connect to the database
$conn = new mysqli("localhost", "root", "", "exam");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize variables
$firstname = $lastname = $username = $contact = $password = "";

// Fetch user data from the database
$sql = "SELECT * FROM register";
$result = $conn->query($sql);
$hasData = false;

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $firstname = $row["Firstname"];
    $lastname = $row["Lastname"];
    $username = $row["Username"];
    $contact = $row["Mobile_No"];
    $password = $row["Password"]; // Note: Consider hashing passwords for security
    $hasData = true;
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="/EXAM/CSS/prof.css">
</head>
<body>
    <div class="logo">888 BET</div>
    <div class="container">
        <div class="back">
            <a href="/EXAM/PHP/home.php"><img class="row" src="/EXAM/PIC/arrow.png" alt=""></a>
        </div>
        <div class="prof">
            <a href="/EXAM/PHP/acc.php"><img src="/EXAM/PIC/user.webp" alt="">Accounts</a>
            <a href="https://dbdiagram.io/d/65d4956bac844320ae92002e"><img src="/EXAM/PIC/dia.jpg" alt="">Diagram</a>
            <a href="/EXAM/PHP/tim.php"><img src="/EXAM/PIC/tim.jpg" alt="">BoardMembers</a>
            <a href="/EXAM/front.php"><img src="/EXAM/PIC/logs.jpg" alt="">Log out</a>
        </div>
    </div>
    
    <?php if ($hasData): ?>
    <div class="person">
        <img class="picson" src="https://static.vecteezy.com/system/resources/thumbnails/002/318/271/small/user-profile-icon-free-vector.jpg" alt="">
        <div class="infor">
            <form method="POST" action="profsave.php">
                <label for="firstname">Firstname:</label><br>
                <input type="text" id="firstname" name="firstname" value="<?php echo $firstname; ?>" readonly><br>
                
                <label for="lastname">Lastname:</label><br>
                <input type="text" id="lastname" name="lastname" value="<?php echo $lastname; ?>" readonly><br>
                
                <label for="username">Username :</label><br>
                <input type="text" id="username" name="username" value="<?php echo $username; ?>" readonly required><br>

                <label for="contact">Mobile No:</label><br>
                <input type="text" id="contact" name="contact" value="<?php echo $contact; ?>" readonly><br>

                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password" value="<?php echo $password; ?>" readonly required><br>
                
                <label for="repassword">Confirm Password:</label><br>
                <input type="password" id="repassword" name="repassword" value="<?php echo $password; ?>" readonly required><br><br>
            </form>
        </div>
        <div class="buts">
            <button type="button" onclick="enableEditing()">Update</button>
            <button type="submit" name="update" onclick="saveUserData()">Save</button>
        </div>
    </div>
    <?php else: ?>
    <p>No user data found.</p>
    <?php endif; ?>

    <script>
        function enableEditing() {
            // Enable editing of input fields
            alert("Edit Enabled!");
            document.getElementById('firstname').readOnly = false;
            document.getElementById('lastname').readOnly = false;
            document.getElementById('username').readOnly = false;
            document.getElementById('contact').readOnly = false;
            document.getElementById('password').readOnly = false;
            document.getElementById('repassword').readOnly = false;
        }

        function saveUserData() {
            // Implement code to save user data here
            alert("User data saved!");
            // Disable editing after saving
            document.getElementById('firstname').readOnly = true;
            document.getElementById('lastname').readOnly = true;
            document.getElementById('username').readOnly = true;
            document.getElementById('contact').readOnly = true;
            document.getElementById('password').readOnly = true;
            document.getElementById('repassword').readOnly = true;
        }
    </script>
</body>
</html>
