<?php
	include_once('config.php');
	/*$query= "select * from client_complete_data where username = '$login_session'";
	$result = mysqli_query($db,$query);
	$rows=mysqli_fetch_assoc($result);*/
?>
<!DOCTYPE html>
<html lang='en' dir='ltr'>

<head>
  <meta charset='utf-8'>
  <title>Registeration Form</title>

  <!-- Css -->
  <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>
  <link rel='stylesheet' type="text/css" href='style.css'>

  <!--  bootstrap scripts -->
  <script src='https://code.jquery.com/jquery-3.4.1.slim.min.js' integrity='sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n' crossorigin='anonymous'></script>
  <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js' integrity='sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo' crossorigin='anonymous'></script>
  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js' integrity='sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6' crossorigin='anonymous'></script>

</head>

<body class="lc-g">
    <!-- Navbar -->

    <div class=" py-3 header-bg">
      <nav class="navbar navbar-light header-bg">
        <a class="navbar-brand header-bg" href="index.php">
          <img src="img/logo.png" width="40" height="40" class="d-inline-block align-top" alt="">
         <span class="h1 pl-2">  Air Quality Monitoring and Predicting System </span>
        </a>
      </nav>
  </div>

    <!-- Login  -->
    <div class='container mb-4'>
        <div class='login-bg mt-4 py-4 text-white  w-75 mx-auto border rounded px-4 shadow-lg rounded'>
            <div class='text-center'>
                <h1 style="color: #ffffff;">REGISTERATION FORM</h1>
            </div>
            <hr style="background-color:rgb(255, 255, 255);">
            <form action="Register_backend.php" method="post">
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="industryname" class="n-font">Industry Name</label>
                  <input type="text" class="form-control" name="industryname" placeholder="" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="firstname" class="n-font">Full Name</label>
                  <input type="text" class="form-control" name="fullname" placeholder="" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="inputEmail4" class="n-font">Email</label>
                  <input type="email" class="form-control" name="email" placeholder="" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="username" class="n-font">Username</label>
                  <input type="text" class="form-control" name="username" placeholder="" required>
                </div>
                <div class="form-group col-md-6">
                    <label for='password' class=" n-font">Password</label>
                    <input type='password' name='password' class='form-control' placeholder='' required>
                </div>
              </div>
              <!-- Radio -->
              <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="industryscale" class="n-font mr-3">Industry Scale</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="radio" id="largescale" value="Large Scale Industry">
                        <label class="form-check-label" for="largescale">Large Scale</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="radio" id="mediumscale" value="Medium Scale Industry">
                        <label class="form-check-label" for="mediumscale">Medium Scale</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="radio" id="smallscale" value="Small Scale Industry">
                        <label class="form-check-label" for="smallscale">Small Scale</label>
                      </div>
                </div>
              </div>
			   <div class="form-group col-md-6">
                  <label for="ddown0" class="n-font">Industry Type</label>
                  <select name="ddown0" class="form-control" required>
                    <option selected>Choose...</option>
                    <option>Petrochemical</option>
                    <option>Fertilizers</option>
                    <option>Textile</option>
                    <option>Biogas Plant</option>
                  </select>
                </div>
              <!--  -->
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="address">Address</label>
                  <input type="text" class="form-control" id="address">
                </div>
                <div class="form-group col-md-2">
                    <div class="form-group">
                        <label for="ddown">City</label>
                        <select name="ddown" class="form-control">
                          <option selected>Choose...</option>
                          <option>Ahmedabad</option>
                          <option>Gandhinagar</option>
                          <option>Vadodara</option>
                        </select>
                      </div>
                </div>
              </div>
              <input type="submit" value="Submit" class="btn btn-warning btn-block btn-font">
              <!-- <button type="submit" class="btn btn-warning btn-block btn-font">Submit</button> -->
            </form>
        </div>
    </div>

     <!-- Footer -->
     <footer>
    <div class="text-center text-light p-3 f">
        © 2021 Copyright:
        <a class="text-light copy_right f-a" href="index.php"> Air Quality Monitoring and Predicting System </a>|
        <span><a class="text-light copy_right" href="About.php">Our team</a></span>
      </div>
    </footer>
</body>

</html>
