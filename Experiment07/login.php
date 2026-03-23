<?php
session_start();


if(isset($_SESSION['user'])){
    header("Location: dashboard.php");
    exit();
}

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "admin" && $password == "1234"){

        $_SESSION['user'] = $username;

        setcookie("user", $username, time()+3600);

        header("Location: dashboard.php");
        exit();

    } else {
        $error = "Invalid Username or Password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login Page</h2>

<form method="post">
    <input type="text" name="username" placeholder="Enter Username"><br><br>
    <input type="password" name="password" placeholder="Enter Password"><br><br>
    <button type="submit" name="login">Login</button>
</form>

<?php
if(isset($error)){
    echo "<p style='color:red;'>$error</p>";
}
?>

</body>
</html>