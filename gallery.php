<?php foreach($page->galeria()->yaml() as $image): ?>
  <?php if($img = $page->image($image)): ?>
    <div data-img="<?= $img->url() ?>"></div>
  <?php endif ?>
<?php endforeach ?>
