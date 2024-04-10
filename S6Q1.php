<?php
//if no out put or (error occers) during xml data loading 
//insert this commands in terminal

////sudo apt-get install php-dom
//sudo systemctl restart apache2


$xml = simplexml_load_file('book.xml');

echo "<h1>Book Attributes:</h1>";
foreach ($xml->attributes() as $key => $value) {
    echo "$key: $value<br>";
}

echo "<h1>Book Elements:</h1>";
foreach ($xml->children() as $child) {
    echo "{$child->getName()}: $child<br>";
}
?>
