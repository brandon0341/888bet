<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="/EXAM/CSS/acc.css">
    <style>
        /* Add custom styles for the delete button */
        input[type="submit"] {
            background-color: #ff4d4d; /* Red background */
            color: white; /* White text */
            border: none; /* Remove default border */
            padding: 10px 20px; /* Add padding */
            text-align: center; /* Center text */
            text-decoration: none; /* Remove underline */
            display: inline-block; /* Inline-block display */
            font-size: 16px; /* Font size */
            margin: 4px 2px; /* Margin around the button */
            cursor: pointer; /* Pointer cursor on hover */
            border-radius: 8px; /* Rounded corners */
            transition: background-color 0.3s ease; /* Smooth transition */
        }

        input[type="submit"]:hover {
            background-color: #ff1a1a; /* Darker red on hover */
        }
    </style>
</head>
<body>
    <div class="back">
        <a href="/EXAM/PHP/prof.php"><img class="arr" src="/EXAM/PIC/arrow.png" alt=""></a>
    </div>
    <h1>Account Information:</h1><br>                          
    
    <?php  
    $conn = new mysqli("localhost", "root", "", "exam");   //connect to database

    if($conn->connect_error) {                      //check connection error
        die("Connection failed: ". $conn->connect_error);  
    } 

    $sql = "SELECT * FROM register";  // Select all columns from the register table
    $result = $conn->query($sql);                       //execute SQL query

    echo "<table class='account-table' border='1'>\n";                          //start table
    echo "\t<tr>\n";                                     //start first row of table (column names)
    echo "\t\t<th>Firstname</th>\n";
    echo "\t\t<th>Lastname</th>\n";
    echo "\t\t<th>Username</th>\n";
    echo "\t\t<th>Mobile_No</th>\n";
    echo "\t\t<th>Action</th>\n";   // Add a column for the delete button
    echo "\t</tr>\n";

    while ($row = $result->fetch_assoc()) {             //get each row from the result set and store it as an assoc array
        echo "\t<tr>\n";                                //start a new row
        echo "\t\t<td>{$row['Firstname']}</td>\n";           // Displaying Firstname
        echo "\t\t<td>{$row['Lastname']}</td>\n";           // Displaying Lastname
        echo "\t\t<td>{$row['Username']}</td>\n";           // Displaying Username
        echo "\t\t<td>{$row['Mobile_No']}</td>\n";           // Displaying Mobile No.
        echo "\t\t<td>\n";                                // Start Action cell
        echo "<form method='POST' action='accdel.php'>\n"; // Form to delete the record
        echo "<input type='hidden' name='username' value='{$row['Username']}'>\n"; // Hidden input with the username
        echo "<input type='submit' value='Delete'>\n";    // Delete button
        echo "</form>\n";
        echo "\t\t</td>\n";                               // End Action cell
        echo "\t</tr>\n";                                 // End row
    }
    echo "</table>\n";                                                                   //close table

    $conn->close();       
    ?>   

</body>
</html>
