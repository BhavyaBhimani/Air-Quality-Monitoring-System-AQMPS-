<?php
	include("sessiong.php");
	if(!isset($_SESSION['login_govt']))
	{	
		header("location:Login.php");
	}
	include_once('config.php');
	$username = rtrim($_POST["username"],"/");
	//echo $username;
	$comments = $_POST["comments"];
	//echo $comments;
	$ids = $_POST["identity"];
	$query= "select * from client_complete_data where username = '$username'";
	$result = mysqli_query($db,$query);
	$rows=mysqli_fetch_assoc($result);
	$user = $rows['username'];
	$sql="update client_complete_data set Comments = '$comments' where username = '$username'";
	if(mysqli_query($db,$sql))
	{
		//echo "Data Added Successfully";
		//header("location : Login.php");
		//echo '<script>window.location="Specific_Industryg.php?Id='.$ids.'&user='.$username.'</script>';
		echo '<script>window.location="Specific_Industryg.php?Id='.$ids.'&user='.$username.'"</script>';
	}
	else
	{
		//echo "Not inserted";
		//header("location : Register.php");
		echo $username;
		echo '<script>window.location="Specific_Industryg1.php?Id='.$ids.'&user='.$username.'"</script>';
	}
	;
?>