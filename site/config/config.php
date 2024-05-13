<?php

use Kirby\Cms\App;
use Kirby\Toolkit\Str;

return [
    'languages' => true,
    'yaml.handler' => 'symfony',
    'debug' => false,
    'panel' => [
        'install' => false,
        'language' => 'de',
        'menu' => [
            'site' => [
                'current' => function (): bool {
                    $path = App::instance()->request()->path()->toString();

                    // Highlight the site button only on main site view and all pages - except media page
                    if ($path === 'panel/site' || (Str::contains($path, 'pages/') && !Str::contains($path, 'pages/media'))) {
                        return true;
                    }

                    return false;
                },
            ],
            '-',
            'media' => [
                'icon' => 'images',
                'label' => 'Media',
                'link' => 'pages/media',
                'current' => function (): bool {
                    $path = App::instance()->request()->path()->toString();

                    return Str::contains($path, 'pages/media');
                },
            ],
            '-',
            'users',
            'languages',
            'system',
            '-',
            'retour',
        ],
    ],
    'thumbs' => [
        'quality' => 80,
        'format' => 'webp',
    ],
    'cache' => [
        'pages' => [
            'active' => true,
        ],
    ],
    'routes' => [
        [
            'pattern' => 'media',
            'action' => function () {
                return false;
            }
        ]
    ],
    'tobimori.seo.sitemap' => [
        'excludeTemplates' => ['error', 'media']
    ],
];
