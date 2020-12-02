<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['(?i)add-donation'] ='donation/donation_web/add_donation';

$route['(?i)donation-form']="donation/donation_rest/donation";
$route['(?i)hide-donation']="donation/donation_rest/hide_donation";
$route['(?i)restore-donation']="donation/donation_rest/restore_donation";
$route['(?i)delete-donation/(:any)']="donation/donation_rest/delete_donation/$1";

$route['(?i)donation-with-login']="donation/donation_rest/donation_with_login";
$route['(?i)donation-status']="donation/donation_rest/donation_pending";


$route['(?i)donation']='donation/donation_web/donation_list';
$route['(?i)add-donation/(:any)'] ='donation/donation_web/add_donation/$1';
$route['(?i)add-donation'] ='donation/donation_web/add_donation';



$route['(?i)fetch-donation']="donation/donation_rest/fetch_donation";
$route['(?i)donation-viewform/(:any)']="donation/donation_web/donation_viewform/$1";

