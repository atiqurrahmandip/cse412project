<?php 
  
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'stationary_shop';

    //create connection
    $conn = new mysqli( $servername, $username, $password, $dbname);

    //check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>