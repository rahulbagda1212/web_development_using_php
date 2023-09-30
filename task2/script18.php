<?php
$randomNumber = rand(1, 10);
$userGuess = readline("Guess the number (between 1 and 10): ");

if ($userGuess == $randomNumber) 
{
    echo "Congratulations! You guessed the correct number: $randomNumber";
} else 
{
    echo "Sorry, the correct number was: $randomNumber";
}
?>
