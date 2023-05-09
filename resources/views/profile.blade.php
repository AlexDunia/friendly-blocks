@extends('layout')
@section('mycontent')

<head>

    <link
        rel="stylesheet"
        href="\css\profile.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/solid.css">
        <script src="https://kit.fontawesome.com/9ff47ec0f8.js" crossorigin="anonymous"> </script>


</head>

<body>
    @foreach($allmyb as $oneblogeach)

    <h3>  {{$oneblogeach->Title}}. </h3>

    @endforeach

</body>


{{-- <div class="loginuserphoto">
    <img src="\images\dunia.png" class="loginuserphotoimage">
    <h1>   </h1>
</div>

<div class="reachlinksdiv">

<div class="reachlinks">
    <div class="reachimg">
        <img src="\images\github.png">
    </div>

    <div class="reachtext">
        <h3> Github </h3>
    </div>
</div>

<div class="reachlinks">
    <div class="reachimg">
        <img src="\images\twitter.png">
    </div>

    <div class="reachtext">
        <h3> Twitter </h3>
    </div>
</div>


<div class="reachlinks">
    <div class="reachimg">
        <img src="\images\linkedin.png">
    </div>

    <div class="reachtext">
        <h3> Linkedin </h3>
    </div>
</div>

</div>

<br/>
<br/>


<div class="division">
<hr>
</div>

<br/>
<br/>
<br/> --}}


 {{-- blogs grid --}}
 {{-- <div class="pw">

    <div class="pgrid">

 @foreach($allmyblogs as $oneblogeach)


 <div class="allproducts">
    <img  src="{{asset('storage/' . $oneblogeach->picture)}}" class="blogimage" width="10px">

    <div class="userflex">

    <div class="userimgdiv">
      <img src="/images/dunia.png" class="userimg">
    </div>


    <div class="userimgdiv">
    </div>

   </div>

   <h3> <a href="/blogpost/{{$oneblogeach->id}}"> {{$oneblogeach->Title}} </a> </h3>

   <h4> <a href="/blogpost/{{$oneblogeach->id}}/edit"> Edit post</a> </h>

    <h4> <a href="/blogpost/{{$oneblogeach->id}}/edit"> Read</a> </h>
   </div>

   @endforeach
</div>
</div> --}}


   {{-- @foreach ($posts as $post)

   <div>
       <h2>{{ $post->Title }}</h2>

   </div>

@endforeach --}}





@endsection