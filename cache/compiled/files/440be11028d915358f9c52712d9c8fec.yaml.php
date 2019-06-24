<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/grav/user/themes/zsimplex/blueprints.yaml',
    'modified' => 1560744857,
    'data' => [
        'name' => 'zSimplex',
        'version' => '2.2.1',
        'description' => 'The zSimplex theme is a free responsive HTML5 theme that can be used to start a management or project website.',
        'icon' => 'paint-brush',
        'author' => [
            'name' => 'Sommerregen',
            'email' => 'sommerregen@benjamin-regler.de'
        ],
        'homepage' => 'https://github.com/sommerregen/grav-theme-zsimplex',
        'demo' => 'https://themes.benjamin-regler.de/zsimplex',
        'keywords' => [
            0 => 'theme',
            1 => 'onepage',
            2 => 'responsive',
            3 => 'html5',
            4 => 'css3',
            5 => 'jquery',
            6 => 'simple_form',
            7 => 'gmaps'
        ],
        'docs' => 'https://github.com/sommerregen/grav-theme-zsimplex/blob/master/README.md',
        'bugs' => 'https://github.com/sommerregen/grav-theme-zsimplex/issues',
        'license' => 'MIT/GPL',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'help' => 'THEMES.ZSIMPLEX.PLUGIN_STATUS_HELP',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'cdn' => [
                    'type' => 'toggle',
                    'label' => 'THEMES.ZSIMPLEX.CDN',
                    'help' => 'THEMES.ZSIMPLEX.CDN_HELP',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.YES',
                        0 => 'PLUGIN_ADMIN.NO'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'logo_url' => [
                    'type' => 'text',
                    'label' => 'THEMES.ZSIMPLEX.LOGO_URL',
                    'placeholder' => 'THEMES.ZSIMPLEX.LOGO_URL_PLACEHOLDER'
                ],
                'favicon_url' => [
                    'type' => 'text',
                    'label' => 'THEMES.ZSIMPLEX.FAVICON_URL',
                    'placeholder' => 'THEMES.ZSIMPLEX.FAVICON_URL_PLACEHOLDER'
                ]
            ]
        ]
    ]
];
