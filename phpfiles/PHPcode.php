<html>
  <head>
    <style>
      .error {color:#FF0000;}
    </style>
  </head>
  <body>
    <?php 
      $nameErr = $emailErr = $genderErr = "";
      $name = $email = $gender = $class = $course = "";
      $subject = [];

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
          $nameErr = "Name is required";
        } else {
          $name = test_input($_POST["name"]);
        }

        if (empty($_POST["email"])) {
          $emailErr = "Email is required";
        } else {
          $email = test_input($_POST["email"]);
          // check if email address is well-formed
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
          }
        }

        if (empty($_POST["course"])) {
          $course = "";
        } else {
          $course = test_input($_POST["course"]);
        }

        if (empty($_POST["class"])) {
          $class = "";
        } else {
          $class = test_input($_POST["class"]);
        }

        if (empty($_POST["gender"])) {
          $genderErr = "Gender is required";
        } else {
          $gender = test_input($_POST["gender"]);
        }

        if (empty($_POST["subject"])) {
          $subjectErr = "You must select 1 or more";
        } else {
          $subject = $_POST["subject"];
        }
      }

      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    ?>

    <h2>Absolute classes registration</h2>
    <p><span class="error">* required field.</span></p>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <table>
        <

            
            <table>
                <tr>
                    <td>Name:</td>
                    <td><input type= "text" name= "name">
                    <span class = "error">* <?php echo $nameErr;?></span>
                    </td>
                </tr>
                
                <tr>
                    <td>E-mail:</td>
                    <td><input type = "text" name = "email">
                    
                    <span class = "error">* <?php echo $emailErr;?></span>
                    </td>
                </tr>
                

                
                <tr>
                    <td>Classes:</td>
                    <td>
                        <textarea name = "class" rows = "5" cols ="40"></textarea></td>
                </tr>
                
                <tr>
                    <td>Gender:</td>
                    <td>
                        <input type = "radio" name = "gender" value = "female"> Female
                        <input type = "radio" name = "gender" value = "male"> Male
                        <span class = "error">*<?php echo $genderErr;?></span>
                    </td>
                </tr>
                
                <tr>
                    <td>Select:</td>
                    <td>
                        <select name = "subject[]" size = "4" multiple>
                            <option value = "Android"> Android</option>
                            <option value = "Java"> JAVA</option>
                            <option value = "C#"> C#</option>
                            <option value = "Data Base"> Database</option>
                            <option value = "Hadoop"> Hadoop</option>
                            <option value = "VB script">VB script</option>
                        </select>
                    </td>
                </tr>
                
                <tr>
                    <td>Agree</td>
                    <td><input type = "checkbox" name = "checked" value = "1">
                    <?php if(!isset($_POST['checked'])){?>
                    <span class = "error">* <?php echo "You must agree to terms";?> </span>
                    <?php }?>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <input type = "submit" name = "submit" value = "Submit">
                    </td>
                </tr>
            </table>
        </form>
        
        <?php 
        
            echo "<h2> Your given values are as: </h2>";
            echo ("<p> Your name is $name: </p>");
            echo ("<p> Your email address is $email: </p>");
            echo ("<p> Your class time at $course: </p>");
            echo ("<p> Your class info is $class: </p>");
            echo ("<p> Your gender is $gender: </p>");
        
        for($i=0; $i<count($subject);$i++){
            echo($subject[$i]."");
        }
        ?>
    </body>
</html>
