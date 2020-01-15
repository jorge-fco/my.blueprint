<!--VIDEO-->
<div class="post__video">
	<!--Tag VIDEO-->
	<?php if ($video = $page->myvideo()->toFile()): ?>
		<video id="video" data-video-src="<?= $video->url(); ?>" data-video-type="<?= $video->type(); ?>/<?= $video->extension(); ?>">
		</video>
	<?php endif ?>
	<!--Tag VIDEO-->

	<!--BG-->
	<?php if ($poster = $page->poster()->toFile()): ?>
	<div class="post__video__poster bg-img js-video-poster" role="poster">
		<div class="post__video__filter js-video-filter" role="filter"></div>
		<img itemprop="thumbnail" data-src="<?= $poster->url(); ?>" alt="<?= $page->title()->html(); ?> : <?= $site->title()->html(); ?>" class="lazyload">
	</div>
	<?php endif ?>
	<!--BG-->
</div>
<!--VIDEO-->
