<?php

include 'dbh.php';

$email = $_POST['email'];
$username = $_POST['username'];
$pwd = $_POST['password'];

$sql = "INSERT INTO users (email,username,pwd)
VALUES ('$email','$username','$pwd')";
$result=mysqli_query($conn,$sql);

header("Location: ../index.php");
 ?>
