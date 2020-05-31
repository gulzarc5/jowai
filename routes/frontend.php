<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ========== Index =========
Route::get('/', function () {
    return view('web.index');
})->name('web.index');

// ========== About =========
Route::get('/About', function () {
    return view('web.about.about');
})->name('web.about.about');

// ========== Common Number =========
Route::get('/Common-Number', function () {
    return view('web.common.common');
})->name('web.common.common');

// ========== Dream Number =========
Route::get('/Dream-Number', function () {
    return view('web.dream.dream');
})->name('web.dream.dream');

// ========== Previous Result =========
Route::get('/Previous-Result', function () {
    return view('web.previous.previous');
})->name('web.previous.previous');

// ========== Teer Calender =========
Route::get('/Teer-Calender', function () {
    return view('web.calender.calender');
})->name('web.calender.calender');

// ========== Contact =========
Route::get('/Contact', function () {
    return view('web.contact.contact');
})->name('web.contact.contact');
