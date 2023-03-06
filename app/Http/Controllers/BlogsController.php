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
        // dd($request->all());
        // dd($request->file('picture'));
        $Blogfields = $request->validate([
          'Title' => 'required',
          'Heading' => 'required',
          'Quoteone' => 'required',
          'Contentone' => 'required',
          'Quotetwo' => 'required',
          'Contenttwo' => 'required',
        ]);

        
        if($request->hasFile('picture')){
            $Blogfields['picture'] = $request->file('picture')->store('photos', 'public');
        }

        // if($request->hasFile('logo')) {
        //     $Formfields['logo'] = $request->file('logo')->store('logos', 'public');
        // }

        blogs::create($Blogfields);
        // We used this create while making use of the database seeders. 
        return redirect('/');
        // return view('createblog');
    }

}
