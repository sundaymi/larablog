<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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
    //return view('welcome');
    return view('home');
}) ->name('home');

Route::get('/posts', [PostsController::class, 'index'])->name('posts');

Route::any('/newpost', [PostsController::class, 'newpost'])->name('newpost'); 

Route::any('/search', [PostsController::class, 'search'])->name('search'); 

// name('') method helps us with the routing in cas we want to change the domain of our page and many more reasons!
// followed by and arrow always

Route::get('/post/{post}', [PostsController::class, 'post'])->name('post');
// this field {post} is waiting a parameter 

Route::any('/edit_post/{post}', [PostsController::class, 'edit_post'])->name('post.edit');  
// any γιατι θελουμε απο την μια να μας δειχνει το post που θελουμε να αλλαξουμε
// απο την αλλη οταν θα κανει submit την φορμα ο user να αλλαζει το post

Route::get('/delete_post/{post}', [PostsController::class, 'delete_post'])->name('post.delete'); 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); 

Route::get('/todo', function () {return view('todo');})->name('todo');

