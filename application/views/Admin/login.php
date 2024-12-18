<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Panel</title>
	 <!-- <link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>assets/images/logo.png"/> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
     <style>
         body{
              padding:0%;
              margin: 0%;
              box-sizing: border-box;
              
         }
         .form-control:focus {
        border-color: #28a745;
        box-shadow:none;
    } 
  </style>
</head>
<body>

<div class="container d-flex justify-content-center align-items-center w-100" style="height: 100vh;">
      <div class="login col-lg-4 col-md-6 col-sm-12">
      <div class="d-flex justify-content-center align-items-center form">
         <?php echo form_open("login/admin_login");?> 
          <div class="form-row m-0 p-0">
          <div class="brand-logo w-100 text-left">
		 
           <div class="form-header mb-5">
            
            <h4 class=" sabji-heading" style="color: #204065; letter-spacing: 3px;font-size: 2rem;font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">Admin Panel</h4>
            <p style="color:#2a5788; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif !important;">Continue With Sign In.</p> 
        </div>  
				
              </div>
                
				
              <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                  <div class="form-group">
                      <div class="input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text text-white text-center pr-3" style="background: linear-gradient(to right, #0c2646 0%, #204065 60%, #2a5788 100%) !important;" id="my-addon"><i class="fa fa-user "></i></span>
                          </div>
                          <input id="phone" style="outline: none;" required class="form-control form-control-sm" type="text" name="username" placeholder="username" style="border-radius:0px 20px 20px 0px;">
                      </div>
                      
                  </div>
              </div>
              <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                  <div class="form-group">
                      <div class="input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text text-white" style="background: linear-gradient(to right, #0c2646 0%, #204065 60%, #2a5788 100%) !important;" id="my-addon"><i class="fa fa-key"></i></span>
                          </div> 
                          <input id="password" class="form-control form-control-sm" required type="password" name="password" placeholder="Password" >
                      </div>
                     
                  </div>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 mt-2">
                 
                      <input id="submit" class="form-control btn text-white font-weight-bold" style="letter-spacing: 2px;background: linear-gradient(to right, #0c2646 0%, #204065 60%, #2a5788 100%) !important;" type="submit" name="signin" value="LOGIN">
                  
              </div>
          </div>
		  <?php echo form_close(); ?>
          </div>
             
              </div>

            </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
 

</body>
</html>
