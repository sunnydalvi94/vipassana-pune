<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/> 
    <title>Gallery | Vipassana</title>
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
       .page-header-fixed .page-container {
    margin-top: 115px!important;
}
   </style>
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
                                    <span class="caption-subject bold uppercase">Gallery</span>
                                </div>
                                <div class="actions tools">
                                    <a href="<?php echo base_url();?>add-gallery-image/<?php echo (isset($key->album_id) && !empty($key->album_id))?$key->album_id:''; ?>" class="btn blue btn-sm" style="height:27px ;"><i class="icon-plus"></i>  New</a>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <table class="table table-striped table-bordered table-hover masterTable">
                                    <thead>
                                        <tr>
                                            <th class="font-blue bold"  style="text-align: center;vertical-align: middle;width: 7%;"> Sr. No. </th>
                                            <th class="font-blue bold"  style="text-align: center;vertical-align: middle;"> Gallery Name and Image Description </th>
                                            <th class="font-blue bold"  style="text-align: center;vertical-align: middle;">Image Sequence</th>
                                            <th  class="font-blue bold" style="text-align: center;vertical-align: middle;"> Gallery Image </th>
                                            <th class="font-blue bold" style="text-align: center;vertical-align: middle;width: 11%;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php if(isset($album_image_data) && !empty($album_image_data))
                                        {$i=1;
                                            foreach ($album_image_data['details'] as $key) 
                                            {  ?> 
                                        <tr>
                                            <td style="text-align: center;vertical-align: middle;"> <?php echo $i++;?></td>
                                            <td style="text-align: center;vertical-align: middle;">
                                                <p class="font-green-haze bold"><?php echo (isset($key['album_name']) && !empty($key['album_name']))?$key['album_name']:'';?></p> 
                                                <p><?php echo (isset($key['album_image_description']) && !empty($key['album_image_description']))?$key['album_image_description']:'';?></p> 
                                            </td>
                                            <td style="text-align: center;vertical-align: middle;">
                                                <p class="font-green-haze bold"><?php echo (isset($key['album_image_sequence']) && !empty($key['album_image_sequence']))?$key['album_image_sequence']:'';?></p> 
                                            </td>
                                            <td style="text-align: center;vertical-align: middle;">
                                                <img style="max-height: 130px; max-width: 200px;" class="user-pic" src="<?php echo base_url(); ?>uploads/album_image_images/<?php echo (isset($key['album_image_path']) && !empty($key['album_image_path']))?$key['album_image_path']:'';?>" alt="album image">
                                            </td> 
                                            <td style='vertical-align: middle;text-align:center;' class="tbl_action" data-col="album_image_id">
                                                    <a href="<?php echo base_url();?>add-gallery-image/<?php echo(isset($key['album_image_id']) && !empty($key['album_image_id']))?$key['album_image_id']:'';?>" class="label bg-green-jungle tooltips " title="Edit Record"><i class="icon-pencil"style="padding-bottom: 10px;"></i></a>
                                                    <?php if($key['in_use']=='Y')
                                                    { ?>
                                                        <a rel="<?php echo(isset($key['album_image_id']) && !empty($key['album_image_id']))?$key['album_image_id']:'';?>" rev="hide-album-image" href="javascript:void(0);" class="label bg-yellow-gold tooltips hide_record" title="Hide Record"><i class="icon-ban"style="padding-bottom: 10px;"></i></a>
                                                    <?php }
                                                    else
                                                    {?>                                                     
                                                        <a rel="<?php echo(isset($key['album_image_id']) && !empty($key['album_image_id']))?$key['album_image_id']:'';?>" rev="restore-album-image" href="javascript:void(0);" class="label bg-blue tooltips restore_record" title="Restore Record"><i class="icon-reload"style="padding-bottom: 10px;"></i></a>
                                                    <?php } ?>
                                                    
                                                    <a rev="delete-album-image/<?php echo(isset($key['album_image_id']) && !empty($key['album_image_id']))?$key['album_image_id']:'';?>" href="javascript:void(0);" class="label bg-red-thunderbird tooltips delete_record" title="Delete Record"><i class="icon-trash"></i></a>
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