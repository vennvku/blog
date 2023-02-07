<?php
$controllers = array(
  'pages' => ['home', 'error'],
  'posts' => ['index', 'showPost'],
  'admin' => ['index', 'updatePost', 'actionUpdatePost', 'deletePost', 'insertPost', 'actionInsertPost'],
); 

if (!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])) {
  $controller = 'pages';
  $action = 'error';
}

include_once('controllers/' . $controller . '_controller.php');
$klass = str_replace('_', '', ucwords($controller, '_')) . 'Controller';
$controller = new $klass;
$controller->$action();

echo "1asdsad".$controller;
