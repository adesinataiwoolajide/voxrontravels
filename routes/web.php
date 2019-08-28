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

// Route::get('/', function () {
//     return view('welcome');
// });

 $date = date("Y-m-d");

Route::get("/", "PageController@index")->name('index');
Route::get("/aboutus/", "PageController@aboutus")->name('aboutus');
Route::get("/contactus/", "PageController@contactus")->name('contact');
Route::get("/our_services/", "PageController@services")->name('services');
Route::get("/faq/", "PageController@faq")->name('faq');
Route::get("/blog/", "PageController@blog")->name('blog');
Route::get("/team/", "PageController@team")->name('team');
Route::get("/blog/$date/dubai-must-see-tourist-attractions/", "PageController@dubai")->name("dubai");
