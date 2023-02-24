@extends('layout')
@section('mycontent')

<head>

    <link
        rel="stylesheet"
        href="\css\register.css" />
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

        <h2> Sign up </h2> 

        <p> Are you passionate about blockchain technology or want to know more about it in the simplest way there is on the world wide web?
            if yes, then you should sign in </p>

            <form method="POST" action="/users/authenticate" class="fstyle">

                {{ csrf_field() }}

                <div class="forminner">
                    <br/>
                    <br/>
                    <label for="email" 
                        > First Name </label
                    >
                    <br/>
                    <br/>
                    <input
                        type="email"
                        name="email"
                        value="{{old('email')}}"
                    />
                   
                   
                </div>

                <div class="forminner">
                    <br/>
                    <br/>
                    <label
                        for="password"
                    >
                        Last Name
                    </label>
                    <br/>
                    <br/>
                    <input
                        type="password"
                        name="lastname"
                        value="{{old('lastname')}}"
                    />
                   
                </div>


                <div class="forminner">
                    <br/>
                    <br/>
                    <label
                        for="email"
                    >
                        Email
                    </label>
                    <br/>
                    <br/>
                    <input
                        type="email"
                        name="lastname"
                        value="{{old('lastname')}}"
                    />
                   
                </div>


                <div class="forminner">
                    <br/>
                    <br/>
                    <label
                        for="password"
                    >
                        Password
                    </label>
                    <br/>
                    <br/>
                    <input
                        type="password"
                        name="password"
                        value="{{old('password')}}"
                    />
                   
                </div>


                <div class="forminner">
                    <br/>
                    <br/>
                    <label
                        for="password"
                    >
                        Confirm password
                    </label>
                    <br/>
                    <br/>
                    <input
                        type="password"
                        name="password"
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
                    Create an account
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