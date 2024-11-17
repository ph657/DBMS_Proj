
<?php
session_start();
include 'db_conn.php';

if (isset($_POST['username']) && isset($_POST['password'])) {

	function validate($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$uname = validate($_POST['username']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: admin.php?error=Username is required");
		exit();
	} else if (empty($pass)) {
		header("Location: admin.php?error=Password is required");
		exit();
	} else {
		// hashing the password
		// $pass = md5($pass);


		$sql = "SELECT * FROM signup WHERE Username='$uname' AND Password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			// print_r($row);
			if ($row['Username'] === $uname && $row['Password'] === $pass ){
				$_SESSION['Username'] = $row['Password'];
				$_SESSION['id'] = $row['id'];
				header("Location:http://localhost/oss/main.php ");
				exit();
			}
			else{ 
				header("Location: admin.php?error= Incorrect username or password");
				exit();
			}
		}
		else{ 
			header("Location: admin.php?error= Incorrect username or password");
			exit();
		}

	}
}else{
	header("location: http://localhost/oss/admin.php");
	exit();
}
?>