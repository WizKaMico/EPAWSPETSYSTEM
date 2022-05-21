 <!-- Basic Horizontal form layout section start -->
                <section id="basic-horizontal-layouts">
                    <div class="row match-height">
                        
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">PATIENT RECORD</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <table class="table table-striped" id="table1">
                                        <thead>
                                            <tr>
                                                <th>NAME</th>
                                                <th>EMAIL</th>
                                                <th>PHONE</th>
                                                <th>TOTAL APPOINTMENTS</th>
                                                <th>ACTION</th>

                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                    date_default_timezone_set('Asia/Manila'); 
                                                    $query = mysqli_query($conn, "SELECT *,count(id) as total FROM appointment GROUP BY fullname") or die(mysqli_error());
                                                    while($fetch = mysqli_fetch_array($query)){
                                            ?>
                                            <tr>
                                                <td><?php echo $fetch['fullname']; ?></td>
                                                <td><?php echo $fetch['email']; ?></td>
                                                 <td><?php echo $fetch['phone']; ?></td>
                                                 <td><?php echo $fetch['total']; ?></td>
                                                <td>
                                                 
                                                    <a href="include/patient_record.php?name=<?php echo $fetch['fullname']; ?>&category=patient" class="btn btn-outline-primary block">VIEW RECORD</a>

                                                     

                                                    <!--Basic Modal -->
                                    
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