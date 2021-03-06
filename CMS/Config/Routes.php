<?php
$router->route('/','HomeController@index');
$router->route('/page/:any','PageController@page');
$router->route('/post/:num','PostController@post');
$router->route('/search','SearchController@redirect');
$router->route('/search/:any','SearchController@search');
$router->route('/comment/add','CommentController@add');
$router->route('/category/:num','SearchController@category');
$router->execute($_SERVER['REQUEST_URI']);
exit;