<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
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
        $dbname = "adamw3507";
        // create the connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        
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
