<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create() {
        return view('orders.create');
    }
   public function edit($id) {

        $order = DB::table('orders')->where('id', $id)->first();
        return view('orders.edit', ['order' => $order]);
    }
   public function index() {

        $orders = DB::table('orders')->get();
        return view('orders.index', ["orders" => $orders]);
    }

    public function delete($id) {

        DB::table('orders')->where('id', $id)->delete();

        return redirect('/orders/index');
    }
    public function createPost(Request $request) {
        DB::table('orders')->insert([
            "fullname" => $request->fullname,
            "phone_number" => $request->phone_number,
            "location" => $request->location,
            "zman_ersal" => $request->zman_ersal,
            ]);
            return "order aded successfully";
        }

       public function editPost(Request $request,$id){
            DB::table('orders')->where('id',$id  )->update([
                "fullname" => $request->fullname,
            "phone_number" => $request->phone_number,
            "location" => $request->location,
            "zman_ersal" => $request->zman_ersal,
            ]);
            return "order updated successfully";
        }
}
