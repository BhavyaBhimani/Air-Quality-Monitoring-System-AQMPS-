<?php
	include("sessiong.php");
	if(!isset($_SESSION['login_govt']))
	{	
		header("location:Login.php");
	}
	include_once('config.php');
	$query0 = "select * from govt_complete_data where username = '$login_session'";
	$result0 = mysqli_query($db,$query0);
	$rows0=mysqli_fetch_assoc($result0);
	$Area0 = $rows0['Area'];
	
	$date_todaysql = "SELECT CURRENT_DATE FROM DUAL";
							$result19 = mysqli_query($db,$date_todaysql);
							$rows19=mysqli_fetch_assoc($result19);
							$date_today = $rows19['CURRENT_DATE'];

							
?>
<!DOCTYPE html>
<html lang='en' dir='ltr'>

<head>
  <meta charset='utf-8'>
  <title>License_gov</title>

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
                <a class="nav-link white-txt n-font nav-font" href="indexg.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link white-txt n-font nav-font" href="Aboutg.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link white-txt n-font nav-font" href="Dashboardg.php">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-success  bg-light nav-font n-font disabled" aria-current="page" href="#">License Consent</a>
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
    <!-- tables -->
    <!-- License approval table -->
    <div class="px-3 my-4">
      <div class="container-fluid bg-white rounded border border-3 shadow rounded">

          <h2 class="text-center">License Approval</h2>
          <div>
              <table class="table table-hover table-bordered">
                  <tbody class="">
                    <tr class="bg-info">
                        <th class="text-center" style="width: 80px;">Index</th>
                        <th class="text-center" style="width: 400px;" scope="col">Industry  Name</th>
                        <th class="text-center" style="width: 150px;" scope="col">Rating</th>
                        <th class="text-center" style="width: 250px;" scope="col">Type</th>
                        <th class="text-center" style="width: 150px;" scope="col">CO Value</th>
						 <th class="text-center" style="width: 150px;">PM 2.5 Value</th>
                        <th class="text-center" style="width: 200px;" scope="col">License Approval</th>
                    </tr>
					<?php 
					include_once('config.php');
					$query1 = "SELECT * from client_complete_data where Area = '$Area0' and License_Status = 'Pending' and License_Application_Status = 'Yes'";
					$result1 = mysqli_query($db,$query1);
					$id = 1;
					while($rows1= mysqli_fetch_array($result1))
					{
						$indus = $rows1['Industry_Name'];
						$user = $rows1['username'];
						$query5= "select * from $user";
						$result5 = mysqli_query($db,$query5);
						$rows5 = mysqli_fetch_assoc($result5);
						echo "<tr class='table-info'>";
							echo "<th scope='row' class='text-center'>".$id."</th>";
							echo "<td class='text-center w-25'>".$rows1['Industry_Name']."</td>";
							echo "<td class='text-center'>".$rows1['Rating']." %</td>";
							echo "<td class='text-center'>".$rows1['Type']."</td>";
							echo "<td class='text-center' style='width: 150px;'> ".$rows5['CO']."</td>";
							echo "<td class='text-center' style='width: 150px;'> ".$rows5['PM25']."</td>";
							echo "<td>
                      <div class='row'>
                        <div class='col-6'>
                          <form method='POST' action='insertdetail.php'>
                            <input type='hidden' name='username' value=".$user."/>
                            <input type='submit' class='btn btn-block btn-success' value='YES'>
                            </form>
                            
                        </div>
                        <div class='col-6'>
                          <form method='POST' action='insertdetailno.php'>
                            <input type='hidden' name='username' value=".$user."/>
                            <input type='submit' class='btn btn-block btn-danger' value='NO'>
                            </form>
                        </div>
                      </div>
								    </td>";
							
								  "</form>
								  </td>";
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

    <!--  Approved Licenses table -->
    <div class="px-3 my-4">
      <div class="container-fluid bg-white rounded border border-3 shadow rounded">

          <h2 class="text-center">Approved Licenses</h2>
          <div>
              <table class="table table-hover table-bordered">
                  <tbody class="">
                    <tr>
                        <th class="text-center approved"  style="width: 80px;">Index</th>
                        <th class="text-center approved" style="width: 550px;" scope="col">Industry  Name</th>
                        <th class="text-center approved" style="width: 200px;" scope="col">Rating</th>
                        <th class="text-center approved" style="width: 250px;" scope="col">Type</th>
                        <th class="text-center approved" style="width: 250px;" scope="col">Scale</th>
                    </tr>
					<?php 
					include_once('config.php');
					$query1 = "SELECT * from client_complete_data where Area = '$Area0' and License_Status = 'Yes'";
					$result1 = mysqli_query($db,$query1);
					$id = 1;
					while($rows1= mysqli_fetch_array($result1))
					{
						$indus = $rows1['Industry_Name'];
						$user = $rows1['username'];
						echo "<tr class='table-success'>";
							echo "<th scope='row' class='text-center'>".$id."</th>";
							echo "<td class='text-center w-25'>".$rows1['Industry_Name']."</td>";
							echo "<td class='text-center'>".$rows1['Rating']." %</td>";
							echo "<td class='text-center'>".$rows1['Type']."</td>";
							echo "<td class='text-center'> ".$rows1['Scale']."</td>";
								  "</td>";
							
								  "</form>
								  </td>";
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
    <!--  Rejected Licenses table -->
    <div class="px-3 my-4">
      <div class="container-fluid bg-white rounded border border-3 shadow rounded">

          <h2 class="text-center">Rejected Licenses</h2>
          <div>
              <table class="table table-hover table-bordered">
                  <tbody class="">
                    <tr>
                        <th class="text-center rejected" style="width: 80px;">Index</th>
                        <th class="text-center rejected" style="width: 550px;" scope="col">Industry  Name</th>
                        <th class="text-center rejected" style="width: 200px;" scope="col">Rating</th>
                        <th class="text-center rejected" style="width: 250px;" scope="col">Type</th>
                        <th class="text-center rejected" style="width: 250px;" scope="col">Scale</th>
                    </tr>
					<?php 
					include_once('config.php');
					$query1 = "SELECT * from client_complete_data where Area = '$Area0' and License_Status = 'No'";
					$result1 = mysqli_query($db,$query1);
					$id = 1;
					while($rows1= mysqli_fetch_array($result1))
					{
						$indus = $rows1['Industry_Name'];
						$user = $rows1['username'];
						echo "<tr class='table-danger'>";
							echo "<th scope='row' class='text-center'>".$id."</th>";
							echo "<td class='text-center w-25'>".$rows1['Industry_Name']."</td>";
							echo "<td class='text-center'>".$rows1['Rating']." %</td>";
							echo "<td class='text-center'>".$rows1['Type']."</td>";
							echo "<td class='text-center'> ".$rows1['Scale']."</td>";
							
								  "</td>";
							
								  "</form>
								  </td>";
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
    <!-- License Expired table -->
    <div class="px-3 my-4">
      <div class="container-fluid bg-white rounded border border-3 shadow rounded">

          <h2 class="text-center">License Expired</h2>
          <div>
              <table class="table table-hover table-bordered">
                  <tbody class="">
                    <tr>
                        <th class="text-center expired" style="width: 80px;">Index</th>
                        <th class="text-center expired" style="width: 400px;" scope="col">Industry  Name</th>
                        <th class="text-center expired" style="width: 150px;" scope="col">Rating</th>
                        <th class="text-center expired" style="width: 250px;" scope="col">Type</th>
                        <th class="text-center expired" style="width: 250px;" scope="col">Scale</th>
                        <th class="text-center expired" style="width: 200px;" scope="col">License Expired</th>
                    </tr>
					<?php 
					include_once('config.php');
					$query1 = "SELECT * from client_complete_data where Area = '$Area0' and License_Date_Expire < '$date_today' and License_Date_Expire <> 'NULL'";
					$result1 = mysqli_query($db,$query1);
					$id = 1;
					while($rows1= mysqli_fetch_array($result1))
					{
						$indus = $rows1['Industry_Name'];
						$user = $rows1['username'];
						echo "<tr class='table-info'>";
							echo "<th scope='row' class='text-center'>".$id."</th>";
							echo "<td class='text-center w-25'>".$rows1['Industry_Name']."</td>";
							echo "<td class='text-center'>".$rows1['Rating']." %</td>";
							echo "<td class='text-center'>".$rows1['Type']."</td>";
							echo "<td class='text-center'> ".$rows1['Scale']."</td>";
							echo "<td class='text-center'> ".$rows1['License_Date_Expire']."</td>";
                      
                      
								    "</td>";
						
								 
								 
						$id = $id + 1;
								//echo $user;  
						echo "</tr>";
					}
				?>
                    <!-- <tr class="table-primary">
                      <th scope="row" class="text-center">1</th>
                      <td class="text-center w-25">JCP Pharmaceuticals Private Limited</td>
                      <td class="text-center">70 %</td>
                      <td class="text-center">Chemical</td>
                      <td class="text-center">Large Scale</td>
                      <td class="text-center">Expired</td>
                    </tr>
                    <tr class="table-primary">
                      <th scope="row" class="text-center">2</th>
                      <td class="text-center w-25">Tisco Chemical Private Limited</td>
                      <td class="text-center">70 %</td>
                      <td class="text-center">Chemical</td>
                      <td class="text-center">Small Scale</td>
                      <td class="text-center">Expired</td>
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
