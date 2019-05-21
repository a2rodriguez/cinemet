<?php 

    $servername = "localhost";
    $username = "harryjo1";
    $password = "AXP2019_8YqXR76+";
    $dbname = "harryjo1_php";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

?>