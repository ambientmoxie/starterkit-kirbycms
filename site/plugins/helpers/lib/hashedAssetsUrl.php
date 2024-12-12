<?php

function hashedAssetURL($type)
{
    $manifest_path = $_SERVER['DOCUMENT_ROOT'] . '/assets/bundle/.vite/manifest.json';
    $manifest = json_decode(file_get_contents($manifest_path), true);
    $asset = $type === "js" ? $manifest["assets/js/main.js"]['file'] : $manifest["assets/js/main.js"]['css'][0];
    return url('assets/bundle/' . $asset);
}
