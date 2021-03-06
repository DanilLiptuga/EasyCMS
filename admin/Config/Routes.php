<?php
$router->route('/admin/','DashboardController');
$router->route('/admin/login','LoginController');
$router->route('/admin/logout','LogoutController');
$router->route('/admin/pages','PageController');
$router->route('/admin/pages/add','PageController@create');
$router->route('/admin/pages/create','PageController@add');
$router->route('/admin/pages/edit/:num','PageController@edit');
$router->route('/admin/pages/update/:num','PageController@update');
$router->route('/admin/pages/remove/:num','PageController@delete');
$router->route('/admin/posts','PostController');
$router->route('/admin/posts/add','PostController@create');
$router->route('/admin/posts/create','PostController@add');
$router->route('/admin/posts/edit/:num','PostController@edit');
$router->route('/admin/posts/update/:num','PostController@update');
$router->route('/admin/posts/remove/:num','PostController@delete');
$router->route('/admin/settings','SettingsController');
$router->route('/admin/settings/update','SettingsController@update');
$router->route('/admin/upload','UploadController');
$router->route('/admin/category/create','PostController@addCategory');
$router->execute($_SERVER['REQUEST_URI']);
