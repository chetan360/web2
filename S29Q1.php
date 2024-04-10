<!DOCTYPE html>
<html>
<head>
    <title>title</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="get">
        Enter number: <input type="text" name="n"><br>
        <input type="radio" name="ch" value="1">Fibonacci Series terms<br>
        <input type="radio" name="ch" value="2">Calculate Sum of digits<br>
        <input type="submit" value="submit" name="submit">
    </form>

    <?php
    if (isset($_GET['submit'])) {
        $n = $_GET['n'];
        $ch = $_GET['ch'];

        switch ($ch) {
            case 1:
                echo "<h1>Fibonacci Series:</h1>";
                $n1 = 0;
                $n2 = 1; 
                echo "$n1 <br> $n2 <br>";
                for ($i = 0; $i < $n - 2; $i++) { 
                    $n3 = $n1 + $n2;
                    $n1 = $n2;
                    $n2 = $n3;
                    echo "$n3 <br>";
                }
                break;
            case 2:
                $sum = 0;
                while ($n > 0) {
                    $digit = $n % 10;
                    $sum += $digit;
                    $n = (int)($n / 10);
                }
                echo "<h1>Sum of digits = $sum</h1>";
                
        }
    }
    ?>
</body>
</html>
