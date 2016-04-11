<!DOCTYPE html>
<html>
<head>
	<title>Add New Customer</title>
</head>
<body>
	<form method="POST" action="save_customer.php">
		<div><label>First Name</label> <input type="text" name="firstName"></input></div><br>
		<div><label>Last Name</label> <input type="text" name="lastName"></input></div><br>
		<div><label>Address</label> <input type="text" name="aaddress"></input></div><br>
		<div><label>Phone</label> <input type="number" name="phone"></input></div><br>
		<div><input type="submit" name="save" value="Save"></input></div>
	</form>
</body>
</html>