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
$status="Found, awaiting match.";

$target = "../pics/".basename($_FILES['img']['name']);
$img = $_FILES['img']['name'];

if($model=="")
{
  $model="N/A";
}

if($comp=="")
{
  $comp="N/A";
}

if($det=="")
{
  $det="N/A";
}

$sql = "INSERT INTO found (type,model,company,location,tym,details,img,colour,user,status)
VALUES ('$type','$model','$comp','$loc','$time','$det','$img','$colour','$user','$status')";
$result=mysqli_query($conn,$sql);

if (move_uploaded_file($_FILES['img']['tmp_name'], $target))
{
  $msg = "Image Uploaded Successfully.";
  echo $msg;
}
else
{
  $msg = "There was a problem uploading the image. Please try again.";
  echo $msg;
}

header("Location: ../lf.php");
?>
