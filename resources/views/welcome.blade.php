
@extends('layout')
@section('mycontent')

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


@endsection

