<?php 

$profile = $this->auth_model->get_profile();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <!-- Title -->
    <title>Admin Panel</title>

    <!--Favicon -->
    <link rel="icon" href="<?php echo base_url('assets/admin/profile/'.$profile[0]->favicone); ?>" type="image/x-icon" />

    <!--Bootstrap css -->
    <link href="<?php echo base_url('assets/admin/plugins/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Style css -->
    <link href="<?php echo base_url('assets/admin/css/style.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/admin/css/dark.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/admin/css/skin-modes.css'); ?>" rel="stylesheet" />

    <!-- Animate css -->
    <link href="<?php echo base_url('assets/admin/css/animated.css'); ?>" rel="stylesheet" />

    <!--Sidemenu css -->
    <link href="<?php echo base_url('assets/admin/css/sidemenu.css'); ?>" rel="stylesheet">

    <!-- P-scroll bar css-->
    <link href="<?php echo base_url('assets/admin/plugins/p-scrollbar/p-scrollbar.css'); ?>" rel="stylesheet" />

    <!---Icons css-->
    <link href="<?php echo base_url('assets/admin/css/icons.css'); ?>" rel="stylesheet" />

    <!-- Simplebar css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/simplebar/css/simplebar.css'); ?>">

    <!-- Color Skin css -->
    <link id="theme" href="<?php echo base_url('assets/admin/colors/color1.css'); ?>" rel="stylesheet" type="text/css" />

    <!-- Switcher css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/switcher/css/switcher.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/switcher/demo.css'); ?>">

	 <!-- INTERNAl Quill css -->
	 <link href="<?php echo base_url('assets/admin/plugins/quill/quill.snow.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin/plugins/quill/quill.bubble.css'); ?>" rel="stylesheet">

    <!-- INTERNAl WYSIWYG Editor css -->
    <link href="<?php echo base_url('assets/admin/plugins/wysiwyag/richtext.css'); ?>" rel="stylesheet" />

</head>

<body class="app sidebar-mini">


    <!---Global-loader-->
    <div id="global-loader">
        <img src="<?php echo base_url('assets/admin/images/svgs/loader.svg'); ?>" alt="loader">
    </div>
    <!--- End Global-loader-->
