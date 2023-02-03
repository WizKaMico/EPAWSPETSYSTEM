 <!-- Basic Horizontal form layout section start -->
                <section id="basic-horizontal-layouts">
                    <div class="row match-height">
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">CREATE USER CREDENTIALS</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-horizontal" method="POST" action="activity/users.php">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>USERNAME</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="first-name" class="form-control"
                                                            name="username" placeholder="Enter Username">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>PASSWORD</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="password" id="email-id" class="form-control"
                                                            name="password" placeholder="Enter Password">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>FULLNAME</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="contact-info" class="form-control"
                                                            name="name" placeholder="Enter Fullname">
                                                    </div>


                                                    <div class="col-md-4">
                                                        <label>DESIGNATION</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                         <select class="form-control" name="designation">
                                                             <option value="DOCTOR">DOCTOR</option>
                                                             <option value="STAFF">STAFF</option>
                                                         </select>
                                                    </div>
                                                    
                                                    <div class="col-sm-12 d-flex justify-content-end">
                                                        <button type="submit"
                                                            class="btn btn-primary me-1 mb-1" name="submit">Submit</button>
                                                        <button type="reset"
                                                            class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">LIST OF USERS</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <table class="table table-striped" id="table1">
                                        <thead>
                                            <tr>
                                                <th>NAME</th>
                                                <th>POSITION</th>
                                                <th>ACTION</th>

                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                    date_default_timezone_set('Asia/Manila'); 
                                                    $query = mysqli_query($conn, "SELECT * FROM users") or die(mysqli_error());
                                                    while($fetch = mysqli_fetch_array($query)){
                                            ?>
                                            <tr>
                                                <td><?php echo $fetch['name']; ?></td>
                                                <td><?php echo $fetch['designation']; ?></td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal"
                                                        data-bs-target="#update<?php echo $fetch['user_id']; ?>">
                                                        UPDATE
                                                    </button>

                                                      <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal"
                                                        data-bs-target="#delete<?php echo $fetch['user_id']; ?>">
                                                        DELETE
                                                    </button>

                                                      <!--Basic Modal -->
                                    <div class="modal fade text-left" id="delete<?php echo $fetch['user_id']; ?>" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myModalLabel1">PROFILE INFORMATION</h5>
                                                    <button type="button" class="close rounded-pill"
                                                        data-bs-dismiss="modal" aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                </div>
                                                <form action="activity/users_delete.php" method="POST">
                                                <div class="modal-body">

                                                    <p>

                                                    Are you sure you want to delete <?php echo $fetch['name']; ?> ?     
                                                    </p>    
                                                    <input type="hidden" name="user_id" value="<?php echo $fetch['user_id']; ?>">

                                                      <div class="col-sm-12 d-flex justify-content-end">
                                                        <button type="submit"
                                                            class="btn btn-primary me-1 mb-1" name="submit" style="width:100%;">DELETE</button>
                                                       
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

                                                    <!--Basic Modal -->
                                    <div class="modal fade text-left" id="update<?php echo $fetch['user_id']; ?>" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myModalLabel1">PROFILE INFORMATION</h5>
                                                    <button type="button" class="close rounded-pill"
                                                        data-bs-dismiss="modal" aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                </div>
                                                <form action="activity/users_update.php" method="POST">
                                                <div class="modal-body">

                                                     <div class="col-md-4">
                                                        <label>USERNAME</label>
                                                    </div>
                                                    <div class="col-md-12 form-group">
                                                          <input type="hidden" id="first-name" class="form-control"
                                                            name="user_id" value="<?php echo $fetch['user_id']; ?>">
                                                        <input type="text" id="first-name" class="form-control"
                                                            name="username" value="<?php echo $fetch['username']; ?>">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>PASSWORD</label>
                                                    </div>
                                                    <div class="col-md-12 form-group">
                                                        <input type="password" id="email-id" class="form-control"
                                                            name="password" value="<?php echo $fetch['password']; ?>">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>FULLNAME</label>
                                                    </div>
                                                    <div class="col-md-12 form-group">
                                                        <input type="text" id="contact-info" class="form-control"
                                                            name="name" value="<?php echo $fetch['name']; ?>">
                                                    </div>


                                                    <div class="col-md-4">
                                                        <label>DESIGNATION</label>
                                                    </div>
                                                    <div class="col-md-12 form-group">
                                                         <select class="form-control" name="designation">
                                                             <option value="DOCTOR">DOCTOR</option>
                                                             <option value="STAFF">STAFF</option>
                                                         </select>
                                                    </div>


                                                      <div class="col-sm-12 d-flex justify-content-end">
                                                        <button type="submit"
                                                            class="btn btn-primary me-1 mb-1" name="submit" style="width:100%;">UPDATE</button>
                                                       
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