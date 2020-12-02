<?php defined('BASEPATH') OR exit('No direct script access allowed');

// --------- API ROUTES -----------

$route['(?i)slider-type']="slider-type/slider_type_rest/slider_type";
$route['(?i)hide-slider-type']="slider-type/slider_type_rest/hide_slider_type";
$route['(?i)restore-slider-type']="slider-type/slider_type_rest/restore_slider_type";
$route['(?i)delete-slider-type/(:any)']="slider-type/slider_type_rest/delete_slider_type/$1";
$route['(?i)get-slider-type']="slider-type/slider_type_rest/get_slider_type";