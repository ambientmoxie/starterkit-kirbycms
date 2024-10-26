<?php

function vite_asset($path, $type)
{
    $manifest_path = kirby()->root('public') . 'assets/bundle/.vite/manifest.json';
    $manifest = json_decode(file_get_contents($manifest_path), true);
    $asset = $type === "js" ? $manifest[$path]['file'] : $manifest[$path]['css'][0];
    return url('assets/bundle/' . $asset);
}
