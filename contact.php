Email
<?= page('contacto')->email()->html() ?>

Telephone
<?= page('contacto')->telephone()->html() ?>

Phone
<?= page('contacto')->phone()->html() ?>

Whatsapp
<?= page('contacto')->whatsapp()->html() ?>

Location
<?= page('contacto')->street()->html() ?>
<?= page('contacto')->colony()->html() ?>
<?= page('contacto')->cp()->html() ?>
<?= page('contacto')->city()->html() ?>
<?= page('contacto')->state()->html() ?>
<?= page('contacto')->country()->html() ?>

Social Media
<ul>
<?php if (page('contacto')->twitter()): ?>
	<li>
		<a href="<?= page('contacto')->twitter() ?>" title="Twitter" target="_blank">
       			<?php snippet('icons/twitter') ?>
		</a>
	</li>
<?php endif ?>
<?php if (page('contacto')->facebook()): ?>
	<li>
		<a href="<?= page('contacto')->facebook() ?>" title="Facebook" target="_blank">
       			<?php snippet('icons/facebook') ?>
		</a>
	</li>
<?php endif ?>
<?php if (page('contacto')->instagram()): ?>
	<li>
		<a href="<?= page('contacto')->instagram() ?>" title="Instagram" target="_blank">
       			<?php snippet('icons/instagram') ?>
		</a>
	</li>
<?php endif ?>
</ul>

