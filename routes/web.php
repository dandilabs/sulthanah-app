<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;

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

Route::get('/', 'App\Http\Controllers\BlogController@blog');
Route::get('/about-me','App\Http\Controllers\BlogController@about');

Route::get('/contact-information','App\Http\Controllers\BlogController@contact')->name('contacts.index');
Route::post('/contact_proses','App\Http\Controllers\BlogController@contact_proses');

Route::get('/list-category/{category}','App\Http\Controllers\BlogController@list_category')->name('blog.category');
Route::get('/cari','App\Http\Controllers\BlogController@cari')->name('blog.cari');
// Route::get('/isi-post','App\Http\Controllers\BlogController@isipost');
// Route::get('/isi-post', function() {
//     return view('blog.isi_post');
// });
Route::get('/isi-post/{slug}', 'App\Http\Controllers\BlogController@isi_blog')->name('blog.isi');
Route::get('/list-post', 'App\Http\Controllers\BlogController@list_post')->name('blog.list');
Route::get('/admin/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/admin/delete', 'App\Http\Controllers\PostController@tampil_hapus')->name('post.delete');
    Route::get('/admin/restore/{id}', 'App\Http\Controllers\PostController@restore')->name('post.restore');
    Route::delete('/admin/kill/{id}','App\Http\Controllers\PostController@kill')->name('post.kill');
    Route::resource('/admin/category', CategoryController::class);
    Route::resource('/admin/tags', TagsController::class);
    Route::resource('/admin/post', PostController::class);
    Route::resource('/admin/users', UserController::class);
    Route::resource('/admin/contact',ContactController::class);

});

require __DIR__.'/auth.php';