<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/grav/user/themes/bootstrap4/blueprints.yaml',
    'modified' => 1560742014,
    'data' => [
        'name' => 'Bootstrap4',
        'version' => '1.2.0',
        'description' => 'Bootstrap4 is built using the popular **Bootstrap 4** Framework',
        'icon' => 'bold',
        'author' => [
            'name' => 'Trilby Media',
            'email' => 'hello@trilby.media',
            'url' => 'https://trilby.media'
        ],
        'homepage' => 'https://github.com/trilbymedia/grav-theme-bootstrap4',
        'keywords' => 'bootstrap, bootstrap4, theme, framework',
        'bugs' => 'https://github.com/trilbymedia/grav-theme-bootstrap4/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'bootstrapper'
            ],
            1 => [
                'name' => 'grav',
                'version' => '>=1.5.10'
            ]
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'navbar_style' => [
                    'type' => 'select',
                    'label' => 'NavBar Style',
                    'size' => 'small',
                    'default' => 'navbar-light',
                    'options' => [
                        'navbar-dark' => 'Dark',
                        'navbar-light' => 'Light'
                    ]
                ],
                'navbar_bgcolor' => [
                    'type' => 'colorpicker',
                    'label' => 'NavBar BG Color',
                    'size' => 'small',
                    'default' => '#ffffff'
                ],
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
