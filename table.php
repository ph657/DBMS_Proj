<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Creative Studio landing page.">
    <meta name="author" content="Devcrud">
    <title>Gate Result </title>
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
	<link rel="stylesheet" href="assets/css/creative-studio.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
            color:white;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: white;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home" style="background-color: white;">
    
    <nav class="navbar custom-navbar navbar-expand-lg navbar-dark" data-spy="affix" data-offset-top="20">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <!-- <a class="nav-link btn btn-primary btn-sm ml-lg-3" href="login.html">Login</a> -->
                        <div class="dropdown">
                            <button class="nav-link btn btn-primary btn-sm ml-lg-3"><a href="admincutoff.php">/</a>Login</button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- <header class="header">
        <div class="overlay">
            <h6 class="subtitle">Know more about</h6>
            <h1 class="title">Gate Result Analysis</h1>
            <div class="buttons text-center">
                <a href="#service" class="btn btn-primary rounded w-lg btn-lg my-1">Know more</a>
                
            </div>              
        </div>      
    </header> -->
    <br><br><br><br><br><br><br>
    <center><h1 style="color: whitesmoke;">GATE Result Analysis </h1>
    <br><br>
    <button><a href="#insert">Insertion</a></button>
    <button><a href="#delete">Deletion</a></button>
    <button><a href="#update">Updation</a></button>
    <h3></h3></center>
    <br><br><br>
<!-- PHP code to establish connection with the localserver -->
<?php

// Username is root
$user = 'root';
$password = '';

// Database name is geeksforgeeks
$database = 'admin';

// Server is localhost with
// port number 3306
$servername='localhost';
$mysqli = new mysqli($servername, $user, $password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = " SELECT * FROM c2018 ORDER BY pcode ";
$result = $mysqli->query($sql);
$mysqli->close();

?>
<!-- HTML code to display data in tabular format -->
	<!-- CSS FOR STYLING THE PAGE -->

<section>
		<h1>2018 Result</h1><br><br>
		<!-- TABLE CONSTRUCTION -->
		<table>
			<tr>
				<th>Paper Code</th>
				<th>Paper Name</th>
				<th>General Cutoff</th>
				<th>OBC Cutoff</th>
				<th>SC/ST Cutoff</th>
				<th>PwD Cutoff</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS -->
			<?php
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
				<td><?php echo $rows['pcode'];?></td>
				<td><?php echo $rows['pname'];?></td>
				<td><?php echo $rows['general'];?></td>
				<td><?php echo $rows['OBC'];?></td>
				<td><?php echo $rows['SC'];?></td>
				<td><?php echo $rows['PWD'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
    <div id="insert" style="padding-left:100px;">
        <h3>Insert</h3>
        <form action="change05.php" method="post">
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Paper Code</label>
     	<input type="text" name="pcode" placeholder="paper code"><br>

     	<label>Paper Name</label>
     	<input type="text" name="pname" placeholder="paper Name"><br>

        <label>General</label>
     	<input type="text" name="general" placeholder="General"><br>

        <label>OBC</label>
     	<input type="text" name="OBC" placeholder="OBC"><br>

        <label>SC</label>
     	<input type="text" name="SC" placeholder="SC"><br>

        <label>PWD</label>
     	<input type="text" name="PWD" placeholder="PWD"><br>


     	<button type="submit">Insert</button>
     </form>
     </div>
     <br><br>
     <div id="delete" style="padding-left:100px">
     <h3>Delete</h3>
     <form action="change15.php" method="post">
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Paper Code</label>
     	<input type="text" name="pcode" placeholder="Paper Code"><br>
     	<button type="submit">Delete</button>
     </form>

     </div>
     <br><br><br><br>
        <div id="update" style="padding-left:100px;">
        <h3>Update</h3>
        <form action="change25.php" method="post">
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Paper code</label>
     	<input type="text" name="pcode" placeholder="Paper code"><br>

        <label>General category</label>
     	<input type="text" name="general" placeholder="General"><br>

     	<button type="submit">Update</button>
     </form>
	</section>
</body>

</html>