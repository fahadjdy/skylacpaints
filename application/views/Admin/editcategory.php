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
                            <h4 class="page-title mb-0">Edit Category</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url('admin'); ?>"><i class="fe fe-file-text mr-2 fs-14"></i>Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <a href="#"></a>Category</li>
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
                                    <h3 class="card-title">Edit Category</h3>
                                </div>
                                <div class="card-body">
								<?php echo form_open_multipart('Admin/editsingleCategory')?>
								<input type="hidden" value="<?php echo $data[0]->c_id; ?>" name="c_id">
                                    <label for="">Category Name</label>
                                    <input type="text" class="form-control" value="<?php echo $data[0]->c_name; ?>" name="c_name"> <br>
									<label for="">Select Image</label>
									<img height="200px" width="200px" src="<?php echo base_url('assets/admin/category/'.$data[0]->c_img); ?>" alt="" srcset="">
									<input type="file" class="form-control" name="c_img"> <br>
                                    <label for="">Category Description</label>
                                    <textarea class="content" name="c_content"><?php echo $data[0]->c_content; ?></textarea>
									<input type="submit" value="Update Now" class="btn btn-info m-2"> 
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
