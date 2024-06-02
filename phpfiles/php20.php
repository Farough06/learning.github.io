<?php 

//PHP Arrays 
// Associative Arrays 

$contacts = array(

    array("name"=> "Alphadio Kouyate", "email"=>"alphadiokouyate6@gmail.com"),
    array("name"=> "Moussa", "email"=>"Moussa6@gmail.com"),
    array("name"=> "Fode", "email"=>"fode6@gmail.com"),
);

echo $contacts[0]["email"]. " ".$contacts[0]["name"]."<br>";
echo $contacts[1]["email"]."<br>";
echo $contacts[2]["email"]."<br>";


?>