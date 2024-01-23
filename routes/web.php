<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;


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


Route::get("/posts/{post:slug}",[PostController::class,'show'])->name('post');

//Route::get('category/{category:slug}',function (Category $category){
//    return view('posts',
//        [
//            'posts'=>$category->post,
//            'category_selected'=>$category,
//            'categories'=> Category::all()
//
//    ]);
//})->name('category');

Route::get('/postsBy/{user}',function (User $user){
//    dd('user_id ::'.$user_id);
    return view('posts',[
        'posts'=>$user->post,
    ]);
});
