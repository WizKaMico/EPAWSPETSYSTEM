  <!-- Basic Horizontal form layout section start -->
                <section id="basic-horizontal-layouts">
                    <div class="row match-height">

                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">CLINICS CALENDAR OF APPOINTMENTS</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <iframe src="calendar/index.php" style="width:100%; height:600px;" scrolling="no"></iframe>
                                    </div>
                                </div>
                            </div>

                        </div>
                        
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">MY PET LIST</h4>

                                    <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal"
                                        data-bs-target="#default">
                                       ADD MY PET
                                    </button>


                                       <!--Basic Modal -->
                                    <div class="modal fade text-left" id="default" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myModalLabel1">ADD PET</h5>
                                                    <button type="button" class="close rounded-pill"
                                                        data-bs-dismiss="modal" aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="activity/add_appointment.php" method="POST">
                                                            <div class="modal-body">
                                                               
                                                                <div class="form-group">
                                                                    <input type="hidden" value="<?php echo $row['user_id']; ?>" 
                                                                        class="form-control" name="owned_by" readonly="">
                                                                </div>

                                                                <div class="form-group">
                                                                    <input type="hidden" value="<?php echo $row['email']; ?>" 
                                                                        class="form-control" name="email" readonly="">
                                                                </div>
                                                               
                                                                <div class="form-group">
                                                                    <input type="text" placeholder="Pet Name"
                                                                        class="form-control" name="petname" required>
                                                                </div>
                                                               
                                                                <div class="form-group">
                                                                    <input type="date" placeholder="Pet Age (Months)"
                                                                        class="form-control" name="pet_age" required>
                                                                </div>
                                                                
                                                                <div class="form-group">
                                                                    <select name="pet" class="form-control" required>
                                                                        <option value="DOG">DOG</option>
                                                                        <option value="CAT">CAT</option>
                                                                    </select>
                                                                </div>
                                                                
                                                                <div class="form-group">
                                                                    

                                                                    <?php date_default_timezone_set('Asia/manila'); ?>
                                                                   <input type="hidden" value="<?php echo date('Y-m-d'); ?>" 
                                                                        class="form-control" name="date_created" required>                                                                             
                                                                </div>

                                                                    <div class="form-group">
                                                                   
                                                             </div>
                                                                <div class="form-group">
                                                                    <button type="submit" name="submit" class="btn btn-primary" style="width:100%;">ADD PET</button>
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
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                    <table class="table table-striped" id="table1">
                                        <thead>
                                            <tr>
                                                <th>PET NAME</th>
                                                <th>BIRTHDATE</th>
                                                <th>PET CATEGORY</th>
                                                <th>DATE ADDED</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                                    // echo $row['user_id'];
                                                    date_default_timezone_set('Asia/Manila');
                                                    $q_pet = mysqli_query($conn, "SELECT * FROM `pet` WHERE owned_by = '".$row['user_id']."'") or die(mysqli_error());
                                                    while($qfetch = mysqli_fetch_array($q_pet)){
                                                        if ($qfetch['status'] != 1){
                                                            $today = date('Y-m-d');
                                                            //months 
                                                            $month = date('m');
                                                            $month_birth = $qfetch['pet_age'];
                                                            $actual_month = $month -  date('m', strtotime($qfetch['pet_age']));

                                                            $dog_months = $actual_month * 7;

                                                            // echo $actual_month;
                                                            $day = date('d'); 
                                                            $actual_day = $day - date('d', strtotime($qfetch['pet_age']));
                                                            $day_age = $actual_day * 7; 
                                            ?>
                                            <tr>
                                                <td><?php echo $qfetch['petname']; ?></td>
                                                <td><?php echo date("F j, Y", strtotime($qfetch['pet_age'])); ?></td>
                                                <td><?php echo $qfetch['pet']; ?></td>
                                                <td><?php echo date("M, d, Y", strtotime($qfetch['date_created'])); ?></td>
                                                <td>

                                                     <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal"
                                                        data-bs-target="#adding<?php echo $qfetch['pid']; ?>">
                                                        SCHEDULE
                                                    </button>
                                                       <!--Basic Modal -->
                                    <div class="modal fade text-left" id="adding<?php echo $qfetch['pid']; ?>" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myModalLabel1"> APPOINTMENT | <?php echo strtoupper($qfetch['petname']); ?></h5>
                                                    <button type="button" class="close rounded-pill"
                                                        data-bs-dismiss="modal" aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                </div>
                                                 <form action="activity/create_appointment.php" method="POST">
                                                            <div class="modal-body">
                                                               
                                                                <div class="form-group">
                                                                    <input type="text" value="EPAWS-<?php echo rand('6666','9999'); ?>" 
                                                                        class="form-control" name="pcode" readonly="">
                                                                </div>
                                                               
                                                                <div class="form-group">
                                                                    <input type="text" value="<?php echo $qfetch['petname']; ?>" 
                                                                        class="form-control" name="fullname" readonly="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="hidden" value="<?php echo $qfetch['pid']; ?>" 
                                                                        class="form-control" name="pet_id" readonly="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="email" value="<?php echo $qfetch['email']; ?>"
                                                                        class="form-control" name="email" readonly="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="number" value="<?php echo $row['phone']; ?>"
                                                                        class="form-control" name="phone" readonly="">
                                                                </div>
                                                                <div class="form-group">
                                                                   <input type="text" value="<?php echo $qfetch['pet']; ?>"
                                                                        class="form-control" name="pet" readonly="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="state" class="form-control">
                                                                        <option value="PET GROOMING">PET GROOMING</option>
                                                                        <option value="PET APPOINTMENT">PET APPOINTMENT</option>
                                                                        <option value="PET TREATMENT">PET TREATMENT</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group" required>
                                                                    <input id="date1" size="60" type="date"
                                                                        class="form-control" name="date_appointment" required>

                                                                    <?php date_default_timezone_set('Asia/manila'); ?>
                                                                   <input type="hidden" value="<?php echo date('Y-m-d'); ?>" 
                                                                        class="form-control" name="date_created">                                                                             
                                                                </div>
                                                                    <div class="form-group" required>
                                                                    <select class="form-control" name="time">    
                                                                  <?php
                                                                  // SELECT *,appointment.id as valid, office_hours.time as ttime FROM `office_hours` LEFT JOIN appointment ON office_hours.time = appointment.time
                                                                    date_default_timezone_set('Asia/Manila'); 
                                                                    $query = mysqli_query($conn, "SELECT * FROM `office_hours`") or die(mysqli_error());
                                                                    while($fetch = mysqli_fetch_array($query)){

                                                               
                                                                    ?>
                                                                     
                                                       

                                                                         <option value="<?php echo $fetch['time']; ?>" ><?php echo date('h:i:s a', strtotime($fetch['time'])); ?></option>    
                                                                     
                                                                   
                                                                     
                                                                     
                                                                 <?php  } ?>
                                                                 </select>
                                                             </div>
                                                                <div class="form-group">
                                                                    <button type="submit" name="submit" class="btn btn-primary" style="width:100%;">ADD APPOINTMENT</button>
                                                                </div>
                                                            </div>
                                                            
                                                        </form>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn" data-bs-dismiss="modal">
                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Close</span>
                                                    </button>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                        <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal"
                                                            data-bs-target="#archive<?php echo $qfetch['pid']; ?>" >
                                                            ARCHIVE
                                                        </button>
                                   <!--Basic Modal -->
                                    <div class="modal fade text-left" id="archive<?php echo $qfetch['pid']; ?>" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myModalLabel1">ARCHIVE</h5>
                                                    <button type="button" class="close rounded-pill"
                                                        data-bs-dismiss="modal" aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                </div>
                                                <form action="activity/pet_archive.php" method="POST">
                                                <div class="modal-body">

                                                    <p>

                                                    Are you sure you want to archive your pet (<?php echo $qfetch['petname']; ?>)?     
                                                    </p>    
                                                    <input type="hidden" name="pid" value="<?php echo $qfetch['pid']; ?>">

                                                      <div class="col-sm-12 d-flex justify-content-end">
                                                        <button type="submit"
                                                            class="btn btn-primary me-1 mb-1" name="submit" style="width:100%; background-color: lightgray; color: black; border-color: slategray;">CONFIRM</button>
                                                       
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn" data-bs-dismiss="modal">
                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Close</span>
                                                    </button>
                                                </div>
                                                </form>
                                                        <?php } ?>
                                                    <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                                     </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>


                         <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">LIST OF SCHEDULES</h4>

                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                    <table class="table table-striped" id="table1">
                                        <thead>
                                            <tr>
                                                <th>PCODE</th>
                                                <th>NAME</th>
                                                <th>STATE</th>
                                                <th>PET</th>
                                                <th>TIME</th>
                                                <th>DATE</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                    date_default_timezone_set('Asia/Manila'); 
                                                    $query = mysqli_query($conn, "SELECT * FROM `appointment` WHERE email = '".$row['email']."'") or die(mysqli_error());
                                                    while($fetch = mysqli_fetch_array($query)){
                                                        if($fetch['arc_initiator'] != 1){
                                                        
                                            ?>
                                            <tr>
                                                <td><?php echo $fetch['pcode']; ?></td>
                                                <td><?php echo $fetch['fullname']; ?></td>
                                                <td><?php echo $fetch['state']; ?></td>
                                                 <td><?php echo $fetch['pet']; ?></td>
                                                <td><?php echo date("h:i:sa", strtotime($fetch['time'])); ?></td>
                                                <td><?php echo date("F j, Y", strtotime($fetch['date_appointment'])); ?></td>
                                                <td>
                                                    <?php if($fetch['status'] == 'ACTIVE' OR empty($fetch['status'])){ ?>
                                                    <span class="badge bg-success">Active</span>
                                                    <?php } else if($fetch['status'] == 'DONE'){ ?>
                                                    <span class="badge bg-success">Served</span>
                                                    <?php } else if($fetch['status'] == 'RE-SCHEDULED'){ ?>
                                                    <span class="badge" style=" background-color: orangered;">RE-SCHEDULED</span>
                                                    <?php } else if($fetch['status'] == 'CANCEL'){ ?>
                                                    <span class="badge bg-danger">Cancelled</span>
                                                    <?php } else { ?>
                                                     <span class="badge bg-danger">No Show</span>
                                                    <?php } ?> 

                                                     <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal"
                                                        data-bs-target="#update<?php echo $fetch['id']; ?>">
                                                        UPDATE
                                                    </button>

                                                       <!--Basic Modal -->
                                    <div class="modal fade text-left" id="update<?php echo $fetch['id']; ?>" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myModalLabel1">UPDATE APPOINTMENT | <?php echo strtoupper($fetch['pcode']); ?></h5>
                                                    <button type="button" class="close rounded-pill"
                                                        data-bs-dismiss="modal" aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                </div>
                                                <form action="activity/update_appointment.php" method="POST">
                                                <div class="modal-body">

                                                                 <div class="form-group">
                                                                    <input type="text" value="EPAWS-<?php echo rand('6666','9999'); ?>" 
                                                                        class="form-control" name="pcode" readonly="">
                                                                </div>

                                                               <div class="form-group">
                                                                    <input type="text" value="<?php echo $fetch['fullname']; ?>" 
                                                                        class="form-control" name="fullname" readonly="">
                                                                    <input type="hidden" value="<?php echo $fetch['id']; ?>" 
                                                                        class="form-control" name="id">
                                                                </div>
                                                               
                                                                <div class="form-group">
                                                                    <input type="email" value="<?php echo $fetch['email']; ?>"
                                                                        class="form-control" name="email" placeholder="Email" readonly="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="number" value="<?php echo $fetch['phone']; ?>"
                                                                        class="form-control" name="phone" placeholder="Phone Number">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="date" 
                                                                        class="form-control" name="date_appointment" value="<?php echo $fetch['date_appointment']; ?>">

                                                                    <?php date_default_timezone_set('Asia/manila'); ?>
                                                                   <input type="hidden" value="<?php echo date('Y-m-d'); ?>" 
                                                                        class="form-control" name="date_created">                                                                             
                                                                </div>
                                                                
                                                                <?php if($fetch['status'] == 'DONE' || $fetch['status'] == 'CANCEL'){ ?>



                                                                <?php } else {  ?>
                                                                 <div class="form-group">
                                                                   <select name="status" class="form-control">
                                                                       <option value="ACTIVE">ACTIVE</option>
                                                                       <option value="RE-SCHEDULED">RE-SCHEDULED</option>
                                                                       <option value="CANCEL">CANCEL</option>
                                                                   </select>                                                                             
                                                                </div>

                                                                  <div class="form-group">
                                                                    <button type="submit" name="submit" class="btn btn-primary" style="width:100%;">UPDATE</button>
                                                                </div>
                                                                <?php } ?>
                                                </div>
                                                </form>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn" data-bs-dismiss="modal">
                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Close</span>
                                                    </button>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                                </td>
                                            </tr>
                                                <?php } ?>
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

