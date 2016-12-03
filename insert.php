<!--
    Created: Nov-2016
    Author: Adam Wharmby
-->


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
        echo "Connection established";
        
        //inserting data into table
       
       $sql = "INSERT INTO Customer (`CustomerID`,`Firstname`,`Surname`,`ContactNo`,`DOB`,`HouseNo`,`Street`,`PostalCode`,`County`,`Country`,`ContactEmail`)
            VALUES ('1', 'Adam', 'Wharmby', '01206683298','1974-05-23','34','Lenz Close','CO!2FP','Essex','United Kingdom','whambys@googlemail.com')";         
               
               if (mysqli_multi_query($conn, $sql)) {
          echo "New records created successfully:";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
?>
