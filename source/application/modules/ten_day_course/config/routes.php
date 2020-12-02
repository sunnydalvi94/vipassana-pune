<?php defined('BASEPATH') OR exit('No direct script access allowed');

//----------------------------Duration Set---------------------
/*$route['(?i)duration-set']="syllabus_planner/syllabus_planner_rest/duration_set";*/
$route['(?i)ten-day-course']="ten_day_course/ten_day_course_rest/ten_day_course_registration";
$route['(?i)hide-ten-day-course']="ten_day_course/ten_day_course_rest/hide_ten_day_course";
$route['(?i)restore-ten-day-course']="ten_day_course/ten_day_course_rest/restore_ten_day_course";
$route['(?i)delete-ten-day-course/(:any)']="ten_day_course/ten_day_course_rest/permanent_delete_ten_day_course/$1";


$route['(?i)add-ten-day-course']='ten_day_course/ten_day_course_web/add_ten_day_course';
$route['(?i)add-ten-day-course/(:any)']='ten_day_course/ten_day_course_web/add_ten_day_course/$1';
$route['(?i)apply-for-ten-day-course']='ten_day_course/ten_day_course_web/ten_day_course_list';
$route['(?i)upload_ten_day_course_image'] ='ten_day_course/ten_day_course_web/upload_ten_day_course_image';















