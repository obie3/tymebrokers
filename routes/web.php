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

Route::get('/', 'LoginController@index')->name('home');

Route::group(['prefix' => 'auth'], function() {
    Route::get('/register', 'RegisterController@register')->name('auth.register.get');
    Route::post('/register', 'RegisterController@store')->name('auth.register.post');
    Route::get('/login', 'LoginController@index')->name('auth.login.get');
    Route::post('/login', 'LoginController@login')->name('auth.login.post');
    Route::get('/logout', 'LoginController@logout')->name('auth.logout');
    Route::get('/user/login', 'LoginController@loginPage')->name('auth.login.page');

});

Route::group(['prefix' => 'admin'], function() {
    Route::get('/', 'AdminController@index')->name('admin.index');
    Route::get('/create', 'AdminController@create')->name('admin.create');
    Route::post('/create/user', 'AdminController@store')->name('admin.store');
    Route::post('/acccount/modify', 'AdminController@modify')->name('admin.flag.account');
    Route::get('/user/management', 'AdminController@users')->name('admin.users');
    Route::get('/{id}/edit', 'AdminController@edit')->name('admin.edit');
    Route::post('account/{id}', 'AdminController@deposit')->name('admin.update.account');
    Route::get('password/update', 'AdminController@changePassword')->name('admin.change.password');
    Route::post('password/update', 'AdminController@updatePassword')->name('admin.update.password');
    Route::get('transactions/credit', 'CreditController@credits')->name('admin.credits');
    Route::get('transactions/edit/{id}', 'CreditController@editCreditDetails')->name('credits.edit');
    Route::post('transactions/modify', 'CreditController@updateTransaction')->name('credits.modify');

    Route::get('transactions/debit', 'DebitController@debits')->name('admin.debits');
    // Route::get('transactions/debit/details', 'DebitController@debits')->name('admin.debits');
    Route::get('manage/active/accounts', 'AdminController@activeAccounts')->name('admin.active.accounts');
    Route::get('manage/disabled/accounts', 'AdminController@disabledAccounts')->name('admin.disabled.accounts');



});

Route::group(['prefix' => 'user'], function() {
    Route::get('/', 'UserController@index')->name('user.index');
    Route::get('password/update', 'UserController@changePassword')->name('user.change.password');
    Route::post('password/update', 'UserController@updatePassword')->name('user.update.password');
    Route::post('account/{id}/', 'UserController@deposit')->name('user.update.account');
    Route::post('otp/request', 'UserController@requestOtp')->name('user.request.otp');
    Route::post('transfer/', 'UserController@fundTransfer')->name('user.funds.transfer');
    Route::get('transactions/credits', 'CreditController@userCredits')->name('user.credits');
    Route::get('transactions/debits', 'DebitController@userDebits')->name('user.debits');
    Route::post('profile/update', 'UserController@updateProfile')->name('user.profile.update');
    Route::get('funds/transfer', 'UserController@getTransfer')->name('user.transfer');
    Route::get('/profile', 'UserController@profile')->name('user.profile');
});
