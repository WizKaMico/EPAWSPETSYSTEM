<?php 

include '../CONNECTION/conn.php';
include('session.php'); 

$result=mysqli_query($conn, "select * from users where user_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EPAW | APPOINTMENT SYSTEM</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            EPAWS
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item  active">
                            <a href="home.php?category=home" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item ">
                            <a href="home.php?category=product" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Shop Product / Order</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Components</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="home.php?category=reports">Reports</a>
                                    <a href="home.php?category=users">Create User</a>
                                    <a href="home.php?category=pet">Pet Record</a>
                                    <a href="home.php?category=overall">All Record</a>
                                </li>
                                
                            </ul>
                        </li>

                         <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Site Content</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="home.php?category=FAQ">Add FAQ</a>
                                      <a href="home.php?category=SERVICES">Add Tips</a>
                                       <a href="home.php?category=HOLIDAY">Add Holiday</a>
                                       <a href="home.php?category=SHOPCONTENT">Add Shop Content</a>
                                </li>
                                
                            </ul>
                        </li>

                        <li class="sidebar-item">
                            <a href="#" data-bs-toggle="modal"
                                        data-bs-target="#hours" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Logout</span>
                            </a>
                        </li>

                       

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>

                             <!--add logout -->
                                    <div class="modal fade text-left" id="hours" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myModalLabel1">LOGGING OUT</h5>
                                                    <button type="button" class="close rounded-pill"
                                                        data-bs-dismiss="modal" aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                  <p>Are you sure you want to logout?<p>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="logout.php" class="btn">Proceed</a>
                                                    <button type="button" class="btn" data-bs-dismiss="modal">
                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Close</span>
                                                    </button>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>

        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Hi! <?php echo strtoupper($row['name']); ?></h3>
                        </div>

                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><p>Dashboard</p></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?php echo strtoupper($_GET['category']); ?></li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                      <div class="row">
                        <?php 


                        date_default_timezone_set('Asia/Manila'); 
                        
                        $result=mysqli_query($conn, "SELECT *,COUNT(id) as TOTAL FROM appointment WHERE date_appointment = '".date('Y-m-d')."'")or die('Error In Session');
                        $row=mysqli_fetch_array($result); 

                        $store=mysqli_query($conn, "SELECT *,SUM(amount) as TOTAL FROM tbl_order WHERE order_status = 'COMPLETE'")or die('Error In Session');
                        $store_row=mysqli_fetch_array($store);


                        $pgresult=mysqli_query($conn, "SELECT *,COUNT(id) as TOTAL FROM appointment WHERE state = 'PET GROOMING' AND date_appointment = '".date('Y-m-d')."'")or die('Error In Session');
                        $pgrow=mysqli_fetch_array($pgresult); 

                        $paresult=mysqli_query($conn, "SELECT *,COUNT(id) as TOTAL FROM appointment WHERE state = 'PET APPOINTMENT' AND date_appointment = '".date('Y-m-d')."'")or die('Error In Session');
                        $parow=mysqli_fetch_array($paresult); 

                        $pcresult=mysqli_query($conn, "SELECT *,COUNT(id) as TOTAL FROM appointment WHERE state = 'PET TREATMENT' AND date_appointment = '".date('Y-m-d')."'")or die('Error In Session');
                        $pcrow=mysqli_fetch_array($pcresult); 


        
                         $your_date = date('Y-m-d');
                         $tom = date_create( $your_date . ' + 1 day' )->format( 'Y-m-d' );

                         $resultx=mysqli_query($conn, "SELECT *,COUNT(id) as TOTAL FROM appointment WHERE date_appointment = '".$tom."'")or die('Error In Session');
                        $crow=mysqli_fetch_array($resultx);   


                          $your_dates = date('Y-m-d');
                         $tomx = date_create( $your_dates . ' + 2 day' )->format( 'Y-m-d' );

                         $resulty=mysqli_query($conn, "SELECT *,COUNT(id) as TOTAL FROM appointment WHERE date_appointment = '".$tomx."'")or die('Error In Session');
                        $croy=mysqli_fetch_array($resulty);  


                           $your_datex = date('Y-m-d');
                         $tomy = date_create( $your_datex . ' + 3 day' )->format( 'Y-m-d' );

                         $resultu=mysqli_query($conn, "SELECT *,COUNT(id) as TOTAL FROM appointment WHERE date_appointment = '".$tomy."'")or die('Error In Session');
                        $crou=mysqli_fetch_array($resultu);    

                        ?>    
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon purple">
                                                    <i class="iconly-boldShow"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Appointment Today</h6>
                                                <h6 class="font-extrabold mb-0"><?php echo $row['TOTAL']; ?></h6>
                                                <h6 class="text-muted font-semibold" style="font-size:10px;"><?php echo date("F j, Y", strtotime(date('Y-m-d'))); ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon blue">
                                                    <i class="iconly-boldProfile"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Appointment Tomorrow</h6>
                                                <h6 class="font-extrabold mb-0"><?php echo $crow['TOTAL']; ?></h6>
                                                <h6 class="text-muted font-semibold" style="font-size:10px;"><?php echo date("F j, Y", strtotime($tom)); ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green">
                                                    <i class="iconly-boldAdd-User"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                  <h6 class="text-muted font-semibold">Appointment After</h6>
                                                <h6 class="font-extrabold mb-0"><?php echo $croy['TOTAL']; ?></h6>
                                                <h6 class="text-muted font-semibold" style="font-size:10px;"><?php echo date("F j, Y", strtotime($tomx)); ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon red">
                                                    <i class="iconly-boldBookmark"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                 <h6 class="text-muted font-semibold">Appointment Then</h6>
                                                <h6 class="font-extrabold mb-0"><?php echo $crou['TOTAL']; ?></h6>
                                                <h6 class="text-muted font-semibold" style="font-size:10px;"><?php echo date("F j, Y", strtotime($tomy)); ?></h6>
                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon purple">
                                                    <i class="iconly-boldShow"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">GROOMING</h6>
                                                <h6 class="font-extrabold mb-0"><?php echo $pgrow['TOTAL']; ?></h6>
                                                <h6 class="text-muted font-semibold" style="font-size:10px;"><?php echo date("F j, Y", strtotime(date('Y-m-d'))); ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon purple">
                                                    <i class="iconly-boldShow"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">APPOINTMENT</h6>
                                                <h6 class="font-extrabold mb-0"><?php echo $parow['TOTAL']; ?></h6>
                                                <h6 class="text-muted font-semibold" style="font-size:10px;"><?php echo date("F j, Y", strtotime(date('Y-m-d'))); ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon purple">
                                                    <i class="iconly-boldShow"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">TREATMENT</h6>
                                                <h6 class="font-extrabold mb-0"><?php echo $pcrow['TOTAL']; ?></h6>
                                                <h6 class="text-muted font-semibold" style="font-size:10px;"><?php echo date("F j, Y", strtotime(date('Y-m-d'))); ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon purple">
                                                    <i class="iconly-boldShow"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">STORE EARNING</h6>
                                                <h6 class="font-extrabold mb-0">₱ <?php echo $store_row['TOTAL']; ?></h6>
                                                <h6 class="text-muted font-semibold" style="font-size:10px;"><?php echo date("F j, Y", strtotime(date('Y-m-d'))); ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>

              <?php 


               if($_GET['category'] == 'home'){ 
               include 'include/home.php';
               }else if($_GET['category'] == 'users'){
               include 'include/users.php'; 
               }else if($_GET['category'] == 'product'){
               include 'include/product.php'; 
               }else if($_GET['category'] == 'pet'){
               include 'include/patient.php';
               }else if($_GET['category'] == 'records'){
               include 'include/patient_record.php';
              }else if($_GET['category'] == 'overall'){
               include 'include/overall_record.php';
                }else if($_GET['category'] == 'archive'){
               include 'include/patientArchive.php';
                }else if($_GET['category'] == 'archiverecord'){
               include 'include/patientArchive_record.php';
                }else if($_GET['category'] == 'FAQ'){
               include 'include/content_faq.php';
                }else if($_GET['category'] == 'SERVICES'){
               include 'include/content_services.php';
                }else if($_GET['category'] == 'HOLIDAY'){
               include 'include/content_holiday.php';
                 }else if($_GET['category'] == 'SHOPCONTENT'){
               include 'include/content_shop.php';
               }else{
               include 'include/reports.php';
               }



              ?>  

  


               
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2022 &copy; THESIS GROUP</p>
                    </div>
                    
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/main.js"></script>
     <script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
</body>

</html>