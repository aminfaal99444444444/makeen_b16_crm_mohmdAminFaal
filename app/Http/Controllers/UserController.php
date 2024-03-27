<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create() {
        return view('users.create');
    }
    public function index() {

        $users = DB::table('users')->get();
        return response()->json(["users" => $users]);
    }
    public function editGet($id) {

        $user = DB::table('users')->where('id', $id)->first();
        return view('users.edit', ['user' => $user]);
    }

    public function delete($id) {

        DB::table('users')->where('id', $id)->delete();

        return redirect('/users/index');
    }

    public function createPost(Request $request) {

        DB::table('users')->insert([
            "name" => $request->name,
            "phone_number" => $request->phone_number,
            "city" => $request->city,
            "password" => $request->password,
            "gender" => $request->gender,
            ]);
            return "user aded successfully";
        }

        public function editPost(Request $request,$id){
            DB::table('users')->where('id',$id  )->update([
                "name" => $request->name,
            "phone_number" => $request->phone_number,
            "city" => $request->city,
            "password" => $request->password,
            "gender" => $request->gender,
            ]);
            return "user updated successfully";
        }
}
