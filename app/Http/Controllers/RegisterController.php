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

    public function profile(){
        return view('profile');
    }

    public function create(){
        return view('register');
    }

    public function store(Request $request){
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
     
        return redirect('/');
    }

    public function login(){
        return view('login');
    }
    
    // Store user login
//     public function storelogin(Request $request){
//         // dd($request->all());
//         $Myuser = $request->validate([
//             'email'=>['required', 'email'],
//             'password' => 'required'
//         ]);
       
//         if(auth()->attempt($Myuser)){
//             // If there is an authentication attempt on my user, then we want to regenerate session
//             // In actual codes, it will be the other way round. 
//             $request->session()->regenerate();
//             return redirect('/');
//         }
     
//         return back();
//     }
// }

public function logout(Request $request){
    auth()->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
}


public function authenticate(Request $request){
   
    $Myuser = $request->validate([
        'email'=>['required', 'email'],
        'password'=> 'required'
    ]);

    if(auth()->attempt($Myuser)){
        $request->session()->regenerate();
         return redirect('/');
    }

     return back();
    
}

}