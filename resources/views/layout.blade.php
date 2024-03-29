<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="\css\style.css"
            referrerpolicy="no-referrer"
        />


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

        <title> Friendly blocks </title>
    </head>
    <body>

        @auth

    <div class="navcolor">

        <div class="navflex">

        <div>
        <img src="\images\fbs.png" width="230px"/>
        </div>

        <div class="navdivauth">
            <ul>
                <a href="">  <li> Home </li>  </a>
                <a href="/profile/{{ auth()->user()->firstname }}">  <li> Profile </li>  </a>

               <button>  <a
                {{-- href="/listing/create"
                class="absolute top-1/3 right-10 bg-black text-white py-2 px-5" --}}
                > Create Post </a
            >  </button>

            </ul>
         </div>


         {{-- <div class="navdivregister">
            <ul>
                <a href="">  <li> Login </li>  </a>
                <a href="">  <li> Sign up </li>  </a>
            </ul>  --}}

            <form method="POST" action="/logout" enctype="multipart/form-data">

                @csrf
                <div class="navdivregister">
                <button class="logout">
                    Logout
                </button>
                <img src="\images\dunia.png" class="userimg">



            </form>
         </div>

        </div>

    </div>


    @else

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


         {{-- <div class="navdivregister">
            <ul>
                <a href="">  <li> Login </li>  </a>
                <a href="">  <li> Sign up </li>  </a>
            </ul>  --}}

            <form method="POST" action="/logout" enctype="multipart/form-data">

                @csrf
                <div class="navdivregister">
                <button class="logout">
                    Logout
                </button>
                <img src="\images\dunia.png" class="userimg">



            </form>
         </div>

        </div>

    </div>


    <br/>
    <br/>
    @endauth


    @yield('mycontent')
    </body>
</html>