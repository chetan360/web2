<?php

//if no out put or (error occers) during xml data loading 
//insert this commands in terminal

////sudo apt-get install php-dom
//sudo systemctl restart apache2


$doc = new DOMDocument();
$doc->load('Movie.xml');

$movies = $doc->getElementsByTagName('Movie');

echo "<h1>Movie Titles and Actor Names:</h1>";
foreach ($movies as $movie) {
    $movieNo = $movie->getElementsByTagName('MovieNo')->item(0)->nodeValue;
    $movieTitle = $movie->getElementsByTagName('MovieTitle')->item(0)->nodeValue;
    $actorName = $movie->getElementsByTagName('ActorName')->item(0)->nodeValue;
    $releaseYear = $movie->getElementsByTagName('ReleaseYear')->item(0)->nodeValue;
    echo "Movie Number: $movieNo, Movie Title: $movieTitle, Actor Name: $actorName, Release Year: $releaseYear <br>";
}
?>
