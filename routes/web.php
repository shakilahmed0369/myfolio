<?php

use Illuminate\Http\Request;
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


/**
 * Frontend routs
*/


Route::group(['namespace' => 'Frontend'], function () {
    // About route
    Route::get('/', 'FrontendController@about')->name('frontend.about');

    // Skill route
    Route::get('/resume', 'FrontendController@resume')->name('frontend.resume');

    //works route
    Route::get('/works', 'FrontendController@works')->name('frontend.works');
    Route::get('/show-work/{id}', 'FrontendController@show_work')->name('frontend.show.work');

    // Blogs route
    Route::get('/blog', 'FrontendController@blog')->name('frontend.blog');
    Route::get('/show-blog/{id}', 'FrontendController@show_blog')->name('frontend.show.blog');

    // Contact route
    Route::get('/contact', 'FrontendController@contact')->name('frontend.contact');
    Route::post('/email', 'FrontendController@sendMail')->name('frontend.send.mail');

});




/**
 * Backend routes
 */

// Auth route
Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {

    // dashboard route
    Route::get('/', 'DashboardController@index');

    // Profile route
    Route::resource('/profile-settings', 'ProfileController', ['as' => 'admin']);

    // profile social links route
    Route::resource('/profile-sociallink', 'SocialLinkController', ['as' => 'admin']);

    // Account route
    Route::get('/account-setting/{id}/edit', 'AccountController@edit')->name('admin.account.edit');
    Route::post('/account-setting/{id}/update', 'AccountController@update')->name('admin.account.update');

    // about me route
    Route::resource('/about-me', 'AboutController', ['as' => 'admin']);

    // my services route
    Route::resource('/services', 'ServicesController', ['as' => 'admin']);

    // fun fact route
    Route::resource('/fun-fact', 'FunfactController', ['as' => 'admin']);

    // clients section route
    Route::resource('/clients', 'ClientController', ['as' => 'admin']);

    // Testimonial route
    Route::resource('/testimonial', 'TestimonialController', ['as' => 'admin']);

    // Knowledges route
    Route::resource('/knowledge', 'KnowledgeController', ['as' => 'admin']);

    // Technology route
    Route::resource('/technology', 'TechnologyController', ['as' => 'admin']);

    // work categories route
    Route::resource('/work-category', 'WorkCatController', ['as' => 'admin']);

    // works section route
    Route::resource('/works', 'WorkController', ['as' => 'admin']);

    //Blog category route
    Route::resource('/blog-category', 'BlogCatController', ['as' => 'admin']);

    //Blog route
    Route::resource('/blog-post', 'BlogPostController', ['as' => 'admin']);

    //Contact route
    Route::resource('/contact', 'ContactController', ['as' => 'admin']);

    // Settings route
    Route::resource('/settings', 'SettingController', ['as' => 'admin']);
});
