

<div class="posts">
  <?php foreach ($posts as $post) { ?>
  <a href="index.php?controller=posts&action=showPost&id=<?=$post->id ?>">
    <div class="post">
      <h4><?= $post->title ?></h4>
      <p></p>
    </div>
  </a>
  <?php } ?>
</div>