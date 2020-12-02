<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Add User | Project-sponsers </title>
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
	<link href="<?php echo base_url();?>assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url();?>assets/admin/layout4/css/layout.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url();?>assets/admin/layout4/css/light.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>assets/global/plugins/toast/jquery.toast.css" rel="stylesheet" type="text/css"/>
	<link rel="shortcut icon" href="<?php echo base_url();?>/siteassets/Projectlogo.png"/>

	
</head>
<body class="page-header-fixed page-sidebar-closed-hide-logo ">
	<?php $this->load->view('template/header');?>
	<div class="clearfix">
	</div>
	<div class="page-container">
		<?php $this->load->view('template/sidebar');?>
		<div class="page-content-wrapper">
			<div class="page-content">
				<div class="row">
					<div class="col-md-12">
						<div class="portlet light">
							<div class="portlet-title">
								<div class="caption font-blue">
                                    <i class="font-blue" ></i>
                                    <i class="icon-plus font-blue"></i>
                                    <span class="caption-subject bold uppercase"> User</span>
                                </div>
							</div>
							<div class="portlet-body form">
								<form action="user" id="user" data-apikey="<?php echo (isset($keydata->key) && !empty($keydata->key))?$keydata->key:''; ?>" data-redirect="user-list" class="horizontal-form" method="post" enctype="multipart/form-data">
								  	<div class="form-body">
									    <div class="row">               
									    	<div class="col-md-6">
									    		<div class="form-group">
									    			<label class="control-label"> Fullname<span class="require" aria-required="true" style="color:red">*</span></label>
									    			<div class="input-icon right"><i class="fa"></i>
									    				<input type="text" class="form-control " name="fullname" value="<?php echo(isset($user_data->fullname) && !empty($user_data->fullname))?$user_data->fullname:'';?>"placeholder=" firstname">
									    			</div>
									    		</div>
									    	</div>
									    	<div class="col-md-6">
									    		<div class="form-group">
									    			<label class="control-label"> Email<span class="require" aria-required="true" style="color:red">*</span></label>
									    			<div class="input-icon right"><i class="fa"></i>
									    				<input type="text" class="form-control " name="email" value="<?php echo(isset($user_data->email) && !empty($user_data->email))?$user_data->email:'';?>"placeholder=" email">
									    			</div>
									    		</div>
									    	</div>
									    	<div class="col-md-6">
									    		<div class="form-group">
									    			<label class="control-label">Contact<span class="require" aria-required="true" style="color:red">*</span></label>
									    			<div class="input-icon right"><i class="fa"></i>
									    				<input type="text" class="form-control " name="contact_no" value="<?php echo(isset($user_data->contact_no) && !empty($user_data->contact_no))?$user_data->contact_no:'';?>" placeholder="contact_no">
									    			</div>
									    		</div>
									    	</div>
									    	<div class="col-md-6">
									    		<div class="form-group">
													<label class="control-label">Role</label>
													<select class="form-control select2me role" name="role_id" id="role_id">
								                        <option value="">Select role</option>
								                        <?php if(isset($role_data) && !empty($role_data))
								                        {
								                            foreach ($role_data as $key)
								                            {?>
								                            	<option class="role" value="<?php echo (isset($key->role_id) && !empty($key->role_id))?$key->role_id:'';?>" <?php echo (isset($role_data->role_id) && !empty($role_data->role_id) && $role_data->role_id==$key->role_id)?'selected':'';?>>
								                                	<?php echo(isset($key->role_name) && !empty($key->role_name))?$key->role_name:'';?>
								                            	</option>
								                            <?php }
								                        }
								                        else{?>
								                            <option>Select role..</option>
								                        <?php }?>
								                    </select>
												</div>
									    	</div>
									    	<div class="col-md-6">
									    		<div class="form-group">
									    			<label class="control-label">Username<span class="require" aria-required="true" style="color:red">*</span></label>
									    			<div class="input-icon right"><i class="fa"></i>
									    				<input type="text" class="form-control " name="username" value="<?php echo(isset($user_data->username) && !empty($user_data->username))?$user_data->username:'';?>" placeholder="username">
									    			</div>
									    		</div>
									    	</div>
									    	<div class="col-md-6">
									    		<div class="form-group">
									    			<label class="control-label"> Password<span class="require" aria-required="true" style="color:red">*</span></label>
									    			<div class="input-icon right"><i class="fa"></i>
									    				<input type="password" class="form-control " name="password" value="<?php echo(isset($user_data->password) && !empty($user_data->password))?$user_data->password:'';?>" id="user_pass" placeholder="password">
									    			</div>
									    		</div>
									    	</div>
									    	<input type="hidden" class="form-control" name="last_login" value="<?php echo date('Y-m-d'); ?>" placeholder="Title">	
									    	<input type="hidden" class="form-control" name="inserted_by" value="<?php echo $this->session->userdata('user_id'); ?>" placeholder="Title">	
									    	<input type="hidden" class="form-control" name="inserted_on" value="<?php echo date('Y-m-d'); ?>" placeholder="Title">	
									    	<input type="hidden" class="form-control" value="<?php echo $this->session->userdata('user_id'); ?>" name="modified_by" value=""placeholder="Title">
									    	<input type="hidden" name="user_id" value="<?php echo(isset($user_data->user_id) && !empty($user_data->user_id))?$user_data->user_id:'';?>">
									    </div> 
								  	</div>
								  	<div class="form-actions ">
									  <a href="<?php echo base_url();?>user-list"class="btn btn-primary"type="button" 
									  	> <i class=" icon-arrow-left "></i> Previous</a>
									 <div class="pull-right">	
									  	<button type="reset" class="btn btn-danger"> <i class="icon-close"></i> Clear </button>
										<button type="submit" class="btn btn-success common_save" data-pk="user_id" rel="<?php echo(isset($user_data->user_id) && !empty($user_data->user_id))?$user_data->user_id:'';?>"> <i class="icon-check"></i> <?php echo(isset($user_data->user_id) && !empty($user_data->user_id))?'Update':'Submit';?> </button>
								     </div>	
								 	</div>
								</form>
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