<?php
session_start();

if(!isset($_SESSION['user'])){
    echo "Please login first.<br>";
    echo "<a href='login.php'>Login</a>";
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h2>Welcome <?php echo $_SESSION['user']; ?></h2>

<p>Session is active ✅</p>

<?php
if(isset($_COOKIE['user'])){
    echo "Cookie saved username: " . $_COOKIE['user'];
}
?>

<br><br>
<a href="logout.php">Logout</a>

</body>
</html>