<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['(?i)seva-registration']="seva_registration/seva_registration_rest/seva_registration";
$route['(?i)hide-seva-registration']="seva_registration/seva_registration_rest/hide_seva_registration";
$route['(?i)restore-seva-registration']="seva_registration/seva_registration_rest/restore_seva_registration";
$route['(?i)delete-seva-registration/(:any)']="seva_registration/seva_registration_rest/delete_seva_registration/$1";
   

$route['(?i)seva-registered-form']='seva_registration/seva_registration_web/seva_registration_list';
$route['(?i)add-seva-registration/(:any)']='seva_registration/seva_registration_web/add_seva_registration/$1';
$route['(?i)add-seva-registration']='seva_registration/seva_registration_web/add_seva_registration';

$route['(?i)seva-registration-viewform/(:any)']='seva_registration/seva_registration_web/seva_registration_viewform/$1';

