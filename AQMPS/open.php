<?php
	$conn=mysqli_connect("localhost:3307","root","","aqmps");
	if(!$conn)
	{
		die("Could Not connect".mysqli_connect_error());
	}
	//$username = $_POST["name"];
	$username = rtrim($_POST["username"],"/");
	$sql="update client_complete_data set Closure_Status = 'No', Revoke_Status = 'NULL', Closure_Date = '' , Revoke_Date = '' where username = '$username'";
	/*$sql="select id,password from student where id=$id && password=$password";*/
	if(mysqli_query($conn,$sql))
	{
		//echo "Data Added Successfully";
		//echo $username;
		//header("location : Login.php");
		//$sql1 = "insert into closure_details (Closure_Date,Revoke_Date,Revoke_Status) values (NULL,NULL,'Yes')";
		echo '<script>window.location="Closureg.php"</script>';
	}
	else
	{
		//echo "Not inserted";
		//header("location : Register.php");
		echo '<script>window.location="Closureg.php"</script>';
	}
	mysqli_close($conn);
?>