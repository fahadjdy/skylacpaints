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
                <?php $this->load->view('Admin/navbar');  ?>
                    <!--/app header-->
                    <!--Page header-->
                    <div class="page-header">
                        <div class="page-leftheader">
                            <h4 class="page-title mb-0">Video Gallery</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url('admin'); ?>"><i class="fe fe-layers mr-2 fs-14"></i>Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="#">Video Gallery</a></li>
                            </ol>
                        </div>
                        <div class="page-rightheader">
                           <button class="btn btn-primary" data-toggle="modal" data-target="#new-gallery"> <i class="fa fa-plus"></i> Add</button>
                        </div>
                    </div>
                    <!--End Page header-->
                    <!-- Row -->
                    <div class="demo-gallery card">
                        <div class="card-header">
                            <div class="card-title">Videos</div>
                            <div class="card-options ">
                                <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                            </div>
                        </div>
						 
                        <div class="card-body">
                            <ul id="lightgallery" class="list-unstyled row">
								<?php
								
								 foreach($data as $vg)
								 {
									 ?>
									  <li class="col-xs-6 col-sm-4 col-md-3 text-center" >
                                  				<iframe width="100%" height="250" src="<?php echo $vg->vg_url; ?>"></iframe>
                                  				<button class="btn btn-danger m-2 delete" id="<?php echo $vg->vg_id; ?>"> <i class="fa fa-trash"></i> </button>
                              		  </li>
									 
									 <?php
								 }
								?>
                               
                                
                              
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <!-- end app-content-->
        </div>
       <?php $this->load->view('Admin/footer'); ?>
	   <script>
		
		$(document).ready(function () {
	   
		   

		 $('#lightgallery').on('click','.delete',function(){
			 var $button = $(this);
			 var vg_id = $(this).attr('id');
		   
			 $.ajax({
				 url: "<?php echo base_url("Admin/deleteVgallery/");?>"+vg_id,
				 type: "GET",
				 success: function (data) {

					$button.parent().remove();
				 }
			 });
		 });

 });
   </script>

<div id="new-gallery" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="my-modal-title">New Gallery Image</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <?php echo form_open_multipart('Admin/addVgallery');?>
                    <div class="form-group">
                        <label for="vg_name"> Gallery Video</label>
                        <input id="vg_name" required autocomplete="off" class="form-control form-control-sm" type="text" style="border-radius: unset !important;" name="vg_name">
                    </div>
                    <div class="form-group">
                        <label for="vg_url" style="opacity: 1 !important;">Video Url(embed)</label>
						<input id="vg_url" required autocomplete="off" class="form-control form-control-sm" type="text" style="border-radius: unset !important;" name="vg_url">

                    </div>
                    <div class="modal-footer">
                        <input type="submit" value="Submit" class="btn btn-primary" name="add_slider">
                    </div>
                    <?php echo form_close();?>
            </div>

        </div>
    </div>
</div>
