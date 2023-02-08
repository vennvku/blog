<?php
class Post
{
  public $id;
  public $title;
  public $slug;
  public $content;
  public $image;
  public $view;
  public $status;
  public $createAt;

  function __construct($id, $title, $slug, $content, $image, $view, $status, $createAt)
  {
    $this->id = $id;
    $this->title = $title;
    $this->slug = $slug;
    $this->content = $content;
    $this->image = $image;
    $this->view = $view;
    $this->status = $status;
    $this->createAt = $createAt;
  }

  static function all()
  {
    $list = [];
    $db = DB::getInstance();
    $req = $db->query('SELECT * FROM posts');

    foreach ($req->fetchAll() as $item) {
      $list[] = new Post($item['id'], $item['title'], $item['slug'], $item['content'], $item['image'], $item['view'], $item['status'], $item['createAt']);
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
      return new Post($item['id'], $item['title'], $item['slug'], $item['content'], $item['image'], $item['view'], $item['status'], $item['createAt']);
    }
    return null;
  }

  static function updatePost($id, $title, $content, $fileName)
  {
    $db = DB::getInstance();
    $req = $db->prepare("UPDATE posts SET title = '".$title."', content = '".$content."', image = '".$fileName."' WHERE id = '".$id."'");
    $req->execute();

    return "Successfull";
  }

  static function updatePostNoImage($id, $title, $content)
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

  static function insertPost($title, $content, $fileName, $timestamp)
  {

    $db = DB::getInstance();
    $req = $db->prepare("INSERT INTO posts (title, content, image, view, status, createAt) 
                          VALUES ('".$title."', '".$content."', '".$fileName."', 0, 1, '".$timestamp."') ");
    $req->execute();

    return "Successfull";
  }

  static function showPost($id)
  {
    $db = DB::getInstance();
    $req = $db->prepare("UPDATE posts SET status = 1 WHERE id = '".$id."'");
    $req->execute();

    return "Successfull";
  }

  static function hidePost($id)
  {
    $db = DB::getInstance();
    $req = $db->prepare("UPDATE posts SET status = 0 WHERE id = '".$id."'");
    $req->execute();

    return "Successfull";
  }


}
