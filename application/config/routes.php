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
$route['default_controller'] = 'Login';
$route['login'] = 'Login/index';
$route['logout'] = 'Auth/logout';
$route['superadmin/home'] = "superadmin/home";
$route['admin/home'] = "admin/home/index";
$route['user/home'] = "user/home/index";
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
// base_url('');
// $route['superadmin/admin/edit_admin/(:num)'] = "superadmin/admin/editPage/$1";
// $route['superadmin/admin/delete_admin/(:num)'] = "superadmin/admin/editPage/$1";
// $route['superadmin/pelamar/hapus_pelamar/(:num)'] = "superadmin/pelamar/delete_to_history/$1";
// $route['superadmin/pelamar/edit_pelamar/(:num)'] = "superadmin/pelamar/editPage/$1";
// $route['superadmin/pelamar/delete_history/(:num)'] = "superadmin/pelamar/delete_history/$1";
// $route['superadmin/pelamar/hapusmulti_history'] = "superadmin/pelamar/hapusmulti_history";
// $route['superadmin/pelamar/hapusmulti_pelamar'] = "superadmin/pelamar/delete_multi_to_history";
// $route['superadmin/data_kriteria/edit_kriteria/(:num)'] = "superadmin/data_kriteria/editPage/$1";


$route['admin/pelamar/hapusmulti_history'] = "admin/pelamar/hapusmulti_history";
$route['admin/pelamar/hapusmulti_pelamar'] = "admin/pelamar/delete_multi_to_history";
$route['admin/admin/delete_admin/(:num)'] = "admin/admin/delete_admin/$1";
$route['admin/admin/edit_admin/(:num)'] = "admin/admin/editPage/$1";
$route['admin/pelamar/delete_history/(:num)'] = "admin/pelamar/delete_history/$1";
$route['admin/pelamar/hapus_pelamar/(:num)'] = "admin/pelamar/delete_to_history/$1";
$route['admin/pelamar/edit_pelamar/(:num)'] = "admin/pelamar/editPage/$1";
$route['admin/pelamar/(:num)'] = "admin/pelamar/editPage/$1";
$route['admin/data_kriteria/(:num)'] = "admin/data_kriteria/editPage/$1";
$route['superadmin/data_pelamar/(:num)'] = "superadmin/data_pelamar/editPage/$1";
$route['admin/data_kriteria/edit_kriteria/(:num)'] = "admin/data_kriteria/editPage/$1";



$route['admin/user/delete_user/(:num)'] = "admin/user/delete_user/$1";
$route['admin/kependudukan/hapus_kependudukan/(:num)'] = "admin/kependudukan/hapus_kependudukan/$1";
$route['admin/kependudukan/hapus_kep_umur/(:num)'] = "admin/kependudukan/hapus_kep_umur/$1";
$route['admin/kependudukan/hapus_mutasi/(:num)'] = "admin/kependudukan/hapus_mutasi/$1";



$route['admin/admin_wilayah/edit_wilayah/(:num)'] = "admin/admin_wilayah/edit_wilayah/$1";