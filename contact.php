Email
<?= page('contacto')->email()->html() ?>

Telephone
<?= page('contacto')->telephone()->html() ?>

Phone
<?= page('contacto')->phone()->html() ?>

Whatsapp
<?= page('contacto')->whatsapp()->html() ?>

<?php if (page('contacto')->twitter()): ?>
  <li>
    <a href="<?= page('contacto')->twitter() ?>" title="Twitter" target="_blank">
      <?php snippet('icons/twitter') ?>
    </a>
  </li>
<?php endif ?>

