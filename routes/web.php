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

Route::get('/', function () {
    return view('mainPage.mainPage');
});

Route::get('/login', function () {
    return view('authen_page.login');
});

Route::get('/register', function () {
    return view('authen_page.register');
});

Route::get('/contact', function () {
    return view('contactPage.contactPage');
});

Route::get('/tour/add', function () {
    return view('add_tour.tour_template');
});

Route::post('/tour/load', function () {
    return view('add_tour.load_tour');
});

Route::get('/tour/{tour_id}', function ($tour_id) {
    return view('tour_page.tour_detail', ['tour_id' => $tour_id]);
});

Route::get('/tour/{tour_id}/book', function ($tour_id) {
    return view('tour_page.tour_book', ['tour_id' => $tour_id]);
});

Route::get('/tour/{tour_id}/book/{book_id}', function ($tour_id, $book_id) {
    return view('tour_page.book_detail', ['tour_id' => $tour_id, 'book_id' => $book_id]);
});