
@extends('layout')
@section('mycontent')


@auth
<head>

    <link
        rel="stylesheet"
        href="\css\blog.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/solid.css">
        <script src="https://kit.fontawesome.com/9ff47ec0f8.js" crossorigin="anonymous"> </script>

</head>
<body>
  {{-- The @yeild is the parent component. The section is the child, so now that is what we need.  --}}
  

  <div class="purple"> 

    <form method="POST" action="/logout" enctype="multipart/form-data">
      @csrf
      <button class="text-black-500"> 
          Logout
      </button>
      
  </form>

    <h1> Welcome, <span class="purplespan"> {{auth()->User()->firstname}} </span> </h1> 
    <p> We have updated our blog, scroll down to be  <br/>
      up to date.  </p>

  </div>
  


{{-- Serach query --}}

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

{{-- blogs grid --}}
<div class="pgrid">

  <div class="allproducts">
    <img src="\images\pkey.png" class="blogimage" width="300px"/>

    <div class="userflex"> 

    <div class="userimgdiv">
      <img src="/images/dunia.png" class="userimg">
    </div>

  

    <div class="userimgdiv">
      <h4> Alex Dunia </h4>
    </div>

  </div> 


    <h3>  Why crypto currency matters and how to avoide bad actors in this revolutionary space </h3> 
  </div>









  <div class="allproducts">
    <img src="\images\eth.jpg" class="blogimage" width="300px"/>

    <div class="userflex"> 

    <div class="userimgdiv">
      <img src="/images/dunia.png" class="userimg">
    </div>

  

    <div class="userimgdiv">
      <h4> Alex Dunia </h4>
    </div>

  </div> 


    <h3> Differebnce between public keys </h3> 
  </div>





  <div class="allproducts">
    <img src="\images\help.jpg" class="blogimage" width="300px"/>

    <div class="userflex"> 

    <div class="userimgdiv">
      <img src="/images/dunia.png" class="userimg">
    </div>

  

    <div class="userimgdiv">
      <h4> Alex Dunia </h4>
    </div>

  </div> 


    <h3> Differebnce between public keys </h3> 
  </div>

</div>

@else

  {{-- Hero div --}}

  <div class="heroflex"> 

    <div class="heromaintext"> 
        <h2> Web3 stuffs, <br/> Simplified </h2>
        <p> Have advanced blockchain concepts  <br/>
            explained to you in 
            the simplest ways <br/> 
        </p>

        <button class="wlbtnn" type="submit">  Get started </button>

    </div>

    <div> 
        <img src="\images\on_chain.png" width="500px"/>
    </div>

</div>

 {{-- Next div --}}

 <div class="everyoneflex"> 

    <div class="everyoneimg"> 
        <img src="\images\ref.png" width="410px"/>
    </div>

    <div class="everyonemaintext"> 
        <h2> Blockchain Technology is  for everyone </h2>
        <p> Lorem Ipsum is simply dummy text of the printing and 
            typesetting industry. Lorem Ipsum has been the industry's 
            standard dummy text ever since the 1500s, when an 

            <br/> 
            <br/>
            
            Unknown printer took a galley of type and scrambled it to
             make a type specimen book. It has survived not only five
             centuries, but also the leap into electronic typesetting, 
            remaining essentially unchanged.
        </p>

        {{-- <button class="wlbtnn" type="submit">  Join the wating list </button> --}}

    </div>


</div>

<div class="appbg"> 

    <div class="mainappflex">

    <div class="mainapp"> 

        <h1> Our approach </h1> 
        <br/>
        <br/> 

        <h3> Lorem Ipsum </h3> 
      
        <p> Lorem Ipsum is simply dummy text of the printing and 
            typesetting industry. Lorem Ipsum has been the industry's  
            standard dummy text ever since the 1500s. </p>

            <br/>

            <h3> Lorem Ipsum </h3> 
         
            <p> Lorem Ipsum is simply dummy text of the printing and 
                typesetting industry. Lorem Ipsum has been the industry's  
                standard dummy text ever since the 1500s. </p>

                <br/>
    
                <h3> Lorem Ipsum </h3> 
                
                <p> Lorem Ipsum is simply dummy text of the printing and 
                    typesetting industry. Lorem Ipsum has been the industry's  
                    standard dummy text ever since the 1500s. </p>
                
    </div> 


    <div class="mainappimg"> 
        <img src="\images\crypto.png" width="500px"/>
    </div> 

    </div>   

</div> 

@endauth


@endsection

