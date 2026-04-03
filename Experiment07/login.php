<?php
session_start();

// cookie se username fill
$username_cookie = "";
if(isset($_COOKIE['user'])){
    $username_cookie = $_COOKIE['user'];
}

// login check
if(isset($_POST['login'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if($user == "admin" && $pass == "12345"){
        $_SESSION['user'] = $user;

        // cookie set
        setcookie("user", $user, time()+3600);

        echo "Login Successful! <br>";
        echo "<a href='dashboard.php'>Go to Dashboard</a>";
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
    <input type="text" name="username" placeholder="Username" value="<?php echo $username_cookie; ?>"><br><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    <button type="submit" name="login">Login</button>
</form>

<?php
if(isset($error)){
    echo "<p style='color:red;'>$error</p>";
}
?>

</body>
</html>