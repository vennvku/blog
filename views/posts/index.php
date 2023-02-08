<div class="container">
  	<div class="row">
		<?php foreach ($posts as $post) { ?>
			<?php if($post->status == 1) { ?>
				<div class="col-lg-4 col-md-12 mb-4">
					<div class="card">
						<div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
							<a href="/posts/showPost/<?=$post->slug ?>">
								<img src="/assets/images/<?=$post->image ?>" class="img-fluid" />
							</a>
							<div class="card-body">
								<h5 class="card-title"><?= $post->title ?></h5>
								<a href="/posts/showPost/<?=$post->slug ?>" class="btn btn-primary">Read</a>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		<?php } ?>
  	</div>
</div>