<?php
	include("sessionc.php");
	if(!isset($_SESSION['login_user']))
	{	
		header("location:Login.php");
	}
	include_once('config.php');	
	$query= "select * from client_data where username = '$login_session'";
	$result = mysqli_query($db,$query);
	$rows=mysqli_fetch_assoc($result);
	$user = $rows['username'];
?>
<!DOCTYPE html>
<html lang='en' dir='ltr'>

<head>
  <meta charset='utf-8'>
  <title>License Application Form</title>

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
        <a class="navbar-brand header-bg" href="indexc.php">
          <img src="img/logo.png" width="40" height="40" class="d-inline-block align-top" alt="">
         <span class="h1 pl-2">  Air Quality Monitoring and Predicting System </span>
        </a>
      </nav>
      <div class="container">
          <ul class="nav nav-tabs justify-content-center">
              <li class="nav-item">
                <a class="nav-link white-txt n-font nav-font" href="indexc.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link white-txt n-font nav-font" href="Aboutc.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link white-txt n-font nav-font" href="Dashboardc.php">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-success  bg-light nav-font n-font disabled" aria-current="page" href="#">License Application</a>
              </li>
              <li class="nav-item">
                <a class="nav-link white-txt n-font nav-font" href="Paymentc.html">Payment</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link white-txt n-font nav-font" href="Logout.php">Logout</a>
              </li>
            </ul>
      </div>
  </div>

    <!-- Login  -->
    <div class='container mb-4'>
        <div class='login-bg mt-4 py-4 text-white  w-75 mx-auto border rounded px-4 shadow-lg rounded'>
            <div class='text-center'>
                <h1 style="color: #ffffff;">LICENSE APPLICATION FORM</h1>
            </div>
            <hr style="background-color:rgb(255, 255, 255);">
            <form action="insertlicense.php" method="post">
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="industryname" class="n-font">Industry Name</label>
                  <input type="text" class="form-control" name="industryname" placeholder="" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="firstname" class="n-font">First Name</label>
                  <input type="text" class="form-control" name="firstname" placeholder="" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="lastname" class="n-font">Last Name</label>
                  <input type="text" class="form-control" name="lastname" placeholder="" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="inputEmail4" class="n-font">Email</label>
                  <input type="email" class="form-control" name="inputEmail4" placeholder="" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="mobilenumber" class="n-font">Mobile Number</label>
                  <input type="text" class="form-control" name="mobilenumber" placeholder="" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputState" class="n-font">Industry Type</label>
                  <select name="inputState" class="form-control" required>
                    <option selected>Choose...</option>
                    <option>Petrochemical</option>
                    <option>Fertilizers</option>
                    <option>Textile</option>
                    <option>Biogas Plant</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck">
                  <label class="form-check-label" for="gridCheck" class="n-font">
                    I agree all terms and conditions
                  </label>
                </div>
              </div>
			  <?php
			  
	
			  echo "<input type='hidden' name='username' value=".$user."/>
              <input type='submit' class='btn btn-warning btn-block btn-font' value='Submit'>";
			  
			  ?>
			  <!-- <button type="submit" class="btn btn-warning btn-block btn-font">Submit</button> -->
            </form>
        </div>
    </div>

     <!-- Footer -->
     <footer>
    <div class="text-center text-light p-3 f">
        © 2021 Copyright:
        <a class="text-light copy_right f-a" href="indexc.php"> Air Quality Monitoring and Predicting System </a>|
        <span><a class="text-light copy_right" href="Aboutc.php">Our team</a></span>
      </div>
    </footer>
</body>

</html>
