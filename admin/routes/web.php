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

Route::get('/', 'HomeController@HomeIndex');
Route::get('/visitor', 'VisitorController@VisitorIndex');






//admin panel Slider management

Route::get('/slider', 'SliderController@SliderIndex');
Route::post('/addslider', 'SliderController@SliderAdd');
Route::get('/getsliderdata', 'SliderController@SliderData');
Route::post('/sliderdelete', 'SliderController@SliderDelete');
Route::post('/sliderdetails', 'SliderController@SliderDetailEdit');
Route::post('/sliderupdate', 'SliderController@SliderUpdate');



//admin panel Home Page Others management with social URL


Route::get('/others', 'OthersModelController@otherIndex');
Route::post('/OpeningHour', 'OthersModelController@addOpeningHour');
Route::post('/address', 'OthersModelController@addAddress');
Route::post('/phone', 'OthersModelController@addPhone');
Route::post('/email', 'OthersModelController@addEmail');
Route::post('/title', 'OthersModelController@addTitle');
Route::post('/gmap', 'OthersModelController@addGmap');
Route::post('/logo', 'OthersModelController@logoAdd');

//admin panel Home Page Social Link management
Route::get('/social', 'SocialController@SocialIndex');
Route::post('/facebook', 'SocialController@addFacebook');
Route::post('/twitter', 'SocialController@addTwitter');
Route::post('/youtube', 'SocialController@addYoutube');
Route::post('/instragram', 'SocialController@addInstragram');
Route::post('/linkin', 'SocialController@addLinkin');
Route::post('/google', 'SocialController@addGoogle');







//Message panel management

Route::get('/booking', 'bookingController@bookingIndex');
Route::get('/getBookingdata', 'bookingController@getBookingData');
Route::post('/deleteBookingData', 'bookingController@bookingDelete');

//Message panel management

Route::get('/newslatter', 'NewslatterController@newslatterIndex');
Route::get('/getnewslatter', 'NewslatterController@getNewslatterData');
 Route::post('/deletenewslatter', 'NewslatterController@newslatterDelete');




//Message panel management

Route::get('/contact', 'contactController@contactIndex');
Route::get('/getContactData', 'contactController@getContactData');
 Route::post('/deleteContactData', 'contactController@contactDelete');

//Message panel management

Route::get('/contact', 'contactController@contactIndex');
Route::get('/getContactData', 'contactController@getContactData');
 Route::post('/deleteContactData', 'contactController@contactDelete');







// Admin Panel Login Management
Route::get('/login', 'LoginController@LoginIndex');
Route::post('/onLogin', 'LoginController@onLogin');
Route::get('/logout', 'LoginController@onLogout');



// Admin Photo Gallery
Route::get('/Photo', 'PhotoController@PhotoIndex');
Route::post('/imageup', 'PhotoController@uploadImage');
Route::get('/PhotoJSON', 'PhotoController@PhotoJSON');





// Admin Photo Gallery
Route::get('/admin', 'AdminController@AdminIndex');
Route::post('/addAdmin', 'AdminController@AdminAdd');
Route::get('/getAdmindata', 'AdminController@AdminData');
Route::post('/Admindelete', 'AdminController@AdminDelete');
Route::post('/Admindetails', 'AdminController@AdminDetailEdit');
Route::post('/Adminupdate', 'AdminController@AdminUpdate');
