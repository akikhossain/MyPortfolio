<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    @vite('resources/css/app.css')
    @vite('resources/css/portfolio.css')
    <title>Discover Akik Hossain</title>
</head>

<body>
    <header class="bg-orange-100">
        <div>

        </div>
        <nav class="flex justify-between container mx-auto items-center">
            <div class="font-bold text-5xl mt-10">
                <h3><a href=""></a>AK<span class="text-orange-500">I</span>K</h3>
            </div>
            <div class="mt-10">
                <ul class="flex gap-10 text-xl">
                    <li><a href="">Portfolio</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a role="button" class="bg-orange-600 hover:bg-red-700 text-white px-4 py-2 border rounded">
                            Hire Me
                        </a></li>
                </ul>
            </div>
        </nav>
        <div class="flex justify-between container mx-auto items-center">
            <div>
                <h3 class="text-5xl mb-2">Hi, I am</h3>
                <h1 class="font-bold text-8xl mb-2">Akik Hossain</h1>
                <p class="mb-2">
                    Shot what able cold new see hold.Friendly as an betrayed formerly
                    <br />
                    he. Morning because as to society behaved moments.
                </p>
                <div class="mt-8">
                    <a role="button" class="bg-orange-600 hover:bg-red-700 text-white text-xl px-8 py-4 border rounded">
                        Download CV
                    </a>
                    <a role="button" class="bg-orange-600 hover:bg-red-700 text-white text-xl px-8 py-4 border rounded">
                        Contact
                    </a>
                </div>
            </div>
            <div class="mt-10">
                <img class="profile w-[500px] h-[550px] object-cover rounded-full border-10 border-gray-500"
                    src="{{ asset('assests/images/akikh.png') }}" alt="akik hossain" />
            </div>

        </div>
    </header>


</body>

</html>