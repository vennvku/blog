<div class="container">
  <div class="row">
  <?php foreach ($posts as $post) { ?>
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="/assets/images/<?=$post->image ?>" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title"><?= $post->title ?></h5>
                <!-- <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the
                  card's content.
                </p> -->
                <a href="/posts/showPost/<?=$post->id ?>" class="btn btn-primary">Read</a>
              </div>
            </div>
          </div>
          <?php } ?>
  </div>
</div>