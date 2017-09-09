<?php

if(isset($_POST['submit'])){
  include_once 'dbh-inc.php';

  // Variables

  $username = mysql_escape_string($conn, $_POST['username']);
  $password = mysql_escape_string($conn, $_POST['password']);
  $email = mysql_escape_string($conn, $_POST['email']);
  $uid = mysql_escape_string($conn, $_POST['uid']);

  // Error Handling - Check for empty fields

  if(empty($username) || empty($password) || empty($email) || empty($uid)){
    header("Location: ../index.php?signup=empty");
    exit();
  }
}

else{
  header("Location: ../index.php");
  exit();
}
