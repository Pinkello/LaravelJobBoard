<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Pixel Positions</title>
        <link
            href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap"
            rel="stylesheet"
        />

        @vite(["resources/css/app.css", "resources/js/app.js"])
    </head>

    <body class="bg-black pb-20 font-hanken-grotesk text-white">
        <div class="px-10">
            <nav
                class="flex items-center justify-between border-b border-white/10 py-4"
            >
                <div>
                    <a href="/">
                        <img
                            src="{{ Vite::asset("resources/images/logo.avif") }}"
                            height="30"
                            width="30"
                        />
                    </a>
                </div>

                <div class="space-x-6 font-bold">
                    <a href="">Jobs</a>
                    <a href="">Carrers</a>
                    <a href="">Salaries</a>
                    <a href="">Companies</a>
                </div>

                @auth
                    <div class="flex space-x-6 font-bold">
                        <a href="/jobs/create">Post a job</a>

                        <form method="POST" action="/logout">
                            @csrf
                            @method("DELETE")

                            <button>Log out</button>
                        </form>
                    </div>
                @endauth

                @guest
                    <div class="space-x-6 font-bold">
                        <a href="/register">Sign up</a>
                        <a href="/login">Log in</a>
                    </div>
                @endguest
            </nav>

            <main class="mx-auto mt-10 max-w-[986px]">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
