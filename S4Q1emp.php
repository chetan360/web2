<?php
    session_start();
    
    if(isset($_POST['submit'])) {
        $eno = $_POST['eno'];
        $ename = $_POST['ename'];
        $address = $_POST['address'];
        
        $_SESSION['eno'] = $eno;
        $_SESSION['ename'] = $ename;
        $_SESSION['address'] = $address;
        
        header("Location: S4Q1DaHra.php");
        exit();
    }
?>

<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            Enter eno     :<input type="text" name="eno"><br>
            Enter ename   :<input type="text" name="ename"><br>
            Enter address :<input type="text" name="address"><br>
            <input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>
