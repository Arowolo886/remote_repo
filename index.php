<?php
	include 'connect.php';

	if( isset($_POST) ){

		extract($_POST);
	/*
		You have to create a  table  with colum name, username and password
	*/
	$query = mysqli_query($connect, "INSERT INTO tablename (name, username, password) VALUES ('$name', '$username', '$pass') ");

		if( $query ){
			echo "Insertion Successfull";
		} else{
			echo "Insertion Failed";
		}



	}
	
	


?>
