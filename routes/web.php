<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;


Route::get('/test', [TestController::class, 'showTest'])->name('test.show');
Route::post('/test', [TestController::class, 'storeAnswer'])->name('test.store');
Route::get('/test-result', [TestController::class, 'calculateResult'])->name('test.result');


Route::get('/', function () {
    return view('dashboards.home');
});
Route::get('/contact', function () {
    return view('dashboards.contact');
});

Route::get('/profesional', function () {
    return view('dashboards.profesional');
});
Route::get('/tipe-kepribadian', function () {
    return view('dashboards.tipe-kepribadian');
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
Route::get('/bro', function () {
    return view('bro');
});
Route::get('/main', function () {
    return view('layouts.master');
});
Route::get('/x', function () {
    return view('x');
});
