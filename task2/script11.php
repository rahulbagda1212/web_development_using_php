<?php
function checkEvenOrOdd($number) {
    if ($number % 2 == 0) {
        return "Even";
    } else {
        return "Odd";
    }
}
$number = 10; // Replace with the desired number

$result = checkEvenOrOdd($number);

echo "The number $number is $result.";
?>
