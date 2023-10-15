<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT Id FROM govt_data WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1)
	  {
         //session_register("myusername");
         $_SESSION['login_govt'] = $myusername;
         header("location: Dashboardg.php");
      }
	  else 
	  {
         $sql1 = "SELECT Id FROM client_data WHERE username = '$myusername' and password = '$mypassword'";
		 $result1 = mysqli_query($db,$sql1);
         $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
		 $count1 = mysqli_num_rows($result1);
		 if($count1== 1)
		 {
			
			$_SESSION['login_user'] = $myusername;
			header("location: Dashboardc.php");
		 }
		 else
		 {
		 //$error = "Your Login Name or Password is invalid";
		 header("location: Login.php");
		 }
      }
   }
?>