<?php 

	// connect to the database
	$conn = mysqli_connect('192.168.3.3', 'shaun', '2004', 'home_nha');

	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}

?>