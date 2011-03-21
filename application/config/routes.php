<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
| 	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['scaffolding_trigger'] = 'scaffolding';
|
| This route lets you set a "secret" word that will trigger the
| scaffolding feature for added security. Note: Scaffolding must be
| enabled in the controller in which you intend to use it.   The reserved 
| routes must come before any wildcard or regular expression routes.
|
*/
//The following names need to be protected in the CMS
//Shop, Calendar, contact us, login, Send a Postcard

$route['default_controller'] = "page/index/home";
//$route['page/:any'] = "page/index";
$route['Shop'] = "page/shop";
$route['Shop/(:any)'] = "page/$1";
$route['Shop/checkout'] = "page/checkout";
$route['Shop/empty_basket'] = "page/empty_basket";
$route['Shop/add_to_basket'] = "page/add_to_basket";
$route['Shop/basket'] = "page/add_to_basket";
$route['page/get_orders'] = "page/get_orders";
$route['page/availability/(:num)/(:num)'] = "page/availability/$1/$2";
$route['page/get_calendar_class'] = "page/get_calendar_class";
$mY = date('Y');
$mD = date('m');
$route['Calendar'] = "page/availability/$mY/$mD";
$route['Send-a-Postcard'] = "page/send_a_postcard";
$route['page/send_a_postcard'] = "page/send_a_postcard";
$route['galleries/(:any)'] = "page/galleries/$1";
$route['page/index/send_a_postcard'] = "page/send_a_postcard";
$route['contact_us'] = "page/contact_us";
$route['page/contact_us'] = "page/contact_us";
$route['login/(:any)'] = "login/$1";
$route['login'] = "login";
$route['site/twitter'] = "site/members_area/twitter";


$route['gallery_controller/(:any)'] = "gallery_controller/$1";


//$route['site/availability/(:any)'] = "Site/availability/$1";
//$route['site/availability/(:num)/(:num)'] = "Site/availability/$1/$2";

$route['site'] = "site/members_area/";
$route['site/(:any)'] = "site/$1";
$route['site/(:any)/(:any)'] = "site/$1/$2";
$route['site/(:any)/(:any)/(:any)'] = "site/$1/$2/$3";


$route['(:any)'] = "page/index/$1";
$route['scaffolding_trigger'] = "";
//$route['^(?!login).*'] = "page/$0";

/* End of file routes.php */
/* Location: ./system/application/config/routes.php */