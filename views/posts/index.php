

<div class="posts">
  <?php foreach ($posts as $post) { ?>
  <a href="index.php?controller=posts&action=showPost&id=<?=$post->id ?>">
    <div class="post">
      <h4><?= $post->title ?></h4>
      <h4><?= $post->view ?></h4>
      <img src="/assets/images/<?=$post->image ?>" class="logo" />
      <p></p>
    </div>
  </a>
  <?php } ?>
</div>

<div class="container">
  <div class="row">
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Post title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the
                  card's content.
                </p>
                <a href="#!" class="btn btn-primary">Read</a>
              </div>
            </div>
          </div>
  </div>
</div>