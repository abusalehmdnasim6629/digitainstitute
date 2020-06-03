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

Route::get('/n', function () {
    return view('welcome');
});
// Route::get('/nav', function () {
//     return view('nav');
// });

Auth::routes(['verify' => true]);
Route::get('/', 'ContentController@getContent')->name('SmartTraining');


Route::get('/admin-login', 'AdminController@login')->name('admin');
Route::get('/admin-registration', 'AdminController@registration')->name('admin');
Route::post('/save-admin', 'AdminController@save')->name('admin');
Route::post('/login-check', 'AdminController@login_check')->name('admin');
Route::get('/logout', 'AdminController@logout')->name('admin');





Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/add/SmartTraining', 'SmartTrainingController@index')->name('SmartTraining');
Route::post('/save/SmartTraining', 'SmartTrainingController@save')->name('SmartTraining');

//training controller
Route::get('/add/trainingCategory', 'TrainingController@index')->name('trainingCategory');
Route::post('/save/trainingCategory', 'TrainingController@save')->name('trainingCategory');

//practical content
Route::get('/add/practicalContent', 'PracticalController@index')->name('PracticalController');
Route::post('/save/practicalContent', 'PracticalController@save')->name('PracticalController');

//banner
Route::get('/add/banner', 'BannerController@index')->name('Banner');
Route::post('/save/banner', 'BannerController@save')->name('Banner');

//event
Route::get('/add/event', 'EventController@index')->name('Event');
Route::post('/save/event', 'EventController@save')->name('Event');

//branding
Route::get('/branding-training-course-bd', 'BrandController@index')->name('brand');

//employer branding 
Route::get('/employer-branding-training-course-bd', 'BrandController@employee')->name('brand');

//personal branding
Route::get('/personal-branding-training-course-bd', 'BrandController@personal')->name('brand');

//digital
Route::get('/digital-marketing-training-course-bd', 'DigitalController@index')->name('digital');

//content

Route::get('/content-marketing-course-bd', 'DigitalController@content')->name('digital');

//seo

Route::get('/seo-training-course-bd', 'DigitalController@seo')->name('digital');

//social
Route::get('/social-media-marketing-training-course-bd', 'DigitalController@social')->name('digital');

//facebook
Route::get('/facebook-marketing-training-course-bd', 'DigitalController@facebook')->name('digital');


//web design
Route::get('/web-design-training-course-bd', 'ItController@design')->name('it');
//wordpress
Route::get('/wordpress-training-course-bd', 'ItController@wordpress')->name('it');









