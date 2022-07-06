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
    return view('dist.index');
});
Route::get('/cursussen', function () {
    return view('dist.Cursussen');
});
Route::get('/basiscursus', function () {
    return view('dist.Basiscursus');
});
Route::get('/bijscholing', function () {
    return view('dist.Bijscholing');
});
Route::get('/cursusblog', function () {
    return view('dist.Cursusblog');
});

Route::get('/cursusen', function () {
    return view('dist.Cursusen');
})->name("cursusen");

Route::get('/artikelen', function () {
    return view('dist.Artikelen');
})->name("artikelen");

Route::get('/imkervereniging', function () {
    return view('dist.Imkervereniging');
})->name("imkervereniging");

Route::get('/niewesachief', function () {
    return view('dist.Niewesachief');
})->name("niewesachief");

Route::get('/voorimkers', function () {
    return view('dist.vooimkers');
})->name("voorimkers");

Route::get('/contact', function () {
    return view('dist.Contact');
})->name("contact");


Route::get('/admin', function () {
    return view('admin.admin');
})->middleware(['auth'])->name('admin');

Route::get('/admin/posts', function () {
    return view('admin.posts');
})->middleware(['auth'])->name('admin.posts');

require __DIR__.'/auth.php';
require __DIR__.'/posts.php';


