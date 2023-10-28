<?php  
    $number = array(0,1,2,3,4,5); 
    
    echo "Original array : "; 
    print_r($number);
    echo "<br><br>";
     array_splice($number, 1, 1);  
    
     echo " After remove a specific number and display : ";

    print_r($number);
?> 