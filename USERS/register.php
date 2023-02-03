<?php session_start(); ?>
<?php include '../CONNECTION/conn.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EPAWS |  CLINIC APPOINTMENT SYSTEM</title>
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
                    <h1 class="auth-title" style="width:20px;">REGISTER</h1>
                  

                    <form action="#" method="post">
                       
                        <input type="hidden" class="form-control form-control-xl" name="code" value="<?php echo rand('6666','9999'); ?>" readonly>
                        <input type="hidden" class="form-control form-control-xl" name="designation" value="USER" readonly> 
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" name="name" placeholder="Fullname" required>
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>

                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="email" class="form-control form-control-xl" name="email" placeholder="Email" required>
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>

                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="number" class="form-control form-control-xl" name="phone" placeholder="Phone number" required>
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>

                         <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" name="password" placeholder="Password" required> 
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>

                        


                      
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" name="submit" style="background-color:green; border-color:green;">REGISTER</button>
                        <a href="index.php" class="btn btn-primary btn-block btn-lg shadow-lg mt-5" style="background-color:green; border-color:green;">LOGIN</a>
                    </form>

                    <?php
                        if (isset($_POST['submit']))
                            {
                                $username = mysqli_real_escape_string($conn, $_POST['email']);
                                $query      = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
                                $row        = mysqli_fetch_array($query);
                                $num_row    = mysqli_num_rows($query);

                                if ($num_row > 0) 
                                {
                                    echo 'Email already taken.';
                                }

                                else
                                {
                                    $code = $_POST['code'];
                                    $designation  = $_POST['designation'];
                                    $email = $_POST['email'];
                                    $name = $_POST['name']; 
                                    $phone = $_POST['phone'];
                                    $password = $_POST['password'];
                              
                                    $query      = mysqli_query($conn, "INSERT INTO users (username, password, name, email, phone, code, designation) VALUES ('$email', '$password', '$name', '$email', '$phone', '$code', '$designation')");

                                    header('location: index.php');
                                }
                            }
                      ?>

                    <div class="text-center mt-5 text-lg fs-4">
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right"  style="background-image:url('loginbg/cat.png');">

                </div>
            </div>
        </div>

    </div>
</body>

</html>