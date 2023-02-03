  <!-- Basic Horizontal form layout section start -->
                <section id="basic-horizontal-layouts">
                    <div class="row match-height">
                        
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">LIST OF FAQ</h4>

                                    <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal"
                                        data-bs-target="#default">
                                        ADD FAQ
                                    </button>


                                        <!--add hours -->
                                    <div class="modal fade text-left" id="default" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myModalLabel1">ADD AN FAQ</h5>
                                                    <button type="button" class="close rounded-pill"
                                                        data-bs-dismiss="modal" aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="include/activity/add_faq.php" method="POST">
                                                            <div class="modal-body">
                                                               
                                                                <div class="form-group">
                                                                    <input type="text" 
                                                                        class="form-control" name="title" placeholder="Enter FAQ title" required>
                                                                </div>

                                                                <div class="form-group">
                                                                   <textarea class="form-control" name="body"  placeholder="Enter FAQ Content"  required></textarea>
                                                                </div>
                                                               
                                                          
                                                            
                                                                <div class="form-group">
                                                                    <button type="submit" name="submit" class="btn btn-primary" style="width:100%;">ADD FAQ</button>
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
                                                <th>TITLE</th>
                                                <th>CONTENT</th>
                                                <th>CREATED</th>
                                                <th>ACTION</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                    date_default_timezone_set('Asia/Manila'); 
                                                    $query = mysqli_query($conn, "SELECT * FROM `site_faq`") or die(mysqli_error());
                                                    while($fetch = mysqli_fetch_array($query)){
                                            ?>
                                            <tr>
                                                <td><?php echo $fetch['title']; ?></td>
                                                <td><?php echo $fetch['body']; ?></td>
                                                <td><?php echo $fetch['date_created']; ?></td>
                                               <td>
                                                <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal" data-bs-target="#default<?php echo $fetch['id']; ?>">EDIT</button>
                                                <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal" data-bs-target="#delete<?php echo $fetch['id']; ?>">DELETE</button>
                                               </td>
                                            </tr>

                                        <div class="modal fade text-left" id="default<?php echo $fetch['id']; ?>" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myModalLabel1">EDIT FAQ</h5>
                                                    <button type="button" class="close rounded-pill"
                                                        data-bs-dismiss="modal" aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="include/activity/update_faq.php" method="POST">
                                                            <div class="modal-body">
                                                               
                                                                <div class="form-group">
                                                                    <input type="text" 
                                                                        class="form-control" name="title" value="<?php echo $fetch['title']; ?>" required>
                                                                
                                                                        <input type="hidden" 
                                                                        class="form-control" name="id" value="<?php echo $fetch['id']; ?>" required>
                                                                
                                                                </div>

                                                                <div class="form-group">
                                                                   <textarea class="form-control" name="body"   required><?php echo $fetch['body']; ?></textarea>
                                                                </div>
                                                               
                                                          
                                                            
                                                                <div class="form-group">
                                                                    <button type="submit" name="submit" class="btn btn-primary" style="width:100%;">UPDATE FAQ</button>
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

                                         <div class="modal fade text-left" id="delete<?php echo $fetch['id']; ?>" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myModalLabel1">DELETE FAQ</h5>
                                                    <button type="button" class="close rounded-pill"
                                                        data-bs-dismiss="modal" aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="include/activity/delete_faq.php" method="POST">
                                                            <div class="modal-body">
                                                               
                                                                <div class="form-group">
                                                                  
                                                                        <input type="hidden" 
                                                                        class="form-control" name="id" value="<?php echo $fetch['id']; ?>" required>
                                                                
                                                                </div>

                                                              
                                                            
                                                                <div class="form-group">
                                                                    <button type="submit" name="submit" class="btn btn-primary" style="width:100%;">DELETE FAQ</button>
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
                                            
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     
                </section>
                <!-- // Basic Horizontal form layout section end -->