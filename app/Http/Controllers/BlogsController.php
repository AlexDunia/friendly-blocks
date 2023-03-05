<?php

namespace App\Http\Controllers;

use App\Models\blogs;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    
    // Show all blogs
    public function index(){
        return view('welcome', [
            'welcome' => blogs::all()
            // remember, no parameter if the crud operation is really all. 
        ]);
    }

    // show one post 
    public function showone(blogs $oneblog){
        return view('onepost',[
            'oneblog' => $oneblog
        ]);
    }
    
     // Show all blogs
     public function create(){
        return view('createblog');
    }

    public function store(Request $request){
        dd($request->all());
        $Blogfields = $request->validate([
          'Title' => 'required',
          'Heading' => 'required',
          'Quoteone' => 'required',
          'Contentone' => 'required',
          'Quotetwo' => 'required',
          'Contenttwo' => 'required',
        ]);
        // return view('createblog');
    }

}
