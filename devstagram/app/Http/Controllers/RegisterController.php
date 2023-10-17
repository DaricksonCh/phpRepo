<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;


class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.register');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $request->request->add(['username'=>Str::slug($request->username)]);
        $this->validate($request,[
            'name'=>'required|min:3|max:50',
            'username'=>'required|min:3|max:50|unique:users',
            'email'=>'required|min:3|max:50|unique:users|email',
            'password'=>'required|confirmed|min:5'
        ]);
        User::create([
            'name'=>$request->name,
            'username'=>Str::slug($request->username),
            'email'=>$request->email,
            'password'=>$request->password
        ]);
        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Register $register)
    {
        //
    }
}
