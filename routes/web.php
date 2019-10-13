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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/book-bank','PagesController@book_bank');
Route::get('/book-library','PagesController@book_library');
Route::get('/contact','PagesController@contact');
Route::get('/gallery','PagesController@gallery');
Route::get('/notice-single','PagesController@notice_single');
Route::get('/notice','PagesController@notice');
Route::get('/admin','PagesController@admin_');
Route::get('/add-staff','PagesController@add_staff');

Route::resource('books','BooksController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
