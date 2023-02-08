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

    if(isset($_FILES['fileImage'])){
      $errors= array();
      $file_name = $_FILES['fileImage']['name'];
      $file_size =$_FILES['fileImage']['size'];
      $file_tmp =$_FILES['fileImage']['tmp_name'];
      $file_type=$_FILES['fileImage']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['fileImage']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="Chỉ hỗ trợ tải lên JPEG hoặc PNG.";
      }
      
      if($file_size > 2097152){
         $errors[]='Kích thước tập tin phải nhỏ hơn hoặc bằng 2 MB';
      }

      if(empty($errors)==true){

        $uniqueId = uniqid();

        $file_name = $uniqueId."_".$file_name;

        $moved = move_uploaded_file($_FILES["fileImage"]["tmp_name"], "/var/www/blog/assets/images/".$file_name );

        if( $moved ) {
          echo "Successfully uploaded";         
        } else {
          echo "Not uploaded because of error #".$_FILES["fileImage"]["error"];
        }
         
      }else{
         print_r($errors);
         $file_name = NULL;
      }
   } 

   if ($file_name == NULL) {
    $post = Post::updatePostNoImage($_POST['id'], $_POST["title"], $_POST["content"]);
   } else {
     $post = Post::updatePost($_POST['id'], $_POST["title"], $_POST["content"], $file_name);
   }

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

    if(isset($_FILES['fileImage'])){
      $errors= array();
      $file_name = $_FILES['fileImage']['name'];
      $file_size =$_FILES['fileImage']['size'];
      $file_tmp =$_FILES['fileImage']['tmp_name'];
      $file_type=$_FILES['fileImage']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['fileImage']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="Chỉ hỗ trợ tải lên JPEG hoặc PNG.";
      }
      
      if($file_size > 2097152){
         $errors[]='Kích thước tập tin phải nhỏ hơn hoặc bằng 2 MB';
      }

      if(empty($errors)==true){

        $uniqueId = uniqid();

        $file_name = $uniqueId."_".$file_name;

        $moved = move_uploaded_file($_FILES["fileImage"]["tmp_name"], "/var/www/blog/assets/images/".$file_name );

        if( $moved ) {
          echo "Successfully uploaded";         
        } else {
          echo "Not uploaded because of error #".$_FILES["fileImage"]["error"];
        }
         
      }else{
         print_r($errors);
      }
   }

   $timestamp = strtotime(date("d-m-Y"));

    $post = Post::insertPost($_POST['title'], $_POST['content'], $file_name, $timestamp);
    return header('Location: /admin');
  }

  public function actionShowPost()
  {
    $post = Post::showPost($_GET['id']);
    return header('Location: /admin');
  }

  public function actionHidePost()
  {
    $post = Post::hidePost($_GET['id']);
    return header('Location: /admin');
  }

  

}
