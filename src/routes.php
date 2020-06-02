<?php
\Illuminate\Support\Facades\Route::get(
    '/',
    function () {
        return file_get_contents(__DIR__.'/views/welcome.blade.php');
    }
);
\Illuminate\Support\Facades\Route::get(
    'development[/{path:[A-Za-z\/]+}]',
    function ($path) {
        return view(implode('.', explode('/', $path)));
    }
);