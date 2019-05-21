<?php 

    $servername = "localhost";
    $username = "root";
    $password = "";//"AXP2019_8YqXR76+6b58Zp7hNz";
    $dbname = "cinemet";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

?>