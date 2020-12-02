<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['site'] ='site';
// $route['home-slider'] ='site/home_slider';
$route['menu-dhamma-punna']='site/menu_dhamma_punna';
$route['menu-dhamma-ananda']='site/menu_dhamma_ananda';
$route['header']='site/header';
$route['album-images/(:any)']='site/album_images/$1';
// $route['album-category']='site/album_category';
$route['dhamma-punna-gallery']='site/dhamma_punna_gallery';
$route['dhamma-ananda-gallery']='site/dhamma_ananda_gallery';
$route['mitra-pune-activities']='site/mitra_pune_activities';
$route['code-of-discipline']='site/code_of_discipline';
$route['questions-answers-vipassana']='site/questions_answers_vipassana';
$route['what-to-bring-to-center']='site/what_to_bring_to_center';
$route['apply-for-ten-days-courses']='site/apply_for_ten_days_courses';
$route['children-courses']='site/children_courses';
$route['teenager-courses']='site/teenager_courses';
$route['hearing-speech-impaired-children-courses']='site/hearing_speech_impaired_children_courses';
$route['dhamma-ananda']='site/dhamma_ananda';
$route['dhamma-punna']='site/dhamma_punna';
$route['seva']='site/seva_registration';
$route['mitra-school-seva-registration']='site/mitra_school_seva_registration';
$route['one-day-vipassana-courses']='site/one_day_vipassana_courses';
$route['group-sitting-in-pune-area']='site/group_sitting_in_pune_area';
$route['children-anapana']='site/children_anapana';
$route['rough-work']='site/rough_work';
$route['forgot-password']='site/forgot_password';
$route['donation-registration']='site/donation_registration';
$route['payment-successful']='site/payment_successful';
$route['payment-failed']='site/payment_failed';
$route['redirecting-page']='site/redirecting_page';

$route['donation-page']='site/donation';
$route['login-fetch-user-details']='site/login_fetch_user_details';
$route['new-registration-form']='site/new_registration_form';
$route['reset-password/(:any)']='site/reset_password/$1';
$route['change-password']='site/user_change_password';
$route['reset-password-page']='site/reset_password_page';



















