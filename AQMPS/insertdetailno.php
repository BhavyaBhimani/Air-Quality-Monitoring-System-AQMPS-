<?php
	$conn=mysqli_connect("localhost:3307","root","","aqmps");
	if(!$conn)
	{
		die("Could Not connect".mysqli_connect_error());
	}
	//$username = $_POST["Industry"];
	$username = rtrim($_POST["username"],"/");
	$sql="update client_complete_data set License_Status = 'No', License_Application_Status = 'NULL', License_Confirm_Reject = 'No' , License_Date_Confirm = '' , License_Date_Expire = '' where username = '$username'";
	
	if(mysqli_query($conn,$sql))
	{
		//echo "Data Added Successfully";
		//echo $username;
		//header("location : Login.php");
		echo '<script>window.location="Licence_consentg.php"</script>';
	}
	else
	{
		//echo "Not inserted";
		//header("location : Register.php");
		echo '<script>window.location="Licence_consentg.php"</script>';
	}
	mysqli_close($conn);
?>