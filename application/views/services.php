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
            

            
            <!-- product-slider-area -->
            <section class="product-slider-area pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-center mb-50">
                                <h2><span><?php echo $data->c_name; ?></span> Products</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="swiper product-slider">
                                <div class="swiper-wrapper">
                                    <?php foreach($product as $row):
                                        
                                        
                                        if($data->c_id == $row->c_id){
                                            ?>
                                    <div class="swiper-slide">
                                        <div class="product-item text-center">
                                            <div class="product-img position-relative">
                                                <a href="<?=base_url('assets/admin/product/'.$row->p_img)?>" class="popup-image" title="<?=$row->p_name?>">
                                                    <img src="<?=base_url('assets/admin/product/'.$row->p_img)?>" alt="<?=$row->p_name?>" style="width: 100%; height: 300px; object-fit: cover;">
                                                </a>
                                                <div class="product-content" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(0,0,0,0.7); padding: 10px;">
                                                    <h4 style="color: #fff; margin: 0;"><?=$row->p_name?></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } endforeach; ?>
                                </div>
                                <!-- Add navigation buttons -->
                                <div class="swiper-button-next" style="color: #000;"></div>
                                <div class="swiper-button-prev" style="color: #000;"></div>
                            </div>
                            <div class="swiper-pagination mt-4 text-center"></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- product-slider-area-end -->
            <style>
                .swiper-button-next, .swiper-button-prev {
                    width: 50px;
                    height: 50px;
                    background-color: #000;
                    border-radius: 50%;
                    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
                    transition: all 0.3s ease;
                    position: absolute;
                    top: 50%;
                    transform: translateY(-50%);
                    z-index: 10;
                }

                .swiper-button-next:after, .swiper-button-prev:after {
                    font-size: 20px;
                    font-weight: bold;
                    color: #333;
                }

                .swiper-button-next:hover, .swiper-button-prev:hover {
                    background-color: #f5f5f5;
                    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
                    transform: translateY(calc(-50% - 2px));
                }

                .swiper-button-next.swiper-button-disabled,
                .swiper-button-prev.swiper-button-disabled {
                    opacity: 0.5;
                    cursor: not-allowed;
                }

                .swiper-button-prev {
                    left: 0;
                }

                .swiper-button-next {
                    right: 0;
                }

                .swiper-wrapper {
                    margin: 0 60px;
                }

                @media (max-width: 768px) {
                    .swiper-button-next, .swiper-button-prev {
                        width: 40px;
                        height: 40px;
                    }

                    .swiper-button-next:after, .swiper-button-prev:after {
                        font-size: 16px;
                    }
                    
                    .swiper-wrapper {
                        margin: 0 50px;
                    }
                }
            </style>

            <script>
                var swiper = new Swiper('.product-slider', {
                    slidesPerView: 1,
                    spaceBetween: 30,
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    breakpoints: {
                        576: {
                            slidesPerView: 2,
                        },
                        768: {
                            slidesPerView: 3,
                        },
                        992: {
                            slidesPerView: 4,
                        },
                        1200: {
                            slidesPerView: 5,
                        }
                    }
                });
            </script>


        </main>
        <!-- main-area-end -->
 
 <?php $this->load->view('footer'); ?>

