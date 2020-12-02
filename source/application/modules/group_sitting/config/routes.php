<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['group-sitting'] = 'group_sitting/Group_sitting_web/group_sitting_list';
$route['add-group-sitting/(:any)'] = 'group_sitting/Group_sitting_web/add_group_sitting/$1';
$route['add-group-sitting'] = 'group_sitting/Group_sitting_web/add_group_sitting';



$route['upload_group_sitting_image']="group_sitting/Group_sitting_web/upload_group_sitting_image";



$route['(?i)group_sitting']="group_sitting/group_sitting_rest/group_sitting";
$route['(?i)hide-group-sitting']="group_sitting/group_sitting_rest/hide_group_sitting";
$route['(?i)restore-group-sitting']="group_sitting/group_sitting_rest/restore_group_sitting";
$route['(?i)delete-group-sitting/(:any)']="group_sitting/group_sitting_rest/delete_group_sitting/$1";




