<ul role="tags">
<?php foreach ($page->categories()->split(',') as $cat): ?>
	<li>
	  <a href="#" title="<?php echo $cat;  ?>" class="js" role="tag">
		  <?php echo $cat;  ?>
		</a>
  </li>
<?php endforeach ?>
</ul>
