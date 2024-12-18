<?php 
			$profile = $this->profile_model->getProfile();		
?>
  <!-- footer -->
  <footer class="footer-bg footer-p pt-90" style="background-color: #0c2957; background-image: url(<?=base_url('assets/user/img/bg/footer-bg.png')?> );">
            <div class="footer-top pb-70">
                <div class="container">
                    <div class="row justify-content-between">
                        
                        <div class="col-xl-4 col-lg-4 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="f-widget-title">
                                    <h2>About</h2>
                                </div>
                                <div class="f-contact">
                                     <p><?=$profile[0]->about?></p>
                                    
                                    </div>
                                 <div class="footer-social mt-10">                                    
                                    <a href="<?=$profile[0]->facebook?>"><i class="fab fa-facebook-f"></i></a>
                                    <a href="<?=$profile[0]->instagram?>"><i class="fab fa-instagram"></i></a>
                                    <a href="<?=$profile[0]->twitter?>"><i class="fab fa-twitter"></i></a>
                                </div>    
                            </div>
                        </div>
						<div class="col-xl-3 col-lg-2 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="f-widget-title">
                                    <h2>Our Links</h2>  
                                </div>
                                <div class="footer-link">
                                    <ul>                                        
                                        <li><a href="<?=base_url()?>">Home</a></li>
                                        <li><a href="<?=base_url('about')?>"> About</a></li>
                                        <li><a href="<?=base_url('gallery')?>"> Gallery </a></li>
                                        <li><a href="<?=base_url('contact')?>"> Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="f-widget-title">
                                  <h2>Subscribe Now !</h2>
                                </div>
                                <div class="footer-link">
                                <p>Subscribe our newsletter to get our latest update & News</p>
                                 <div class="subricbe p-relative" data-animation="fadeInDown" data-delay=".4s" >
                                            <form id="subscribeForm" class="contact-form">
                                             <input type="text" id="email2" name="email2" class="header-input" placeholder="Your Email..." required>
                                            <button type="submit" class="btn header-btn"><i class="fas fa-location-arrow"></i></button>
                                            </form>
                                            
                                        </div>
                                        <div id="subscribe-message" class="alert" style="display:none;"></div>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                          <div class="copy-text text-center">
                                 Copyright &copy; <?=$profile[0]->name?> <?=date('Y')?> . All rights reserved. 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-end -->

		<!-- JS here -->
        
		<script src="<?=base_url()?>assets/user/js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="<?=base_url()?>assets/user/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="<?=base_url()?>assets/user/js/popper.min.js"></script>
        <script src="<?=base_url()?>assets/user/js/bootstrap.min.js"></script>
        <script src="<?=base_url()?>assets/user/js/slick.min.js"></script>
        <script src="<?=base_url()?>assets/user/js/ajax-form.js"></script>
        <script src="<?=base_url()?>assets/user/js/paroller.js"></script>
        <script src="<?=base_url()?>assets/user/js/wow.min.js"></script>
        <script src="<?=base_url()?>assets/user/js/js_isotope.pkgd.min.js"></script>
        <script src="<?=base_url()?>assets/user/js/imagesloaded.min.js"></script>
        <script src="<?=base_url()?>assets/user/js/parallax.min.js"></script>
        <script src="<?=base_url()?>assets/user/js/jquery.waypoints.min.js"></script>
        <script src="<?=base_url()?>assets/user/js/jquery.counterup.min.js"></script>
        <script src="<?=base_url()?>assets/user/js/jquery.scrollUp.min.js"></script>
        <script src="<?=base_url()?>assets/user/js/jquery.meanmenu.min.js"></script>
        <script src="<?=base_url()?>assets/user/js/parallax-scroll.js"></script>
        <script src="<?=base_url()?>assets/user/js/jquery.magnific-popup.min.js"></script>
        <script src="<?=base_url()?>assets/user/js/element-in-view.js"></script>
        <script src="<?=base_url()?>assets/user/js/main.js"></script>
        <script>
            $(document).ready(function() {
                $('#subscribeForm').on('submit', function(e) {
                    e.preventDefault();
                    
                    $('#subscribe-message')
                                .addClass('alert-success')
                                .html('Thank you for subscribing!')
                                .show();
                    setTimeout(function() {
                        $('#subscribe-message').hide();
                    }, 3000);
                    $('#subscribeForm')[0].reset();
                });
            });
        </script>
</body>

</html>
