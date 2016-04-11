<?php
	include('config.php');

	$cust_id = $_GET["id"];

	$query = "select * from customers where cust_id = '".$cust_id."'";
	$result = mysqli_query($connect, $query);
	print_r($cust_id);
?>
	<form method="POST" action="save_updated_customer.php?id=<?php echo $cust_id ?>">
	<?php
		while ($row  = mysqli_fetch_array($result)){
		$firstName = $row['first_name'];
		$lanme = $row['last_name'];	
		$address = $row['address'];
		$phone = $row['phone'];
			
		echo "<div><label>First Name: </label><input type='text' name='firstName' value ='".$firstName."'></input></div><br>
		<div><label>Last Name: </label><input type='text' name='lastName' value ='".$lanme."'></input></div><br>
		<div><label>Address: </label><input type='text' name='aaddress' value ='".$address."'></input></div><br>
		<div><label>Phone: </label><input type='text' name='phone' value ='".$phone."'></input></div><br>
		<div><input type='submit' value ='Update'></input></div><br>";	
	}
?>
</form>

