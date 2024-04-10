<?php

    $style = $_COOKIE['style'];
    $size = $_COOKIE['size'];
    $color = $_COOKIE['color'];
    $bgColor = $_COOKIE['bgColor'];

    echo "<h1 style='font-family: $style; font-size: $size; color: $color; background-color: $bgColor;'>How are you doing?</h1>";
?>
