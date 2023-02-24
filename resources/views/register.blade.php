@extends('layout')
@section('mycontent')

<div> 

    <div> 
        <h2> Sign up </h2> 
        <p> Are you passionate about blockchain technology or want to know more about it in the simplest way there is on the world wide web?
            if yes, then you should sign in </p>
            <form method="POST" action="/users/authenticate">
                {{ csrf_field() }}

                <div class="mb-6">
                    <label for="email" 
                        > Email </label
                    >
                    <input
                        type="email"
                        name="email"
                        value="{{old('email')}}"
                    />
                   
                   
                </div>

                <div class="mb-6">
                    <label
                        for="password"
                    >
                        Password
                    </label>
                    <input
                        type="password"
                        name="password"
                        value="{{old('password')}}"
                    />
                   
                </div>

                <div>
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

@endsection