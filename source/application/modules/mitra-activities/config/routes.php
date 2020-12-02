<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// $route['(?i)add-mitra-activities'] ='mitra-activities/mitra-activities_web/add_mitra-activities';

$route['(?i)mitra-activities']="mitra-activities/mitra_activities_rest/mitra_activities";
$route['(?i)hide-mitra-activities']="mitra-activities/mitra_activities_rest/hide_mitra_activities";
$route['(?i)restore-mitra-activities']="mitra-activities/mitra_activities_rest/restore_mitra_activities";
$route['(?i)delete-mitra-activities/(:any)']="mitra-activities/mitra_activities_rest/delete_mitra_activities/$1";


$route['(?i)add-mitra-activities']='mitra-activities/mitra_activities_web/add_mitra_activities';
$route['(?i)add-mitra-activities/(:any)']='mitra-activities/mitra_activities_web/add_mitra_activities/$1';
$route['(?i)mitra_pune_activities']='mitra-activities/mitra_activities_web/mitra_activities_list';
$route['(?i)upload_mitra_activities_image'] ='mitra-activities/mitra_activities_web/upload_mitra_activities_image';