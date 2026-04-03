<?php

include "connect.php";

$result=mysqli_query($conn,"SELECT * FROM users");

?>

<!DOCTYPE html>
<html>
<head>
<title>Users</title>

<style>

body{
font-family:Arial;
background-color:lightgray;
text-align:center;
}

table{
margin:40px auto;
border-collapse:collapse;
background:white;
}

th,td{
padding:10px;
border:1px solid gray;
}

th{
background-color:steelblue;
color:white;
}

</style>

</head>

<body>

<h2>Registered Users</h2>

<table>

<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Password</th>
</tr>

<?php

while($row=mysqli_fetch_assoc($result)){

?>

<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['password']; ?></td>

</tr>

<?php
}
?>

</table>

</body>
</html>