<?php
	session_start();
	include '../../../CONNECTION/conn.php';

	if(isset($_POST['submit'])){
	
		$name = $_POST['name'];
		$id = $_POST['id'];
		$pcode = $_POST['pcode'];
		$note = $_POST['note'];
		
		$sql = "INSERT INTO notepad (pid, pcode, note) VALUES ('$id', '$pcode', '$note')";

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

	header('location: ../../home.php?category=records&name='.$name);
?>