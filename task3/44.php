<?php

$student = array(
    "first_name" => "Rahul",
    "last_name" => "Bagda",
    "age" => 21,
    "email" => "rahulbagda09@gmail.com"
);

$value = array_values($student);

echo "values from the associative array:<br>";

print_r($value);

?>