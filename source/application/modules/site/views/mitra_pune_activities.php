<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="utf-8" />
        <title>Mitra Pune Activities | Vipassana</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <meta content="" name="description" />
        <meta content="" name="author" />
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
        <link href="<?php echo base_url(); ?>assets/site/plugins/ilightbox/css/ilightbox.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/site/demos/default/css/plugins.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/site/demos/default/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/site/demos/default/css/themes/default.css" rel="stylesheet" id="style_theme" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/site/css/custom.css" rel="stylesheet" type="text/css"/>
        <link rel="shortcut icon" href="favicon.ico"/>
        <link rel="shortcut icon " type="image/gif" href="<?php echo base_url(); ?>assets/site/img/logo/wheel.gif">
    </head>
    <body class="c-layout-header-fixed c-layout-header-mobile-fixed  text-justify">
        <div class="c-layout-page">
            <?php $this->load->view('site/header'); ?>
            <section>
                <div class="container">
                    <div class="c-body" style="padding: 0px 0px 0px 0px ;">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="c-content-title-2">
                                    <h3 class="c-center">Mitra Pune Activities</h3>
                                    <div class="c-line c-dot c-bg-blue-2 c-bg-after-blue-2"></div>
                                </div>  
                            </div>
                        </div>
                    </div> 
                </div>    
                <div class="container">
                    <h3 class="c-font-uppercase c-font-bold">
                        <span class="c-font-blue-2">videos </span>
                    </h3>
                    <div class="row">
                        
                        <?php if(isset($mitra_activities_video_data) && !empty($mitra_activities_video_data))
                        { $i=1;
                            foreach($mitra_activities_video_data as $key)
                            { ?>
                            <div class="col-md-6">    
                            <iframe width="550" height="315"
                            src="  <?php 
                            echo(isset($key->mitra_activity_video_url) && !empty($key->mitra_activity_video_url)&& !is_null($key->mitra_activity_video_url) == true)?$key->mitra_activity_video_url:'';?>">
                            </iframe>
                        </div> 
                        <?php 
                        // if ($i++ == 2) break;
                            }
                        } ?>
                        
                    </div>
                </div>
            </section> 
            <section>
                <div class="c-content-box c-size-md">
                	<div class="container">
                        <h3 class="c-font-uppercase c-font-bold">
                            <span class="c-font-blue-2">Images </span>
                        </h3>
                		<div class="cbp-panel">
                	        <div id="grid-container" class="cbp cbp-l-grid-masonry-projects">
                                <?php if(isset($mitra_activities_data) && !empty($mitra_activities_data)){
                                    foreach($mitra_activities_data as $key)
                                    { ?>
                    	            <div class="cbp-item web-design logos">
                    	                <div class="cbp-caption">
                    	                    <div class="cbp-caption-defaultWrap">
                    	                        <img  src="<?php echo base_url();?>assets/site/img/pune_activity/<?php echo(isset($key->mitra_activity_images) && !empty($key->mitra_activity_images))?$key->mitra_activity_images:'';?>" alt="">
                    	                    </div>
                    	                    <div class="cbp-caption-activeWrap">
                    	                    	<div class="c-masonry-border"></div>
                    	                        <div class="cbp-l-caption-alignCenter">
                    	                            <div class="cbp-l-caption-body">
                    	                                <a href="<?php echo base_url();?>assets/site/img/pune_activity/<?php echo(isset($key->mitra_activity_images) && !empty($key->mitra_activity_images))?$key->mitra_activity_images:'';?>" class="cbp-lightbox cbp-l-caption-buttonRight btn c-btn-square c-btn-border-1x c-btn-white c-btn-bold c-btn-uppercase">Zoom</a>
                    	                            </div>
                    	                        </div>
                    	                    </div>
                    	                </div>
                    	                <div class="" style="height:75px;padding-top: 5px; box-sizing: border-box;"><p> <?php echo (isset($key->mitra_activity_image_description) && !empty($key->mitra_activity_image_description))?$key->mitra_activity_image_description:''; ?></p>
                                        </div>
                    	            </div>
                                    <?php 
                                    }
                                }?>
                	        </div>
                    	</div>
                	</div>
                </div>
            </section>
        </div>
        <?php $this->load->view('site/footer'); ?>
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
        <script>
        $(document).ready(function() {    
            App.init(); // init core    
        });
        </script>
        <script src="<?php echo base_url(); ?>assets/site/plugins/isotope/isotope.pkgd.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/site/plugins/isotope/imagesloaded.pkgd.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/site/plugins/isotope/packery-mode.pkgd.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/site/plugins/ilightbox/js/jquery.requestAnimationFrame.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/site/plugins/ilightbox/js/jquery.mousewheel.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/site/plugins/ilightbox/js/ilightbox.packed.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/site/demos/default/js/scripts/pages/isotope-gallery.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/site/demos/default/js/scripts/pages/2col-portfolio.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/js/common.js" type="text/javascript"></script>
    </body>
</html>