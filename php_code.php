<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'crud');

	// initialize variables
	$user = "";
    $fName = "";
    $LName = "";
    $address = "";
    $cnumber = "";
	$email = "";
    $pw = "";
	$id = 0;
	$update = false;

	if (isset($_POST['reg'])) {
		$user = $_POST['userID'];
		$fName = $_POST['FirstName'];
        $LName = $_POST['LastName'];
        $address = $_POST['Address'];
        $cnumber = $_POST['CellNumber'];
        $email = $_POST['Email'];
        $pw = $_POST['Password'];

		mysqli_query($db, "INSERT INTO aceregistered (userID, FirstName,LastName, Address, CellNumber, Email, Password) VALUES ('$user', '$fName', 'LName', 'address', 'cnumber', 'email', 'pw')"); 
		$_SESSION['message'] = "Address saved"; 
		header('location: index.php');
	}


    if (isset($_POST['update'])) {
        $user = $_POST['userID'];
		$fName = $_POST['FirstName'];
        $LName = $_POST['LastName'];
        $address = $_POST['Address'];
        $cnumber = $_POST['CellNumber'];
        $email = $_POST['Email'];
        $pw = $_POST['Password'];
    
        mysqli_query($db, "UPDATE info SET name='$name', address='$address' WHERE id=$id");
        $_SESSION['message'] = "Address updated!"; 
        header('location: index.php');
    }

    
    if (isset($_GET['del'])) {
        $user = $_POST['userID'];
		$fName = $_POST['FirstName'];
        $LName = $_POST['LastName'];
        $address = $_POST['Address'];
        $cnumber = $_POST['CellNumber'];
        $email = $_POST['Email'];
        $pw = $_POST['Password'];
    }

    ?>