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
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['admin'] = 'admin/auth';
$route['admin/register'] = 'admin/auth/register';

$route['admin/carousel'] = 'admin/pages/carousel';
$route['admin/about'] = 'admin/pages/about/about';
$route['admin/study'] = 'admin/pages/about/study';
$route['admin/team'] = 'admin/pages/team';
$route['admin/gallery'] = 'admin/pages/gallery/gallery';
$route['admin/quotes'] = 'admin/pages/gallery/quotes';

$route['admin/ppdb/(:any)'] = 'admin/ppdb/detail/$1';
$route['admin/message/(:any)'] = 'admin/message/detail/$1';

$route['admin/edit_profile'] = 'admin/profile/edit_profile';
$route['admin/edit_carousel/(:any)'] = 'admin/pages/carousel/edit/$1';
$route['admin/edit_about/(:any)'] = 'admin/pages/about/about/edit/$1';
$route['admin/edit_study/(:any)'] = 'admin/pages/about/study/edit/$1';
$route['admin/edit_team/(:any)'] = 'admin/pages/team/edit/$1';
$route['admin/edit_gallery/(:any)'] = 'admin/pages/gallery/gallery/edit/$1';
$route['admin/edit_quotes/(:any)'] = 'admin/pages/gallery/quotes/edit/$1';

$route['admin/carousel/excel'] = 'admin/pages/carousel/excel';
$route['admin/carousel/pdf'] = 'admin/pages/carousel/pdf';
$route['admin/about/excel'] = 'admin/pages/about/about/excel';
$route['admin/about/pdf'] = 'admin/pages/about/about/pdf';
$route['admin/study/excel'] = 'admin/pages/about/study/excel';
$route['admin/study/pdf'] = 'admin/pages/about/study/pdf';
$route['admin/team/excel'] = 'admin/pages/team/excel';
$route['admin/team/pdf'] = 'admin/pages/team/pdf';
$route['admin/gallery/excel'] = 'admin/pages/gallery/gallery/excel';
$route['admin/gallery/pdf'] = 'admin/pages/gallery/gallery/pdf';
$route['admin/quotes/excel'] = 'admin/pages/gallery/quotes/excel';
$route['admin/quotes/pdf'] = 'admin/pages/gallery/quotes/pdf';