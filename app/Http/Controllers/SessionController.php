<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Termwind\renderUsing;

class SessionController extends Controller
{
    public function destroy()
    {
        auth()->logout();
        return redirect(request()->routeIs('home'))->with('success','Goodbye 👋👋👋');

    }

    public function create(){
        return view('session.create');

    }
    public function session(){

        session()->regenerate();
        $userdata=request()->validate([
            'email'=> 'required|email',
            'password'=> 'required',
        ]);

        if(!auth()->attempt($userdata))
            return back()->withErrors(['email'=>'Credential could not be verified.'])->withInput();
        else
            return redirect()->back()->with('success','Welcome Back');
    }
}
