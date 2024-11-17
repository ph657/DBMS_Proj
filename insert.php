<?php
session_start();
include 'db_conn.php';

  $name = $_POST['username'];
  $state= $_POST['country-state'];
  $cat = $_POST['category'];
  $soft = $_POST['software'];


$sql = "INSERT INTO apps (Username ,State,Category, Software)
VALUES ('$name', '$state', '$cat','$soft')";

$res = mysqli_query($conn,$sql);

echo "Downloaded ";
echo $_POST['software'];
echo "!";
echo "<a href='http://localhost/oss/main.php'>Home</a>";



$conn->close();
?>