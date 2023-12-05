<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('auth.register');
    }
    public function store(Request $request) {

        $this->validate($request, [
            'email'=>'required | max:30',
            'password'=>'required | min:3|max:30',
        ]);

        Admin::create([
            'email' => $request->email,
            'password' => $request->password,
        ]);

        auth()->attempt($request->only('email','password'));

        return redirect()->route('admin.index');


    }

}
