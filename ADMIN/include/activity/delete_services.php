<?php
	session_start();
	include '../../../CONNECTION/conn.php';

	if(isset($_POST['submit'])){
	
		
		$ID = $_POST['ID'];
		
		
		$sql = "DELETE FROM site_services WHERE ID = '$ID'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = ' DELETED SUCCESFULLY';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member added successfully';
		// }
		//////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: ../../home.php?category=SERVICES');
?>