<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['(?i)children-slider']="children_slider/slider_rest/slider";
$route['(?i)hide-children-slider']="children_slider/slider_rest/hide_slider";
$route['(?i)restore-children-slider']="children_slider/slider_rest/restore_slider";
$route['(?i)delete-children-slider/(:any)']="children_slider/slider_rest/delete_slider/$1";


$route['(?i)add-children-slider']='children_slider/children_slider_web/add_children_slider';
$route['(?i)add-children-slider/(:any)']='children_slider/children_slider_web/add_children_slider/$1';
$route['(?i)sliders']='children_slider/children_slider_web/children_slider_list';
$route['(?i)upload_children_slider_image'] ='children_slider/children_slider_web/upload_children_slider_image';


