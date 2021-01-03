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
    return view('welcome');
});

Route::get('/cs', function () {
    return view('contact');
});

Route::get('/ab', function () {
    return view('about');
});

Route::get('/upload', function () {
    return view('upload');
});

Route::get('/projectviews', function () {
    return view('projectviews');
});



Route::post('/upload/store',
[App\Http\Controllers\ProjectViewController::class, 'store'])->name('addProject');//client 

Route::get('/projectviews', [App\Http\Controllers\ProjectViewController::class, 'show'])->name('projectviews');//project view



Route::get('/myupload', [App\Http\Controllers\ProjectViewController::class, 'showupload'])->name('myupload');

Route::get('/deleteproject/{id}', [App\Http\Controllers\ProjectViewController::class, 'delete'])->name('deleteproject');


Auth::routes(); 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
