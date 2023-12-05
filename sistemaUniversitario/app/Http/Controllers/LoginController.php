<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function store(Request $request){
        $this->validate($request, [
            'email' =>'required|email',
            'password' => 'required|min:3|max:30'
        ]);

        if (!Auth::attempt($request->only('email', 'password'))){
            return back()->with('mensaje','Credenciales incorrectas');
        }

        return redirect()->route('admin.index', auth()->user()->email);
    }
}
