<?php

use App\Http\Controllers\ESportController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
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



Route::get('/', [PostController::class,'index'])->name('home');


Route::get('posts/{post:slug}', [PostController::class,'show'])->name('post.show');
Route::middleware('auth')->group(function () {
    # Post
    Route::get('post/new', [PostController::class,'create'])->name('post.create');
    Route::post('post/new', [PostController::class,'store']);
    Route::get('post/edit/{post:slug}', [PostController::class,'edit'])->name('post.edit');
    Route::put('post/edit/{post:slug}', [PostController::class,'update']);
    Route::delete('post/delete/{post:slug}', [PostController::class,'destroy'])->name('post.delete');
});




Route::get('teams/{team:slug}', [TeamController::class,'show'])->name('team.show');
Route::middleware('admin')->group(function () {
    # Team
    Route::get('team/new', [TeamController::class,'create'])->name('team.create');
    Route::post('team/new', [TeamController::class,'store']);
    Route::get('team/edit/{team:slug}', [TeamController::class,'edit'])->name('team.edit');
    Route::put('team/edit/{team:slug}', [TeamController::class,'update']);
    Route::delete('team/edit/{team:slug}', [TeamController::class,'destroy'])->name('team.delete');
});


Route::get('esports/{eSport:slug}', [ESportController::class,'show'])->name('esport.show');
Route::middleware('admin')->group(function () {
    # ESport
    Route::get('esport/new', [ESportController::class,'create'])->name('esport.create');
    Route::post('esport/new', [ESportController::class,'store']);
    Route::get('esport/edit/{eSport:slug}', [ESportController::class,'edit'])->name('esport.edit');
    Route::put('esport/edit/{eSport:slug}', [ESportController::class,'update']);
    Route::delete('esport/delete/{eSport:slug}', [ESportController::class,'destroy'])->name('esport.delete');
});

Route::middleware('guest')->group(function () {
    # Register
    Route::get('register', [RegisterController::class,'create'])->name('register');
    Route::post('register', [RegisterController::class,'store']);

    # Login
    Route::get('login', [SessionsController::class,'create'])->name('login');
    Route::post('login', [SessionsController::class,'store']);
});

Route::middleware('auth')->group(function () {
    Route::post('logout', [SessionsController::class,'destroy'])->name('logout');
    Route::get('dashboard', [SessionsController::class,'index'])->name('dashboard');
});


Route::get('about-us', fn () => view('about.aboutus'))->name('about');
Route::get('privacy', fn () => view('about.aboutus'))->name('privacy');
Route::get('terms', fn () => view('about.aboutus'))->name('terms');



// Route::get('posts/{post:slug}', [PostController::class,'show'])->name('post');
// Route::get('posts/', [PostController::class,'create'])->name('post.create');
// Route::post('posts/', [PostController::class,'create'])->name('post.create');
// Route::put('posts/', [PostController::class,'create'])->name('post.create');
