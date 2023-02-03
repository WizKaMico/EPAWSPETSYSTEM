  <!-- Basic Horizontal form layout section start -->
                <section id="basic-horizontal-layouts">
                    <div class="row match-height">
                        
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">PATIENT ARCHIVED RECORD : <?php echo strtoupper($_GET['name']); ?></h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <table class="table table-striped" id="table1">
                                        <thead>
                                            <tr>
                                                <th>PCODE</th>
                                                <th>DATE APPOINTMENT</th>
                                                <th>APPOINTMENT TYPE</th>
                                                <th>STATUS</th>
                                                <th>ACTION</th>

                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                    date_default_timezone_set('Asia/Manila'); 
                                                    $query = mysqli_query($conn, "SELECT * FROM appointment WHERE fullname = '".$_GET['name']."'") or die(mysqli_error());
                                                    while($fetch = mysqli_fetch_array($query)){
                                                        if($fetch['arc'] == 1){
                                            ?>
                                            <tr>
                                                <td><?php echo $fetch['pcode']; ?></td>
                                                <td><?php echo $fetch['date_appointment']; ?></td>
                                                <td><?php echo $fetch['state']; ?></td>
                                                 <td><?php echo $fetch['status']; ?></td>
                                               
                                                <td>

                                                     <?php
                                                    
                                                     $result=mysqli_query($conn, "SELECT * FROM notepad WHERE pid = '".$fetch['id']."'")or die('Error In Session');
                                                     $xfetch=mysqli_fetch_array($result);


                                                   
                                                    ?>

                                                    <?php if(empty($xfetch['pid'])){ ?>
                                                 
                                               <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal"
                                                    data-bs-target="#note<?php echo $fetch['id']; ?>">
                                                    NO VET NOTES TO VIEW
                                                </button>

                                          

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
