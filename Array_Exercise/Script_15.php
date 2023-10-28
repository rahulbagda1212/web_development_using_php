<?php

    $movies = array(
        array(
            'title' => 'Leo',
            'director' => 'Rahul Bagda',
            'releaseYear' => 2023
        ),
        array(
            'title' => 'Transformer-5',
            'director' => 'Rahul Bagda',
            'releaseYear' => 2023
        )
    );
    
    echo "Movie Title: " . $movies[0]["title"] . "<br>";
    echo "Director: " . $movies[0]["director"] . "<br>";
    echo "Release Year: " . $movies[0]["releaseYear"] . "<br>";
    echo "<br> <br>";
    echo "For Array Having Index 1: <br>";
    print_r($movies[1]);

?>