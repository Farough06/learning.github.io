<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>
<body>
    <h2>Form Handling with PHP</h>
    <h3>Fill Up The Form For Registration</h3>
    <hr>

    <form action="<?php $_PHP_SELF ?>" method="post" enctype="multipart/form-data">
        Enter Your Name: <input type="text" name="uname" placeholder="Alphadio Kouyate">
        <br><br>
        Enter Your Email: <input type="email" name="uemail" placeholder="Alphadio@Example.com">
        <br><br>
        Enter Your Password: <input type="password" name="upass">
        <br><br>
        Select Your Contact Number: <input type="text" name="contact" placeholder="+601137363771Example">
        <br><br>
        Enter Your Gender: <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="female">Female
        <br><br>
        Enter Your city: <input type="text" name="city" placeholder="Conakry">
        <br><br>
        Upload Your Profile Picture: <input type="file" name="file">
        <br><br>
        <input type="submit" name="register" value="Register">
        <br><br>
        <input type="submit" name="login" value="Already A User Click Here">
    </form>

    <?php 
    
        if (isset($_POST['register'])){

            // step 1: Create a connection string

            $dbHost = "localhost";
            $dbUser = "root";
            $dbPass = "";
            $dbName = "php";

            // mysqli() driver will help to connect php with mysql

            $conn = new mysqli($dbHost, $dbUser,$dbPass, $dbName);


            // Code for file uploading 

            $fileName = $_FILES["file"]["name"]; // get the file name
            $fileTmpName = $_FILES["file"]["tmp_name"];  //get the temporary location of file

            $targetDir = "userPictures/"; 
        
            $uploadPath = $targetDir.$fileName; // <userPictures

            // move_uploaded_file(locationOfImage,targertDir);

            move_uploaded_file($fileTmpName , $uploadPath);

            // step 2: write the query 
             
            $uname = $_POST["uname"];
            $uemail = $_POST["uemail"];
            $upass = $_POST["upass"];
            $contact = $_POST["contact"];
            $gender = $_POST["gender"];
            $city = $_POST["city"];
            
            
            $myQuery = "INSERT INTO userdetails(username, useremail, userpassword, contact, gender, city, userimg) VALUES
            ('".$uname."', '".$uemail."', '".$upass."', '".$contact."',
            '".$gender."', '".$city."', '".$uploadPath."')";

            // step 3: Execute A query 

            // query() will perform a query against database
            // query will return TRUE if query is succesful else it will return False

            $result = $conn->query($myQuery);

            if($result){
                echo "<script>alert('USER REGISTERATION SUCCESSFUL');</script>";
            }else{
                echo "<script>alert('ERROR! UNABLE TO REGISTER);</script>";
            }
        }

        if (isset($_POST["login"])){

            header('Location: Login.php');
        }
    
    ?> 
</body>
</html>