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
        <h1> {{$oneblog->Title}} </h1>
    </div>

    <div>

        {{-- <p>
            Defi which is short for Decentralized finance will be
            alternative to traditional payment and solve solutions
            beyond payments. Here’s why.
        </p> --}}

        <p>
           {{$oneblog->Subtitle}}
        </p>

    <div class="writerdetailsflex">

        <img src="\images\dunia.png" class="writerimg">

        <div>
            <h4> Alex Dunia </h4>
            <h4>    March 10th, 2023  </h4>
        </div>

        @auth
   <h4> <a href=""> Edit post</a> </h4>
    @else
    <h4> <a href=""> Read More </a> </h4>
    @endauth
    </div>

    </div>

   </div>


    <div class="titleimgg">
        {{-- <img src="\images\defiandcefi.png">  --}}
        {{-- <img  src="{{asset($oneblog->picture)}}"> --}}
        {{-- <img  src="{{$oneblog->picture}}" > --}}
        <img  src="{{asset('storage/' . $oneblog->picture)}}">
        {{-- <img href="{{ url('/storage//'.$oneblog->picture) }}"> --}}
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

        <div class="blogparagraph">

            <p>
                {{$oneblog->Contentone}}

            </p>

        </div>


        <br/>
        <br/>


        <div class="headingtwo">
            <h1> {{$oneblog->Heading}} </h1>
        </div>

        <br/>
        <br/>

        <div class="blogparagraph">

            <p>
                {{$oneblog->Contenttwo}}

            </p>

        </div>


        <br/>
        <br/>


        <div class="headingtwo">
            <h1> {{$oneblog->Conclusion}} </h1>
        </div>

        <br/>
        <br/>

        <div class="blogparagraph">

            <p>
                {{$oneblog->Contentthree}}

            </p>

        </div>


        {{-- <img
            class="w-48 mr-6 mb-6"
            src="{{asset('storage/' . $oneblog->picture)}}"
            alt=""
        /> --}}

        {{-- <h3>  {{$oneblog->Title}} </h3>  --}}

{{-- <h3>  {{$oneblog->name}} </h3>
<h3>  {{$oneblog->content}} </h3>  --}}

</body>
</head>

@endsection
