  <!-- Basic Horizontal form layout section start -->
                <section id="basic-horizontal-layouts">
                    <div class="row match-height">
                        
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">LIST OF HOLIDAY</h4>

                                    <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal"
                                        data-bs-target="#default">
                                        ADD HOLIDAY
                                    </button>


                                        <!--add hours -->
                                    <div class="modal fade text-left" id="default" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myModalLabel1">ADD A HOLIDAY</h5>
                                                    <button type="button" class="close rounded-pill"
                                                        data-bs-dismiss="modal" aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="activity/holiday.php" method="POST">
                                                            <div class="modal-body">
                                                               
                                                                <div class="form-group">
                                                                    <input type="text" 
                                                                        class="form-control" name="title" placeholder="Enter Holiday" required>
                                                                </div>

                                                                <div class="form-group">
                                                                    <input type="date" 
                                                                        class="form-control" name="start" placeholder="Enter Start" required>
                                                                </div>

                                                                <div class="form-group">
                                                                    <input type="date" 
                                                                        class="form-control" name="end" placeholder="Enter End" required>
                                                                </div>
                                                               
                                                          
                                                            
                                                                <div class="form-group">
                                                                    <button type="submit" name="submit" class="btn btn-primary" style="width:100%;">ADD HOLIDAY</button>
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
                                                <th>HOLIDAY</th>
                                                <th>START</th>
                                                <th>END</th>
                                              <!--   <th>ACTION</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                    date_default_timezone_set('Asia/Manila'); 
                                                    $query = mysqli_query($conn, "SELECT * FROM `tbl_events` WHERE title like '%HOLIDAY%'") or die(mysqli_error());
                                                    while($fetch = mysqli_fetch_array($query)){
                                            ?>
                                            <tr>
                                                <td><?php echo $fetch['title']; ?></td>
                                                <td><?php echo $fetch['start']; ?></td>
                                                <td><?php echo $fetch['end']; ?></td>
                                               
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