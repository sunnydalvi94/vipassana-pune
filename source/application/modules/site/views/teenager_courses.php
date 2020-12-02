								
<!DOCTYPE html>
<html lang="en"  >
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<head>
		<meta charset="utf-8"/>
		<title>Teenager Courses | Vipassana</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<meta content="" name="description"/>
		<meta content="" name="author"/>
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
		<link href="<?php echo base_url(); ?>assets/site/demos/default/css/plugins.css" rel="stylesheet" type="text/css"/>
		<link href="<?php echo base_url(); ?>assets/site/demos/default/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
		<link href="<?php echo base_url(); ?>assets/site/demos/default/css/themes/default.css" rel="stylesheet" id="style_theme" type="text/css"/>
		<link href="<?php echo base_url(); ?>assets/site/css/custom.css" rel="stylesheet" type="text/css"/>
		<link rel="shortcut icon" href="favicon.ico"/>
	    <link rel="shortcut icon " type="image/gif" href="<?php echo base_url(); ?>assets/site/img/logo/wheel.gif">
	</head>
	<body class="c-layout-header-fixed c-layout-header-mobile-fixed" >
	    <div class="c-layout-page">
		    <?php $this->load->view('site/header'); ?>
	   		<div class=" c-size-md c-bg-grey-1" style="margin-top:-33px;padding-bottom:30px;">
	   			<section>
		   			<div class="container" style="padding-top:30px;">
						<div class="c-body">
							<div class="row">
								<div class="col-md-12">
									<div class="c-content-title-2" >
										<h3 class="c-center">Teenager Courses</h3>
										<div class="c-line c-center c-dot c-bg-blue-2 c-bg-after-blue-2" style=""></div>
									</div>	
									<div class="c-content-title-3 c-title-md  c-font-uppercase  c-border-blue-2" style="margin:30px 0px  40px 0px;">
									  <h3 class="c-font-blue-2">Teenager Course Schedule </h3>
								    </div>
								    <div class="row" data-auto-height="true">
							    	    <?php if(isset($teenager_course_data) && !empty($teenager_course_data))
				                        { $i=1;
				                            foreach ($teenager_course_data as $key) 
				                            { ?>
												<div class="col-md-6 c-margin-b-20">
													<div class="c-content-media-1 " data-height="height">
														<div class="c-content-title-3 c-title-md " style="border:none; padding-left: 0px;">
															<h3 class="c-theme-on-hover c-font-uppercase c-font-bold"><?php echo(isset($key->teenager_course_name) && !empty($key->teenager_course_name))?$key->teenager_course_name:'';?></h3>
														</div>
														<div style="line-height: 40px;" >
															<div class="row">
																<div class="col-md-3">
																	<span class="c-content-title-3 c-title-md  c-theme-on-hover c-font-bold" style="border:none;padding-left: 0px;"><i style="" class="fa fa-external-link  c-font-blue-2">&nbsp;</i>VISIT:</span>
																</div>
																<div class="col-md-9">
																	<span >&nbsp;<a style="color:#5c6873;" target="_blank"class="c-theme-on-hover" href="<?php echo(isset($key->teenager_course_url) && !empty($key->teenager_course_url))?$key->teenager_course_url:'';?>"><u>Course Schedule</u></a></span>
																</div>
															</div>
															<div class="row">
																<div class="col-md-3">
																	<span class="c-content-title-3 c-title-md  c-theme-on-hover c-font-bold" style="border:none;padding-left: 0px;"><i style="" class="fa fa-map-marker  c-font-blue-2">&nbsp;&nbsp;</i>ADDRESS:</span>
																</div>
																<div  class="col-md-9">
																	<span><?php echo(isset($key->teenager_course_address) && !empty($key->teenager_course_address))?$key->teenager_course_address:'';?></span>
																</div>
															</div>
															<div class="row">
																<div class="col-md-3">
																	<span class="c-content-title-3 c-title-md  c-theme-on-hover c-font-bold" style="border:none;padding-left: 0px;"><i style="" class="fa fa-clock-o  c-font-blue-2">&nbsp;</i>Duration:</span>
																</div>
																<div  class="col-md-9">
																	<span><?php echo(isset($key->teenager_course_duration) && !empty($key->teenager_course_duration))?$key->teenager_course_duration:'';?></span>
																</div>
															</div>
															<div class="row">
																<div class="col-md-3">
																	<span class="c-content-title-3 c-title-md  c-theme-on-hover c-font-bold" style="border:none;padding-left: 0px;"><i style="" class="fa fa-child  c-font-blue-2">&nbsp;</i>Age Limit:</span>
																</div>
																<div  class="col-md-9">
																	<span><?php echo(isset($key->teenager_course_age_limit) && !empty($key->teenager_course_age_limit))?$key->teenager_course_age_limit:'';?></span>
																</div>
															</div>
														</div>
													</div>
												</div>
										     <?php 
				                            }
				                        }?>
								    </div>
								</div>
							</div>
						</div> 
					</div>
	   			</section>
	   			<section>
		   			<div class="container" style="margin-top: 30px;">
						<div class="c-body">
							<div class="row">
								<div class="col-md-12">
									<div class="c-content-title-3 c-title-md  c-font-uppercase  c-border-blue-2" style="margin-bottom: 40px;">
									  <h3 class="c-font-blue-2">The procedure for admission for Teenager’s Course is given below </h3>
								    </div>
								    <div class="row" data-auto-height="true">
										<div class="col-md-10  c-margin-b-20">
											<div class="c-content-media-1 " data-height="height">
												<table style="margin-bottom: 10px;">
													<tr>
														<td>
															<span class="c-font-bold" > Download the application form and print it out You can send it by Speed post or hand-deliver it to our office</span>
														</td>
													</tr>
												</table>
												<div>
													<div class="row"style="line-height: 30px;" >
														<div class="col-md-1" style="width:2%;">
															<span class="c-content-title-3 c-title-md  c-theme-on-hover c-font-bold" style="border:none;padding-left: 0px;"><i style="" class="fa fa-download  c-font-blue-2">&nbsp;</i> </span>
														</div>
														<div class="col-md-11"style=";padding:0px;">
															<span>&nbsp; <a style="color:#5c6873;" class="c-theme-on-hover" href="<?php echo base_url(); ?>assets/site/pdf/teenger_application_form.pdf"download> <u>Teenagers Application Form</u></a></span>
														</div>
													</div>
													<div class="row"style="line-height: 30px;">
														<div class="col-md-1" style="width:2%;">
																<span class="c-content-title-3 c-title-md  c-theme-on-hover c-font-bold" style="border:none;padding-left: 0px;"><i style="" class="fa fa-download  c-font-blue-2">&nbsp;</i> </span>
														</div>
														<div class="col-md-11"style=";padding:0px;">
															<span >&nbsp; <a style="color:#5c6873;" class="c-theme-on-hover" href="<?php echo base_url(); ?>assets/site/pdf/teenger_december_2015.pdf"download><u>Download Code of Discipline(Hindi)</u></a></span>
														</div>
													</div>
													<div class="row"style="line-height: 30px;">
														<div class="col-md-1" style="width:2%;">
																<span class="c-content-title-3 c-title-md  c-theme-on-hover c-font-bold" style="border:none;padding-left: 0px;"><i style="" class="fa fa-download  c-font-blue-2">&nbsp;</i> </span>
														</div>
														<div class="col-md-11"style=";padding:0px;">
															<span>&nbsp;<a style="color:#5c6873;" class="c-theme-on-hover" href="<?php echo base_url(); ?>assets/site/pdf/teenagers-vipassana-course-code_ofdiscipline.pdf"download><u>Download Code of Discipline(English)</u></a></span>
														</div>
													</div>
												</div>
											</div>
										</div>
								    </div>
								</div>
							</div>
						</div> 
					</div>
	   			</section>
	   			<section>
	   				<div class="container" style="margin-top: 30px;">
						<div class="c-body">
							<div class="row">
								<div class="col-md-12">
									<div class="c-content-title-3 c-title-md  c-font-uppercase  c-border-blue-2" style="margin-bottom: 40px;">
									  <h3 class="c-font-blue-2">contact us and notes </h3>
								    </div>
								    <div class="row" data-auto-height="true">
										<div class="col-md-5 ">
											<div class="c-content-media-1" style="height:260px;">
												<div class="c-content-title-3 c-title-md " style="border:none; padding-left: 0px;margin-bottom:8px">
								               		 <h3 class="c-theme-on-hover c-font-uppercase c-font-bold" style="  margin-bottom:11px; "><i class="icon-pointer c-font-blue-2"></i> &nbsp;contact us</h3>
								           		 </div>
									            <div class="c-address">
							                        <table style="line-height: 25px;">
							                            <tr>
							                                <td >&nbsp;</td>
							                                <td>Pune Vipassana Samiti </td>
							                            </tr>
							                            <tr>
							                                <td></td>
							                                <td> Dadawadi, opp. Nehru Stadium, </td>
							                            </tr>  
							                            <tr>
							                            	<td></td>
							                                <td>
							                                    Near Anand Mangal Karyalaya
							                                </td>
							                            </tr>
							                            <tr>
							                            	<td></td>
							                                <td>
							                                   Pune 411 002, Maharashtra, India
							                                </td>
							                            </tr>
							                        </table> 
							                        <span class="c-font-bold" style="">Closed on Tuesday</span> 
	                                            </div>
											</div>
										</div>
										<div class="col-md-7 ">
											<div class="c-content-media-1 " style="210px;">
									            <div class="c-content-title-3 c-title-md " style="border:none; padding-left: 20px">
								               		 <h3 class="c-theme-on-hover c-font-uppercase c-font-bold" style=""><i class="fa fa-sticky-note c-font-blue-2"></i> &nbsp;notes</h3>
								               		 <p>All participants must read the Code of discipline and fill the Application form for Teenager's courses, giving full details and get their parent's approval on it.</p>
								               		 <p>They will be personally interviewed by an Assistant Teacher, who must ensure before recommending them that they understand the serious nature of the course and will observe the course discipline.</p>
								           		 </div>
											</div>
										</div>
								    </div>
								</div>
							</div>
						</div> 
					</div>	
	   			</section>
		    </div>
		    <?php $this->load->view('site/footer'); ?>
	    </div>
	    <script src="https://cdn.jsdelivr.net/npm/publicalbum@latest/dist/pa-embed-player.min.js" async type="3d8cbcb27e45e880d7f56e3f-text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/site/plugins/jquery.min.js" type="text/javascript" ></script>
		<script src="<?php echo base_url(); ?>assets/site/plugins/jquery-migrate.min.js" type="text/javascript" ></script>
		<script src="<?php echo base_url(); ?>assets/site/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript" ></script>
		<script src="<?php echo base_url(); ?>assets/site/plugins/jquery.easing.min.js" type="text/javascript" ></script>
		<script src="<?php echo base_url(); ?>assets/site/plugins/reveal-animate/wow.js" type="text/javascript" ></script>
		<script src="<?php echo base_url(); ?>assets/site/demos/default/js/scripts/reveal-animate/reveal-animate.js" type="text/javascript" ></script>
		<script src="<?php echo base_url(); ?>assets/site/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/site/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/site/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/site/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/site/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/site/plugins/smooth-scroll/jquery.smooth-scroll.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/site/plugins/slider-for-bootstrap/js/bootstrap-slider.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/site/plugins/js-cookie/js.cookie.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/site/base/js/components.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/site/base/js/components-shop.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/site/base/js/app.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/js/common.js" type="text/javascript"></script>
		<script>
			$(document).ready(function() {    
				App.init();
			});
		</script>
    </body>
</html>