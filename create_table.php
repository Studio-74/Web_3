<!DOCTYPE html>
<!--
EBook store creat table script
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
        $dbname = "adamw3507";
        // create the connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        
        //check the connection
        
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully";
        //create table
        $sql = "CREATE TABLE EBook (
                ISBN INT (20),
                Title VARCHAR (100),
                Genre VARCHAR (20),
                Cost DECIMAL (10.2),
                Publisher VARCHAR (100),
                YearofPublication DATE,
                DownloadSize INT (11),
                AgeRating INT (11))";
           
        if (mysqli_query($conn, $sql)){
            echo "Table EBook created successfully";
        } else {
            echo "Error creating Table EBook:" . mysqli_error($conn);
        }
        
        mysqli_close($conn);
                
        ?>
        
    </body>
</html>
