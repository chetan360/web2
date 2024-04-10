<?php
$q = $_GET['q'];

$xml = new DOMDocument();
$xml->load("S16Q1Book.xml");

$books = $xml->getElementsByTagName("book");

foreach ($books as $book) {
    $title = $book->getElementsByTagName("title")->item(0)->nodeValue;
    if ($title == $q) {
        $author = $book->getElementsByTagName("author")->item(0)->nodeValue;
        $year = $book->getElementsByTagName("year")->item(0)->nodeValue;
        $price = $book->getElementsByTagName("price")->item(0)->nodeValue;
        echo "Title: $title<br>";
        echo "Author: $author<br>";
        echo "Year: $year<br>";
        echo "Price: $price<br>";
        break;
    }
}
?>
