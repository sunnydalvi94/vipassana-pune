<!DOCTYPE html>
<html lang="en"  >
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<head>
		<meta charset="utf-8"/>
		<title>Children Courses | Vipassana</title>
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
	    <style type="text/css">
			.c-content-media-1 p {
		    font-size: 17px!important;
		}
	    </style>
	</head>
	<body class="c-layout-header-fixed c-layout-header-mobile-fixed" >
	    <div class="c-layout-page">
			<?php $this->load->view('site/header'); ?>
		   		<div class=" c-size-md  c-bg-grey-1" style="margin-top:-33px;">
		   			<section>
			   			<div class="container" style="">
							<div class="c-body">
								<div class="row">
									<div class="col-md-12">
										<div class="c-content-title-2" style="margin-bottom: 41px;padding-top:30px;">
											<h3 class="c-center">Children Courses</h3>
											<div class="c-line c-center c-dot c-bg-blue-2 c-bg-after-blue-2" style=""></div>
										</div>	
									</div>
								</div>
							</div> 
							<div class="row">
							    <div class="col-md-12">		
							    	<div class="c-content-title-3 c-title-md c-font-uppercase c-border-blue-2" style="">
										<h3 class="c-font-blue-2  ">Feedback from Children(2 Day Anapana Course)</h3>
									</div>
									<div class="c-content-box c-bg-parallax">
										<div class="c-content-testimonials-1" data-slider="owl">
											<div class="owl-carousel owl-theme c-theme c-owl-nav-center" data-single-item="true" data-slide-speed="5000" data-rtl="false">   <?php if(isset($children_feedback1_data) && !empty($children_feedback1_data))
		                                        {
				                                 $i=1;
				                                    foreach ($children_feedback1_data as $key) 
				                                    {
				                                     ?>
												 	<div class="item">
												  	  	<div class="c-content-media-2 c-bg-img-center" style="background-image: url(<?php echo base_url(); ?>uploads/children_slider_images/<?php echo(isset($key->image) && !empty($key->image))?$key->image:'';?>); min-height: 380px;">
														</div>
												  	</div>
											  	    <?php 
				                                    }
				                                }
				                                ?>
											</div>
									        <!-- End-->
									    </div>
									    <!-- End-->
									</div>
								</div>
							</div>
						</div>
		   			</section>
		   			<!-- ..................................//Schedule of  Dhammapunna for child courses........................ -->
		   			<section>
						<div class="c-content-box c-size-md  c-bg-grey-1"style="padding-top:10px;padding-bottom: 0px;">
							<div class="container">
								<div class="c-content-title-3 c-title-md  c-font-uppercase  c-border-blue-2" style="margin-bottom: 40px;">
									<h3 class="c-font-blue-2">Children Course Schedule Dhammapunna</h3>
								</div>
								<div class="row" data-auto-height="true">
									<?php if(isset($children_course_data) && !empty($children_course_data))
				                        { $i=1;
				                        foreach ($children_course_data as $key) 
				                            { ?>
											<div class="col-md-6  c-margin-b-20">
												<div class="c-content-media-1 " data-height="height">
												    <div class="c-content-title-3 c-title-md " style="border:none; padding-left: 0px;">
										                <h3 class="c-theme-on-hover c-font-uppercase c-font-bold"><?php echo(isset($key->children_course_title) && !empty($key->children_course_title))?$key->children_course_title:'';?></h3>
										            </div>
													<div style="line-height:40px;" >
														<div class="row">
															<div class="col-md-3">
																<span class="c-content-title-3 c-title-md  c-theme-on-hover c-font-bold" style="border:none;padding-left: 0px;"><i style="" class="fa fa-calendar  c-font-blue-2">&nbsp;</i>Date:</span>
															</div>
															<div class="col-md-9">
																<p><?php echo(isset($key->date) && !empty($key->date))?$key->date:'';?></p>
															</div>
														</div>
														<div class="row">
															<div class="col-md-3">
																<span class="c-content-title-3 c-title-md  c-theme-on-hover c-font-bold" style="border:none;padding-left: 0px;"><i style="" class="fa fa-clock-o  c-font-blue-2">&nbsp;</i>Timing:</span>
															</div>
															<div class="col-md-9">
																<span><?php echo(isset($key->timing) && !empty($key->timing))?$key->timing:'';?></span>
															</div>
														</div>
														<div class="row">
															<div class="col-md-3">
																<span class="c-content-title-3 c-title-md  c-theme-on-hover c-font-bold" style="border:none;padding-left: 0px;"><i style="" class="fa fa-child  c-font-blue-2">&nbsp;</i>Age Limit:</span>
															</div>
															<div class="col-md-9">
																<span><?php echo(isset($key->age_limit) && !empty($key->age_limit))?$key->age_limit:'';?></span>
															</div>
														</div>
														<div class="row">
															<div class="col-md-3">
																<span class="c-content-title-3 c-title-md  c-theme-on-hover c-font-bold" style="border:none;padding-left: 0px;"><i style="" class="icon-notebook  c-font-blue-2">&nbsp;</i>Registration:</span>
															</div>
															<div class="col-md-9">
																<span><?php echo(isset($key->registration) && !empty($key->registration))?$key->registration:'';?></span>
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
		   			</section>
		   			<section>
		   				<div class="c-content-box c-size-md c-bg-grey-1"style="padding:30px 0px">
							<div class="container">
								<div class="c-content-title-3 c-title-md  c-font-uppercase  c-border-blue-2" style="margin-bottom: 40px;">
									<h3 class="c-font-blue-2">download 2 day's course form</h3>
								</div>
								<p class="" >Download the application form on below link and print it out. You can send it by Speed post or hand-deliver it to our office</p>
								<div class="row" data-auto-height="true">
									<div class="col-md-6  c-margin-b-20">
										<div class="c-content-media-1 ">
										    <div class="c-content-title-3 c-title-md " style="border:none; padding-left: 0px;">
								                <h3 class=" c-font-bold">HINDI APPLICATION FORM</h3>
								            </div>
						                    <table style="line-height: 40px;" >
								                <tr>
								                	<td>
								                		<span> <a style="color:#5c6873;" class="c-theme-on-hover" href="<?php echo base_url(); ?>assets/site/pdf/child_course_application_hindi.pdf" download> <u> Download Children 2 Day course(Residential)</u></a></span>
								                	</td>
								                </tr>
											</table>
										</div>
									</div>
									<div class="col-md-6  c-margin-b-20">
										<div class="c-content-media-1 ">
										    <div class="c-content-title-3 c-title-md " style="border:none; padding-left: 0px;">
								                <h3 class=" c-font-bold">ENGLISH APPLICATION FORM</h3>
								            </div>
						                    <table style="line-height: 40px;" >
								                <tr>
								                	<td>
								                		<span> <a style="color:#5c6873;" class="c-theme-on-hover" href="<?php echo base_url(); ?>assets/site/pdf/child_course_application_english.pdf" download> <u>Download Children 2 Day course(Residential)</u></a> </span>
								                	</td>
								                </tr>
											</table>
										</div>
									</div>
								</div>
							</div> 
						</div>
		   			</section>
		   			<section>
		   				<div class="c-content-box c-size-md c-bg-grey-1" style="padding:0px 0px;">
							<div class="container">
								<div class="c-content-title-3 c-title-md  c-font-uppercase  c-border-blue-2" style="margin-bottom: 30px;">
									<h3 class="c-font-blue-2">Anapana Courses for Children</h3>
								</div>
								<div class="text-justify">
									<p>Over the past 28 years,hundreds of Anapana courses have been conducted exclusively for children around the world. These courses have yielded substantial benefits for the thousands of children who have attended them. Many of them have experienced a positive change in their outlook, behaviour and attitude. Many have found their ability to concentrate has improved and that their memory has strengthened. And above all,these children have acquired a tool that is of immense value to them for the rest of their lives.</p>
									<p>Children are, by nature, active and enthusiastic, with an eagerness to leam and explore. For this reason, it is appropriate to offer them an opportunity to explore themselves and their mind with all its hidden faculties, latent abilities and subtle complexities. Learning Ananpana plants a wholesome interest in introspection and meditation, which may open an entirely new dimension of life for them later on.</p>
									<p>Anapana courses for children have been conducted since 1986. These courses have been offered to children of various ages and socio-economic and cultural groups. They have been conducted in Vipassana meditation centres as well as at schools and other institutions, and have been both residential and nonresidential.</p>
									<p>Whether a children's Anapana course is held at a school or at a Vipassana meditation centre, it is essential that the student be given an opportunity to continue to practice Anapana for a short period each day after the course to yield the true benefit of the practice.</p>
								</div>
							</div>
						</div>			
		   			</section>
		   			<section>
		   				<div class="c-content-box c-size-md c-bg-grey-1" style="padding:30px 0px;">
							<div class="container">
								<div class="c-content-title-3 c-title-md  c-font-uppercase  c-border-blue-2" style="margin-bottom: 30px;">
									<h3 class="c-font-blue-2">Children Feedback</h3>
								</div>
				                <script src="https://www.publicalbum.org/js/pa-embed-player.min.js" async></script>
								<div class="pa-embed-player" style="width:100%; height:480px; display:none;" data-link="<?php echo base_url();?>assets/site/img/children_written_feedback" data-title="Anapana 2 Day - Open House -Painting/Essay Writing" data-slideshow-repeat="false">
								    <?php if(isset($children_feedback2_data)&& !empty($children_feedback2_data)) 
								    {
									 $i=1;
									foreach ($children_feedback2_data as $key) 
									{?>
									<img data-src="<?php echo base_url();?>assets/site/img/children_written_feedback/<?php echo isset($key->image) && !(empty($key->image))?$key->image:' ';?> " src="" alt="" />
									    <?php  
			                            }
			                        }
								    ?>
							    </div>
							</div>    
						</div>		
		   			</section>
			    </div>
			    <script type="text/javascript">
			    	function onTabChange(param){
			    		window.location =window.location.pathname + '#' +param;
			    	}
			    	onTabChange('eligibility');
			    </script>
			    <section>
					   	<div class="c-content-box c-size-md c-bg-grey-1" style="padding: 20px 0px 30px 0px ; ">
							<div class="container">
								<div class="c-content-tab-4 c-opt-5" role="tabpanel">
									<div class="c-content-title-3 c-title-md  c-font-uppercase  c-border-blue-2" style="margin-bottom: 40px;">
									<h3 class="c-font-blue-2">Children Course Schedule Dhammapunna</h3>
									</div>
									<ul class="nav nav-justified" role="tablist">
										<li role="presentation" class="active">
											<a href="#tab-1" onclick="onTabChange('eligibility')" role="tab" data-toggle="tab">Eligibility</a>
										</li>
										<li role="presentation">
											<a href="#tab-2" onclick="onTabChange('TimeTable')" role="tab" data-toggle="tab">TimeTable</a>
										</li>
										<li role="presentation">
											<a href="#tab-3" onclick="onTabChange('pre-requisites-for-institution')" role="tab" data-toggle="tab">Pre-requisites for Institution </a>
										</li>
										<li role="presentation">
											<a href="#tab-4" onclick="onTabChange('guidelines-for-courses-in-institutions')" role="tab" data-toggle="tab">Guidelines For Courses in Institutions</a>
										</li>
										<li role="presentation">
											<a href="#tab-5" onclick="onTabChange('requisition-form')" role="tab" data-toggle="tab">Requisition Form</a>
										</li>
									</ul>
									<div class="tab-content">
										<div role="tabpanel" class="tab-pane fade in active" id="tab-1" >
											<ul class="c-tab-items"style="padding: 30px 30px 20px 40px;">
												<li class="row">
													<div class="col-sm-12 col-xs-12 text-justify">
														<p> Students from the age of eight to sixteen eighteen years are eligible to attend the courses. Separate courses should be organized for the two different age groups, one for younger children: ages eight to twelve; and one for the elder ones: ages thirteen to eighteen.These are ideal groupings but slightly different groupings are also sometime considered. Student less than eight years of age and more than eighteen years may not be admitted to a Children’s Anapana course. </p>
		                                                <p>The recommended number of children per course should not be exceed fifty. For courses larger than fifty children, additional children's course Teachers may be required to conduct the course.</p>
													</div>
												</li>
											</ul>
										</div>
										<div role="tabpanel" class="tab-pane fade" id="tab-2">
											<ul class="c-tab-items"style="padding: 30px 30px 20px 40px;">
												<li class="row">
													<div class="col-sm-12 col-xs-12 text-justify">
														<p>Various schedules have been developed and successfully implemented in schools over the years. One-day or two-day non residential courses can easily be conducted during the school hours. In residential schools, three-day residential courses may be held. The timetable is determined by the length of the course and whether it is residential or not. The timetable should be modified to avoid the times when other students who are not participating in the course could interact with the children taking the course. </p>
		                                                <p>Enough time should be scheduled for meditation periods, counselling (when the CCT meets with small groups/ for children to reinforce the practice), discourses and stories, lunch, rest, play, etc. the total duration of a one-day course is about six hours.
		                                                The timetable will be decided by the teacher conducting the course in consultation with the organisers and school administrator.</p>
													</div>
												</li>
											</ul>
										</div>
										<div role="tabpanel" class="tab-pane fade" id="tab-3">
											<ul class="c-tab-items"style="padding: 30px 30px 20px 40px;">
												<li class="row">
													<div class="col-sm-12 col-xs-12 text-justify">
														<p>To begin the process of having a children's Anapana course held in a school, administrator or the head of the school should send a formal request to either the Regional Co-ordinator of children's courses, a Children's Course.</p>
														<p>Teacher or a local Viapassana meditation centre. At least one person from the teaching staff or administration should have completed a ten days Vipassana course in this tradition. Apart from this, there should be a firm commitment by the school or institution to provide an opportunity for the children to continue their practice of meditation for a few minutes every day. The school management may decide the time to implement this programme within their daily routine, with the minimum of about ten minutes a day for practice. </p>
														<p>The limit on the number of students participating in a course should be carefully determined. A very large group may be difficult to manage and a very small group may have difficulty in creating cohesive and inspirational atmosphere. Generally, courses with between twenty-five to fifty participants work well. However, depending on the infrastructure, facility and circumstances, the number may vary. Ideally, a course should be organised for all of the students from the participating classes.</p> 
													    <p>All the teachers of the participating classes should also participate in the course. The teachers of the participating classes may sit as observers. Besides organising courses during the regular school week, courses may also be organised to take place at the school on a weekend or during vacation periods.</p>
													</div>
												</li>
											</ul>
										</div>
										<div role="tabpanel" class="tab-pane fade" id="tab-4">
											<ul class="c-tab-items"style="padding: 30px 30px 20px 40px;">
												<li class="row">
													<div class="col-sm-12 col-xs-12 text-justify">
														<p>
													<b>	1.</b> For a residential Anapana course, separate and adequate sleeping accommodation, showers, and toilets should be available for boys and girls. A dining facility where boys and girls can sit separately is also required. </p>
														<p><b> 2.</b> The course should be organised in a way that no other students or staff are present in the area where the course is being conducted or where the attending children will be residing.  
														Organising on weekends or during holidays can be helpful in ensuring this separation.</p>
														<p><b>3.</b> A large enough room or hall should be available for seating all the meditators on the floor on cushions or comfortable mats.</p>
														<p><b>4.</b> A suitable sound system and projection facilities should be available for playing instructions tapes and discourses. </p>
														<p><b>5.</b> The place for meditation and the accommodation should be at a sufficient distance from main roads and traffic in order to have a quiet, peaceful atmosphere required for meditation.</p> 
														<p><b>6.</b> A few course servers, who are experienced Vipassana meditators, may be required to help in running and managing the course. </p>
														<p><b>7.</b> If there are children who are old students and have been doing courses regularly, they may serve on the course, having minor responsibilities. (They should never be put in a counsellor role.) </p>
													</div>
												</li>
											</ul>
										</div>
										<div role="tabpanel" class="tab-pane fade" id="tab-5">
											<ul class="c-tab-items"style="padding: 30px 30px 20px 40px;">
												<li class="row">
													<div class="col-sm-12 col-xs-12">
														<p>
															( From school administrators and heads of institutions, for conducting Anapana courses in their institutions ) </p>
														<p><b>1.</b> Name and address of the sponsoring authority </p>
														<p><b>2.</b> Name and address of the school / institution participating</p>
														<p><b>3.</b> Name/s of the person/s in the institution who has / have done a ten-day course previously and their position in the school (i.e. head/principle/trustee/teacher)</p>
														<p><b>4.</b> Dates of his/her first and last course</p>
													</div>
												</li>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
		   		</section>
			<?php $this->load->view('site/footer'); ?>
	    </div>
	    <script src="https://cdn.jsdelivr.net/npm/publicalbum@latest/dist/pa-embed-player.min.js" async type="3d8cbcb27e45e880d7f56e3f-text/javascript"></script>
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
	    <script src="<?php echo base_url();?>assets/js/common.js" type="text/javascript"></script>
		<script>
		$(document).ready(function() {    
			App.init();
		});
		</script>
    </body>
</html>
