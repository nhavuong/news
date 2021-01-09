<?php 

	// connect to the database
	$conn = mysqli_connect('localhost', 'root', '', 'home_nha');

	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}

?>