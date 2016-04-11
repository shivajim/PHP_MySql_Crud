<?php
	include('config.php');
	
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$aaddress = $_POST['aaddress'];
	$phone = $_POST['phone'];
	$cust_id = $_GET['id'];

	$query = "select * from customers where cust_id = '".$cust_id."'";
	$result = mysqli_query($connect, $query);
	
	while ($row  = mysqli_fetch_array($result)){
		print_r("Database".$firstName);

		if($cust_id == $row['cust_id']){
			$query = "update customers set first_name='".$firstName."',last_name='".$lastName."',address='".$aaddress."',phone='".$phone."' where cust_id = '".$cust_id."'";
			
			$result  = mysqli_query($connect,$query);
			print_r($result);
			break;
		}
	}
?>