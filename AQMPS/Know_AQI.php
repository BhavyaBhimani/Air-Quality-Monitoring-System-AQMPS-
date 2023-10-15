<?php
	include_once('config.php');
	/*$query= "select * from govt_complete_data";
	$result = mysqli_query($db,$query);
	$rows = mysqli_fetch_assoc($result);*/
	/*$query0 = "select * from govt_complete_data where username = '$login_session'";
	$result0 = mysqli_query($db,$query0);                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
	$rows0=mysqli_fetch_assoc($result0);
	$Area0 = $rows0['Area'];*/
	$ids = $_GET['Id'];
	$name =  $_GET['user'];
	$query10 = "select * from govt_complete_data where Area = '$name'";
	$result10 = mysqli_query($db,$query10);                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
	$rows10=mysqli_fetch_assoc($result10);
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
            <a class="nav-link text-success  bg-light nav-font n-font disabled" aria-current="page" href="#">Know Your AQI</a>
          </li>
          <li class="nav-item">
                <a class="nav-link white-txt n-font nav-font" href="Login.php">Login</a>
              </li>
        </ul>
      </div>
  </div>
    <!-- Welcome -->
    <div class="container-fluid">
        <h3 class="text-end text-dark">Welcome</h3>
    </div>
	<div class="dropdown container-fluid">
        <button class="btn btn-success w-25 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Select City
        </button>
		<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <?php 
			
					include_once('config.php');
					$query1 = "SELECT * from govt_complete_data";
					$result1 = mysqli_query($db,$query1);
					
					while($rows1= mysqli_fetch_array($result1))
					{
						$area = $rows1['Area'];
						$usename = $rows1['username'];
						$idens = $rows1['Id'];
						echo "<a class='dropdown-item' href='Know_AQI.php?Id=".$idens."&user=".$area."'>".$rows1['Area']."</a>";
					}
					
					
		?>
		</div>
      </div>
	  
	  <div class="text-center">
      <h2><?php echo $rows10['Area']; 
				$area25 = $rows10['Area'];?></h2>
    </div>
	
      <hr class="w-75" style="background-color:#00917c;">
		<div class="container-fluid mb-2 px-4">
      <div class="row">
        <!-- Current Graph -->
        <div class="col-6">
          
            <div class="specific-bg pb-1 pt-3 rounded mb-4 px-3" style="">
              <form>
              <div class="form-group row">
                <label for="scale" class="col-sm-2 col-form-label text-white n-font f-inc">AQI</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control text-dark f-inc" id="scale" placeholder= "<?php echo $rows10['AQI']; ?>" readonly disabled>
                </div>
              </div>
			  <div class="form-group row">
                <label for="rating" class="col-sm-2 col-form-label text-white n-font f-inc">Area Officer</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control f-inc" id="rating" placeholder="<?php echo $rows10['Full_Name']; ?> " readonly disabled>
                </div>
              </div>
            </form>
            </div>
        </div>
		<div class="col-6">
          
        </div>
      </div>
    </div>
		<div class="px-3">
        <div class="container-fluid bg-white rounded border border-3 shadow rounded">

            <h2 class="text-center"></h2>
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
					$query1 = "SELECT * from client_complete_data where Area = '$area25'";
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
							echo "<td class='text-center' style='width: 400px; '>".$rows1['Industry_Name']."</td>";
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
	<!-- Footer -->
    <footer>
    <div class="text-center text-light p-3 f" style="">

        © 2021 Copyright:
        <a class="text-light copy_right f-a" href="index.php"> Air Quality Monitoring and Predicting System </a>|
        <span><a class="text-light copy_right" href="About.php">Our team</a></span>
      </div>
    </footer>
</body>

</html>
