<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
public function index() {

        $products = DB::table('products')::table('products')->get();
        return view('products.index', ["products" => $products]);
    }

public function createPost(Request $request) {


        DB::table('products')->insert([
        "username" => $request->username,
        "color" => $request->color,
        "tozihat" => $request->tozihat,
        "daste_bndi" => $request->daste_bndi,
        "tedad" => $request->tedad
        ]);
        return "product aded successfully";
return redirect()->route('products.create');
}

public function editGet($id) {

    $product = DB::table('products')->where('id', $id)->first();
    return view('products.edit', ['product' => $product]);
}

public function create() {
    return view('products.create');
}

public function editPost(Request $request,$id){
    DB::table('products')->where('id',$id  )->update([
        "username" => $request->username,
        "color" => $request->color,
        "tozihat" => $request->tozihat,
        "daste_bndi" => $request->daste_bndi,
        "tedad" => $request->tedad,
    ]);
    return "product updated successfully";
}

public function delete($id) {

    DB::table('products')->where('id', $id)->delete();

    return redirect('/products/index');
}
}
