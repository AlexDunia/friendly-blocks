<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    //
    public function index(){
        return view('welcome');
    }

    public function create(){
        return view('register');
    }

    public function store(Request $request){
        // return view('register');
        // dd($request->all());
        $Myuser = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email'=>['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required'
        ]);
        $Myuser['password'] = bcrypt($Myuser['password']);
        $oneuser = User::create($Myuser);
        Auth()->login($oneuser);
        // Auth()->login($oneuser);

        return redirect('/');
    }
}
