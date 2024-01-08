<?php

/** @var Kirby\Cms\App $kirby */
/** @var Kirby\Cms\Site $site */
/** @var Kirby\Cms\Page $page */
snippet('layouts/default', slots: true) ?>

<h1><?= $page->title() ?></h1>

<?php endsnippet() ?>