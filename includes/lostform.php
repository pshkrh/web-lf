<?php

include 'dbh.php';

$model = $_POST['model'];
$comp = $_POST['company'];
$loc = $_POST['location'];
$time = $_POST['tym'];
$det = $_POST['details'];
$img = $_POST['img'];
$colour=$_POST['colour'];
$type=$_POST['type'];

$sql = "INSERT INTO lost (type,model,company,location,tym,details,img,colour)
VALUES ('$type','$model','$comp','$loc','$time','$det','$img','$colour')";
$result=mysqli_query($conn,$sql);

header("Location: ../lf.php");
?>
