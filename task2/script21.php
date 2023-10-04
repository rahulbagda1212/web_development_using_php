<?php

function isPalindrome($number) 
{
    $originalNumber = $number;
    $reverse = 0;

    while ($number > 0) 
    {
        $digit = $number % 10;
        $reverse = $reverse * 10 + $digit;
        $number = (int)($number / 10);
    }

    return $originalNumber === $reverse;
}

$number = 121;

if (isPalindrome($number)) 
{
    echo "$number is a palindrome.";
} else {
    echo "$number is not a palindrome.";
}
?>
