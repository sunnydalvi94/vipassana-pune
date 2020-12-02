<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['(?i)personal-details']="personal_details/personal_details_rest/personal_details";
$route['(?i)hide-personal-details']="personal_details/personal_details_rest/hide_personal_details";
$route['(?i)restore-personal-details']="personal_details/personal_details_rest/restore_personal_details";
$route['(?i)delete-personal-details/(:any)']="personal_details/personal_details_rest/delete_personal_details/$1";
