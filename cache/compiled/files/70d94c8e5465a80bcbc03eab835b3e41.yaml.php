<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/grav/user/plugins/twigfeeds/twigfeeds.yaml',
    'modified' => 1560742012,
    'data' => [
        'enabled' => true,
        'cache' => true,
        'static_cache' => false,
        'debug' => false,
        'cache_time' => 900,
        'pass_headers' => false,
        'silence_security' => false,
        'twig_feeds' => [
            0 => [
                'source' => 'http://rss.nytimes.com/services/xml/rss/nyt/World.xml',
                'name' => 'NY Times',
                'start' => 0,
                'end' => 2
            ],
            1 => [
                'source' => 'http://feeds.bbci.co.uk/news/uk/rss.xml',
                'end' => 4,
                'cache_time' => 3600
            ]
        ]
    ]
];
