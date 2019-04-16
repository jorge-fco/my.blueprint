<ul role="tags">
  <?php foreach ($page->categories()->split(',') as $cat): ?>
    <li>
      <a href="#" title="<?php echo $cat;  ?>" class="js" role="tag">
        <?php echo $cat;  ?>
      </a>
    </li>
  <?php endforeach ?>
</ul>


<ul role="filters">
  <?php foreach ($page->categories()->split(',') as $filter): ?>
    <li>
      <a href="#<?= str::slug($filter); ?>" title="<?php echo $filter;  ?>" class="js" role="tag">
        <?php echo $filter;  ?>
      </a>
    </li>
  <?php endforeach ?>
</ul>
