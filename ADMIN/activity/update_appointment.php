<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// require 'vendor/PHPMailer/src/Exception.php';
// require 'vendor/PHPMailer/src/PHPMailer.php';
// require 'vendor/PHPMailer/src/SMTP.php';

include '../../CONNECTION/conn.php';

session_start();

if(isset($_POST['submit'])){
    

    $id = $_POST['id'];
     $pcode = $_POST['pcode'];
    $fullname = $_POST['fullname'];
    $emails = $_POST['email'];
    $phone = $_POST['phone'];
    $date_appointment  = $_POST['date_appointment'];
    $date_created  = $_POST['date_created'];
      

    $title = $_POST['pcode'];
    $start = $_POST['date_appointment'];
    $end = $_POST['date_appointment'];
   
    $status = $_POST['status'];


    $query1 = mysqli_query($conn, "UPDATE appointment SET pcode = '$pcode', fullname = '$fullname', email = '$emails', phone = '$phone', date_appointment = '$date_appointment', status = '$status' WHERE id = '$id'") or die(mysqli_error());
    

    $query2 = mysqli_query($conn, "UPDATE tbl_events SET title='$title' ,start='$start',end='$end' WHERE id = '$id'") or die(mysqli_error());

    header('Location: ../home.php?category=home');    
  }   

