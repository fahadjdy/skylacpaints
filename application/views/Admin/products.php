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
                            <h4 class="page-title mb-0">Products List</h4>
                            <ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?php echo base_url('admin'); ?>"><i class="fe fe-layers mr-2 fs-14"></i>Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="#">Products</a></li>
                            </ol>
                        </div>
                        <div class="page-rightheader">
                            <div class="btn btn-list">
                                <a href="<?php echo base_url('Admin/addproducts') ?>" class="btn btn-info"><i class="fe fe-plus"></i> Add </a>
                            </div>
                        </div>
                    </div>
                    <!--End Page header-->
                    <!-- Row -->
					<div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Basic DataTable</div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-nowrap" id="example1">
                                            <thead>
                                                <tr>
                                                    <th class="wd-15p border-bottom-0">Sr.no.</th>
                                                    <th class="wd-15p border-bottom-0">Category name</th>
                                                    <th class="wd-20p border-bottom-0">Content</th>
                                                    <th class="wd-10p border-bottom-0">View</th>
                                                    <th class="wd-25p border-bottom-0">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
											<?php 
												$row = 1;
												  foreach($data as $product) 
												  {
													  ?>
												<tr>
                                                    <td  style="width: 5% !important;"><?php echo $row; $row++; ?></td>
                                                    <td  style="width: 10% !important;"><?php echo $product->p_name; ?></td>
                                                    <td  style="width: 100% !important;overflow: hidden !important; overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 3;line-clamp: 3; -webkit-box-orient: vertical;" >
															<?php echo $product->p_content; ?>
													</td>
                                                    <td  style="width: 5% !important;" > <a href="<?php echo base_url('Admin/viewproduct/'.$product->p_id); ?>"> <i class="fa fa-eye btn btn-dark"></i> </a></td>
                                                    <td  style="width: 10% !important;" > <a href="<?php echo base_url('Admin/editproduct/'.$product->p_id); ?>"> <i class="fa fa-edit btn btn-primary"></i> </a><i class="fa fa-trash btn btn-danger delete" id="<?php echo $product->p_id; ?>"></i></td>
                                                </tr>
												
													  <?php
												  }
												?>
                                            </tbody>
                                        </table>
                                    </div>
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
	<script>
		
		 $(document).ready(function () {
		
            

		  $('#example1').on('click','.delete',function(){
			  var $button = $(this);
			  var p_id = $(this).attr('id');
			
			  $.ajax({
				  url: "<?php echo base_url("Admin/deleteProduct/");?>"+p_id,
				  type: "GET",
				  success: function (data) {

					 $button.parent().parents('tr').remove();
				  }
			  });
		  });

  });
	</script>
