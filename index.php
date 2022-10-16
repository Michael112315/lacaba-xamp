<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aceregistered";

$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['uname'])){

$username=$_POST['uname'];
$password=$_POST['pass'];

$sql = "SELECT * from registered where Username= '" .$username."' AND Password= '" .$password."'  ";


		$result = $conn->query($sql);

	if($result-> num_rows > 0){

	
			  	header("location:frontlayout.php");
				   
				


	}
		else{

			
		}
}

?>
	

	<!DOCTYPE html>	
<html>
<head>
	<link rel="stylesheet" type="text/css" href="sam.css">
	<title>Ace Coffee Shop</title>


	
</head>
<body>
		


	<form  method= "post"action="">

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="uname" value="" placeholder="Enter UserName" required>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="pass" value=""  placeholder = "Enter PassWord	"required>
		</div>
		
<form action="register.php">
		<center><div class="input-group" action ="register.php">

			<button class="btn" type="LOGIN" name="sup" >SignIn</button>

		</div></center>
</form>

       <form  method= "post" action="register.php"  >

		<center><div class="input-group">
			<button class="btn" type="Register" name="sub"  >Register</button>



		</div></center>
		

	


</body>

</html>