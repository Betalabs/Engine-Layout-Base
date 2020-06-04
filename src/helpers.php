<?php

if (!function_exists('asset')) {
    /**
     * Get full url for current storage configuration.
     *
     * @param $path
     *
     * @return string
     */
    function asset($path) {
        return \Illuminate\Support\Facades\Storage::url($path);
    }
}