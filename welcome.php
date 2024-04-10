<?php
    session_start();
?>

<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <h1> <?php echo  "Welcome " .htmlspecialchars($_SESSION['user']) ?></h1>
    </body>
</html>