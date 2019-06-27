<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/grav/user/themes/casper/blueprints.yaml',
    'modified' => 1561565103,
    'data' => [
        'name' => 'Casper 2',
        'version' => '0.9.5',
        'description' => 'my little ghost 👻 | this theme is port of famous Casper2 theme for ghost',
        'icon' => 'apple',
        'author' => [
            'name' => 'Seraphim Yaris',
            'url' => 'https://www.buymeacoffee.com/zBl6OtuIM'
        ],
        'homepage' => 'https://github.com/diomed/casper',
        'keywords' => 'Casper2, grav etc.',
        'bugs' => 'https://github.com/diomed/casper/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'readingtime',
                'version' => '>=1.3.0'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
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
                'description' => [
                    'type' => 'textarea',
                    'label' => 'Description'
                ],
                'logo' => [
                    'type' => 'filepicker',
                    'label' => 'Logo image',
                    'folder' => 'theme@://assets/images',
                    'preview_images' => true,
                    'accept' => [
                        0 => '.svg',
                        1 => '.png'
                    ]
                ],
                'year' => [
                    'type' => 'number',
                    'prepend' => 'Year'
                ],
                'tagline' => [
                    'type' => 'textarea',
                    'label' => 'Tagline'
                ],
                'header.featured_image' => [
                    'type' => 'text',
                    'label' => 'Default Card Background Image',
                    'placeholder' => 'enter link here',
                    'help' => 'when there is no image set, this image, or set of images from unsplash shall be displayed instead',
                    'prepend' => 'https://source.unsplash.com'
                ],
                'error_header_image' => [
                    'type' => 'text',
                    'label' => 'Header image error message'
                ],
                'favicon' => [
                    'type' => 'file',
                    'label' => 'Favicon',
                    'multiple' => false,
                    'destination' => 'user/themes/haywire/images/favicon',
                    'accept' => [
                        0 => 'image/*',
                        1 => 'svg'
                    ]
                ],
                'footer' => [
                    'type' => 'textarea',
                    'label' => 'Footer message'
                ],
                'social_columns' => [
                    'type' => 'columns',
                    'fields' => [
                        'column1' => [
                            'type' => 'column',
                            'fields' => [
                                'social_twitter' => [
                                    'type' => 'text',
                                    'prepend' => 'Twitter ID <i class="fa fa-twitter"></i>'
                                ],
                                'social_facebook' => [
                                    'type' => 'text',
                                    'prepend' => 'Facebook ID <i class="fa fa-facebook"></i>'
                                ],
                                'social_github' => [
                                    'type' => 'text',
                                    'prepend' => 'Github ID  <i class="fa fa-github"></i>'
                                ],
                                'social_keybase' => [
                                    'type' => 'text',
                                    'prepend' => 'Keybase ID <i class="fa fa-keybase"></i>'
                                ],
                                'social_linkedin' => [
                                    'type' => 'text',
                                    'prepend' => 'Linkedin ID <i class="fa fa-linkedin"></i>'
                                ]
                            ]
                        ],
                        'column2' => [
                            'type' => 'column',
                            'fields' => [
                                'social_spotify' => [
                                    'type' => 'text',
                                    'prepend' => 'Spotify ID <i class="fa fa-spotify"></i>'
                                ],
                                'social_youtube' => [
                                    'type' => 'text',
                                    'prepend' => 'Youtube ID <i class="fa fa-youtube"></i>'
                                ],
                                'social_discord' => [
                                    'type' => 'text',
                                    'prepend' => 'Discord ID <i class="fa fa-discord"></i>'
                                ],
                                'social_flickr' => [
                                    'type' => 'text',
                                    'prepend' => 'Flickr ID <i class="fa fa-flicker"></i>'
                                ],
                                'social_instagram' => [
                                    'type' => 'text',
                                    'prepend' => 'Instagram ID <i class="fa fa-instagram"></i>'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
