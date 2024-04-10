<?php

$suggestions = ["java", "javascript", "php", "html", "css", "c", "c++"];

$query = isset($_GET['q']) ? $_GET['q'] : '';

$filteredSuggestions = array_filter($suggestions, function($suggestion) use ($query) {
    return stripos($suggestion, $query) !== false;
});

echo json_encode(array_values($filteredSuggestions));

?>
