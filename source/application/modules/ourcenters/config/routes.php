<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['(?i)ourcenters']="ourcenters/ourcenters_rest/ourcenters";
$route['(?i)hide-ourcenters']="ourcenters/ourcenters_rest/hide_ourcenters";
$route['(?i)restore-ourcenters']="ourcenters/ourcenters_rest/restore_ourcenters";
$route['(?i)delete-ourcenters/(:any)']="ourcenters/ourcenters_rest/delete_ourcenters/$1";


$route['(?i)add-ourcenters']='ourcenters/ourcenters_web/add_our_centers';
$route['(?i)add-ourcenters/(:any)']='ourcenters/ourcenters_web/add_our_centers/$1';
$route['(?i)our-centers']='ourcenters/ourcenters_web/our_centers_list';
$route['(?i)upload_our_centers_image'] ='ourcenters/ourcenters_web/upload_our_centers_image';