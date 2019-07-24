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
Route::get('/login', 'LoginController@getLogin')->name('get-login');
Route::post('/login', 'LoginController@postLogin')->name('post-login');

// <<<<<<< HEAD
Route::get('/error', 'UserController@getError')->name('error');

Route::group(['middleware' => 'login'], function() {

    Route::group(['middleware' => 'permission'], function() {
        
        Route::get('/bankstatistics', 'StatisticsController@getBankStatistics')->name('get_bank_statistics');
        Route::get('/cardstatistics', 'StatisticsController@getCardStatistics')->name('get_card_statistics');
        Route::get('/cashstatistics', 'StatisticsController@getCashStatistics')->name('get_cash_statistics');
        Route::get('/', 'HomeController@getHome')->name('get_home');
    
        Route::get('/action', 'ActionController@getListAction')->name('get-action');
        // Route::get('/list_all_action', 'ActionController@getListAllAction')->name('get-list-action');
// =======
// Route::group(['middleware' => 'login'], function(){
//     Route::get('/error', 'UserController@getError')->name('error');
//     Route::get('/bankstatistics', 'StatisticsController@getBankStatistics')->name('get_bank_statistics');
//     Route::get('/cardstatistics', 'StatisticsController@getCardStatistics')->name('get_card_statistics');
//     Route::get('/cashstatistics', 'StatisticsController@getCashStatistics')->name('get_cash_statistics');
//     Route::get('/', 'HomeController@getHome')->name('get_home');
//     Route::group(['middleware' => 'permission'], function() {
//         Route::get('/action', 'ActionController@getListAction')->name('get-list-action');
// >>>>>>> 2a6d3f5b21afdc3e238fcea35c106296778c75e0
        Route::get('/profile', 'UserController@getProfileUser')->name('get-profile');
        Route::post('/profile', 'UserController@postProfileUser')->name('post-profile');
        Route::get('/change_password', 'UserController@getChangePassword')->name('get-change-password');
        Route::post('/change_password', 'UserController@postChangePassword')->name('post-change-password');
        Route::get('/listuser', 'UserController@getListUser')->name('get-list-user');
        Route::get('/adduser', 'UserController@getAddUser')->name('get-add-user');
        Route::post('/adduser', 'UserController@postAddUser')->name('post-add-user');
        Route::get('/edituser', 'UserController@getEditUser')->name('get-edit-user');
        Route::post('/edituser', 'UserController@postEditUser')->name('post-edit-user');
        Route::get('/deleteuser', 'UserController@getDeleteUser')->name('get-delete-user');
    });
});

