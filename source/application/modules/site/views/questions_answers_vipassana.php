<!DOCTYPE html>
<html lang="en"  >
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<head>
		<meta charset="utf-8"/>
		<title>Questions Answers Vipassana | Vipassana</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<meta content="" name="description"/>
		<meta content="" name="author"/>
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
		<link href="<?php echo base_url(); ?>assets/site/demos/default/css/plugins.css" rel="stylesheet" type="text/css"/>
		<link href="<?php echo base_url(); ?>assets/site/demos/default/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
		<link href="<?php echo base_url(); ?>assets/site/demos/default/css/themes/default.css" rel="stylesheet" id="style_theme" type="text/css"/>
		<link href="<?php echo base_url(); ?>assets/site/demos/default/css/custom.css" rel="stylesheet" type="text/css"/>
		<link rel="shortcut icon" href="favicon.ico"/>
	    <link rel="shortcut icon " type="image/gif" href="<?php echo base_url(); ?>assets/site/img/logo/wheel.gif">
	    <!-- ..............................question anwser vipassana style link.............................. -->
		<link href="<?php echo base_url(); ?>assets/site/css/question_answer_vipassana.css" rel="stylesheet" type="text/css"/>
	</head>
    <body class="c-layout-header-fixed c-layout-header-mobile-fixed">
	    <div class="c-layout-page">
		    <?php $this->load->view('site/header'); ?>
			<div class="c-size-md">
				<div class="container">
					<div class="c-content-tab-4 c-opt-5" role="tabpanel">
						<div class="c-body">
							<div class="row">
								<div class="col-md-12">
									<div class="c-content-title-2">
										<h3 class="c-center">Questions & Answers About the Technique of Vipassana Meditation</h3>
										<div class="c-line c-dot c-bg-blue-2 c-bg-after-blue-2"></div>
									</div>	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
				    <div class="col-sm-12 col-md-12"style="padding-right: 15px; ">
				        <div class="panel-group table1" id="accordion">
				        	<?php if(isset($faq_data) && !empty($faq_data))
							{ 
					            foreach($faq_data as $key) 
					            { ?>
						            <div class="panel panel-default">
						                <div class="panel-heading">
						                    <h4 class="panel-title">
						                        <a data-toggle="collapse" data-parent="#accordion"  style="font-size: 20px;" href="#<?php echo (isset($key->faq_id) && !empty($key->faq_id))?$key->faq_id:''; ?>"><span class="fa fa-question-circle">
						                        </span>&nbsp;<?php echo (isset($key->question_name) && !empty($key->question_name))?$key->question_name:''; ?></a>
						                    </h4>
						                </div>
						                <div id="<?php echo (isset($key->faq_id) && !empty($key->faq_id))?$key->faq_id:''; ?>" class="panel-collapse collapse">
						                    <div class="panel-body" style="padding: 0px 20px 0px 20px !important;">
						                       <div class="row">
							                       <p class="text-justify"style="padding:10px;">
												     <?php echo (isset($key->answer) && !empty($key->answer))?$key->answer:''; ?> 
										        	</p>
						                       </div>
						                    </div>
						                </div>
						            </div>
				                <?php 
					            }
					        } ?> 
				        </div>
				    </div>
				</div>
			</div>
			<?php $this->load->view('site/footer'); ?>
	    </div>
	 	<script src="<?php echo base_url(); ?>assets/site/plugins/jquery.min.js" type="text/javascript" ></script>
		<script src="<?php echo base_url(); ?>assets/site/plugins/jquery-migrate.min.js" type="text/javascript" ></script>
		<script src="<?php echo base_url(); ?>assets/site/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript" ></script>
		<script src="<?php echo base_url(); ?>assets/site/plugins/jquery.easing.min.js" type="text/javascript" ></script>
		<script src="<?php echo base_url(); ?>assets/site/plugins/reveal-animate/wow.js" type="text/javascript" ></script>
		<script src="<?php echo base_url(); ?>assets/site/demos/default/js/scripts/reveal-animate/reveal-animate.js" type="text/javascript" ></script>
		<script src="<?php echo base_url(); ?>assets/site/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/site/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/site/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/site/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/site/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/site/plugins/smooth-scroll/jquery.smooth-scroll.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/site/plugins/slider-for-bootstrap/js/bootstrap-slider.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/site/plugins/js-cookie/js.cookie.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/site/base/js/components.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/site/base/js/components-shop.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/site/base/js/app.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/js/common.js" type="text/javascript"></script>
		<script>
		$(document).ready(function() {    
			App.init(); // init core    
		});
		</script>
		<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="47ca6d26a57b7ce858208cca-text/javascript">
			var acc = document.getElementsByClassName("accordion");
			var i;

			for (i = 0; i < acc.length; i++) {
			acc[i].onclick = function() {
				this.classList.toggle("active");
				var panel = this.nextElementSibling;
				if (panel.style.maxHeight){
				panel.style.maxHeight = null;
				} else {
				panel.style.maxHeight = panel.scrollHeight + "px";
				} 
			  }
			}
		</script>
	    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="47ca6d26a57b7ce858208cca-|49" defer=""></script>
    </body>
</html>
