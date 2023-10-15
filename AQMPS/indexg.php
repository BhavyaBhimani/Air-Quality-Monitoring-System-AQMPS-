<?php
	include("sessiong.php");
	if(!isset($_SESSION['login_govt']))
	{	
		header("location:Login.php");
	}
	include_once('config.php');
	/*$query= "select * from dashboard_data";
	$result = mysqli_query($db,$query);
	$rows = mysqli_fetch_assoc($result);*/
?>

<!DOCTYPE html>
<html lang='en' dir='ltr'>

<head>
  <meta charset='utf-8'>
  <title>Home</title>

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
        <a class="navbar-brand header-bg" href="indexg.php">
          <img src="img/logo.png" width="40" height="40" class="d-inline-block align-top" alt="">
         <span class="h1 pl-2">  Air Quality Monitoring and Predicting System </span>
        </a>
      </nav>
      <div class="container">
          <ul class="nav nav-tabs justify-content-center">
              <li class="nav-item">
                <a class="nav-link text-success  bg-light nav-font n-font disabled" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link white-txt n-font nav-font" href="Aboutg.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link white-txt n-font nav-font" href="Dashboardg.php">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link white-txt n-font nav-font" href="Licence_consentg.php">Licence Consent</a>
              </li>
              <li class="nav-item">
                <a class="nav-link white-txt n-font nav-font" href="Closureg.php">Closure</a>
              </li>
              <li class="nav-item">
                <a class="nav-link white-txt n-font nav-font" href="Logout.php">Logout</a>
              </li>
            </ul>
      </div>
  </div>
  
    <!-- Slider -->
    <div class="mx-auto w-50 p-5">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner shadow rounded">
              <div class="carousel-item active">
                <img src="slider/1.jpg" class="d-block w-100" width="500px" height="380px" alt="..." data-interval="100">
              </div>
              <div class="carousel-item">
                <img src="slider/2.jpg" class="d-block w-100" width="500px" height="380px" alt="..." data-interval="100">
              </div>
              <div class="carousel-item">
                <img src="slider/3.jpg" class="d-block w-100" width="500px" height="380px" alt="..." data-interval="100">
              </div>
              <div class="carousel-item">
                <img src="slider/4.jpeg" class="d-block w-100" width="500px" height="380px" alt="..." data-interval="100">
              </div>
              <div class="carousel-item">
                <img src="slider/5.jpg" class="d-block w-100" width="500px" height="380px" alt="..." data-interval="100">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </div>
    <!-- First Box  -->
    <div>
      <div class="container-fluid mb-4">
          
              <div class="row justify-content-center">
                <div class="col-5 mr-3 home-p pt-3 rounded shadow" style="max-height: 500px;">
                      
                  <div class='py-3 list-unstyled overflow-auto f-inc' style='max-height: 450px;'>
                    <p>
                      Millions of people live in areas where air pollution can cause serious health problems. Local air quality can affect our daily lives. Like the weather, it can change from day to day. 
					  EPA developed the Air Quality Index, or AQI, to make information available about the health effects of the five most common air pollutants, and how to avoid those effects. 
					  Air pollution is one of the most alarming issues that we have been fighting against for almost a decade now. We have come down to a state where we are pushing ourselves into a disease-prone 
					  environment and our future generations into a bumbling mess with unimaginable consequences.</p>
					  
					  <p>Powered by a bunch of young people who are consistently working on ways to bring solutions that can lessen the impact of the impending disaster, our platform in India is bringing in a wave of change that aims at changing the world.</p>
                    
                    
                    
                  </div>
              </div>
                  <!--  -->
                  <div class="col-5 ml-3 pt-3 home-p rounded shadow" style="height: 500px;">
                    <h4 class="text-center text-danger">Important News</h4>
                    <div class='py-1 list-unstyled f-inc' style=''>
                     <marquee direction ="up" style="height: 410px;">
					<li style="">&nbsp&nbsp&nbsp&nbsp Latest News </li>
					</br>
					</br>
					<li style="">&nbsp&nbsp&nbsp&nbsp Government Accouncement</li>
					</br>
					</br>
					<li style="">&nbsp&nbsp&nbsp&nbsp New Policy</li>
					</br>
					</br>
					<li style="">&nbsp&nbsp&nbsp&nbsp Forms</li>
					</br>
					</br>
					<li style="">&nbsp&nbsp&nbsp&nbsp Notice</li>
					</br>
					</br>
					<li style="">&nbsp&nbsp&nbsp&nbsp Link-1</li>
					</br>
					</br>
					<li style="">&nbsp&nbsp&nbsp&nbsp Link-2</li>
					</br>
					</br>
					<li style="">&nbsp&nbsp&nbsp&nbsp Link-3</li>
					</br>
					</br>
					</marquee>
                     
                    </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
    <!-- Second Box -->
    
    <div>
      <div class="container-fluid mb-4">
          
              <div class="row justify-content-center">
                  <div class="col-md-10 home-p pt-2 rounded shadow">
                      <p class="p-font f-inc">
                        <h4>What is Air Quality Monitoring and Prediction System?</h4>
                          <p> Air Quality Monitoring and Prediction System is to ease the process for the government to keep a close watch on the industries pollution levels.It also makes it easy for industries to measure their own pollution levels and try to control the same.</p>
                          
                          <h4>The system aims to achieve:</h4>
                          <ol>
                            <li>Inform government regarding overall status of air quality through a website that is easy to understand.</li>
                            <li>Inform industries about associated fines of air pollution exposure.</li>
                            <li>Rank industries for prioritizing based on measure of AQI.</li>
                            <li>Licensing of industries.</li>
                          </ol>
                          
                         
                          
                          
                          <h4>The overall objective of the system can be stated as:</h4> 
                          “To adopt/develop an Air Quality Index (AQI) based on national air quality standards, health impacts and monitoring program which represents perceivable air quality for industries in easy to understand terms and assist in data interpretation and decision making processes related to pollution mitigation measures for government.”
                          
                          <h4>Scope of Work</h4>
                          <ol>
                            <li>Review of available AQIs of industries through database.</li>
                            <li>Suggest health impact threshold limits or parameters for which short-term air quality standards are prescribed.</li>
                            <li>Develop a uniform AQI considering objectives, air quality standards, existing and future monitoring scenario including parameters, method and frequency of measurements, and other relevant aspects;                            </li>
                            <li>Suggest qualitative description of air quality and associated fines for respective industries.</li>
                            <li>Evaluate proposed AQI with data from a few major cities and towns;</li>
                            <li>Develop web-based system for dissemination of AQI for government and provides industrial login in website.</li>
                            <li>Website provides online payment portal for industries to pay fines.</li>
                          </ol> 
                        </p>
                  </div>
                  
              </div>
          </div>
      </div>
    </div>  
     <!-- Footer -->
     <footer class="f">
    <div class="text-center text-light p-3 f" style="">
        © 2021 Copyright:
        <a class="text-light copy_right f-a" href="indexg.php"> Air Quality Monitoring and Predicting System </a>|
        <span><a class="text-light copy_right" href="Aboutg.php">Our team</a></span>
      </div>
    </footer>
</body>

</html>
