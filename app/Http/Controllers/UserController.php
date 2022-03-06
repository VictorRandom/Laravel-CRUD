<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('user-list');
    }

    public function create(){
        return view('user-create');
        
    }

    public function insert(Request $request){
        dd($request->all());
    }
}
