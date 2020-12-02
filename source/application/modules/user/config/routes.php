<?php defined('BASEPATH') OR exit('No direct script access allowed');

$route['add-user']='user/user_web/add_user';
$route['add-user/(:any)']='user/user_web/add_user/$1';
$route['user-list']='user/user_web/user_list';

   
$route['(?i)user-reg']="user/user_rest/user_reg";
$route['(?i)hide-user-reg']="user/user_rest/hide_user";
$route['(?i)restore-user-reg']="user/user_rest/restore_user";
$route['(?i)delete-user-reg/(:any)']="user/user_rest/permanent_delete_user/$1";

$route['(?i)change-user-password']="user/user_rest/change_user_password";

$route['add-change-password']='user/user_web/add_change_password';



$route['(?i)activation-link']="user/user_rest/activation_link";
$route['(?i)verify-activation-link']="user/user_rest/verify_activation_link";
// $route['(?i)verify-activation-link/(:any)']="user/user_rest/verify_activation_link/$1";
$route['(?i)reset-password']="user/user_rest/reset_password";
$route['(?i)forgot-user-password']="user/user_rest/forgot_user_password";

















