<?php  
    
    $cities = ["Mumbai", "Banglore", "Delhi", "Chennai", "Rajkot"];
    
    print_r($cities);
    echo "<br><br>";
    sort($cities);

    echo "Alphabetical Order :<br>";
    print_r($cities);
    echo "<br><br>";
    rsort($cities);
    
    echo "20 - Reverse Alphabetical Order :<br>";
    print_r($cities);
    
?> 