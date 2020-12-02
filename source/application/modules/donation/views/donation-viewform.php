<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/> 
    <title>Donation View Form | Vipassana </title>
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
                                <span class="caption-subject bold uppercase">Donation View Form </span>
                            </div>
                            <div class="actions tools">
                                <!-- <a href="<?php echo base_url();?>add-about" class="btn blue btn-sm" style="height:27px ;"><i class="icon-plus"></i>  New</a> -->
                            </div>
                        </div>
                        <div class="portlet-body form">
                          <div style="border-radius: 2px;border:0.5px solid gray;padding: 10px;background-color: #f3f4f542;">
                                <div class="container">
                                   <div class="row">
                                        <div class="col-md-4">
                                            <p><b>Name&nbsp;:</b>&nbsp;
                                                <?php echo (isset($donation_data->first_name) && !empty($donation_data->first_name))?$donation_data->first_name:'';?>
                                                &nbsp;<?php echo (isset($donation_data->last_name) && !empty($donation_data->last_name))?$donation_data->last_name:'';?>
                                           </p>
                                        </div>
                                        <div class="col-md-3">
                                            <p><b>PAN No.&nbsp;:</b>&nbsp;<?php echo (isset($donation_data->pan_no) && !empty($donation_data->pan_no))?$donation_data->pan_no:'';?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p><b>Date Time&nbsp;:</b>&nbsp;<?php $originalDate = $donation_data->date_time;
                                                $newDate = date("d-m-Y", strtotime($originalDate));
                                                 echo (isset($newDate) && !empty($newDate))?$newDate:'';?></p>
                                        </div>
                                        <div class="col-md-3">
                                            <p><b>Amount(Rs.)&nbsp;:</b>&nbsp;<?php echo (isset($donation_data->amount) && !empty($donation_data->amount))?$donation_data->amount:'';?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p><b>Address&nbsp;:</b>&nbsp;<?php echo (isset($donation_data->address_line_1) && !empty($donation_data->address_line_1))?$donation_data->address_line_1:'';?> &nbsp;<?php echo (isset($donation_data->address_line_2) && !empty($donation_data->address_line_2))?$donation_data->address_line_2:'--';?></p>
                                        </div>
                                         <div class="col-md-3">
                                            <p><b>City&nbsp;:</b>&nbsp;<?php echo (isset($donation_data->city) && !empty($donation_data->city))?$donation_data->city:'';?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p><b>State&nbsp;:</b>&nbsp;<?php echo (isset($donation_data->state) && !empty($donation_data->state))?$donation_data->state:'';?></p>
                                        </div>
                                          <div class="col-md-3">
                                            <p><b>Country&nbsp;:</b>&nbsp;<?php echo (isset($donation_data->country) && !empty($donation_data->country))?$donation_data->country:'';?></p>
                                        </div>
                                    </div>
                                    <div class="row">    
                                        <div class="col-md-4">
                                            <p><b>Pin Code&nbsp;:</b>&nbsp;<?php echo (isset($donation_data->pin_code) && !empty($donation_data->pin_code))?$donation_data->pin_code:'';?></p>
                                        </div>
                                         <div class="col-md-3">
                                            <p><b>Contact Number&nbsp;:</b>&nbsp;<?php echo (isset($donation_data->contact_number) && !empty($donation_data->contact_number))?$donation_data->contact_number:'';?></p>
                                        </div>
                                    </div>    
                                    <div class="row">    
                                        <div class="col-md-4">
                                            <p><b>Email&nbsp;:</b>&nbsp;<?php echo (isset($donation_data->email) && !empty($donation_data->email))?$donation_data->email:'';?></p>
                                        </div>
                                        <div class="col-md-3">
                                            <p><b>Remark&nbsp;:</b>&nbsp;<?php echo (isset($donation_data->remark) && !empty($donation_data->remark))?$donation_data->remark:'--';?></p>
                                        </div>
                                    </div>
                                    <div class="row">    
                                        <div class="col-md-2">
                                            <p><b>Status&nbsp;:</b>&nbsp;<?php echo (isset($donation_data->status) && !empty($donation_data->status))?$donation_data->status:'--';?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" container" style="margin-top:10px; ">
                            <div class="row">
                            <a href="<?php echo base_url();?>donation"class="btn btn-xs btn-primary"type="button"><i class=" icon-arrow-left "></i> Back</a>
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