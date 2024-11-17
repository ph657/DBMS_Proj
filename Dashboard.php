<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dashboard - Open source software</title>
    <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body style="background-color: black;">
    
    <header id="header" class="fixed-top.header-transparent">
        <div class="container d-flex align-items-center justify-content-between position-relative">
    
          <div class="logo">
            <h1 class="text-light"><a href="index.html"><span>Open source software</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
          </div>
    
          <nav id="navbar" class="navbar" >
            <ul>
              <li><a class="nav-link scrollto" href="http://localhost/oss/main.php">Home</a></li>
            </ul>
          </nav><!-- .navbar -->
    
        </div>
        
      </header><!-- End Header -->

    <main id="main" class="main">

        <div class="pagetitle">
          <h1>Dashboard</h1>

        </div><!-- End Page Title -->
    
        <section class="section dashboard">
          <div class="row">
    
            <!-- Left side columns -->
            <div class="col-lg-8">
              <div class="row">
  
                
                <div class="col-12">
                  <div class="card top-selling overflow-auto">
    
                  <body style="background-color: black;">             
    
    <div class="card-body">
          <h5 class="card-title">Download details <span>| Today</span></h5>

          <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
</script>

<style>
table {
font-family: arial, sans-serif;
border-collapse: collapse;
width: 50%;



}

td,
th {
border: 1px solid white;
text-align: left;
padding: 8px;
color:black;
border-color: black ;
}





</style>



<center>

<b>Search the table for User, State ,Category,Software: 
<input id="gfg" type="text" 
     placeholder="Search here">
</b>
<br>
<br>
<table>
<tr>
    <th>Username</th>
    <th>State</th>
    <th>Category</th>
    <th>Software</th>
</tr>
<tbody id="geeks">
<?php
$conn = new mysqli('localhost', 'root', '', 'oss');
if ($conn->connect_error)
{
    die('Connection Failed :' .$conn->connect_error);
}

$sql = "SELECT * FROM apps ";
$result = $conn->query($sql);



  while ($row = $result -> fetch_assoc())
  {
    echo "<tr>
<td>" . $row['Username'] . "</td>
<td>" . $row['State'] . "</td>
<td>" . $row['Category'] . "</td>
<td>" . $row['Software'] . "</td>
</tr>";
  }

$conn->close();
?>
    
</tbody>
</table>

<script>
$(document).ready(function() {
    $("#gfg").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#geeks tr").filter(function() {
            $(this).toggle($(this).text()
            .toLowerCase().indexOf(value) > -1)
        });
    });
});
</script>
</center>
    </div><!-- End Recent Sales -->





</body>
    
                    
    
                  </div>
                </div><!-- End Top Selling -->
    
              </div>
            </div><!-- End Left side columns -->
    
            <!-- Right side columns -->
            <div class="col-lg-4">
    
              <!-- Recent Activity -->
              <div class="card">

    
                <div class="card-body">
                  <h5 class="card-title"> Suggested apps <span>| for Windows </span></h5>

                <aside class="aside"><section ><?php
                  $conn = new mysqli('localhost', 'root', '', 'oss');
                  if ($conn->connect_error)
{
die('Connection Failed :' .$conn->connect_error);
}
$sql = "SELECT Category FROM apps ORDER BY Category DESC";
$result = $conn->query($sql);
$row=mysqli_fetch_array($result); 
if($row["Category"] === 'Student')
{
    echo "<tr><td><a href='localhost/oss/images/vlc.html'>VLC media player</a>
          <br></td><td>
          <a href='http://localhost/oss/images/office.html'>Microsoft Office</a>
          <br></td><td>
          <a href='http://localhost/oss/images/MozillaFirefox.html'>Mozilla FireFox</a>
          <br></td><td>
          <a href='http://localhost/oss/images/python.html'>Python</a>
          <br></td><td>
          <a href='http://localhost/oss/images/openshot.html'>OpenShot</a>
          <br></td><tr>";  
}
else if ($row["Category"] === 'Professional')
{
echo "<tr><td><a href='http://localhost/oss/images/Visualstudiocode.html'>Visual Studio Code</a>
          <br></td><td>
          <a href='http://localhost/oss/images/obs.html'>OBS Studio</a>
          <br></td><td>
          <a href='http://localhost/oss/images/freecad.html'>FreeCAD</a>
          <br></td><td>
          <a href='http://localhost/oss/images/ubuntu.html'>Ubuntu</a>
          <br></td><td>
          <a href='http://localhost/oss/images/Tor.html'>Tor Browser</a>
          <br></td><tr>"; 
} 
else if ($row["Category"] === 'Freelancer')
{
echo "<tr><td><a href='http://localhost/oss/images/brave.html'>Brave</a>
          <br>/td><td>
          <a href='http://localhost/oss/images/filezilla.html'>FileZilla</a>
          <br>/td><td>
          <a href='http://localhost/oss/images/Mpv.html'>MPV player</a>
          <br>/td><td>
          <a href='http://localhost/oss/images/gimp.html'>GIMP</a>
          <br>/td><td>
          <a href='http://localhost/oss/images/mysql.html'>MySQL</a>
          <br></td><tr>"; 
}

?></section>

    
                </div>
 
    
            </div><!-- End Right side columns -->
    
          </div>
        </section>
    
      </main><!-- End #main -->
            </body>
            </html>