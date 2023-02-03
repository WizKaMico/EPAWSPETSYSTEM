<?php
	session_start();
	include '../../CONNECTION/conn.php';

	if(isset($_POST['submit'])){
	
		$rtitle = $_POST['title'];
		$title = 'HOLIDAY-'.$rtitle.''; 
		$start = $_POST['start'];
		$end = $_POST['end'];

	
	   $sql = "INSERT INTO tbl_events (title, start, end) VALUES ('$title', '$start', '$end')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'USER ADDED SUCCESFULLY';
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

	header('location: ../home.php?category=HOLIDAY');
?>