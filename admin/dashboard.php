<?php
require __DIR__ . '/../engine/bootstrap.php';
requireAdmin();
require __DIR__ . '/layout.php';
$counts = [
    'Projects' => ['projects','records.php?section=projects'],
    'Skills' => ['skills','records.php?section=skills'],
    'Experience' => ['experience','records.php?section=experience'],
    'Achievements' => ['achievements','records.php?section=achievements'],
    'Education' => ['education','records.php?section=education'],
    'Messages' => ['messages','inbox.php']
];
$admin = run($db, 'SELECT username FROM admins WHERE id = ?', [$_SESSION['admin_id']])->fetch();
deskHeader('Overview');
?>
<p>Signed in as <strong><?= h($admin['username'] ?? 'Administrator') ?></strong>. Choose a module to manage website content.</p><div class="stats">
<?php foreach ($counts as $label => $info): ?>
<a class="stat" href="<?= h($info[1]) ?>"><span><?= h($label) ?></span><strong><?= (int)run($db, 'SELECT COUNT(*) FROM `' . $info[0] . '`')->fetchColumn() ?></strong><small>Manage records →</small></a>
<?php endforeach; ?></div><section class="panel"><h2>Inbox</h2><p><?= (int)run($db, 'SELECT COUNT(*) FROM messages WHERE is_read = 0')->fetchColumn() ?> unread messages.</p><a href="inbox.php">Open inbox →</a></section>
<?php deskFooter(); ?>
