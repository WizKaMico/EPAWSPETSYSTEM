  <!-- Basic Horizontal form layout section start -->
                <section id="basic-horizontal-layouts">
                    <div class="row match-height">
                        
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">LIST OF PRODUCT</h4>

                                    <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal"
                                        data-bs-target="#default">
                                        ADD PRODUCT
                                    </button>

                                      <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal"
                                        data-bs-target="#category">
                                        ADD CATEGORY
                                    </button>


                                        <!--add product -->
                                    <div class="modal fade text-left" id="default" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myModalLabel1">ADD AN PRODUCT</h5>
                                                    <button type="button" class="close rounded-pill"
                                                        data-bs-dismiss="modal" aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="include/activity/add_product.php" method="POST" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                               
                                                                <div class="form-group">
                                                                    <input type="text" 
                                                                        class="form-control" name="name" placeholder="Product Name" required>
                                                                </div>

                                                                <div class="form-group">
                                                                    <select class="form-control" name="category" required>
                                                                          <?php
                                                                                    $queries = mysqli_query($conn, "SELECT * FROM `tbl_category`") or die(mysqli_error());
                                                                                    while($categ_fetch = mysqli_fetch_array($queries)){
                                                                            ?>
                                                                        <option value="<?php echo $categ_fetch['category']; ?>"><?php echo str_replace("_", " ",$categ_fetch['category']); ?></option>
                                                                    <?php } ?>
                                                                    </select>
                                                                </div>

                                                                <div class="form-group">
                                                                    <input type="text" 
                                                                        class="form-control" name="code" value="<?php echo 'EPAWS'; echo '-'; echo rand(6666,9999); ?>" required="" readonly="">
                                                                </div>
                                                               
                                                                 <div class="form-group">
                                                                    <textarea name="description" class="form-control" required="" rows="5" cols="10" placeholder="Enter Description"></textarea>
                                                                </div>
                                                               
                                                                <div class="form-group">
                                                                    <input type="file" 
                                                                        class="form-control" name="photo" required="">
                                                                </div>

                                                                <div class="form-group">
                                                                    <input type="number" 
                                                                        class="form-control" name="price" placeholder="Enter Price" required="">
                                                                </div>

                                                                <div class="form-group">
                                                                    <input type="number" 
                                                                        class="form-control" name="item_quantity" placeholder="Enter Quantity" required="">
                                                                </div>
                                                          
                                                            
                                                                <div class="form-group">
                                                                    <button type="submit" name="submit" class="btn btn-primary" style="width:100%;">ADD PRODUCT</button>
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


                                           <!--add category -->
                                    <div class="modal fade text-left" id="category" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myModalLabel1">ADD CATEGORY</h5>
                                                    <button type="button" class="close rounded-pill"
                                                        data-bs-dismiss="modal" aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="include/activity/add_category.php" method="POST">
                                                            <div class="modal-body">
                                                               
                                                                <div class="form-group">
                                                                    <input type="text" 
                                                                        class="form-control" name="category_name" placeholder="Category Name" required>
                                                                </div>
                                                            
                                                                <div class="form-group">
                                                                    <button type="submit" name="submit" class="btn btn-primary" style="width:100%;">ADD CATEGORY</button>
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
                                                <th>PRODUCT NAME</th>
                                                <th>CATEGORY</th>
                                                <th>CODE</th>
                                                <th>PRICE</th>
                                                <th>STOCK QUANTITY</th>
                                                <th>REMAINING</th>
                                                <th>STATUS</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                    date_default_timezone_set('Asia/Manila'); 
                                                    $query = mysqli_query($conn, "SELECT * FROM `tbl_product`") or die(mysqli_error());
                                                    while($fetch = mysqli_fetch_array($query)){
                                                        $id = $fetch['id'];    
                                                        $product_qty=mysqli_query($conn, "SELECT *,SUM(tbl_order_item.quantity) as total FROM `tbl_order_item` LEFT JOIN tbl_order ON tbl_order_item.order_id =  tbl_order.id WHERE tbl_order_item.product_id ='$id' AND tbl_order.order_status != 'CANCEL'");
                                                        $p_quantity=mysqli_fetch_array($product_qty);

                                                        $remaining_stock =   $fetch['item_quantity'] - $p_quantity['total'];
                                            ?>
                                            <tr>
                                                <td><?php echo $fetch['name']; ?></td>
                                                <td><?php echo $fetch['category']; ?></td>
                                                <td><?php echo $fetch['code']; ?></td>
                                                <td><?php echo $fetch['price']; ?></td>
                                                <td><?php echo $fetch['item_quantity']; ?></td>
                                                 <td><?php echo $remaining_stock; ?></td>
                                                 <?php if($remaining_stock > 10 || $remaining_stock == 10){ ?>
                                                 <td>AVAILABLE</td>
                                                 <?php } else if($remaining_stock > 5 && $remaining_stock < 10){ ?>  
                                                 <td>RESTOCK NOW</td>
                                                 <?php } else if($remaining_stock < 0 || $remaining_stock == 0){ ?>  
                                                 <td>OUT OF STOCK</td>
                                                 <?php } else { ?>
                                                 <td>CRITICAL TO LOW</td>
                                                 <?php } ?>       

                                                <td>  <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal"
                                                    data-bs-target="#default<?php echo $fetch['id']; ?>">
                                                    EDIT
                                                </button>

                                                <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal"
                                                    data-bs-target="#delete<?php echo $fetch['id']; ?>">
                                                    DELETE
                                                </button>
                                            </td>

                                    <div class="modal fade text-left" id="default<?php echo $fetch['id']; ?>" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myModalLabel1">EDIT PRODUCT</h5>
                                                    <button type="button" class="close rounded-pill"
                                                        data-bs-dismiss="modal" aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="include/activity/update_product.php" method="POST" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                               
                                                                <div class="form-group">
                                                                    <input type="text" 
                                                                        class="form-control" name="name" placeholder="Product Name" value="<?php echo $fetch['name']; ?>" required>
                                                                        <input type="text" 
                                                                        class="form-control" name="id" placeholder="Product Name" value="<?php echo $fetch['id']; ?>" required>
                                                                </div>

                                                                <div class="form-group">
                                                                    <select class="form-control" name="category" required>
                                                                           <option value="<?php echo $fetch['category']; ?>"><?php echo str_replace("_", " ",$fetch['category']); ?> (CURRENT)</option>
                                                                          <?php
                                                                                    $quer = mysqli_query($conn, "SELECT * FROM `tbl_category`") or die(mysqli_error());
                                                                                    while($categx_fetch = mysqli_fetch_array($quer)){
                                                                            ?>
                                                                        <option value="<?php echo $categx_fetch['category']; ?>"><?php echo str_replace("_", " ",$categx_fetch['category']); ?></option>
                                                                    <?php } ?>
                                                                    </select>
                                                                </div>

                                                                <div class="form-group">
                                                                    <input type="text" 
                                                                        class="form-control" name="code" value="<?php echo $fetch['code']; ?>" required="" readonly="">
                                                                </div>
                                                               
                                                                 <div class="form-group">
                                                                    <textarea name="description" class="form-control" required="" rows="5" cols="10" placeholder="Enter Description"><?php echo $fetch['description']; ?></textarea>
                                                                </div>
                                                               
                                                               
                                                                <div class="form-group">
                                                                    <input type="number" 
                                                                        class="form-control" name="price" placeholder="Enter Price" value="<?php echo $fetch['price']; ?>" required="">
                                                                </div>

                                                                <div class="form-group">
                                                                    <input type="number" 
                                                                        class="form-control" name="item_quantity" placeholder="Enter Quantity" value="<?php echo $fetch['item_quantity']; ?>" required="">
                                                                </div>
                                                          
                                                            
                                                                <div class="form-group">
                                                                    <button type="submit" name="submit" class="btn btn-primary" style="width:100%;">UPDATE PRODUCT</button>
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
                                                    <h5 class="modal-title" id="myModalLabel1">DELETE PRODUCT</h5>
                                                    <button type="button" class="close rounded-pill"
                                                        data-bs-dismiss="modal" aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="include/activity/delete_product.php" method="POST">
                                                            <div class="modal-body">
                                                               
                                                                <div class="form-group">
                                                                  
                                                                        <input type="hidden" 
                                                                        class="form-control" name="id" value="<?php echo $fetch['id']; ?>" required>
                                                                
                                                                </div>

                                                              
                                                            
                                                                <div class="form-group">
                                                                    <button type="submit" name="submit" class="btn btn-primary" style="width:100%;">DELETE ITEM</button>
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