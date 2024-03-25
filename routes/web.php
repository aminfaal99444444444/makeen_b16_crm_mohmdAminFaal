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

// User Routs
Route::get('/users/create', function () {
    return view('users.create');
});

// Product Get Routes
Route::get('/products/create', function () {
    return view('products.create');
});

Route::get('/products/edit/{id}', function ($id) {

    $product = DB::table('products')->where('id', $id)->first();
    return view('products.edit', ['product' => $product]);
});

Route::get('/products/index', function () {

    $products = DB::table('products')->get();
    return view('products.index', ["products" => $products]);
});

// Product Post Routes
Route::post('/products/create', function (Request $request) {


    DB::table('products')->insert([
    "username" => $request->username,
    "color" => $request->color,
    "tozihat" => $request->tozihat,
    "daste_bndi" => $request->daste_bndi,
    "tedad" => $request->tedad
]);
 return "product aded successfully";
});

Route::post('/products/edit/{id}', function(Request $request,$id){
    DB::table('products')->where('id',$id  )->update([
        "username" => $request->username,
        "color" => $request->color,
        "tozihat" => $request->tozihat,
        "daste_bndi" => $request->daste_bndi,
        "tedad" => $request->tedad,
    ]);
    return "product updated successfully";
});
// Products Delete Route
Route::delete('/products/delete/{id}', function ($id) {

    DB::table('products')->where('id', $id)->delete();

    return redirect('/products/index');
});



/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//  order
Route::get('/orders/create', function () {
    return view('orders.create');
});

Route::get('/orders/edit/{id}', function ($id) {

    $order = DB::table('orders')->where('id', $id)->first();
    return view('orders.edit', ['order' => $order]);
});

Route::get('/orders/index', function () {

    $orders = DB::table('orders')->get();
    return view('orders.index', ["orders" => $orders]);
});
// order Post Routes
Route::post('/orders/create', function (Request $request) {


    DB::table('orders')->insert([
    "fullname" => $request->fullname,
    "phone_number" => $request->phone_number,
    "location" => $request->location,
    "zman_ersal" => $request->zman_ersal,
]);
 return "order aded successfully";
});

Route::post('/orders/edit/{id}', function(Request $request,$id){
    DB::table('orders')->where('id',$id  )->update([
        "fullname" => $request->fullname,
    "phone_number" => $request->phone_number,
    "location" => $request->location,
    "zman_ersal" => $request->zman_ersal,
    ]);
    return "order updated successfully";
});
// rders Delete Route
Route::delete('/orders/delete/{id}', function ($id) {

    DB::table('orders')->where('id', $id)->delete();

    return redirect('/orders/index');
});





///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//users

Route::get('/users/index', function () {

    $users = DB::table('users')->get();
    return view('users.index', ["users" => $users]);
});


Route::get('/users/edit/{id}', function ($id) {

    $user = DB::table('users')->where('id', $id)->first();
    return view('users.edit', ['user' => $user]);
});
// order Post Routes
Route::post('/users/create', function (Request $request) {


    DB::table('users')->insert([$request->except('_token')
]);
 return "user aded successfully";
});

Route::post('/users/edit/{id}', function(Request $request,$id){
    DB::table('users')->where('id',$id  )->update([
        "name" => $request->name,
    "phone_number" => $request->phone_number,
    "city" => $request->city,
    "password" => $request->password,
    "gender" => $request->gender,
    ]);
    return "user updated successfully";
});
// rders Delete Route
Route::delete('/users/delete/{id}', function ($id) {

    DB::table('users')->where('id', $id)->delete();

    return redirect('/users/index');
});
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//posts
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
