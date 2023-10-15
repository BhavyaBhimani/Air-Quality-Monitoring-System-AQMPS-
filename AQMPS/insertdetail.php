<?php
	$conn=mysqli_connect("localhost:3307","root","","aqmps");
	if(!$conn)
	{
		die("Could Not connect".mysqli_connect_error());
	}
	//$username = $_POST["Industry"];
	$username = rtrim($_POST["username"],"/");
	$query1 = "Select current_date from dual";
	$query2 = " SELECT DATE_ADD(CURRENT_DATE, INTERVAL 30 DAY) FROM DUAL;";
	$result1 = mysqli_query($conn,$query1);
	$rows1=mysqli_fetch_assoc($result1);
	$Date1 = $rows1['current_date'];
	$result2 = mysqli_query($conn,$query2);
	$rows2=mysqli_fetch_assoc($result2);
	$Date2 = $rows2['DATE_ADD(CURRENT_DATE, INTERVAL 30 DAY)'];
	$sql="update client_complete_data set License_Status = 'Yes', License_Application_Status = 'NULL', License_Confirm_Reject = 'Yes' , License_Date_Confirm = '$Date1' , License_Date_Expire = '$Date2' where username = '$username'";
	//$sql="update client_details set License_Status = 'Yes' where Name = '$username'";
	/*$sql="select id,password from student where id=$id && password=$password";*/
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