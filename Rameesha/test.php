<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "go";

//Creating database connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// create a db
$sql = "CREATE DATABASE social_media_clone";
mysqli_query($conn,$sql);

if(!$conn){
    die("Sorry we failed to connect: ".mysqli_connect_error());
}
else
{
    echo "Successfull ";
}



?>