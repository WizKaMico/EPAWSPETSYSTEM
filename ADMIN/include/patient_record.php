 <?php 

include '../../CONNECTION/conn.php';


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OCAS | ONLINE CLINIC APPOINTMENT SYSTEM</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/app.css">
    <link rel="shortcut icon" href="../assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="../assets/vendors/simple-datatables/style.css">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            OCAS
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
                            <a href="../home.php?category=home" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Components</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="../home.php?category=reports">Reports</a>
                                    <a href="../home.php?category=users">Create User</a>
                                    <a href="../home.php?category=patient">Patient Record</a>
                                </li>
                                
                            </ul>
                        </li>

                        <li class="sidebar-item  active">
                            <a href="../logout.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Logout</span>
                            </a>
                        </li>

                       

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
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
                        
                       
                    </div>

                      
                </div>

            


              <!-- Basic Horizontal form layout section start -->
                <section id="basic-horizontal-layouts">
                    <div class="row match-height">
                        
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">PATIENT RECORD : <?php echo strtoupper($_GET['name']); ?></h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <table class="table table-striped" id="table1">
                                        <thead>
                                            <tr>
                                                <th>PCODE</th>
                                                <th>DATE APPOINTMENT</th>
                                                <th>STATUS</th>
                                                <th>ACTION</th>

                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                    date_default_timezone_set('Asia/Manila'); 
                                                    $query = mysqli_query($conn, "SELECT * FROM appointment WHERE fullname = '".$_GET['name']."' AND status != 'NO SHOW'") or die(mysqli_error());
                                                    while($fetch = mysqli_fetch_array($query)){
                                            ?>
                                            <tr>
                                                <td><?php echo $fetch['pcode']; ?></td>
                                                <td><?php echo $fetch['date_appointment']; ?></td>
                                                 <td><?php echo $fetch['status']; ?></td>
                                               
                                                <td>

                                                     <?php
                                                    
                                                     $result=mysqli_query($conn, "SELECT * FROM notepad WHERE pid = '".$fetch['id']."'")or die('Error In Session');
                                                     $xfetch=mysqli_fetch_array($result);


                                                   
                                                    ?>

                                                    <?php if(empty($xfetch['pid'])){ ?>
                                                 
                                               <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal"
                                                    data-bs-target="#note<?php echo $fetch['id']; ?>">
                                                    ADD NOTE
                                                </button>

                                                     <!--Basic Modal -->
                                    <div class="modal fade text-left" id="note<?php echo $fetch['id']; ?>" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myModalLabel1">CODE-<?php echo $fetch['pcode']; ?></h5>
                                                    <button type="button" class="close rounded-pill"
                                                        data-bs-dismiss="modal" aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="activity/add_notes.php" method="POST">
                                                            <div class="modal-body">
                                                               
                                                               <input type="hidden" name="id" value="<?php echo $fetch['id']; ?>">
                                                                <input type="hidden" name="pcode" value="<?php echo $fetch['pcode']; ?>">

                                                                 <div class="form-group">
                                                                    <label>ADD NOTE:</label>
                                                                    <textarea class="form-control" name="note" rows="10" cols="5"></textarea>
                                                                </div>

                                                                <div class="form-group">
                                                                   <button type="submit" name="submit" class="btn btn-primary" style="width:100%;">SAVE NOTE</button>
                                                                </div>
                                                              
                                                            </div>
                                                            
                                                        </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn" data-bs-dismiss="modal">
                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Close</span>
                                                    </button>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php }else { ?>


                                        <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal"
                                                    data-bs-target="#note<?php echo $fetch['id']; ?>">
                                                    VIEW NOTE
                                                </button>

                                                     <!--Basic Modal -->
                                    <div class="modal fade text-left" id="note<?php echo $fetch['id']; ?>" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myModalLabel1">CODE-<?php echo $fetch['pcode']; ?></h5>
                                                    <button type="button" class="close rounded-pill"
                                                        data-bs-dismiss="modal" aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="activity/add_notes.php" method="POST">
                                                            <div class="modal-body">
                                                               
                                                     
                                                                 <div class="form-group">
                                                                    <label>NOTE:</label>
                                                                    <textarea class="form-control" name="note" rows="10" cols="5"><?php echo $xfetch['note'] ?></textarea>
                                                                </div>

                                                             
                                                              
                                                            </div>
                                                            
                                                        </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn" data-bs-dismiss="modal">
                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Close</span>
                                                    </button>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>







                                 <?php } ?>   

                            
                                    
                                                </td>
                                              
                                                
                                            </tr>
                                            <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic Horizontal form layout section end -->

  


               
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
    <script src="../assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/js/main.js"></script>
     <script src="../assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
</body>

</html>

