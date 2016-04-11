<?php 
	
	include('config.php');

	$query = "select * from customers order by cust_id asc";
	$result = mysqli_query($connect,$query);
?>
	<br>
	<a href="add_new_customer.php"> Add New Customer</a><br><br>
	<table style="border-collapse: collapse;" border="1px">
		<tr>
			<th width="120">Customer Id</th>
			<th width="120">First Name</th>
			<th width="120">Last Name</th>
			<th width="120">Address</th>
			<th width="120">Phone</th>
			<th width="120">Operations</th>
		</tr>
	<?php 
		while ($row = mysqli_fetch_array($result)) {
			$cust_id= $row['cust_id'];
			$first_name = $row['first_name'];
			$last_name = $row['last_name'];
			$address = $row['address'];
			$phone = $row['phone'];

			?>
			<tr align="center">
				<td width="120"><?php echo $cust_id; ?></td>
				<td width="120"><?php echo $first_name; ?></td>
				<td width="120"><?php echo $last_name; ?></td>
				<td width="120"><?php echo $address; ?></td>
				<td width="120"><?php echo $phone;?></td>
				<td width="100"><a href="update_cust.php?id=<?php echo $cust_id ?>">Edit </a> &nbsp;&nbsp;
								<a href="delete_cust.php?id=<?php echo $cust_id ?>">Delete</a></td>
			</tr>
			<?php
		}
		?>
		</table>
