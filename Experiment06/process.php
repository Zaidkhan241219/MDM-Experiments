<?php

include "connect.php";

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql="INSERT INTO users(name,email,password)
VALUES('$name','$email','$password')";

if(mysqli_query($conn,$sql)){

echo "Registration Successful<br>";
echo "<a href='display.php'>View Users</a>";

}
else{
echo "Error";
}

?>