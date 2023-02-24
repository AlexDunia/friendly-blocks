@extends('layout')
@section('mycontent')

<head>

    <link
        rel="stylesheet"
        href="\css\login.css" />
        {{-- <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" --}}
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/solid.css">
        <script src="https://kit.fontawesome.com/9ff47ec0f8.js" crossorigin="anonymous"> </script>

</head>
<body>

<div class="formbgmain"> 

    <div class="formbg"> 

        <h2> Login </h2> 

        <p> Log in to stay updated with our articles </p>

            <form method="POST" action="/users/authenticate" class="fstyle">

                {{ csrf_field() }}
        

                <div class="forminner">

                    <br/>
                    <br/>
                    <input
                        type="email"
                        name="lastname"
                        placeholder="Email"
                        value="{{old('lastname')}}"
                    />
                   
                </div>


                <div class="forminner">

                    <br/>
                    <br/>
                    <input
                        type="password"
                        name="password"
                        placeholder="Password"
                        value="{{old('password')}}"
                    />
                   
                </div>



                <br/>
                <br/>
                <br/>

                <div class="forminner">
                    <button
                        type="submit"
                    >
                    Log in
                    </button>
                </div>

                {{-- <div class="mt-8">
                    
                        <a href="/register" class="text-laravel"
                            > SCreate an account </a
                        >
                
                </div> --}}
                
            </form>
    </div>
</div>

</body>

@endsection