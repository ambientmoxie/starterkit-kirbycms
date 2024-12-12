<?php
require_once __DIR__ . '/../../../vendor/autoload.php';

function hashedAssetURL($type)
{
    $manifest_path = kirby()->root('public') . 'assets/bundle/.vite/manifest.json';
    $manifest = json_decode(file_get_contents($manifest_path), true);
    $asset = $type === "js" ? $manifest["assets/js/main.js"]['file'] : $manifest["assets/js/main.js"]['css'][0];
    return url('assets/bundle/' . $asset);
}

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../../');
$dotenv->load();

function viteEnv($envVar)
{
    return $_ENV[$envVar];
}
