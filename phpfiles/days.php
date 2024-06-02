<?php
// Prompt the user to enter their input
echo "Enter your input: ";
$input = trim(fgets(STDIN));

// Use a switch case statement to display a message based on the user's input
if($input=='Monday') {
    
     echo "My Monday blues\n";
    }  
    elseif($input == 'Tuesday'){
        echo "Is my moody and gloomy day\n";
    }   
    elseif($input =='Wednesday'){
        echo "My meeting day today\n";
    }  
    elseif($input =='Thursday'){
        echo "What a re beautiful day\n";
    }    
    elseif($input =='Friday'){
        echo "Have a nice weekend\n";
    }    
    elseif($input =='Saturday'){
        echo "Yeay its my weekend\n";
    }   
    elseif($input =='Sunday'){
        echo "Have a nice Sunday\n";
    }else{
        echo "Invalid input\n";
    }    

?>