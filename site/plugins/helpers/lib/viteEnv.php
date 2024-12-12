<?php

require_once dirname(__DIR__, 4) . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__, 4));
$dotenv->load();

function viteEnv($envVar)
{
    return $_ENV[$envVar];
}
