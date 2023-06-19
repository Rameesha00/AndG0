<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "go";

// Create a database connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


// //Create a db
// $sql ="CREATE DATABASE social_media_clone";
// $result=mysqli_query($conn,$sql);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to sanitize user input
function sanitizeInput($conn, $data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = $conn->real_escape_string($data);
    return $data;
}

// Example query: Fetch all users from the 'users' table
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Loop through each row
    while ($row = $result->fetch_assoc()) {
        // Access data for each user
        $id = $row["id"];
        $username = $row["username"];
        $email = $row["email"];
        
        // Perform any necessary operations with the data
        // ...
    }
} else {
    echo "No users found.";
}

// Close the database connection
$conn->close();
?>
