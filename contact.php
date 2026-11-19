<?php
require __DIR__ . '/engine/public.php';
require __DIR__ . '/engine/preview_layout.php';
require __DIR__ . '/engine/contact_submit.php';
pageTop('Contact', $profile, $settings);
?>
<h1>Contact</h1><div class="split"><section class="panel"><h2>Contact details</h2><?php if($profile['email']): ?><p><?= h($profile['email']) ?></p><?php endif; ?><p><?= h($profile['phone']) ?></p><p><?= h($profile['location']) ?></p><?php foreach(['facebook'=>'Facebook','instagram'=>'Instagram'] as $key=>$label): if (socialUrl($profile[$key]) !== '#'): ?><p><a href="<?= h(socialUrl($profile[$key])) ?>" rel="noopener noreferrer" target="_blank"><?= h($label) ?></a></p><?php endif; endforeach; ?></section><section class="panel"><h2>Send a message</h2><?php if($notice): ?><p role="status"><?= h($notice) ?></p><?php endif; ?><?php if($error): ?><p role="alert"><?= h($error) ?></p><?php endif; ?><form method="post"><?= csrfInput() ?><div hidden><label>Website<input name="website" tabindex="-1" autocomplete="off"></label></div><label>Name<input name="name" value="<?= h($name) ?>" maxlength="120" required></label><label>Email<input type="email" name="email" value="<?= h($email) ?>" maxlength="254" required></label><label>Subject<input name="subject" value="<?= h($subject) ?>" maxlength="200" required></label><label>Message<textarea name="message" rows="5" maxlength="5000" required><?= h($message) ?></textarea></label><button class="btn">Send message</button></form></section></div>
<?php pageBottom($profile); ?>
