<?php
	include("sessiong.php");
	if(!isset($_SESSION['login_govt']))
	{	
		header("location:Login.php");
	}
	include_once('config.php');
	/*$query= "select * from govt_complete_data";
	$result = mysqli_query($db,$query);
	$rows = mysqli_fetch_assoc($result);*/
	$query0 = "select * from govt_complete_data where username = '$login_session'";
	$result0 = mysqli_query($db,$query0);                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
	$rows0=mysqli_fetch_assoc($result0);
	$Area0 = $rows0['Area'];
?>
<!DOCTYPE html>
<html lang='en' dir='ltr'>

<head>
  <meta charset='utf-8'>
  <title>Dashboard_Gov</title>

  <!-- Css -->
  <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>
  <link rel='stylesheet' type="text/css" href='style.css'>

  <!--  bootstrap scripts -->
  <script src='https://code.jquery.com/jquery-3.4.1.slim.min.js' integrity='sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n' crossorigin='anonymous'></script>
  <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js' integrity='sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo' crossorigin='anonymous'></script>
  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js' integrity='sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6' crossorigin='anonymous'></script>

</head>

<body class="db-g" style="">
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
            <a class="nav-link white-txt n-font nav-font" href="indexg.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link white-txt n-font nav-font" href="Aboutg.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-success  bg-light nav-font n-font disabled" aria-current="page" href="#">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link white-txt n-font nav-font" href="Licence_consentg.php">License Consent</a>
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
    <!-- Welcome -->
    <div class="container-fluid">
        <h3 class="text-end text-dark">Welcome, <?php echo $rows0['Full_Name']; ?></h3>
    </div>
    <!-- tables -->
    <!-- Dashboard table -->
    <div class="px-3">
        <div class="container-fluid bg-white rounded border border-3 shadow rounded">

            <h2 class="text-center">Dashboard</h2>
            <div>
                <table class="table table-hover table-bordered">
                    <tbody class="">
                      <tr>
                          <th rowspan="2" class="text-center light-orange">Index</th>
                          <th rowspan="2" class="text-center light-orange">Industry Name</th>
                          <th colspan="2" class="text-center light-orange">Current Data</th>
                          <th rowspan="2" class="text-center light-orange">Scale</th>
                      </tr>
                      <tr>
                        <th class="text-center d-orange">CO</th>
                        <th class="text-center d-orange">PM2.5</th>
					  </tr>
					 <?php 
					include_once('config.php');
					$query1 = "SELECT * from client_complete_data where Area = '$Area0'";
					$result1 = mysqli_query($db,$query1);
					$id = 1;
					while($rows1= mysqli_fetch_array($result1))
					{
						
						$rating = $rows1['Rating'];
						$indus = $rows1['Industry_Name'];
						$user = $rows1['username'];
						$query5= "select * from $user";
						$result5 = mysqli_query($db,$query5);
						$rows5 = mysqli_fetch_assoc($result5);
						$CO = $rows5['CO'];
						$PM25 = $rows5['PM25'];
						$rating = ($CO + $PM25)/5;
					
						$query178 = "update client_complete_data set Rating = '$rating' where username = '$user'";
						$result178 = mysqli_query($db,$query178);
					}
				?>
					<?php 
					include_once('config.php');
					$query1 = "SELECT * from client_complete_data where Area = '$Area0'";
					$result1 = mysqli_query($db,$query1);
					$id = 1;
					while($rows1= mysqli_fetch_array($result1))
					{
						
						$indus = $rows1['Industry_Name'];
						$user = $rows1['username'];
						$query5= "select * from $user";
						$result5 = mysqli_query($db,$query5);
						$rows5 = mysqli_fetch_assoc($result5);
						echo "<tr class='table-primary'>";
							echo "<th scope='row' class='text-center' style='width: 80px;'>".$id."</th>";
							echo "<td class='text-center' style='width: 400px; '><a class='nav-link n-font nav-font' style='color: brown;' href='Specific_Industryg.php?Id=".$rows1['Id']."&user=".$rows1['username']."'>".$rows1['Industry_Name']."</a></td>";
							//echo "<td class='text-center' style='width: 150px;'>".$rows1['Rating']." %</td>";
							//echo "<td class='text-center' style='width: 250px;'>".$rows1['Type']."</td>";
							echo "<td class='text-center' style='width: 150px;'> ".$rows5['CO']."</td>";
							echo "<td class='text-center' style='width: 150px;'> ".$rows5['PM25']."</td>";
							echo "<td class='text-center' style='width: 400px;'>".$rows1['Scale']."</td>";
							/*echo "<td class='text-center'><form method='POST' action='close.php'>
										<input type='hidden' name='username' value=".$user."/>
										<input type='submit' class='btn btn-success w-75' value='CLOSE'>
								  </form>
								  </td>";*/
						$id = $id + 1;
								//echo $user;  
						echo "</tr>";
					}
				?>
                  
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
    <!-- Area AQI table -->
    <div class="px-3 my-4">
        <div class="container-fluid bg-white rounded border border-3 shadow rounded">

            <h2 class="text-center">Area AQI</h2>
            <div>
                <table class="table table-hover table-bordered">
                    <tbody class="">
                      <tr>
                          <th class="text-center light-orange">Index</th>
                          <th class="text-center light-orange">Area Name</th>
                          <th class="text-center light-orange">Area AQI</th>
                      </tr>
					  <?php 
					include_once('config.php');
					$query1 = "SELECT * from govt_complete_data";
					$result1 = mysqli_query($db,$query1);
					$id = 1;
					while($rows1= mysqli_fetch_array($result1))
					{
						echo "<tr class='table-warning'>";
							echo "<th scope='row' class='text-center' style='width: 80px;'>".$id."</th>";
							echo "<td class='text-center' style='width: 400px;'>".$rows1['Area']."</td>";
							//echo "<td class='text-center' style='width: 150px;'>".$rows1['Rating']." %</td>";
							//echo "<td class='text-center' style='width: 250px;'>".$rows1['Type']."</td>";
							echo "<td class='text-center' style='width: 150px;'> ".$rows1['AQI']."</td>";
							//echo "<td class='text-center' style='width: 150px;'> ".$rows5['PM25']."</td>";
							//echo "<td class='text-center' style='width: 400px;'>".$rows1['Scale']."</td>";
							/*echo "<td class='text-center'><form method='POST' action='close.php'>
										<input type='hidden' name='username' value=".$user."/>
										<input type='submit' class='btn btn-success w-75' value='CLOSE'>
								  </form>
								  </td>";*/
						$id = $id + 1;
								//echo $user;  
						echo "</tr>";
					}
				?>
                    <!--  <tr class="table-warning">
                        <th scope="row" class="text-center">1</th>
                        <td class="text-center w-25">Vastrapur</td>
                        <td class="text-center">232</td>
                      </tr>
                      <tr class="table-warning">
                        <th scope="row" class="text-center">2</th>
                        <td class="text-center">Maninagar</td>
                        <td class="text-center">123</td>
                      </tr>
                      <tr class="table-warning">
                        <th scope="row" class="text-center">3</th>
                        <td class="text-center">Odhav</td>
                        <td class="text-center">222</td>
                      </tr> -->
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer>
    <div class="text-center text-light p-3 f" style="">

        © 2021 Copyright:
        <a class="text-light copy_right f-a" href="indexg.php"> Air Quality Monitoring and Predicting System </a>|
        <span><a class="text-light copy_right" href="Aboutg.php">Our team</a></span>
      </div>
    </footer>
</body>

</html>
