<?php

/*EBook store select from Customer script
Created 11/2016
Author Adam Wharmby*/

   $servername = 'localhost';
   $username = 'root';
   $password = '';
   $dbname = "adamw3507";
   $conn = mysql_connect($servername, $username, $password, $dbname);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT Firstname,Surname, County FROM Customer';
   mysql_select_db('adamw3507');
   $result = mysql_query( $sql, $conn );
   
   if(! $result ) {
      die('Error unable to retrieve data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
      echo "Customer Firstname :{$row['Firstname']}  <br> ".
         "Customer Surname : {$row['Surname']} <br> ".
         "Customer County : {$row['County']} <br> ".
         "--------------------------------<br>";
   }
   
   echo "Data retrieved successfully\n";
   
   mysql_close($conn);
?>