<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\PostControler;
use App\Models\post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterControler;
use App\Http\Controllers\AccountController;
use App\Models\Category;
use App\Models\User;
use App\Http\Controllers\PendaftaranController;
use App\Models\pendaftaran;

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

Route::get('/home', function () {
    return view('Home', [
        "title" => "Home",
        "active" => "home",

    ]);
});

Route::get('/about', function () {
    return view('About', [
        "title" => "About",
    ]);
});



Route::get('/posts', [PostControler::class, 'index']);
Route::get('posts/{post:slug}', [PostControler::class,'show']);


Route::get('/authors/{author:username}', function(User $author){
    return view('posts', [
        'title' => "Post By Author : $author->name",
        'posts' => $author->posts->load('category','author'),
    ]);
});


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterControler::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterControler::class, 'store']);

Route::get('/dashboard/account', [AccountController::class, 'index'])->middleware('auth');
Route::get('/dashboard/account/report', [AccountController::class, 'report'])->middleware('auth'); 

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('auth');

Route::get('/pendaftaran', [PendaftaranController::class, 'index']);
Route::post('/pendaftaran', [PendaftaranController::class, 'store']);
