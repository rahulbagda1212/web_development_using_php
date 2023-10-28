<?php
function oddnumber($var)
  {
  return($var & 1);
  }
$a=array(1,3,2,3,4,5,7,8);

print_r(array_filter($a,"oddNumber"));

?>