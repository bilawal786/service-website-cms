<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'Frontend\FrontendController@index')->name('front.index');
Route::get('/contact', 'Frontend\FrontendController@contact')->name('front.contact');
Route::get('/about', 'Frontend\FrontendController@about')->name('front.about');
Route::resource('/category', 'Backend\CategoryController');
Route::get('/generalSettings', 'Backend\SettingsController@index')->name('general.settings');
Route::post('/updateSettings', 'Backend\SettingsController@update')->name('update.settings');
Route::get('/website-images', 'Backend\SettingsController@websiteImages')->name('website.images');
Route::post('/updateImages', 'Backend\SettingsController@updateWebsiteImages')->name('update.images');
Route::get('/services','Backend\ServicesController@index')->name('services');
Route::get('/createservice','Backend\ServicesController@create')->name('service.create');
Route::post('storeservice','Backend\ServicesController@store')->name('service.store');
Route::get('deleteservice/{id}','Backend\ServicesController@deleteservice')->name('service.delete');
Route::get('editservice/{id}','Backend\ServicesController@editservice')->name('service.edit');
Route::post('updateservice/{id}','Backend\ServicesController@updateservice')->name('service.update');
Route::get('service-details/{id}','Frontend\FrontendController@servicedetails')->name('service.details');
Route::resource('/project', 'Backend\ProjectController');
Route::get('/project-details/{id}','Frontend\FrontendController@projectdetails')->name('project.details');
Route::resource('/estimate','Backend\EstimateController');
Route::post('getservices','Backend\EstimateController@ajax');
Route::get('/estimate/print/{id}', 'Backend\EstimateController@print')->name('print');
Route::get('invoice-print/{id}','Backend\EstimateController@invoiceprint')->name('print.invoice');
Route::post('email-query','Frontend\FrontendController@emailquery')->name('email.query');
Route::post('email-queryservice','Frontend\FrontendController@emailqueryservice')->name('email.queryservice');
Route::resource('/queries','Backend\QueryController');
Route::post('updatequerystatus','Backend\QueryController@querystatus');
Route::post('searchbydate','Backend\QueryController@datesearch')->name('search.bydate');
Route::resource('/blogs','Backend\BlogController');
Route::get('/blog-details/{id}','Frontend\FrontendController@blogdetails')->name('blog.details');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

