<?php

/*
This configuration file is named after your local URL. I am using Laravel Valet to host my site locally and the local address of this site is http://starterkit-kirbycms.test.
If the current environment matches the name of the file, then it will be prioritized and the configuration options within this file will be applied.
I use Ngrok to provide this live preview functionality, allowing me to observe code modifications in real time across different devices without needing a full site deployment every time I make a change.
However, the path to assets like javascript and css files gets lost during proxy redirection. The "url" option line is there to correct the problem.
*/

return [
    'debug' => true,
    'url' => isset($_SERVER['HTTP_X_FORWARDED_HOST']) ? $_SERVER['HTTP_X_FORWARDED_PROTO'] . '://' . $_SERVER['HTTP_X_FORWARDED_HOST'] : 'http://starterkit-kirbycms.test',
    'thumbs' => [
        'srcsets' => [
            'default' => [
                '300w'  => ['width' => 300],
                '600w'  => ['width' => 600],
                '900w'  => ['width' => 900],
                '1200w' => ['width' => 1200],
                '1800w' => ['width' => 1800]
            ],
            'avif' => [
                '300w'  => ['width' => 300, 'format' => 'avif'],
                '600w'  => ['width' => 600, 'format' => 'avif'],
                '900w'  => ['width' => 900, 'format' => 'avif'],
                '1200w' => ['width' => 1200, 'format' => 'avif'],
                '1800w' => ['width' => 1800, 'format' => 'avif']
            ],
            'webp' => [
                '300w'  => ['width' => 300, 'format' => 'webp'],
                '600w'  => ['width' => 600, 'format' => 'webp'],
                '900w'  => ['width' => 900, 'format' => 'webp'],
                '1200w' => ['width' => 1200, 'format' => 'webp'],
                '1800w' => ['width' => 1800, 'format' => 'webp']
            ],
        ]
    ]
];
