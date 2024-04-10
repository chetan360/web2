<?php
    session_start();
    
    if(isset($_POST['submit'])) {
        $basic = $_POST['basic'];
        $da = $_POST['da'];
        $hra = $_POST['hra'];
        
        $_SESSION['basic'] = $basic;
        $_SESSION['da'] = $da;
        $_SESSION['hra'] = $hra;
        
        header("Location: S4Q1.php");
        exit();   
    }
?>

<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            Enter Basic     :<input type="text" name="basic"><br>
            Enter DA   :<input type="text" name="da"><br>
            Enter HRA :<input type="text" name="hra"><br>
            <input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>
