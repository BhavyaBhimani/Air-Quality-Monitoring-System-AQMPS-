<!--<!DOCTYPE html>-->
<!--- <html lang='en' dir='ltr'> -->

<head>
  <meta charset='utf-8'>
  <title>Login</title>
  <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<script>
			addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
			}, false);
		
			function hideURLbar() {
			window.scrollTo(0, 1);
			}
		</script>

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
      <div class="container">
          <ul class="nav nav-tabs justify-content-center">
              <li class="nav-item">
					<a class="nav-link white-txt n-font nav-font" href="index.php">Home</a>
              </li>
			  
              <li class="nav-item">
					<a class="nav-link white-txt n-font nav-font" href="About.php">About</a>
              </li>
			  
              <li class="nav-item">
					<a class="nav-link white-txt n-font nav-font" href="Know_AQI.php?Id=1&user=Ahmedabad">Know Your AQI</a>
              </li>
			  
			  <li class="nav-item">
					<a class="nav-link text-success  bg-light nav-font n-font disabled" aria-current="page" href="#">Login</a>
              </li>
          </ul>
      </div>
  </div>

    <!-- Login  -->
    <div class='container'>
        <div class='login-bg mt-4 mb-5 pt-4 pb-2  text-white  w-50 mx-auto rounded px-4 shadow-lg rounded'>
            <div class='text-center'>
                <h1 style="color: #ffffff;">LOGIN</h1>
            </div>
            <hr style="background-color:rgb(255, 255, 255);">
            <form action="Login_backend.php" method="post" style=" ">
                <div class='form-group'>
                    <label for='username' class=" n-font">Username</label>
                    <input type='text' name='username' class='form-control' placeholder=" " required>
                </div>
                <div class='form-group'>
                    <label for='password' class=" n-font">Password</label>
                    <input type='password' name='password' class='form-control' placeholder=" " required>
                </div>
                <button type='submit' class='btn btn-warning btn-block btn-font'>Sign In</button>
                <div class='text-center mt-3'>
						<span class='h5'>New User? </span><a href='Register.php' class='text-white h5'>Register Now</a>
                </div>
            </form>
        </div>
    </div>

     <!-- Footer -->
    <footer>
		<div class="text-center text-light p-3 f">
			© 2021 Copyright:
			<a class="text-light copy_right f-a"  href="index.php"> Air Quality Monitoring and Predicting System </a>|
			<span><a class="text-light copy_right" href="About.php">Our team</a></span>
      </div>
    </footer>
</body>

</html>
