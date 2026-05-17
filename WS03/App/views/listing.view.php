<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($job['title']) ?> – Jobseek</title>
    <link rel="stylesheet" href="/WS03/public/css/style.css">
</head>
<body>

<nav class="navbar">
    <div class="logo">Jobseek</div>
    <div>
        <a href="/WS03/public/">Home</a>
        <a href="/WS03/public/listings">All Jobs</a>
        <a class="btn" href="/WS03/public/listings/create">Post a Job</a>
    </div>
</nav>

<section class="container listing-detail">
    <h1><?= htmlspecialchars($job['title']) ?></h1>

    <div class="meta">
        <span><strong>Salary:</strong> <?= htmlspecialchars($job['salary']) ?></span>
        <span><strong>Location:</strong> <?= htmlspecialchars($job['location']) ?></span>
    </div>

    <p class="desc"><?= nl2br(htmlspecialchars($job['description'])) ?></p>

    <div class="tags">
        <strong>Tags:</strong>&nbsp;
        <?php foreach (explode(',', $job['tags']) as $tag): ?>
            <span><?= htmlspecialchars(trim($tag)) ?></span>
        <?php endforeach; ?>
    </div>

    <a class="back-link" href="/WS03/public/">&larr; Back to Home</a>
</section>

</body>
</html>