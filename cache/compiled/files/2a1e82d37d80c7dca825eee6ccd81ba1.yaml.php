<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/grav/user/themes/minimaxing/blueprints.yaml',
    'modified' => 1561916931,
    'data' => [
        'name' => 'Minimaxing',
        'version' => '0.2.3',
        'description' => 'Port of Minimaxing by HTML5 UP',
        'icon' => 'rebel',
        'author' => [
            'name' => 'Hugh Barnes',
            'email' => 'dev@hubns.com'
        ],
        'homepage' => 'https://github.com/hughbris/grav-theme-minimaxing',
        'demo' => 'https://behold.metamotive.co.nz/minimaxing',
        'keywords' => 'grav, theme, html5up, blue',
        'bugs' => 'https://github.com/hughbris/grav-theme-minimaxing/issues',
        'readme' => 'https://github.com/hughbris/grav-theme-minimaxing/blob/develop/README.md',
        'docs' => 'https://github.com/hughbris/grav-theme-minimaxing/blob/master/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in Menu',
                    'highlight' => 1,
                    'default' => 0,
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
