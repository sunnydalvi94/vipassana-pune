<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/> 
    <title>Donation | Vipassana</title>
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
        .padding-left{
            padding-left:49px;
        }
    </style>
</head>
<body class="page-header-fixed page-sidebar-closed-hide-logo c-layout-header-fixed c-layout-header-mobile-fixed" style="background: #e9ecf3;">
    <?php $this->load->view('template/header');?>
    <div class="clearfix">
    </div>
     <div class="container-fluid" style="margin-top:130px;">
        <div class="page-content">
            <div class="row ">
                <div class="col-md-2"></div>
                <div class="col-md-8" style="margin:auto;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-1"style="width:4.5%!important;"></div>
                            <div class="col-md-8">
                                <div class="portlet light"style="padding-bottom: 1px!important;">
                                    <div class="portlet-title">
                                        <div class="caption font-blue">
                                            <i class="font-blue" ></i>
                                            <span class="caption-subject bold uppercase">Donation</span>
                                        </div>
                                    </div>
                                    <form action="<?=base_url('donation')?>" id="donation" data-apikey="<?php echo (isset($keydata->key) && !empty($keydata->key))?$keydata->key:''; ?>" data-redirect="donation" class="horizontal-form" method="post" enctype="multipart/form-data">
                                        <table>
                                            <tr>
                                                <td style="padding-top:6px;">
                                                    <div class="input-group input-medium date date-picker" data-date-format="dd/mm/yyyy" data-rtl="false">
                                                        <input type="text" required readonly class="form-control c-square c-theme form_date " name="form_date" id="form_date"
                                                       
                                                        placeholder="Start Date">
                                                        <span class="input-group-btn">
                                                        <button class="btn default c-btn-square date-set" required type="button"><i class="fa fa-calendar"></i></button>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td></td>
                                                <td class="padding-left">
                                                    <div class="input-group input-medium date date-picker" data-date-format="dd/mm/yyyy" data-rtl="false">
                                                        <input type="text" required readonly class="form-control c-square c-theme to_date" name="to_date" id="to_date"
                                                       
                                                        placeholder="End Date">
                                                        <span class="input-group-btn">
                                                        <button class="btn default c-btn-square date-set" required type="button"><i class="fa fa-calendar"></i></button>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td></td>
                                                <td class="padding-left">
                                                    <!-- <select class="form-control  c-square c-theme" name="status"  id="donation_id" style="background-color:#E9ECF3;color: #929294;">
                                                         <option >Select Status</option>
                                                        <?php if(isset($donation_data) && !empty($donation_data))
                                                        {
                                                            foreach ($donation_data as $key)
                                                            {?>
                                                                <option value="<?php echo(isset($key->status) && !empty($key->status))?$key->status:'';?>" <?php echo(isset($donation_data->status) && !empty($donation_data->status))?'selected':'';?>><?php echo(isset($key->status) && !empty($key->status))?$key->status:'';?></option>
                                                            <?php }
                                                        } ?>
                                                    </select> -->
                                                    <select class="form-control  c-square c-theme" name="status" required id="donation_id" style="background-color:#E9ECF3;color: #929294;">
                                                        <option value="">Select Status</option>
                                                        <option value="1">Pending</option>
                                                        <option value="2">Success</option>
                                                        <option value="3">Fail</option>
                                                        <option value="4">All</option>
                                                    </select>
                                                </td>
                                            </tr>    
                                            <tr>
                                                <td></td><td></td><td></td><td></td>
                                                <td class="pull-right"style='margin:10px 0px;'>
                                                   <button type="submit"  id="range" class="btn btn-primary btn-xs btn_search" rev="">&nbsp;&nbsp;Search&nbsp;&nbsp;</button>
                                                </td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="page-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light">
                        <div class="portlet-title">
                            <div class="caption font-blue">
                                <i class="font-blue" ></i>
                                <span class="caption-subject bold uppercase">Donation List</span>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <table class="table table-striped table-bordered table-hover masterTable">
                                <thead>
                                    <tr>
                                        <th class="font-blue bold"  style="text-align: center;vertical-align: middle;width: 7%;"> Sr. No.</th>
                                        <th class="font-blue bold"  style="vertical-align: middle;text-align: center;">Name & Details</th>
                                        <th class="font-blue bold"  style="vertical-align: middle;text-align: center;">Address</th>
                                        <th class="font-blue bold"  style="vertical-align: middle;text-align: center;">Contact</th>
                                        <th class="font-blue bold"  style="vertical-align: middle;text-align: center;">Date Time</th>
                                        <th class="font-blue bold"  style="vertical-align: middle;text-align: center;"> Amount(Rs.) </th>
                                        <th class="font-blue bold"  style="vertical-align: middle;text-align: center;"> Remark  </th>
                                        <th class="font-blue bold"  style="vertical-align: middle;text-align: center;width: 14%;"> Actions </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(isset($donation_data) && !empty($donation_data))
                                    {$i=1;
                                        foreach ($donation_data as $key) 
                                        {
                                        $donation_id = $this->encryptdecryptstring->encrypt_string($key->donation_id);
                                          ?>
                                        <tr>
                                            <td style="text-align: center;vertical-align: middle;">  <?php echo $i++;?></td>
                                            <td>
                                               <p class="bold"><?php echo (isset($key->first_name) && !empty($key->first_name))?$key->first_name:'';?> &nbsp;<?php echo (isset($key->last_name) && !empty($key->last_name))?$key->last_name:'';?></p>
                                                <p >PAN: <?php echo (isset($key->pan_no) && !empty($key->pan_no))?$key->pan_no:'';?></p>
                                            </td>
                                            <td>
                                                <p><?php echo (isset($key->address_line_1) && !empty($key->address_line_1))?$key->address_line_1:'';?>&nbsp;
                                                    <?php echo (isset($key->address_line_2) && !empty($key->address_line_2))?$key->address_line_2:'--';?>,&nbsp;
                                                    <?php echo (isset($key->city) && !empty($key->city))?$key->city:'';?>,<br>
                                                    <?php echo (isset($key->state) && !empty($key->state))?$key->state:'';?>,&nbsp;
                                                    <?php echo (isset($key->country) && !empty($key->country))?$key->country:'';?>&nbsp;-
                                                    <?php echo (isset($key->pin_code) && !empty($key->pin_code))?$key->pin_code:'';?>
                                                </p>
                                            </td>
                                            <td>
                                                <p class="bold"><?php echo (isset($key->contact_number) && !empty($key->contact_number))?$key->contact_number:'';?>
                                                </p>
                                                <p> &nbsp;<?php echo (isset($key->email) && !empty($key->email))?$key->email:'';?></p>
                                            </td>
                                            <td>
                                                <?php $originalDate = $key->date_time;
                                                $newDate = date("d-m-Y", strtotime($originalDate));
                                                 echo (isset($newDate) && !empty($newDate))?$newDate:'';?>
                                            </td>
                                            <td><?php echo (isset($key->amount) && !empty($key->amount))?$key->amount:'';?></td>
                                            <td>
                                                <p class="bold"><?php echo (isset($key->remark) && !empty($key->remark))?$key->remark:'--';?></p>
                                                <p>Status:<?php echo (isset($key->status) && !empty($key->status))?$key->status:'--';?></p>
                                            </td> 
                                            <td style='text-align: center;vertical-align: middle;' class="tbl_action" data-col="donation_id">
                                                    
                                                     <a href="<?php echo base_url(); ?>donation-viewform/<?php echo(isset($key->donation_id) && !empty($key->donation_id))?$donation_id:'';?>" class="label bg-blue tooltips " title="View Form"><i class="fa fa-eye"></i></a>
                                                    <!-- <a href="<?php echo base_url(); ?>add-donation/<?php echo(isset($key->donation_id) && !empty($key->donation_id))?$key->donation_id:'';?>" class="label bg-green-jungle tooltips "title="Edit Record"><i class="icon-pencil"></i></a> -->

                                                    <?php if($key->in_use=='Y')
                                                    { ?>
                                                        <a rel="<?php echo(isset($key->donation_id) && !empty($key->donation_id))?$key->donation_id:'';?>" rev="hide-donation" href="javascript:void(0);" class="label bg-yellow-gold tooltips hide_record" title="Hide Record"><i class="icon-ban"></i></a>
                                                    <?php }
                                                    else
                                                    {?>                                                     
                                                        <a rel="<?php echo(isset($key->donation_id) && !empty($key->donation_id))?$key->donation_id:'';?>" rev="restore-donation" href="javascript:void(0);" class="label bg-blue tooltips restore_record" title="Restore Record"><i class="icon-reload"></i></a>
                                                    <?php } ?>
                                                    <a rev="delete-donation/<?php echo(isset($key->donation_id) && !empty($key->donation_id))?$key->donation_id:'';?>" href="javascript:void(0);" class="label bg-red-thunderbird tooltips delete_record" title="Delete Record"><i class="icon-trash"></i></a>
                                            </td>
                                        </tr>

                                       <div id="<?php echo(isset($key->donation_id) && !empty($key->donation_id))?$key->donation_id:'';?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog ">
                                                <div class="modal-content c-square">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">
                                                             <span class="caption-subject bold uppercase caption font-blue">Donation Form</span>
                                                        </h4>
                                                    </div>
                                                    <div id="printThis" class="modal-body"style=" ">
                                                       
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
         $(document).on('click','.btn_search',function(){
            // alert("hi");
            var from_date = $('.from_date').val();
            var to_date = $('.to_date').val();
            // if (to_date > from_date) {
            //         alert("Start date must be less than end date!");
            //         document.getElementsClassName("to_date").value="";
            //         return false;
            //     }
            var url = $(this).attr('rev');
            $.ajax({
            url:completeURL(url),
            type:'POST',
            data:{from_date:from_date,to_date:to_date},
            dataType:'json',
            success:function(data) {  
                $('.tablehide').hide();
                $('.dump_view').html(data.view);              
            }
        });

        });
             
    </script>
</body>
</html>