<?php
$num1 = readline("Enter the first number: ");
$num2 = readline("Enter the second number: ");
$num3 = readline("Enter the third number: ");

$num1 = (int)$num1;
$num2 = (int)$num2;
$num3 = (int)$num3;

if (is_numeric($num1) && is_numeric($num2) && is_numeric($num3)) {
    $largest = max($num1, $num2, $num3);
    echo "The largest number is: $largest";
} else {
    echo "Invalid input. Please enter valid numeric values.";
}
?>
