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

            <form method="POST" class="fstyle" action="/publish" enctype="multipart/form-data">

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
                    name="Subtitle"
                    rows="10"
                    placeholder="Subtitle"
                ></textarea>
                   
                </div>
                </div>

                <div>
                    <br/>
                    <br/>
                    <input
                        type="file"
                        name="picture"
                    />
                    
            
                    {{-- @error('picture')
                    <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                    @enderror --}}
            
                </div>

                <div class="forminnerquote">

                    <br/>
                    <br/>
                    <div >
                 
                    <textarea
                    type="text"
                    name="Contentone"
                    rows="10"
                    placeholder="Content one"
                ></textarea>
                   
                </div>
                </div>


                <div class="forminner">

                    <br/>
                    <br/>
                    <div >
                       
                    <input
                        type="text"
                        name="Heading"
                        placeholder="Sub heading"
                        value="{{old('Heading')}}"
                    />
                   
                </div>

                <div class="forminnercontent">
                    
                    <br/>
                    <br/>
                    <div >
                 
                    <textarea
                    type="text"
                    name="Contenttwo"
                    rows="10"
                    placeholder="Content"
                ></textarea>
                   
                </div>
                </div>

                <div class="forminner">

                    <br/>
                    <br/>
                    <div >
                       
                    <input
                        type="text"
                        name="Conclusion"
                        placeholder="Conclusion heading"
                        value="{{old('Conclusion')}}"
                    />
                   
                </div>


                

                <div class="forminnercontent">
                    
                    <br/>
                    <br/>
                    <div >
                 
                    <textarea
                    type="text"
                    name="Contentthree"
                    rows="10"
                    placeholder="Content"
                ></textarea>
                   
                </div>
                </div>


            
                    {{-- @error('picture')
                    <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                    @enderror --}}
            
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