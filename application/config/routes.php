<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$route['blog'] = 'blog';
$route['blog/(:any)'] = 'blog/view/$1';

$route['lembaga'] = 'lembaga';
$route['lembaga/(:any)'] = 'lembaga/view/$1';

$route['program'] = 'program';
$route['program/(:any)'] = 'program/view/$1';

$route['default_controller'] = 'welcome/view';
$route['(:any)'] = 'welcome/view/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
