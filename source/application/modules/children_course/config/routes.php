<?php defined('BASEPATH') OR exit('No direct script access allowed');

// --------- API ROUTES -----------

$route['(?i)children-course']="children_course/children_course_rest/children_course";
$route['(?i)hide-children-course']="children_course/children_course_rest/hide_children_course";
$route['(?i)restore-children-course']="children_course/children_course_rest/restore_children_course";
$route['(?i)delete-children-course/(:any)']="children_course/children_course_rest/delete_children_course/$1";



$route['(?i)add-children-course']='children_course/children_course_web/add_children_course';
$route['(?i)add-children-course/(:any)']='children_course/children_course_web/add_children_course/$1';
$route['(?i)children_courses']='children_course/children_course_web/children_course_list';