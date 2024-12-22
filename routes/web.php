<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;
use App\Http\Controllers\PersonalityController;

use App\Http\Controllers\TypeController;



Route::get('/test', [TestController::class, 'showTest'])->name('test.show');
Route::post('/test', [TestController::class, 'storeAnswer'])->name('test.store');
Route::get('/test-result', [ TestController::class, 'calculateResult'])->name('test.result');
Route::get('/personality', [PersonalityController::class, 'personalitys']);

// Halaman Details
Route::get('/details/{type}', [PersonalityController::class, 'details'])->name('personality-details');



// Route::get('/detail', function () {
//     return view('dashboards.detail');
// });
Route::get('/', function () {
    return view('dashboards.home');
});
Route::get('/contact', function () {
    return view('dashboards.contact');
});

Route::get('/profesional', function () {
    return view('dashboards.profesional');
});


Route::get('/page-test', function () {
    return view('dashboards.page-test');
});

// Testing Root
Route::get(
    '/test2',
    function () {
        return view('dashboards.test2');
    }
);


Route::get('/welcome', function () {
    return view('welcome');
});

// Route::get('/type', function () {
//     return view('dashboards.type');
// });