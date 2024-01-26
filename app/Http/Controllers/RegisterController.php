<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function create(){
       return view('register.create');

    }
    public function store(){

        $legit_user= request()->validate([
           'name'=> 'required|max:25',
           'username'=> 'required|min:5|max:25|unique:users,name',
           'email'=> 'required|email|min:5|max:25|unique:users,email',
           'password'=> 'required|min:5|max:25',
        ]);

        $legit_user=User::create($legit_user);

        auth()->login($legit_user);

//        session()->flash('success','You are successfully Registered');
        return redirect()->back()->with('success','You are successfully Registered'); // This is eqaul to adding the above line [short form of flash messages]

    }


}
