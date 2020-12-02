<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8"/> 
    <title>Sidebar | Vipassana</title>
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
    <link href="<?php echo base_url();?>assets/admin/layout4/css/layout.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>/assets/admin/layout4/css/light.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/global/plugins/toast/jquery.toast.css" rel="stylesheet" type="text/css"/>
   <link rel="shortcut icon" href="<?php echo base_url();?>/siteassets/Projectlogo.png"/>
	<title></title>
</head>
<body>
<?php $current_menu= $this->uri->segment(1); ?>
<div class="page-sidebar-wrapper">
	<div class="page-sidebar md-shadow-z-2-i  navbar-collapse collapse">
		<ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
			<li>
				<a href="<?php echo base_url(); ?>dashboard">
				<i class="fa fa-dashboard"></i>
				<span class="title">Dashboard</span>
				</a>
			</li>
			<li >
				<a href="javascript:;">
				<i class="icon-home"></i>
				<span class="title">Home</span>
				<span class="arrow "></span>
				</a>
				<ul class="sub-menu">
					<li>
						<a href="<?php echo base_url();?>children-slider-list"><i class="fa fa-sliders"></i>Sliders</a>
					</li>
					<li >
						<a href="<?php echo base_url();?>about-list"><i class="fa fa-tags"></i>
						About Vipassana</a>
					</li>
					<li>
						<a href="<?php echo base_url();?>ourcenters-list"><i class="fa fa-building-o"></i>
						Our Centers</a>
					</li>
					<li>
						<a href="<?php echo base_url();?>how-to-learn-list"><i class="fa fa-user"></i>
						How to Learn Vipassana?</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="<?php echo base_url();?>product-list">
				<i class="fa fa-sign-in"></i>
				<span class="title">Apply for Course</span>
				<span class="arrow"></span>
				</a>
				<ul class="sub-menu">
					<li>
						<a href="<?php echo base_url();?>ten-day-course-list"><i class="fa fa-check-square"></i>Apply for 10 day course </a>
					</li>
					<li>
						<a href="<?php echo base_url();?>faq-list"><i class="fa fa-question-circle-o fa-2x"></i>Frequently Asked Questions</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="<?php echo base_url();?>product-list">
				<i class="fa fa-child"></i>
				<span class="title">Children & Teenager</span>
				<span class="arrow"></span>
				</a>
				<ul class="sub-menu">
					<li>
						<a href="<?php echo base_url();?>children-course-list"><i class="fa fa-tasks"></i>Children Courses</a>
					</li>
					<li>
						<a href="<?php echo base_url();?>teenager-course-list"><i class="fa fa-tasks"></i>Teenager Courses</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="<?php echo base_url();?>mitra-upkram">
				<i class="fa fa-paint-brush"></i>
				<span class="title">Mitra Upakram</span>
				<span class="arrow"></span>
				</a>
				<ul class="sub-menu">
					<li>
						<a href="<?php echo base_url();?>mitra-activities-list"><i class="fa fa-paint-brush"></i>Mitra Pune Activities </a>
					</li>
					<li>
						<a href="<?php echo base_url();?>mitra-school-seva-registration-list"><i class="fa fa-check-square"></i>Mitra school seva &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;registered form</a>
					</li>

					
				</ul>
			</li>
			<li >
				<a href="<?php echo base_url();?>album-image-list">
				<i class="fa fa-picture-o"></i>
				<span class="title">Gallery</span>
				</a>
			</li>
			<li>
				<a href="<?php echo base_url();?>product-list">
				<i class="fa fa-users"></i>
				<span class="title">Old Students</span>
				<span class="arrow"></span>
				</a>
				<ul class="sub-menu">
					<li>
						<a href="<?php echo base_url();?>group-sitting-list"><i class="fa fa-users"></i>Group Sitting</a>
					</li>
					<li>
						<a href="<?php echo base_url();?>one-day-course-list"><i class="fa fa-user"></i>One Day</a>
					</li>
					<li>
						<a href="<?php echo base_url();?>seva-registration-list"><i class="fa fa-user"></i>Seva Registered Form</a>
					</li>

					
				</ul>
			</li>
		</ul>
	</div>
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
    <script>
    jQuery(document).ready(function() {
        Metronic.init();
        Layout.init(); 
        ComponentsPickers.init();
        TableAdvanced.init();
    });
    </script>
</body>
</html>