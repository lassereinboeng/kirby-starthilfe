<?php
/** @var Kirby\Cms\Site $site */
if ($favicon = $site->favicon()->toFile()): ?>

<link
  rel="icon"
  type="image/png"
  sizes="32x32"
  href="<?= $favicon->resize(32)->url() ?>"
/>
<link
  rel="icon"
  type="image/png"
  sizes="16x16"
  href="<?= $favicon->resize(16)->url() ?>"
/>
<link
  rel="icon"
  type="image/png"
  sizes="96x96"
  href="<?= $favicon->resize(96)->url() ?>"
/>
<link
  rel="alternate icon"
  type="image/png"
  href="<?= $favicon->resize(180)->url() ?>"
/>
<link
  rel="apple-touch-icon"
  type="image/png"
  href="<?= $favicon->resize(180)->url() ?>"
/>
<link
  rel="apple-touch-icon"
  type="image/png"
  sizes="167x167"
  href="<?= $favicon->resize(167)->url() ?>"
/>
<link
  rel="apple-touch-icon"
  type="image/png"
  sizes="152x152"
  href="<?= $favicon->resize(152)->url() ?>"
/>

<?php endif ?>
