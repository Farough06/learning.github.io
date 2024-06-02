<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h3>Login Page</h3>
    <hr>
    <form action="<?php $_PHP_SELF ?>" method="post">

        Enter Your Email: <input type="email" name="uemail" placeholder="abc@example.com" required>
        <br><br>
        Enter Your Password: <input type="password" name="upass" required>
        <br><br>
        <input type="submit" name="login" value="Login">

    </form>

    <?php 
        if(isset($_POST["login"])){

              session_start(); // it will start the session

              // step 1: Create a connection string

              $dbHost = "localhost";
              $dbUser = "root";
              $dbPass = "";
              $dbName = "php";
  
              // mysqli() driver will help to connect php with mysql
  
              $conn = new mysqli($dbHost, $dbUser,$dbPass, $dbName);
  
              // step 2: write the query 

              $uemail = $_POST["uemail"];
              $upass = $_POST["upass"];

              $myQuery = "SELECT * FROM userdetails WHERE useremail='".$uemail."' AND userpassword= '".$upass."'";

            // step 3: Excecute a Query 
            
            $result = $conn->query($myQuery);

            if($result->num_rows>0){
                //echo "<script>alert ('VALID USER');</script>";

                while ($userInfo = $result->fetch_assoc()){
                    $useremail = $userInfo["useremail"];
                }

                    //session name

                    $_SESSION["name"]= $useremail;

                header('Location: userProfile.php');
            }else{
                echo "<script>alert('INVALID USER');</script>";
            }
            
        }
    
    ?>

</body>
</html>