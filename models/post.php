<?php
class Post
{
  public $id;
  public $title;
  public $content;
  public $image;
  public $view;

  function __construct($id, $title, $content, $image, $view)
  {
    $this->id = $id;
    $this->title = $title;
    $this->content = $content;
    $this->image = $image;
    $this->view = $view;
  }

  static function all()
  {
    $list = [];
    $db = DB::getInstance();
    $req = $db->query('SELECT * FROM posts');

    foreach ($req->fetchAll() as $item) {
      $list[] = new Post($item['id'], $item['title'], $item['content'], $item['image'], $item['view']);
    }

    return $list;
  }

  static function find($id)
  {
    $db = DB::getInstance();
    $req = $db->prepare('SELECT * FROM posts WHERE id = :id');
    $req->execute(array('id' => $id));

    $item = $req->fetch();
    if (isset($item['id'])) {
      return new Post($item['id'], $item['title'], $item['content'], $item['image'], $item['view']);
    }
    return null;
  }

  static function updatePost($id, $title, $content)
  {

    $db = DB::getInstance();
    $req = $db->prepare("UPDATE posts SET title = '".$title."', content = '".$content."' WHERE id = '".$id."'");
    $req->execute();

    return "Successfull";
  }

  static function deletePost($id)
  {

    $db = DB::getInstance();
    $req = $db->prepare("DELETE FROM posts WHERE id = '".$id."'");
    $req->execute();

    return "Successfull";
  }

  static function insertPost($title, $content)
  {

    $db = DB::getInstance();
    $req = $db->prepare("INSERT INTO posts (title, content) VALUES ('".$title."', '".$content."') ");
    $req->execute();

    return "Successfull";
  }

}
