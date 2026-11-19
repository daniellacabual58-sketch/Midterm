<?php
require __DIR__ . '/engine/public.php';
require __DIR__ . '/engine/preview_layout.php';
$skills = rows($db, 'skills');
pageTop('Skills', $profile, $settings);
?>
<h1>Skills</h1><?php if (!$skills): ?><p>No skills added yet.</p><?php endif; ?><div class="tiles"><?php foreach ($skills as $skill): ?><article class="panel"><p class="eyebrow"><?= h($skill['category']) ?></p><h2><?= h($skill['title']) ?></h2><meter min="0" max="100" value="<?= (int)$skill['level'] ?>"></meter><p><?= (int)$skill['level'] ?>%</p></article><?php endforeach; ?></div>
<?php pageBottom($profile); ?>
