<?php

// Because config.php is executed early in the initialization process,
// we need to manually import the helper file to ensure that the viteEnv()
// function is available when Kirby reads this file.
require_once __DIR__ . '/../plugins/helpers/index.php';

return [
    'debug' => viteEnv('VITE_DEV') === 'true',
    'vite' => [
        'dev' => viteEnv('VITE_DEV') === 'true',
        'ip' => viteEnv('VITE_DEV_SERVER_IP')
    ]
];
