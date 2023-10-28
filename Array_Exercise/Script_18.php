<?php  

    $cities = ["Mumbai", "Banglore", "Delhi", "Rajkot"];

    print_r($cities);
    echo "<br><br>";
     array_splice($cities, 2,1);  
    
    echo " After remove a city  and display : ";
    print_r($cities);
    
?> 