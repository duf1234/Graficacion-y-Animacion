<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/grav/user/themes/bootstrap4-open-matter/blueprints.yaml',
    'modified' => 1561869444,
    'data' => [
        'name' => 'Bootstrap4 Open Matter',
        'version' => '2.5.3',
        'description' => 'A custom version of the Bootstrap4 theme for open blogs, course hubs and more. Includes Git Sync and \'chromeless\' content embedding.',
        'icon' => 'bold',
        'author' => [
            'name' => 'Hibbitts Design',
            'email' => 'hello@hibbittsdesign.org',
            'url' => 'http://hibbittsdesign.org'
        ],
        'homepage' => 'https://github.com/hibbitts-design/grav-theme-bootstrap4-open-matter',
        'demo' => 'https://demo.hibbittsdesign.org/grav-theme-bootstrap4-open-matter/',
        'docs' => 'https://github.com/hibbitts-design/grav-theme-bootstrap4-open-matter/blob/master/README.md',
        'keywords' => 'open, courses, resources, oer, git, gitsync, chromeless',
        'bugs' => 'https://github.com/hibbitts-design/grav-theme-bootstrap4-open-matter/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.6.0'
            ],
            1 => 'admin',
            2 => 'auto-date',
            3 => 'archives',
            4 => 'breadcrumbs',
            5 => 'email',
            6 => 'error',
            7 => 'external_links',
            8 => 'feed',
            9 => 'form',
            10 => 'git-sync',
            11 => 'grava11y',
            12 => 'image-captions',
            13 => 'login',
            14 => 'markdown-notices',
            15 => 'page-inject',
            16 => 'pagination',
            17 => 'presentation',
            18 => 'presentation-deckset',
            19 => 'problems',
            20 => 'taxonomylist',
            21 => 'twigfeeds',
            22 => 'twigpcre',
            23 => 'shortcode-core',
            24 => 'youtube',
            25 => 'bootstrap4'
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'open_matter_options' => [
                            'type' => 'tab',
                            'title' => 'Open Matter Options',
                            'fields' => [
                                'chromelessoptions' => [
                                    'type' => 'section',
                                    'title' => 'Chromeless Site (i.e. Embedded)',
                                    'underline' => true
                                ],
                                'chromeless.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Always Hide Site Menubar, Sidebar and Footer',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'Yes',
                                        0 => 'No'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'gitsyncsetup' => [
                                    'type' => 'section',
                                    'title' => 'Git Sync Link',
                                    'underline' => true
                                ],
                                'display_of_git_sync_repo_link' => [
                                    'type' => 'select',
                                    'size' => 'medium',
                                    'classes' => 'fancy',
                                    'label' => 'Location of Git Sync Link',
                                    'default' => 'menu',
                                    'options' => [
                                        'menu' => 'Menu',
                                        'page' => 'Page (visible when \'Chromeless\')',
                                        'footer' => 'Footer',
                                        'none' => 'None'
                                    ]
                                ],
                                'type_of_git_sync_repo_link' => [
                                    'type' => 'select',
                                    'size' => 'medium',
                                    'label' => 'Type of Git Sync Link',
                                    'default' => 'view',
                                    'options' => [
                                        'view' => 'View Git Repository',
                                        'edit' => 'View/Edit Page in Git Repository'
                                    ]
                                ],
                                'custom_git_sync_repo_link_icon' => [
                                    'type' => 'input.text',
                                    'size' => 'small',
                                    'label' => 'Custom Git Sync Font Awesome Icon',
                                    'description' => 'Short name, e.g. \'code-fork\'.',
                                    'validate' => [
                                        'type' => 'text'
                                    ]
                                ],
                                'custom_git_sync_repo_link_text' => [
                                    'type' => 'input.text',
                                    'size' => 'medium',
                                    'label' => 'Custom Git Sync Link Text',
                                    'description' => 'Link text, e.g. \'View Page in GitHub\' or \'View Page as Markdown\'.',
                                    'validate' => [
                                        'type' => 'text'
                                    ]
                                ],
                                'custom_git_sync_repo_presentation_link_text' => [
                                    'type' => 'input.text',
                                    'size' => 'medium',
                                    'label' => 'Custom Git Sync Presentation Link Text',
                                    'description' => 'Link text, e.g. \'View Slides in GitHub\' or \'View Slides as Markdown\'.',
                                    'validate' => [
                                        'type' => 'text'
                                    ]
                                ],
                                'git_sync_repo_link' => [
                                    'type' => 'input.url',
                                    'label' => 'Custom Git Repository URL',
                                    'help' => 'Enter the URL that leads to the Pages folder in your Git Repository.',
                                    'description' => 'URL path to a Git repository up to, but not including, \'/pages\' and everything following it. For example, \'https://github.com/paulhibbitts/demo-grav-course-hub/tree/master\'.',
                                    'validate' => [
                                        'type' => 'URL'
                                    ]
                                ],
                                'git_sync_edit_note_text' => [
                                    'type' => 'input.text',
                                    'size' => 'long',
                                    'label' => 'Text before Git Sync Link on Pages',
                                    'default' => 'Have a suggestion or correction?',
                                    'description' => 'Text before the link (only when displayed on a Page).'
                                ],
                                'gitsynctheme' => [
                                    'type' => 'section',
                                    'title' => 'Git Sync Site Theme Files Link',
                                    'underline' => true
                                ],
                                'git_sync_edit_theme_link_location' => [
                                    'type' => 'select',
                                    'label' => 'Location of Site Theme Files Link',
                                    'default' => 'none',
                                    'size' => 'small',
                                    'options' => [
                                        'footer' => 'Footer',
                                        'none' => 'None'
                                    ]
                                ],
                                'git_sync.edit_theme_link_text' => [
                                    'type' => 'input.text',
                                    'size' => 'medium',
                                    'label' => 'Site Theme Files Link Text',
                                    'default' => 'Site Theme Files',
                                    'description' => 'Customize the Site Theme Files link text.'
                                ],
                                'h5pcontent' => [
                                    'type' => 'section',
                                    'title' => 'H5P Content',
                                    'underline' => true
                                ],
                                'h5pembedrootpath' => [
                                    'type' => 'text',
                                    'size' => 'long',
                                    'label' => 'H5P Content Embed Source URL',
                                    'default' => 'https://h5p.org/h5p/embed/',
                                    'help' => 'Enter the embed source URL path up to, but not including, the H5P Content ID.',
                                    'description' => 'H5P embed source URL path up to, but not including, the Content ID. For example, \'https://h5p.org/h5p/embed/\' or \'https://[organization].h5p.com/content/\' or \'https://yourWPsite/h5p/wp-admin/admin-ajax.php?action=h5p_embed&id=\'.',
                                    'validate' => [
                                        'type' => 'URL'
                                    ]
                                ],
                                'creativecommonslicenseoptions' => [
                                    'type' => 'section',
                                    'title' => 'Creative Commons License',
                                    'underline' => true
                                ],
                                'cc_license.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Display CC License',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'Yes',
                                        0 => 'No'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'cc_license.type' => [
                                    'type' => 'select',
                                    'label' => 'CC License Type',
                                    'default' => 'ccby',
                                    'size' => 'long',
                                    'description' => 'Looking for more info about Creative Commons (CC) Licenses?<br> Visit the <a href="https://creativecommons.org/" target="_blank">creativecommons.org</a> site.',
                                    'options' => [
                                        'ccby' => 'CC Attribution',
                                        'ccbysa' => 'CC Attribution Share Alike',
                                        'ccbynd' => 'CC Attribution No Derivatives',
                                        'ccbync' => 'CC Attribution Non-Commercial',
                                        'ccbyncsa' => 'CC Attribution Non-Commercial Share Alike',
                                        'ccbyncnd' => 'CC Attribution Non-Commercial No Derivatives'
                                    ]
                                ],
                                'cc_license.icon' => [
                                    'type' => 'toggle',
                                    'label' => 'Display Only CC License Icon',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'Yes',
                                        0 => 'No'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'cc_license.text' => [
                                    'type' => 'text',
                                    'size' => 'long',
                                    'description' => 'For example, \'except where otherwise noted.\'',
                                    'label' => 'Additional CC License Text',
                                    'validate' => [
                                        'type' => 'text'
                                    ]
                                ],
                                'menubar' => [
                                    'type' => 'section',
                                    'title' => 'Menubar',
                                    'underline' => true
                                ],
                                'displaycustommenus.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Display Custom Menu Items',
                                    'help' => 'Determines if any defined custom menu entries are displayed in the menubar.',
                                    'default' => 0,
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'Yes',
                                        0 => 'No'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'custommenu' => [
                                    'name' => 'menu',
                                    'type' => 'list',
                                    'label' => 'Custom Menubar Items',
                                    'fields' => [
                                        '.text' => [
                                            'type' => 'text',
                                            'label' => 'Text',
                                            'description' => 'Text label for menu item.'
                                        ],
                                        '.icon' => [
                                            'type' => 'text',
                                            'label' => 'Icon',
                                            'description' => 'Font Awesome icon for menu item.'
                                        ],
                                        '.url' => [
                                            'type' => 'text',
                                            'label' => 'URL',
                                            'description' => 'URL for menu item.'
                                        ],
                                        '.target' => [
                                            'type' => 'select',
                                            'label' => 'Target',
                                            'default' => '_self',
                                            'size' => 'medium',
                                            'options' => [
                                                '_blank' => 'Open in a new window',
                                                '_parent' => 'Open in the parent frame',
                                                '_top' => 'Open in the full body of the window',
                                                '_self' => 'Open in the same frame as clicked'
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'bootstrap4_options' => [
                            'type' => 'tab',
                            'title' => 'Bootstrap4  Options',
                            'fields' => [
                                'generaloptions' => [
                                    'type' => 'section',
                                    'title' => 'Visual Style (Bootstrap4 CSS)',
                                    'underline' => true
                                ],
                                'theme_stylesheet' => [
                                    'type' => 'select',
                                    'size' => 'medium',
                                    'classes' => 'fancy',
                                    'label' => 'Theme Stylesheet',
                                    'default' => 'default',
                                    'options' => [
                                        'default' => 'Default',
                                        'cerulean' => 'Cerulean',
                                        'cosmo' => 'Cosmo',
                                        'cyborg' => 'Cyborg',
                                        'darkly' => 'Darkly',
                                        'flatly' => 'Flatly',
                                        'journal' => 'Journal',
                                        'litera' => 'Litera',
                                        'lumen' => 'Lumen',
                                        'lux' => 'Lux',
                                        'materia' => 'Materia',
                                        'minty' => 'Minty',
                                        'pulse' => 'Pulse',
                                        'sandstone' => 'Sandstone',
                                        'sketchy' => 'Sketchy',
                                        'simplex' => 'Simplex',
                                        'slate' => 'Slate',
                                        'solar' => 'Solar',
                                        'spacelab' => 'Spacelab',
                                        'superhero' => 'Superhero',
                                        'united' => 'United',
                                        'yeti' => 'Yeti'
                                    ]
                                ],
                                'menubaroptions' => [
                                    'type' => 'section',
                                    'title' => 'NavBar (Bootstrap4 Menubar)',
                                    'underline' => true
                                ],
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
                                'navbar_bg' => [
                                    'type' => 'select',
                                    'size' => 'small',
                                    'classes' => 'fancy',
                                    'label' => 'NavBar Background',
                                    'default' => 'default',
                                    'options' => [
                                        'default' => 'Default',
                                        'bg-primary' => 'bg-primary',
                                        'bg-success' => 'bg-success',
                                        'bg-info' => 'bg-info',
                                        'bg-warning' => 'bg-warning',
                                        'bg-danger' => 'bg-danger',
                                        'bg-inverse' => 'bg-inverse',
                                        'bg-faded' => 'bg-faded'
                                    ]
                                ],
                                'navbar_bg_color' => [
                                    'type' => 'colorpicker',
                                    'label' => 'NavBar Background Color',
                                    'description' => 'If set, will be used for NavBar Background.',
                                    'size' => 'small'
                                ],
                                'navbar_position' => [
                                    'type' => 'select',
                                    'label' => 'NavBar Postion',
                                    'size' => 'small',
                                    'default' => 'top',
                                    'options' => [
                                        'top' => 'Top',
                                        'sticky-top' => 'Sticky Top'
                                    ]
                                ],
                                'navbar_breakpoint' => [
                                    'type' => 'select',
                                    'label' => 'NavBar Breakpoint',
                                    'size' => 'small',
                                    'default' => 'medium',
                                    'options' => [
                                        'lg' => 'Large',
                                        'md' => 'Medium',
                                        'sm' => 'Small'
                                    ]
                                ],
                                'dropdown.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Dropdown in NavBar',
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
                ]
            ]
        ]
    ]
];
