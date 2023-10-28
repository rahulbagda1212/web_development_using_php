<?php 

$student = array('id' => 101, 'name' => 'Rahul', 'age' => 21 );

$firstkey = array_key_first($student);

$lastkey = array_key_last($student);

echo "Array first Key : " ;

print_r($firstkey);

echo "<br> Array last key : ";


print_r($lastkey);
    

 ?>