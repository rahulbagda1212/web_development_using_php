<?php
$Duplicates = array('apple', 'banana', 'cherry', 'apple', 'date', 'banana');
$unique = array_unique($Duplicates);
print_r($unique);
?>
