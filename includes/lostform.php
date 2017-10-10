<?php

session_start();

include 'dbh.php';

$model = $_POST['model'];
$comp = $_POST['company'];
$loc = $_POST['location'];
$time = $_POST['tym'];
$det = $_POST['details'];
$img = $_POST['img'];
$colour=$_POST['colour'];
$type=$_POST['type'];
$user=$_SESSION['username'];
$status="Lost";

$sql = "INSERT INTO lost (type,model,company,location,tym,details,img,colour,user,status)
VALUES ('$type','$model','$comp','$loc','$time','$det','$img','$colour','$user','$status')";
$result=mysqli_query($conn,$sql);

header("Location: ../lf.php");
?>
