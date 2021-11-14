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

use App\Http\Controllers\Product_controller;
use App\Http\Controllers\Information_controller;
use App\Http\Controllers\Connect_controller;
use App\Http\Controllers\Category_controller;

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/archive', function () {
    return view('archive');
});
Route::get('/blog-single', function () {
    return view('blog-single');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/event-single', function () {
    return view('event-single');
});
Route::get('/event', function () {
    return view('event');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/my-account', function () {
    return view('my-account');
});
Route::get('/recipe-index', function () {
    return view('recipe-index');
});
Route::get('/recipe-single', function () {
    return view('recipe-single');
});
Route::get('/recipes', function () {
    return view('recipes');
});
Route::get('/submit-recipe', function () {
    return view('submit-recipe');
});
Route::get('/checkout', function () {
    return view('checkout');
});

//Route::get('/test', [Product_controller::class, 'index']);
Route::get('/', [Information_controller::class, 'index']);
Route::get('/recipes', [Information_controller::class, 'recipes']);
Route::get('/event', [Information_controller::class, 'event']);
Route::get('/blog', [Information_controller::class, 'blog']);
Route::get('/contact', [Connect_controller::class, 'contact']);
Route::get('/faq', [Connect_controller::class, 'faq']);
Route::get('/my-account', [Connect_controller::class, 'myaccount']);
Route::get('/login', [Connect_controller::class, 'login']);
Route::get('/checkout', [Connect_controller::class, 'checkout']);
Route::get('/about', [Connect_controller::class, 'about']);
Route::get('/cat', [Category_controller::class, 'index']);
Route::get('/recipe_single', [Information_controller::class, 'recipe_single']);
Route::get('/event_single', [Information_controller::class, 'event_single']);
