<!DOCTYPE html>
<html lang="en">
<head>

    <style>
        .error{
            color:red;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body style= "background-color:blanchedalmond">

    <?php
    
    $nameErr = $emailErr = $genderErr = " ";
    $name = $email = $gender = " ";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if (empty($_POST["name"])){
            $nameErr="Name field is empty";
        }else {
            $name= test_input($_POST["name"]);
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if (empty($_POST["email"])){
            $emailErr="Email field is empty";
        }else {
            $email= test_input($_POST["email"]);
        }
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if (empty($_POST["gender"])){
            $genderErr="Gender field is empty";
        }else {
            $gender= test_input($_POST["gender"]);
        }
    }
    
    function test_input($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <h1>Form Validation</h1>
    <form method = 'POST'>
        <table>
            <tr>
                <td>Name: </td>
                <td><input type="text" name="name"></td>
                <span class ="error">* <?php echo $nameErr ?></span>
            </tr>

            <tr>
                <td>Email: </td>
                <td><input type="email" name="email"></td>
                <span class ="error">* <?php echo $emailErr ?></span>
            </tr>

            <tr>
                <td>Gender: </td>
                <td><input type="radio" name="gender" value="male">Male</td>
                <td><input type="radio" name="gender" value="female">Female</td>
                <span class ="error">* <?php echo $genderErr ?></span>
            </tr>

            <td><input type="submit" name="submit" value="Submit"></td>

        </table>

    </form>

    <br><br>

    <?php
    
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $gender;

    ?>
</body>
</html>