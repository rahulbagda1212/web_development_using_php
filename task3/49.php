<?php
$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$chunkSize = 3;
$chunks = array_chunk($data, $chunkSize);
foreach ($chunks as $chunk) 
{
    print_r($chunk);
}
?>