<?php

namespace App\Http\Controllers;

use auth;
use App\Models\User;
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

       

        // User::create([
        //    'user_id' => $Blogfields['user_id']
        // ]);
        $Blogfields['user_id'] = auth()->id();
        // dd($request->all(['user_id']));

         
        // $Myuser['password'] = bcrypt($Myuser['password']);
        // $Myuser['user_id'] = Auth()->id();
        // $oneuser = User::create($Myuser);
        // Auth()->login($oneuser);

        // if($request->hasFile('logo')) {
        //     $Formfields['logo'] = $request->file('logo')->store('logos', 'public');
        // }

        blogs::create($Blogfields);
        // We used this create while making use of the database seeders. 
        return redirect('/');
        // return view('createblog');
    }

    // I want to make sure that whatever listing I have belong to my user.
    // First step is to create a function that actually takes my manage functionality. 
    public function manage(){
        return view('manage', [
            'allmyblogs' => auth()->user()->blog()->get()
        ]);
    }

    public function edit(blogs $oneblog){
        return view('edit', [
            'oneblog' => $oneblog
        ]);
    }

    public function destroy(blogs $oneblog){
        $oneblog->delete();
        // return view('edit', [
        //     'oneblog' => $oneblog
        // ]);
        return redirect('/');
    }



    public function update(Request $request, blogs $oneblog){
        // dd($oneblog);
        // dd($request->file('picture'));
        $Blogfields = $request->validate([
          'Title' => 'required',
          'Subtitle' => 'required',
          'Contentone' => 'required',
          'Heading' => 'required',
          'Contenttwo' => 'required',
          'Conclusion' => 'required',
          'Contentthree' => 'required',
        ]);
        
        
        if($request->hasFile('picture')){
            $Blogfields['picture'] = $request->file('picture')->store('photos', 'public');
        }

        $oneblog->update($Blogfields);
        return redirect('/');
    }

}
