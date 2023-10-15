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
	
	/*$query1 = "SELECT DISTINCT client_complete_data.username, client_complete_data.Id, Type, Industry_Name, Rating, client_complete_data.Area, Scale, Closure_Status, Closure_Date, Revoke_Date, Revoke_Status FROM client_complete_data JOIN closure_details ON client_complete_data.Area = closure_details.Area GROUP BY client_complete_data.username HAVING client_complete_data.Area = '$Area0' AND closure_details.Closure_Status = 'No'";
	$result1 = mysqli_query($db,$query1);
	//$rows1= mysqli_fetch_assoc($result1);
	$query2 = "SELECT DISTINCT client_complete_data.username, client_complete_data.Id, Type, Industry_Name, Rating, client_complete_data.Area, Scale, Closure_Status, Closure_Date, Revoke_Date, Revoke_Status FROM client_complete_data JOIN closure_details ON client_complete_data.Area = closure_details.Area GROUP BY client_complete_data.username HAVING client_complete_data.Area = '$Area0' AND closure_details.Closure_Status = 'Yes'";
	$result2 = mysqli_query($db,$query2);*/
?>
<!DOCTYPE html>
<html lang='en' dir='ltr'>

<head>
  <meta charset='utf-8'>
  <title>Closure_gov</title>
	<script type="application/x-javascript">
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
                    <a class="nav-link white-txt n-font nav-font" href="Licence_consentg.php">License Consent</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-success  bg-light nav-font n-font disabled" aria-current="page" href="#">Closure</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link white-txt n-font nav-font" href="Logout.php">Logout</a>
                  </li>
              </ul>
        </div>
    </div>
    <!-- tables -->
    <!-- Industry List table -->
    <div class="px-2 my-4">
      <div class="container-fluid bg-white rounded border border-3 shadow rounded">

          <h2 class="text-center">Industry List</h2>
          <div>
              <table class="table table-hover table-bordered">
                  <tbody class="">
                    <tr>
                        <th class="text-center expired" style="max-width: 80px;">Index</th>
                        <th class="text-center expired" style="width: 400px;" scope="col">Industry  Name</th>
                        <th class="text-center expired" style="width: 150px;" scope="col">Rating</th>
                        <th class="text-center expired" style="width: 250px;" scope="col">Type</th>
                         <th class="text-center expired" style="width: 150px;" scope="col">CO Value</th>
						 <th class="text-center expired" style="width: 150px;">PM 2.5 Value</th>
						<!-- <th class="text-center expired">AQI</th> -->
                        <th class="text-center expired" >Closure</th>
                    </tr>
					<?php 
					include_once('config.php');
					/*$query= "select * from client_details where Closure_Status = 'No'";
					$result = mysqli_query($db,$query);*/
					//$query1 = "SELECT DISTINCT client_complete_data.username, client_complete_data.Id, Type, Industry_Name, Rating, client_complete_data.Area, Scale, Closure_Status, Closure_Date, Revoke_Date, Revoke_Status FROM client_complete_data JOIN closure_details ON client_complete_data.Area = closure_details.Area GROUP BY client_complete_data.username HAVING client_complete_data.Area = '$Area0' AND closure_details.Closure_Status = 'No'";
					$query1 = "SELECT * from client_complete_data where Area = '$Area0' and Closure_Status = 'No'";
					$result1 = mysqli_query($db,$query1);
					$id = 1;
					while($rows1= mysqli_fetch_array($result1))
					{
						
						$indus = $rows1['Industry_Name'];
						$user = $rows1['username'];
						$query5= "SELECT * FROM $user ORDER BY Sno DESC LIMIT 1";
						$result5 = mysqli_query($db,$query5);
						$rows5 = mysqli_fetch_assoc($result5);
						echo "<tr class='table-primary'>";
							echo "<th scope='row' class='text-center' style='width: 80px;'>".$id."</th>";
							echo "<td class='text-center' style='width: 400px;'>".$rows1['Industry_Name']."</td>";
							echo "<td class='text-center' style='width: 150px;'>".$rows1['Rating']." %</td>";
							echo "<td class='text-center' style='width: 250px;'>".$rows1['Type']."</td>";
							echo "<td class='text-center' style='width: 150px;'> ".$rows5['CO']."</td>";
							echo "<td class='text-center' style='width: 150px;'> ".$rows5['PM25']."</td>";
							echo "<td class='text-center'><form method='POST' action='close.php'>
										<input type='hidden' name='username' value=".$user."/>
										<input type='submit' class='btn btn-success w-75' value='CLOSE'>
								  </form>
								  </td>";
						$id = $id + 1;
								//echo $user;  
						echo "</tr>";
					}
				?>
					<!--			  <input type='hidden' name='name' value=".$user."/>
								  <input type='submit' value='CLOSE'>
								  </form> -->
					<!-- 
                    <tr class="table-primary">
                      <th scope="row" class="text-center">1</th>
                      <td class="text-center w-25">Nirma Pharmaceuticals Private Limited</td>
                      <td class="text-center">70 %</td>
                      <td class="text-center">Chemical</td>
                      <td class="text-center">Large Scale</td>
                      <td class="text-center"><button class="btn btn-success w-75">Close</button></td>
                    </tr>
                    <tr class="table-primary">
                      <th scope="row" class="text-center">2</th>
                      <td class="text-center w-25">Nirma Pharmaceuticals Private Limited</td>
                      <td class="text-center">70 %</td>
                      <td class="text-center">Chemical</td>
                      <td class="text-center">Large Scale</td>
                      <td class="text-center"><button class="btn btn-success w-75">Close</button></td>
                    </tr> -->
                  </tbody>
                </table>
          </div>
      </div>
  </div>

    <!--  Closed Companies table -->
    <div class="px-2 my-4">
      <div class="container-fluid bg-white rounded border border-3 shadow rounded">

          <h2 class="text-center">Closed Companies</h2>
          <div>
              <table class="table table-hover table-bordered">
                  <tbody class="">
                    <tr>
                        <th class="text-center rejected" style="width: 80px;">Index</th>
                        <th class="text-center rejected" style="width: 400px;" scope="col">Industry  Name</th>
                        <th class="text-center rejected" style="width: 150px;" scope="col">Rating</th>
                        <th class="text-center rejected" style="width: 300px;" scope="col">Type</th>
                        <th class="text-center rejected" style="width: 150px;" scope="col">Closure Date</th>
						            <th class="text-center rejected" style="width: 150px;">Revocation Date</th>
                        <th class="text-center rejected" style="">Closure</th>
                    </tr>
					<?php 
					include_once('config.php');
					/*$query= "select * from client_details where Closure_Status = 'No'";
					$result = mysqli_query($db,$query);*/
					//$query2 = "SELECT DISTINCT client_complete_data.username, client_complete_data.Id, Type, Industry_Name, Rating, client_complete_data.Area, Scale, Closure_Status, Closure_Date, Revoke_Date, Revoke_Status FROM client_complete_data JOIN closure_details ON client_complete_data.Area = closure_details.Area GROUP BY client_complete_data.username HAVING client_complete_data.Area = '$Area0' AND closure_details.Closure_Status = 'Yes'";
					$query2 = "SELECT * from client_complete_data where Area = '$Area0' and Closure_Status = 'Yes'";
					$result2 = mysqli_query($db,$query2);
					$id2 = 1;
					while($rows2= mysqli_fetch_array($result2))
					{
						$indus = $rows2['Industry_Name'];
						$user = $rows2['username'];
						echo "<tr class='table-primary'>";
							echo "<th scope='row' class='text-center' style=''>".$id2."</th>";
							echo "<td class='text-center w-25' style=''>".$rows2['Industry_Name']."</td>";
							echo "<td class='text-center' style='width: 150px;' >".$rows2['Rating']." %</td>";
							echo "<td class='text-center' style='width: 300px;' >".$rows2['Type']."</td>";
							echo "<td class='text-center' style='width: 150px;' > ".$rows2['Closure_Date']."</td>";
							echo "<td class='text-center' style='width: 150px;' > ".$rows2['Revoke_Date']."</td>";
							
							$date_todaysql = "SELECT CURRENT_DATE FROM DUAL";
							$result19 = mysqli_query($db,$date_todaysql);
							$rows19=mysqli_fetch_assoc($result19);
							$date_today = $rows19['CURRENT_DATE'];

							if ($rows2['Revoke_Date'] > $date_today) 
							{
								echo "<td class='text-center' scope='col'><form method='POST' action='open.php'>
										<input type='hidden' name='username' value=".$user."/>
										<input type='submit' class='btn btn-warning w-75 pl-2 mx-2' value='REVOKE' onclick = 'this.disabled=true;'>
								  </form>";
							}	
							else 
							{	
								echo "<td class='text-center' scope='col'><form method='POST' action='open.php'>
										<input type='hidden' name='username' value=".$user."/>
										<input type='submit' class='btn btn-warning w-75 pl-2 mx-2' value='REVOKE' >
								  </form>";
							}  
								  "</td>";
								  //echo $user;
						$id2 = $id2 + 1;
						//echo "</tr>";
					}
				?>
				</tr>
                    <!-- <tr class="table-danger">
                      <th scope="row" class="text-center">1</th>
                      <td class="text-center w-25">Zydus Pharmaceuticals Private Limited</td>
                      <td class="text-center">78 %</td>
                      <td class="text-center">Chemical</td>
                      <td class="text-center">Large Scale</td>
                      <td class="text-center"><button class="btn btn-warning w-75">Revoke</button></td>
                    </tr>
                    <tr class="table-danger">
                      <th scope="row" class="text-center">2</th>
                      <td class="text-center w-25">Narmada Chemicals Private Limited</td>
                      <td class="text-center">67 %</td>
                      <td class="text-center">Chemical</td>
                      <td class="text-center">Large Scale</td>
                      <td class="text-center"><button class="btn btn-warning w-75">Revoke</button></td>
                    </tr>
                    <tr class="table-danger">
                      <th scope="row" class="text-center">3</th>
                      <td class="text-center w-25">Nissan Petrochemicals Private Limited</td>
                      <td class="text-center">37 %</td>
                      <td class="text-center">Chemical</td>
                      <td class="text-center">Large Scale</td>
                      <td class="text-center"><button class="btn btn-warning w-75">Revoke</button></td>
                    </tr>
                      <tr class="table-danger">
                        <th scope="row" class="text-center">4</th>
                        <td class="text-center w-25">Renault Medical Private Limited</td>
                        <td class="text-center">87 %</td>
                        <td class="text-center">Chemical</td>
                        <td class="text-center">Large Scale</td>
                        <td class="text-center"><button class="btn btn-warning w-75">Revoke</button></td>
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
