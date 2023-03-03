@extends('layout')
@section('mycontent')

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

        <h1> Welcome, <span class="purplespan"> Dunia </span> </h1> 
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


     

    @endsection
    