<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/grav/user/config/themes/bootstrap-blog.yaml',
    'modified' => 1561231953,
    'data' => [
        'enabled' => true,
        'cdn_enabled' => true,
        'back_to_top_button' => true,
        'fluid_container' => '1',
        'navbar' => [
            'style' => 'blue',
            'override_page_style' => true,
            'dropdown' => false,
            'sticky' => false,
            'display_site_name' => false
        ],
        'sidebar' => [
            'enabled' => true,
            'align' => 'right',
            'twitter' => [
                'enabled' => true,
                'user' => 'Brayan Mina Vernaza',
                'height' => 600,
                'theme' => 'light'
            ],
            'about' => [
                'enabled' => false,
                'title' => 'About me',
                'content' => 'Some text about you...'
            ]
        ],
        'item' => [
            'featured_image' => '1',
            'show_prev_next' => true,
            'related_pages' => true,
            'category' => 'category',
            'tag' => 'tag'
        ],
        'comments' => [
            'enabled' => true
        ],
        'footer' => [
            'style' => 'indigo',
            'text' => 'Bootstrap Blog is <i class="fas fa-code"></i> with <i class="fas fa-heart"></i> by <a href="http://ayozehd.com">Ayoze Hernández Díaz</a>'
        ]
    ]
];
