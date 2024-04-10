<?php
    session_start();

    $eno = $_SESSION['eno'];
    $ename = $_SESSION['ename'];
    $address = $_SESSION['address'];
    $basic = $_SESSION['basic'];
    $da = $_SESSION['da'];
    $hra = $_SESSION['hra'];
    
    echo "<h1>Emp info</h1> <br>";
    echo "<h3>Eno     : $eno</h3>";
    echo "<h3>Ename   : $ename</h3>";
    echo "<h3>Address : $address</h3>";
    echo "<h3>Bassic  : $basic</h3>";
    echo "<h3>Da      : $da</h3>";
    echo "<h3>HRA     : $hra</h3>";
    
?>