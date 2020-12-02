<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="utf-8" />
        <title>Pune Vipassana</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <meta content="" name="description" />
        <meta content="" name="author" />
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
        <link href="<?php echo base_url(); ?>assets/site/plugins/socicon/socicon.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/site/plugins/bootstrap-social/bootstrap-social.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/site/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/site/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/site/plugins/animate/animate.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/site/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/site/plugins/revo-slider/css/settings.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/site/plugins/revo-slider/css/layers.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/site/plugins/revo-slider/css/navigation.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/site/plugins/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/site/plugins/owl-carousel/assets/site/owl.carousel.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/site/plugins/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/site/plugins/slider-for-bootstrap/css/slider.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/site/plugins/ilightbox/css/ilightbox.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/site/demos/index/css/plugins.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/site/demos/index/css/components.css" id="style_components" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/site/demos/index/css/themes/default.css" rel="stylesheet" id="style_theme" type="text/css" />
        <link rel="shortcut icon" href="favicon.html" />
        <link rel="shortcut icon " type="image/gif" href="<?php echo base_url(); ?>assets/site/img/logo/wheel.gif">
        <link href="<?php echo base_url(); ?>assets/site/css/custom.css" rel="stylesheet" type="text/css"/>
    </head>
    <style type="text/css">
        .main-outer-mobile{display: none;}
        @media only screen and (max-width:768px)
        {
            .main-outer-mobile{display: block;}
            .main-outer-desktop{display: none;}
        }
    </style>
    <body class="c-layout-header-fixed c-layout-header-mobile-fixed " >
        <?php $this->load->view('site/header'); ?>
        <div class="c-layout-page">
            <section class="c-layout-revo-slider c-layout-revo-slider-4" id="home_slider" >
                <div class="tp-banner-container">
                    <div class="tp-banner rev_slider" data-version="5.0">
                        <ul>
                            <?php if(isset($home_slider_data) && !empty($home_slider_data))
                            {
                                $i=1;
                                foreach ($home_slider_data as $key) 
                                {
                                 ?>
                                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000">
                                        <img  
                                         src="<?php echo base_url();?>uploads/children_slider_images/<?php echo(isset($key->image) && !empty($key->image))?$key->image:'';?>" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                                    </li>
                                <?php 
                                 }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </section>
            <section>
                <div>
                    <div class="c-content-box c-size-md "style=" background-color:#EDF6FE;box-shadow: 0px 15px 10px -15px #A2BBD4;">
                        <div class="container">
                            <div class="row" style="margin-bottom:90px;">
                                <div class="col-sm-4">
                                    <div class="c-content-feature-1 wow animate fadeInUp" data-wow-delay="0.2s">
                                        <div class="c-center">
                                        <a href="one-day-vipassana-courses"><img style="height:150px;width:200px" src="<?php echo base_url(); ?>assets/site/img/child_photo/children_anapana6.jpg" alt=""></a>
                                        </div>
                                        <h3 class="c-font-uppercase c-font-bold c-center"><a href="one-day-vipassana-courses">10 Day</a></h3>
                                        <p class="c-font-thin">Featuring trending modern web standards.
                                        <br/>Clean and easy framework design for worry and hassle free customizations.</p>
                                        <div class="c-center">
                                             <a href="<?php echo base_url(); ?>apply-for-ten-days-courses"> <button class="btn btn-info btn-xs">Apply</button></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 c-card">
                                    <div class="c-content-feature-1 wow animate fadeInUp" data-wow-delay="0.4s">
                                        <div class="c-center">
                                        <a href="group-sitting-in-pune-area"><img style="height:150px;width:200px" src="<?php echo base_url(); ?>assets/site/img/child_photo/group_sitting.jpeg" alt=""></a>
                                        </div>
                                         <h3 class="c-font-uppercase c-font-bold c-center"><a href="group-sitting-in-pune-area
                                            ">Learn Anapana</a></h3>
                                        <p class="c-font-thin">Quick response with regular updates.
                                        Each update will include great new features and enhancements for free.</p>
                                        <div class="c-center">
                                          <a href="group-sitting-in-pune-area"> <button class="btn btn-info btn-xs">Read More</button></a> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4"style="margin-bottom:15px;">
                                    <div class="c-content-feature-1 wow animate fadeInUp ">
                                        <div class="c-center">
                                        <a href="children-anapana" ><img style="height:150px;width:200px" src="<?php echo base_url(); ?>assets/site/img/child_photo/child_meditation5.jpg" alt=""></a>
                                        </div>
                                        <h3 class="c-font-uppercase c-font-bold c-center">  <a href="children-anapana">Children Anapana</a></h3>
                                       
                                        <p class="c-font-thin">Beautiful cinematic designs optimized for all screen sizes and types. Compatible with Retina high pixel density displays.</p>
                                        <div class="c-center">
                                          <a href="children-anapana">  <button class="btn btn-info btn-xs">Read More</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </section>
            <section class="main-outer-desktop">
                <div style=";box-shadow: 0px 15px 10px -15px #A2BBD4; ">
                    <div class=" about_vipassana">
                        <?php if(isset($about_data) && !empty($about_data)){
                        $i=1;
                            foreach ($about_data as $key) 
                            {?>
                                <div class="c-content-title-1 container c-title-md">
                                    <div>
                                        <div class="c-content-title-3  c-border-left-blue-2" style="margin:60px 0px 30px 0px;">
                                            <h3 class="c-font-blue-2 ">
                                                <?php echo(isset($key->about_name) && !empty($key->about_name))?$key->about_name:'';?>
                                            </h3> 
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row" style="margin-bottom:30px;">       
                                        <div class="col-md-7 text-justify">
                                            <p class="text-justify"><?php echo(isset($key->about_description) && !empty($key->about_description))?$key->about_description:'';?></p>
                                        </div>
                                        <div class="col-md-5" style="">
                                            <div class="c-content-isotope-gallery c-opt-3" >
                                                <div class="c-content-isotope-item" style="width: 100%;">
                                                    <div class="c-content-isotope-image-container">
                                                        <img class="c-content-isotope-image" src="<?php echo base_url(); ?>assets/site/img/slider/bg_cover.jpg" />
                                                        <div class="c-content-isotope-overlay c-ilightbox-image-1 w" href='<?php echo(isset($key->video) && !empty($key->video))?$key->video:'';?>' data-options="smartRecognition: true">
                                                            <div class="c-content-isotope-overlay-icon">
                                                                <i class="fa fa-play c-font-white"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                        }?>    
                    </div>
                </div>
            </section>
            <section class="main-outer-mobile">
                <div style=";box-shadow: 0px 15px 10px -15px #A2BBD4; ">
                    <div class=" about_vipassana">
                        <?php if(isset($about_data) && !empty($about_data)){
                        $i=1;
                            foreach ($about_data as $key) 
                            {?>
                                <div class="c-content-title-1 container c-title-md">
                                    <div>
                                        <div class="c-content-title-3  c-border-left-blue-2" style="margin:60px 0px 30px 0px;">
                                            <h3 class="c-font-blue-2">
                                                <?php echo(isset($key->about_name) && !empty($key->about_name))?$key->about_name:'';?>
                                            </h3> 
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row" style="margin-bottom:30px;">    <div class="col-md-5" style="">
                                        <div class="c-content-isotope-gallery c-opt-3" >
                                            <div class="c-content-isotope-item" style="width: 100%;">
                                                <div class="c-content-isotope-image-container">
                                                    <img class="c-content-isotope-image" src="<?php echo base_url(); ?>assets/site/img/slider/bg_cover.jpg" />
                                                    <div class="c-content-isotope-overlay c-ilightbox-image-3 w" href='<?php echo(isset($key->video) && !empty($key->video))?$key->video:'';?>' data-options="smartRecognition: true">
                                                        <div class="c-content-isotope-overlay-icon">
                                                            <i class="fa fa-play c-font-white"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div><br>   
                                        <div class="col-md-7 text-justify">
                                            <p class="text-justify"><?php echo(isset($key->about_description) && !empty($key->about_description))?$key->about_description:'';?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                        }?>    
                    </div>
                </div>
            </section>
            <section>
                <div class="c-content-box c-size-md c-overflow-hide c-bs-grid-small-space"style=" background-color:#EDF6FE;box-shadow: 0px 15px 10px -15px #A2BBD4;">
                    <div class="container">
                        <div class="c-content-title-3  c-border-left-blue-2" style="margin:0px 0px 35px 0px;">
                            <h3 class="c-font-blue-2">Our Centers</h3>
                        </div>

                        <div class="row">
                            
                                <div class="container">
                                    <div class="row"> 
                                      
                                        <?php if(isset($our_centers_data) && !empty($our_centers_data))
                                        {
                                            $i=1;
                                            foreach ($our_centers_data as $key) 
                                            {
                                             ?>
                                          <div class="col-md-1"> </div>     
                                        <div class="col-md-5 " style="margin-right:10px;margin-bottom: 10px;">
                                            <div class="c-content-latest-works cbp cbp-l-grid-masonry-projects wow animate " data-wow-delay="0s">
                                                <div class="cbp-item web-design logos wow animate fadeInLeft">
                                                    <div class="cbp-caption">
                                                        <div class="cbp-caption-defaultWrap">
                                                            <img src="<?php echo base_url();?>uploads/our_centers_images/<?php echo(isset($key->image) && !empty($key->image))?$key->image:'';?>" alt="">
                                                        </div>
                                                        <div class="cbp-caption-activeWrap">
                                                            <div class="c-masonry-border"></div>
                                                            <div class="cbp-l-caption-alignCenter">
                                                                <div class="cbp-l-caption-body">
                                                                    <a  class=" cbp-l-caption-buttonRight btn c-btn-square c-btn-border-1x c-btn-white c-btn-bold c-btn-uppercase"href="<?php echo base_url();?>uploads/our_centers_images/<?php echo(isset($key->image) && !empty($key->image))?$key->image:'';?>">zoom</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <center>
                                                    <a href="dhamma-punna" target="_blank" class=" cbp-l-grid-masonry-projects-title text-justify"><?php echo(isset($key->our_center_name) && !empty($key->our_center_name))?$key->our_center_name:'';?></a></center>
                                                </div>
                                            </div>
                                        </div>
                                            <?php
                                                }
                                            }?> 
                                    </div>    
                                </div>
                               
                                
                               
                        </div>
                    </div>
                </div>
            </section>
            <section class="main-outer-desktop">
                <div style="box-shadow: 0px 15px 10px -15px #A2BBD4;" >
                    <div class="container how_to_learn">
                        <div class="c-foot">
                            <?php if(isset($how_to_learn) && !empty($how_to_learn)){
                             $i=1;
                                foreach ($how_to_learn as $key) 
                                { ?>
                                    <div class="c-content-title-3  c-border-left-blue-2" style="margin:60px 0px 30px 0px;">
                                        <h3 class="c-font-blue-2 "><?php echo(isset($key->how_to_learn_name) && !empty($key->how_to_learn_name))?$key->how_to_learn_name:'';?></h3>
                                    </div>
                                    <div class="row" style="margin-bottom:40px;">
                                        <div class="col-md-7 text-justify">
                                            <p class="text-justify">
                                                <?php echo(isset($key->how_to_learn_description) && !empty($key->how_to_learn_description))?$key->how_to_learn_description:'';?>
                                            </p>
                                        </div>
                                        <div class="col-md-5" style="">
                                            <div class="c-content-isotope-gallery c-opt-3" >
                                                <div class="c-content-isotope-item" style="width: 100%;">
                                                    <div class="c-content-isotope-image-container">
                                                        <img class="c-content-isotope-image" src="<?php echo base_url(); ?>assets/site/img/slider/vipassana_learn.jpg"/>
                                                        <div class="c-content-isotope-overlay c-ilightbox-image-2 " href='<?php echo(isset($key->how_to_learn_video) && !empty($key->how_to_learn_video))?$key->how_to_learn_video:'';?>' data-options="smartRecognition: true">
                                                            <div class="c-content-isotope-overlay-icon">
                                                                <i class="fa fa-play c-font-white"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                 <?php 
                                }
                            }?>
                        </div>
                    </div>
                </div>
            </section>
            <section class="main-outer-mobile">
                <div style="box-shadow: 0px 15px 10px -15px #A2BBD4;" >
                    <div class="container how_to_learn">
                            <div class="c-foot">
                                <?php if(isset($how_to_learn) && !empty($how_to_learn))
                                    { $i=1;
                                      foreach ($how_to_learn as $key) 
                                        { ?>
                                            <div class="c-content-title-3 c-theme-border" style="margin:60px 0px 30px 0px;">
                                                <h3 class="c-theme-font "><?php echo(isset($key->how_to_learn_name) && !empty($key->how_to_learn_name))?$key->how_to_learn_name:'';?></h3>
                                            </div>
                                            <div class="row" style="margin-bottom:40px;">  
                                                <div class="col-md-5" style="">
                                                    <div class="c-content-isotope-gallery c-opt-3" >
                                                        <div class="c-content-isotope-item" style="width: 100%;">
                                                            <div class="c-content-isotope-image-container">
                                                                <img class="c-content-isotope-image" src="<?php echo base_url(); ?>assets/site/img/slider/vipassana_learn.jpg"/>
                                                                <div class="c-content-isotope-overlay c-ilightbox-image-3 w" href='<?php echo(isset($key->how_to_learn_video) && !empty($key->how_to_learn_video))?$key->how_to_learn_video:'';?>' data-options="smartRecognition: true">
                                                                    <div class="c-content-isotope-overlay-icon">
                                                                        <i class="fa fa-play c-font-white"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br>
                                                <div class="col-md-7 text-justify">
                                                    <p class="text-justify">
                                                        <?php echo(isset($key->how_to_learn_description) && !empty($key->how_to_learn_description))?$key->how_to_learn_description:'';?>
                                                   </p>
                                                </div>
                                            </div>
                                         <?php 
                                        }
                                    }?>
                            </div>
                    </div>
                </div>
            </section> 
        </div>
        <?php $this->load->view('site/footer'); ?>
        <div class="c-layout-go2top">
            <i class="icon-arrow-up"></i>
        </div>
        <script src="<?php echo base_url(); ?>assets/site/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/site/plugins/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/site/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/site/plugins/jquery.easing.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/site/plugins/reveal-animate/wow.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/site/demos/index/js/scripts/reveal-animate/reveal-animate.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/site/plugins/revo-slider/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/site/plugins/revo-slider/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/site/plugins/revo-slider/js/extensions/revolution.extension.slideanims.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/site/plugins/revo-slider/js/extensions/revolution.extension.layeranimation.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/site/plugins/revo-slider/js/extensions/revolution.extension.navigation.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/site/plugins/revo-slider/js/extensions/revolution.extension.video.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/site/plugins/revo-slider/js/extensions/revolution.extension.parallax.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/site/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/site/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/site/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/site/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/site/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/site/plugins/smooth-scroll/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/site/plugins/typed/typed.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/site/plugins/slider-for-bootstrap/js/bootstrap-slider.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/site/plugins/js-cookie/js.cookie.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/site/base/js/components.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/site/base/js/components-shop.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/site/base/js/app.js" type="text/javascript"></script>
        <script>
            $(document).ready(function()
            {
                App.init(); // init core    
            });
        </script>
        <script src="<?php echo base_url(); ?>assets/site/demos/default/js/scripts/revo-slider/slider-4.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/site/plugins/isotope/isotope.pkgd.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/site/plugins/isotope/imagesloaded.pkgd.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/site/plugins/isotope/packery-mode.pkgd.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/site/plugins/ilightbox/js/jquery.requestAnimationFrame.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/site/plugins/ilightbox/js/jquery.mousewheel.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/site/plugins/ilightbox/js/ilightbox.packed.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/site/demos/default/js/scripts/pages/isotope-gallery.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/site/plugins/revo-slider/js/extensions/revolution.extension.parallax.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/js/common.js" type="text/javascript"></script>
    </body>
</html>