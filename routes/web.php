<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\merchants;
use App\Http\Controllers\MerchantFormController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('/m-atm', function () {
    return view('m-atm');
});

Route::get('/warehouse', function () {
    return view('warehouse');
});

Route::get('/citizen-services', function () {
    return view('citizen-services');
});

Route::get('/district', function () {
    return view('district');
});
Route::get('/merchant',[merchants::class, 'index'])->name('merchant');

Route::get('/bfsi', function () {
    return view('bfsi');
});
Route::get('/warehousing', function () {
    return view('warehousing');
});

Route::get('/banking', function () {
    return view('banking');
});
Route::get('/cash', function () {
    return view('cash');
});
Route::get('/payments', function () {
    return view('payments');
});
Route::get('/investments', function () {
    return view('investments');
});

Route::post('/contact',[ContactController::class, 'store'])->name('contact.store');

Route::get('/merchant', [MerchantFormController::class, 'index'])->name('merchant');
Route::post('/merchant', [MerchantFormController::class, 'submit'])->name('form.submit');
Route::get('/districts/{stateId}', [MerchantFormController::class, 'getDistricts'])->name('districts.get');

