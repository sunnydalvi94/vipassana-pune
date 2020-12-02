<?php defined('BASEPATH') OR exit('No direct script access allowed');

// --------- API ROUTES -----------

$route['(?i)how-to-learn']="how-to-learn/how_to_learn_rest/how_to_learn";
$route['(?i)hide-how-to-learn']="how-to-learn/how_to_learn_rest/hide_how_to_learn";
$route['(?i)restore-how-to-learn']="how-to-learn/how_to_learn_rest/restore_how_to_learn";
$route['(?i)delete-how-to-learn/(:any)']="how-to-learn/how_to_learn_rest/delete_how_to_learn/$1";



$route['(?i)add-how-to-learn']='how-to-learn/how_to_learn_web/add_how_to_learn';
$route['(?i)add-how-to-learn/(:any)']='how-to-learn/how_to_learn_web/add_how_to_learn/$1';
$route['(?i)how-to-learn-vipassana']='how-to-learn/how_to_learn_web/how_to_learn_list';
// $route['(?i)upload_how_to_learn_image'] ='how-to-learn/how_to_learn_web/upload_how_to_learn_image';