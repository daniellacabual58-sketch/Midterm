<?php
require __DIR__ . '/engine/public.php';
require __DIR__ . '/engine/preview_layout.php';
pageTop('Resume', $profile, $settings);
?>
<h1>Resume and achievements</h1><?php foreach(['education'=>'Education','experience'=>'Experience','achievements'=>'Achievements'] as $table=>$label): ?><section class="panel"><h2><?= h($label) ?></h2><?php $items=rows($db,$table); if (!$items): ?><p>No records added yet.</p><?php endif; ?><?php foreach($items as $item): ?><article class="entry"><h3><?= h($item['title']) ?></h3><p><?= h($item['organization']) ?> · <?= h($item['period']) ?></p><p><?= nl2br(h($item['description'])) ?></p><?php if (!empty($item['image'])): ?><img class="certificate" src="<?= h(imageUrl($item['image'])) ?>" alt="Certificate image"><?php endif; ?></article><?php endforeach; ?></section><?php endforeach; ?>
<?php pageBottom($profile); ?>
