

<?php

$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$state= $_POST['country-state'];
$category = $_POST['category'];


$conn = new mysqli('localhost', 'root', '', 'oss');
if ($conn->connect_error)
{
    die('Connection Failed :' .$conn->connect_error);
}
else
{
  
$stmt = $conn->prepare("insert into signup (Name,Email,State,Category,Username,Password)values(?,?,?,?,?,?)");
$stmt->bind_param("ssssss",$name,$email,$state,$category,$username,$password);
$stmt->execute();
echo"Created account successfully";
header("location: http://localhost/oss/main.php"); 
$stmt->close();
$conn->close();
  }



?>


