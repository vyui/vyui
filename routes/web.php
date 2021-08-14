<?php

use Radiate\Support\Facades\Route;

Route::get('/test', [\App\Http\Controllers\Controller::class, 'renderHomePage']);

Route::get('/services', function () {
    print 'here from /services sdfsdfsdsfsdf';
});

Route::get('/services/{service?}/{page?}', function () {
    print 'here from /services/{service?}/{page?} sdfsdfsdfsfsdsfd';
});