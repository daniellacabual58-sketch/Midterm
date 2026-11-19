<?php
function deskHeader($title) {
?>
<!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title><?= h($title) ?> | Content Desk</title><link rel="stylesheet" href="desk.css"></head>
<body><header class="studio-top"><a class="brand" href="dashboard.php">Content<span> / Desk</span></a><a href="../index.php">Public site ↗</a><form action="logout.php" method="post"><?= csrfInput() ?><button class="secondary">Sign out</button></form></header>
<div class="workspace"><nav class="studio-nav"><p>WORKSPACE</p><a href="dashboard.php">Overview</a><a href="records.php?section=profile">Personal information</a><a href="records.php?section=skills">Skills</a><a href="records.php?section=projects">Projects</a><a href="records.php?section=education">Education</a><a href="records.php?section=experience">Experience</a><a href="records.php?section=achievements">Achievements</a><a href="inbox.php">Inbox</a><p>PREFERENCES</p><a href="records.php?section=settings">Website settings</a><a href="account.php">Admin account</a></nav><main class="studio-main"><span class="eyebrow">PORTFOLIO MANAGEMENT</span><h1><?= h($title) ?></h1>
<?php
}
function deskFooter() { echo '</main></div></body></html>'; }
