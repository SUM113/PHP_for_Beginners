<?php

use App\Http\Controllers\NewsLetterController;
use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use MailchimpMarketing\ApiClient;

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

Route::get('/',[PostController::class,'index'])->name('home');
Route::get("/posts/{post:slug}",[PostController::class,'show'])->name('posts');
Route::get('/postsBy/{user}',[PostController::class,'PostByAuthor']);

Route::get('/postsComment/{post:id}',[PostCommentController::class,'store']);

Route::get('/register',[RegisterController ::class,'create'])->middleware('guest')->name('register');
Route::post('/register',[RegisterController ::class,'store'])->middleware('guest');

Route::post('/logout',[SessionController::class,'destroy'])->middleware('auth')->name('logout');
Route::get('/login',[SessionController::class,'create'])->middleware('guest')->name('login');
Route::post('/session',[SessionController::class,'session'])->middleware('guest');

Route::get('newsletter/subscribe',[NewsLetterController::class,'Subscribe']);

