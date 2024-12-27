<?php 
			$this->load->view('header'); 
			$profile = $this->profile_model->getProfile();
			$slider = $this->profile_model->getSlider();
			$category = $this->profile_model->getCategory();
			$product = $this->profile_model->getProduct();
			$gallery = $this->profile_model->getIgallery();


?>
 
  <!-- main-area -->
  <main>
            
            <!-- breadcrumb-area -->
            <section class="breadcrumb-area d-flex align-items-center" style="background-image:url('<?=base_url("assets/user/img/bg/bdrc-bg.jpg")?>');">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-lg-12">
                            <div class="breadcrumb-wrap text-left">
                                <div class="breadcrumb-title">
                                    <h2><?php echo $data->c_name; ?></h2>    
                                    <div class="breadcrumb-wrap">
                              
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page"><?php echo $data->c_name; ?></li>
                                    </ol>
                                </nav>
                            </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->
			<!-- service-details-area -->
            <div class="about-area5 about-p p-relative">
                <div class="container pt-120 pb-90">
                    <div class="row">
                       
                       
                        
					<div class="col-lg-12 col-md-12 col-sm-12 order-2">
                            <div class="service-detail">
                                <div class="content-box">
                                    <p><?php echo $data->c_content; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                        </div>
                     
                    </div>
                </div>
            </div>
            <!-- service-details-area-end -->
            

        </main>
        <!-- main-area-end -->
 
 <?php $this->load->view('footer'); ?>

