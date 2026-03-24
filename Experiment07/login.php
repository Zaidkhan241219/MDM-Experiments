<?php
session_start();


if(isset($_SESSION['user'])){
    echo "Already logged in. <a href='home.php'>Go to Home</a>";
    exit();
}

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "admin" && $password == "1234"){

        $_SESSION['user'] = $username;

        if(isset($_POST['remember'])){
            setcookie("username", $username, time()+3600);
        }

        echo "Login successful! <a href='home.php'>Go to Home</a>";
        exit();

    } else {
        $error = "Invalid login";
    }
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Login Page</h2>

<form method="post">
    <input type="text" name="username" placeholder="Username"><br><br>
    <input type="password" name="password" placeholder="Password"><br><br>

    <input type="checkbox" name="remember"> Remember Me<br><br>

    <button type="submit">Login</button>
</form>

<?php
if(isset($error)){
    echo "<p style='color:red;'>$error</p>";
}
?>

</body>
</html>