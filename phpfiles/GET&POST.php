<!DOCTYPE html>
<html lang="en">
<head>


<style>

    body{
        text-align: center;
        margin-top: 200px;
        font-style: italic;
        font-family: 'Times New Roman', Times, serif;
        color:black;
    
    }

    button{
        background-color: #fff00f;
        text-align: center;
        font-family: 'Times New Roman', Times, serif;
        font-style: italic;
    }

</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style= background-color:antiquewhite;>
    <h1>The Form</h1>

    <h2>The POST  Method</h2>

    <form action="" method = "POST">
    
    Name: <input type="text" name="name" value=" " placeholder="search name"> <br><br>

    <button type="submit"> Submit </button> <br> <br>


    <?php

    $name = $_POST["name"];

    echo"<br>";

    echo "My name is" ." " .  $name;

    ?>
    
    </form>

</body>
</html>