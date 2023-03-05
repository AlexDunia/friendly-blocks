<?php

namespace App\Http\Controllers;

use App\Models\blogs;
use Illuminate\Http\Request;

class BlogsController extends Controller
{

    public function index(){
        return view('welcome', [
            'welcome' => blogs::all()
            // remember, no parameter if the crud operation is really all. 
        ]);
    }

    public function showone(blogs $oneblog){
        return view('welcome',[
            'singleblog' => $oneblog
        ]);
    }

}
