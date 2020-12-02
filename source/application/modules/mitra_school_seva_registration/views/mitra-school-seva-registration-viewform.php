<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/> 
    <title>Mitra School Seva Registration View Form | Vipassana </title>
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
                                <span class="caption-subject bold uppercase">Mitra School Seva Registration View Form</span>
                            </div>
                            <div class="actions tools">
                                <!-- <a href="<?php echo base_url();?>add-about" class="btn blue btn-sm" style="height:27px ;"><i class="icon-plus"></i>  New</a> -->
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <div  style="border-radius: 2px;border:0.5px solid gray;padding: 10px;background-color: #f3f4f542;">
                                <div class="container">
                                   <div class="row">
                                        <div class="col-md-4">
                                            <p><b>Full Name&nbsp;:</b>&nbsp;<?php echo (isset($mitra_school_seva_registration_data->first_name) && !empty($mitra_school_seva_registration_data->first_name))?$mitra_school_seva_registration_data->first_name:'';?> &nbsp;
                                                <?php echo (isset($mitra_school_seva_registration_data->middel_name) && !empty($mitra_school_seva_registration_data->middel_name))?$mitra_school_seva_registration_data->middel_name:'';?> &nbsp;
                                                <?php echo (isset($mitra_school_seva_registration_data->last_name) && !empty($mitra_school_seva_registration_data->last_name))?$mitra_school_seva_registration_data->last_name:'';?>
                                           </p>
                                        </div>
                                        <div class="col-md-3">
                                            <p><b>Mobile No.&nbsp;:</b>&nbsp;<?php echo (isset($mitra_school_seva_registration_data->mobile_no) && !empty($mitra_school_seva_registration_data->mobile_no))?$mitra_school_seva_registration_data->mobile_no:'';?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p><b>Email&nbsp;:</b>&nbsp;<?php echo (isset($mitra_school_seva_registration_data->email) && !empty($mitra_school_seva_registration_data->email))?$mitra_school_seva_registration_data->email:'';?> </p>
                                        </div>
                                          <div class="col-md-3">
                                            <p><b>Occupation&nbsp;:</b>&nbsp;<?php echo (isset($mitra_school_seva_registration_data->occupation) && !empty($mitra_school_seva_registration_data->occupation))?$mitra_school_seva_registration_data->occupation:'';?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p><b>Age&nbsp;:</b>&nbsp;<?php echo (isset($mitra_school_seva_registration_data->age) && !empty($mitra_school_seva_registration_data->age))?$mitra_school_seva_registration_data->age:'';?></p>
                                        </div>
                                        <div class="col-md-2" >
                                            <p><b>Gender&nbsp;:</b>&nbsp;<?php echo (isset($mitra_school_seva_registration_data->gender) && !empty($mitra_school_seva_registration_data->gender))?$mitra_school_seva_registration_data->gender:'';?></p>
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col-md-4">
                                            <p><b>No.of 10 Day Courses&nbsp;:</b>&nbsp;<?php echo (isset($mitra_school_seva_registration_data->ten_day_course_id) && !empty($mitra_school_seva_registration_data->ten_day_course_id))?$mitra_school_seva_registration_data->ten_day_course_id:'';?></p>
                                        </div>
                                        <div class="col-md-4">
                                            <p><b>City&nbsp;:</b>&nbsp;<?php echo (isset($mitra_school_seva_registration_data->city) && !empty($mitra_school_seva_registration_data->city))?$mitra_school_seva_registration_data->city:'';?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p><b>Area of city&nbsp;:</b>&nbsp;<?php echo (isset($mitra_school_seva_registration_data->area_of_city) && !empty($mitra_school_seva_registration_data->area_of_city))?$mitra_school_seva_registration_data->area_of_city:'';?></p>
                                        </div>
                                    </div>
                                    <div class="row">    
                                        <div class="col-md-7">
                                            <b>No. of courses served/ any other seva given previously?&nbsp;:
                                            <p></b><?php echo (isset($mitra_school_seva_registration_data->answer) && !empty($mitra_school_seva_registration_data->answer))?$mitra_school_seva_registration_data->answer:'';?></p>
                                        </div>
                                    </div> 
                                    <div class="row">    
                                        <div class="col-md-7">
                                            <b>Comments&nbsp;:</b>&nbsp;
                                            <p><?php echo (isset($mitra_school_seva_registration_data->comments) && !empty($mitra_school_seva_registration_data->comments))?$mitra_school_seva_registration_data->comments:'';?></p>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <div class=" container" style="margin-top:10px; ">
                            <div class="row">
                            <a href="<?php echo base_url();?>mitra-school-seva-registered-form"class="btn btn-xs btn-primary"type="button"><i class=" icon-arrow-left "></i> Back</a>
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