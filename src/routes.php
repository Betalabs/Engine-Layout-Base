<?php
/*
 | Welcome route
 */
\Illuminate\Support\Facades\Route::get(
    '/',
    function () {
        return view('welcome');
    }
);
\Illuminate\Support\Facades\Route::get(
    '/_data',
    function () {
        $serverDataJson = config('layout-base.server-data');
        $filename = __DIR__.'/resources/jsons/server-data/'.$serverDataJson;
        if (!\Illuminate\Support\Facades\File::exists($filename)) {
            throw new \League\Flysystem\FileNotFoundException(
                'Server data JSON file `'.$serverDataJson.'` does not exists'
            );
        }

        $content = \Illuminate\Support\Facades\File::get($filename);
        return response()->json(json_decode($content, true));
    }
);