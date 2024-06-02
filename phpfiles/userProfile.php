<?php 

session_start();

if(!isset($_SESSION['name'])){
    header('Location: Login.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile Page</title>
</head>
<body>

    <?php 
        
        // How to RETREIVE INFORMATION FROM DATABASE TABLE
        // step 1: Create a connection string

        $dbHost = "localhost";
        $dbUser = "root";
        $dbPass = "";
        $dbName = "php";

        // mysqli() driver will help to connect php with mysql

        $conn = new mysqli($dbHost, $dbUser,$dbPass, $dbName);

        // step 2: write the query 

        $useremail = "alphadiokouyate6@gmail.com";

        $myQuery = "SELECT * FROM userdetails WHERE useremail='".$useremail."'";

      // step 3: Excecute a Query 
      
      $result = $conn->query($myQuery);

      if($result->num_rows>0){

            //Fetch The Information From Databases


            // $resuslt-> fetch_asscoc() converted result into a an associative array 
            // $userInfo = $result->fetch_assoc() $userInfo is your Array Name

            while ($userInfo = $result->fetch_assoc()){
                $username = $userInfo["username"];
                $useremail = $userInfo["useremail"];
                $contact = $userInfo["contact"];
                $city = $userInfo["city"];
                $userImg = $userInfo["userimg"];
            }
      }
    ?>

    <h1>Welcome User</h1>
    <h3>Your Information Will Be Displayed Here</h3>
    <hr>
    <img src="<?php echo $userImg?>" width=200px heigth= 200px>
    <br>
    <h4>Username : <?php echo $username; ?>  </h4> 
    <h4>Useremail : <?php echo $useremail; ?> </h4>
    <h4>Contact Number : <?php echo $contact; ?> </h4>
    <h4>City : <?php echo $city; ?> </h4>
    <a href="logout.php"><h3>Logout</h3></a>
</body>
</html>