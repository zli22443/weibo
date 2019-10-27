<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function create(){
        return view('users.create');
    }

    public function show(User $user){
        return view('users.show',compact('user'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|min:3|max:20',
            'email' => 'required|email|unique:users|max:30',
            'password' => 'required|confirmed|min:6'
        ]);
        return;
    }
}
