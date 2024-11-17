<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main - Open source software</title>
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
    <header id="header" class="fixed-top.header-transparent">
        <div class="container d-flex align-items-center justify-content-between position-relative">
    
          <div class="logo">
            <h1 class="text-light"><a href="index.html"><span>Open source software</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
          </div>
    
          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto active" href="http://localhost/oss/main.html">Home</a></li>
              <li><a class="nav-link scrollto" href="http://localhost/oss/dashboard.php">Dashboard</a></li>
              
              <li class="dropdown megamenu"><a href="#"><span>Apps</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li>
                    <strong>Browsers</strong>
                    <a href="http://localhost/oss/images/MozillaFirefox.html">Mozilla FireFox</a>
                    <a href="http://localhost/oss/images/Tor.html">Tor Browser</a>
                    <a href="http://localhost/oss/images/brave.html">Brave</a>
                  </li>
                  <li>
                    <strong>Multimedia</strong>
                    <a href="http://localhost/oss/images/vlc.html">VLC media player</a>
                    <a href="http://localhost/oss/images/obs.html">OBS Studio</a>
                    <a href="http://localhost/oss/images/Mpv.html">MPV player</a>
                  </li>
                  <li>
                    <strong>Development & IT</strong>
                    <a href="http://localhost/oss/images/Visualstudiocode.html">Visual Studio Code</a>
                    <a href="http://localhost/oss/images/python.html">Python</a>
                    <a href="http://localhost/oss/images/mysql.html">MySQL</a>
                  </li>
                  <li>
                    <strong>Productivity</strong>
                    <a href="http://localhost/oss/images/office.html">Microsoft Office</a>
                    <a href="http://localhost/oss/images/filezilla.html">FileZilla</a>
                    <a href="http://localhost/oss/images/freecad.html">FreeCAD</a>
                  </li>
                  <li>
                    <strong>Editor</strong>
                    <a href="http://localhost/oss/images/openshot.html">OpenShot</a>
                    <a href="http://localhost/oss/images/gimp.html">GIMP</a>
                    <a href="http://localhost/oss/images/avidemux.html">Avidemux</a>
                  </li>
                  <li>
                    <strong>OS</strong>
                    <a href="http://localhost/oss/images/linux.html">Linux</a>
                    <a href="http://localhost/oss/images/ubuntu.html">Ubuntu</a>
                    <a href="http://localhost/oss/images/chromeos.html">ChromeOS</a>
                  </li>

                </ul>
              



              
              <li class="dropdown"><a href="#"><span>Profile</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li>
                    <strong><?php
                      $conn = new mysqli('localhost', 'root', '', 'oss');
                      if ($conn->connect_error)
{
    die('Connection Failed :' .$conn->connect_error);
}
$sql = "SELECT Username, Category FROM signup ORDER BY Username DESC";
$result = $conn->query($sql);
$row=mysqli_fetch_array($result); 
echo $row["Username"];
echo "/";
echo $row["Category"];
                    $conn->close();

?></strong>
                    
                    </li>
                   

                    <li>
                    <a href=" http://localhost/oss/admin.php">Logout</a>
                    </li>
                  
                </ul>
              
            
            
          </nav><!-- .navbar -->
    
        
      </header><!-- End Header -->

                
  <body style="background-color: black;">             
    
                <div class="card-body">
                      <h5 class="card-title">Software <span>| Today</span></h5>
    
                      <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
  
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 50%;
            border-color:white;
            
        }
          
        td,
        th {
            border: 1px solid white;
            text-align: left;
            padding: 8px;
            color:white;
        }
          
        
    </style>

  

    <center>
        
        <b>Search the table for Software, Rating ,version,platform: 
          <input id="gfg" type="text" 
                 placeholder="Search here">
        </b>
        <br>
        <br>
        <table>
            <tr>
                <th>Software</th>
                <th>Rating </th>
                <th>version</th>
                <th>platform</th>
            </tr>
            <tbody id="geeks">
                <tr>
                    <td><a href="http://localhost/oss/images/MozillaFirefox.html">Mozilla FireFox</a></td>
                    <td>5</td>
                    <td>96.7</td>
                    <td>Windows</td>
                </tr>
                <tr>
                    <td><a href="http://localhost/oss/images/MozillaFirefox.html">Mozilla FireFox</a></td>
                    <td>5</td>
                    <td>96.8</td>
                    <td>Mac</td>
                </tr>
                <tr>
                    <td><a href="http://localhost/oss/images/brave.html">Brave</a></td>
                    <td>5</td>
                    <td>97.9</td>
                    <td>Windows</td>
                </tr>
                <tr>
                    <td><a href="http://localhost/oss/images/brave.html">Brave</a></td>
                    <td>5</td>
                    <td>97.7</td>
                    <td>Mac</td>
                </tr>
                <tr>
                    <td><a href="http://localhost/oss/images/office.html">Microsoft Office</a></td>
                    <td>5</td>
                    <td>67.6</td>
                    <td>Windows</td>
                </tr>
                <tr>
                    <td><a href="http://localhost/oss/images/office.html">Microsoft Office</a></td>
                    <td>5</td>
                    <td>67.7</td>
                    <td>Mac</td>
                </tr>
                <tr>
                    <td><a href="http://localhost/oss/images/Visualstudiocode.html">Visual Studio Code</a></td>
                    <td>5</td>
                    <td>77.9</td>
                    <td>Windows</td>
                </tr>
                <tr>
                <td> <a href="http://localhost/oss/images/Tor.html">Tor Browser</a></td>
                    <td>3</td>
                    <td>89.6</td>
                    <td>Windows</td>
                </tr>
                <tr>
                <td> <a href="http://localhost/oss/images/vlc.html">VLC media player</a></td>
                    <td>4</td>
                    <td>68.0</td>
                    <td>Windows</td>
                </tr>
                <tr>
                <td> <a href="http://localhost/oss/images/vlc.html">VLC media player</a></td>
                    <td>4</td>
                    <td>68.1</td>
                    <td>Mac</td>
                </tr>
                <tr>
                <td><a href="http://localhost/oss/images/python.html">Python</a></td>
                    <td>3</td>
                    <td>86.0</td>
                    <td>Windows</td>
                </tr>
                <tr>
                <td><a href="http://localhost/oss/images/python.html">Python</a></td>
                    <td>3</td>
                    <td>86.1</td>
                    <td>Mac</td>
                </tr>
                <tr>
                <td><a href="http://localhost/oss/images/ubuntu.html">Ubuntu</a></td>
                    <td>3</td>
                    <td>77.8</td>
                    <td>Windows</td>
                </tr>
                <tr>
                <td><a href="http://localhost/oss/images/Mpv.html">MPV player</a></td>
                    <td>2</td>
                    <td>88.8</td>
                    <td>Windows</td>
                </tr>
                <tr>
                <td><a href="http://localhost/oss/images/obs.html">OBS Studio</a></td>
                    <td>3</td>
                    <td>88.9</td>
                    <td>Windows</td>
                </tr>
                <tr>
                <td><a href="http://localhost/oss/images/openshot.html">OpenShot</a></td>
                    <td>4</td>
                    <td>97.9</td>
                    <td>Windows</td>
                </tr>
                <tr>
                <td><a href="http://localhost/oss/images/linux.html">Linux</a></td>
                    <td>3</td>
                    <td>98.0</td>
                    <td>linux</td>
                </tr>
                <tr>
                <td><a href="http://localhost/oss/images/gimp.html">GIMP</a></td>
                    <td>3</td>
                    <td>83.8</td>
                    <td>Windows</td>
                </tr>
                <tr>
                <td><a href="http://localhost/oss/images/filezilla.html">FileZilla</a></td>
                    <td>4</td>
                    <td>78.4</td>
                    <td>Windows</td>
                </tr>
                <tr>
                <td><a href="http://localhost/oss/images/chromeos.html">ChromeOS</a></td>
                    <td>2</td>
                    <td>82.6</td>
                    <td>ChromeOS</td>
                </tr>
                <tr>
                <td><a href="http://localhost/oss/images/avidemux.html">Avidemux</a></td>
                    <td>2</td>
                    <td>27.7</td>
                    <td>Windows</td>
                </tr>
                <tr>
                <td><a href="http://localhost/oss/images/freecad.html">FreeCAD</a></td>
                    <td>2</td>
                    <td>97.2</td>
                    <td>Windows</td>
                </tr>

                <tr>
                <td><a href="http://localhost/oss/images/mysql.html">MySQL</a></td>
                    <td>2</td>
                    <td>97.2</td>
                    <td>Windows</td>
                </tr>
                <tr>
                <td><a href="http://localhost/oss/images/mysql.html">MySQL</a></td>
                    <td>2</td>
                    <td>67.2</td>
                    <td>linux</td>
                </tr>
                <tr>
                <td><a href="http://localhost/oss/images/mysql.html">MySQL</a></td>
                    <td>2</td>
                    <td>27.6</td>
                    <td>Mac</td>
                </tr>
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
</html>