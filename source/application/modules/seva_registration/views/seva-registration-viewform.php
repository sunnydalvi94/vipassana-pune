<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/> 
    <title>Seva Registration View Form | Vipassana </title>
    <base href="<?php echo base_url(); ?>" >
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/global/plugins/select2/select2.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/global/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/global/css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
     <link href="<?php echo base_url();?>assets/global/css/overwrite.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>assets/admin/layout4/css/layout.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>/assets/admin/layout4/css/light.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/global/plugins/toast/jquery.toast.css" rel="stylesheet" type="text/css"/>
   <link rel="shortcut icon" href="<?php echo base_url();?>/siteassets/Projectlogo.png"/>
   <link rel="shortcut icon " type="image/gif" href="<?php echo base_url(); ?>assets/site/img/logo/wheel.gif">
   <style type="text/css">
       p{
        font-size: 1.09vw!important;
       }
       b{
        font-size: 1.09vw!important;
       }
   </style>
</head>
<body class="page-header-fixed page-sidebar-closed-hide-logo c-layout-header-fixed c-layout-header-mobile-fixed" style="background: #e9ecf3;">
    <?php $this->load->view('template/header');?>
    <div class="clearfix">
    </div>
    <div class="container-fluid" style="margin-top:130px;" id="about">
        <div class="page-content">
            <div class="row">
            	<div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="portlet light">
                        <div class="portlet-title">
                            <div class="caption font-blue">
                                <i class="fa fa-users font-blue" ></i>
                                <span class="caption-subject bold uppercase"> Seva Registration View Form</span>
                            </div>
                            <div class="actions tools">
                                <!-- <a href="<?php echo base_url();?>add-about" class="btn blue btn-sm" style="height:27px ;"><i class="icon-plus"></i>  New</a> -->
                            </div>
                        </div>
                        <div class="portlet-body form" style="box-sizing: border-box;">
                            <div style="border-radius: 2px;border:0.5px solid gray;padding: 10px;background-color:#f3f4f542;">
                                <div class="container">
                                   <div class="row">
                                        <div class="col-md-4">
                                            <p><b>Full Name&nbsp;:</b>&nbsp;<?php echo (isset($seva_registration_data->first_name) && !empty($seva_registration_data->first_name))?$seva_registration_data->first_name:'';?>&nbsp;
                                                <?php echo (isset($seva_registration_data->middel_name) && !empty($seva_registration_data->middel_name))?$seva_registration_data->middel_name:'';?>&nbsp;
                                                <?php echo (isset($seva_registration_data->last_name) && !empty($seva_registration_data->last_name))?$seva_registration_data->last_name:'';?>
                                           </p>
                                        </div>
                                        <div class="col-md-3">
                                            <p><b>Mobile No.&nbsp;:</b>&nbsp;<?php echo (isset($seva_registration_data->mobile_no) && !empty($seva_registration_data->mobile_no))?$seva_registration_data->mobile_no:'';?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p><b>Email&nbsp;:</b>&nbsp;<?php echo (isset($seva_registration_data->email) && !empty($seva_registration_data->email))?$seva_registration_data->email:'';?> </p>
                                        </div>
                                          <div class="col-md-3">
                                            <p><b>Occupation&nbsp;:</b>&nbsp;<?php echo (isset($seva_registration_data->occupation) && !empty($seva_registration_data->occupation))?$seva_registration_data->occupation:'';?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p><b>Age&nbsp;:</b>&nbsp;<?php echo (isset($seva_registration_data->age) && !empty($seva_registration_data->age))?$seva_registration_data->age:'';?></p>
                                        </div>
                                          <div class="col-md-2">
                                            <p><b>Gender&nbsp;:</b>&nbsp;<?php echo (isset($seva_registration_data->gender) && !empty($seva_registration_data->gender))?$seva_registration_data->gender:'';?></p>
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col-md-4">
                                            <p><b>No.of 10 Day Courses&nbsp;:</b>&nbsp;<?php echo (isset($seva_registration_data->ten_day_course_id) && !empty($seva_registration_data->ten_day_course_id))?$seva_registration_data->ten_day_course_id:'';?></p>
                                        </div>
                                        <div class="col-md-4">
                                            <p><b>City&nbsp;:</b>&nbsp;<?php echo (isset($seva_registration_data->city) && !empty($seva_registration_data->city))?$seva_registration_data->city:'';?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <p><b>Area of city&nbsp;:</b>&nbsp;<?php echo (isset($seva_registration_data->area_of_city) && !empty($seva_registration_data->area_of_city))?$seva_registration_data->area_of_city:'';?></p>
                                        </div>
                                    </div>
                                    <div class="row">    
                                        <div class="col-md-6">
                                            <b>No. of courses served/ any other seva given previously?&nbsp;:</b>
                                            <p><?php echo (isset($seva_registration_data->answer) && !empty($seva_registration_data->answer))?$seva_registration_data->answer:'';?></p>
                                        </div>
                                    </div> 
                                    <div class="row">    
                                        <div class="col-md-6">
                                           <b>Comments&nbsp;:</b>
                                            <p><?php echo (isset($seva_registration_data->comments) && !empty($seva_registration_data->comments))?$seva_registration_data->comments:'';?></p>
                                        </div>
                                    </div>  
                                     <div class="row">    
                                        <div class="col-md-8">
                                           <b>Q1.Interested to Give Voluntary Seva on Daily Basis ( Fully Day/Few Hours) in Swargate Pune Center Office? Pls Select&nbsp;:</b>
                                            <p>-- <?php echo (isset($seva_registration_data->question1) && !empty($seva_registration_data->question1))?$seva_registration_data->question1:'';?></p>
                                            <b>Q2.In Center Management & Development&nbsp;:</b>
                                            <p>-- <?php echo (isset($seva_registration_data->question2) && !empty($seva_registration_data->question2))?$seva_registration_data->question2:'';?></p>
                                            <b>Q3.Interested in Vipassana Course Related Seva? Please Select:&nbsp;:</b>
                                            <p style="max-width: 600px;">-- <?php echo (isset($seva_registration_data->question3) && !empty($seva_registration_data->question3))?$seva_registration_data->question3:'';?></p>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class=" container" style="margin-top:10px; ">
                            <div class="row">
                            <a href="<?php echo base_url();?>seva-registered-form"class="btn btn-xs btn-primary"type="button"><i class=" icon-arrow-left "></i> Back</a>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('template/footer');?>
    <script src="<?php echo base_url();?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/global/scripts/metronic.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/global/plugins/select2/select2.min.js" type="text/javascript" ></script>
    <script src="<?php echo base_url();?>assets/admin/pages/scripts/components-pickers.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript" ></script>
    <script src="<?php echo base_url()?>assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript" ></script>
    <script src="<?php echo base_url();?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript" ></script>
    <script src="<?php echo base_url();?>assets/global/plugins/datatables/media/js/jquery.dataTables.min.js" type="text/javascript" ></script>
    <script src="<?php echo base_url();?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js" type="text/javascript" ></script>
    <script src="<?php echo base_url();?>assets/global/plugins/datatables/table-advanced.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/global/plugins/bootbox/bootbox.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/global/plugins/jquery-validation/js/additional-methods.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/global/plugins/jquery-validation/lib/jquery.form.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/global/plugins/toast/jquery.toast.js" type="text/javascript" ></script>
    <script src="<?php echo base_url();?>assets/js/common.js" type="text/javascript"></script>
    <script>
    jQuery(document).ready(function() {
        Metronic.init(); // init metronic core components
        Layout.init(); 
        ComponentsPickers.init();
        TableAdvanced.init();
    });
    </script>
</body>
</html>