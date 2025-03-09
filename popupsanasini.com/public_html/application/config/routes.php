<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
|    example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|    https://codeigniter.com/user_guide/general/routing.html
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
$route['cp'] = 'home/panel';
$route['sitemap.xml'] = 'home/sitemap';
$route['booking'] = 'mail/index';
$route['contacting'] = 'mail/contact';
$route['contact'] = 'home/contact';
$route['checkout'] = 'home/checkout';
$route[BIOLINK_ROUTE] = 'home/biolink';
$route['set_lang/(:any)'] = 'home/set_language/$1';
$route['search/(:any)'] = 'home/search/$1';
$route['la/(:any)'] = 'home/index/$1';
$route[ROUTE_EVENT] = 'home/events';
$route[ROUTE_EVENT_VIEW.'(:any)'] = 'home/event_post/$1';
$route[ROUTE_PAGE.'(:any)'] = 'home/page/$1';
$route[ROUTE_PRODUCT.'(:any)'] = 'home/product_category/$1';
$route[ROUTE_PRODUCT_TAG.'(:any)'] = 'home/tag/$1';
$route[ROUTE_PRODUCT_VIEW.'(:any)'] = 'home/view/$1';
$route[ROUTE_BLOG.'(:any)'] = 'home/blog_category/$1';
$route[ROUTE_BLOG_TAG.'(:any)'] = 'home/blog_tag/$1';
$route[ROUTE_BLOG_VIEW.'(:any)'] = 'home/blog_post/$1';
$route[ROUTE_VIDEO.'(:any)'] = 'home/video_category/$1';
$route[ROUTE_VIDEO_TAG.'(:any)'] = 'home/video_tag/$1';
$route[ROUTE_VIDEO_VIEW.'(:any)'] = 'home/video_post/$1';
$route[ROUTE_GALLERY_VIEW.'(:any)'] = 'home/view_gallery/$1';
$route[ROUTE_GALLERY_TAG.'(:any)'] = 'home/gallery_tag/$1';
$route[ROUTE_GALLERY.'(:any)'] = 'home/gallery/$1';
$route['404_override'] = 'home/page_notfound';
$route['translate_uri_dashes'] = true;
