<?php $this->load->view('Admin/header'); ?>
    <!-- Page -->
    <div class="page">
        <div class="page-main">
           <?php $this->load->view('Admin/sidebar'); ?>
            <!--aside closed-->
            <!-- App-Content -->
            <div class="app-content main-content">
                <div class="side-app">
                    <!--app header-->
					<?php $this->load->view('Admin/navbar'); ?>
                    <!--/app header-->
                    <!--Page header-->
                    <div class="page-header">
                        <div class="page-leftheader">
                            <h4 class="page-title mb-0">Add Products</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url('admin'); ?>"><i class="fe fe-file-text mr-2 fs-14"></i>Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <a href="#"></a>Products</li>
                            </ol>
                        </div>
                        <div class="page-rightheader">
                           
                        </div>
                    </div>
                    <!--End Page header-->
                    <!-- Row -->
                    <div class="row row-cards">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Add Products</h3>
                                </div>
                                <div class="card-body">
								<?php echo form_open_multipart('Admin/addSingleProduct')?>
                                    <label for="">Category Name</label>
                                    <select  class="form-control" name="c_id">
										<option>Select Category</option>
										<?php
										$this->db->select('*')->from('category');
										$category= $this->db->get()->result();
										foreach($category as $cat)
										{
											?>
											<option value="<?php echo $cat->c_id; ?>"><?php echo $cat->c_name; ?></option>
											<?php
										}
										?>
										
										
									</select> <br>
                                    <label for="">Products Name</label>
                                    <input type="text" class="form-control" name="p_name"> <br>
									<label for="">Select Image</label>
									<input type="file" class="form-control" name="p_img"> <br>
                                    <label for="">Products Description</label>
                                    <textarea class="content" name="p_content"></textarea>
									<input type="submit" value="Add Now" class="btn btn-info"> 
								<?php echo form_close();?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Row -->




                </div>
            </div>
            <!-- end app-content-->
        </div>
       <?php $this->load->view('Admin/footer'); ?>
