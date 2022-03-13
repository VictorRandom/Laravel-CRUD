<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request){

        $users = User::get()->all();

        return view('user-list', [
            'users' => $users,
        ]);
    }

    public function create(){
        $isedit = false;
        $user = new User();
        return view('user-create', [
            'user' => $user,
            'isedit' => $isedit
        ]);

    }

    public function insert(Request $request){

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();

        return redirect('usuario');
    }

    public function edit($id){

        $user = User::find($id);
        $isedit = true;

        return view('user-create', [
            'user' => $user,
            'isedit' => $isedit
        ]);
    }
}
