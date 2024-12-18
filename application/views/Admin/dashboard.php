<?php  $this->load->view('Admin/header'); ?>
    <!-- Page -->
    <div class="page">
        <div class="page-main">
          <?php  $this->load->view('Admin/sidebar'); ?>
            <!--aside closed-->
            <!-- App-Content -->
            <div class="app-content main-content">
                <div class="side-app">
                    <!--app header-->
                    <?php  $this->load->view('Admin/navbar'); ?>
                    <!--/app header-->
                    <!--Page header-->
                    <div class="page-header">
                        <div class="page-leftheader">
                            <h4 class="page-title mb-0">Dashboard</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<a href="<?php echo base_url('admin'); ?>"><i class="fe fe-layers mr-2 fs-14"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="#">Dashboard</a></li>
                            </ol>
                        </div>
                        <div class="page-rightheader">
                            <div class="btn btn-list">
                                <!-- <a href="#" class="btn btn-info"><i class="fe fe-plus"></i> Add </a> -->
                            </div>
                        </div>
                    </div>
                    <!--End Page header-->
                    <!-- Row -->
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card text-center">
                                <div class="card-body">
                                  <b> Total Category</b> <br> <?php echo $data['category']; ?>
                                </div>
                            </div>
                        </div>
						<div class="col-lg-3">
                            <div class="card text-center">
                                <div class="card-body">
                                  <b> Total Products</b> <br> <?php echo $data['product']; ?>
                                </div>
                            </div>
                        </div>
						<div class="col-lg-3">
                            <div class="card text-center">
                                <div class="card-body">
                                  <b> Total Slider</b> <br> <?php echo $data['slider']; ?>
                                </div>
                            </div>
                        </div>
						
                    </div>
                    <!-- End Row -->

                </div>
            </div>
            <!-- end app-content-->
        </div>
       
    </div>
	<?php  $this->load->view('Admin/footer'); ?>
