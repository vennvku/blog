<?php
require_once('connection.php');

$url = $_SERVER['REQUEST_URI'];
$url = explode('/', $url);

if(isset($url[1]) && $url[1] != null) {
  $controller = $url[1];
  if(isset($url[2]) && $url[1] != null) {
    $action = $url[2];
  } else {
    $action = 'index';
  }
  if(isset($url[3]) && $url[3] != null) {
    $_GET['id'] = $url[3];
  }
} else {
  $controller = 'pages';
  $action = 'home';
}

require_once('routes.php');

