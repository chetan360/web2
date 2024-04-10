<?php
    session_start();

    if(!isset($_SESSION['pageCnt']))
        $_SESSION['pageCnt'] = 1;
    else
        $_SESSION['pageCnt']++;
        
    echo "Page is accessed ".$_SESSION['pageCnt'] ." times.";
?>