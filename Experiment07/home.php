<?php
session_start();

if(!isset($_SESSION['user'])){
    echo "Please login first. <a href='login.php'>Login</a>";
    exit();
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Welcome <?php echo $_SESSION['user']; ?></h2>

<p>Session is working ✅</p>

<a href="logout.php">Logout</a>

</body>
</html>