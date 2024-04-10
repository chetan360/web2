<?php

    $style = $_POST['style'];
    $size = $_POST['size'];
    $color = $_POST['color'];
    $bgColor = $_POST['bgColor'];

    setcookie("style", $style);
    setcookie("size", $size);
    setcookie("color", $color);
    setcookie("bgColor", $bgColor);
    
    
    echo "Font Style: $style <br>";
    echo "Font size: $size <br>";
    echo "Font color: $color <br>";
    echo "Background color: $bgColor <br>";
    
    echo "<a href='S2Q1.php'>Apply Settings</a>"
?>
