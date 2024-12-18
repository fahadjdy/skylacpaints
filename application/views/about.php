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
            <section class="breadcrumb-area d-flex align-items-center" style="background-image:url('<?=base_url("assets/user/img/bg/bdrc-bg.jpg")?>')">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-lg-12">
                            <div class="breadcrumb-wrap text-left">
                                <div class="breadcrumb-title">
                                    <h2>About</h2>    
                                    <div class="breadcrumb-wrap">
                              
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">About</li>
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
         
              <!-- about-area -->
              <section class="about-area about-p pb-120 p-relative fix p-5">
                <div class="animations-01"><img src="<?=base_url('assets/user/img/bg/an-img-01.png')?>" alt="an-img-01"></div>
                <div class="animations-02"><img src="<?=base_url('assets/user/img/bg/an-img-02.png')?>" alt="contact-bg-an-01"></div>
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                         <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="s-about-img p-relative  wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                                <img src="<?=base_url('assets/user/img/features/about_img_02.png')?>" alt="img">   
                               <div class="about-text second-about">
                                    <span>30</span>
                                    <p>Years of Experience</p>
                                </div>
                            </div>
                          
                        </div>
                            
              <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="about-content s-about-content  wow fadeInRight  animated" data-animation="fadeInRight" data-delay=".4s">
                                    <div class="about-title second-title pb-25">  
                                        <h5>About Company</h5>
                                        <h2><?=$profile[0]->slogan?></h2>                                   
                                    </div>
                                      <p><?=$profile[0]->about?></p>
                                        <div class="about-content3">
                                        <div class="row">
                                        <div class="col-md-12">
                                        <ul class="green">                                              
                                                    <li>Wide range of premium quality paints and coatings for interior & exterior use</li>
                                                    <li>Expert color consultation and custom color matching services</li>
                                                    <li>Eco-friendly and durable paint solutions for homes and businesses</li>
                                              </ul>
                                        </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="slider-btn mt-20">                                          
                                        <a href="<?=base_url('contact')?>" class="btn ss-btn smoth-scroll">Know More <i class="fal fa-angle-right"></i></a>				
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </section>
         
        </main>
        <!-- main-area-end -->
  <?php $this->load->view('footer'); ?>
