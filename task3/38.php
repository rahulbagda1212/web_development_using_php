<?php
$a=array(1,2,3,4,5,6,7,8,9,10);
print_r($a);
echo"<br>";
$b=array_shift($a);
print_r($a);
echo"<br>";
$b=array_unshift($a,0);
print_r($a);
?>