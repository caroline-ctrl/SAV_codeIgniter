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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['admin/create'] = 'admin/inscription';
$route['admin/connect'] = 'admin/connection';
$route['admin/deconnection'] = 'admin/deconnection';

$route['commande/(:any)'] = 'commande/view_commande_id/$1';
$route['commande'] = 'commande/view_commande';

$route['clients/produitClient/(:any)'] = 'client/get_product_client/$1';
$route['clients/commandesClient/(:any)'] = 'client/get_commande_client/$1';
$route['clients/viewInactif'] = 'client/view_client_inactif';
$route['clients/viewActif'] = 'client/view_client_actif';
$route['clients/create'] = 'client/create';
$route['clients/edit/(:any)'] = 'client/edit/$1';
$route['clients/delete/(:any)'] = 'client/delete/$1';

$route['article'] = 'article/view_article';
$route['articles/(:any)'] = 'article/view_article/$1';
$route['article/edit/(:any)'] = 'article/edit/$1';
$route['article/create'] = 'article/create';

$route['accueil'] = 'page/view';

$route['default_controller'] = 'admin/accueil';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
