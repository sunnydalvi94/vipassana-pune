<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Add Group Sitting | Vipassana</title>
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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/site/css/fileinput.min.css">
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
					<div class="portlet light"style="padding: 15px 30px 15px 30px;">
						<div class="portlet-title">
							<div class="caption font-blue">
                                <i class="font-blue" ></i>
                                <i class="icon-plus font-blue"></i>
                                <span class="caption-subject bold uppercase">Add Group Sitting </span>
                            </div>
						</div>
						<div class="portlet-body form">
							<form action="group_sitting" id="group_sitting" data-apikey="<?php echo (isset($keydata->key) && !empty($keydata->key))?$keydata->key:''; ?>" data-redirect="group-sitting" class="horizontal-form" method="post" enctype="multipart/form-data">
							  	<div class="form-body">
								    <div class="row"> 
								    	<div class="col-md-8">
								    		<div class="row">
								    			<div class="col-md-4">
										    		<div class="form-group">
										    			<p class="control-label"> Area Name<span class="require" aria-required="true" style="color:red">*</span></p>
										    			<div class="input-icon right"><i class="fa"></i>
										    				<input type="text" class="form-control" 
										    				name="area_name" value="<?php echo(isset($group_sitting_data->area_name) && !empty($group_sitting_data->area_name))?$group_sitting_data->area_name:'';?>"
										    				placeholder="Area Name"required minlength="4" maxlength="250">
										    			</div>
										    		</div>
								    			</div>
								    			<div class="col-md-3">
										    		<div class="form-group">
										    			<p class="control-label">Day<span class="require" aria-required="true" style="color:red">*</span></p>
										    			<div class="input-icon right"><i class="fa"></i>
										    				<input type="text" class="form-control" 
										    				name="day" value="<?php echo(isset($group_sitting_data->day) && !empty($group_sitting_data->day))?$group_sitting_data->day:'';?>"
										    				placeholder="Day"required  minlength="4" maxlength="200">
										    			</div>
										    		</div>
								    			</div>
								    			<div class="col-md-5">
										    		<div class="form-group">
										    			<p class="control-label"> Time<span class="require" aria-required="true" style="color:red">*</span></p>
										    			<div class="input-icon right"><i class="fa"></i>
										    				<input type="text" class="form-control" 
										    				name="time" value="<?php echo(isset($group_sitting_data->time) && !empty($group_sitting_data->time))?$group_sitting_data->time:'';?>"
										    				placeholder="Time"required minlength="4" maxlength="100">
										    			</div>
										    		</div>
								    			</div>
								    			<div class="col-md-12">
										    		<div class="form-group">
										    			<p class="control-label"> Address<span class="require" aria-required="true" style="color:red">*</span></p>
										    			<div class="input-icon right"><i class="fa"></i>
										    				<textarea  class="form-control" rows="4" 
										    				name="group_sitting_address" 
										    				placeholder="Address"required minlength="4" maxlength="250"><?php echo(isset($group_sitting_data->group_sitting_address) && !empty($group_sitting_data->group_sitting_address))?$group_sitting_data->group_sitting_address:'';?></textarea>
										    			</div>
										    		</div>
								    			</div>
								    			<div class="col-md-6">
										    		<div class="form-group">
										    			<p class="control-label">Contact<span class="require" aria-required="true" style="color:red">*</span></p>
										    			<div class="input-icon right"><i class="fa"></i>
										    				<input type="text" class="form-control" 
										    				name="contact" value="<?php echo(isset($group_sitting_data->contact) && !empty($group_sitting_data->contact))?$group_sitting_data->contact:'';?>"
										    				placeholder="Contact"required minlength="4" maxlength="200">
										    			</div>
										    		</div>
								    			</div>
								    			<div class="col-md-6">
										    		<div class="form-group">
										    			<p class="control-label">Google Map<span class="require" aria-required="true" style="color:red">*</span></p>
										    			<div class="input-icon right"><i class="fa"></i>
										    				<input type="text" class="form-control" 
										    				name="google_map" value="<?php echo(isset($group_sitting_data->google_map) && !empty($group_sitting_data->google_map))?$group_sitting_data->google_map:'';?>"
										    				placeholder="Google Map"required minlength="4" maxlength="250" pattern="https?://.+"title="you have written in wrong format">
										    			</div>
										    		</div>
								    			</div>
								    		</div>
								    	</div>
								    	<div class="col-md-4 text-center">
											<div class="form-group">
										        <p class="control-label bold">Upload Image </p>
										        <div class="uploaded_image" style="padding-bottom: 10px !important;">
										            <img src="<?php echo base_url(); ?>uploads/group_sitting_images/<?php echo(isset($group_sitting_data->image) && !empty($group_sitting_data->image))?$group_sitting_data->image:'default.png';?>" style="height: 150px; width: 200px;" class="img-thumbnail"/>
										        </div>
										        <input type="file" name="file" id="file" class="upload_image" data-url="upload_group_sitting_image">
										        <label for="file" class="upload_button"><?php echo(isset($group_sitting_data->image) && !empty($group_sitting_data->image))?'Change':'Select File';?></label>
										        <input type="hidden" name="image" class="file_name" value="<?php echo(isset($group_sitting_data->image) && !empty($group_sitting_data->image))?$group_sitting_data->image:'';?>">
										       <!--  <span class="process"></span> -->
										        <span class="img_error"></span>
										    </div>
										</div>
								    </div> 
							  	</div>
							    <input type="hidden" class="form-control" name="inserted_by" value="<?php echo $this->session->userdata('user_id'); ?>" placeholder="Title">	
						    	<input type="hidden" class="form-control" name="inserted_on" value="<?php echo date('Y-m-d'); ?>" placeholder="Title">	
						    	<input type="hidden" class="form-control" value="<?php echo $this->session->userdata('user_id'); ?>" name="modified_by" placeholder="Title">
						    	<input type="hidden" name="group_sitting_id" value="<?php echo(isset($group_sitting_data->group_sitting_id) && !empty($group_sitting_data->group_sitting_id))?$group_sitting_data->group_sitting_id:'';?>">
							  	<div class="form-actions ">
								  <a href="<?php echo base_url();?>group-sitting"class="btn btn-primary"type="button" 
								  	><i class=" icon-arrow-left "></i> Back</a>
								  	<div class="pull-right">	
									  	<button type="reset" class="btn btn-danger"> <i class="icon-close"></i> Clear </button>
										<button type="submit" class="btn btn-primary common_save" data-pk="group_sitting_id" rel="<?php echo(isset($group_sitting_data->group_sitting_id) && !empty($group_sitting_data->group_sitting_id))?$group_sitting_data->group_sitting_id:'';?>"> <i class="icon-check"></i> <?php echo(isset($group_sitting_data->group_sitting_id) && !empty($group_sitting_data->group_sitting_id))?'Update':'Submit';?> </button> 
							    	</div>
							    </div>	

							</form>
						</div>						
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container" style="margin-left: 90px;">
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
	<script src="<?php echo base_url();?>assets/site/js/fileinput.min.js" type="text/javascript"></script>
	<script> 


	jQuery(document).ready(function() {
	   	Metronic.init(); // init metronic core components
	   	Layout.init(); 
		ComponentsPickers.init();
		TableAdvanced.init();
	});
	</script>
	<!-- <script type="text/javascript">
		$("#avatar-1").fileinput({
        uploadUrl: "file-upload",
        overwriteInitial: true,
        maxFileSize: 500,
        showClose: false,
        showCaption: false,
        browseLabel: 'Select',
        removeLabel: 'Remove',
        browseIcon: '<i class="fa fa-folder-open"></i>',
        removeIcon: '<i class="fa fa-times"></i>',
        removeTitle: 'Cancel or reset changes',
        elErrorContainer: '#kv-avatar-errors-1',
        msgErrorClass: 'alert alert-block alert-danger',
        defaultPreviewContent: '<img src="./uploads/group_sitting_images/default.png" alt="Your Avatar">',
        layoutTemplates: { main2: '{preview} {remove} {browse}' },
        allowedFileExtensions: ["jpg", "png", "gif", "jpeg"]
    }).on('fileuploaded', function(event, data, previewId, index) {
        $('input[name="image"]').val(data.response.image);
        
    }).on("fileimageloaded", function(e) {
        setTimeout(function() {
            $('#avatar-1').fileinput('upload');
        }, 500);
    }).on('fileuploaderror', function(event, data, msg) {
        $('#avatar-1').fileinput('clear');
        $.toast({ text: msg, heading: 'Error', icon: 'error' });
    });
	</script> -->
</body>
</html>