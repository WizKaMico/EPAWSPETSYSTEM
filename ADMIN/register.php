<?php session_start(); ?>
<?php include '../CONNECTION/conn.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OCAS | ONLINE CLINIC APPOINTMENT SYSTEM</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/pages/auth.css">
</head>

<body>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                      
                    </div>
                    <h1 class="auth-title" style="width:20px;">CREATE APPOINTMENT</h1>
                  

                    <form action="#" method="post">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" name="pcode" value="<?php echo 'PATIENT-';echo rand('6666','9999'); ?>" readonly>
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" name="fullname">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>

                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="email" class="form-control form-control-xl" name="email">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>

                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="number" class="form-control form-control-xl" name="phone">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>

                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="date" class="form-control form-control-xl" name="date_appointment">
                            <?php date_default_timezone_set('Asia/Manila'); ?>
                            <input type="hidden" name="date_created" value="<?php echo date('Y-m-d'); ?>">    
                            <input type="hidden" name="status" value="ACTIVE">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>


                      
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" name="submit">REGISTER</button>
                    </form>

                    <?php
                        if (isset($_POST['submit']))
                            {
                                $pcode = $_POST['pcode'];
                                $fullname  = $_POST['fullname'];
                                $email = $_POST['email'];
                                $phone = $_POST['phone']; 
                                $date_appointment = $_POST['date_appointment'];
                                $date_created = $_POST['date_created'];
                                $status = $_POST['status'];

                                $title = $_POST['pcode'];
                                $start = $_POST['date_appointment'];
                                $end = $_POST['date_appointment'];
                                
                                $query      = mysqli_query($conn, "INSERT INTO appointment (pcode, fullname, email, phone, date_appointment, date_created, status) VALUES ('$pcode', '$fullname', '$email', '$phone', '$date_appointment', '$date_created', '$status')");

                                 $querys      = mysqli_query($conn, "INSERT INTO tbl_events (title, start, end) VALUES ('$title', '$start', '$end')");
                              
                            }
                      ?>

                    <div class="text-center mt-5 text-lg fs-4">
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>
</body>

</html>