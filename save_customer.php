<?php
	include('config.php');
	
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$aaddress = $_POST['aaddress'];
	$phone = $_POST['phone'];

		$query = "insert into customers (first_name,last_name,address,phone) values('".$firstName."','".$lastName."','".$aaddress."','".$phone."')";

	$result = mysqli_query($connect,$query);
	print_r("Saved");
?>