<?php
	session_start();
	include '../../CONNECTION/conn.php';

	if(isset($_POST['submit'])){
	
		$id = $_POST['user_id'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$name = $_POST['name'];
		$designation = $_POST['designation'];
		
		$sql = "UPDATE users SET username='$username', password='$password', name='$name', designation='$designation' WHERE user_id = '$id'";

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

	header('location: ../home.php?category=users');
?>