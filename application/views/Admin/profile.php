<?php  $this->load->view('Admin/header'); ?>
<!-- Page -->
<div class="page">
    <div class="page-main">
        <?php  $this->load->view('Admin/sidebar'); ?>
        <!--aside closed-->
        <!-- App-Content -->
        <div class="app-content main-content">
            <div class="side-app">
                <!--app header-->
                <?php  $this->load->view('Admin/navbar'); ?>
                <!--/app header-->
                <!--Page header-->
                <div class="page-header">
                    <div class="page-leftheader">
                        <h4 class="page-title mb-0">Profile</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('admin'); ?>"><i class="fe fe-layers mr-2 fs-14"></i>Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="#">Profile</a></li>
                        </ol>
                    </div>
                    <div class="page-rightheader">

                    </div>
                </div>
                <!--End Page header-->
                <!-- Row -->

                <?php echo form_open_multipart('Admin/updateProfile');?>
                <div class="row">
                    <div class="col-sm-4 col-12 p-1 text-center">
                        <img src="<?php echo base_url('assets/admin/profile/').$data[0]->logo; ?>" width="200px" alt="logo" srcset="">
                        <input type="hidden" name="old_logo" value="<?php echo $data[0]->logo; ?>">
                        <div class="form-group">
                            <label for="b_img" style="opacity: 1 !important;">Select Logo</label>
                            <div class="input-group ">
                                <div class="custom-file " style="box-shadow: none !important;filter: none !important;">
                                    <input type="file" accept="image/x-png,image/jpg,image/jpeg" class="custom-file-input" style="box-shadow: none !important;" name="logo" id="inputGroupFile04">
                                    <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8 col-12">
                        <div class="row">
                            <div class="col-sm-6 col-12 p-1">
                                <label for="">Compony Name</label>
                                <input type="text" value="<?php echo $data[0]->name; ?>" name="name" class="form-control" placeholder="Compony Name">
                            </div>
                            <div class="col-sm-6 col-12 p-1">
                                <label for="">Compony Slogan</label>
                                <input type="text" value="<?php echo $data[0]->slogan; ?>" name="slogan" class="form-control" placeholder="Compony Slogan">
                            </div>
                            <div class="col-sm-6 col-12 p-1">
                                <label for="">Mobile Number</label>
                                <input type="text" value="<?php echo $data[0]->phone; ?>" name="phone" class="form-control" placeholder="Mobile Number">
                            </div>
                            <div class="col-sm-6 col-12 p-1">
                                <label for="">Email</label>
                                <input type="text" value="<?php echo $data[0]->email; ?>" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="col-sm-6 col-12 p-1">
                                <img src="<?php echo base_url('assets/admin/profile/').$data[0]->favicone; ?>" width="50px" alt="favicone" srcset="">
                                <input type="hidden" name="old_favicone" value="<?php echo $data[0]->favicone; ?>">
                                <div class="form-group">
                                    <label for="favicon" style="opacity: 1 !important;">Select Favicone</label>
                                    <div class="input-group">
                                        <div class="custom-file" style="box-shadow: none !important;filter: none !important;">
                                            <input type="file" accept="image/x-png,image/jpg,image/jpeg" class="custom-file-input" style="box-shadow: none !important;" name="favicone" id="inputGroupFile04">
                                            <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="row">
                    <div class="col-12 p-1">
                        <label for="">Adress</label>
                        <textarea name="address" class="form-control" id="" cols="30" rows="5"><?php echo $data[0]->address ?></textarea>
                    </div>
                    <div class="col-12 p-1">

                        <div class="form-group">
                            <label for="about_img" style="opacity: 1 !important;">About Image ( size 3350px *
								2200px)</label>
                            <img src="<?php echo base_url('assets/admin/profile/').$data[0]->about_img; ?>" width="300px" alt="about Image" srcset=" ">
                            <input type="hidden" name="old_about_img" value="<?php echo $data[0]->about_img; ?>">
                            <div class="input-group ">
                                <div class="custom-file " style="box-shadow: none !important;filter: none !important; ">
                                    <input type="file" accept="image/x-png,image/jpg,image/jpeg" class="custom-file-input" style="box-shadow: none !important;" name="about_img" id="inputGroupFile04">
                                    <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 p-1 ">
                        <label for=" ">About Compony</label>
                        <textarea name="about" class="form-control " id=" " cols="30 " rows="5 "><?php echo $data[0]->about ?></textarea>
                    </div>
                    <div class="col-12 p-1 ">
                        <label for=" ">Mission / Vission of Compony</label>
                        <textarea name="mission" class="form-control " id=" " cols="30 " rows="5 "><?php echo $data[0]->mission ?></textarea>
                    </div>
                    <div class="col-12 ">
                        <label for=" ">Social Media Link</label>
                    </div>

                    <div class="col-sm-3 col-12 p-1 ">

                        <input type="text " value="<?php echo $data[0]->facebook ?>" class="form-control" placeholder="facebook" name="facebook" title="facebook">
                    </div>
                    <div class="col-sm-3 col-12 p-1">
                        <input type="text" value="<?php echo $data[0]->instagram ?>" class="form-control" placeholder="instagram" name="instagram" title="instagram">
                    </div>
                    <div class="col-sm-3 col-12 p-1">
                        <input type="text" value="<?php echo $data[0]->twitter ?>" class="form-control" placeholder="twitter" name="twitter" title="twitter">
                    </div>
                    <div class="col-sm-3 col-12 p-1">
                        <input type="text" value="<?php echo $data[0]->pintrest ?>" class="form-control" placeholder="pintrest" name="pintrest" title="pintrest">
                    </div>
                    <div class="col-12 p-1 ">
                        <label for=" ">Facebook Page</label>
                        <input type="text" value="<?php echo $data[0]->fbpage ?>" class="form-control" placeholder="Facebook Page" name="fb-page" title="facebook page link">
                    </div>
					<div class="col-12 p-1 ">
                        <label for="">Google Map(Embed Url)</label>
                        <input type="text" value="<?php echo $data[0]->map ?>" class="form-control" placeholder="Google Map" name="map" title="Google Map Link">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <input type="submit" value="Save" class="btn btn-primary" name="Save">
                    </div>
                </div>
                <?php echo form_close();?>
                <!-- End Row -->

            </div>
        </div>
        <!-- end app-content-->
    </div>

</div>
<?php  $this->load->view('Admin/footer'); ?>
