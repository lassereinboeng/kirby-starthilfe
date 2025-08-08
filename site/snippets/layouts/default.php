<?php
/** @var \Kirby\Cms\App $kirby */
/** @var \Kirby\Cms\Site $site */
/** @var \Kirby\Cms\Page $page */
/** @var \Kirby\Template\Slot $slot */
?>

<!DOCTYPE html>
<html lang="<?= $site->lang() ?>"
  class="antialiased">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible"
    content="IE=edge" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0" />

  <?php snippet('seo/head'); ?>
  <link rel="icon"
    href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🚀</text></svg>">
  <?php snippet('components/favicons'); ?>

  <?= vite(['src/main.css', 'src/main.ts']) ?>
</head>

<body class="<?= $page->template() ?>">
  <main>
    <?= $slot ?>
  </main>

  <?php snippet('seo/schemas'); ?>
</body>

</html>
