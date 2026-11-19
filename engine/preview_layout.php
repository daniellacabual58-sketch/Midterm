<?php
function pageTop($title, $profile, $settings) {
    $accent = ['green'=>'#305e47','blue'=>'#285c8c','violet'=>'#754e95'][$settings['accent']] ?? '#305e47';
    $theme = $settings['theme'] === 'dark' ? 'dark' : 'light';
?>
<!doctype html><html lang="en" data-theme="<?= h($theme) ?>"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title><?= h($title) ?> | <?= h($settings['site_title']) ?></title><link rel="stylesheet" href="preview.css"><style>:root{--accent:<?= h($accent) ?>}</style></head><body><header class="top"><a class="brand" href="index.php"><?php if ($settings['logo_image']): ?><img src="<?= h(imageUrl($settings['logo_image'])) ?>" alt="Logo"><?php endif; ?><?= h($settings['logo_text']) ?> <span><?= h($settings['logo_accent']) ?></span></a><nav><?php foreach (['index.php'=>'Home','about.php'=>'About','skills.php'=>'Skills','projects.php'=>'Projects','resume.php'=>'Resume','contact.php'=>'Contact'] as $url=>$label): ?><a href="<?= h($url) ?>" <?= basename($_SERVER['SCRIPT_NAME']) === $url ? 'aria-current="page"' : '' ?>><?= h($label) ?></a><?php endforeach; ?></nav><button id="themeButton" type="button">Theme</button></header><main>
<?php }
function pageBottom($profile) { ?>
</main><footer><span><?= h($profile['full_name']) ?> · <?= date('Y') ?></span><a href="admin/login.php">Admin login</a></footer><script src="preview.js"></script></body></html>
<?php }
