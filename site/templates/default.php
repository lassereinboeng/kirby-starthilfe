<?php

/** @var Kirby\Cms\App $kirby */
/** @var Kirby\Cms\Site $site */
/** @var Kirby\Cms\Page $page */
snippet('layouts/default', slots: true) ?>
<div class="container mx-auto py-12 px-12">
  <h1 class="text-2xl font-bold"><?= $page->title() ?></h1>
  <div><?= $page->text() ?></div>
</div>
<?php endsnippet() ?>
