<?php

    $fruits = ["Apple", "Bannana", "Strawberry", "Kiwi"];
    $vegetables = ["Potato", "Corn", "Cucumber", "Tomato"];
        
    $fruveg = array_merge($fruits, $vegetables);
    echo "Merge them into a single array : <br> " ;
    print_r($fruveg);
?>
