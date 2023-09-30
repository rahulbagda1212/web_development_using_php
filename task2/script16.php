<?php
$sentence = readline("Enter a sentence: ");
$sentence = strtolower($sentence);

$vowelCount = preg_match_all('/[aeiou]/', $sentence);

echo "The number of vowels in the sentence is: $vowelCount";
?>
