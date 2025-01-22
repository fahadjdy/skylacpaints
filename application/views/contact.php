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
            <section class="breadcrumb-area d-flex align-items-center" style="background-image:url('<?=base_url("assets/user/img/bg/contac.jpg")?>')">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-lg-12">
                            <div class="breadcrumb-wrap text-left">
                                <div class="breadcrumb-title">
                                    <h2>Contact Us</h2>    
                                    <div class="breadcrumb-wrap">
                              
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
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
            
            <!-- contact-area -->
            <section id="contact" class="contact-area after-none contact-bg pt-120 pb-120 p-relative fix">
                <div class="container">
             
					<div class="row justify-content-center align-items-center">
						
                         <div class="col-lg-4 order-2">
                             
                            <div class="contact-info">
                                  <div class="single-cta pb-30 mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                        <div class="f-cta-icon">
                                            <i class="far fa-map"></i>
                                        </div>
                                        <h5>Office Address</h5>
                                        <p><?=$profile[0]->address?></p>
                                    </div>
                                     <div class="single-cta pb-30 mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                        <div class="f-cta-icon">
                                            <i class="far fa-phone"></i>
                                        </div>
                                        <h5>Contact Number</h5>
                                        <p><?=$profile[0]->phone?></p>
                                    </div>
                                     <div class="single-cta wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                        <div class="f-cta-icon">
                                            <i class="far fa-envelope-open"></i>
                                        </div>
                                        <h5>Message Us</h5>
                                        <p> <a href="mailto:<?=$profile[0]->email?>"><?=$profile[0]->email?></a></p>
                                    </div>
                                </div>							
                        </div>
                        <div class="col-lg-8 order-1">
                            <div class="contact-bg02">
                                <div class="section-title center-align">
                                    <h2>
                                       Make Appointment
                                    </h2>
                                </div>                                
                                <form id="contactForm" class="contact-form mt-30">
                                    <div class="row">
                                    <div class="col-lg-6">
                                        <div class="contact-field p-relative c-name mb-20">                                    
                                            <input type="text" id="firstn" name="firstn" placeholder="First Name" required>
                                        </div>                               
                                    </div>

                                    <div class="col-lg-6">                               
                                        <div class="contact-field p-relative c-subject mb-20">                                   
                                            <input type="text" id="email" name="email" placeholder="Email" required>
                                        </div>
                                    </div>		
                                    <div class="col-lg-6">                               
                                        <div class="contact-field p-relative c-subject mb-20">                                   
                                            <input type="text" id="phone" name="phone" placeholder="Phone No." required>
                                        </div>
                                    </div>	
                                    <div class="col-lg-6">                               
                                        <div class="contact-field p-relative c-subject mb-20">                                   
                                            <input type="text" id="subject" name="subject" placeholder="Subject">
                                        </div>
                                    </div>	
                                    <div class="col-lg-12">
                                        <div class="contact-field p-relative c-message mb-30">                                  
                                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Write comments"></textarea>
                                        </div>
                                        <div id="form-message" class="alert" style="display:none;"></div>
                                        <div class="slider-btn">                                          
                                            <button type="submit" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s"><span>Submit Now</span></button>				
                                        </div>                             
                                    </div>
                                    </div>
                                </form>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

                                <script>
                                $(document).ready(function() {
                                    $('#contactForm').on('submit', function(e) {
                                        e.preventDefault();
                                        
                                        $.ajax({
                                            url: '<?=base_url("contact/submit")?>',
                                            type: 'POST',
                                            data: $(this).serialize(),
                                            success: function(response) {
                                                var res = JSON.parse(response);
                                                $('#form-message').removeClass('alert-danger alert-success')
                                                    .addClass(res.status ? 'alert-success' : 'alert-danger')
                                                    .html(res.message)
                                                    .show();
                                                
                                                if(res.status) {
                                                    $('#contactForm')[0].reset();
                                                }
                                            },
                                            error: function() {
                                                $('#form-message').removeClass('alert-success')
                                                    .addClass('alert-danger')
                                                    .html('An error occurred. Please try again later.')
                                                    .show();
                                            }
                                        });
                                    });
                                });
                                </script>
                            </div>    
                        
						</div>
					</div>
                    
                </div>
               
            </section>
            <!-- contact-area-end -->
            <!-- map-area-end -->
            <div class="map fix" style="background: #f5f5f5;">
                <div class="container-flud">
                    
                    <div class="row">
                        <div class="col-lg-12">
                       <iframe src="<?=$profile[0]->map?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
		     <!-- map-area-end -->
             
        </main>
		
  <?php $this->load->view('footer'); ?>
