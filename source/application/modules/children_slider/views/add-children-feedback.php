<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Add One Day Course | Vipassana </title>
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
                                    <span class="caption-subject bold uppercase">children slider</span>
                                </div>
							</div>
							<div class="portlet-body form">
								<form action="children-slider" id="children-slider" data-apikey="<?php echo (isset($keydata->key) && !empty($keydata->key))?$keydata->key:''; ?>" data-redirect="children-slider-list" class="horizontal-form" method="post" enctype="multipart/form-data">
								  	<div class="form-body">
									    <div class="row"> 
									    	<div class="col-md-7">
									    		<div class="form-group">
									    			<label class="control-label">slider_name<span class="require" aria-required="true" style="color:red">*</span></label>
									    			<div class="input-icon right"><i class="fa"></i>
									    				<input type="text" class="form-control" 
									    				name="slider_name" value="<?php echo(isset($children_slider_data->slider_name) && !empty($children_slider_data->slider_name))?$children_slider_data->slider_name:'';?>"
									    				placeholder="Course Name">
									    			</div>
									    		</div>
									    		<div class="form-group">
									    			<label class="control-label"> slider_description<span class="require" aria-required="true" style="color:red">*</span></label>
									    			<div class="input-icon right"><i class="fa"></i>
									    				<input type="text" class="form-control" 
									    				name="slider_description" value="<?php echo(isset($children_slider_data->slider_description) && !empty($children_slider_data->slider_description))?$children_slider_data->slider_description:'';?>"
									    				placeholder="Short Decription">
									    			</div>
									    		</div>
									    	</div>
									    	<div class="col-md-5 text-center">
												<div class="form-group">
											        <label class="control-label">Upload Image </label><br>
											        <div class="uploaded_image" style="padding-bottom: 10px !important;">
											            <img src="<?php echo base_url(); ?>uploads/children_slider_images/<?php echo(isset($children_slider_data->image) && !empty($children_slider_data->image))?$children_slider_data->image:'default.png';?>" style="height: 150px; width: 200px;" class="img-thumbnail"/>
											        </div>
											        <input type="file" name="file" id="file" class="upload_image" data-url="upload_children_slider_image">
											        <label for="file" class="upload_button" /><?php echo(isset($children_slider_data->image) && !empty($children_slider_data->image))?'Change':'Select File';?></label>
											        <input type="hidden" name="image" class="file_name" value="<?php echo(isset($children_slider_data->image) && !empty($children_slider_data->image))?$children_slider_data->image:'';?>">
											       <!--  <span class="process"></span> -->
											        <span class="img_error"></span>
											    </div>
											</div>
									    </div> 
								  	</div>
								    <input type="hidden" class="form-control" name="inserted_by" value="<?php echo $this->session->userdata('user_id'); ?>" placeholder="Title">	
							    	<input type="hidden" class="form-control" name="inserted_on" value="<?php echo date('Y-m-d'); ?>" placeholder="Title">	
							    	<input type="hidden" class="form-control" value="<?php echo $this->session->userdata('user_id'); ?>" name="modified_by" placeholder="Title">
							    	<input type="hidden" name="children_slider_id" value="<?php echo(isset($children_slider_data->children_slider_id) && !empty($children_slider_data->children_slider_id))?$children_slider_data->children_slider_id:'';?>">
								  	<div class="form-actions ">
									  <a href="<?php echo base_url();?>sliders"class="btn btn-primary"type="button" 
									  	><i class=" icon-arrow-left "></i> Previous</a>
									  	<div class="pull-right">	
										  	<button type="reset" class="btn btn-danger"> <i class="icon-close"></i> Clear </button>
											<button type="submit" class="btn btn-success common_save" data-pk="children_slider_id" rel="<?php echo(isset($children_slider_data->children_slider_id) && !empty($children_slider_data->children_slider_id))?$children_slider_data->children_slider_id:'';?>"> <i class="icon-check"></i> <?php echo(isset($children_slider_data->children_slider_id) && !empty($children_slider_data->children_slider_id))?'Update':'Submit';?> </button> 
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