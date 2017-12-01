<?php
/**
 * @param  string  $filename
 * @return string
 * Return the revisioned asset for the given filename.
 * If the file is not present in the manifest it will return the original filename.
 **/
function gulp_rev($filename) {
    $manifest_path = dirname(__FILE__).'/../../assets/dist/rev-manifest.json';
    if (file_exists($manifest_path)) {
        $manifest = json_decode(file_get_contents($manifest_path), TRUE);
    } else {
        $manifest = [];
    }
    if (array_key_exists($filename, $manifest)) {
        return $manifest[$filename];
    }
    return $filename;
}
