<?php
require_once('controllers/base_controller.php');
require_once('models/post.php');

require_once('index.php');

class PostsController extends BaseController
{
  function __construct()
  {
    $this->folder = 'posts';
  }

  public function index()
  {
    $posts = Post::all();
    $data = array('posts' => $posts);
    $this->render('index', $data);
  }

  public function showPost() 
  {

    $post = Post::findPostUI($_GET['id']);
    $data = array('post' => $post);
    $this->render('show', $data);
  }

}
