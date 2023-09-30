<?php
$number = readline("Enter a positive integer: ");
$number = (int)$number;
if ($number <= 0) {
    echo "Please enter a positive integer.";
} else {
    $isPrime = true;


    for ($i = 2; $i * $i <= $number; $i++) 
    {
        if ($number % $i == 0)
         {
            $isPrime = false;
            break; 
        }
    }

    if ($isPrime)
     {
        echo "$number is a prime number.";
    } else
     {
        echo "$number is not a prime number.";
    }
}
?>
