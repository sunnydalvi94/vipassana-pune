<!DOCTYPE html>
<html lang="en"  >
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8"/>
    <title>Seva</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description"/>
    <meta content="" name="author"/>
      <base href="<?php echo base_url(); ?>">
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url(); ?>assets/site/plugins/socicon/socicon.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/site/plugins/bootstrap-social/bootstrap-social.css" rel="stylesheet" type="text/css"/>       
    <link href="<?php echo base_url(); ?>assets/site/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/site/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/site/plugins/animate/animate.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/site/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/site/plugins/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/site/plugins/owl-carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/site/plugins/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/site/plugins/slider-for-bootstrap/css/slider.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/site/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/site/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/site/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/site/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/site/demos/default/css/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/site/demos/default/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/site/demos/default/css/themes/default.css" rel="stylesheet" id="style_theme" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/site/demos/default/css/custom.css" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon " type="image/gif" href="<?php echo base_url(); ?>assets/site/img/logo/wheel.gif">
    <link href="<?php echo base_url(); ?>assets/site/css/jquery.toast.css" rel="stylesheet" type="text/css">
    <style>
.glyphicon { margin-right:10px; }
.panel-body { padding:0px; }
.panel-body table tr td { padding-left: 15px }
.panel-body .table {margin-bottom: 0px; }
    </style>
</head>
<body class="c-layout-header-fixed c-layout-header-mobile-fixed">
<div class="c-layout-page">
 <?php $this->load->view('site/header'); ?>
 <div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th">
                            </span>Modules</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Orders</a> <span class="label label-success">$ 320</span>
                                    </td>
                                </tr>
                               
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-user">
                            </span>Account</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Change Password</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Notifications</a> <span class="label label-info">5</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Import/Export</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-trash text-danger"></span><a href="http://www.jquery2dotnet.com" class="text-danger">
                                            Delete Account</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-file">
                            </span>Reports</a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-usd"></span><a href="http://www.jquery2dotnet.com">Sales</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-user"></span><a href="http://www.jquery2dotnet.com">Customers</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-tasks"></span><a href="http://www.jquery2dotnet.com">Products</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-shopping-cart"></span><a href="http://www.jquery2dotnet.com">Shopping Cart</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>      
 <?php $this->load->view('site/footer'); ?>
</div>
  <script src="<?php echo base_url();?>assets/site/plugins/jquery.min.js" type="text/javascript" ></script>
    <script src="<?php echo base_url();?>assets/site/plugins/jquery-migrate.min.js" type="text/javascript" ></script>
    <script src="<?php echo base_url();?>assets/site/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript" ></script>
    <script src="<?php echo base_url();?>assets/site/plugins/jquery.easing.min.js" type="text/javascript" ></script>
    <script src="<?php echo base_url();?>assets/site/plugins/reveal-animate/wow.js" type="text/javascript" ></script>
    <script src="<?php echo base_url();?>assets/site/demos/default/js/scripts/reveal-animate/reveal-animate.js" type="text/javascript" ></script>

    <!-- END: CORE PLUGINS -->

            <!-- BEGIN: LAYOUT PLUGINS -->
            <script src="<?php echo base_url();?>assets/site/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
            <script src="<?php echo base_url();?>assets/site/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
            <script src="<?php echo base_url();?>assets/site/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
            <script src="<?php echo base_url();?>assets/site/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
            <script src="<?php echo base_url();?>assets/site/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
            <script src="<?php echo base_url();?>assets/site/plugins/smooth-scroll/jquery.smooth-scroll.js" type="text/javascript"></script>
            <script src="<?php echo base_url();?>assets/site/plugins/slider-for-bootstrap/js/bootstrap-slider.js" type="text/javascript"></script>
            <script src="<?php echo base_url();?>assets/site/plugins/js-cookie/js.cookie.js" type="text/javascript"></script>
                <!-- END: LAYOUT PLUGINS -->
    
    <!-- BEGIN: THEME SCRIPTS -->
    <script src="<?php echo base_url();?>assets/site/base/js/components.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/site/base/js/components-shop.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/site/base/js/app.js" type="text/javascript"></script>
    <script>
    $(document).ready(function() {    
        App.init(); // init core    
    });
    </script>
    <script src="<?php echo base_url();?>assets/site/plugins/moment.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/site/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/site/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/site/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/site/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/site/demos/default/js/scripts/pages/datepicker.js" type="text/javascript"></script>
     <script src="<?php echo base_url(); ?>assets/site/base/js/components.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/site/base/js/components-shop.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/site/base/js/app.js" type="text/javascript"></script>

    <script src="<?php echo base_url();?>assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/global/plugins/jquery-validation/js/additional-methods.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/global/plugins/jquery-validation/lib/jquery.form.js" type="text/javascript"></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-64667612-1', 'themehats.com');
        ga('send', 'pageview');
    </script>
<script src="<?php echo base_url();?>assets/site/js/lightbox.min.js"></script>
<script src="<?php echo base_url();?>assets/site/js/jquery.toast.js"></script>
<script src="<?php echo base_url();?>assets/js/common.js" type="text/javascript"></script>

<script type="text/javascript">
   $('[data-toggle=modal]').on('click', function(e) {
  var $target = $($(this).data('target'));
  $target.data('triggered', true);
  setTimeout(function() {
    if ($target.data('triggered')) {
      $target.modal('show').data('triggered', false);
    };
  }, 1000); // milliseconds
  return false;
});

$('#myModal').on('show.bs.modal', function () {
  $('#download')[0].click();
});

</script>
</body>
</html>
