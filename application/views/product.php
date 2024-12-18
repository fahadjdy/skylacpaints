<?php 
			$this->load->view('header'); 
			$profile = $this->profile_model->getProfile();
			$slider = $this->profile_model->getSlider();
			$category = $this->profile_model->getCategory();
			$product = $this->profile_model->getProduct();
			$gallery = $this->profile_model->getIgallery();

?>
 

  <main id="main">
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('<?=base_url()?>assets/user/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Products</h2>
        <ol>
          <li><a href="<?=base_url()?>">Home</a></li>
          <li>Products</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->
	
	 <!-- ======= Product Section ======= -->
 	<section id="blog" class="blog">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
				
				<div class="section-header">
          <h2>Products</h2>
        </div>

        <div class="row gy-4 posts-list">

				<?php 
				if($product){
					foreach($product as $prod){
						?>
								<div class="col-xl-4 col-md-6">
									<div class="post-item position-relative h-100">

										<div class="post-img position-relative overflow-hidden">
											<img src="<?=base_url('assets/admin/product/'.$prod->p_img)?>" class="img-fluid" alt="<?=$prod->p_name?>">
											<!-- <span class="post-date">December 12</span> -->
										</div>

										<div class="post-content d-flex flex-column">

											<h3 class="post-title"><?=$prod->p_name?></h3>
											<p class="p-0 m-0 mb-2">Category : <?=$prod->c_name?></p>

											<div class="meta d-flex align-items-center">
												<div class="d-flex align-items-center">
													<i class="bi bi-whatsapp"></i> <span class="ps-2">Whatsapp Us</span>
												</div>
												<span class="px-3 text-black-50">/</span>
												<div class="d-flex align-items-center">
													<i class="bi bi-phone"></i> <span class="ps-2">Call Us</span>
												</div>
											</div>

										</div>

									</div>
								</div>
						<?php
					}
				}else {
					?>
					<h4 class="text-center">No Products Available</h4>
					<?php
			   }
				?>
          
        </div>
      </div>
  </section><!-- End Blog Section -->


  </main><!-- End #main -->

  <?php $this->load->view('footer'); ?>
