<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Menampilkan Halaman Home
Route::get('/home', function () {
    return view('home');
});


// Menampilkan halaman Pruduct
Route::prefix('products')->group(function(){
    Route::get('category',function(){
        return view('product');
    });
});

//Menampilkan halaman news
Route::get('news/{title}', function ($title) {
    return view('news');
});

// Menampilkan Halaman Program
Route::prefix('')->group(function(){
    Route::get('program',function(){
        return view('program');
    });
}); 

// Menampilkan Halaman About-us
Route::get('/about-us', function () {
    return view('about-us');
});

// menampilkan Halaman Contact-us
Route::resource('contact-us', ContactUsController::class)->only([
    'index',
]);