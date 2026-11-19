<?php
require __DIR__ . '/engine/public.php';
require __DIR__ . '/engine/preview_layout.php';
pageTop('Home', $profile, $settings);
?>
<section class="hero"><div><p class="eyebrow">PERSONAL PORTFOLIO</p><h1><?= h($profile['display_name']) ?></h1><p class="lead"><?= h($profile['roles']) ?></p><p><?= nl2br(h($profile['intro'])) ?></p><div class="actions"><a class="btn" href="projects.php">Explore projects</a><a class="outline" href="contact.php">Contact</a></div></div><img class="portrait" src="<?= h(imageUrl($profile['photo'])) ?>" alt="Profile picture"></section><section class="tiles"><a class="tile" href="skills.php"><strong><?= count(rows($db,'skills')) ?></strong> Skills</a><a class="tile" href="projects.php"><strong><?= count(rows($db,'projects')) ?></strong> Projects</a><a class="tile" href="resume.php"><strong><?= count(rows($db,'education')) ?></strong> Education records</a></section>
<?php pageBottom($profile); ?>
