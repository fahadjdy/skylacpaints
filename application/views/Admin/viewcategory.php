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
                            <h4 class="page-title mb-0">View Category</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url('admin'); ?>"><i class="fe fe-shopping-cart mr-2 fs-14"></i>Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="#">View Category</a></li>
                            </ol>
                        </div>
                        <div class="page-rightheader">
                           
                        </div>
                    </div>
                    <!--End Page header-->
                    <!-- Row -->
                    <div class="row text-center">
                        <div class="col-lg-3 col-12">
						<img src="<?php echo base_url('assets/admin/category/'.$data[0]->c_img); ?>" alt="<?php echo $data[0]->c_name; ?>" class="img-fluid w-100">
						 <h2> <?php echo $data[0]->c_name; ?></h2>
						</div>
						<div class="col-lg-9 col-12">
						<p>
							<?php echo $data[0]->c_content; ?>
						</p>
						</div>
						
                    </div>
                    <!-- End Row -->

                </div>
            </div>
            <!-- end app-content-->
        </div>
       
    </div>
	
	<?php  $this->load->view('Admin/footer'); ?>
	<script>
		
		 $(document).ready(function () {
		
            

		  $('#example1').on('click','.delete',function(){
			  var $button = $(this);
			  var c_id = $(this).attr('id');
			
			  $.ajax({
				  url: "<?php echo base_url("Admin/deleteCategory/");?>"+c_id,
				  type: "GET",
				  success: function (data) {

					 $button.parent().parents('tr').remove();
				  }
			  });
		  });

  });
	</script>
