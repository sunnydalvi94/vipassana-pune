<!DOCTYPE html>
<html lang="en"  >
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="utf-8"/>
        <title>Change Password | Vipassana</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <meta content="" name="description"/>
        <meta content="" name="author"/>
         <base href="<?php echo base_url(); ?>">
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
        <link href="<?php echo base_url(); ?>assets/site/plugins/socicon/socicon.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/site/plugins/bootstrap-social/bootstrap-social.css" rel="stylesheet" type="text/css"/>       
        <link href="<?php echo base_url(); ?>assets/site/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/site/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/site/plugins/animate/animate.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/site/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/site/plugins/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/site/plugins/owl-carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/site/plugins/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/site/plugins/slider-for-bootstrap/css/slider.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/site/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/site/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/site/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/site/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/site/demos/default/css/plugins.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/site/demos/default/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/site/demos/default/css/themes/default.css" rel="stylesheet" id="style_theme" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/site/demos/default/css/custom.css" rel="stylesheet" type="text/css"/>
         <link href="<?php echo base_url(); ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link rel="shortcut icon " type="image/gif" href="<?php echo base_url(); ?>assets/site/img/logo/wheel.gif">
        <link href="<?php echo base_url(); ?>assets/site/css/jquery.toast.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/site/css/custom.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="c-layout-header-fixed c-layout-header-mobile-fixed">
        <div class="c-layout-page">
            <?php $this->load->view('site/header'); ?>
            <div  class=" c-size-md c-bg-grey-1"style="margin:-33px 0px -21px 0px;padding-bottom:30px;">
                <div class="container" ><br><br>
                    <div style="margin-top:-33px;">
                        <section>
                            <div class="container" style="padding-top:30px;">
                                <div class="c-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row" data-auto-height="true">
                                                <div class="col-md-2"></div>
                                                    <div class="col-md-8 c-margin-b-20">
                                                        <form action="change-user-password" id="change-user-password" data-apikey="5681648d-91d6-4371-a911-1497734d0016" data-redirect="change-password" method="post" enctype="multipart/form-data" class="comment-form validate">
                                                            <div class="c-content-media-1">
                                                                <div class="c-content-title-3 c-title-md " style="border:none; padding-left: 0px;">
                                                                    <h3 class="c-theme-font c-font-uppercase c-font-bold">Change Password</h3>
                                                                </div>
                                                                <div class="alert alert-danger alert-wrong-user" style="display:none;">
                                                                <span>Please enter the appropriate fields.</span>
                                                                </div> 
                                                                <div class="alert alert-success" style="display:none;">
                                                                <span>Please wait, checking login...</span>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label  class="control-label f-size">Current Password<span class="require" aria-required="true" style="color:red"><small>*</small></span></label>
                                                                            <div class="input-icon right"><i class="fa"></i>
                                                                                <input type="password" class="form-control " name="old_password" value=""placeholder="Current Password" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label f-size">New Password<span class="require" aria-required="true" style="color:red"><small>*</small></span></label>
                                                                            <div class="input-icon right"><i class="fa"></i>
                                                                                <input type="password" class="form-control " name="new_password" value="" placeholder="New password" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label f-size">Confirm Password<span class="require" aria-required="true" style="color:red"><small>*</small></span></label>
                                                                            <div class="input-icon right"><i class="fa"></i>
                                                                                <input type="password" class="form-control " name="confirm_password" value="" placeholder="Confirm Password" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <input type="hidden" name="role_id" value="2">
                                                                    <input type="hidden" name="user_id" value="2">
                                                                    <div  style="float: right;">
                                                                        <button type="reset" class="btn btn-xs btn-danger"> <i class="icon-close"></i> Clear </button>
                                                                        <button type="submit" class="btn btn-xs btn-primary common_save" data-pk="user_id" rel="<?php echo(isset($user_data->user_id) && !empty($user_data->user_id))?$user_data->user_id:'';?>"> <i class="icon-check"></i> <?php echo(isset($user_data->user_id) && !empty($user_data->user_id))?'Update':'Submit';?> </button><br>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </form>
                                                        <div style="position: relative;bottom: 64px;left: 28px;">
                                                            <a ><button class="btn btn-primary btn-xs  font_size_submenu" data-toggle="modal" data-target="#myModal20">Log In</button></a>
                                                        </div>
                                                    </div>
                                                <div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </section>
                   </div>
                </div>
            </div><br>
            <?php $this->load->view('site/footer'); ?>
        </div>
        <script src="<?php echo base_url();?>assets/site/plugins/jquery.min.js" type="text/javascript" ></script>
        <script src="<?php echo base_url();?>assets/site/plugins/jquery-migrate.min.js" type="text/javascript" ></script>
        <script src="<?php echo base_url();?>assets/site/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript" ></script>
        <script src="<?php echo base_url();?>assets/site/plugins/jquery.easing.min.js" type="text/javascript" ></script>
        <script src="<?php echo base_url();?>assets/site/plugins/reveal-animate/wow.js" type="text/javascript" ></script>
        <script src="<?php echo base_url();?>assets/site/demos/default/js/scripts/reveal-animate/reveal-animate.js" type="text/javascript" ></script>
        <script src="<?php echo base_url();?>assets/site/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/site/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/site/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/site/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/site/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/site/plugins/smooth-scroll/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/site/plugins/slider-for-bootstrap/js/bootstrap-slider.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/site/plugins/js-cookie/js.cookie.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/site/base/js/components.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/site/base/js/components-shop.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/site/base/js/app.js" type="text/javascript"></script>
        <script>
        $(document).ready(function() {    
        App.init(); // init core    
        });
        </script>
        <script src="<?php echo base_url();?>assets/site/plugins/moment.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/site/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/site/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/site/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/site/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/site/demos/default/js/scripts/pages/datepicker.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/site/base/js/components.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/site/base/js/components-shop.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/site/base/js/app.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/jquery-validation/js/additional-methods.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/jquery-validation/lib/jquery.form.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/site/js/lightbox.min.js"></script>
        <script src="<?php echo base_url();?>assets/site/js/jquery.toast.js"></script>
        <script src="<?php echo base_url();?>assets/js/common.js" type="text/javascript"></script>
    </body>
</html>
