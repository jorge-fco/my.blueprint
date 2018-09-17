<!--BASIC-->
<?php foreach($page->galeria()->yaml() as $image): ?>
	<?php if($img = $page->image($image)): ?>
		<div>
			<img src="<?= $img->url() ?>" alt="<?= $site->title()->html(); ?>">
		</div>
	<?php endif ?>
<?php endforeach ?>
<!--BASIC-->

<!--CAROUSEL-->
<div class="carousel" role="carousel">
<?php foreach($page->galeria()->yaml() as $image): ?>
	<?php if($img = $page->image($image)): ?>
		<div class="carousel__item">
			<img src="<?= $img->url() ?>" alt="<?= $site->title()->html(); ?>">
		</div>
	<?php endif ?>
<?php endforeach ?>
</div>
<!--CAROUSEL-->
