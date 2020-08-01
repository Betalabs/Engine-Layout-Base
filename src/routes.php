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