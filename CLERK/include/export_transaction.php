<?php
	session_start();
	//connection
	include '../../CONNECTION/conn.php';
 
	$sql = "SELECT * FROM appointment";
	$query = $conn->query($sql);
 
	if($query->num_rows > 0){
		$delimiter = ',';
		//create a download filename
		$filename = 'appointment_transactions.csv';
 
		$f = fopen('php://memory', 'w');
 
		$headers = array('PCODE', 'NAME', 'EMAIL', 'STATE', 'APPOINTED DATE','PHONE');
    	fputcsv($f, $headers, $delimiter);
 
    	while($row = $query->fetch_array()){
	        $lines = array($row['pcode'], $row['fullname'], $row['email'], $row['state'], $row['date_appointment'],  $row['phone']);
	        fputcsv($f, $lines, $delimiter);
	    }
 
	    fseek($f, 0);
	    header('Content-Type: text/csv');
	    header('Content-Disposition: attachment; filename="' . $filename . '";');
	    fpassthru($f);
	    exit;
	}
	else{
		$_SESSION['message'] = 'Cannot export. Data empty';
		header('location:home.php?category=home');
	}
?>