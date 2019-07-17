
<?php if ($archivo = $page->archivo()->toFile()): ?>
	<a href="<?= $archivo->url();  ?>" title="Descargar" role="button" download target="_blank">
	  download
  </a>
<?php endif ?>
