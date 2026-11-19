<?php
require __DIR__ . '/engine/public.php';
require __DIR__ . '/engine/preview_layout.php';
$projects = rows($db, 'projects');
pageTop('Projects', $profile, $settings);
?>
<h1>Project archive</h1><div class="filters"><button type="button" data-filter="all">All</button><?php foreach(array_unique(array_column($projects,'category')) as $category): ?><button type="button" data-filter="<?= h($category) ?>"><?= h(ucfirst($category)) ?></button><?php endforeach; ?></div><?php if (!$projects): ?><p>No projects added yet.</p><?php endif; ?><div class="tiles"><?php foreach ($projects as $project): ?><article class="panel project" data-category="<?= h($project['category']) ?>"><img src="<?= h(imageUrl($project['image'])) ?>" alt="<?= h($project['title']) ?>"><p class="eyebrow"><?= h($project['category']) ?></p><h2><?= h($project['title']) ?></h2><p><?= nl2br(h($project['description'])) ?></p><p><?= h($project['technologies']) ?></p></article><?php endforeach; ?></div>
<?php pageBottom($profile); ?>
