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
        $content = \Illuminate\Support\Facades\File::get(
            __DIR__.'/../vendor/betalabs/engine-layout-base/src/resources/jsons/server-data/'.config('layout-base.server-data')
        );

        return response()->json(json_decode($content, true));
    }
);