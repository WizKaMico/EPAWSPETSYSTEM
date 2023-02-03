<?php 

include '../CONNECTION/conn.php';
include('session.php'); 

$result=mysqli_query($conn, "select * from users where user_id='$session_id'")or die('Error In Session');
$appointmentresult=mysqli_query($conn, "select * from appointment")or die('Error In Session');
$petresult=mysqli_query($conn, "select * from pet")or die('Error In Session');
$row=mysqli_fetch_array($result);
$appointment=mysqli_fetch_array($appointmentresult);
$pet=mysqli_fetch_array($petresult);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EPAWS | APPOINTMENT SYSTEM</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">
    <link rel="stylesheet" href="css/arcstyle.css">
     
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
                                    <a href="home.php?category=pet">Pet Record</a>
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
                }else if($_GET['category'] == 'record'){
               include 'include/patient_record.php';
                }else if($_GET['category'] == 'archive'){
               include 'include/patientArchive.php';
                }else if($_GET['category'] == 'archiverecord'){
               include 'include/patientArchive_record.php';
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
     <script type="text/javascript" src='https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.3.min.js'></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.min.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
       const picker = document.getElementById('date1');

        var disabledDays = [
       "27-4-2016", "25-12-2016", "26-12-2016",
       "4-4-2017", "5-4-2017", "6-4-2017", "6-4-2016", "7-4-2017", "8-4-2017", "9-4-2017"
    ];


        picker.addEventListener('input', function(e){
          var day = new Date(this.value).getUTCDay();
          if([6,0].includes(day)){
            e.preventDefault();
            this.value = '';
            alert('Weekends not allowed');
          }
        });
    </script>
</body>

</html>