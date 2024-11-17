<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Download</title>

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                  <span class="d-none d-lg-block">Open source software</span>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Download</h5>
                    <p class="text-center small">Enter your details to download</p>
                  </div>

                  <?php if (isset($_POST['submit'])) {
                      $name = $_POST["username"];
                      $state = $_POST["country-state"];
                      $cat=$_POST["category"];
                      $soft = $_POST["software"];
     	 } ?>

                  <form class="row g-3 needs-validation" method="post" action="http://localhost/oss/insert.php" >
                  <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please choose a username.</div>
                      </div>
                    </div>

                    <br>
                    <div class="col-12">
                      <label for="Category" class="form-label">Category</label>
                      <select id="Category" name="category" required>
                        <option value="Student">Student</option>
                        <option value="Professional">Professional</option>
                        <option value="Freelancer">Freelancer</option>
                      </select>
                    </div>
<br>
                    <div class="col-12">
                      <label for="yourstate" class="form-label">State</label>
                      <select id="country-state" name="country-state" required>
                        <option value="TN">Tamil Nadu</option>
                        <option value="AN">Andaman and Nicobar Islands</option>
                        <option value="AP">Andhra Pradesh</option>
                        <option value="AR">Arunachal Pradesh</option>
                        <option value="AS">Assam</option>
                        <option value="BR">Bihar</option>
                        <option value="CH">Chandigarh</option>
                        <option value="CT">Chhattisgarh</option>
                        <option value="DN">Dadra and Nagar Haveli</option>
                        <option value="DD">Daman and Diu</option>
                        <option value="DL">Delhi</option>
                        <option value="GA">Goa</option>
                        <option value="GJ">Gujarat</option>
                        <option value="HR">Haryana</option>
                        <option value="HP">Himachal Pradesh</option>
                        <option value="JK">Jammu and Kashmir</option>
                        <option value="JH">Jharkhand</option>
                        <option value="KA">Karnataka</option>
                        <option value="KL">Kerala</option>
                        <option value="LA">Ladakh</option>
                        <option value="LD">Lakshadweep</option>
                        <option value="MP">Madhya Pradesh</option>
                        <option value="MH">Maharashtra</option>
                        <option value="MN">Manipur</option>
                        <option value="ML">Meghalaya</option>
                        <option value="MZ">Mizoram</option>
                        <option value="NL">Nagaland</option>
                        <option value="OR">Odisha</option>
                        <option value="PY">Puducherry</option>
                        <option value="PB">Punjab</option>
                        <option value="RJ">Rajasthan</option>
                        <option value="SK">Sikkim</option>
                        <option value="TG">Telangana</option>
                        <option value="TR">Tripura</option>
                        <option value="UP">Uttar Pradesh</option>
                        <option value="UT">Uttarakhand</option>
                        <option value="WB">West Bengal</option>
                      </select>
                    </div>
                    <br>


                    <div class="col-12">
                      <label for="software" class="form-label">Software</label>
                      <select id="software" name="software" aria-placeholder="Software" required>
                        <option value="Mozilla FireFox">Mozilla FireFox</option>
                        <option value="Tor Browser">Tor Browser</option>
                        <option value="Brave">Brave</option>
                        <option value="VLC media player">VLC media player</option>
                        <option value="OBS Studio">OBS Studio</option>
                        <option value="MPV player">MPV player</option>
                        <option value="Visual Studio Code">Visual Studio Code</option>
                        <option value="Python">Python</option>
                        <option value="MySQL">MySQL</option>
                        <option value="Microsoft Office">Microsoft Office</option>
                        <option value="FileZilla">FileZilla</option>
                        <option value="FreeCAD">FreeCAD</option>
                        <option value="OpenShot">OpenShot</option>
                        <option value="GIMP">GIMP</option>
                        <option value="Avidemux">Avidemux</option>
                        <option value="Linux">Linux</option>
                        <option value="Ubuntu">Ubuntu</option>
                        <option value="ChromeOS">ChromeOS</option>
                      </select>
                    </div>
              


              
<br>
                    

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required >
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>
                    <br>
                    <div class="col-12">
                       <input type="submit"  class="btn btn-primary w-100" value="Download">
                    </div>
                    
                  </form>

                </div>
              </div>



            </div>
          </div>
        </div>
       
      </section>

    </div>
  </main><!-- End #main -->



  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>