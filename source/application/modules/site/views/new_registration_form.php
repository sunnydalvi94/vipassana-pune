<!DOCTYPE html>
<html lang="en"  >
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<head>
	<meta charset="utf-8"/>
		<title>New Registration Form | Vipassana</title>
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
				<div class="container" >
				 	<div class="c-body">
						<div class="row">
							<div class="col-md-12">
								<div class="c-content-title-2"style="padding-top:30px;">
									<h3 class="c-center">New Registration Form </h3>
									<div class="c-line c-dot c-theme-bg c-theme-bg-after"></div>
								</div>	
							</div>
						</div>
					</div><br>
					<div style="margin-top:-33px;">
						<section>
							<div class="container" style="padding-top:30px;">
								<div class="c-body">
									<div class="row">
										<div class="col-md-12">
											<div class="row" data-auto-height="true">
												<div class="col-md-1">
												</div>
										    	<div class="col-md-10  c-margin-b-20">
													<div class="c-content-media-1 " data-height="height">
														<div class="c-content-title-3 c-title-md " style="border:none; padding-left: 0px;">
															<h3 class="c-theme-font c-font-uppercase c-font-bold">Registration</h3>
														</div>
														<hr>
														<form  id="personal-details" action="personal-details" class="comment-form validate" data-apikey="5681648d-91d6-4371-a911-1497734d0016" method="post">
															<div class="row">
																<div class="form-group col-md-6 ">
																	<label  class="f-size">First Name<span style="color: red;">*</span></label>
																	<div class="input-icon right" style="float: initial !important;">
	                                                                    <i class="fa "></i>
																		<input placeholder="First Name" class="form-control c-theme" value="<?php echo(isset($registration_data->first_name) && !empty($registration_data->first_name))?$registration_data->first_name:'';?>" name="first_name"  type="text" required oninput="this.value = this.value.replace(/[^a-zA-Z.]/g, '').replace(/(\..*)\./g, '$1');">
																	</div>	
																</div>
																<div class="form-group col-md-6 ">
																	<label  class="f-size">Last Name<span style="color: red;">*</span></label>
																	<div class="input-icon right" style="float: initial !important;">
	                                                                    <i class="fa"></i>
																		<input   placeholder="Last Name" class="form-control c-theme " value="<?php echo(isset($registration_data->last_name) && !empty($registration_data->last_name))?$registration_data->last_name:'';?>" name="last_name" type="text" required oninput="this.value = this.value.replace(/[^a-zA-Z.]/g, '').replace(/(\..*)\./g, '$1');">
																	</div>	
																</div>
															</div>
															<div class="row">
																<div class="form-group col-md-6 " >
																	<label class="f-size">Phone Number<span style="color: red;">*</span></label>
																	<div class="input-icon right" style="float: initial !important;">
	                                                                    <i class="fa"></i>
																		<input placeholder="Phone Number" class="form-control c-theme " value="<?php echo(isset($registration_data->mobile) && !empty($registration_data->mobile))?$registration_data->mobile:'';?>" name="mobile" type="text"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  maxlength="10" required>
																    </div>		
																</div>
																<div class="form-group col-md-6 "  >
																	<label  class="f-size">Email<span style="color: red;">*</span></label>
																	<div class="input-icon right" style="float: initial !important;">
	                                                                    <i class="fa"></i>
																		<input   placeholder="Email" class="form-control c-theme " value="<?php echo(isset($registration_data->email) && !empty($registration_data->email))?$registration_data->email:'';?>"name="email"  type="email" required>
																    </div>
																</div>
															</div>
															<div class="row">
																<div class="form-group col-md-6 " >
																	<label class="f-size">Address Line1<span style="color: red;">*</span></label>
																	<div class="input-icon right" style="float: initial !important;">
	                                                                    <i class="fa"></i>
																		<input placeholder="Address line1" class="form-control c-theme " value="<?php echo(isset($registration_data->address_line_1) && !empty($registration_data->address_line_1))?$registration_data->address_line_1:'';?>" name="address_line_1"  type="text" maxlength="50" required>
																	</div>	
																</div>
																<div class="form-group col-md-6">
																	<label class="f-size">Address Line2</label>
																	<input   placeholder="Address line2" class="form-control c-theme" value="<?php echo(isset($registration_data->address_line_2) && !empty($registration_data->address_line_2))?$registration_data->address_line_2:'';?>" name="address_line_2"type="text" maxlength="50">
																</div>
															</div>
															<div class="row">
																<div class="form-group col-md-6 "  >
																	<label class="f-size">Zip/Pin Code<span style="color: red;">*</span></label>
																	<div class="input-icon right" style="float: initial !important;">
	                                                                    <i class="fa"></i>
																		<input   placeholder="Zip/Pin Code" class="form-control c-theme " value="<?php echo(isset($registration_data->pin_code) && !empty($registration_data->pin_code))?$registration_data->pin_code:'';?>" name="pin_code"  type="text" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="6">
																	</div>	
																</div>
																<div class="form-group col-md-6 ">
																	<label  class="f-size">PAN No.<span style="color: red;">*</span></label>
																	<div class="input-icon right" style="float: initial !important;">
	                                                                    <i class="fa"></i>
																		<input   placeholder="PAN No." class="form-control c-theme" value="<?php echo(isset($donation_data->pan_no) && !empty($donation_data->pan_no))?$donation_data->pan_no:'';?>" name="pan_no"  type="text" maxlength="10" pattern="[A-Z]{5}[0-9]{4}[A-Z]{1}" minlength="10" required>
																	</div>	
																</div>
															</div>
															<div class="row">
																<div class="form-group col-md-4 ">
																	<label class="f-size">City<span style="color: red;">*</span></label>
																	<div class="input-icon right" style="float: initial !important;">
	                                                                    <i class="fa"></i>
																		<input placeholder="City" class="form-control c-theme " value="<?php echo(isset($registration_data->city) && !empty($registration_data->city))?$registration_data->city:'';?>" name="city"  type="text" required oninput="this.value = this.value.replace(/[^a-zA-Z-,.]/g, '').replace(/(\..*)\./g, '$1');">
																	</div>	
																</div>
																<div class="form-group col-md-4 " >
																	<label  class="f-size">State<span style="color: red;">*</span></label>
																	<div class="input-icon right" style="float: initial !important;">
	                                                                    <i class="fa"></i>
																		<input   placeholder="State" class="form-control c-theme " value="<?php echo(isset($registration_data->state) && !empty($registration_data->state))?$registration_data->state:'';?>" name="state" type="text" required oninput="this.value = this.value.replace(/[^a-zA-Z.]/g, '').replace(/(\..*)\./g, '$1');">
																    </div>
																</div>
																<div class="form-group col-md-4 " >
																	<label class="f-size">Country<span style="color: red;">*</span></label>
																	<div class="input-icon right" style="float: initial !important;">
	                                                                    <i class="fa"></i>
																		<input placeholder="Country" class="form-control c-theme " value="<?php echo(isset($registration_data->country) && !empty($registration_data->country))?$registration_data->country:'';?>" name="country"  type="text" required oninput="this.value = this.value.replace(/[^a-zA-Z.]/g, '').replace(/(\..*)\./g, '$1');">
																	</div>	
																</div>
															</div>
															<div class="row">
																<div class="form-group col-md-4 ">
																	<label class="f-size">Username<span style="color: red;">*</span></label>
																	<div class="input-icon right" style="float: initial !important;">
	                                                                    <i class="fa"></i>
																		<input placeholder="Username" class="form-control c-theme  placeholder-no-fix " name="username" type="text" required>
																   	</div>	
																</div>
																<div class="form-group col-md-4">
																	<label class="f-size">Password<span style="color: red;">*</span></label>
																	<div class="input-icon right" style="float: initial !important;">
																        <i class="fa"></i>
																		<input   placeholder="Password" class="form-control c-theme  placeholder-no-fix" id="password" name="password" required minlength="6" title="Password and Confirm password should be Same" type="password" required   onchange="
																		  this.setCustomValidity(this.validity.patternMismatch ? this.title : '');
																		  if(this.checkValidity()) form.confirm_password.pattern = RegExp.escape(this.value);
																		">
																	</div>
																</div>
																<div class="form-group col-md-4">
																	<label class="f-size">Confirm Password<span style="color: red;">*</span></label>
																	<div class="input-icon right" style="float: initial !important;">
																        <i class="fa"></i>
																		<input   placeholder="Confirm Password"  class="form-control c-theme  placeholder-no-fix" name="confirm_password"title="Please enter the same Password" type="password" minlength="6" name="confirm_password" onchange="this.setCustomValidity(this.validity.patternMismatch ? this.title : '');
																		" required >
																	</div>	
																</div>

																<!-- <div class="form-group col-md-4">
																	<label class="f-size">Password<span style="color: red;">*</span></label>
																	<div class="input-icon right" style="float: initial !important;">
	                                                                    <i class="fa"></i>
																		<input   placeholder="Password" class="form-control c-theme  placeholder-no-fix" name="password" type="password" required title="Password and Confirm Password Should match">
																	</div>
																</div>
																<div class="form-group col-md-4">
																	<label class="f-size">Confirm Password<span style="color: red;">*</span></label>
																	<div class="input-icon right" style="float: initial !important;">
	                                                                    <i class="fa"></i>
																		<input   placeholder="Confirm Password" class="form-control c-theme  placeholder-no-fix" name="confirm_password" type="password" required >
																	</div>	
																</div> -->
															</div>
															
															<input class="form-control c-theme " value="<?php echo(isset($registration_data->status) && !empty($registration_data->status))?$registration_data->status:'';?>" name="status"  type="hidden">
															<input class="form-control c-theme " value="<?php echo(isset($registration_data->date_time) && !empty($registration_data->date_time))?$registration_data->date_time:'';?>" name="date_time"  type="hidden">
																<tr>
																	<td>
																		<span class="c-checkbox has-info" >
										                                    <input id="check_registration" type="checkbox"   class="c-check">
										                                    <label for="check_registration">
										                                    <span></span>
										                                    <span class="check"></span>
										                                    <span class="box"></span>
										                                    </label>
								                                        </span>	
																	</td>
																	<td> I agree to have attended at least one 10 day Vipassana course in the tradition of Sayagyi U Bha Khin as taught by S.N. Goenka.</td>
																</tr>
															<br><br>
															<div class="row">
																<div class="form-group  col-md-3 pull-right mt-10"  style="">
																   <button class="btn btn-primary btn-xs form-control common_save btncheck" rel="<?php echo(isset($registration_data->personal_details_id) && !empty($registration_data->personal_details_id))?$registration_data->personal_details_id:'';?>" data-pk="personal_details_id" >Submit</button>
																</div>
															</div>	
														</form>
													</div>
												</div>
												<div class="col-md-1">
												</div>
												  
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
		<script>
		$(function() {
			var chk = $('#check_registration');
			var btn = $('.btncheck');
			chk.on('change', function() {
			btn.prop("disabled", !this.checked);//true: disabled, false: enabled
			}).trigger('change'); //page load trigger event
			});
		</script>
	</body>
</html>
