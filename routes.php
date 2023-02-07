<?php
$controllers = array(
  'pages' => ['home', 'error'],
  'posts' => ['index', 'showPost'],
  'admin' => ['index', 'updatePost', 'actionUpdatePost', 'deletePost', 'insertPost', 'actionInsertPost'],
); 

//Phân tích URL để xác định truy vấn
// $query = parse_url($current_url, PHP_URL_PATH);

// if($query === '/posts') {
//   echo "123";
//   $controller = 'posts';
//   $action = 'index';
// }

// $controller = 'posts';
//   $action = 'index';

// echo $query;


if (!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])) {
  $controller = 'pages';
  $action = 'error';
}

include_once('controllers/' . $controller . '_controller.php');
$klass = str_replace('_', '', ucwords($controller, '_')) . 'Controller';
$controller = new $klass;
$controller->$action();

echo "1asdsad".$controller;
