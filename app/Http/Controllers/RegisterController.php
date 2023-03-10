<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class RegisterController extends Controller
{
    //
    // public function index(){
    //     return view('welcome');
    // }

    public function profile($username){
        $username = User::where('firstname' , 'lastname')->get();
        return view('profile');
    }

    // public function profile($id)
    // {
    //     $user = User::find($id);
    //     return view('user.profile', compact('user') );
    // }

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
        
        // $user = User::where('user_id', $Myuser)->first();
        
        $Myuser['password'] = bcrypt($Myuser['password']);
        // $Myuser['user_id'] = Auth()->id();
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