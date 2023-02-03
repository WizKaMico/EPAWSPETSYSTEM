     <!-- Basic Horizontal form layout section start -->
                <section id="basic-horizontal-layouts">
                    <div class="row match-height">
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">CHART FOR [<?php echo date("F j, Y", strtotime(date('Y-m-d'))); ?>]</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">

                                        <?php 

                                        $sql = "SELECT status, count(*) as number FROM appointment WHERE date_appointment='".date('Y-m-d')."' GROUP BY status";
                                        $query = $conn->query($sql);


                                        ?>

                                        <div id="piechart" style="width: 100%; height: 500px;"></div>
 
                                        <!-- Load our Scripts -->
                                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
                                        <script type="text/javascript">  
                                            google.charts.load('current', {'packages':['corechart']});  
                                            google.charts.setOnLoadCallback(drawChart);  
                                            function drawChart(){  
                                            var data = google.visualization.arrayToDataTable([  
                                                        ['Gender', 'Number'],  
                                                        <?php  
                                                            while($row = $query->fetch_assoc()){  
                                                                echo "['".$row["status"]."', ".$row["number"]."],";  
                                                            }  
                                                        ?>  
                                                    ]);  
                                            var options = {  
                                                        title: 'TODAYS STATUS PERCENTAGE',  
                                                        //is3D:true,  
                                                        pieHole: 0.4  
                                                    };  
                                            var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                                            chart.draw(data, options);  
                                        }  
                                        </script>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">ANALYTICS</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">

                                        <table class="table table-striped" id="table1">
                                        <thead>
                                            <tr>
                                                <th>STATUS</th>
                                                <th>COUNT</th>

                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                    date_default_timezone_set('Asia/Manila'); 
                                                    $query = mysqli_query($conn, "SELECT status, count(*) as number FROM appointment WHERE date_appointment='".date('Y-m-d')."' GROUP BY status") or die(mysqli_error());
                                                    while($fetch = mysqli_fetch_array($query)){
                                            ?>
                                            <tr>
                                                <td><?php echo $fetch['status']; ?></td>
                                                <td><?php echo $fetch['number']; ?></td>
                                              
                                              
                                                
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
