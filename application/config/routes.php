<?php
defined('BASEPATH') OR exit('No direct script access allowed');



// for dashboard page

$route['default_controller'] = 'welcome';
$route['home'] = 'welcome/home';
$route['register'] = 'welcome/register';
// $route['login'] = 'welcome/login';

// for authorization

$route['authorization/register'] = 'authorization/login';
// $route['authorization/logout'] = 'authorization/logout';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
