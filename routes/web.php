<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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

Route::get('/', function () {
    return view('welcome');
});

///////////////////////////////////////////////////////////////////////////////////////////////////////////////Product
Route::get('/products/create',[ProductController::class, 'create'])->name('products.create');

Route::get('/products/edit/{id}',[ProductController::class, 'editGet'])->name('products.editGet');

Route::get('/products/index', [ProductController::class, 'index'])->name('products.index');
// Product Post Routes
Route::post('/products/create', [ProductController::class,'creatPost'])->name('products.creatPost');

Route::post('/products/edit/{id}',[ProductController::class, 'editPost'])->name('products.editPost');
// Products Delete Route
Route::delete('/products/delete/{id}',[ProductController::class, 'delete'])->name('products.delete');



///////////////////////////////////////////////////////////////////////////////////////////////////////////////// order
Route::get('/orders/create',[OrderController::class, 'create'])->name('orders.create');

Route::get('/orders/edit/{id}', [OrderController::class, 'editGet'])->name('orders.editGet');

Route::get('/orders/index', [OrderController::class, 'index'])->name('orders.index');
// order Post Routes
Route::post('/orders/create',  [OrderController::class, 'createPost'])->name('orders.createPost');

Route::post('/orders/edit/{id}', [OrderController::class, 'editPost'])->name('orders.editPost');

Route::delete('/orders/delete/{id}',[OrderController::class, 'delete'])->name('orders.delete');


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////users

// User Routs
Route::get('/users/create', [UserController::class,'create'])->name('users.create');

Route::get('/users/index', [UserController::class,'index'])->name('users.index');

Route::get('/users/edit/{id}', [UserController::class,'editGet'])->name('users.editGet');

Route::post('/users/create', [UserController::class,'createPost'])->name('users.createPost');

Route::post('/users/edit/{id}', [UserController::class,'editPost'])->name('users.editPost');

Route::delete('/users/delete/{id}', [UserController::class,'delete'])->name('users.delete');

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////posts
Route::get('/posts/create', function () {
    return view('posts.create');
});

Route::get('/posts/edit/{id}', function ($id) {

    $post = DB::table('posts')->where('id', $id)->first();
    return view('posts.edit', ['post' => $post]);
});

Route::get('/posts/index', function () {

    $posts = DB::table('posts')->get();
    return view('posts.index', ["posts" => $posts]);
});

// order Post Routes
Route::post('/posts/create', function (Request $request) {


    DB::table('posts')->insert([
    "title" => $request->title,
    "name" => $request->name,
    "poststext" => $request->poststext,
]);
 return "post aded successfully";
});

Route::post('/posts/edit/{id}', function(Request $request,$id){
    DB::table('posts')->where('id',$id  )->update([
        "title" => $request->title,
    "name" => $request->name,
    "poststext" => $request->poststext,
    ]);
    return "post updated successfully";
});
// rders Delete Route
Route::delete('/posts/delete/{id}', function ($id) {

    DB::table('posts')->where('id', $id)->delete();

    return redirect('/posts/index');
});
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//categury

//categurys
Route::get('/catgury/create', function () {
    return view('catgury.create');
});

Route::get('/catgury/edit/{id}', function ($id) {

    $catgury = DB::table('catgury')->where('id', $id)->first();
    return view('catgury.edit', ['catgury' => $catgury]);
});

Route::get('/catgury/index', function () {

    $catgury = DB::table('catgury')->get();
    return view('catgury.index', ["catgury" => $catgury]);
});

// categury Routes
Route::post('/catgury/create', function (Request $request) {


    DB::table('catgury')->insert([
    "daste_bndi" => $request->daste_bndi,
]);
 return "catgury aded successfully";
});

Route::post('/catgury/edit/{id}', function(Request $request,$id){
    DB::table('catgury')->where('id',$id  )->update([
        "daste_bndi" => $request->daste_bndi,

    ]);
    return "categury updated successfully";
});
// categury Delete Route
Route::delete('/catgury/delete/{id}', function ($id) {

    DB::table('catgury')->where('id', $id)->delete();

    return redirect('/catgury/index');
});
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//validate make for posts
use App\Http\Controllers\PostsController;
Route::get('posts',[PostsController::class,'create']);
Route::post('posts',[PostsController::class,'createStore']);

//Route::get('/posts/create', [PostsController::class, 'create']);
//Route::post('/posts', [PostsController::class, 'edit']);
use App\Http\Controllers\usersController;
Route::get('users',[usersController::class,'create']);
Route::post('users',[usersController::class,'createStore']);
