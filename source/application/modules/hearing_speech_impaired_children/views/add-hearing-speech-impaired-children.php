<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Add Hearing Speech Impaired Children Courses | Vipassana </title>
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
					<div class="portlet light"style="padding: 15px 30px 15px 30px;">
						<div class="portlet-title">
							<div class="caption font-blue">
                                <i class="font-blue" ></i>
                                <i class="icon-plus font-blue"></i>
                                <span class="caption-subject bold uppercase">Add Hearing Speech Impaired Children Courses </span>
                            </div>
						</div>
						<div class="portlet-body form">
							<form action="hearing-speech-impaired-children" id="hearing-speech-impaired-children" data-apikey="<?php echo (isset($keydata->key) && !empty($keydata->key))?$keydata->key:''; ?>" data-redirect="hearing_speech_impaired_children_courses" class="horizontal-form" method="post" enctype="multipart/form-data">
							  	<div class="form-body">
								    <div class="row"> 
								    	<div class="col-md-9">
								    		<div class="row"> 
										    	<div class="col-md-6">
										    		<div class="form-group">
										    			<p class="control-label">Hearing Speech Impaired Children Title<span class="require" aria-required="true" style="color:red"><small>*</small></span></p>
										    			<div class="input-icon right"><i class="fa"></i>
										    				<input type="text" class="form-control" 
										    				name="hearing_speech_impaired_children_title" value="<?php echo(isset($hearing_speech_impaired_children_data->hearing_speech_impaired_children_title) && !empty($hearing_speech_impaired_children_data->hearing_speech_impaired_children_title))?$hearing_speech_impaired_children_data->hearing_speech_impaired_children_title:'';?>"
										    				placeholder="Title" required maxlength="100" minlength="4">
										    			</div>
										    		</div>
										        </div>
										        <div class="col-md-6">	
										    		<div class="form-group">
										    			<p class="control-label">Duration<span class="require" aria-required="true" style="color:red"><small>*</small></span></p>
										    			<div class="input-icon right"><i class="fa"></i>
										    				<input type="text" class="form-control" 
										    				name="hearing_speech_impaired_children_duration" value="<?php echo(isset($hearing_speech_impaired_children_data->hearing_speech_impaired_children_duration) && !empty($hearing_speech_impaired_children_data->hearing_speech_impaired_children_duration))?$hearing_speech_impaired_children_data->hearing_speech_impaired_children_duration:'';?>"
										    				placeholder="Duration"required maxlength="150" minlength="4">
										    			</div>
										    		</div>
										    	</div>	
										        <div class="col-md-6">	
										    		<div class="form-group">
										    			<p class="control-label">Date<span class="require" aria-required="true" style="color:red"><small>*</small></span></p>
										    			<div class="input-icon right"><i class="fa"></i>
										    				<input type="text" class="form-control" 
										    				name="hearing_speech_impaired_children_date" value="<?php echo(isset($hearing_speech_impaired_children_data->hearing_speech_impaired_children_date) && !empty($hearing_speech_impaired_children_data->hearing_speech_impaired_children_date))?$hearing_speech_impaired_children_data->hearing_speech_impaired_children_date:'';?>"
										    				placeholder="Date"required maxlength="150" minlength="4">
										    			</div>
										    		</div>
										    	</div>
										    	<div class="col-md-6">
										    		<div class="form-group">
										    			<p class="control-label">Location<span class="require" aria-required="true" style="color:red"><small>*</small></span></p>
										    			<div class="input-icon right"><i class="fa"></i>
										    				<input type="text" class="form-control" 
										    				name="hearing_speech_impaired_children_location" value="<?php echo(isset($hearing_speech_impaired_children_data->hearing_speech_impaired_children_location) && !empty($hearing_speech_impaired_children_data->hearing_speech_impaired_children_location))?$hearing_speech_impaired_children_data->hearing_speech_impaired_children_location:'';?>"
										    				placeholder="Location"required maxlength="100" minlength="4">
										    			</div>
										    		</div>
										    	</div>
										    	<div class="col-md-6">	
										    		<div class="form-group">
									                    <p class="control-label">Enter URL<span class="require" style="color:red"><small>*</small> </span></p>
									                    <div class="input-icon right"> <i class="fa"></i>
									                        <input type="text" class="form-control" name="hearing_speech_impaired_children_video_url" value="<?php echo(isset($hearing_speech_impaired_children_data->hearing_speech_impaired_children_video_url) && !empty($hearing_speech_impaired_children_data->hearing_speech_impaired_children_video_url))?$hearing_speech_impaired_children_data->hearing_speech_impaired_children_video_url:'';?>" placeholder="Enter Url"required maxlength="200" minlength="10" pattern="https?://.+" title="you have written in wrong format"/>
									                    </div>
												    </div>
										    	</div>
										    	<div class="col-md-6">	
										    		<div class="form-group">
										    			<p class="control-label">Note</p>
										    			<div class="input-icon right"><i class="fa"></i>
										    				<input type="text" class="form-control" 
										    				name="hearing_speech_impaired_children_note" value="<?php echo(isset($hearing_speech_impaired_children_data->hearing_speech_impaired_children_note) && !empty($hearing_speech_impaired_children_data->hearing_speech_impaired_children_note))?$hearing_speech_impaired_children_data->hearing_speech_impaired_children_note:'';?>"
										    				placeholder="Note">
										    			</div>
										    		</div>
										    	</div>
								    		</div>	
								    	</div>
								        <div class="col-md-3 text-center">
											<div class="form-group">
												<p class="control-label bold">Cover Image</p>
										        <div class="uploaded_image" style="padding-bottom: 10px !important;">
										            <img src="<?php echo base_url(); ?>uploads/hearing_speech_impaired_images/<?php echo (isset($hearing_speech_impaired_children_data->hearing_speech_impaired_children_cover_image) && !empty($hearing_speech_impaired_children_data->hearing_speech_impaired_children_cover_image))?$hearing_speech_impaired_children_data->hearing_speech_impaired_children_cover_image:'default.png';?>" style="height: 150px; width: 200px;" class="img-thumbnail"/>
										        </div>
										        <input type="file" name="file" id="file" class="upload_image" data-url="upload_hearing_speech_impaired_children_image">
										        <label for="file" class="upload_button"><?php echo(isset($hearing_speech_impaired_children_data->hearing_speech_impaired_children_cover_image) && !empty($hearing_speech_impaired_children_data->hearing_speech_impaired_children_cover_image))?'Change':'Select File';?></label>
										        <input type="hidden" name="hearing_speech_impaired_children_cover_image" class="file_name" value="<?php echo(isset($hearing_speech_impaired_children_data->hearing_speech_impaired_children_cover_image) && !empty($hearing_speech_impaired_children_data->hearing_speech_impaired_children_cover_image))?$hearing_speech_impaired_children_data->hearing_speech_impaired_children_cover_image:'';?>">
										       <!--  <span class="process"></span> -->
										        <span class="img_error"></span>
										    </div>
										</div>
								    </div> 
							  	</div>
							    <input type="hidden" class="form-control" name="inserted_by" value="<?php echo $this->session->userdata('user_id'); ?>" placeholder="Title">	
						    	<input type="hidden" class="form-control" name="inserted_on" value="<?php echo date('Y-m-d'); ?>" placeholder="Title">	
						    	<input type="hidden" class="form-control" value="<?php echo $this->session->userdata('user_id'); ?>" name="modified_by" placeholder="Title">
						    	<input type="hidden" name="hearing_speech_impaired_children_id" value="<?php echo(isset($hearing_speech_impaired_children_data->hearing_speech_impaired_children_id) && !empty($hearing_speech_impaired_children_data->hearing_speech_impaired_children_id))?$hearing_speech_impaired_children_data->hearing_speech_impaired_children_id:'';?>">
							  	<div class="form-actions ">
								  <a href="<?php echo base_url();?>hearing_speech_impaired_children_courses"class="btn btn-primary"type="button" 
								  	><i class=" icon-arrow-left "></i> Back</a>
								  	<div class="pull-right">	
									  	<button type="reset" class="btn btn-danger"> <i class="icon-close"></i> Clear </button>
										<button type="submit" class="btn btn-primary common_save" data-pk="hearing_speech_impaired_children_id" rel="<?php echo(isset($hearing_speech_impaired_children_data->hearing_speech_impaired_children_id) && !empty($hearing_speech_impaired_children_data->hearing_speech_impaired_children_id))?$hearing_speech_impaired_children_data->hearing_speech_impaired_children_id:'';?>"> <i class="icon-check"></i> <?php echo(isset($hearing_speech_impaired_children_data->hearing_speech_impaired_children_id) && !empty($hearing_speech_impaired_children_data->hearing_speech_impaired_children_id))?'Update':'Submit';?> </button> 
										
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
	<script src="<?php echo base_url();?>assets/js/fileinput.min.js" type="text/javascript"></script>
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
        defaultPreviewContent: '<img src="./uploads/about_images/default.png" alt="Your Avatar">',
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