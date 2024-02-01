<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    @vite('resources/css/app.css')
    <title>Discover Akik Hossain</title>

</head>

<body>
    <header class="bg-orange-50">
        <div class="flex justify-start items-start">
            <div class="absolute ml-6 mt-1">
                <img src="{{ asset('assests/images/developer.png') }}" alt="">
            </div>
            <nav class="flex justify-between container mx-auto items-center">
                <div class="font-bold text-5xl mt-10">
                    {{-- <h3><a href=""></a>AK<span class="text-orange-500">I</span>K</h3> --}}
                    <img class="w-25 h-14" src="{{ asset('assests/images/4.png') }}" alt="">
                </div>
                <div class="mt-10">
                    <ul class="flex gap-10 text-xl">
                        <li><a href="">Portfolio</a></li>
                        <li><a href="">Blog</a></li>
                        <li><a role="button"
                                class="bg-orange-600 hover:bg-transparent hover:text-orange-600 font-bold text-white px-4 py-2 border rounded">
                                Hire Me
                            </a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="flex justify-between container mx-auto items-center mt-20">
            <div>
                <h3 class="text-5xl mb-3">Hi, I am</h3>
                <h1 class="font-bold text-8xl mb-4">Akik Hossain</h1>
                <p class="mb-3 text-xl">
                    Shot what able cold new see hold.Friendly as an betrayed formerly
                    <br />
                    he. Morning because as to society behaved moments.
                </p>
                <div class="mt-8">
                    <a role="button"
                        class="bg-orange-600 hover:bg-transparent hover:text-orange-600 font-bold text-white text-xl px-8 mr-2 py-4 border rounded"><i
                            class="fa-solid fa-download mr-1"></i>
                        Download CV
                    </a>
                    <a role="button"
                        class="bg-orange-600 hover:bg-red-700 hover:bg-transparent hover:text-orange-600 font-bold text-white text-xl px-8 py-4 border rounded"><i
                            class="fa-solid fa-phone mr-1"></i>
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

    <script src="https://kit.fontawesome.com/5c95e5cc68.js" crossorigin="anonymous"></script>
</body>

</html>