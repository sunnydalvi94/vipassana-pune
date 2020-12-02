<!DOCTYPE html>
<html lang="en"  >
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8"/>
	<title>JANGO | Ultimate Multipurpose Bootstrap HTML Theme - Default Home</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta content="" name="description"/>
	<meta content="" name="author"/>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
	<link href="assets/site/plugins/socicon/socicon.css" rel="stylesheet" type="text/css"/>
	<link href="assets/site/plugins/bootstrap-social/bootstrap-social.css" rel="stylesheet" type="text/css"/>		
	<link href="assets/site/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/site/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/site/plugins/animate/animate.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/site/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/site/plugins/revo-slider/css/settings.css" rel="stylesheet" type="text/css"/>
	<link href="assets/site/plugins/revo-slider/css/layers.css" rel="stylesheet" type="text/css"/>
	<link href="assets/site/plugins/revo-slider/css/navigation.css" rel="stylesheet" type="text/css"/>
	<!-- <link href="assets/site/plugins/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/> -->
	<link href="assets/site/plugins/owl-carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css"/>
	<link href="assets/site/plugins/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
	<link href="assets/site/plugins/slider-for-bootstrap/css/slider.css" rel="stylesheet" type="text/css"/>
	<link href="assets/site/plugins/ilightbox/css/ilightbox.css" rel="stylesheet" type="text/css"/>
	<link href="assets/site/demos/default/css/plugins.css" rel="stylesheet" type="text/css"/>
	<link href="assets/site/demos/default/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
	<link href="assets/site/demos/default/css/themes/default.css" rel="stylesheet" id="style_theme" type="text/css"/>
	<link href="assets/site/demos/default/css/custom.css" rel="stylesheet" type="text/css"/>
	<link href="assets/admin/layout4/css/admin_header.css" rel="stylesheet" type="text/css"/>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.14.1/ckeditor.js"></script>
	<link rel="shortcut icon" href="favicon.ico"/>

</head>
<body class="c-layout-header-fixed c-layout-header-mobile-fixed"> 
<header class="c-layout-header c-layout-header-4 c-layout-header-default-mobile"style="background-color: white;">
	<?php if($this->authentication->chk_login()==false){ redirect('admin'); }?>
	<div class="c-navbar">
		<div class="container-fluid"style="padding: 0px 0px 0px 10vw!important;">
			<div class="c-navbar-wrapper clearfix">
				<div class="c-brand c-pull-left">
					<a href="<?php echo base_url();?>dashboard" onclick="makeActiveElement('index10')" id="index10" class="c-logo">
						<img src="assets/site/img/logo/wheel.png" style="height: 70px;margin-bottom: -40px;margin-top: -29px;" alt="JANGO" class="c-desktop-logo">
						<img src="assets/site/img/logo/wheel.png" style="height: 60px;margin-bottom: -40px;margin-top: -20px;" alt="JANGO" class="c-desktop-logo-inverse">
						<img src="assets/site/img/logo/wheel.png" style="height: 60px;margin-bottom: -40px;margin-top: -20px;" alt="JANGO" class="c-mobile-logo">
					</a>
					<button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
					<span class="c-line"></span>
					<span class="c-line"></span>
					<span class="c-line"></span>
					</button>
					<!-- <button class="c-topbar-toggler" type="button">
						<i class="fa fa-ellipsis-v"></i>
					</button>
					<button class="c-search-toggler" type="button">
						<i class="fa fa-search"></i>
					</button>
					<button class="c-cart-toggler" type="button">
						<i class="icon-handbag"></i> <span class="c-cart-number c-theme-bg">2</span>
					</button> -->
				</div>
				<form class="c-quick-search" action="#">
					<input type="text" name="query" placeholder="Type to search..." value="" class="form-control" autocomplete="off">
					<span class="c-theme-link">&times;</span>
				</form>
				<nav class="c-mega-menu  c-mega-menu-dark c-mega-menu-dark-mobile c-fonts-uppercase c-fonts-bold"style="margin-left:3vw;">
					<ul class="nav navbar-nav c-theme-nav c-pull-left"> 
				    	<li class="c-menu-type-classic" onclick="makeActiveElement('index1')" id="index1">
						    <a  class="c-link dropdown-toggle">Home Page<span class="c-arrow c-toggler"></span></a>
						    <ul class="dropdown-menu c-pull-right">
								<li>
				                   <a href="<?php echo base_url();?>sliders">Sliders</a>
				                </li>
				                <li>
				                    <a href="<?php echo base_url();?>about-vipassana">
						            About Vipassana</a>
				                </li>
				                <li>
				                   <a href="<?php echo base_url();?>our-centers">
						           Our Centers</a>
				                </li>
				                <li>
				                    <a href="<?php echo base_url();?>how-to-learn-vipassana">
					            	How to Learn Vipassana?</a>
				                </li>
							</ul>
				    	</li>
				    	<li class="c-menu-type-classic" onclick="makeActiveElement('index2')" id="index2">
						    <a href="javascript:;" class="c-link dropdown-toggle ">Apply for Course<span class="c-arrow c-toggler"></span></a>
						    <ul class="dropdown-menu c-pull-right">
								<li>
				                    <a href="<?php echo base_url();?>apply-for-ten-day-course">Apply for 10 day course </a>
				                </li>
				                <li>
				                    <a href="<?php echo base_url();?>frequently-asked-questions">Frequently Asked Questions</a>
				                </li>
							</ul>
				    	</li>
				    	<li class="c-menu-type-classic" onclick="makeActiveElement('index3')" id="index3">
						    <a href="donation" class="c-link dropdown-toggle">Donation<span class="c-arrow c-toggler"></span></a>
				    	</li>
				    	<li class="c-menu-type-classic" onclick="makeActiveElement('index4')" id="index4">
						    <a href="javascript:;" class="c-link dropdown-toggle">Children & Teenager<span class="c-arrow c-toggler"></span></a>
						    <ul class="dropdown-menu c-pull-right">
								<li>
				                    <a href="<?php echo base_url();?>children_courses">Children Courses</a>
				                </li>
				                <li>
				                   <a href="<?php echo base_url();?>teenager_courses">Teenager Courses</a>
				                </li>
				                 <li>
				                   <a href="<?php echo base_url();?>hearing_speech_impaired_children_courses">Hearing Speech Impaired Children Courses</a>
							</ul>
				    	</li>
				    	<li class="c-menu-type-classic" onclick="makeActiveElement('index5')" id="index5">
						    <a href="javascript:;" class="c-link dropdown-toggle">Mitra Upakram<span class="c-arrow c-toggler"></span></a>
						    <ul class="dropdown-menu c-pull-right">
								<li>
				                    <a href="<?php echo base_url();?>mitra_pune_activities"></i>Mitra Pune Activities </a>
				                </li>
				                <li>
				                   <a href="<?php echo base_url();?>mitra-school-seva-registered-form"></i>Mitra school seva registered form</a>
				                </li>
							</ul>
				    	</li>
				    	<li class="c-menu-type-classic"onclick="makeActiveElement('index6')" id="index6">
						    <a href="<?php echo base_url();?>gallery" class="c-link dropdown-toggle">Gallery<span class="c-arrow c-toggler"></span></a>
				    	</li>
				    	<li class="c-menu-type-classic"onclick="makeActiveElement('index7')" id="index7">
						    <a href="javascript:;" class="c-link dropdown-toggle">Old Students<span class="c-arrow c-toggler"></span></a>
						    <ul class="dropdown-menu">
								<li>
				                    <a href="<?php echo base_url();?>group-sitting">Group Sitting</a>
				                </li>
				                <li>
				                   <a href="<?php echo base_url();?>one-day-course">One Day Course</a>
				                </li>
				                <li>
				                   <a href="<?php echo base_url();?>seva-registered-form">Seva Registered Form</a>
				                </li>
							</ul>
				    	</li>	
					</ul>	
					<ul class="nav navbar-nav c-theme-nav ">
						<li class="c-menu-type-classic" onclick="makeActiveElement('index8')" id="index8">
							<a href="javascript:;" class="c-link dropdown-toggle">
							<span class="username username-hide-on-mobile">
							<img alt="" style="height: 50px;width:50px; margin: -35px 0px -26px 4vw;" class="img-circle"  src="<?php echo base_url(); ?>assets/admin/layout4/img/avatar.png"/>
							</a>
							<ul class="dropdown-menu c-pull-right">
								<li>
									<a href="<?php echo base_url();?>add-change-password">
									<i class="icon-lock"></i> Change password </a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>logout">
									<i class="icon-key"></i> Log Out </a>
								</li>
							</ul>
						</li>
				    </ul>
				</nav>
		    </div>
		</div>  
	</div>
</header>		  
		    		
<script src="assets/site/plugins/jquery.min.js" type="text/javascript" ></script>
	<script src="assets/site/plugins/jquery-migrate.min.js" type="text/javascript" ></script>
	<script src="assets/site/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript" ></script>
	<script src="assets/site/plugins/jquery.easing.min.js" type="text/javascript" ></script>
	<script src="assets/site/plugins/reveal-animate/wow.js" type="text/javascript" ></script>
	<script src="assets/site/demos/default/js/scripts/reveal-animate/reveal-animate.js" type="text/javascript" ></script>
	<script src="assets/site/plugins/revo-slider/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
	<script src="assets/site/plugins/revo-slider/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
	<script src="assets/site/plugins/revo-slider/js/extensions/revolution.extension.slideanims.min.js" type="text/javascript"></script>
	<script src="assets/site/plugins/revo-slider/js/extensions/revolution.extension.layeranimation.min.js" type="text/javascript"></script>
	<script src="assets/site/plugins/revo-slider/js/extensions/revolution.extension.navigation.min.js" type="text/javascript"></script>
	<script src="assets/site/plugins/revo-slider/js/extensions/revolution.extension.video.min.js" type="text/javascript"></script>
	<script src="assets/site/plugins/revo-slider/js/extensions/revolution.extension.parallax.min.js" type="text/javascript"></script>
	<!-- <script src="assets/site/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script> -->
	<script src="assets/site/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
	<script src="assets/site/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
	<script src="assets/site/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
	<script src="assets/site/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
	<script src="assets/site/plugins/smooth-scroll/jquery.smooth-scroll.js" type="text/javascript"></script>
	<script src="assets/site/plugins/typed/typed.min.js" type="text/javascript"></script>
	<script src="assets/site/plugins/slider-for-bootstrap/js/bootstrap-slider.js" type="text/javascript"></script>
	<script src="assets/site/plugins/js-cookie/js.cookie.js" type="text/javascript"></script>
	<script src="assets/site/base/js/components.js" type="text/javascript"></script>
	<script src="assets/site/base/js/components-shop.js" type="text/javascript"></script>
	<script src="assets/site/base/js/app.js" type="text/javascript"></script>
	<script>
	$(document).ready(function() {    
		App.init(); // init core    
	});
	</script>
	<script src="assets/site/demos/default/js/scripts/revo-slider/slider-4.js" type="text/javascript"></script>
	<script src="assets/site/plugins/isotope/isotope.pkgd.min.js" type="text/javascript"></script>
	<script src="assets/site/plugins/isotope/imagesloaded.pkgd.min.js" type="text/javascript"></script>
	<script src="assets/site/plugins/isotope/packery-mode.pkgd.min.js" type="text/javascript"></script>
	<script src="assets/site/plugins/ilightbox/js/jquery.requestAnimationFrame.js" type="text/javascript"></script>
	<script src="assets/site/plugins/ilightbox/js/jquery.mousewheel.js" type="text/javascript"></script>
	<script src="assets/site/plugins/ilightbox/js/ilightbox.packed.js" type="text/javascript"></script>
	<script src="assets/site/demos/default/js/scripts/pages/isotope-gallery.js" type="text/javascript"></script>
	<script src="assets/site/plugins/revo-slider/js/extensions/revolution.extension.parallax.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','../../../../../www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-64667612-1', 'themehats.com');
        ga('send', 'pageview');
	</script>
	<!-- .............used for active menu.............................. -->
    <script>
        function makeActiveElement (index){
        	if(index){
	        	window.localStorage.setItem("index",index);  // on click index id
        	}else{
        		const storeIndex = window.localStorage.getItem('index');

        		if(storeIndex){
        			const element= document.getElementById(storeIndex)
					element.className += " c-active";
        		}else{
        			const element= document.getElementById('index1'); 
					element.className += " c-active";
        		}
        	}
        }
		makeActiveElement(); // on page refersh
	</script>
	</body>
	</html>