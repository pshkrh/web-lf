<?php

include 'dbh.php';

$username = $_POST['username'];
$pwd = $_POST['pwd'];

$sql = "SELECT* FROM users WHERE username='$username' AND pwd='$pwd'";
$result=mysqli_query($conn,$sql);
if(!$row = mysqli_fetch_assoc($result))
{
  header("Location: ../index.php");
}
else {
  header("Location: ../lf.php");
}

?>
