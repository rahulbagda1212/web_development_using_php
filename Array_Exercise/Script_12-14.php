<?php

    $profile = 
    [
        "name" => "Milan",
        "age" => 21,
        "email" => "milanbhalodiya410@gmail.com",
    ];
    print_r($profile);
    echo "<br><br>";
    echo " Access and display the person's age : " . $profile["age"] . "<br><br>";
    unset($profile["email"]);  
    echo "Updated Array :<br>";
    print_r($profile);
?>