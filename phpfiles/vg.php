<?php


function myTest(){
    // this one cannot print x because it is not decalred in the function that means it global variable 
    // echo"<p> Variable x inside function is : </p>";

    $x = 5;
    echo "<p> Variable x outside function is: </p> $x";
}
myTest();


?>

<?php 
