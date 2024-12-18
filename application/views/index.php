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
           <!-- slider-area -->
            <section id="home" class="slider-area fix p-relative">
               
                <div class="slider-active" style="background: #00173c;">
                <?php if(!empty($slider)): ?>
                <?php foreach($slider as $slide): ?>
                <div class="single-slider slider-bg d-flex align-items-center" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?=base_url('assets/admin/slider/'.$slide->s_img)?>'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                    <div class="container">
                       <div class="row justify-content-center align-items-center">
                          
                            <div class="col-lg-7 col-md-7">
                                <div class="slider-content s-slider-content mt-20">
                                     <h5 data-animation="fadeInUp" data-delay=".4s">welcome To <?=$profile[0]->name?></h5>
                                     <h2 data-animation="fadeInUp" data-delay=".4s"> <span> <?=$slide->s_name?> </span></h2>                                    
                                      <div class="slider-btn mt-30 mb-105">     
                                        <a href="<?=base_url('contact')?>" class="btn ss-btn" data-animation="fadeInLeft" data-delay=".4s">Discover More <i class="fal fa-angle-right"></i></a>
                                    </div>        
                                                          
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 p-relative">
                            </div>
                            
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <?php else: ?>
                <div class="single-slider slider-bg d-flex align-items-center">
                    <div class="container">
                       <div class="row justify-content-center align-items-center">
                          
                            <div class="col-lg-7 col-md-7">
                                <div class="slider-content s-slider-content mt-20">
                                     <h5 data-animation="fadeInUp" data-delay=".4s">welcome To <?=$profile[0]->name?></h5>
                                     <h2 data-animation="fadeInUp" data-delay=".4s"><?=$profile[0]->slogan?></h2>
                                    <p data-animation="fadeInUp" data-delay=".6s"><?=$profile[0]->about?></p>
                                    
                                      <div class="slider-btn mt-30 mb-105">     
                                        <a href="<?=base_url('contact')?>" class="btn ss-btn" data-animation="fadeInLeft" data-delay=".4s">Discover More <i class="fal fa-angle-right"></i></a>
                                    </div>        
                                                          
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 p-relative">
                            </div>
                            
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                </div>
                 
            </section>
            <!-- slider-area-end -->
             <!-- service-area -->
            <section class="service-details-two pb-90 p-relative">
                <div class="container">
                    <div class="row">
                      
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="services-box07 mb-30">
                                
                             <div class="sr-contner">
                                <div class="icon">
                                <img src="<?=base_url('assets/user/img/icon/sve-icon4.png')?>" alt="icon01">
                                </div>
                                <div class="text">
                                    <h5>Premium Quality Colors</h5>
                                    <p>We offer high-quality paints that provide excellent coverage, durability and long-lasting finish for all your needs.</p>
                                </div>
                             </div>
                                
                                
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="services-box07 mb-30">
                                <div class="sr-contner">
                                <div class="icon">
                                <img src="<?=base_url('assets/user/img/icon/sve-icon5.png')?>" alt="icon01">
                                </div>
                                <div class="text">
                                    <h5>Custom Color Matching</h5>
                                    <p>Our advanced color matching technology ensures you get the exact shade and finish you're looking for.</p>
                                </div>
                             </div>
                               
                            </div>
                        </div>
                        
					<div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="services-box07 mb-30">
                                <div class="sr-contner">
                                <div class="icon">
                                <img src="<?=base_url('assets/user/img/icon/sve-icon6.png')?>" alt="icon01">
                                </div>
                                <div class="text">
                                    <h5>Expert Consultation</h5>
                                    <p>Our color experts provide professional advice to help you choose the perfect paint for your specific requirements.</p>
                                </div>
                             </div>
                                
                            </div>
                        </div>
                     
                    </div>
                </div>
            </section>
            <!-- service-details2-area-end -->
            
             <!-- about-area -->
            <section class="about-area about-p pb-120 p-relative fix">
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
            <!-- about-area-end -->
        

            <!-- industry-we-serve-area -->
            <section class="industry-we-serve-area pt-120 pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-center mb-50">
                                <h5>Industry We Serve</h5>
                                <h2>Explore Our Expertise</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php foreach($category as $cat): ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="industry-item text-center mb-30">
                                <div class="industry-icon">
                                    <a href="<?=base_url('services/').$cat->c_url?>">
                                        <img src="<?=base_url('assets/admin/category/'.$cat->c_img)?>" alt="<?=$cat->c_name?>" style="width: 100%; height: 200px; object-fit: cover;">
                                    </a>
                                </div>
                                <div class="overlay">
                                    <h4 ><?=$cat->c_name?></h4>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
            <!-- industry-we-serve-area-end -->

            <!-- product-slider-area -->
            <section class="product-slider-area pt-120 pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-center mb-50">
                                <h5>Our Products</h5>
                                <h2>Featured Products</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="swiper product-slider">
                                <div class="swiper-wrapper">
                                    <?php foreach($product as $row): ?>
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
                                    <?php endforeach; ?>
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


            <!-- video-area -->
            <section class="video-area pt-120 pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-center mb-50">
                                <h5>Our Videos</h5>
                                <h2>Watch Our Work Process</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="row justify-content-center">
                                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                                    <div class="video-wrap">
                                        <img src="<?=base_url('assets/user/video/vi1.png')?>" alt="video thumbnail" style="width: 100%; height: 250px; object-fit: cover; cursor: pointer;" onclick="document.querySelector('.popup-video').click()">
                                        <a href="<?=base_url('assets/user/video/v1.mp4')?>" class="popup-video" data-type="video/mp4"></a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                                    <div class="video-wrap">
                                        <img src="<?=base_url('assets/user/video/vi2.png')?>" alt="video thumbnail" style="width: 100%; height: 250px; object-fit: cover; cursor: pointer;" onclick="document.querySelector('.popup-video').click()">
                                        <a href="<?=base_url('assets/user/video/v2.mp4')?>" class="popup-video" data-type="video/mp4"></a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                                    <div class="video-wrap">
                                        <img src="<?=base_url('assets/user/video/vi3.png')?>" alt="video thumbnail" style="width: 100%; height: 250px; object-fit: cover; cursor: pointer;" onclick="document.querySelector('.popup-video').click()">
                                        <a href="<?=base_url('assets/user/video/v3.mp4')?>" class="popup-video" data-type="video/mp4"></a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                                    <div class="video-wrap">
                                        <img src="<?=base_url('assets/user/video/vi4.png')?>" alt="video thumbnail" style="width: 100%; height: 250px; object-fit: cover; cursor: pointer;" onclick="document.querySelector('.popup-video').click()">
                                        <a href="<?=base_url('assets/user/video/v4.mp4')?>" class="popup-video" data-type="video/mp4"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- video-area-end -->

            <!-- testimonial-area -->
            <section class="testimonial-area pt-120 pb-115 p-relative fix">
                 <div class="animations-01"><img src="<?=base_url('assets/user/img/bg/an-img-03.png')?>" alt="an-img-01"></div>
                <div class="animations-02"><img src="<?=base_url('assets/user/img/bg/an-img-04.png')?>" alt="contact-bg-an-01"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-center mb-50 wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                                <h5>Testimonial</h5>
                                <h2>
                                 What Our Clients Says
                                </h2>
                             
                            </div>
                           
                        </div>
                        
                        <div class="col-lg-12">
                            <div class="testimonial-active">
                                <div class="single-testimonial">
                                     <div class="testi-author">
                                        <img src="<?=base_url('assets/user/img/testimonial/testi_avatar.png')?>" alt="img">
                                    </div>
                                    <p>"I recently had my car painted at this shop and I'm extremely satisfied with the results. The color matching was perfect and the finish is flawless. Their attention to detail and professional service really impressed me."</p>
                                    <div class="ta-info">
                                            <h6>Mustak Marediya</h6>
                                            <span>Car Owner</span>
                                        </div>
                                    <div class="qt-img">
                                    <img src="<?=base_url('assets/user/img/testimonial/qt-icon.png')?>" alt="img">
                                    </div>
                                </div>
                                <div class="single-testimonial">
                                    <div class="testi-author">
                                        <img src="<?=base_url('assets/user/img/testimonial/testi_avatar_02.png')?>" alt="img">
                                    </div>
                                  <p>"The quality of automotive paint they use is outstanding. My vehicle's new paint job has been holding up beautifully for months now. Their team was professional, efficient and delivered exactly what they promised."</p>
                                    <div class="ta-info">
                                            <h6>Abbas Januwala</h6>
                                            <span>Business Owner</span>
                                        </div>
                                     <div class="qt-img">
                                    <img src="<?=base_url('assets/user/img/testimonial/qt-icon.png')?>" alt="img">
                                    </div>
                                </div>
                              <div class="single-testimonial">
                                  <div class="testi-author">
                                        <img src="<?=base_url('assets/user/img/testimonial/testi_avatar_02.png')?>" alt="img">
                                    </div>
                                    <p>"I had some custom paint work done on my classic car and the results exceeded my expectations. Their expertise in color matching and attention to detail is remarkable. I highly recommend their services to anyone looking for quality automotive painting."</p>
                                    <div class="ta-info">
                                            <h6>Juned Pipla</h6>
                                            <span>Classic Car Enthusiast</span>
                                        </div>
                                    <div class="qt-img">
                                    <img src="<?=base_url('assets/user/img/testimonial/qt-icon.png')?>" alt="img">
                                    </div>
                                </div>
                                <div class="single-testimonial">
                                     <div class="testi-author">
                                        <img src="<?=base_url('assets/user/img/testimonial/testi_avatar.png')?>" alt="img">
                                    </div>
                                  <p>"The industrial paint solutions provided by this company are top-notch. We've used their services for our fleet vehicles and the durability of their paint work is exceptional. Great customer service and professional team."</p>
                                   <div class="ta-info">
                                            <h6>Rasul Dubaliya</h6>
                                            <span>Fleet Manager</span>
                                        </div>
                                     <div class="qt-img">
                                    <img src="<?=base_url('assets/user/img/testimonial/qt-icon.png')?>" alt="img">
                                    </div>
                                </div>
                                <div class="single-testimonial">
                                     <div class="testi-author">
                                        <img src="<?=base_url('assets/user/img/testimonial/testi_avatar_02.png')?>" alt="img">
                                    </div>
                                   
                                    <p>"I'm amazed by the transformation of my vehicle after getting it painted here. The team was very helpful in choosing the right color and finish. The paint quality is excellent and the service was completed on time. Definitely worth every penny!"</p>
                                   <div class="ta-info">
                                           <h6>Mustak Marediya</h6>
                                            <span>Satisfied Customer</span>
                                        </div>
                                    <div class="qt-img">
                                    <img src="<?=base_url('assets/user/img/testimonial/qt-icon.png')?>" alt="img">
                                    </div>
                                </div>
                                <div class="single-testimonial">
                                    <div class="testi-author">
                                        <img src="<?=base_url('assets/user/img/testimonial/testi_avatar.png')?>" alt="img">
                                    </div>
                            
                                  <p>"Their expertise in automotive paint is unmatched. They helped restore my vintage car's paint to its original glory. The attention to detail and the quality of work is exceptional. I couldn't be happier with the results."</p>
                                    <div class="ta-info">
                                            <h6>Abbas Januwala</h6>
                                            <span>Vintage Car Collector</span>
                                        </div>
                                     <div class="qt-img">
                                    <img src="<?=base_url('assets/user/img/testimonial/qt-icon.png')?>" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->
             
         
        </main>
        <!-- main-area-end -->

  <?php $this->load->view('footer'); ?>
