<?php
        //incorporate the MySQL connection script        
        include_once ('Bookstoredata/connect_db.php');
?>

<!--
EBook store login form script
Created 11/2016
Author Adam Wharmby
-->
<html>
    <head>
        <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="store.css">
    </head>
    <style>

    </style>
    <body>
        
        <div class="container">
            
            <header>
                <h1>EBook Store</h1>
            </header>
            <nav class="nav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="browse.php">Browse</a></li>
                <li><a href="customer_reg.php">Register</a></li>
                <li><a href="reg_form.php">Checkout</a></li>
                <li style="float:right"><a class="active" href="login.php">Login</a></li>
            </ul>
            </nav>
           
            
            <!--<input type="text" name="search" placeholder="Search.." >-->
            <br>
            <br>
           
                <form action="login_result.php" method="POST" align="center">
                    Username:<br>
                    <input type="text" name="Username" ><br>
                    Password:<br>
                    <input type="password" name="Password" ></br>           
                    <input type="submit" value="Login" >
                    <input type="reset">

                </form>  
            <p align="center"><a href ="author_reg.php" >New Authors Registration</a></p>
            <br>
            <p align="center"><a href ="customer_reg.php" >New Customer Registration</a></p>
          
            
            <footer>Copyright © Studio74-designs</footer>
        </div>   
    </body>
</html>

