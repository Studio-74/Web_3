<!--
EBook store login_result form script
Created 11/2016
Author Adam Wharmby
-->
<html>
    <head>
        <meta charset="UTF-8">
    <title>Logged in</title>
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
                <li style="float:right"><a class="active" href="account.php">Account</a></li>
                <li style="float:right"><a class="active" href="index.php">Logout</a></li>
            </ul>
            </nav>
           
            <body>
            
            
            <?php
        //incorporate the MySQL connection script        
        include_once ('Bookstoredata/connect_db.php');
               
        //Pings a server connection,
        //or tries to reconnect if the connection has gone down 
        if (mysqli_ping($conn)) {
        echo '<p>MySQL Server' . mysqli_get_server_info($conn)
        . ' on ' . mysqli_get_host_info($conn) . '</p>'; }
        // define variables and set to empty values 
        //validation
        $emptyErr = "";
        $Username = $Password = "";

$Username = $Password ;
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
            if (empty($_POST["Username"]) || empty($_POST["Password"])) {
                $UsernameErr = "Username is required";
                echo "<BR>" . $emptyErr;
            } else {
            $Username = test_input($_POST["Username"]);}
            
            if (empty($_POST["Password"])){
                $PasswordErr = "Password is required";
            }else{
                
            $Password = test_input($_POST["Password"]);}
                $sql = "SELECT `AccountNo`,`Username`,`Password` FROM `account` WHERE Password='".$Password."' AND Username='".$Username."'";
                //echo $sql;

               $result=mysqli_query($conn, $sql);
                
                if(mysqli_num_rows($result)>0) {
             
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo 'Welcome back:', $Username;

                        echo '<table border = "1" width = 40% align = "center"><tr><td>AccountNo: </td><td>' . $row["AccountNo"] . '</td></tr>'
                        . '<tr><td>Username: </td><td>' . $row["Username"] . '</td></tr>'
                        . '<tr><td>Password: </td><td>' . $row["Password"] . '</td></tr></table>';
                    }
                } 
                else { 
                    
                   echo "<p><a href ='login.php' > Incorrect Username or password, Try again </a></p>";
               
            }
        
      {
            $Username = test_input($_POST["Username"]);
            $Password = test_input($_POST["Password"]);
        }  
        
    function test_input($data) {
        //Strip whitespace (or other characters) from the beginning and end of a string 
        $data = trim($data);
        //Un-quotes a quoted string
        $data = stripslashes($data);
        //Convert special characters to HTML entities 
        $data = htmlspecialchars($data);
        return $data;
    }
        ?>
            <div class="footer">
            <footer>Copyright © Studio74-designs</footer>
            </div>
        </div>   
    </body>
</html>

