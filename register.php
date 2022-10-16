<?php



if(isset($_POST['reg'])){

$first_name =  $_POST['fname'];
$last_name = $_POST['Lname'];
$address= $_POST['address'];
$number = $_POST['cnumber'];
$mail = $_POST['email'];
$uname= $_POST['user'];
$pass = $_POST['pw'];



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aceregistered";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO registered (FirstName, LastName, Address, CellNumber, Email,  Username, Password)
VALUES ('$first_name',  '$last_name', '$address', '$number' , '$mail'  , '$uname', '$pass')";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('New Record Created Successfully!');</script>";
} 
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

}
?>








<html>
<head>
<link rel="stylesheet" type="text/css" href="sam.css">
<title>

        Account Registration

</title>
</head>
<body>



<form action = "" method="post">
<div class="input-group">
			<label>FirstName</label>
			<input type="text" name="fname" value="" placeholder="First Name" required>
		</div>
		<div class="input-group">
			<label>LastName</label>
			<input type="text" name="Lname" value="" placeholder="Last Name" required>
		</div>

        <div class="input-group">
			<label>Address</label>
			<input type="text" name="address" value="" placeholder="Address" required>
		</div>

		<div class="input-group">
			<label>CellNumber</label>
			<input type="text" name="cnumber" value="" placeholder="CellPhone Number" required>
		</div>

        <div class="input-group">
			<label>Email</label>
			<input type="text" name="email" value="" placeholder="Email" required>
		</div>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="user" value="" placeholder="UserName" required>
		</div>
		
	<div class="input-group">
			<label>Password</label>
			<input type="Password" name="pw" value="" placeholder="Password" required>
		</div>
	
	
      <center>   <button class="btn" type="submit" name="reg"  >Register</button> </center>  
		
		</form>

		<form action = "index.php" method="post">
			
			<center><button class="btn" type="back" name="home"  >Home</button></center>
			
		
		</form>

</body>
</html>