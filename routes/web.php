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

// Route::get('/', function () {
//     return view('welcome');
// });


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Halaman Home 
Route::get('/', function(){
    return view('home');
});

// Halaman Products (Route prefix)
Route::prefix('product')->group(function (){
    Route::get('product', function(){
        return view('product');
    });
});

// Halaman News (route param)
Route::get('/news/{id}', function($id){
    return view('news', compact('id'));
});

// Halaman Program (route prefix)
Route::prefix('program')->group(function (){
    Route::get('program', function(){
        return view('program');
    });
});

// Halaman About Us  (route biasa)
Route::get('about-us', function(){
    return view('about-us');
});

// Halaman Contact Us (route resource only)
use App\Http\Controllers\ContactUsController;

Route::resource('contact-us', ContactUsController::class);