<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// $route['(?i)add-teenager-course'] ='teenager-course/teenager_course_web/add_teenager_course';

$route['(?i)teenager-course']="teenager-course/teenager_course_rest/teenager_course";
$route['(?i)hide-teenager-course']="teenager-course/teenager_course_rest/hide_teenager_course";
$route['(?i)restore-teenager-course']="teenager-course/teenager_course_rest/restore_teenager_course";
$route['(?i)delete-teenager-course/(:any)']="teenager-course/teenager_course_rest/delete_teenager_course/$1";
   
 $route['(?i)add-teenager-course']='teenager-course/teenager_course_web/add_teenager_course';
$route['(?i)add-teenager-course/(:any)']='teenager-course/teenager_course_web/add_teenager_course/$1';
$route['(?i)teenager_courses']='teenager-course/teenager_course_web/teenager_course_list';