<?php
  $con=mysqli_connect("localhost","root","","cloudseo");
	// Check connection
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
	$sql="INSERT INTO cloudseo_db (username, password, email)
	VALUES
	('$_POST[username]','$_POST[password]','$_POST[email]')";
	
	if (!mysqli_query($con,$sql))
	  {
	  die('Error: ' . mysqli_error());
	  }
	echo "1 record added";
	echo "<br><a href='index.html'>back</a>";
	
	mysqli_close($con);
?>
