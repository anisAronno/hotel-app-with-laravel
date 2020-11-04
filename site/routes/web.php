<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Auth;
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
// Client Route

Route::get('/', 'HomeController@HomeIndex')->name('home');
Route::post('/booking', 'HomeController@bookingSend')->name('bookiongSubmit');
Route::post('/newsLatterSend', 'HomeController@newsLatterSend')->name('newsLatterSend');
Route::get('/contact', 'ContactController@contactIndex');
Route::post('/contactSend', 'ContactController@contactSend')->name('contactSend');
Route::get('/about', 'AboutController@aboutIndex');
Route::get('/rooms', 'roomsController@roomIndex')->name('rooms');
Route::get('/resturant', 'resturantController@resturantIndex');
Route::get('/blog', 'blogController@blogIndex');
Route::get('/single-blog', 'singleBlogeController@singleBlogIndex');
Route::get('/single-facility-{facilityId}', 'singleFacilityController@singleFacilityIndex')->name('singleFacility');
Route::get('/single-room-{roomId}', 'singleRoomController@singleRoomIndex')->name('singleRoom');

