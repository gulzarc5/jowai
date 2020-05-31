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
route::group(['namespace'=>'Web'],function(){
    route::get('/','IndexController@index')->name('web.index');
    route::get('/Common-Number','CommonNumberController@index')->name('web.common.common');
    route::get('/Previous-Result','ResultController@index')->name('web.previous.previous');
    route::get('/Teer-Calender','CalenderController@index')->name('web.calender.calender');

    
    route::post('/contact/add','ContactController@index')->name('web.contact.add');
});


// ========== About =========
Route::get('/About', function () {
    return view('web.about.about');
})->name('web.about.about');
// ========== Dream Number =========
Route::get('/Dream-Number', function () {
    return view('web.dream.dream');
})->name('web.dream.dream');
// ========== Contact =========
Route::get('/Contact', function () {
    return view('web.contact.contact');
})->name('web.contact.contact');
