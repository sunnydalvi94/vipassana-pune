<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Seva Registered Form| Vipassana </title>
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
                                <span class="caption-subject bold uppercase">Seva Registered Form</span>
                            </div>
						</div>
						<div class="portlet-body form">
							<form action="seva-registration" id="seva-registration" data-apikey="<?php echo (isset($keydata->key) && !empty($keydata->key))?$keydata->key:''; ?>" data-redirect="seva-registered-form" class="horizontal-form" method="post" enctype="multipart/form-data">
							  	<div class="form-body">
								    <div class="row"> 
								    	<div class="col-md-12">
								    		<div class="row">
									    		<div class="form-group col-md-4">
									    			<p class="control-label">First Name<span class="require" aria-required="true" style="color:red"><small>*</small></span></p>
									    			<div class="input-icon right"><i class="fa"></i>
									    				<input type="text" class="form-control" 
									    				name="first_name" value="<?php echo(isset($seva_registration_data->first_name) && !empty($seva_registration_data->first_name))?$seva_registration_data->first_name:'';?>"
									    				placeholder="First Name">
									    			</div>
									    		</div>
									    		<div class="form-group col-md-4">
									    			<p class="control-label">Middle Name<span class="require" aria-required="true" style="color:red"><small>*</small></span></p>
									    			<div class="input-icon right"><i class="fa"></i>
									    				<input type="text" class="form-control" 
									    				name="middel_name" value="<?php echo(isset($seva_registration_data->middel_name) && !empty($seva_registration_data->middel_name))?$seva_registration_data->middel_name:'';?>"
									    				placeholder="Middle Name">
									    			</div>
									    		</div>
									    		<div class="form-group col-md-4">
									    			<p class="control-label">Last Name<span class="require" aria-required="true" style="color:red"><small>*</small></span></p>
									    			<div class="input-icon right"><i class="fa"></i>
									    				<input type="text" class="form-control" 
									    				name="last_name" value="<?php echo(isset($seva_registration_data->last_name) && !empty($seva_registration_data->last_name))?$seva_registration_data->last_name:'';?>"
									    				placeholder="Last Name">
									    			</div>
									    		</div>
									    		<div class="form-group col-md-4">
									    			<p class="control-label">Mobile No.<span class="require" aria-required="true" style="color:red"><small>*</small></span></p>
									    			<div class="input-icon right"><i class="fa"></i>
									    				<input type="text" class="form-control" 
									    				name="mobile_no" value="<?php echo(isset($seva_registration_data->mobile_no) && !empty($seva_registration_data->mobile_no))?$seva_registration_data->mobile_no:'';?>"
									    				placeholder="Mobile No">
									    			</div>
									    		</div>
									    		<div class="form-group col-md-4">
									    			<p class="control-label">Email<span class="require" aria-required="true" style="color:red"><small>*</small></span></p>
									    			<div class="input-icon right"><i class="fa"></i>
									    				<input type="email" class="form-control" 
									    				name="email" value="<?php echo(isset($seva_registration_data->email) && !empty($seva_registration_data->email))?$seva_registration_data->email:'';?>"
									    				placeholder="Email">
									    			</div>
									    		</div>
									    		<div class="form-group col-md-4">
									    			<p class="control-label">Occupation<span class="require" aria-required="true" style="color:red"><small>*</small></span></p>
									    			<div class="input-icon right"><i class="fa"></i>
									    				<input type="text" class="form-control" 
									    				name="occupation" value="<?php echo(isset($seva_registration_data->occupation) && !empty($seva_registration_data->occupation))?$seva_registration_data->occupation:'';?>"
									    				placeholder="Occupation">
									    			</div>
									    		</div>
									    		<div class="form-group col-md-6">
									    			<p class="control-label">City<span class="require" aria-required="true" style="color:red"><small>*</small></span></p>
									    			<div class="input-icon right"><i class="fa"></i>
									    				<input type="text" class="form-control" 
									    				name="city" value="<?php echo(isset($seva_registration_data->city) && !empty($seva_registration_data->city))?$seva_registration_data->city:'';?>"
									    				placeholder="City">
									    			</div>
									    		</div>
									    		<div class="form-group col-md-6">
									    			<p class="control-label">Area of City<span class="require" aria-required="true" style="color:red"><small>*</small></span></p>
									    			<div class="input-icon right"><i class="fa"></i>
									    				<input type="text" class="form-control" 
									    				name="area_of_city" value="<?php echo(isset($seva_registration_data->area_of_city) && !empty($seva_registration_data->area_of_city))?$seva_registration_data->area_of_city:'';?>"
									    				placeholder="Area of City">
									    			</div>
									    		</div>
									    		<div class="form-group col-md-4">
									    			<p class="control-label">Age<span class="require" aria-required="true" style="color:red"><small>*</small></span></p>
									    			<div class="input-icon right"><i class="fa"></i>
									    				<input type="text" class="form-control" 
									    				name="age" value="<?php echo(isset($seva_registration_data->age) && !empty($seva_registration_data->age))?$seva_registration_data->age:'';?>"
									    				placeholder="Age" maxlength="2">
									    			</div>
									    		</div>
									    		<div class="form-group col-md-4">
									    			<p class="control-label">Gender<span class="require" aria-required="true" style="color:red"><small>*</small></span></p>
									    			<div class="input-icon right"><i class="fa"></i>
									    				<input type="text" class="form-control" 
									    				name="gender" value="<?php echo(isset($seva_registration_data->gender) && !empty($seva_registration_data->gender))?$seva_registration_data->gender:'';?>"
									    				placeholder="Gender">
									    			</div>
									    		</div>
									    		<div class="form-group col-md-4">
									    			<p class="control-label">No.of 10 Day Courses<span class="require" aria-required="true" style="color:red"><small>*</small></span></p>
									    			<div class="input-icon right"><i class="fa"></i>
									    				<input type="text" class="form-control" 
									    				name="ten_day_course_id" value="<?php echo(isset($seva_registration_data->ten_day_course_id) && !empty($seva_registration_data->ten_day_course_id))?$seva_registration_data->ten_day_course_id:'';?>"
									    				placeholder="Gender"  maxlength='3' oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
									    			</div>
									    		</div>
									    		<div class="form-group col-md-4">
									    			<!-- <p class="control-label">Ten Day Course Id<span class="require" aria-required="true" style="color:red"><small>*</small></span></p> -->
									    			<div class="input-icon right"><i class="fa"></i>
									    				<input type="hidden" class="form-control" 
									    				name="ten_day_course_id" value="<?php echo(isset($seva_registration_data->ten_day_course_id) && !empty($seva_registration_data->ten_day_course_id))?$seva_registration_data->ten_day_course_id:'';?>"
									    				placeholder="Ten Day Course Id">
									    			</div>
									    		</div>
									    		<div class="form-group col-md-12">
									    			<p class="control-label">No of courses served/ any other seva given previously?<span class="require" aria-required="true" style="color:red"><small>*</small></span></p>
									    			<div class="input-icon right"><i class="fa"></i>
									    				<input type="text" class="form-control" 
									    				name="answer" value="<?php echo(isset($seva_registration_data->answer) && !empty($seva_registration_data->answer))?$seva_registration_data->answer:'';?>"
									    				placeholder="No of courses served/ any other seva given previously?">
									    			</div>
									    		</div>
									    		<div class="form-group col-md-12">
									    			<p class="control-label">Comment<span class="require" aria-required="true" style="color:red"><small>*</small></span></p>
									    			<div class="input-icon right"><i class="fa"></i>
									    				<input type="text" class="form-control" 
									    				name="comments" value="<?php echo(isset($seva_registration_data->comments) && !empty($seva_registration_data->comments))?$seva_registration_data->comments:'';?>"
									    				placeholder="Comments">
									    			</div>
									    		</div>
									    		<div class="form-group col-md-12">
									    			<p class="control-label">Q1.Interested to Give Voluntary Seva on Daily Basis ( Fully Day/Few Hours) in Swargate Pune Center Office? Pls Select</p>
									    		    <input type="text" class="form-control" 
									    				name="question1" value="<?php echo(isset($seva_registration_data->question1) && !empty($seva_registration_data->question1))?$seva_registration_data->question1:'';?>"
									    				placeholder="Answer">
									    		</div>
									    		<div class="form-group col-md-12">
									    			<p class="control-label">Q2.In Center Management & Development</p>
									    			<input type="text" class="form-control" 
									    				name="question2" value="<?php echo(isset($seva_registration_data->question2) && !empty($seva_registration_data->question2))?$seva_registration_data->question2:'';?>"
									    				placeholder="Answer">
									    		</div>
									    		<div class="form-group col-md-12">
									    			<p class="control-label">Q3.Interested in Vipassana Course Related Seva? Please Select</p>
									    			<input type="text" class="form-control" 
									    				name="question3" value="<?php echo(isset($seva_registration_data->question3) && !empty($seva_registration_data->question3))?$seva_registration_data->question3:'';?>"
									    				placeholder="Answer">
									    		</div>
									    	</div>
								        </div>
								    </div>     
							  	</div>
							    <input type="hidden" class="form-control" name="inserted_by" value="<?php echo $this->session->userdata('user_id'); ?>" placeholder="Title">	
						    	<input type="hidden" class="form-control" name="inserted_on" value="<?php echo date('Y-m-d'); ?>" placeholder="Title">	
						    	<input type="hidden" class="form-control" value="<?php echo $this->session->userdata('user_id'); ?>" name="modified_by" placeholder="Title">
						    	<input type="hidden" name="seva_registration_id" value="<?php echo(isset($seva_registration_data->seva_registration_id) && !empty($seva_registration_data->seva_registration_id))?$seva_registration_data->seva_registration_id:'';?>">
							  	<div class="form-actions ">
								  <a href="<?php echo base_url();?>seva-registered-form"class="btn btn-primary"type="button" 
								  	><i class=" icon-arrow-left "></i> Back</a>
								  	<div class="pull-right">	
									  	<button type="reset" class="btn btn-danger"> <i class="icon-close"></i> Clear </button>
										<button type="submit" class="btn btn-primary common_save" data-pk="seva_registration_id" rel="<?php echo(isset($seva_registration_data->seva_registration_id) && !empty($seva_registration_data->seva_registration_id))?$seva_registration_data->seva_registration_id:'';?>"> <i class="icon-check"></i> <?php echo(isset($seva_registration_data->seva_registration_id) && !empty($seva_registration_data->seva_registration_id))?'Update':'Submit';?> </button> 
										
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
        defaultPreviewContent: '<img src="./uploads/how-to-learn_images/default.png" alt="Your Avatar">',
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