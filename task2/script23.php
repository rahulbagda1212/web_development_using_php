<?php

$num1 = 10;
$num2 = 20;
$num3 = 15;


$largest = $num1;

if ($num2 > $largest) 
{
    $largest = $num2;
}

if ($num3 > $largest) 
{
    $largest = $num3;
}

echo "The largest number among $num1, $num2, and $num3";
echo"<br>";
echo "Largest Number Is ".$largest;
?>
