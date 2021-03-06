<?php include "includes/header.php" ?>
<?php include "includes/footer.php" ?>



<div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">New Products</h3>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-10">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Add new Product
                            </div>
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
                                        <?php echo "                               "?>
                                        <button type="submit" class="btn btn-success" onclick="location.href='<?php echo base_url();?>index.php/PageController/viewLastProduct'">View the product</button>                  
                                    </div>

                                <?php } ?>

                                <div class="row">

                                	<form role="form" method="POST" enctype="multipart/form-data" action="<?php echo base_url()?>index.php/ProductController/addNewProduct">
                                    	<div class="col-xs-12 col-lg-12">
                                        
                                            
                                            <div class="col-sm-6 col-xs-12">
	                                            <div class="form-group">
	                                                <label>Title</label>
	                                                <input class="form-control" placeholder="Enter product name" name="product_title" maxlength="40" required="">
	                                            </div>
                                           </div>

                                           <div class="col-sm-6 col-xs-12">
	                                           <div class="form-group">
	                                                <label>Add an image</label>
	                                                <input type="file" name="picture">
	                                            </div>
                                            </div>
                                        </div>
                                           
                                        <div class="col-xs-12 col-lg-12">

                                           <div class="col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <label>Category</label>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="catOptions" id="optionsRadios1" value="1" checked>Gingerly Rolls
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="catOptions" id="optionsRadios2" value="2">Gingerly Balls
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="catOptions" id="optionsRadios3" value="3">Other
                                                    </label>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                           
                                           
                                        <div class="col-xs-12 col-lg-12">
                                        
                                            
                                            <div class="col-sm-4 col-xs-12">
	                                            <div class="form-group">
	                                                <label>Quantity(Weight)</label>
	                                                <input class="form-control" placeholder="Quantity" name="product_quantity">
	                                            </div>
                                           </div>

                                           <div class="col-sm-4 col-xs-12">
	                                            <div class="form-group">
	                                                <label>Price(Rs)</label>
	                                                <input class="form-control" placeholder="Price" name="product_price">
	                                            </div>
                                           </div>

                                           <div class="col-sm-4 col-xs-12">
	                                            <div class="form-group">
	                                                <label>Discouts(if any)(Rs)</label>
	                                                <input class="form-control" pattern="\d*" placeholder="Discount" name="product_discount">
	                                            </div>
                                           </div>

                                        </div>

                                        <div class="col-xs-12 col-lg-12">
                                        
                                            
                                            <div class="col-sm-8 col-xs-12">
	                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control" rows="3" name="product_desc"></textarea>
                                            </div>
                                           </div>

                                           <div class="col-sm-4 col-xs-12">
	                                            <div class="form-group">
	                                                <label>Keyword</label>
	                                                <input class="form-control" placeholder="Keyword" name="product_key">
	                                            </div>
                                           </div>                                          

                                        </div>

                                        <div class="col-xs-12 col-lg-12">

	                                         <div class="col-xs-2">
	                                			<button type="submit" class="btn btn-block btn-success" name="addItem">Submit</button>
	                                			
	                            			</div>
                            			      <div class="col-xs-2">
	                                			
	                                			<button type="reset" class="btn btn-primary">Reset</button>
	                            			</div>
	                            		</div>                                   
                                            
                                     </form>
                                    </div>
                                  
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /#page-wrapper -->
           