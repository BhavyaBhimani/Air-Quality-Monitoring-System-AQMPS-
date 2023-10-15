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
	$ids = $_GET['Id'];
	$name =  $_GET['user'];
	$query0 = "select * from govt_complete_data where username = '$login_session'";
	$result0 = mysqli_query($db,$query0);                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
	$rows0=mysqli_fetch_assoc($result0);
	$Area0 = $rows0['Area'];
	$query10 = "select * from client_complete_data where username = '$name'";
	$result10 = mysqli_query($db,$query10);                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
	$rows10=mysqli_fetch_assoc($result10);
	
	
?>
<!DOCTYPE html>
<html lang='en' dir='ltr'>

<head>
  <meta charset='utf-8'>
  <title>Specific Industry Gov</title>

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
        <a class="navbar-brand header-bg" href="home.html">
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
              <a class="nav-link twhite-txt n-font nav-font " href="Dashboardg.php">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link white-txt n-font nav-font" href="Licence_consentg.php">License Consent</a>
            </li>
            <li class="nav-item">
                <a class="nav-link white-txt n-font nav-font" href="Logout.php">Logout</a>
            </li>
            </ul>
      </div>
  </div>

    <!--Welcome Name -->
    <div class="container-fluid">
        <h3 class="text-end text-dark">Welcome,<?php echo $rows0['Full_Name']; ?></h3>
    </div>
    <!-- Dropdown -->
    <div class="dropdown container-fluid">
        <button class="btn btn-success w-25 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Select Industry
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">Nirma Pharmaceuticals</a>
          <a class="dropdown-item" href="#">Zydus</a>
          <a class="dropdown-item" href="#">PPC petroleum</a>
        </div>
      </div>
    <!-- Company Name -->
    <div class="text-center">
      <h2><?php echo $rows10['Industry_Name']; ?></h2>
    </div>
      <hr class="w-75" style="background-color:#00917c;">
    <!-- Content -->
    <!-- <div class="container-fluid col-6 specific-bg pb-1 pt-3 rounded mb-4">
      <div class="form-group row">
        <label for="scale" class="col-sm-2 col-form-label text-white n-font f-inc">Scale</label>
        <div class="col-sm-10">
          <input type="text" class="form-control text-dark f-inc" id="scale" placeholder="349" readonly disabled>
        </div>
      </div>
      <div class="form-group row">
        <label for="rating" class="col-sm-2 col-form-label text-white n-font f-inc">Rating</label>
        <div class="col-sm-10">
          <input type="text" class="form-control f-inc" id="rating" placeholder="4.6" readonly disabled>
        </div>
      </div>
      <div class="form-group row">
        <label for="comments" class="col-sm-2 col-form-label text-white n-font f-inc">Comments</label>
        <div class="col-sm-10">
          <textarea type="text" class="form-control f-inc" id="comments" placeholder="Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed commodi nostrum, ab libero voluptas officia." rows="4"  readonly disabled></textarea>
        </div>
        <div class="m-auto">
          <button type='submit' class='btn btn-warning justify-content-center btn-font mt-3'>Edit<img src='img/edit-1.png' role='button' alt='edit' class='ml-1' style="width: 20px; height: 20px;"></button>
        </div>
     </div>
    </div> -->
    <!--Current Data and Predicted Data Table -->
    <div class="container-fluid mb-4 px-4">
      <div class="row">
        <!-- Current data table -->
        <div class="col-6">
          
          
            <div class="specific-bg pb-1 pt-3 rounded mb-4 px-3" style="">
              <form>
              <div class="form-group row">
                <label for="scale" class="col-sm-2 col-form-label text-white n-font f-inc">Scale</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control text-dark f-inc" id="scale" placeholder= "<?php echo $rows10['Scale']; ?>" readonly disabled>
                </div>
              </div>
              <div class="form-group row">
                <label for="rating" class="col-sm-2 col-form-label text-white n-font f-inc">Rating</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control f-inc" id="rating" placeholder="<?php echo $rows10['Rating']; ?> %" readonly disabled>
                </div>
              </div>
              <div class="form-group row">
                <label for="comments" class="col-sm-2 col-form-label text-white n-font f-inc">Comments</label>
                <div class="col-sm-10">
                  <textarea type="text" class="form-control f-inc" id="comments" placeholder="<?php echo $rows10['Comments']; ?>" rows="4"  readonly disabled></textarea>
                </div>
				 <div class="m-auto">
				 <?php echo "<a href='Specific_Industryg1.php?Id=".$ids."&user=".$name."'>"; ?> Edit</a>
				  <button type='submit' class='btn btn-warning justify-content-center btn-font mt-3'><img src='img/edit-1.png' role='button' alt='edit' class='ml-1' style="width: 20px; height: 20px;"></button>
				</div>
              </div>
            </form>
            </div>
        </div>
          <div class="col-6">
		 </div>
		 </div>
		 </div>
          <div class="container-fluid mb-4 px-4">
      <div class="row">
        <!-- Current data table -->
        <div class="col-6">
          <div class="">

              <div class="container-fluid bg-white rounded border border-3 shadow rounded">
                  <h2 class="text-center text-success">Current Data</h2>
                  <div>
                      <table class="table table-bordered">
                          <tbody class="">
                            <tr>
                                <th class="text-center light-orange">Index</th>
                                <th class="text-center light-orange">Date</th>
                                <th class="text-center light-orange">Time</th>
                                <th class="text-center light-orange">CO</th>
                                <th class="text-center light-orange">PM2.5</th>
                            </tr>
							
							<?php 
					include_once('config.php');
					$query10 = "select * from $name";
					$result10 = mysqli_query($db,$query10);        
					$id = 1;
					while($rows1= mysqli_fetch_array($result10))
					{
						
						/*$indus = $rows1['Industry_Name'];
						$user = $rows1['username'];*/
		
						echo "<tr class='table-success'>";
							echo "<td class='text-center font-weight-bold'>".$id."</td>";
							echo "<td class='text-center'>".$rows1['Date']."</td>";
							echo "<td class='text-center'>".$rows1['Time']." </td>";
							//echo "<td class='text-center' style='width: 250px;'>".$rows1['Type']."</td>";
							echo "<td class='text-center'> ".$rows1['CO']."</td>";
							echo "<td class='text-center' > ".$rows1['PM25']."</td>";
						
	
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
        </div> 
        <!-- Predicted Data table -->
        <div class="col-6">
          <div class="">

              <div class="container-fluid bg-white rounded border border-3 shadow rounded">
                  <h2 class="text-center text-success">Predicted Data</h2>
                  <div>
                      <table class="table table-bordered">
                          <tbody class="">
                            <tr>
                                <th class="text-center light-orange">Index</th>
                                <th class="text-center light-orange">Date</th>
                                <th class="text-center light-orange">Time</th>
                                <th class="text-center light-orange">CO</th>
                                <th class="text-center light-orange">PM2.5</th>
                            </tr>
							<?php 
									include_once('config.php');
									$pred = '_predict';
									$c = $name.$pred ;
									$query1= "select * from $c";
									$result1 = mysqli_query($db,$query1);
									$id = 1;
									while($rows1= mysqli_fetch_array($result1))
									{
						
										/*$indus = $rows1['Industry_Name'];
										$user = $rows1['username'];*/
		
										echo "<tr class='table-success'>";
										echo "<td class='text-center font-weight-bold'>".$id."</td>";
										echo "<td class='text-center'>".$rows1['Date']."</td>";
										echo "<td class='text-center'>".$rows1['Time']." </td>";
										//echo "<td class='text-center' style='width: 250px;'>".$rows1['Type']."</td>";
										echo "<td class='text-center'> ".$rows1['CO']."</td>";
										echo "<td class='text-center' > ".$rows1['PM25']."</td>";
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
        </div>
      </div>
    </div>

    <!-- Graphs -->
    <div class="container-fluid mb-4 px-4">
      <div class="row">
        <!-- Current Graph -->
        <div class="col-6">
          <div class="">

              <div class="container-fluid bg-white rounded border border-3 shadow rounded">
                  <h2 class="text-center text-success">Current Graph</h2>
                  <div class="table-primary mb-3" style="height: 350px;"> 
                      
                  </div>
              </div>
          </div>
        </div>
        <!-- Predicted Graph -->
        <div class="col-6">
          <div class="">

              <div class="container-fluid bg-white rounded border border-3 shadow rounded">
                  <h2 class="text-center text-success">Predicted Graph</h2>
                  <div class="table-primary mb-3" style="height: 350px;"> 
                      
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>


     <!-- Footer -->
     <footer>
    <div class="text-center text-light p-3 f">
        © 2021 Copyright:
        <a class="text-light copy_right f-a" href=""> Air Quality Monitoring and Predicting System </a>|
        <span><a class="text-light copy_right" href="">Our team</a></span>
      </div>
    </footer>
</body>

</html>
