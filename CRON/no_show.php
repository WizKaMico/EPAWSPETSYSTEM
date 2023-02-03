<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



date_default_timezone_set('Asia/Manila'); 
include('../connection/conn.php'); 
$d=date('Y-m-d h:i:s');


$sql = "SELECT * FROM `appointment`";
     
         

 require 'mailler/autoload.php';

  $query = $conn->query($sql);
  while($row = $query->fetch_assoc()){

 
  $now = time(); // or your date as well
  $your_date = strtotime($row['date_appointment']);
  $datediff =   $now - $your_date;
  $RTIME = round($datediff / (60 * 60 * 24));

  $email = $row['email'];
  $state = $row['state'];
  $pcode  = $row['pcode'];
  $status = $row['status'];

if($RTIME < 0){
 ECHO  $subject = 'EPAWS | APPOINTMENT REMINDER | '.$RTIME.' DAYS BEFORE YOUR APPOINTMENT | '.$status.'';
}else if($RTIME > 0){
ECHO  $subject = 'EPAWS | YOUR APPOINTMENT IS TODAY'; 
} else{
ECHO  $subject = 'EPAWS | APPOINTMENT ENDED | '.$RTIME.' AGO | '.$status.'';  
}

 
 
  mysqli_query($conn,"INSERT INTO auto_mail_history (state, pcode, status, date_time) VALUES ('$state', '$pcode', '$status', '$d')");
  if($RTIME > -5){
   mysqli_query($conn,"UPDATE appointment SET status = 'NO SHOW' WHERE pcode = '$pcode'");
  }
    $message = '
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>EPAWS BOOKING | ITENERARY</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><link rel="stylesheet" href="./style.css">

<style type="text/css">
  
a {
  text-decoration: none;
}

.flex, footer .social-links, #section2 article h2, #section2 article, #top-charts, .author-info, .share-links, #main-header {
  display: flex;
}

.container {
  background: rgba(211, 211, 211, 0.2);
  max-width: 800px;
  margin: auto;
  box-shadow: 0 5px 15px gray;
}

#main-header {
  color: white;
  background: linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url("http://www.telegraph.co.uk/content/dam/Travel/Cruise/worlds-most-beautiful-ports/hongkong-harbour-xlarge.jpg") no-repeat center center;
  background-size: cover;
  height: 70vh;
  flex-direction: column;
}
#main-header #title {
  margin-bottom: auto;
  border-bottom: solid 1px rgba(211, 211, 211, 0.3);
  padding-left: 15px;
}
#main-header #title h2 span {
  font-weight: 100;
}
#main-header .info {
  padding-left: 15px;
}
#main-header .info h3 {
  font-weight: 100;
}

.share-links {
  align-items: center;
  padding-left: 15px;
  border-bottom: solid 1px #ededed;
  background: white;
}
.share-links p {
  margin: 0;
  margin-right: auto;
}
.share-links a {
  border-left: solid 1px #ededed;
  padding: 15px 20px;
  color: rgba(0, 0, 0, 0.8);
}

.author-info {
  align-items: center;
  padding: 25px 15px 15px;
  line-height: 1.5;
  background: white;
}
.author-info img {
  width: 70px;
  height: 70px;
  border-radius: 50%;
  margin-right: 15px;
}
.author-info h4 {
  margin: 0;
}
.author-info p {
  margin: 0;
}

main > section {
  background: white;
  padding: 5px 15px;
  margin-bottom: 20px;
}
main article {
  margin-bottom: 30px;
}
main article img {
  width: 100%;
}
main article section p {
  line-height: 1.5;
}
main article section .fa-angle-right {
  margin-left: 10px;
}

#top-charts {
  align-items: center;
  justify-content: space-between;
  border-bottom: solid 1px lightgray;
  background: white;
  padding-left: 15px;
}
#top-charts h4 {
  margin: 0;
}
#top-charts h4 span {
  font-weight: 100;
}
#top-charts a {
  border-left: solid 1px lightgray;
  padding: 18px 15px;
}
#top-charts a .fa-angle-right {
  margin-left: 5px;
}

#section2 {
  padding-bottom: 20px;
}
#section2 article {
  flex-direction: column;
}
#section2 article img {
  width: 110px;
  height: 110px;
  border-radius: 50%;
  margin-right: 20px;
}
#section2 article h2 {
  align-items: center;
}
#section2 article h2 span {
  background: yellow;
  padding: 5px 8px;
  border-radius: 4px;
  font-size: 14px;
  margin-right: 10px;
}
#section2 a {
  background: blue;
  color: white;
  padding: 18px 10px;
  display: block;
  text-align: center;
  border-radius: 5px;
}

footer {
  padding: 0 15px 15px;
  text-align: center;
  color: #adadad;
}
footer .social-links {
  border-bottom: solid 2px rgba(211, 211, 211, 0.2);
  margin-bottom: 20px;
}
footer .social-links a {
  color: lightgray;
  flex: 1;
  padding: 15px 15px 20px;
  font-size: 20px;
}
footer a {
  color: #939393;
}
footer #settings {
  text-decoration: underline;
}
footer p {
  margin-top: 5px;
}

@media (min-width: 768px) {
  main > section {
    display: flex;
    flex-wrap: wrap;
  }
  main article {
    display: flex;
    flex-direction: column;
  }
  main article:nth-of-type(1n+2) {
    margin-right: 20px;
    flex: 1 1 35%;
  }
  main article section {
    margin-top: auto;
  }

  #twitter:after {
    content: "Tweet";
    margin-left: 8px;
  }

  #facebook:after {
    content: "Share";
    margin-left: 8px;
  }

  #top-charts a {
    border: none;
  }

  #section2 > article {
    flex-basis: 100%;
  }
  #section2 a {
    width: 100%;
  }

  #section2 article {
    flex-direction: row;
    align-items: center;
  }
}

  
</style>


</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
  <header id="main-header">
    <div id="title"><h2><strong>EPAWS</strong> <span>BOOKING REMINDER</span></h2></div>
    <div class="info">
    </div>
  </header>
  
  <div class="author-info">
    <img src="https://d3iw72m71ie81c.cloudfront.net/female-70.jpg">
    <div>
      <h4>Hi! '.$row['fullname'].'</h4>
      <p></p>
    </div>
  </div><!--author info end-->
  
  <main>
    
    
    <section id="section2">
      <h1>BOOKING DETAILS</h1>
      <article>
        <div>
          <header>
            <h2><span>1</span> DATE APPOINTMENT  | DATE '.$row['date_appointment'].'  | APPOINTMENT FOR '.$row['state'].'</h2>
          </header>
        </div>
      </article>
      
     
      
    
    </section>
    
  </main>
  
  <footer>
    
    <a href="#" id="settings">EPAWS</a>
    <p>If you believe this has been sent to you in error, please safely <strong><a href="#">unsubscribe</a></strong>. For more information, please see our <strong><a href="#">privacy policy</a></strong>.</p>
    <small>&copy; 2017 All Rights Reserved</small>

  </footer>
  
</div><!--container end-->
<!-- partial -->
  
</body>
</html>';

   
    //Load composer's autoloader

        $mail = new PHPMailer();                            
        //Server settings
       try {
        $mail->isSMTP();                                     
        $mail->Host = 'smtp.hostinger.com';                      
        $mail->SMTPAuth = true;                             
        $mail->Username = 'juan2worldsecurity@juan2world.com';     
        $mail->Password = '@Devcore101213';             
        // $mail->SMTPOptions = array(
        //     'ssl' => array(
        //     'verify_peer' => false,
        //     'verify_peer_name' => false,
        //     'allow_self_signed' => true
        //     )
        // );                         
        $mail->SMTPSecure = 'tls';                           
        $mail->Port = 587;                                   
       $mail->isHTML(true);        
        //Send Email
        $mail->setFrom('juan2worldsecurity@juan2world.com');
        
        //Recipients
           $mail->Subject = $subject;
 
        $mail->addAddress($email);              
        
        //Content                          
        $mail->Body  = $message;


        $mail->send();
        

         echo 'send mail to '.$email.'<br>';
    } catch (Exception $e) {
       
         echo 'error';
    }
    
 }
        


  
