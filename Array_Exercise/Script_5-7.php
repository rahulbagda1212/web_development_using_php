<?php
    $numbers = array(1, 2, 3, 4, 5);

    $totalCount = count($numbers);
    echo "Total count of elements : " . $totalCount . "<br>";

    echo "Numbers in the array: ";
    foreach ($numbers as $number) 
    {
        echo $number . " ";
    }

    array_pop($numbers);
    
    echo "<br>Array after removing the last number: ";
    foreach ($numbers as $number) 
    {
        echo $number . " ";
    }
?>
