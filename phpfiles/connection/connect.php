<?php

//main connection file for both admin & front end
$servername = "67.209.127.227"; //server
$username = "root"; //username
$password = "Batman99!@#"; //password
$dbname = "foodpicky_db";  //database

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname); // connecting 
// Check connection
if (!$db) {       //checking connection to DB	
    die("Connection failed: " . mysqli_connect_error());
}

?>