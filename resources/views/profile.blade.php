@extends('layout')
@section('mycontent')

<head>

    <link
        rel="stylesheet"
        href="\css\profile.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/solid.css">
        <script src="https://kit.fontawesome.com/9ff47ec0f8.js" crossorigin="anonymous"> </script>

</head>

<div class="loginuserphoto"> 
    <img src="\images\dunia.png" class="loginuserphotoimage"> 
    <h1> Alex Dunia </h1>
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

@endsection