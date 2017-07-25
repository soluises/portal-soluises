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

/**
 * Login Route
 */
Route::get('/login', 'LoginController');

/**
 * Register Route
 */
Route::get('/register', 'RegisterController');

/**
 * Home Route
 */
Route::get('/', function () {
    return view('index');
});

/**
 * About Route
 */
Route::get('/about', function () {
    return view('about');
});

/**
 * Explore Route
 */
Route::get('/explore', function () {
    return view('explore');
});

/**
 * Supporters(Apoiadores) Route
 */
Route::get('/supporters', function () {
    return view('supporters');
});

/**
 * Investors(Investidores) Route
 */
Route::get('/investors', function () {
    return view('investors');
});

/**
 * Maintainers Route
 */
Route::get('/maintainers', function () {
    return view('maintainers');
});

/**
 * FAQ YOU! Route
 */
Route::get('/faqyou', function () {
    return view('faqyou');
});

/**
 * Disclaimer Route
 */
Route::get('/disclaimer', function () {
    return view('disclaimer');
});

/**
 * More Route
 */
Route::get('/more', function () {
    return view('more');
});

/**
 * Blog Route
 */
Route::get('/blog', function () {
    return view('blog');
});

/**
 * Contact Route
 */
Route::get('/contact', function () {
    return view('contact');
});
