<?php 
			$this->load->view('header'); 
			$profile = $this->profile_model->getProfile();
			$slider = $this->profile_model->getSlider();
			$category = $this->profile_model->getCategory();
			$product = $this->profile_model->getProduct();
			$gallery = $this->profile_model->getIgallery();

?>
<main>
      <!-- breadcrumb-area -->
      <section class="breadcrumb-area d-flex align-items-center" style="background-image:url('<?=base_url("assets/user/img/bg/bdrc-bg.jpg")?>')">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-lg-12">
                            <div class="breadcrumb-wrap text-left">
                                <div class="breadcrumb-title">
                                    <h2>Gallery</h2>    
                                    <div class="breadcrumb-wrap">
                              
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Gallery</li>
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

            <!-- gallery-area -->
            <section id="gallery" class="gallery-area pt-120 pb-120 p-relative fix">
                <div class="container">
                    <div class="row">
                        <?php foreach($gallery as $image): ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-gallery mb-30">
                                <div class="gallery-img">
                                    <a href="<?=base_url('assets/admin/igallery/'.$image->ig_img)?>" class="popup-image">
                                        <img src="<?=base_url('assets/admin/igallery/'.$image->ig_img)?>" alt="<?=$image->ig_name?>" style="width: 100%; height: auto; object-fit: cover;">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
            <!-- gallery-area-end -->

</main>

<?php $this->load->view('footer'); ?>