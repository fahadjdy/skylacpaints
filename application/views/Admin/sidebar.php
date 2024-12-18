<aside class="app-sidebar">
    <div class="app-sidebar__logo">
     
           <h1>Admin</h1>
      
    </div>
    <div class="app-sidebar__user">
        <div class="dropdown user-pro-body text-center">
            <div class="user-pic">
                <img src="<?php echo base_url('assets/admin/images/users/2.jpg'); ?>" alt="user-img" class="avatar-xl rounded-circle mb-1">
            </div>
            <div class="user-info">
                <h5 class=" mb-1">Admin <i class="ion-checkmark-circled  text-success fs-12"></i></h5>
                <span class="text-muted app-sidebar__user-name text-sm">Admin Panel</span>
            </div>
        </div>
        <div class="sidebar-navs">
            <ul class="nav nav-pills-circle">
                <li class="nav-item" data-placement="top" data-toggle="tooltip" title="Support">
                    <a class="icon" href="#">
                        <i class="las la-life-ring header-icons"></i>
                    </a>
                </li>
                <li class="nav-item" data-placement="top" data-toggle="tooltip" title="Documentation">
                    <a class="icon" href="#">
                        <i class="las  la-file-alt header-icons"></i>
                    </a>
                </li>
                <li class="nav-item" data-placement="top" data-toggle="tooltip" title="Projects">
                    <a href="#" class="icon">
                        <i class="las la-project-diagram header-icons"></i>
                    </a>
                </li>
                <li class="nav-item" data-placement="top" data-toggle="tooltip" title="Settins">
                    <a class="icon" href="#">
                        <i class="las la-cog header-icons"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <ul class="side-menu app-sidebar3">
        <li class="side-item side-item-category mt-4">Main</li>
        <li class="slide">
            <a class="side-menu__item" href="<?php echo base_url('Admin'); ?>">
                <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
					<path d="M0 0h24v24H0V0z" fill="none" />
					<path
						d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z" />
				</svg>
                <span class="side-menu__label">Dashboard</span></a>
        </li>
        <li class="side-item side-item-category">Pages </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="index-2.html#">
                <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
					<path d="M0 0h24v24H0V0z" fill="none" />
					<path
						d="M11.99 18.54l-7.37-5.73L3 14.07l9 7 9-7-1.63-1.27zM12 16l7.36-5.73L21 9l-9-7-9 7 1.63 1.27L12 16zm0-11.47L17.74 9 12 13.47 6.26 9 12 4.53z" />
				</svg>
                <span class="side-menu__label">Pages</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li>
                    <ul class="slide-menu ">
                        <li class="sub-slide">
                            <a class="sub-side-menu__item" data-toggle="sub-slide" href="index-2.html#"><span
									class="sub-side-menu__label">Category</span><i
									class="sub-angle fe fe-chevron-down"></i></a>
                            <ul class="sub-slide-menu">
                                <li><a class="sub-slide-item" href="<?php echo base_url('Admin/addcategory') ?>">Add Category</a></li>
                                <li><a class="sub-slide-item" href="<?php echo base_url('Admin/category') ?>">Category List</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <ul class="slide-menu ">
                        <li class="sub-slide">
                            <a class="sub-side-menu__item" data-toggle="sub-slide" href="index-2.html#"><span
									class="sub-side-menu__label">Products</span><i
									class="sub-angle fe fe-chevron-down"></i></a>
                            <ul class="sub-slide-menu">
                                <li><a class="sub-slide-item" href="<?php echo base_url('Admin/addproducts') ?>">Add Products</a></li>
                                <li><a class="sub-slide-item" href="<?php echo base_url('Admin/products') ?>">Products List</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <ul class="slide-menu ">
                        <li class="sub-slide">
                            <a class="sub-side-menu__item" data-toggle="sub-slide" href="index-2.html#"><span
									class="sub-side-menu__label">Gallery</span><i
									class="sub-angle fe fe-chevron-down"></i></a>
                            <ul class="sub-slide-menu">
                                <li><a class="sub-slide-item" href="<?php echo base_url('Admin/addIgallery') ?>">Add Gallery</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="<?php echo base_url('Admin/profile') ?>" class="slide-item">Profile</a></li>
		<li><a href="<?php echo base_url('Admin/slider') ?>" class="slide-item">Slider</a></li>
            </ul>

        </li>
       

    </ul>
</aside>
