@extends('layout')
@section('mycontent')

<head>

    <link
        rel="stylesheet"
        href="\css\blogpost.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/solid.css">
        <script src="https://kit.fontawesome.com/9ff47ec0f8.js" crossorigin="anonymous"> </script>

</head>
<body>

    <div class="titleflex"> 

    <div class="titlediv"> 

    <div> 
        <h1> Why crypto currency will matter a decade from now currency will matter a decade from now </h1>
    </div>

    <div> 

        <p> 
            Defi which is short for Decentralized finance will be 
            alternative to traditional payment and solve solutions 
            beyond payments. Here’s why. 
        </p>

    <div class="writerdetailsflex">

        <img src="\images\dunia.png" class="writerimg">

        <div> 
            <h4> Alex Dunia </h4> 
            <h4>    March 10th, 2023  </h4> 
        </div> 
    </div>

    </div>

   </div>


    <div class="titleimg"> 
        <img src="\images\defiandcefi.png"> 
    </div>

    </div>

    <br/> 
    <br/>

    <div class="formflex">

        <div class="shh">
        
          <form> 
        
            <button type="submit"> <i class="fa fa-search" aria-hidden="true"> </i> </button>
        
            <input
                  type="text"
                  class="no-outline"
                  name="company"
                  placeholder="Search for blogs, writers, etc"
              />
        
          </form>
        
          </div>
        
        </div> 

        <br/> 
        <br/>

        <div class="blogparagrah"> 

            <p> 
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p> 

        </div>

{{-- <h3>  {{$oneblog->name}} </h3> 
<h3>  {{$oneblog->content}} </h3>  --}}

</body>
</head>

@endsection
