 <!-- Basic Horizontal form layout section start -->
                <section id="basic-horizontal-layouts">
                    <div class="row match-height">
                        
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">PET RECORD</h4>
                                        <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal"
                                        > <a href="home.php?category=archive">
                                                VIEW ARCHIVED PET RECORDS
                                        </a></button>
                                </div>
                                
                                
                                <div class="card-content">
                                    <div class="card-body">
                                        <table class="table table-striped" id="table1">
                                        <thead>
                                            <tr>
                                                <th>NAME</th>
                                                <th>PET</th>
                                                <th>EMAIL</th>
                                                <th>PHONE</th>
                                                <th>TOTAL APPOINTMENTS</th>
                                                <th>ACTION</th>

                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                    date_default_timezone_set('Asia/Manila'); 
                                                    $query = mysqli_query($conn, "SELECT *,count(id) as total FROM appointment WHERE email = '".$row['email']."' GROUP BY fullname") or die(mysqli_error());
                                                    while($fetch = mysqli_fetch_array($query)){
                                                        if($fetch['arc'] != 1){
                                            ?>
                                            <tr>
                                                <td><?php echo $fetch['fullname']; ?></td>
                                                  <td><?php echo $fetch['pet']; ?></td>
                                                <td><?php echo $fetch['email']; ?></td>
                                                 <td><?php echo $fetch['phone']; ?></td>
                                                 <td><?php echo $fetch['total']; ?></td>
                                                <td>
                                                 
                                                    <a href="home.php?name=<?php echo $fetch['fullname']; ?>&category=record" class="btn btn-outline-primary block">VIEW RECORD</a>
                                                    <?php 
                                                        if($fetch['arc_initiator'] == 1){
                                                    ?>
                                                        <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal"
                                                            data-bs-target="#archive<?php echo $fetch['pet_id']; ?>">
                                                            ARCHIVE
                                                        </button>

                                                    <!--Basic Modal -->
                                    <div class="modal fade text-left" id="archive<?php echo $fetch['pet_id']; ?>" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myModalLabel1">ARCHIVE RECORD</h5>
                                                    <button type="button" class="close rounded-pill"
                                                        data-bs-dismiss="modal" aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                </div>
                                                <form action="activity/petrecord_archive.php" method="POST">
                                                <div class="modal-body">

                                                    <p>

                                                    Are you sure you want to archive your pet(<?php echo $fetch['fullname']; ?>) records?     
                                                    </p>    
                                                    <input type="hidden" name="pet_id" value="<?php echo $fetch['pet_id']; ?>">

                                                      <div class="col-sm-12 d-flex justify-content-end">
                                                        <button type="submit"
                                                            class="btn btn-primary me-1 mb-1" name="submit" style="width:100%;">CONFIRM</button>
                                                       
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn" data-bs-dismiss="modal">
                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Close</span>
                                                    </button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                                            <?php } ?>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </td>                                                
                                            </tr>                                            
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic Horizontal form layout section end -->