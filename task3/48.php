<?php

function sum($num, $item) 
{
    return $num + $item;
}

$numbers = [1, 2, 3, 4, 5,6];

$total = array_reduce($numbers, 'sum', 0);
echo "The sum of all elements is: ".$total;
?>