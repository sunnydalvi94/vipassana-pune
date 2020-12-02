<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/> 
    <title>Seva Registered Form</title>
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
                                    <i class="font-blue" ></i>
                                  
                                    <span class="caption-subject bold uppercase">Seva Registered Form</span>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <table class="table table-striped table-bordered table-hover masterTable">
                                    <thead>
                                        <tr>
                                            <th class="font-blue bold"  style="text-align: center;vertical-align: middle;width: 7%;"> Sr. No.</th>
                                            <!-- <th class="font-blue bold"  style="vertical-align: middle;"> Ten Day <br>Course id</th> -->
                                            <th class="font-blue bold"  style="text-align: center;vertical-align: middle;"> Full Name & Details</th>
                                            <!-- <th class="font-blue bold"  style="text-align: center;vertical-align: middle;"> Occupation </th> -->
                                            <th class="font-blue bold"  style="text-align: center;vertical-align: middle;width: 200px;">Area of city /<br> City </th>
                                            <th class="font-blue bold"  style="text-align: center;vertical-align: middle;"> Age /<br>Gender </th>
                                            <!-- <th class="font-blue bold"  style="text-align: center;vertical-align: middle;min-width: 300px;"> Answer <br>Comments </th> -->
                                            <th class="font-blue bold"  style="text-align: center;vertical-align: middle;width:13%;"> Actions </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(isset($seva_registration_data) && !empty($seva_registration_data))
                                        {$i=1;
                                            foreach ($seva_registration_data['details'] as $key) 
                                            {  ?>
                                            <tr>
                                                <td style="text-align: center;vertical-align: middle;">  <?php echo $i++;?></td>
                                                <td>
                                                    <span style="font-weight: bold;text-transform: capitalize;"><?php echo (isset($key['first_name']) && !empty($key['first_name']))?$key['first_name']:'';?>
                                                    <?php echo (isset($key['middel_name']) && !empty($key['middel_name']))?$key['middel_name']:'';?>
                                                    <?php echo (isset($key['last_name']) && !empty($key['last_name']))?$key['last_name']:'';?></span><br>
                                                    <span > Mobile No.: </span>&nbsp;<?php echo (isset($key['mobile_no']) && !empty($key['mobile_no']))?$key['mobile_no']:'';?><br>
                                                    <span >Mail:</span>&nbsp;<?php echo (isset($key['email']) && !empty($key['email']))?$key['email']:'';?> 
                                                </td>
                                                <td>
                                                     <p ><?php echo (isset($key['area_of_city']) && !empty($key['area_of_city']))?$key['area_of_city']:'';?> , <?php echo (isset($key['city']) && !empty($key['city']))?$key['city']:'';?>
                                                     </p>
                                                   
                                                </td>
                                                <td class="">
                                                    <p class="bold " style="text-align:center;"><?php echo (isset($key['age']) && !empty($key['age']))?$key['age']:'';?></p>
                                                    <p style="text-align:center;text-transform: capitalize;"> <?php echo (isset($key['gender']) && !empty($key['gender']))?$key['gender']:'';?></p>
                                                </td>
                                                    <td style='text-align: center;vertical-align: middle;' class="tbl_action" data-col="seva_registration_id">
                                                        <a href="<?php echo base_url(); ?>seva-registration-viewform/<?php echo(isset($key['seva_registration_id']) && !empty($key['seva_registration_id']))?$key['seva_registration_id']:'';?>" class="label bg-green-jungle tooltips " title="View Form"><i class="fa fa-eye" ></i></a>
                                                        <a href="<?php echo base_url(); ?>add-seva-registration/<?php echo(isset($key['seva_registration_id']) && !empty($key['seva_registration_id']))?$key['seva_registration_id']:'';?>" class="label bg-blue tooltips " title="Edit Record"><i class="icon-pencil" ></i></a>
                                                        <?php if($key['in_use']=='Y')
                                                        { ?>
                                                            <a rel="<?php echo(isset($key['seva_registration_id']) && !empty($key['seva_registration_id']))?$key['seva_registration_id']:'';?>" rev="hide-seva-registration" href="javascript:void(0);" class="label bg-yellow-gold tooltips hide_record" title="Hide Record"><i class="icon-ban" ></i></a>
                                                        <?php }
                                                        else
                                                        {?>                                                     
                                                            <a rel="<?php echo(isset($key['seva_registration_id']) && !empty($key['seva_registration_id']))?$key['seva_registration_id']:'';?>" rev="restore-seva-registration" href="javascript:void(0);" class="label bg-blue tooltips restore_record" title="Restore Record"><i class="icon-reload" ></i></a>
                                                        <?php } ?>
                                                      
                                                        <a rev="delete-seva-registration/<?php echo(isset($key['seva_registration_id']) && !empty($key['seva_registration_id']))?$key['seva_registration_id']:'';?>" href="javascript:void(0);" class="label bg-red-thunderbird tooltips delete_record" title="Delete Record"><i class="icon-trash"></i></a>
                                                </td>
                                            </tr>
                                            <div id="<?php echo(isset($key['seva_registration_id']) && !empty($key['seva_registration_id']))?$key['seva_registration_id']:'';?>" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content c-square">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                            <h4 class="modal-title" id="myModalLabel">
                                                                 <span class="caption-subject bold uppercase caption font-blue">Seva Registered Form</span>
                                                            </h4>
                                                        </div>
                                                        <div  class="modal-body"style=" ">
                                                           
                                                        </div>    
                                                        <div class="modal-footer">                              
                                                            <!-- <button type="button" id="Print" class="btn btn-primary btn-xs" style="float: left;">Print</button> -->
                                                            <button type="button" class="btn btn-primary btn-xs" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                        <?php } }?>
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
    <script type="text/javascript">
   document.getElementById("Print").onclick = function () {
    printElement(document.getElementById("printThis"));
};

function printElement(elem) {
    var domClone = elem.cloneNode(true);

    var $printSection = document.getElementById("printSection");

    if (!$printSection) {
        var $printSection = document.createElement("div");
        $printSection.id = "printSection";
        document.body.appendChild($printSection);
    }

    $printSection.innerHTML = "";
    $printSection.appendChild(domClone);
    window.print();
}
</script>
</body>
</html>