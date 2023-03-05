@extends('layout')
@section('mycontent')

<head>

    <link
        rel="stylesheet"
        href="\css\create.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/solid.css">
        <script src="https://kit.fontawesome.com/9ff47ec0f8.js" crossorigin="anonymous"> </script>

</head>
<body>

<div class="formbgmain"> 

    <div class="formbg"> 
  
        <h2> Create post. </h2> 

            <form method="post" class="fstyle" action="/publish">

                @csrf
        
                <div class="forminner">

                    <br/>
                    <br/>
                    <div >
                       
                    <input
                        type="text"
                        name="Title"
                        placeholder="Title:"
                        value="{{old('Title')}}"
                    />
                   
                </div>

                 <div class="forminnerquote">

                    <br/>
                    <br/>
                    <div >
                 
                    <textarea
                    type="text"
                    name="Heading"
                    rows="10"
                    placeholder="Heading"
                ></textarea>
                   
                </div>
                </div>

                <div class="forminnerquote">

                    <br/>
                    <br/>
                    <div >
                 
                    <textarea
                    type="text"
                    name="Quoteone"
                    rows="10"
                    placeholder="Quote: (Not compulsory)"
                ></textarea>
                   
                </div>
                </div>


                <div class="forminnercontent">
                    
                    <br/>
                    <br/>
                    <div >
                 
                    <textarea
                    type="text"
                    name="Contentone"
                    rows="10"
                    placeholder="Content (Per paragraph):"
                ></textarea>
                   
                </div>
                </div>

                <div class="forminnercontent">
                    
                    <br/>
                    <br/>
                    <div >
                 
                    <textarea
                    type="text"
                    name="Contenttwo"
                    rows="10"
                    placeholder="Content (Per paragraph):"
                ></textarea>
                   
                </div>
                </div>


                {{-- <div class="mb-6">
                    <br/>
                    <br/>
                    <input
                        type="file"
                        name="logo"
                    />
            
                    @error('logo')
                    <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                    @enderror
            
                </div> --}}


                <div class="forminnerquote">

                    <br/>
                    <br/>
                    <div >
                 
                    <textarea
                    type="text"
                    name="Quotetwo"
                    rows="10"
                    placeholder="Quote: (Not compulsory)">
                   </textarea>
                   
                </div>
                </div>
            


                {{-- <div class="forminner">

                    <br/>
                    <br/>
                    <div >
                        <label for="password" 
                            > password </label
                        >
                    <input
                        type="password"
                        name="password"
                        placeholder="password"
                        value="{{old('password')}}"
                    />
                   
                </div> --}}



                <br/>
                <br/>
                <br/>

                <div class="forminner">
                    <button
                        type="submit"
                    >
                    Publish Post
                    </button>
                </div>
                
            </form>
    </div>
</div>

</body>

@endsection