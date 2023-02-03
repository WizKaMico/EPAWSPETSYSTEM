<?php
	session_start();
	include '../../../CONNECTION/conn.php';

	if(isset($_POST['submit'])){
	
		
		$ID = $_POST['ID'];
		$title = $_POST['title'];
        $body = $_POST['body'];
        date_default_timezone_set('Asia/Manila');
        $date_created = date('Y-m-d'); 

		
		$sql = "UPDATE site_services SET title = '$title', body = '$body' WHERE ID = '$ID'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = ' ADDED SUCCESFULLY';
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