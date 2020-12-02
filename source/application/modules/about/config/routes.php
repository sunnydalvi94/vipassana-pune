<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['(?i)about']="about/about_rest/about";
$route['(?i)hide-about']="about/about_rest/hide_about";
$route['(?i)restore-about']="about/about_rest/restore_about";
$route['(?i)delete-about/(:any)']="about/about_rest/delete_about/$1";

$route['(?i)add-about']='about/about_web/add_about';
$route['(?i)add-about/(:any)']='about/about_web/add_about/$1';
$route['(?i)about-vipassana']='about/about_web/about_list';
$route['(?i)upload_about_image'] ='about/about_web/upload_about_image';