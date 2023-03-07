<?php

namespace App\Http\Controllers;

use App\Models\blogs;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    
    // Show all blogs
    public function index(){
        return view('welcome', [
            'welcome' => blogs::latest()->filter(request(['search']))->get()
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
          'Subtitle' => 'required',
          'picture' => 'required',
          'Contentone' => 'required',
          'Heading' => 'required',
          'Contenttwo' => 'required',
          'Conclusion' => 'required',
          'Contentthree' => 'required',
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
