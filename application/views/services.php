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
                         <!-- #right side -->
                        <div class="col-sm-12 col-md-12 col-lg-4 order-1">
                           <aside class="sidebar services-sidebar">
                        
                        <!-- Category Widget -->
                        <div class="sidebar-widget categories">
                            <div class="widget-content">
                                <h2 class="widget-title"> Services List </h2>
                                <!-- Services Category -->
                                <ul class="services-categories">
                                    <?php foreach($category as $categories): ?>
                                    <li <?php if($data->c_url == $categories->c_url) echo 'class="active"'; ?>>
                                        <a href="<?=base_url('services/'.$categories->c_url)?>"><?=$categories->c_name?></a>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        <!--Service Contact-->
                        <div class="service-detail-contact wow fadeup-animation" data-wow-delay="1.1s">
                            <h3 class="h3-title">If You Need Any Help Contact With Us</h3>
                            <a href="javascript:void(0);" title="Call now"><?=$profile[0]->phone?></a>
                        </div>
                    </aside>
                        </div>
                        <!-- #right side end -->
                       
                        
					<div class="col-lg-8 col-md-12 col-sm-12 order-2">
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

