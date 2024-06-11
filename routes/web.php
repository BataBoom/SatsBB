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

Route::get('/test', function() {
   dd(\App\Invoice::notPaid()->get());
});

Route::group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin'], function () {

    //User
    Route::get('/user', 'UserController@info');
    Route::get('/user/edit', 'UserController@edit');
    Route::post('/user/edit', 'UserController@store');

    //Payments
    Route::get('/payments', 'InvoicesController@payments');
    Route::get('payments/site/{site}', 'InvoicesController@payments');
    Route::get('/payments/user-{id}', 'InvoicesController@getUserPayments');
    Route::get('/payments/{invoice}', 'InvoicesController@getPaymentInfo');

    //invoices
    Route::get('/invoices', 'InvoicesController@invoices');
    Route::get('invoices/site/{site}', 'InvoicesController@invoices');
    Route::get('invoices/{invoice}/paid', 'InvoicesController@setPaymentStatus');
    Route::get('/invoices/user-{id}', 'InvoicesController@getUserPayments');
    Route::get('/invoices/{invoice}', 'InvoicesController@getPaymentInfo');

    //Users management
    Route::group(['middleware' => 'checkPermissions'], function () {
        Route::get('managers', 'UserController@index')->name('managers.index');
        Route::get('managers/edit/{user?}', 'UserController@showEditForm')->name('managers.edit');
        Route::post('managers/edit/{user?}', 'UserController@storeUserInformation')->name('managers.submit');
        Route::get('managers/delete/{user}', 'UserController@delete')->name('managers.delete');

        Route::get('sites', 'SitesController@index');
        Route::get('sites/view/{site}', 'SitesController@details');
        Route::get('sites/edit/{site?}', 'SitesController@showEditForm');
        Route::post('sites/edit/{site?}', 'SitesController@storeSiteInformation');
        Route::get('sites/delete/{site}', 'SitesController@delete');
    });

    //Sites


    //Search
    Route::match(['GET', 'POST'], 'search', 'SearchController@doSearch');

});


//Front
Route::get('/invoice/{invoice}/{method?}', 'InvoicesController@invoice');
Route::get('/getPayments', 'IncomingPaymentsController@getPayments');

//Auth
Route::get('login', ['as' => 'login','uses' => 'Auth\LoginController@showLoginForm']);
Route::post('login', ['as' => '','uses' => 'Auth\LoginController@login']);
Route::post('logout', ['as' => 'logout','uses' => 'Auth\LoginController@logout']);

Route::get('/home', 'HomeController@index')->name('home');

//QR code
Route::get('qr-code', function () {
    return \LaravelQRCode\Facades\QRCode::text((request()->input('wls') == 1 ? 'bitcoin:' : '') . request()->input('hash'))->setSize(6)->png();
});