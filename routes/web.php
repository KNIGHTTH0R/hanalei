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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'MarketingController@index')->name('marketing.homepage');
Route::get('/mailinglist', 'MarketingController@show')->name('marketing.prospect.show');
Route::post('/mailinglist', 'MarketingController@create')->name('marketing.prospect.create');

Route::get('/privacy', 'LegalController@showPrivacy')->name('terms');
Route::get('/terms', 'LegalController@showTerms')->name('privacy');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
