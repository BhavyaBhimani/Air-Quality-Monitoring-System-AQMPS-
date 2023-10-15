<?php
	/*$conn=mysqli_connect("localhost","id16322470_superuser","Bhavya_Mit_Meet_1234","id16322470_aqmps");
	if(!$conn)
	{
		die("Could Not connect".mysqli_connect_error());
	}*/
	include("config.php");
	$username=$_POST["username"];
	$password=$_POST["password"];
	$industry = $_POST["industryname"];
	$fname = $_POST["fullname"];
	$scale = $_POST["radio"];
	$area = $_POST["ddown"];
	$type = $_POST["ddown0"];
	$sql="insert into client_data values (null,'$username','$password')";
	$sql1="insert into client_complete_data (Id,username,password,Full_Name,Industry_Name,Scale,Type,Area) values (null,'$username','$password','$fname','$industry','$scale','$type','$area')";
	if(mysqli_query($db,$sql1) && mysqli_query($db,$sql))
	{
			//echo "Data Added Successfully";
			//header("location : Login.php")
			$createsql="CREATE TABLE $password(  
  Sno INT(10) NOT NULL AUTO_INCREMENT,
  Id INT(10) DEFAULT 1,
  username VARCHAR(500),
  password VARCHAR(500),
  `Date` DATE,
  `Time` TIME,
  CO DOUBLE,
  PM25 FLOAT,
  PRIMARY KEY (`Sno`)
	)";

			mysqli_query($db,$createsql);
			//echo '<script>window.location="Register_backend.php"</script>';
			header("location: Login.php");
	}
	else
	{
		//echo "Not inserted";
		//header("location : Register.php");
		//echo '<script>window.location="Register.php"</script>';
		header("location: Register.php");
	}
?>
