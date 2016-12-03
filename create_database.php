<!DOCTYPE html>
<!--
EBook Store Database creation script
Created 11/2016
Author Adam Wharmby
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        
        // create the connection
        $conn = mysqli_connect($servername, $username, $password);
        
        //check the connection
        
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully";
        
        // create database
        $sql = "CREATE DATABASE adamw3507";
        if (mysqli_query($conn, $sql)) {
            echo "Database created successfully";
            
        }else {
            echo "Error creating database: " . mysqli_error($conn);
        }
        
        ?>
        
    </body>
</html>
