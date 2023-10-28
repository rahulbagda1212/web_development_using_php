<?php
function square($number) 
{
    return $number * $number;
}


$numbers = [1, 2, 3, 4, 5];


$squaredNumbers = array_map('square', $numbers);
print_r($squaredNumbers);
?>
