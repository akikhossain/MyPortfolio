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
    @vite('resources/js/portfolio.js')
    <title>Discover Akik Hossain</title>

</head>

<body class="bg-gradient-to-r from-indigo-300 from-10% via-sky-300 via-30% to-emerald-300 to-90%">
    <header class="bg-gradient-to-r from-indigo-300 from-10% via-sky-300 via-30% to-emerald-300 to-90%"
        style="background-image: url('{{ asset('assests/images/header_bg.png') }}'); background-repeat:no-repeat; background-position: bottom right, top left;">
        <div class="flex justify-start items-start">
            <div class="absolute ml-6 mt-1">
                <img id="fadeInOutImage" class="opacity-0 transition-opacity duration-1000 mt-10"
                    src="{{ asset('assests/images/developer.png') }}" alt="">
            </div>
            <nav class="flex justify-between container mx-auto items-center  ">
                <div class="font-bold text-5xl mt-10">
                    {{-- <h3><a href=""></a>AK<span class="text-orange-500">I</span>K</h3> --}}
                    <img class="w-25 h-14" src="{{ asset('assests/images/4.png') }}" alt="">
                </div>
                <div class="mt-10">
                    <ul class="flex gap-10 text-xl">
                        <li><a href="">Portfolio</a></li>
                        <li><a href="">Blog</a></li>
                        <li><a role="button"
                                class="bg-orange-600 hover:bg-green-700 font-bold text-white px-4 py-2 border rounded">
                                Hire Me
                            </a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="flex justify-between container mx-auto items-center mt-20">
            <div>
                <h3 class="text-5xl mb-5">Hi, I am</h3>
                <h1 class="font-bold text-8xl mb-5">Akik Hossain</h1>
                <p class="mb-8 text-xl text-gray-500 leading-7 w-[556px]">
                    Recent Computer Science graduate with a passion for web development. Let's create something
                    exceptional.

                <div class="mt-12">
                    <a role="button"
                        class="download-btn bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500  hover:from-pink-500 hover:to-yellow-500 font-bold text-white text-xl px-8 mr-2 py-4 border  rounded-lg">
                        <i class="fa-solid fa-download mr-1 animate-bounce"></i> Download CV
                    </a>
                    <a role="button"
                        class="download-btn bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500  hover:from-pink-500 hover:to-yellow-500 font-bold text-white text-xl px-8 mr-2 py-4 border  rounded-lg">
                        <i class="fa-solid fa-phone mr-1"></i> Contact
                    </a>
                </div>
            </div>
            <div class="mt-10 bg-cover bg-center bg-no-repeat items-end">
                <img class="w-[715px] h-[650px]    relative left-[200px] border-10 border-gray-500"
                    src="{{ asset('assests/images/akikh3.png') }}" alt="akik hossain" />
            </div>
        </div>
    </header>
    <main>
        {{-- about me section --}}

        <section class="mt-[130px] p-[150px] bg-orange-50 rounded-xl max-w-screen-xl mx-auto">
            <h3 class="text-center font-bold text-4xl mb-10">About Me</h3>
            <p class="text-center text-gray-500 text-xl leading-7	">
                To leverage my skills in web development and contribute to creating visually <br> appealing and
                user-friendly
                websites.
                Seeking an opportunity for professional growth and learning in a dynamic work environment.
            </p>
            <div class="flex justify-around text-center mt-14 text-2xl">
                <div class="about-info">
                    <h4 class="info-title">Name:</h4>
                    <p class="font-bold mt-1">Akik Hossain</p>
                </div>
                <div class="about-info">
                    <h4 class="info-title">Email:</h4>
                    <p class="font-bold mt-1">mr.akikhossain@gmail.com</p>
                </div>
                <div class="about-info">
                    <h4 class="info-title">Date of birth:</h4>
                    <p class="font-bold mt-1">15 March 2000</p>
                </div>
                <div class="about-info">
                    <h4 class="info-title">From:</h4>
                    <p class="font-bold mt-1">Dhaka, Bangladesh</p>
                </div>
            </div>
        </section>
        {{-- end about me section--}}


        {{-- what i do section --}}

        <section class="mt-[130px] py-[30px] px-[150px] container mx-auto">
            <h3 class="text-center font-bold text-4xl mb-4">What I Do</h3>
            <p class="text-center text-gray-500 text-xl leading-7	">
                I have more than 10 years experience building software for clients all
                over the world. Below is a quick <br />
                overview of my main technical skill sets and technologies i use. Want
                to find out more about my experience? <br />
                Check out my online resume and project portfolio
            </p>
            <div class="flex gap-6 mt-12">
                <div
                    class="p-8 leading-7 hover:bg-gray-600 hover:text-white shadow-xl transform rounded-xl bg-white transition duration-300 hover:scale-105">
                    <img src="{{ asset('assests/images/icons/js.png') }}" alt="vanilla Javascript" />
                    <h3 class="font-bold text-xl mt-4">Vanilla JavaScript</h3>
                    <p class="skill-description mt-4 text-gray-500">
                        List skill/technologies here. You can change the icon above to any
                        of the 1500+ FontAwesome 5 free icons available.
                    </p>
                </div>
                <div
                    class="p-8 leading-7 hover:bg-gray-600 hover:text-white shadow-xl transform rounded-xl bg-white transition duration-300 hover:scale-105">
                    <img src="{{ asset('assests/images/icons/react.png') }}" alt="vanilla Javascript" />
                    <h3 class="font-bold text-xl mt-4">Vanilla JavaScript</h3>
                    <p class="skill-description mt-4">
                        List skill/technologies here. You can change the icon above to any
                        of the 1500+ FontAwesome 5 free icons available.
                    </p>
                </div>
                <div class="p-8 leading-7  shadow-xl">
                    <img src="{{ asset('assests/images/icons/react.png') }}" alt="vanilla Javascript" />
                    <h3 class="font-bold text-xl mt-4">Vanilla JavaScript</h3>
                    <p class="skill-description mt-4">
                        List skill/technologies here. You can change the icon above to any
                        of the 1500+ FontAwesome 5 free icons available.
                    </p>
                </div>
                <div class="p-8 leading-7  shadow-xl">
                    <img src="{{ asset('assests/images/icons/react.png') }}" alt="vanilla Javascript" />
                    <h3 class="font-bold text-xl mt-4">Vanilla JavaScript</h3>
                    <p class="skill-description mt-4">
                        List skill/technologies here. You can change the icon above to any
                        of the 1500+ FontAwesome 5 free icons available.
                    </p>
                </div>
            </div>
        </section>
        {{-- end what i do section --}}


        {{-- Education section start --}}

        <section class="mt-[130px] max-w-screen-xl mx-auto">
            <h3 class="text-center font-bold text-4xl mb-16">A summary of My Resume</h3>
            <div class="flex gap-[100px]">
                <div class="resume-column">
                    <h3 class="text-gray-700 text-3xl font-bold mb-6">My Education</h3>
                    <div class="resume-item">
                        <h2 class="text-gray-600 text-2xl font-bold mb-3">Bachelor of Computer Science and Engineering
                        </h2>
                        <h3 class="text-gray-500 text-xl font-bold mb-5">
                            International University of Business Agriculture and Technology / 2020 - 2023
                        </h3>
                        <p class="text-gray-400 text-lg font-thin   mb-5">
                            As a recent graduate, I hold a Bachelor's degree in Computer Science and Engineering from
                            the International University of Business Agriculture and Technology, completing my studies
                            in 2023.
                        </p>
                    </div>
                    <hr class="mb-5" />
                    <div class="resume-item">
                        <h2 class="text-gray-600 text-2xl font-bold mb-3">Higher Secondary Certificate</h2>
                        <h3 class="text-gray-500 text-xl font-bold mb-5">
                            Hazi Asmat Government College / 2017 - 2019
                        </h3>
                        <p class="text-gray-400 text-lg font-thin mb-5">
                            List skill/technologies here. You can change the icon above to
                            any of the 1500+ FontAwesome 5 free icons available. Aenean
                            commodo ligula eget dolor
                        </p>
                    </div>
                    <hr class="mb-5" />
                    <div class="resume-item">
                        <h2 class="text-gray-600 text-2xl font-bold mb-3">Secondary School Certificate</h2>
                        <h3 class="text-gray-500 text-xl font-bold mb-5">
                            Kalipur High School / 2016 - 2017
                        </h3>
                        <p class="text-gray-400 text-lg font-thin   mb-5">
                            List skill/technologies here. You can change the icon above to
                            any of the 1500+ FontAwesome 5 free icons available. Aenean
                            commodo ligula eget dolor
                        </p>
                    </div>
                </div>
                <div class="resume-column">
                    <h3 class="text-gray-700 text-3xl font-bold mb-6">My Experience</h3>
                    <div class="resume-item">
                        <h2 class="text-gray-600 text-2xl font-bold mb-3">Sr. Font End Developer</h2>
                        <h3 class="text-gray-500 text-xl font-bold mb-5">Apple Inc / 2020 Current</h3>
                        <p class="text-gray-400 text-lg font-thin mb-5">
                            List skill/technologies here. You can change the icon above to
                            any of the 1500+ FontAwesome 5 free icons available. Aenean
                            commodo ligula eget dolor
                        </p>
                    </div>
                    <hr class="mb-5" />
                    <div class="resume-item">
                        <h2 class="text-gray-600 text-2xl font-bold mb-3">Sr. Font End Developer</h2>
                        <h3 class="text-gray-500 text-xl font-bold mb-5">Dribbble Inc / 2018 2022</h3>
                        <p class="text-gray-400 text-lg font-thin mb-5">
                            List skill/technologies here. You can change the icon above to
                            any of the 1500+ FontAwesome 5 free icons available. Aenean
                            commodo ligula eget dolor
                        </p>
                    </div>
                    <hr class="mb-5" />
                    <div class="resume-item">
                        <h2 class="text-gray-600 text-2xl font-bold mb-3">Sr. Font End Developer</h2>
                        <h3 class="text-gray-500 text-xl font-bold mb-5">Adobe Inc / 2017 2018</h3>
                        <p class="text-gray-400 text-lg font-thin mb-5">
                            List skill/technologies here. You can change the icon above to
                            any of the 1500+ FontAwesome 5 free icons available. Aenean
                            commodo ligula eget dolor
                        </p>
                    </div>
                </div>
            </div>
            <div class="mt-12 text-center">
                <a role="button"
                    class="download-btn bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500  hover:from-pink-500 hover:to-yellow-500 font-bold text-white text-xl px-8 mr-2 py-4 border  rounded-lg">
                    <i class="fa-solid fa-download mr-1 animate-bounce"></i> Download CV
                </a>
            </div>
        </section>
        {{-- End Education section --}}
    </main>

    {{-- Footer Section --}}

    <footer class="flex py-36 px-20 mt-20 gap-20">
        <div class="w-1/2">
            <h3 class="font-bold text-4xl mb-10 text-center">Lets Connect</h3>
            <p class="text-gray-600 text-center text-lg font-normal mb-10">
                Please fill out the form on this section to contact with me or call
                between <br />
                9:00 A.M and 8.00 P.M ET, Monday through Friday.
            </p>
            <div class="flex items-center justify-center gap-4 text-4xl">
                <a target="_blank" href="https://www.facebook.com/akikhossain.abid"><i
                        class="fa-brands fa-facebook hover:text-blue-700"></i></a>
                <a target="_blank" href="https://github.com/akikhossain"><i
                        class="fa-brands fa-square-github hover:text-rose-700"></i></a>
                <a target="_blank" href="https://www.linkedin.com/in/akikhossain/"><i
                        class="fa-brands fa-linkedin hover:text-yellow-700"></i></a>
                <a target="_blank" href="https://twitter.com/AKHS87"><i
                        class="fa-brands fa-x-twitter hover:text-green-700"></i></a>
            </div>
        </div>
        <div class="w-1/2">
            <h3 class="font-bold text-4xl mb-10 text-center">Let’s Message me</h3>
            <form action="" class="contact">
                <input type="text"
                    class="block mb-6 rounded-md bg-white p-4 text-gray-600 text-base font-normal border-none w-full"
                    placeholder="Your name" />
                <input class="block mb-6 rounded-md bg-white p-4 text-gray-600 text-base font-normal border-none w-full"
                    type="email" placeholder="Your email" />
                <textarea
                    class="block mb-6 rounded-md bg-white p-4 text-gray-600 text-base font-normal border-none w-full"
                    name="Message" placeholder="Message" id="" cols="30" rows="10"></textarea>
                <a type="submit"
                    class="download-btn bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500  hover:from-pink-500 hover:to-yellow-500 font-bold text-white text-xl px-8 mr-2 py-4 border  rounded-lg">
                    Submit
                </a>
            </form>
        </div>
    </footer>

    <script src="https://kit.fontawesome.com/5c95e5cc68.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5c95e5cc68.js" crossorigin="anonymous"></script>
</body>

</html>