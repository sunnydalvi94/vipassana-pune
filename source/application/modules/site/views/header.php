<!DOCTYPE html>
<html lang="en"  >
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="utf-8"/>
        <title>Header</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <base href="<?php echo base_url(); ?>">
        <link href="<?php echo base_url(); ?>assets/site/demos/default/css/custom.css" rel="stylesheet" type="text/css"/>
        <link rel="shortcut icon " type="image/gif" href="<?php echo base_url(); ?>assets/site/img/logo/wheel.gif">
        <script src="<?php echo base_url();?>assets/js/site_header.js" type="text/javascript"></script>
        <link href="<?php echo base_url(); ?>assets/site/css/jquery.toast.css" rel="stylesheet" type="text/css">
        <!-- ..................................header style link............................................... -->
        <link href="<?php echo base_url(); ?>assets/site/css/site_header.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="c-layout-header-fixed c-layout-header-mobile-fixed">
        <header class="c-layout-header c-layout-header-2 c-layout-header-dark-mobile c-header-transparent-dark header_page" data-minimize-offset="80">
            <div class="c-navbar">
                <div class="container-fluid"style="padding: 0px 0px 0px 12.2vw!important;">
                    <div class="c-navbar-wrapper clearfix">
                        <div class="c-brand c-pull-left">
                            <a href="site" class="c-logo">
                                <img  src="<?php echo base_url(); ?>assets/site/img/logo/wheel.png"  class="c-desktop-logo wheel">
                                <img  src="<?php echo base_url(); ?>assets/site/img/logo/wheel.png"  class="c-desktop-logo-inverse wheel">
                                <img  src="<?php echo base_url(); ?>assets/site/img/logo/wheel.png"  class="c-mobile-logo wheel">
                                <!-- <img  src="<?php echo base_url(); ?>assets/site/img/logo/wheel.jpg" class="wheel"> -->
                            </a>
                            <button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
                                <span class="c-line"></span>
                                <span class="c-line"></span>
                                <span class="c-line"></span>
                            </button>
                        </div>
                        <nav class="c-mega-menu c-mega-menu-dark c-mega-menu-dark-mobile c-theme c-fonts-uppercase c-fonts-bold"style="margin-left:3vw;">
                            <ul class="nav navbar-nav c-theme-nav"> 
                                <li class=" c-menu-type-classic"onclick="makeActiveElement('index1')" id="index1">
                                    <a href="<?php echo base_url(); ?>site" class="c-link dropdown-toggle" > <span class="font_size_menu">HOME </span> <span class="c-arrow c-toggler"></span></a>
                                </li>
                                <li class=" c-menu-type-classic">
                                    <a href="javascript:;" class="c-link dropdown-toggle "><span class="font_size_menu"> ABOUT CENTER </span> <span class="c-arrow c-toggler"></span></a>
                                    <ul class="dropdown-menu c-menu-type-classic c-pull-left">
                                        <li class="dropdown-submenu ">
                                        <a href="<?php echo base_url(); ?>dhamma-punna" target="_blank" ><span class="font_size_submenu" >Dhamma Punna&nbsp;(Pune City) </span> <span class="c-arrow c-toggler"></span></a>
                                        </li>
                                            <li class="dropdown-submenu">
                                        <a href="<?php echo base_url(); ?>dhamma-ananda" target="_blank"><span class="font_size_submenu"> Dhamma Ananda&nbsp;(Markal) </span><span class="c-arrow c-toggler"></span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" c-menu-type-classic"onclick="makeActiveElement('index2')" id="index2">
                                    <a href="javascript:;" class="c-link dropdown-toggle"><span class="font_size_menu"> Apply for Course</span><span class="c-arrow c-toggler"></span></a>
                                    <ul class="dropdown-menu c-menu-type-classic c-pull-left">
                                        <li class="dropdown-submenu">
                                        <a href="<?php echo base_url(); ?>apply-for-ten-days-courses"><span class="font_size_submenu">Apply for 10 day course </span><span class="c-arrow c-toggler"></span></a>
                                        </li>
                                        <li class="dropdown-submenu ">
                                        <a href="<?php echo base_url(); ?>code-of-discipline"><span class="font_size_submenu">Code of Discipline Timetable</span><span class="c-arrow c-toggler"></span></a>
                                        </li>
                                        <li class="dropdown-submenu">
                                        <a href="<?php echo base_url(); ?>what-to-bring-to-center"><span class="font_size_submenu">What To Bring To Center </span><span class="c-arrow c-toggler"></span></a>
                                        </li>
                                        <li class="dropdown-submenu">
                                        <a href="<?php echo base_url(); ?>questions-answers-vipassana"><span class="font_size_submenu"> Frequently Asked Questions</span><span class="c-arrow c-toggler"></span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" c-menu-type-classic"onclick="makeActiveElement('index3')" id="index3">
                                    <a href="<?php echo base_url(); ?>donation-page" class="c-link dropdown-toggle"><span class="font_size_menu">Donation </span> <span class="c-arrow c-toggler"></span></a>
                                </li>
                                <li class=" c-menu-type-classic"onclick="makeActiveElement('index4')" id="index4">
                                    <a href="javascript:;" class="c-link dropdown-toggle"><span class="font_size_menu">Children & Teenager </span><span class="c-arrow c-toggler"></span></a>
                                    <ul class="dropdown-menu c-menu-type-classic c-pull-left">
                                        <li class="dropdown-submenu ">
                                        <a href="<?php echo base_url(); ?>children-courses"><span class="font_size_submenu">Children Courses </span><span class="c-arrow c-toggler"></span></a>
                                        </li>
                                            <li class="dropdown-submenu">
                                        <a href="<?php echo base_url(); ?>teenager-courses"><span class="font_size_submenu"> Teenager Courses</span><span class="c-arrow c-toggler"></span></a>
                                        </li>
                                        <li class="dropdown-submenu">
                                        <a href="<?php echo base_url(); ?>hearing-speech-impaired-children-courses"><span class="font_size_submenu">Hearing Speech Impaired Children Courses </span><span class="c-arrow c-toggler"></span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" c-menu-type-classic"onclick="makeActiveElement('index5')" id="index5">
                                    <a href="javascript:;" class="c-link dropdown-toggle"> <span class="font_size_menu"> Mitra Upakram</span><span class="c-arrow c-toggler"></span></a>
                                    <ul class="dropdown-menu c-menu-type-classic c-pull-left">
                                        <li class="dropdown-submenu">
                                        <a href="http://www.mitraupakram.net/" target="_blank"><span class="font_size_submenu">about MITRA Upakram </span> <span class="c-arrow c-toggler"></span></a>
                                        </li>
                                        <li class="dropdown-submenu">
                                        <a href="<?php echo base_url(); ?>mitra-school-seva-registration"> <span class="font_size_submenu"> MITRA School Seva Registration</span><span class="c-arrow c-toggler"></span></a>
                                        </li>
                                        <li class="dropdown-submenu">
                                        <a href="<?php echo base_url(); ?>mitra-pune-activities"><span class="font_size_submenu"> Mitra Pune Activities</span><span class="c-arrow c-toggler"></span></a>
                                        </li>
                                    </ul>
                                </li>
                                 <li class=" c-menu-type-classic"onclick="makeActiveElement('index6')" id="index6">
                                    <a href="javascript:;" class="c-link dropdown-toggle"> <span class="font_size_menu"> Gallery</span><span class="c-arrow c-toggler"></span></a>
                                    <ul class="dropdown-menu c-menu-type-classic c-pull-left">
                                        <li class="dropdown-submenu">
                                        <a href="<?php echo base_url(); ?>dhamma-punna-gallery"><span class="font_size_submenu">Dhamma Punna Gallery</span> <span class="c-arrow c-toggler"></span></a>
                                        </li>
                                        <li class="dropdown-submenu">
                                        <a href="<?php echo base_url(); ?>dhamma-ananda-gallery"> <span class="font_size_submenu">Dhamma Ananada Gallery</span><span class="c-arrow c-toggler"></span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" c-menu-type-classic"onclick="makeActiveElement('index7')" id="index7">
                                    <a href="javascript:;" class="c-link dropdown-toggle"> <span class="font_size_menu">Old Students</span><span class="c-arrow c-toggler"></span></a>
                                    <ul class="dropdown-menu c-menu-type-classic c-pull-left">
                                        <li class="dropdown-submenu">
                                            <a class="c-link dropdown-toggle"><span class="font_size_submenu">My Account</span> <span class="c-arrow c-toggler"></span></a>
                                            <ul class="dropdown-menu c-menu-type-classic c-pull-left">
                                                <?php
                                                $check_user_id=$this->session->userdata('user_id');
                                                if ($check_user_id) {?>
                                                    <li class="dropdown-submenu">
                                                        <a href="<?php echo base_url();?>change-password"><span class="font_size_submenu">Change Password</span> <span class="c-arrow c-toggler"></span></a>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a href="<?php echo base_url(); ?>logout-site">
                                                         Log Out </a>  
                                                    </li>
                                                <?php
                                                }else{ ?>
                                                    <li class="dropdown-submenu">
                                                    <a style="cursor: pointer;" ><span class="font_size_submenu" data-toggle="modal" data-target="#myModal20">Log In</span> <span class="c-arrow c-toggler"></span></a>
                                                    </li>
                                                     <li class="dropdown-submenu">
                                                        <a href="<?php echo base_url();?>forgot-password"><span class="font_size_submenu">Forgot Password</span> <span class="c-arrow c-toggler"></span></a>
                                                    </li>
                                                <?php }
                                                ?>

                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                        <a href="<?php echo base_url(); ?>group-sitting-in-pune-area"><span class="font_size_submenu">Group Sitting </span> <span class="c-arrow c-toggler"></span></a>
                                        </li>
                                        <li class="dropdown-submenu">
                                        <a href="<?php echo base_url(); ?>one-day-vipassana-courses"> <span class="font_size_submenu">One Day</span><span class="c-arrow c-toggler"></span></a>
                                        </li>
                                         <li class="dropdown-submenu">
                                        <a href="<?php echo base_url(); ?>seva"> <span class="font_size_submenu">Seva</span><span class="c-arrow c-toggler"></span></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>  
                </div>
            </div>    
        </header> 
        <div class="container">
            <!-- Trigger the modal with a button -->
            <!-- Modal -->
            <div class="modal fade bs-example-modal-sm" id="myModal20" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content c-square">
                        <section>
                            <div class="container" style="padding-top:0px;">
                                <div class="c-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row" data-auto-height="true">
                                                <div class="col-md-4" style="padding-left: 0px!important;">
                                                    <div class="c-content-media-1 " >
                                                        <form class="login-form" action="chk_login" id="login" method="post">
                                                             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                            <div class="c-content-title-3 c-title-md " style="border:none; padding-left: 0px;">
                                                                <h3 class="c-theme-font c-font-uppercase c-font-bold">Login</h3>
                                                            </div>
                                                            <div class="alert alert-danger alert-wrong-user" style="display:none;">
                                                            <span>Please enter the appropriate fields.</span>
                                                            </div> 
                                                            <div class="alert alert-success" style="display:none;">
                                                            <span>Please wait, checking login...</span>
                                                            </div>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="form-group col-md-12 ">
                                                                <label class="control-label visible-ie8 visible-ie9"  >Username</label>
                                                                <input  placeholder="Username" class="form-control c-theme  placeholder-no-fix " id="name_focus" name="username" type="text" >
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-md-12">
                                                                <label class="control-label visible-ie8 visible-ie9">Password</label>
                                                                <input autofocus   placeholder="Password" class="form-control c-theme  placeholder-no-fix" name="password" type="password">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                     <div class="checkbox pull-left"style="margin-top:0px;">
                                                                     <a class="text-theme-colored font-weight-600 f-size" href="forgot-password">Forgot Your Password?</a>
                                                                </div>
                                                            </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-md-9 pull-left mt-10">
                                                                    <button type="text" class="btn btn-success btn-xs">
                                                                        <a style="color: white;" href="new-registration-form">Registration</a>
                                                                    </button>
                                                                </div>
                                                                <input type="hidden" name="role_id" value="1">
                                                                <input type="hidden" name="user_id" value="1">
                                                                <div class="form-group form-actions  col-md-3 pull-right mt-10" style="">
                                                                    <button type="submit" class="btn btn-primary pull-right btn-xs chk_login">
                                                                         Login <i class="m-icon-swapright m-icon-white"></i>
                                                                    </button>  
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
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

             
    