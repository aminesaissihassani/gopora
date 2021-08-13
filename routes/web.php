<?php

use App\Http\Controllers\ESportController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\TeamController;
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


Route::get('posts/{post:slug}', [PostController::class,'show']);
Route::get('new', [PostController::class,'create'])->name('post.create');
Route::get('edit', [PostController::class,'edit'])->name('post.edit');



Route::get('teams/{team:slug}', [TeamController::class,'show']);
Route::get('newTeam', [TeamController::class,'create'])->name('team.create');
Route::get('editTeam', [TeamController::class,'edit'])->name('team.edit');


Route::get('esports/{eSport:slug}', [ESportController::class,'show']);
Route::get('newEsport', [ESportController::class,'create'])->name('esport.create');
Route::get('editEsport', [ESportController::class,'edit'])->name('esport.edit');


Route::get('register', [RegisterController::class,'create'])->name('register');
Route::get('login', [SessionsController::class,'create'])->name('login');

Route::get('about-us', fn () => view('about.aboutus'));



// Route::get('posts/{post:slug}', [PostController::class,'show'])->name('post');
Route::get('posts/', [PostController::class,'create'])->name('post.create');
Route::post('posts/', [PostController::class,'create'])->name('post.create');
Route::put('posts/', [PostController::class,'create'])->name('post.create');
