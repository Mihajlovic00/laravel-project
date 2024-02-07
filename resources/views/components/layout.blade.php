<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <script src="//unpkg.com/alpinejs" defer></script>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#00DCFB",
                        },
                        fontFamily: {
                            zenDots: ['"Zen Dots"', "sans-serif"]
                        },
                    },
                },
            };
        </script>
        <title>Talentify | Find Jobs & Projects</title>
    </head>
    <body class="mb-48 font-zenDots bg-gradient-to-b from-[#0a1128] to-[#1282a2]  via-[#034078]">
        <nav class="flex justify-between items-center">
            <a href="/"><img class="w-24 h-26 ml-3" src="{{asset('images/new_logo_nobg.png')}}" alt="#"/></a>
            <ul class="flex space-x-6 mr-6 text-lg">
                @auth
                <li>
                    <span class="font-bold  text-laravel">
                        Welcome, {{auth()->user()->name}}.
                    </span>
                </li>
                <li>
                    <a href="/listings/manage" class="hover:text-laravel text-white"
                        ><i class="fa-solid fa-gear"></i>
                        Manage Listings</a
                    >
                </li>
                <li>
                    <form class="inline" method="POST" action="/logout">
                        @csrf
                        <button type="submit" class="text-white hover:text-laravel">
                            <i class="fa-solid fa-door-closed"></i>Logout
                        </button>
                    </form>
                </li>
                @else

                <li>
                    <a href="/register" class="hover:text-laravel text-white font-zenDots font-xs"
                        ><i class="fa-solid fa-user-plus"></i> Register</a
                    >
                </li>
                <li>
                    <a href="/login" class="hover:text-laravel text-white font-zenDots"
                        ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Login</a
                    >
                </li>
                @endauth
            </ul>
        </nav>
        <main>
      {{$slot}}
        </main>
        <footer
        class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-[#034078] text-white h-24 mt-24 opacity-90 md:justify-center"
    >
        <p class="ml-2">Copyright &copy; 2024, All Rights reserved</p>

        <a
            href="/listings/create"
            class="absolute top-1/3 right-10 bg-black text-white py-2 px-5"
            >Post Job</a
        >
    </footer>
    <x-flash-message/>
</body>
</html>

