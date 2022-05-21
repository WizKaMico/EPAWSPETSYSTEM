  <!-- Basic Horizontal form layout section start -->
                <section id="basic-horizontal-layouts">
                    <div class="row match-height">
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">MY CALENDAR</h4>
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
                                    <h4 class="card-title">LIST OF SCHEDULE TODAY</h4>

                                    <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal"
                                        data-bs-target="#default">
                                        SCHEDULE AN APPOINTMENT
                                    </button>

                                    <a href="include/export.php" class="btn btn-outline-primary block">DOWNLOAD CSV FOR TODAY</a>

                                       <!--Basic Modal -->
                                    <div class="modal fade text-left" id="default" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myModalLabel1">ADD AN APPOINTMENT</h5>
                                                    <button type="button" class="close rounded-pill"
                                                        data-bs-dismiss="modal" aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="activity/add_appointment.php" method="POST">
                                                            <div class="modal-body">
                                                               
                                                                <div class="form-group">
                                                                    <input type="text" value="PATIENT-<?php echo rand('6666','9999'); ?>" 
                                                                        class="form-control" name="pcode" readonly="">
                                                                </div>
                                                               
                                                                <div class="form-group">
                                                                    <input type="text" placeholder="Patient Name"
                                                                        class="form-control" name="fullname">
                                                                </div>
                                                               
                                                                <div class="form-group">
                                                                    <input type="email" placeholder="Email Address"
                                                                        class="form-control" name="email">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="number" placeholder="Phone Number"
                                                                        class="form-control" name="phone">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="date" 
                                                                        class="form-control" name="date_appointment">

                                                                    <?php date_default_timezone_set('Asia/manila'); ?>
                                                                   <input type="hidden" value="<?php echo date('Y-m-d'); ?>" 
                                                                        class="form-control" name="date_created">                                                                             
                                                                </div>
                                                                <div class="form-group">
                                                                    <button type="submit" name="submit" class="btn btn-primary" style="width:100%;">ADD APPOINTMENT</button>
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
                                                <th>PCODE</th>
                                                <th>Name</th>

                                                <th>Appointment</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                    date_default_timezone_set('Asia/Manila'); 
                                                    $query = mysqli_query($conn, "SELECT * FROM `appointment` WHERE date_appointment = '".date('Y-m-d')."'") or die(mysqli_error());
                                                    while($fetch = mysqli_fetch_array($query)){
                                            ?>
                                            <tr>
                                                <td><?php echo $fetch['pcode']; ?></td>
                                                <td><?php echo $fetch['fullname']; ?></td>
                                              
                                                <td><?php echo date("F j, Y", strtotime($fetch['date_appointment'])); ?></td>
                                                <td>
                                                    <?php if($fetch['status'] == 'ACTIVE' OR empty($fetch['status'])){ ?>
                                                    <span class="badge bg-success">Active</span>
                                                    <?php } else if($fetch['status'] == 'DONE'){ ?>
                                                    <span class="badge bg-success">Served</span>
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
                                                                    <input type="text" value="PATIENT-<?php echo rand('6666','9999'); ?>" 
                                                                        class="form-control" name="pcode" readonly="">
                                                                </div>

                                                               <div class="form-group">
                                                                    <input type="text" value="<?php echo $fetch['fullname']; ?>" 
                                                                        class="form-control" name="fullname">
                                                                    <input type="hidden" value="<?php echo $fetch['id']; ?>" 
                                                                        class="form-control" name="id">
                                                                </div>
                                                               
                                                                <div class="form-group">
                                                                    <input type="email" value="<?php echo $fetch['email']; ?>"
                                                                        class="form-control" name="email">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="number" value="<?php echo $fetch['phone']; ?>"
                                                                        class="form-control" name="phone">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="date" 
                                                                        class="form-control" name="date_appointment" value="<?php echo date('Y-m-d'); ?>">

                                                                    <?php date_default_timezone_set('Asia/manila'); ?>
                                                                   <input type="hidden" value="<?php echo date('Y-m-d'); ?>" 
                                                                        class="form-control" name="date_created">                                                                             
                                                                </div>
                                                                
                                                                <?php if($fetch['status'] == 'DONE'){ ?>



                                                                <?php } else {  ?>
                                                                 <div class="form-group">
                                                                   <select name="status" class="form-control">
                                                                       <option value="ACTIVE">ACTIVE</option>
                                                                       <option value="RE-SCHEDULED">RE-SCHEDULED</option>
                                                                       <option value="NO SHOW">NO SHOW</option>
                                                                        <option value="DONE">DONE</option>
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
                                            
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic Horizontal form layout section end -->