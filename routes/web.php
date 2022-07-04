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


Route::get('/admin', function () {
    return view('admin.admin');
})->middleware(['auth'])->name('admin');

Route::get('/admin/posts', function () {
    return view('admin.posts');
})->middleware(['auth'])->name('admin.posts');

require __DIR__.'/auth.php';
require __DIR__.'/posts.php';


