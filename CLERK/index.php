<?php session_start(); ?>
<?php include '../CONNECTION/conn.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EPAWS | ONLINE APPOINTMENT SYSTEM</title>
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
                    <h1 class="auth-title">Log in.</h1>
                    <p class="auth-subtitle mb-5">Log in with your data that you entered during registration.</p>

                    <form action="#" method="post">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" name="user" placeholder="Username">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" name="pass" placeholder="Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                      
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" name="login" style="background-color:green;">Log in</button>
                    </form>

                    <?php
                        if (isset($_POST['login']))
                            {
                                $username = mysqli_real_escape_string($conn, $_POST['user']);
                                $password = mysqli_real_escape_string($conn, $_POST['pass']);
                                
                                $query      = mysqli_query($conn, "SELECT * FROM users WHERE  password='$password' AND username='$username' AND designation = 'CLERK'");
                                $row        = mysqli_fetch_array($query);
                                $num_row    = mysqli_num_rows($query);
                                
                                if ($num_row > 0) 
                                    {           
                                        $_SESSION['user_id']=$row['user_id'];
                                        header('location:home.php?category=home');
                                        
                                    }
                                else
                                    {
                                        echo 'Invalid Username and Password Combination';
                                    }
                            }
                      ?>

                   
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