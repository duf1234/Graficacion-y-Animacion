<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/grav/user/themes/hyde/blueprints.yaml',
    'modified' => 1561868437,
    'data' => [
        'name' => 'Hyde',
        'version' => '0.1.1',
        'description' => 'Hyde theme for Grav',
        'icon' => 'rebel',
        'author' => [
            'name' => 'Paul Massendari',
            'email' => 'paul@massendari.com'
        ],
        'homepage' => 'https://github.com/paulmassen/grav-theme-hyde',
        'demo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, theme, etc',
        'bugs' => 'https://github.com/paulmassen/grav-theme-hyde/issues',
        'readme' => 'https://github.com/paulmassen/grav-theme-hyde/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'tagline' => [
                    'type' => 'textarea',
                    'label' => 'Site tagline'
                ],
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in Menu',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
