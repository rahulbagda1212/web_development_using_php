<?php

$radius = 5;

if ($radius >= 0) 
{
    $area = 3.14159265359 * ($radius * $radius);
    echo "The area of the circle with radius $radius is approximately $area square units.";
} 
else 
{
    echo "Please enter a non-negative radius.";
}
?>
