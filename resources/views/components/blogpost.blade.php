@props(['one'])

<head>

    <link
        rel="stylesheet"
        href="\css\blog.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/solid.css">
        <script src="https://kit.fontawesome.com/9ff47ec0f8.js" crossorigin="anonymous"> </script>

</head>

<body>
    {{-- blogs grid --}}


      <div class="allproducts">
        <img  src="{{asset('storage/' . $one->picture)}}" class="blogimage" width="10px">
    
        <div class="userflex"> 
    
        <div class="userimgdiv">
          <img src="/images/dunia.png" class="userimg">
        </div>
    
    
        <div class="userimgdiv">
          {{-- <a href="/blogpost/{{$one->id}}"> {{$one->Title}} </a> --}}
          <a> Alex Dunia  </a>
        </div>
    
       </div> 

       <h3> {{$one->Title}} </h3>

       {{-- <a href="/blogpost/{{$one->id}}/edit"> Edit post</a> --}}
    

       </div>

      


    {{-- <div class="pgrid">

        <div class="allproducts">
          <img src="\images\pkey.png" class="blogimage" width="300px"/>
  
          <div class="userflex"> 
  
          <div class="userimgdiv">
            <img src="/images/dunia.png" class="userimgg">
          </div>
  
        
  
          <div class="userimgdivv">
            <h4> Alex Dunia </h4>
          </div>
  
        </div> 
  
  
          <h3>  Why crypto currency matters and how to avoide bad actors in this revolutionary space </h3> 
        </div>

  
        <div class="allproducts">
          <img src="\images\eth.jpg" class="blogimage" width="300px"/>
  
          <div class="userflex"> 
  
          <div class="userimgdivv">
            <img src="/images/dunia.png" class="userimgg">
          </div>
  
        
  
          <div class="userimgdivv">
            <h4> Alex Dunia </h4>
          </div>
  
        </div> 
  
  
          <h3> Difference between public keys </h3> 
        </div>
  
  
  
  
  
        <div class="allproducts">
          <img src="\images\help.jpg" class="blogimage" width="300px"/>
  
          <div class="userflex"> 
  
          <div class="userimgdivv">
            <img src="/images/dunia.png" class="userimgg">
          </div>
  
        
  
          <div class="userimgdivv">
            <h4> Alex Dunia </h4>
          </div>
  
        </div> 
  
  
          <h3> Difference between public keys </h3> 
        </div>
  
      </div> --}}

</body>