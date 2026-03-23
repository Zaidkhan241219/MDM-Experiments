<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: login.php");
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

<?php
if(isset($_COOKIE['user'])){
    echo "<p>Cookie Value: " . $_COOKIE['user'] . "</p>";
}
?>

<br>
<a href="logout.php">Logout</a>

</body>
</html>