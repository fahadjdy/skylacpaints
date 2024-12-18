<?php 
			$profile = $this->profile_model->getProfile();
			$slider = $this->profile_model->getSlider();
			$category = $this->profile_model->getCategory();
			$gallery = $this->profile_model->getIgallery();

?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?=$profile[0]->name?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" type="image/x-icon" href="<?=base_url('assets/admin/profile/'.$profile[0]->favicone)?>">

      <!-- CSS here -->
      <link rel="stylesheet" href="<?=base_url()?>assets/user/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?=base_url()?>assets/user/css/animate.min.css">
      <link rel="stylesheet" href="<?=base_url()?>assets/user/css/magnific-popup.css">
      <link rel="stylesheet" href="<?=base_url()?>assets/user/fontawesome/css/all.min.css">
      <link rel="stylesheet" href="<?=base_url()?>assets/user/css/dripicons.css">
      
      <link rel="stylesheet" href="<?=base_url()?>assets/user/css/slick.css">
      <link rel="stylesheet" href="<?=base_url()?>assets/user/css/meanmenu.css">
      <link rel="stylesheet" href="<?=base_url()?>assets/user/css/default.css">
      <link rel="stylesheet" href="<?=base_url()?>assets/user/css/style.css">
      <link rel="stylesheet" href="<?=base_url()?>assets/user/css/responsive.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <!-- Template Main CSS File -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</head>

<body>

<!-- header -->
<header class="header-area header-three">  
           <div class="header-top second-header d-none d-md-block">
                <div class="container">
                    <div class="row align-items-center">      
                        <div class="col-lg-8 col-md-8 d-none d-lg-block">
                             <div class="header-cta">
                               <ul>                                   
                                    <li>
                                        <i class="icon fal fa-envelope"></i>
                                        <span><?=$profile[0]->email?></span>
                                    </li>
                                    <li>
                                        <i class="icon fal fa-phone"></i>
                                        <span><?=$profile[0]->phone?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 d-none d-lg-block text-right">
                           <div class="header-social">
                                <span>
                                    <?php if(!empty($profile[0]->facebook)): ?>
                                    <a href="<?=$profile[0]->facebook?>" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <?php endif; ?>
                                    <?php if(!empty($profile[0]->instagram)): ?>
                                    <a href="<?=$profile[0]->instagram?>" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                                    <?php endif; ?>
                                    <?php if(!empty($profile[0]->twitter)): ?>               
                                    <a href="<?=$profile[0]->twitter?>" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <?php endif; ?>
                                    <?php if(!empty($profile[0]->phone)): ?>
                                    <a href="https://wa.me/<?=$profile[0]->phone?>" title="whatsapp" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                    <?php endif; ?>
                                   </span>                    
                                   <!--  /social media icon redux -->                               
                            </div>
                        </div>
                         
                        
                    </div>
                </div>
            </div>		
			  <div id="header-sticky" class="menu-area">
                <div class="container">
                    <div class="second-menu">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="<?=base_url()?>"><img src="<?=base_url('assets/admin/profile/'.$profile[0]->logo)?>" alt="logo"></a>
                                </div>
                            </div>
                           <div class="col-xl-6 col-lg-7">
                              
                                <div class="main-menu text-center text-xl-right">
                                    <nav id="mobile-menu">
                                          <ul>
                                            <li> <a href="<?=base_url()?>">Home</a> </li>
                                            <li><a href="<?=base_url('about')?>">About</a></li>        
                                            
                                              <li class="has-sub">
                                                <a >Services</a>
                                                <ul>
                                                    <?php foreach($category as $categories): ?>
                                                    <li><a href="<?=base_url('services/'.$categories->c_url)?>"><?=$categories->c_name?></a></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </li>  
                                            <li><a href="<?=base_url('contact')?>">Contact</a></li>                                               
                                            <li><a href="<?=base_url('gallery')?>">Gallery</a></li>                                               
                                        </ul>
                                    </nav>
                                </div>
                            </div>   
                             <div class="col-xl-4 col-lg-3 d-none d-lg-block mt-25 mb-25">
                                <div class="right-menu">
                                    <ul>
                                       
                                        <li>
                                            <div class="icon"><img src="<?=base_url('assets/user/img/bg/top-m-icon.png')?>" alt="top-m-icon.png"></div>
                                            <div class="text">
                                                <span>Call Now !</span>
                                                <strong><?=$profile[0]->phone?></strong>
                                            </div>
                                        </li>
                                    </ul>
                                 </div>
                               
                            </div>
                            
                                <div class="col-12">
                                    <div class="mobile-menu"></div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-end -->
