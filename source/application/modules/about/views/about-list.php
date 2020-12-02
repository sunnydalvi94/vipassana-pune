<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/> 
    <title>About Vipassana | Vipassana </title>
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
    <div class="container-fluid" style="margin-top:130px;" id="about">
        <div class="page-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light">
                        <div class="portlet-title">
                            <div class="caption font-blue">
                                <i class="fa fa-users font-blue" ></i>
                                <span class="caption-subject bold uppercase">About Vipassana</span>
                            </div>
                            <div class="actions tools">
                                <!-- <a href="<?php echo base_url();?>add-about" class="btn blue btn-sm" style="height:27px ;"><i class="icon-plus"></i>  New</a> -->
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <table class="table table-striped table-bordered table-hover masterTable">
                                <thead>
                                    <tr >
                                        <th class="font-blue bold"  style="text-align: center;width: 7%;"> Sr. No. </th>
                                        <th class="font-blue bold"  style="text-align: center;"> Name &  Description </th>
                                        <th class="font-blue bold" style="text-align: center;"> Video </th>
                                        <th class="font-blue bold" style="text-align: center;width:7%;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php if(isset($about_data) && !empty($about_data))
                                    {$i=1;


                                        foreach ($about_data['details'] as $key) 
                                        { 
                                             // echo $key['about_name'];  die();
                                         ?>
                                    <tr>
                                        <td style="text-align: center;vertical-align: middle;"> <?php echo $i++;?></td>
                                        <td>
                                           <span class="font-green-haze bold"><?php echo (isset($key['about_name']) && !empty($key['about_name']))?$key['about_name']:'';?></span><br>
                                          <p class="text-justify"><?php echo (isset($key['about_description']) && !empty($key['about_description']))?$key['about_description']:'';?></p> 
                                        </td>
                                        <td style="text-align: center;vertical-align: middle;">
                                            <iframe style="max-height: 130px; max-width: 200px;" src="<?php echo(isset($key['video']) && !empty($key['video']))?$key['video']:'';?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                        </td> 
                                        <td style='text-align: center;vertical-align: middle;' class="tbl_action"  data-col="about_id">
                                                
                                                
                                                <a href="<?php echo base_url();?>add-about/<?php echo(isset($key['about_id']) && !empty($key['about_id']))?$key['about_id']:'';?>" class="label bg-green-jungle tooltips " title="Edit Record"><i class="icon-pencil "style="margin-bottom: 10px;"></i></a>
                                                <?php if($key['in_use']=='Y')
                                                { ?>
                                                    <a rel="<?php echo(isset($key['about_id']) && !empty($key['about_id']))?$key['about_id']:'';?>" rev="hide-about" href="javascript:void(0);" class="label bg-yellow-gold tooltips hide_record" title="Hide Record" ><i class="icon-ban"style="margin-bottom: 10px;"></i></a><br>
                                                <?php }
                                                else
                                                {?>                                                     
                                                    <a rel="<?php echo(isset($key['about_id']) && !empty($key['about_id']))?$key['about_id']:'';?>" rev="restore-about" href="javascript:void(0);" class="label bg-blue tooltips restore_record" title="Restore Record"><i class="icon-reload"style="margin-bottom: 10px;"></i></a>
                                                <?php } ?>
                                              
                                               <!--  <a rev="delete-about/<?php echo(isset($key['about_id']) && !empty($key['about_id']))?$key['about_id']:'';?>" href="javascript:void(0);" class="label bg-red-thunderbird tooltips delete_record" title="Delete Record"><i class="icon-trash"style="margin-top: 7px;"></i></a> -->
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