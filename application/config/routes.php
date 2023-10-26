<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['student'] = 'Register/student';
$route['save'] = 'Register/save';








$route['signup'] = 'Login/SignupController/signup';

$route['submit'] = 'Login/SignupController/signupcheck';

$route['login'] = 'Login/LoginController/login';

$route['logincheck'] = 'Login/LoginController/logincheck';

$route['logout'] = 'Login/LoginController/logout';



$route['player/list'] = 'Todo/CricketController/list';

$route['player'] = 'Todo/CricketController/create';

$route['player/insert'] = 'Todo/CricketController/insertplayer';

$route['player/edit/(:num)'] = 'Todo/CricketController/editplayer/$1';

$route['player/update'] = 'Todo/CricketController/updateplayer';

$route['player/delete/(:num)'] = 'Todo/CricketController/deleteplayer/$1';



