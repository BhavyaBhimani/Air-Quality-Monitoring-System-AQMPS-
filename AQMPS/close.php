<?php
	$conn=mysqli_connect("localhost:3307","root","","aqmps");
	if(!$conn)
	{
		die("Could Not connect".mysqli_connect_error());
	}
	//$username = $_POST["name"];
	$username = rtrim($_POST["username"],"/");
	$query1 = "Select current_date from dual";
	$query2 = " SELECT DATE_ADD(CURRENT_DATE, INTERVAL 30 DAY) FROM DUAL;";
	$result1 = mysqli_query($conn,$query1);
	$rows1=mysqli_fetch_assoc($result1);
	$Date1 = $rows1['current_date'];
	$result2 = mysqli_query($conn,$query2);
	$rows2=mysqli_fetch_assoc($result2);
	$Date2 = $rows2['DATE_ADD(CURRENT_DATE, INTERVAL 30 DAY)'];
	$sql="update client_complete_data set Closure_Status = 'Yes', Revoke_Status = 'No', Closure_Date = '$Date1' , Revoke_Date = '$Date2' where username = '$username'";
	//$sql1 = "insert into client_complete_data (Closure_Date,Revoke_Date,Revoke_Status) values (substr(sysdate(),1,10) from dual,SUBSTR(DATE_ADD(SYSDATE(), INTERVAL 30 DAY),1,10) from dual, 'No') where username = '$username'";
	/*$sql="select id,password from student where id=$id && password=$password";*/
	if(mysqli_query($conn,$sql))
	{
		//echo "Data Added Successfully";
		//echo $username;
		//header("location : Login.php");
		//if(mysqli_query($conn,$sql1))
		//{	
		echo '<script>window.location="Closureg.php"</script>';
		//}
	}
	else
	{
		//echo "Not inserted";
		//header("location : Register.php");
		echo '<script>window.location="Closureg.php"</script>';
	}
	mysqli_close($conn);
?>