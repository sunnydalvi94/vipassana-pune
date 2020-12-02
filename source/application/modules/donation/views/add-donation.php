<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Add Donation | Vipassana </title>
	<base href="<?php echo base_url();?>" >
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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/img-upload/img-upload.css">
	<link href="<?php echo base_url();?>assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url();?>assets/admin/layout4/css/layout.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url();?>assets/admin/layout4/css/light.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>assets/global/plugins/toast/jquery.toast.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/fileinput.min.css">
	<link rel="shortcut icon" href="<?php echo base_url();?>/siteassets/Projectlogo.png"/>
	<link rel="shortcut icon " type="image/gif" href="<?php echo base_url(); ?>assets/site/img/logo/wheel.gif">
</head>
<body class="page-header-fixed page-sidebar-closed-hide-logo c-layout-header-fixed c-layout-header-mobile-fixed" style="background: #e9ecf3;">
    <?php $this->load->view('template/header');?>
    <div class="clearfix">
    </div>
    <div class="container" style="margin-top:130px;">
		<div class="page-content">
			<div class="row">
				<div class="col-md-12">
					<div class="portlet light" style="padding: 15px 30px 15px 30px;">
						<div class="portlet-title">
							<div class="caption font-blue">
                                <i class="font-blue" ></i>
                                <i class="icon-plus font-blue"></i>
                                <span class="caption-subject bold uppercase">Add Donation</span>
                            </div>
						</div>
						<div class="portlet-body form">
							<form action="donation-form" id="donation-form" data-apikey="<?php echo (isset($keydata->key) && !empty($keydata->key))?$keydata->key:''; ?>" data-redirect="donation" class="horizontal-form" method="post" enctype="multipart/form-data">
							  	<div class="form-body">
								    <div class="row"> 
								    	<div class="col-md-12">
								    		<div class="row">
									    		<div class="form-group col-md-4">
									    			<p class="control-label">First Name<span class="require" aria-required="true" style="color:red"><small>*</small></span></p>
									    			<div class="input-icon right"><i class="fa"></i>
									    				<input type="text" class="form-control" 
									    				name="first_name" value="<?php echo(isset($donation_data->first_name) && !empty($donation_data->first_name))?$donation_data->first_name:'';?>"
									    				placeholder="First Name">
									    			</div>
									    		</div>
									    		<div class="form-group col-md-4">
									    			<p class="control-label">Last Name<span class="require" aria-required="true" style="color:red"><small>*</small></span></p>
									    			<div class="input-icon right"><i class="fa"></i>
									    				<input type="text" class="form-control" 
									    				name="last_name" value="<?php echo(isset($donation_data->last_name) && !empty($donation_data->last_name))?$donation_data->last_name:'';?>"
									    				placeholder="Last Name">
									    			</div>
									    		</div>
									    		<div class="form-group col-md-4">
									    			<p class="control-label">PAN No.<span class="require" aria-required="true" style="color:red"><small>*</small></span></p>
									    			<div class="input-icon right"><i class="fa"></i>
									    				<input type="text" class="form-control" 
									    				name="pan_no" value="<?php echo(isset($donation_data->pan_no) && !empty($donation_data->pan_no))?$donation_data->pan_no:'';?>"
									    				placeholder="Pan No">
									    			</div>
									    		</div>	<div class="form-group col-md-4">
									    			<p class="control-label">Date Time<span class="require" aria-required="true" style="color:red"><small>*</small></span></p>
									    			<div class="input-icon right"><i class="fa"></i>
									    				<input type="text" class="form-control" 
									    				name="date_time" value="<?php echo(isset($donation_data->date_time) && !empty($donation_data->date_time))?$donation_data->date_time:'';?>"
									    				placeholder="Date Time">
									    			</div>
									    		</div>
									    		
									    		<div class="form-group col-md-4">
									    			<p class="control-label">Amount<span class="require" aria-required="true" style="color:red"><small>*</small></span></p>
									    			<div class="input-icon right"><i class="fa"></i>
									    				<input type="text" class="form-control" 
									    				name="amount" value="<?php echo(isset($donation_data->amount) && !empty($donation_data->amount))?$donation_data->amount:'';?>"
									    				placeholder="Amount">
									    			</div>
									    		</div>
									    		<div class="form-group col-md-4">
									    			<p class="control-label">Address Line 1<span class="require" aria-required="true" style="color:red"><small>*</small></span></p>
									    			<div class="input-icon right"><i class="fa"></i>
									    				<input type="text" class="form-control" 
									    				name="address_line_1" value="<?php echo(isset($donation_data->address_line_1) && !empty($donation_data->address_line_1))?$donation_data->address_line_1:'';?>"
									    				placeholder="Address Line 1">
									    			</div>
									    		</div>
									    		<div class="form-group col-md-4">
									    			<p class="control-label">Address Line 2<span class="require" aria-required="true" style="color:red"><small>*</small></span></p>
									    			<div class="input-icon right"><i class="fa"></i>
									    				<input type="text" class="form-control" 
									    				name="address_line_2" value="<?php echo(isset($donation_data->address_line_2) && !empty($donation_data->address_line_2))?$donation_data->address_line_2:'';?>"
									    				placeholder="Address Line 2">
									    			</div>
									    		</div>
									    		<div class="form-group col-md-4">
									    			<p class="control-label">City<span class="require" aria-required="true" style="color:red"><small>*</small></span></p>
									    			<div class="input-icon right"><i class="fa"></i>
									    				<input type="text" class="form-control" 
									    				name="city" value="<?php echo(isset($donation_data->city) && !empty($donation_data->city))?$donation_data->city:'';?>"
									    				placeholder="City">
									    			</div>
									    		</div>
									    		<div class="form-group col-md-4">
									    			<p class="control-label">State<span class="require" aria-required="true" style="color:red"><small>*</small></span></p>
									    			<div class="input-icon right"><i class="fa"></i>
									    				<input type="text" class="form-control" 
									    				name="state" value="<?php echo(isset($donation_data->state) && !empty($donation_data->state))?$donation_data->state:'';?>"
									    				placeholder="State">
									    			</div>
									    		</div>
									    		<div class="form-group col-md-4">
									    			<p class="control-label">Country<span class="require" aria-required="true" style="color:red"><small>*</small></span></p>
									    			<div class="input-icon right"><i class="fa"></i>
									    				<input type="text" class="form-control" 
									    				name="country" value="<?php echo(isset($donation_data->country) && !empty($donation_data->country))?$donation_data->country:'';?>"
									    				placeholder="Country">
									    			</div>
									    		</div>
									    		<div class="form-group col-md-4">
									    			<p class="control-label">Pin Code<span class="require" aria-required="true" style="color:red"><small>*</small></span></p>
									    			<div class="input-icon right"><i class="fa"></i>
									    				<input type="text" class="form-control" 
									    				name="pin_code" value="<?php echo(isset($donation_data->pin_code) && !empty($donation_data->pin_code))?$donation_data->pin_code:'';?>"
									    				placeholder="Pin Code">
									    			</div>
									    		</div>
									    		<div class="form-group col-md-4">
									    			<p class="control-label">Contact Number<span class="require" aria-required="true" style="color:red"><small>*</small></span></p>
									    			<div class="input-icon right"><i class="fa"></i>
									    				<input type="text" class="form-control" 
									    				name="contact_number" value="<?php echo(isset($donation_data->contact_number) && !empty($donation_data->contact_number))?$donation_data->contact_number:'';?>"
									    				placeholder="Contact Number">
									    			</div>
									    		</div>
									    		<div class="form-group col-md-4">
									    			<p class="control-label">Email<span class="require" aria-required="true" style="color:red"><small>*</small></span></p>
									    			<div class="input-icon right"><i class="fa"></i>
									    				<input type="email" class="form-control" 
									    				name="email" value="<?php echo(isset($donation_data->email) && !empty($donation_data->email))?$donation_data->email:'';?>"
									    				placeholder="Email">
									    			</div>
									    		</div>


									    		<div class="form-group col-md-4">
									    			<p class="control-label">Remark<span class="require" aria-required="true" style="color:red"><small>*</small></span></p>
									    			<div class="input-icon right"><i class="fa"></i>
									    				<input type="text" class="form-control" 
									    				name="remark" value="<?php echo(isset($donation_data->remark) && !empty($donation_data->remark))?$donation_data->remark:'';?>"
									    				placeholder="Remark">
									    			</div>
									    		</div>
									    		
									    		<div class="form-group col-md-4">
									    			<p class="control-label">Status<span class="require" aria-required="true" style="color:red"><small>*</small></span></p>
									    			<div class="input-icon right"><i class="fa"></i>
									    				<input type="text" class="form-control" 
									    				name="status" value="<?php echo(isset($donation_data->status) && !empty($donation_data->status))?$donation_data->status:'';?>"
									    				placeholder="Status">
									    			</div>
									    		</div>
									    	</div>
								        </div>
								    </div>     
							  	</div>
							    <input type="hidden" class="form-control" name="inserted_by" value="<?php echo $this->session->userdata('user_id'); ?>" placeholder="Title">	
						    	<input type="hidden" class="form-control" name="inserted_on" value="<?php echo date('Y-m-d'); ?>" placeholder="Title">	
						    	<input type="hidden" class="form-control" value="<?php echo $this->session->userdata('user_id'); ?>" name="modified_by" placeholder="Title">
						    	<input type="hidden" name="donation_id" value="<?php echo(isset($donation_data->donation_id) && !empty($donation_data->donation_id))?$donation_data->donation_id:'';?>">
							  	<div class="form-actions ">
							  		<div container>
							  			<div class="row">
							  				<div class="col-md-2 col-sm-2"style='margin-bottom: 10px;'>
							  					<a href="<?php echo base_url();?>donation"class="btn  btn-sm btn-primary"type="button"><i class=" icon-arrow-left "></i> Back</a>
							  				</div>
							  				<div class="col-md-7">
							  					
							  				</div>
							  				<div class="col-md-2  col-sm-2"  style="width: 12.6%;margin-bottom: 10px;">
							  					<button type="reset" class="btn  btn-sm btn-danger"> <i class="icon-close"></i> Clear </button>
							  				</div>
							  				<div class="col-md-2  col-sm-2"style="width: 12%;">
							  					<button type="submit" class="btn btn-primary btn-sm common_save" data-pk="donation_id" rel="<?php echo(isset($donation_data->donation_id) && !empty($donation_data->donation_id))?$donation_data->donation_id:'';?>"> <i class="icon-check"></i> <?php echo(isset($donation_data->donation_id) && !empty($donation_data->donation_id))?'Update':'Submit';?> </button> 
							  				</div>
							  			</div>
							  		</div>
							    </div>	
							</form>
						</div>						
					</div>
				</div>
			</div>
		</div>
	</div>
	<div >
		<?php $this->load->view('template/footer');?>
	</div>
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
	<script src="<?php echo base_url();?>assets/js/fileinput.min.js" type="text/javascript"></script>
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