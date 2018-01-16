<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['profiler'] = "Profiler_controller/index";
$route['profiler/disable'] = "Profiler_controller/disable";

$route['about'] = 'about/index';
$route['about/services'] = 'about/services';
$route['about/position/(:any)'] = 'about/position/$1';

$route['admin'] = 'admin/index';
$route['admin/pages'] = 'admin/pages';
$route['admin/pages/create_service'] = 'admin/create_services';
$route['admin/pages/create_position'] = 'admin/create_position';
$route['admin/pages/edit/(:any)'] = 'admin/edit_position/$1';
$route['admin/view_content'] = 'admin/view_cat_post';
$route['admin/update'] = 'admin/update';
$route['admin/(:any)'] = 'admin/user/$1';

$route['posts/index'] = 'posts/index';
$route['posts/create'] = 'posts/create';
$route['posts/update'] = 'posts/update';
$route['posts/(:any)'] = 'posts/view/$1';
$route['posts'] = 'posts/index';

$route['default_controller'] = 'pages/view';

$route['categories'] = 'categories/index';
$route['categories/create'] = 'categories/create';
$route['categories/posts/(:any)'] = 'categories/posts/$1';

$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
