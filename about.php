<?php
require __DIR__ . '/engine/public.php';
require __DIR__ . '/engine/preview_layout.php';
pageTop('About', $profile, $settings);
?>
<h1>About me</h1><div class="split"><div class="panel"><img class="portrait" src="<?= h(imageUrl($profile['photo'])) ?>" alt="Profile picture"></div><div class="panel"><h2><?= h($profile['full_name']) ?></h2><p><?= nl2br(h($profile['bio'])) ?></p><p><?= h($profile['age_note']) ?> <?= h($profile['location']) ?></p><h3>Goals</h3><p><?= nl2br(h($profile['goals'])) ?></p><h3>Interests</h3><p><?= nl2br(h($profile['interests'])) ?></p></div></div><h2>Education</h2><p><?= h($profile['study_note']) ?></p><?php foreach(rows($db,'education') as $item): ?><article class="panel"><h3><?= h($item['title']) ?></h3><p><?= h($item['organization']) ?> · <?= h($item['period']) ?></p><p><?= h($item['description']) ?></p></article><?php endforeach; ?>
<?php pageBottom($profile); ?>
