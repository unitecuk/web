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

//Guest routes
Route::get('/', function () {
    return view('guest');
});
Route::get('/chatbot_mvp', function () {
    return view('chatbot');
});

Route::get('/privacy', function () {
    return view('guest.privacy');
});
Route::get('/mission', function () {
    return view("guest.mission");
});
Route::get('/blogs', function () {
    return view("guest.blogs");
});
Route::get('/terms', function () {
    return view("guest.terms");
});
Route::get('/cookies_policy', function () {
    return view("guest.cookies_policies");
});
Route::get('/privacy', function () {
    return view("guest.privacy");
});
Route::get('/projects', function () {
    return view("guest.projects");
});
Route::get('/about_us', function () {
    return view("guest.about_us");
});
Route::get('/support', function () {
    return view("guest.support");
});
Route::get('/team', function () {
    return view("guest.team");
});


//Authenticated routes
Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
