<?php
	include('config.php');

	$cust_id = $_GET["id"];

	$query = "delete from customers where cust_id='".$cust_id."'";

	$result = mysqli_query($connect,$query);

	print_r($result);
?>