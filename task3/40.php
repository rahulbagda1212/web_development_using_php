<?php


$fruits = array("Pineapple", "Dragon-Fruit", "Kiwi", "Mango", "Strawberry");


$removed_elements = array_splice($fruits, 1, 2);

echo " Removed Elements : ";
print_r($removed_elements);

echo "<br><br>";

echo "Original Array after removal : ";
print_r($fruits);

$replacement = array("Grape", "Orange");

array_splice($fruits, 1, 2, $replacement);

echo "<br><br>";

echo "Array after replacement : ";
print_r($fruits);

?>
