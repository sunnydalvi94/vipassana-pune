<!DOCTYPE html>
<html lang="en"  >
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8"/>
	<title>login fetch user details | Vipassana</title>
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
    <link rel="shortcut icon " type="image/gif" href="<?php echo base_url(); ?>assets/site/img/logo/wheel.gif">
    <link href="<?php echo base_url(); ?>assets/site/css/jquery.toast.css" rel="stylesheet" type="text/css">
    <style>
	    nav{
	        max-height: 500px!important;
	    }
	    .wheel{
	        height:3vw;
	        margin-top:-3vw;
	        margin-bottom: -2vw;
	      }
	      @media (min-width: 992px){
	        .c-layout-header-fixed .c-layout-header {
	            height: 65px;
	        }
	        .c-layout-header .c-navbar .c-mega-menu > .nav.navbar-nav > li > .c-link {
	            padding: 21px 15px 39px 15px;
	        }
	        .c-page-on-scroll.c-layout-header-fixed .c-layout-header .c-brand .c-desktop-logo-inverse {
	        margin-top: -1vw;
	        }
	        .c-layout-revo-slider-4 {
	        margin-top: -33.5px;
	        }
	        .c-layout-header .c-navbar .c-mega-menu > .nav.navbar-nav > li > .c-link {
	            min-height: 0px;
	            padding: 21px 15px 26px 15px;
	        }
	      }
	    @media (max-width:750px) {
	        .wheel{
	        height:7vw;
	        margin-top: -14px;
	      }
	      .font_size_menu{
	    font-size:12px!important;
	      }
	      .font_size_submenu{
	        font-size:12px!important;
	      }
	    }
	    @media (max-width:400px) {
	    .font_size_menu{
	    font-size:12px!important;
	      }
	      .font_size_submenu{
	        font-size:12px!important;
	      }
	      .c-layout-header .c-navbar .c-mega-menu.c-fonts-bold > .nav.navbar-nav > li > .c-link{
	          height:31px!important;
	      }
	      .wheel{
	        height:10vw;
	      }
	    }
	  
	.table > tfooter > tr > td, .table > tbody > tr > td, .table > tbody > tr > th, .table > thead > tr > th {
    border: none;
    }
    </style>
    </head>
<body class="c-layout-header-fixed c-layout-header-mobile-fixed">
<div class="c-layout-page">
    <header class="c-layout-header c-layout-header-2 c-layout-header-dark-mobile c-header-transparent-dark" data-minimize-offset="80" style="background: rgb(31, 133, 218,0.6);">
        <div class="c-navbar">
            <div class="container">
                <div class="c-navbar-wrapper clearfix">
                    <div class="c-brand c-pull-left">
                        <a href="site" class="c-logo">
                            <img  src="<?php echo base_url(); ?>assets/site/img/logo/wheel.gif" alt="JANGO" class="c-desktop-logo wheel">
                            <img  src="<?php echo base_url(); ?>assets/site/img/logo/wheel.gif" alt="JANGO" class="c-desktop-logo-inverse wheel">
                            <img  src="<?php echo base_url(); ?>assets/site/img/logo/wheel.gif" alt="JANGO" class="c-mobile-logo wheel">
                        </a>
                        <button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
                            <span class="c-line"></span>
                            <span class="c-line"></span>
                            <span class="c-line"></span>
                        </button>
                    </div>
                    <nav class="c-mega-menu c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-theme c-fonts-uppercase c-fonts-bold">
                       
                    </nav>
                </div>  
            </div>
        </div>    
    </header> 
		<div  class=" c-size-md c-bg-grey-1"style="margin:-33px 0px -21px 0px;">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
					</div>
					<div class="col-md-6 c-margin-b-20">
						<form name="login-form" class="">
					    	<div class="c-content-media-1 " style="margin-top: 40px; margin-bottom: 180px;" >
								<div class="c-content-title-3 c-title-md c-center" style="border:none; padding-left: 0px;">
									<p><i class="fa fa-check-circle fa-2x c-font-green-4"></i></p>
									<h3 class="c-font-green-4 c-font-uppercase c-font-bold">Login Details</h3>
								</div>
								<hr>
								<div class="table-responsive">
									<table class="table">
										<tr>
											<td style="font-weight: bolder;">
												<?php echo(isset($login_fetch_user_data->fullname) && !empty($login_fetch_user_data->fullname))?$login_fetch_user_data->fullname:'';?><br>
												<?php echo(isset($login_fetch_user_data->address) && !empty($login_fetch_user_data->address))?$login_fetch_user_data->address:'';?><br>
												<i class="fa fa-envelope-o"></i>
												<?php echo(isset($login_fetch_user_data->email) && !empty($login_fetch_user_data->email))?$login_fetch_user_data->email:'';?>&nbsp;&nbsp;<i class="fa fa-phone"></i></i><?php echo(isset($login_fetch_user_data->mobile) && !empty($login_fetch_user_data->mobile))?$login_fetch_user_data->mobile:'';?>
											</td>
										</tr>
										<tr>
											<td>
												<button type="text" class="btn btn-primary btn-xs">
													<a style="color: white;" href="donation-page"><small>change</small></a>
												</button>
											</td>
										</tr>
								    </table>
								    <table >
								    	<tr>
											<td >
												<div class="col-md-12"style="padding-left:8px;">
													<input class="form-control c-theme " value="<?php echo(isset($donation_data->amount) && !empty($donation_data->amount))?$donation_data->amount:'';?>" name="amount"  type="text" placeholder="Enter Donation Amount" >
												</div>
											</td>
											<td>
												<div class="c-checkbox has-info">
				                                    <input type="checkbox" id="checkbox1-78" class="c-check">
				                                    <label for="checkbox1-78" style="color:#454e56;">
				                                    <span></span>
				                                    <span class="check"></span>
				                                    <span class="box"></span>
				                                    </label>
				                                </div>
											</td>
											<td>
												I Agree
											</td>
										</tr>
										<tr>
											<td style="padding-left:8px;padding-top: 15px; " class="c-pull-right" >
												<button type="text" class="btn btn-primary btn-xs">
													<a style="color: white;" href="#"><small>Donate Now</small></a>
												</button>
											</td><td></td>
										</tr>
								    </table>
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-3">
					</div>
				</div>
			</div>
	    </div>
</div>
<script src="<?php echo base_url();?>assets/site/plugins/jquery.min.js" type="text/javascript" ></script>
    <script src="<?php echo base_url();?>assets/site/plugins/jquery-migrate.min.js" type="text/javascript" ></script>
    <script src="<?php echo base_url();?>assets/site/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript" ></script>
    <script src="<?php echo base_url();?>assets/site/plugins/jquery.easing.min.js" type="text/javascript" ></script>
    <script src="<?php echo base_url();?>assets/site/plugins/reveal-animate/wow.js" type="text/javascript" ></script>
    <script src="<?php echo base_url();?>assets/site/demos/default/js/scripts/reveal-animate/reveal-animate.js" type="text/javascript" ></script>

    <!-- END: CORE PLUGINS -->

            <!-- BEGIN: LAYOUT PLUGINS -->
            <script src="<?php echo base_url();?>assets/site/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
            <script src="<?php echo base_url();?>assets/site/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
            <script src="<?php echo base_url();?>assets/site/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
            <script src="<?php echo base_url();?>assets/site/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
            <script src="<?php echo base_url();?>assets/site/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
            <script src="<?php echo base_url();?>assets/site/plugins/smooth-scroll/jquery.smooth-scroll.js" type="text/javascript"></script>
            <script src="<?php echo base_url();?>assets/site/plugins/slider-for-bootstrap/js/bootstrap-slider.js" type="text/javascript"></script>
            <script src="<?php echo base_url();?>assets/site/plugins/js-cookie/js.cookie.js" type="text/javascript"></script>
                <!-- END: LAYOUT PLUGINS -->
    
    <!-- BEGIN: THEME SCRIPTS -->
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
    <script src="<?php echo base_url();?>assets/site/base/js/components-shop.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/site/base/js/app.js" type="text/javascript"></script>

    <script src="<?php echo base_url();?>assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/global/plugins/jquery-validation/js/additional-methods.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/global/plugins/jquery-validation/lib/jquery.form.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/site/js/lightbox.min.js"></script>
<script src="<?php echo base_url();?>assets/site/js/jquery.toast.js"></script>
<script src="<?php echo base_url();?>assets/js/common.js" type="text/javascript"></script>
    </body>
</html>
