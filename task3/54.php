<?php

    $student = array(array('id' => 101, 'name' => 'Rahul', 'age' => 21 ),
                     array('id' => 201, 'name' => 'Vishal', 'age' => 20 ),
                     array('id' => 301, 'name' => 'Mehul', 'age' => 21 ),
                     array('id' => 401, 'name' => 'Milan', 'age' => 21 )
                );

    $name = array_column($student ,'name');

    print_r($name);

?>