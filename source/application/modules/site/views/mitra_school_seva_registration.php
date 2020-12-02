<!DOCTYPE html>
<html lang="en"  >
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
    <meta charset="utf-8"/>
        <title>Mitra School Seva Registration | Vipassana</title>
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
        <link href="<?php echo base_url(); ?>assets/site/css/custom.css" rel="stylesheet" type="text/css"/>
        <link rel="shortcut icon " type="image/gif" href="<?php echo base_url(); ?>assets/site/img/logo/wheel.gif">
        <link href="<?php echo base_url(); ?>assets/site/css/jquery.toast.css" rel="stylesheet" type="text/css">
     <!-- .......................................mitra school and seva registration style link............................. -->
        <link href="<?php echo base_url(); ?>assets/site/css/mitra_school_and_seva_registration.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="c-layout-header-fixed c-layout-header-mobile-fixed">
        <div class="c-layout-page">
            <?php $this->load->view('site/header'); ?>
            <div class=" c-size-md" style="padding: 0px 0px 20px 0px;">
                <div class="container">
                    <div class="c-content-tab-4 c-opt-5" role="tabpanel">
                        <div class="c-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="c-content-title-2">
                                        <h3 class="c-center">Mitra School Seva Registration</h3>
                                        <div class="c-line c-dot c-bg-blue-2 c-bg-after-blue-2"></div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="c-content-title-3 c-title-md c-border-blue-2">
                            <h3 class="c-font-blue-2 c-font-uppercase">Get trained to assist school implementing MITRA orientation sessions</h3>
                        </div>
                    </div>
                </div>        
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-justify">
                        <p>for old Vipassana Students only</p>
                        <p>MITRA Upakram (mind in training for right awarness) is a joint initiative of Government of Maharashtra and Vipassana Research Institute 
                        to facilitate wholesome mental growth of school children. MITRA Upakram aspires to cover 2.5 crore school children and 6 Lac school teachers
                         from all schools in Mahrashtra..<br>Please register by filling up form below. <br>Please share to interested Vipassana Students</p>
                        <p>Metta, Pune Vipassana Samiti.</p>
                        <p style="color:red;">* Required</p>
                    </div>    
                 </div> 
            </div>
            <section>
                <div class="container ">
                    <form  id="mitra-school-registration" action="mitra-school-registration" class="comment-form validate" data-apikey="5681648d-91d6-4371-a911-1497734d0016" method="post" >
                        <div class="row"> 
                            <div class=" col-md-4 form-group" >
                                <label  for="first name" >First Name<small style="color: red;">*</small></label>
                                <div class="input-icon right" style="float: initial !important;">
                                    <i class="fa "></i>
                                    <input id="first_name" minlength="5" type="text" class="form-control c-square c-theme " name="first_name" placeholder="First Name" oninput="this.value = this.value.replace(/[^a-zA-Z.]/g, '').replace(/(\..*)\./g, '$1');" required>
                                </div>     
                            </div>
                            <div class=" col-md-4 form-group" >
                                <label  >Middle Name<small style="color: red;">*</small></label>
                                <div class="input-icon right" style="float: initial !important;">
                                    <i class="fa "></i>
                                    <input id="Middle_name"  type="text" class="form-control c-square c-theme " name="middel_name" placeholder="Middle Name" minlength="1" maxlength="15" title="minimum 1 character is required" >
                                </div>     
                            </div>
                            <div class=" col-md-4 form-group" >
                                <label  >Last Name<small style="color: red;">*</small></label>
                                <div class="input-icon right" style="float: initial !important;">
                                    <i class="fa "></i>
                                    <input id="last_name"  type="text"  class="form-control c-square c-theme " name="last_name" placeholder="Last Name" oninput="this.value = this.value.replace(/[^a-zA-Z.]/g, '').replace(/(\..*)\./g, '$1');" required>
                                </div>     
                            </div> 
                        </div>
                        <div class="row"> 
                            <div class="col-md-4">
                                <div class="form-group " >
                                    <label  >No. of 10 Day Courses<small style="color: red;">*</small></label>
                                    <select class="form-control  c-square c-theme " name="ten_day_course_id" required >
                                        <option value="">Select</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10+</option>
                                    </select> 
                                </div> 
                            </div> 
                            <div class="col-md-4 ">
                                <div class="form-group" >
                                <label  >Gender<small style="color: red;">*</small></label>
                                    <select class="form-control  c-square c-theme " name="gender" required>
                                    <option value="1">Select</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select> 
                                </div> 
                            </div>
                            <div class=" col-md-4 form-group" >
                                <label >Age<small style="color: red;">*</small></label>
                                <div class="input-icon right" style="float: initial !important;">
                                    <i class="fa "></i>
                                     <input id="age"  type="text"class="form-control c-square c-theme " oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="age" placeholder="Age" maxlength="3" required>
                                </div>     
                            </div>
                            <div class=" col-md-4 form-group" >
                                <label  >Mobile Number<small style="color: red;">*</small></label>
                                <div class="input-icon right" style="float: initial !important;">
                                    <i class="fa "></i>
                                     <input id="mobile_number"  type="text"  value="<?php echo(isset($seva_registration_data->mobile_no) && !empty($seva_registration_data->mobile_no))?$seva_registration_data->mobile_no:'';?>"   class="form-control c-square c-theme " name="mobile_no" placeholder="Mobile Number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  maxlength="10" required >
                                </div>     
                            </div>
                            <div class=" col-md-4 form-group">
                                <label  >Email<small style="color: red;">*</small></label>
                                <div class="input-icon right" style="float: initial !important;">
                                    <i class="fa "></i>
                                     <input id="email"  type="email" class="form-control c-square c-theme " name="email" placeholder="Email" required>
                                </div>     
                            </div>
                            <div class=" col-md-4 form-group">
                                <label  >Occupation</label>
                                <input id="occupation"  type="text" class="form-control c-square c-theme " name="occupation" placeholder="Occupation" oninput="this.value = this.value.replace(/[^a-zA-Z.,' '-@]/g, '').replace(/(\..*)\./g, '$1');" maxlength="30">
                            </div>
                        </div>
                        <div class="row"> 
                            <div class=" col-md-4 form-group" >
                                <label  >City<small style="color: red;">*</small></label>
                                <div class="input-icon right" style="float: initial !important;">
                                    <i class="fa "></i>
                                    <input id="city"  type="text" class="form-control c-square c-theme " name="city" placeholder="City" oninput="this.value = this.value.replace(/[^a-zA-Z.,,' '-@]/g, '').replace(/(\..*)\./g, '$1');" required>
                                </div>      
                            </div>
                            <div class=" col-md-8 form-group">
                               <label>Area of City</label>
                               <input id="area_of_city"  type="text" class="form-control c-square c-theme " name="area_of_city" placeholder="Area of city" oninput="this.value = this.value.replace(/[^a-zA-Z.,,' '-@]/g, '').replace(/(\..*)\./g, '$1');">
                            </div>
                        </div>
                        <div class="row"> 
                            <div class=" col-md-12 form-group">
                            <label  >No. of courses served/ any other seva given previously?</label>
                                <textarea id="no_of_courses"  class="form-control c-square c-theme " name="answer" placeholder="No. of Courses" maxlength="151" ></textarea>
                            </div>
                        </div>
                        <div class="row"> 
                            <div class=" col-md-12 form-group">
                                <label  >Comments</label>
                                <textarea id="comments" class="form-control" class="form-control c-square c-theme " name="comments" placeholder="Comments" maxlength="151" ></textarea>
                            </div>
                        </div>
                        <div class="row"> 
                            <div class=" col-md-10 ">
                            </div>
                            <div class=" col-md-2"style="text-align: end;">
                                 <button class=" btn btn-primary form-control common_save" rel="<?php echo(isset($mitra_school_seva_registration_data->mitra_school_seva_registration_id) && !empty($mitra_school_seva_registration_data->mitra_school_seva_registration_id))?$mitra_school_seva_registration_data->mitra_school_seva_registration_id:'';?>" data-pk="mitra_school_seva_registration_id" >Submit</button>
                            </div>
                        </div>
                        <div class="row"> 
                            <div class=" col-md-12 " style="margin-top: 15px;">
                            <span class="c-font-bold"  > Pujya Guruji's Dhamma Service related messages:</span>
                            </div>
                        </div>
                        <input type="hidden" class="form-control" name="inserted_by" value="<?php echo $this->session->userdata('user_id'); ?>" placeholder="Title">   
                        <input type="hidden" class="form-control" name="inserted_on" value="<?php echo date('Y-m-d'); ?>" placeholder="Title">  
                        <input type="hidden" class="form-control" value="<?php echo $this->session->userdata('user_id'); ?>" name="modified_by" value=""placeholder="Title">
                        <input type="hidden" name="mitra_school_seva_registration_id" value="<?php echo(isset($mitra_school_seva_registration_data->mitra_school_seva_registration_id) && !empty($mitra_school_seva_registration_data->mitra_school_seva_registration_id))?$mitra_school_seva_registration_data->mitra_school_seva_registration_id:'';?>">
                        <div class="row"style="line-height: 30px;">
                            <div class="col-md-12">
                                <a  style="color:#5c6873;" class="c-theme-on-hover" target="_blank" href="http://www.punna.dhamma.org/valueofdhamma.php">http://www.punna.dhamma.org/valueofdhamma.php</a> <br>
                                <a  style="color:#5c6873;" class="c-theme-on-hover" target="_blank" href="http://www.punna.dhamma.org/purposeofdhammaservice.php">http://www.punna.dhamma.org/purposeofdhammaservice.php</a><br>
                                <a  style="color:#5c6873;" class="c-theme-on-hover" target="_blank" href="http://www.punna.dhamma.org/significanceofdhammaseva.php">http://www.punna.dhamma.org/significanceofdhammaseva.php</a>
                            </div>
                        </div>
                    </form><br><br>
                </div>
            </section> 
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
        <script>
        $(document).ready(function() {    
        App.init(); // init core    
        });
        </script>
        <script src="<?php echo base_url(); ?>assets/site/plugins/moment.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/site/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/site/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/site/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/site/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/site/demos/default/js/scripts/pages/datepicker.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/jquery-validation/js/additional-methods.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/jquery-validation/lib/jquery.form.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/site/js/lightbox.min.js"></script>
        <script src="<?php echo base_url();?>assets/site/js/jquery.toast.js"></script>
        <script src="<?php echo base_url();?>assets/js/common.js" type="text/javascript"></script>
    </body>
</html>
