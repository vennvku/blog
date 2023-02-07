<?php
require_once('controllers/base_controller.php');
require_once('models/post.php');

class AdminController extends BaseController
{
  function __construct()
  {
    $this->folder = 'admin';
  }

  public function index()
  {
    $posts = Post::all();
    $data = array('posts' => $posts);
    $this->render_admin('index', $data);
  }

  public function updatePost()
  {
    $post = Post::find($_GET['id']);
    $data = array('post' => $post);
    $this->render_admin('update', $data);
  }

  public function actionUpdatePost()
  {

    $post = Post::updatePost($_POST['id'], $_POST["title"], $_POST["content"]);

    return header('Location: /admin');
  }

  public function deletePost()
  {
    $post = Post::deletePost($_GET['id']);
    return header('Location: /admin');
  }

  public function insertPost()
  {
    $this->render_admin('insert');
  }

  public function actionInsertPost()
  {
    $post = Post::insertPost($_POST['title'], $_POST['content']);
    return header('Location: /admin');
  }

  

}
