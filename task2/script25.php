<?php

$num1 = 5;
$num2 = 10;

echo "Before swapping: num1 = $num1, num2 = $num2\n";


$num1 = $num1 + $num2;
$num2 = $num1 - $num2;
$num1 = $num1 - $num2;
echo "<br>";
echo "After swapping: num1 = $num1, num2 = $num2\n";
?>
