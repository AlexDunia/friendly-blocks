<!DOCTYPE html>
<html lang="en">
    <head>
        {{-- @stack('css') --}}
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
      
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;
        400;500;600;700;800;900&family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;
        0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:
        ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;
        1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        
        {{-- <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script src="https://cdn.tailwindcss.com"></script> --}}
   
        </script>
        
        <title> Friendly blocks </title>
    </head>
    <body>

    <div class="navcolor">

        <div class="navflex"> 

        <div> 
        <img src="\images\fbs.png" width="230px"/>
        </div> 

        <div class="navdiv"> 
            <ul> 
                <a href="">  <li> Home </li>  </a> 
                <a href="">  <li> About </li>  </a> 
                <a href="">  <li> Contact us </li>  </a> 
                <a href="">  <li> Blog </li>  </a> 
            </ul> 
         </div> 


         <div class="navdivregister"> 
            <ul> 
                <a href="">  <li> Login </li>  </a> 
                <a href="">  <li> Sign up </li>  </a> 
            </ul> 
         </div> 

        </div>

    </div>

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
            <br/> 
            <h3> Lorem Ipsum </h3> 
            <p> Lorem Ipsum is simply dummy text of the printing and 
                typesetting industry. Lorem Ipsum has been the industry's  
                standard dummy text ever since the 1500s. </p>
    </div> 


    <div class="mainappimg"> 
        <img src="\images\crypto.png" width="450px"/>
    </div> 

    </div>   

</div> 



        @yield('mycontent')
    </body>
</html>