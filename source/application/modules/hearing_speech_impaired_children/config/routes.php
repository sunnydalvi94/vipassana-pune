<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// $route['(?i)add-hearing_speech_impaired_children'] ='hearing_speech_impaired_children/hearing_speech_impaired_children_web/add_hearing_speech_impaired_children';

$route['(?i)hearing-speech-impaired-children']="hearing_speech_impaired_children/hearing_speech_impaired_children_rest/hearing_speech_impaired_children";
$route['(?i)hide-hearing-speech-impaired-children']="hearing_speech_impaired_children/hearing_speech_impaired_children_rest/hide_hearing_speech_impaired_children";
$route['(?i)restore-hearing-speech-impaired-children']="hearing_speech_impaired_children/hearing_speech_impaired_children_rest/restore_hearing_speech_impaired_children";
$route['(?i)delete-hearing-speech-impaired-children/(:any)']="hearing_speech_impaired_children/hearing_speech_impaired_children_rest/delete_hearing_speech_impaired_children/$1";


$route['(?i)add-hearing-speech-impaired-children']='hearing_speech_impaired_children/Hearing_speech_impaired_children_web/add_hearing_speech_impaired_children';
$route['(?i)add-hearing-speech-impaired-children/(:any)']='hearing_speech_impaired_children/Hearing_speech_impaired_children_web/add_hearing_speech_impaired_children/$1';
$route['(?i)hearing_speech_impaired_children_courses']='hearing_speech_impaired_children/Hearing_speech_impaired_children_web/hearing_speech_impaired_children_list';
$route['(?i)upload_hearing_speech_impaired_children_image'] ='hearing_speech_impaired_children/Hearing_speech_impaired_children_web/upload_hearing_speech_impaired_children_image';
