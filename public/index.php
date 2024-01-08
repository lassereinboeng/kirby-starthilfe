<?php

// Disable Kirby helper dump() for ray() to work
define('KIRBY_HELPER_DUMP', false);

include __DIR__ . '/../vendor/autoload.php';

use Kirby\Cms\App as Kirby;

$kirby = new Kirby([
    'roots' => [
        'index' => __DIR__,
        'base' => $base = dirname(__DIR__),
        'content' => $base . '/content',
        'site' => $base . '/site',
        'storage' => $storage = $base . '/storage',
        'accounts' => $storage . '/accounts',
        'cache' => $storage . '/cache',
        'sessions' => $storage . '/sessions',
    ],
]);

echo $kirby->render();
