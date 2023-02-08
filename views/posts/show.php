<div class="posts">
  <h3><?= $post->title ?></h4>
  <small><?php echo date('d-m-Y', $post->createAt); ?></small>
  <p><?= $post->content ?></p>
</div>