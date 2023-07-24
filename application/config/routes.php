<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Post';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
// $route['post/create'] = 'post/create';
// $route['post/edit/(:num)'] = 'post/edit/$1';
// $route['post/delete/(:num)'] = 'post/delete/$1';

$route['post'] = "post/index";
$route['post/create'] = "post/create";
$route['post/store']['post'] = "post/store";
$route['post/edit/(:num)'] = "post/edit/$1";
$route['post/update/(:num)']['put'] = "post/update/$1";
$route['post/delete/(:num)']['delete'] = "post/delete/$1";

// // Route for creating a new post
// $route['post/create'] = 'PostController/create';
// // Route for editing a post with a specific ID
// $route['post/edit/(:num)'] = 'PostController/edit/$1';
// // Route for deleting a post with a specific ID
// $route['post/delete/(:num)'] = 'PostController/delete/$1';

$route['task'] = "task/index";
$route['task/create'] = "task/create";
$route['task/store']['post'] = "task/store";
$route['task/edit/(:num)'] = "task/edit/$1";
$route['task/update/(:num)']['put'] = "task/update/$1";
$route['task/delete/(:num)']['delete'] = "task/delete/$1";

$route['task/add/(:num)'] = 'task/add/$1';
$route['task/update/(:num)'] = 'task/update/$1';
$route['task/delete/(:num)'] = 'task/delete/$1';
