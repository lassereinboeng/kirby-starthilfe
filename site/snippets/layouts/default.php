<?php
/** @var \Kirby\Cms\App $kirby */
/** @var \Kirby\Cms\Site $site */
/** @var \Kirby\Cms\Page $page */
?>

<!DOCTYPE html>
<html lang="<?= $site->lang() ?>"
  class="antialiased">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible"
    content="IE=edge">
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0">
  <?php snippet('seo/head') ?>
  <?php snippet('favicons') ?>
  <?= vite()->css('main.css') ?>
</head>

<body class="<?= $page->template() ?>">

  <main>
    <?= $slot ?>
  </main>

  <?= vite()->js('main.ts') ?>
  <?php snippet('seo/schemas') ?>
</body>

</html>
