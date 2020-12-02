<!DOCTYPE html>
<html lang="en"  >
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<head>
		<meta charset="utf-8"/>
		<title>Apply for ten days courses | Vipassana</title>
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
    <body class="c-layout-header-fixed c-layout-header-mobile-fixed">
		<div class="c-layout-page">
			 <?php $this->load->view('site/header'); ?>
				<div class=" c-size-md">
					<div class="container">
					 	<div class="c-body">
							<div class="row">
								<div class="col-md-12">
									<div class="c-content-title-2">
										<h3 class="c-center">Apply for 10 Day & other Vipassana Courses</h3>
										<div class="c-line c-dot c-bg-blue-2 c-bg-after-blue-2"></div>
									</div>	
								</div>
							</div>
						</div>
						<div>
							<p>
								Vipassana meditation is taught during ten-day residential courses. This period has been found to be the minimum necessary for new students to understand the technique and its benefits through their own experience.
							</p>
						</div>
						<div class="c-content-box c-size-md c-bg-white" style="padding:20px;">
						    <div class="container">
							    <div class="c-content-services-6">
							        <div class="c-content-title-3 c-title-md c-border-left-blue-2">
										<h3 class="c-font-blue-2 ">Online Application</h3>
									</div>
									<div class="row">
								    <?php if(isset($ten_day_course_data) && !empty($ten_day_course_data))
			                        { $i=1;
			                          foreach ($ten_day_course_data as $key) 
			                            { ?>
											<div class="col-md-6 col-sm-6">
												<div class="c-content-services-6-item wow fadeInUp"style="padding: 20px 0px 30px 15px;" data-wow-delay="0s">
													<div class="row">
														<div class="col-md-7">
															<div class="c-works">
																<div class="c-first"><a target="_blank" href="<?php echo(isset($key->ten_day_course_url) && !empty($key->ten_day_course_url))?$key->ten_day_course_url:'';?>"><img style="height:200px;width:400px;border-radius: 5px;" src="<?php echo base_url();?>uploads/ten_day_course_images/<?php echo(isset($key->cover_photo) && !empty($key->cover_photo))?$key->cover_photo:'';?>"class="img-responsive"></a></div>
															</div>
														</div>
														<div class="col-md-5">
															<h3 class="" style="line-height:25px;"><a target="_blank" href="<?php echo(isset($key->ten_day_course_url) && !empty($key->ten_day_course_url))?$key->ten_day_course_url:'';?>"><?php echo(isset($key->center_name) && !empty($key->center_name))?$key->center_name:'';?></a> 
															</h3>
															<span class=""><?php echo(isset($key->short_decription) && !empty($key->short_decription))?$key->short_decription:'';?></span> <br>
															<a target="_blank" href="<?php echo(isset($key->ten_day_course_url) && !empty($key->ten_day_course_url))?$key->ten_day_course_url:'';?>"> <button style="margin-top: 11%;" class="btn btn-info btn-xs">Apply</button></a> 
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
			        </div><br>
			        <div class="container">
						<div class="row">
							<div class="col-md-6">
								<div class="c-content-title-3 c-title-md c-border-left-blue-2">
									<h3 class="c-font-blue-2 ">Contact Details</h3>
								</div>
								<tr>
									<td></td>
									<td> Dhammanand/Dhammapunna is same as below  </td>
								</tr> 
								<div class="c-address" style="line-height:27px;">
									<table>
										<tr>
											<td ><i class="icon-pointer c-font-blue-2">&nbsp;</i></td>
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
										<tr><td> <i class="icon-call-end c-font-blue-2"></i> </td>
											<td>
											020-24468903</<i>
											</td>
										</tr>
									</table> 
								</div><br>
							</div>
						</div>
			        </div>
			    </div><br>
			 <?php $this->load->view('site/footer'); ?>
		</div>
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
			App.init(); // init core    
		});
		</script>
    </body>
</html>