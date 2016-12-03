<?php

/*
    EBook store server connection script    
    Created: Nov-2016
    Author: Adam Wharmby
*/
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "adamw3507";
        // create the connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        
        //check the connection
        
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
?>