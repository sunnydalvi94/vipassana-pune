<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="utf-8" />
        <title>Dhamma Punna Gallery</title>
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
        <link rel="shortcut icon" href="favicon.html"/> 
        <link rel="shortcut icon " type="image/gif" href="<?php echo base_url(); ?>assets/site/img/logo/wheel.gif">
    </head>
    <body class="c-layout-header-fixed c-layout-header-mobile-fixed  text-justify">
        <div class="c-layout-page">
            <?php $this->load->view('site/header'); ?>
            <div class=" c-size-md c-bg-img-center" style=" margin-bottom:45px;">
                <div class="container">
                    <div class="c-body">
                        <div class="row">
                            <div class="col-md-12">
                                <?php if(isset($Punna_gallery_data) && !empty($Punna_gallery_data)) {
                                    $i=1;
                                    foreach($Punna_gallery_data as $key) 
                                    { ?>
                                        <div class="c-content-title-2">
                                            <h3 class="c-center"><?php echo (isset($key->album_name) && !empty($key->album_name))?$key->album_name:''; ?></h3>
                                            <div class="c-line c-dot c-bg-blue-2 c-bg-after-blue-2"></div>
                                        </div>  
                                    <?php
                                    if ($i++ == 1) break;
                                    }
                                }?>
                            </div>
                        </div>
                    </div>
                    <div class="c-content-isotope-gallery c-opt-2"style="margin-top:0px;" >
                        <?php if(isset($Punna_gallery_data) && !empty($Punna_gallery_data)) {
                            foreach($Punna_gallery_data as $key) 
                            { ?>
                            <div class="c-content-isotope-item animate fadeInUp" data-wow-delay="0">
                                <div class="c-content-isotope-image-container">
                                    <img class="c-content-isotope-image" src="<?php echo base_url();?>uploads/album_image_images/<?php echo(isset($key->album_image_path) && !empty($key->album_image_path))?$key->album_image_path:'';?>"/>
                                    <div class="c-content-isotope-overlay c-ilightbox-image-2"
                                        href="<?php echo base_url();?>uploads/album_image_images/<?php echo(isset($key->album_image_path) && !empty($key->album_image_path))?$key->album_image_path:'';?>"
                                        data-options="thumbnail:'<?php echo base_url();?>uploads/album_image_images/<?php echo(isset($key->album_image_path) && !empty($key->album_image_path))?$key->album_image_path:'';?>'"
                                        data-caption="<h4>Pune Center</h4><p><?php echo (isset($key->album_image_description) && !empty($key->album_image_description))?$key->album_image_description:''; ?></p>">
                                        <div class="c-content-isotope-overlay-icon">
                                            <i class="fa fa-search c-font-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }
                        }?>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('site/footer'); ?>
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