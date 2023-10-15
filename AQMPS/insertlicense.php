<<?php
	$conn=mysqli_connect("localhost:3307","root","","aqmps");
	if(!$conn)
	{
		die("Could Not connect".mysqli_connect_error());
	}
	$username = rtrim($_POST["username"],"/");
	//$username = $_POST["username"];
	//$password = $_POST['indus_opts'];
	//$username = rtrim($_POST["username"],"/");
	$sql="update client_complete_data set License_Status = 'Pending', License_Application_Status = 'Yes' where username = '$username'";
	if(mysqli_query($conn,$sql))
	{
		//echo "Data Added Successfully";
		//header("location : Login.php");
		echo '<script>window.location="Dashboardc.php"</script>';
	}
	else
	{
		//echo "Not inserted";
		//header("location : Register.php");
		echo $username;
		echo '<script>window.location="insertlicense.php"</script>';
	}
	mysqli_close($conn);
?>