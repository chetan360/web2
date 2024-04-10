<?php
session_start();

$correctUser = "chetan360";
$correctPass = "cm360";

$user = "";
$pass = "";
$errorMsg = "";

if(isset($_POST['submit'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if($user == $correctUser && $pass == $correctPass) {
        $_SESSION["attempts"] = 0;
        $_SESSION["user"] = $user;
        header("Location: welcome.php");
        exit();
    } else {
        if(isset($_SESSION['attempts'])) {
            $_SESSION['attempts']++;
        } else {
            $_SESSION['attempts'] = 1;
        }
        
        if($_SESSION['attempts'] >= 3) {
            $errorMsg = "Max login attempts reached. Please try again later";
        } else {
            $attemptsLeft = 3 - $_SESSION['attempts'];
            $errorMsg = "Invalid username or password. Please try again. Attempts left: $attemptsLeft";
        }
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        User name: <input type="text" name="user"><br>
        Password: <input type="password" name="pass"><br>
        <input type="submit" name="submit" value="Login">
        <div style="color:red"><?php echo htmlspecialchars($errorMsg); ?></div>
    </form>
</body>
</html>

