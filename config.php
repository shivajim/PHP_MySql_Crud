<?php
	
	$mysql_localhost = "localhost";
	$mysql_user = "root";
	$mysql_password = "";
	$mysql_database = "customer_db";

	$connect = mysqli_connect($mysql_localhost,$mysql_user,$mysql_password) or die("Opps something went wrong with connection!");
 	$dabase_connect= mysqli_select_db($connect,$mysql_database) or die("Opps...! something went wrong with dabase connection");
