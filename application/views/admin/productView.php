<?php include "includes/header.php" ?>
<?php include "includes/footer.php" ?>

<div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">All products</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Food items in the database
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">

                                <div class="row">
                                    <div class="col-md-12">
                                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                                    </div>
                                </div>
                                <?php
                                $this->load->helper('form');
                                $error = $this->session->flashdata('error');
                                if($error)
                                {
                                    ?>
                                    <div class="alert alert-danger alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <?php echo $error; ?>                    
                                    </div>
                                <?php }
                                $success = $this->session->flashdata('success');
                                if($success)
                                {
                                    ?>
                                    <div class="alert alert-success alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <?php echo $success; ?>                                       
                                                          
                                    </div>

                                <?php } ?>



                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th>
                                                <th>Image</th>
                                                <!-- <th>Category</th> -->
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Discount</th>
                                               <!--  <th>Descrption</th> -->
                                                <!-- <th>Key</th> -->
                                                <th>Added Date,Time</th>
                                                <th>No: of sales</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             </tr>
						                    <?php
						                    if(!empty($productRecords))
						                    {
						                        foreach($productRecords as $record)
						                        {
						                    ?>
						                    <tr>
						                      <td><?php echo $record->product_id ?></td>
						                      <td><?php echo $record->product_title ?></td>
						                      <!-- <td><?php echo $record->product_image ?></td> -->
                                              <td><img src="<?php echo base_url('uploads/images/').$record->product_image;?>" /> </td>
						                      <!-- <td><?php echo $record->category_id ?></td> -->
						                      <td><?php echo $record->product_quantity ?></td>
						                      <td><?php echo $record->product_price ?></td>
						                      <td><?php echo $record->product_discount ?></td>
						                      <!-- <td><?php echo $record->product_desc ?></td> -->
						                      <!-- <td><?php echo $record->product_key ?></td> -->
						                      <td><?php echo $record->product_addedDtm ?></td>
                                              <td><?php echo $record->product_sales ?></td>
						                      <td class="text-center">
						                          <a class="btn btn-sm btn-info" href="<?php echo base_url()?>index.php/ProductController/displayProducts/<?php echo $record->product_id ?>"><i class="fa fa-pencil"></i></a>

                                                  <br><br>

						                          <a class="btn btn-sm btn-danger deleteUser" href="<?php echo base_url()?>index.php/ProductController/removeProduct/<?php echo $record->product_id ?>" onclick="return confirm('Are you sure you want to delete this item?')" ><i class="fa fa-trash"></i></a>

                                                  <br><br>
                                                <!-- 
                                                  <a class="btn btn-sm btn-success deleteUser" href="#" data-userid="<?php echo $record->product_id; ?>"><i class="fa fa-cart-plus"></i></a> -->
						                      </td>
						                    </tr>
						                    <?php
						                        }
						                    }
						                    ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                                <div class="well">
                                    <h4>All products</h4>
                                    <p>All the above products are displayed in the main website. If you want to remove displaying a product in the main site click the red cart button</p>
                                    <!-- <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/"></a> -->
                                </div>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
</div>

<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
</script>
 <!-- DataTables JavaScript -->
<script src="<?php echo base_url()?>template/js/dataTables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>template/js/dataTables/dataTables.bootstrap.min.js"></script>
