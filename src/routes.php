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
\Illuminate\Support\Facades\Route::get(
    'assets[/{filename:[A-Za-z\/\.\-]+}]',
    function ($filename) {
        $path = base_path('src/assets/');
        $path =  $path.$filename;

        if (!file_exists($path)) {
            throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException(
                'File `'.$filename.'` not found'
            );
        }

        $file = file_get_contents($path);
        $type = mime_content_type($path);

        $response = response()->make($file, 200);
        $response->header("Content-Type", $type);

        return $response;
    }
);