<?php


Route::group(['namespace' => 'Admin'],function(){
    Route::get('admin/login/','LoginController@showLoginForm')->name('admin.login');    
    Route::post('login', 'LoginController@adminLogin');
    Route::post('logout', 'LoginController@logout')->name('admin.logout');

    Route::group(['middleware'=>'auth:admin','prefix'=>'admin'],function(){
        Route::get('/dashboard', 'DashboardController@dashboardView')->name('admin.deshboard');
        Route::get('/result','ResultController@resultList')->name('admin.result_list');
        Route::get('/result/ajax','ResultController@resultListAjax')->name('admin.result_list_ajax');

        Route::post('insert/result/', 'ResultController@resultInsert')->name('admin.result_insert');
        Route::get('edit/result/{id}', 'ResultController@resultEdit')->name('admin.result_edit');
        Route::put('update/result./{id}', 'ResultController@resultUpdate')->name('admin.result_update');

        Route::get('common/number','CommonNumberController@numberList')->name('admin.common_number_List');
        Route::post('common/number/update','CommonNumberController@numberUpdate')->name('admin.common_number_update');

        Route::get('calender/list','CalenderController@numberList')->name('admin.calender_number_List');
        Route::get('/calender/ajax','CalenderController@calenderListAjax')->name('admin.calender_list_ajax');
        Route::post('calender/add','CalenderController@calenderAdd')->name('admin.calender_add');
        
        Route::get('/change/password/form', 'LoginController@changePasswordForm')->name('admin.change_password_form');
        Route::post('/change/password', 'LoginController@changePassword')->name('admin.change_password');
    });
});

