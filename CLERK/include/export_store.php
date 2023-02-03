<?php
	session_start();
	//connection
	include '../../CONNECTION/conn.php';
 
	$sql = "SELECT * FROM tbl_order LEFT JOIN users ON tbl_order.customer_id = users.user_id";
	$query = $conn->query($sql);
 
	if($query->num_rows > 0){
		$delimiter = ',';
		//create a download filename
		$filename = 'store_transactions.csv';
 
		$f = fopen('php://memory', 'w');
 
		$headers = array('ACCOUNT USERNAME', 'NAME', 'ORDER STATUS', 'DATE');
    	fputcsv($f, $headers, $delimiter);
 
    	while($row = $query->fetch_array()){
	        $lines = array($store_row['username'], $row['name'], $row['order_status'], $row['order_at']);
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