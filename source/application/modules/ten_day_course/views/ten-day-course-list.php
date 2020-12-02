<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/> 
    <title>Apply for Ten Day Course | Vipassana</title>
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
</head>
<body class="page-header-fixed page-sidebar-closed-hide-logo c-layout-header-fixed c-layout-header-mobile-fixed" style="background: #e9ecf3;">
    <?php $this->load->view('template/header');?>
    <div class="clearfix">
    </div>
    <div class="container-fluid" style="margin-top:130px;">
        <div class="page-content">
            <div class="row">
                    <div class="col-md-12">
                        <div class="portlet light">
                            <div class="portlet-title">
                                <div class="caption font-blue">
                                    <i class="fa fa-users font-blue" ></i>
                                    <span class="caption-subject bold uppercase">Apply for Ten Day Course</span>
                                </div>
                                <div class="actions tools">
                                    <a href="<?php echo base_url();?>add-ten-day-course" class="btn blue btn-sm" style="height:27px ;"><i class="icon-plus"></i>  New</a>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <table class="table table-striped table-bordered table-hover masterTable">
                                    <thead>
                                        <tr>
                                            <th class="font-blue bold" style="text-align: center;"> Sr. No. </th>
                                            <th class="font-blue bold" style="text-align: center;">Center Name & Description</th>
                                            <th class="font-blue bold" style="text-align: center;"> Ten Day Course URL </th>
                                            <th class="font-blue bold" style="text-align: center;"> Cover Photo </th>
                                            <th class="font-blue bold" style="text-align: center;width: 12%;"> Actions </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php if(isset($ten_day_course_data) && !empty($ten_day_course_data))
                                        {$i=1;
                                            foreach ($ten_day_course_data['details'] as $key) 
                                            {  ?>
                                        <tr>
                                            <td style="text-align: center;vertical-align: middle;"> <?php echo $i++;?></td>
                                            <td style="vertical-align: middle;">
                                                <p class="font-green-haze bold text-capitalize"><?php echo (isset($key['center_name']) && !empty($key['center_name']))?$key['center_name']:'';?></p>
                                                <p class="text-justify"><?php echo (isset($key['short_decription']) && !empty($key['short_decription']))?$key['short_decription']:'';?></p>
                                            </td>
                                             <td class=""style="vertical-align: middle;"><?php echo (isset($key['ten_day_course_url']) && !empty($key['ten_day_course_url']))?$key['ten_day_course_url']:'';?>
                                            </td>
                                            <td style="text-align: center;vertical-align: middle;">
                                                <img style="max-height: 130px; max-width: 200px;" class="user-pic" src="<?php echo base_url(); ?>uploads/ten_day_course_images/<?php echo (isset($key['cover_photo']) && !empty($key['cover_photo']))?$key['cover_photo']:'';?>" alt="ten-day-course">
                                            </td> 
                                            <td style='text-align: center;text-align: center;vertical-align: middle;' class="tbl_action" data-col="ten_day_course_id">
                                                     <a href="<?php echo base_url(); ?>add-ten-day-course/<?php echo(isset($key['ten_day_course_id']) && !empty($key['ten_day_course_id']))?$key['ten_day_course_id']:'';?>" class="label bg-green-jungle tooltips " title="Edit Record"><i class="icon-pencil"></i></a>
                                                    <?php if($key['in_use']=='Y')
                                                    { ?>
                                                        <a rel="<?php echo(isset($key['ten_day_course_id']) && !empty($key['ten_day_course_id']))?$key['ten_day_course_id']:'';?>" rev="hide-ten-day-course" href="javascript:void(0);" class="label bg-yellow-gold tooltips hide_record" title="Hide Record"><i class="icon-ban"></i></a>
                                                    <?php }
                                                    else
                                                    {?>                                                     
                                                        <a rel="<?php echo(isset($key['ten_day_course_id']) && !empty($key['ten_day_course_id']))?$key['ten_day_course_id']:'';?>" rev="restore-ten-day-course" href="javascript:void(0);" class="label bg-blue tooltips restore_record" title="Restore Record"><i class="icon-reload"></i></a>
                                                    <?php } ?>
                                                   
                                                    <a rev="delete-ten-day-course/<?php echo(isset($key['ten_day_course_id']) && !empty($key['ten_day_course_id']))?$key['ten_day_course_id']:'';?>" href="javascript:void(0);" class="label bg-red-thunderbird tooltips delete_record" title="Delete Record"><i class="icon-trash"></i></a>
                                            </td>
                                        </tr>
                                            <?php }
                                        } ?>
                                    </tbody>
                                </table>
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