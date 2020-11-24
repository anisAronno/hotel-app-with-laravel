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
Route::group(['middleware' => 'loginCheck'], function () {








Route::get('/dashboard', 'HomeController@HomeIndex');
Route::get('/visitor', 'VisitorController@VisitorIndex');






//admin panel Home Page  Slider Section

Route::get('/slider', 'SliderController@SliderIndex');
Route::post('/addslider', 'SliderController@SliderAdd');
Route::get('/getsliderdata', 'SliderController@SliderData');
Route::post('/sliderdelete', 'SliderController@SliderDelete');
Route::post('/sliderdetails', 'SliderController@SliderDetailEdit');
Route::post('/sliderupdate', 'SliderController@SliderUpdate');

// Home Page About Section  Route


Route::get('/homePage', 'HomePageController@homeAboutIndex');
Route::post('/addHAtitle', 'HomePageController@addTitle');
Route::post('/addHADescription', 'HomePageController@addDescription');
Route::post('/addHAimage', 'HomePageController@imageAdd');
Route::post('/addHAimage2', 'HomePageController@imageAdd2');
Route::post('/addHAimage3', 'HomePageController@imageAdd3');
Route::post('/addResturantMenuimage', 'HomePageController@imageResturantMenuAdd');

Route::get('/getFSdata', 'HomePageController@getHomeFeaturedSpecialsData');
Route::post('/addFSdata', 'HomePageController@homeSFAdd');
Route::post('/homeFSdelete', 'HomePageController@HomeFSDelete');
Route::post('/HomeFSEdit', 'HomePageController@HomeFSEdit');
Route::post('/HomeFSUpdate', 'HomePageController@HomeFSUpdate');


Route::get('/getResturantMenudata', 'HomePageController@getHomeExclusiveSpecialsData');
Route::post('/homeResturantMenuAdd', 'HomePageController@homeResturantMenuAdd');
Route::post('/HomeEXFDelete', 'HomePageController@HomeEXFDelete');
Route::post('/HomeResturantMenuEdit', 'HomePageController@HomeResturantMenuEdit');
Route::post('/HomeResturantMenuUpdate', 'HomePageController@HomeResturantMenuUpdate');

Route::get('/getTestimonialData', 'HomePageController@getHomeTestimonialData');
Route::post('/TestimonialAdd', 'HomePageController@TestimonialAdd');
Route::post('/TestimonialDelete', 'HomePageController@HomeTestimonialDelete');
Route::post('/getTestimonialEditData', 'HomePageController@HomeTestimonialEdit');
Route::post('/TestimonilaUpdate', 'HomePageController@TestimonilaUpdate');





//Resturant Admin Route


Route::get('/resturantPage', 'ResturantController@ResturantIndex');
Route::post('/addResturantTitle', 'ResturantController@addTitle');
Route::post('/addResturantDescription', 'ResturantController@addDescription');
Route::post('/addResturantVideo', 'ResturantController@addResturantVideo');
Route::get('/getresturantImage', 'ResturantController@getResturantImageData');
Route::post('/ResturantAboutImageDelete', 'ResturantController@ResturantAboutImageDelete');
Route::post('/ResturantAboutImageAdd', 'ResturantController@ResturantAboutImageAdd');


Route::get('/getResturantMenudata', 'ResturantController@getResturantMenuData');
Route::post('/ResturantMenuAdd', 'ResturantController@ResturantMenuAdd');
Route::post('/ResturantmenuDelete', 'ResturantController@ResturantmenuDelete');
Route::post('/getResturantmenuEditData', 'ResturantController@getResturantmenuEditData');
Route::post('/ResturantMenuUpdate', 'ResturantController@ResturantMenuUpdate');




//admin panel Facilities management 
Route::get('/Facilities', 'AdminFacilitiesController@FacilitiesIndex');
Route::get('/getFacilitiesData', 'AdminFacilitiesController@getFacilitiesData');
Route::post('/FacilitiesAdd', 'AdminFacilitiesController@FacilitiesAdd');
Route::post('/FacilitiesDelete', 'AdminFacilitiesController@FacilitiesDelete');
Route::post('/FacilitiesEdit', 'AdminFacilitiesController@FacilitiesEdit');
Route::post('/FacilitiesUpdate', 'AdminFacilitiesController@FacilitiesUpdate');





Route::get('/getFacilitiesImageData', 'AdminFacilitiesController@getFacilitiesImageData');
Route::post('/FacilitiesImageDelete', 'AdminFacilitiesController@FacilitiesImageDelete');
Route::post('/FacilitiesImageAdd', 'AdminFacilitiesController@FacilitiesImageAdd');






//admin panel Room management 

Route::get('/admin/rooms','RoomController@index')->name('room.Index');
Route::get('/getRoomData','RoomController@getRoomData');
Route::post('/RoomAdd','RoomController@RoomAdd');
Route::post('/RoomDelete','RoomController@RoomDelete');
Route::post('/RoomEdit','RoomController@RoomEdit');
Route::post('/RoomUpdate','RoomController@RoomUpdate');



Route::get('/getRoomImageData', 'RoomController@getRoomImageData');
Route::post('/RoomImageDelete', 'RoomController@RoomImageDelete');
Route::post('/RoomImageAdd', 'RoomController@RoomImageAdd');

Route::get('/getRoomFacilityData', 'RoomController@getRoomFacilityData');
Route::post('/RoomFacilityDelete', 'RoomController@RoomFacilityDelete');
Route::post('/RoomFacilityAdd', 'RoomController@RoomFacilityAdd');









//admin panel Home Page Others management with social URL


Route::get('/others', 'OthersModelController@otherIndex');
Route::post('/OpeningHour', 'OthersModelController@addOpeningHour');
Route::post('/address', 'OthersModelController@addAddress');
Route::post('/phone', 'OthersModelController@addPhone');
Route::post('/phone2', 'OthersModelController@addPhone2');
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




// About Page Route
Route::get('/adminAbout', 'AboutController@AboutIndex');
Route::post('/addAboutImage', 'AboutController@imageAdd');
Route::post('/addAboutTitle', 'AboutController@addTitle');
Route::post('/addDescription', 'AboutController@addDescription');
Route::post('/addFbLike', 'AboutController@addFbLike');
Route::post('/addTwitter', 'AboutController@addTwitter');
Route::post('/addYoutube', 'AboutController@addYoutube');
Route::post('/addLinkedIn', 'AboutController@addLinkedIn');
Route::post('/addBooking', 'AboutController@addBooking');
Route::get('/getESData', 'AboutController@getExtraServicesData');
Route::post('/addES', 'AboutController@aboutESAdd');
Route::post('/aboutESdelete', 'AboutController@AboutESDelete');
Route::post('/AboutESDetails', 'AboutController@AboutDetailEdit');
Route::post('/AboutESUpdate', 'AboutController@AboutESUpdate');








// // Admin Photo Gallery
// Route::get('/Photo', 'PhotoController@PhotoIndex');
// Route::post('/imageup', 'PhotoController@uploadImage');
// Route::get('/PhotoJSON', 'PhotoController@PhotoJSON');





// Admin Photo Gallery
Route::get('/admin', 'AdminController@AdminIndex');
Route::post('/addAdmin', 'AdminController@AdminAdd');
Route::get('/getAdmindata', 'AdminController@AdminData');
Route::post('/Admindelete', 'AdminController@AdminDelete');
Route::post('/Admindetails', 'AdminController@AdminDetailEdit');
Route::post('/Adminupdate', 'AdminController@AdminUpdate');
});



// Admin Panel Login Management
Route::get('/login', 'LoginController@LoginIndex')->name('login');
Route::post('/onLogin', 'LoginController@onLogin');
Route::get('/logout', 'LoginController@onLogout');






// Client Route
Route::get('/', 'client\HomeController@HomeIndex');
Route::post('/bookingSend', 'client\HomeController@bookingSend')->name('bookiongSubmit');
Route::post('/newsLatterSend', 'client\HomeController@newsLatterSend')->name('newsLatterSend');
Route::get('/contactPage', 'client\ContactController@contactIndex');
Route::post('/contactSend', 'client\ContactController@contactSend')->name('contactSend');
Route::get('/about', 'client\AboutController@aboutIndex');
Route::get('/rooms', 'client\roomsController@roomIndex')->name('rooms');
Route::get('/resturant', 'client\resturantController@resturantIndex');
Route::get('/blog', 'client\blogController@blogIndex');
Route::get('/single-blog', 'client\singleBlogeController@singleBlogIndex');
Route::get('/single-facility-{facilityId}', 'client\singleFacilityController@singleFacilityIndex')->name('singleFacility');
Route::get('/single-room-{roomId}', 'client\singleRoomController@singleRoomIndex')->name('singleRoom');







//Clear Cache facade value:
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//Reoptimized class loader:
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize:clear');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});

//Clear Config cache:
Route::get('/config-clear', function() {
    $exitCode = Artisan::call('config:clear');
    return '<h1> Config cleared</h1>';
});



Route::get("/storage-link", function () {
    $targetFolder = storage_path("app/public");
    $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage';
    symlink($targetFolder, $linkFolder);
});

