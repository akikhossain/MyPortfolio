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

<body class="bg-gradient-to-r from-indigo-300 from-10% via-sky-300 via-30% to-purple-300 to-90% ">
    <header id="home" class=" "
        style="background-image: url('{{ asset('assests/images/header_bg.png') }}'); background-repeat:no-repeat; background-position: bottom right, top left;">
        <div class="flex justify-start items-start ">
            <div class="absolute ml-6 mt-1">
                <img id="fadeInOutImage" class="opacity-0 transition-opacity duration-1000 mt-20 h-[650px]"
                    src="{{ asset('assests/images/developer.png') }}" alt="">
            </div>
            <nav
                class="fixed w-full z-20 bg-gradient-to-r from-indigo-300 from-10% via-sky-300 via-30% to-purple-300 to-90% ">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-2">
                    <a href="" class="flex items-center">
                        <img src="{{ asset('assests/images/logo2.png') }}" class="h-14" alt="Flowbite Logo">
                        {{-- <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Akik
                            Hossain</span> --}}
                    </a>
                    <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                        <a href="mailto:mr.akikhossain@gmail.com"
                            class="text-white bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 hover:from-pink-500 hover:to-yellow-500 font-bold text-lg px-4 py-1 mr-2 border rounded-lg border-none">
                            Hire Me
                        </a>
                        <button data-collapse-toggle="navbar-sticky" type="button"
                            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                            aria-controls="navbar-sticky" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 17 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                            </svg>
                        </button>
                    </div>
                    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1"
                        id="navbar-sticky">
                        <ul
                            class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                            <li>
                                <a href="#home" class="" aria-current="page">Home</a>
                            </li>
                            <li>
                                <a href="#about" class="">About</a>
                            </li>
                            <li>
                                <a href="#services" class="">Services</a>
                            </li>
                            <li>
                                <a href="#projects" class="">Projects</a>
                            </li>
                            <li>
                                <a href="#contact" class="">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        </div>
        <div class="flex justify-between container mx-auto items-center mt-20 ">
            <div>
                <div class="text">
                    <p>Hello, I am</p>
                    <p>
                        <span class="word wisteria">creative.</span>
                        <span class="word belize">innovative.</span>
                        <span class="word pomegranate">passionate.</span>
                        <span class="word green">dedicated.</span>
                        <span class="word midnight">skilled.</span>
                    </p>
                </div>
                <h1 class="font-bold text-8xl mb-8">Akik Hossain</h1>
                <p class="mb-8 text-xl text-gray-500 leading-7 w-[556px]">
                    Recent Computer Science graduate with a passion for web development. Let's create something
                    exceptional.

                <div class="mt-8">
                    <a href="{{ asset('Akik Hossain.pdf') }}" target="_blank" role="button"
                        class="download-btn bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500  hover:from-pink-500 hover:to-yellow-500 font-bold text-white text-xl px-8 mr-2 py-4 border  rounded-lg border-none">
                        <i class="fa-solid fa-download mr-1 animate-bounce"></i> Download CV
                    </a>
                    <a role="button"
                        class="download-btn bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500  hover:from-pink-500 hover:to-yellow-500 font-bold text-white text-xl px-8 mr-2 py-4 border  rounded-lg border-none">
                        <i class="fa-solid fa-phone mr-1 animate-bounce"></i> Contact
                    </a>
                </div>
            </div>
            <div class="mt-10 bg-cover bg-center bg-no-repeat items-end">
                <img class="w-[715px] h-[650px]    relative left-[175px] border-10 border-gray-500"
                    src="{{ asset('assests/images/akikh3.png') }}" alt="akik hossain" />
            </div>
        </div>
    </header>
    <main class="bg-gradient-to-r from-indigo-300 from-10% via-sky-300 via-30% to-emerald-300 to-90%" style=" ">
        {{-- about me section --}}
        {{-- <section class="mt-[130px] p-[150px]  rounded-xl max-w-screen-xl mx-auto">
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
        </section> --}}

        <section id="about" class="p-[150px]  rounded-xl max-w-screen-xl mx-auto" id="about">
            <h2 class="text-center font-bold text-4xl mb-32 uppercase">About</h2>

            <div class="flex content-center items-center gap-16">
                <div class="about_img">
                    <img class="w-[4000px] h-[700px] rounded-full drop-shadow-sm hover:drop-shadow-2xl"
                        src="{{ asset('assests/images/formal.png') }}" alt="">
                </div>

                <div class="about_text">
                    <h2 class="font-bold text-3xl mb-8">Hello</h2>
                    <p class="font-semibold text-md text-justify">I'm Akik Hossain, a recent Computer Science and
                        Engineering
                        graduate from
                        the
                        International University of Business Agriculture and Technology with a CGPA of 3.77. I completed
                        a Trainee Program at Kodeeo Limited, gaining hands-on experience in Laravel, PHP, MySQL, and
                        OOP. I led the development of an Employee Management System with role-based access and a Library
                        Management System with a user-friendly interface. Proficient in C++, C, JavaScript, HTML5, CSS3,
                        React, Tailwind, Bootstrap, and Laravel, I'm eager to contribute my skills to a dynamic work
                        environment and create visually appealing websites.
                    </p>
                </div>
            </div>
        </section>

        {{-- end about me section--}}


        {{-- what i do section --}}

        <section id="services" class="mt-[100px] py-[30px] px-[150px] container mx-auto">
            <h3 class="text-center font-bold text-4xl mb-8 uppercase">What I Do</h3>
            <div class="text-center">
                <p class=" text-gray-500 text-xl leading-7 mb-8">
                    I have more than 10 years experience building software for clients all
                    over the world. Below is a quick <br />
                    overview of my main technical skill sets and technologies i use. Want
                    to find out more about my experience? <br />
                    Check out my online resume and project portfolio
                </p>
            </div>
            <div class="grid grid-cols-4 gap-6 mt-12">
                <div
                    class="p-8 leading-7 hover:bg-gray-600 hover:text-white shadow-xl transform rounded-xl bg-white transition duration-1000 hover:border-gray-200 hover:scale-105">
                    <img src="{{ asset('assests/images/icons/js.png') }}" alt="vanilla Javascript" />
                    <h3 class="font-bold text-xl mt-4">Vanilla JavaScript</h3>
                    <p class="skill-description mt-4">
                        JavaScript powers web interactivity, crucial for responsive sites and dynamic applications,
                        enhancing user experience.
                    </p>
                </div>
                <div
                    class="p-8 leading-7 hover:bg-gray-600 hover:text-white shadow-xl transform rounded-xl bg-white transition duration-1000 hover:border-gray-200 hover:scale-105">
                    <img src="{{ asset('assests/images/tailwind.jpg') }}" alt="vanilla Javascript" />
                    <h3 class="font-bold text-xl mt-4">Tailwind</h3>
                    <p class="skill-description mt-4">
                        Tailwind CSS: Rapid, flexible styling with utility-first classes for efficient, modern,
                        responsive web development.
                    </p>
                </div>
                <div
                    class="p-8 leading-7 hover:bg-gray-600 hover:text-white shadow-xl transform rounded-xl bg-white transition duration-1000 hover:border-gray-200 hover:scale-105">
                    <img src="{{ asset('assests/images/php.png') }}" alt="vanilla Javascript" />
                    <h3 class="font-bold text-xl mt-4">PHP</h3>
                    <p class="skill-description mt-4">
                        PHP powers dynamic web pages, seamlessly integrating with HTML, handling data, forms, and
                        databases for interactive websites.
                    </p>
                </div>
                <div
                    class="p-8 leading-7 hover:bg-gray-600 hover:text-white shadow-xl transform rounded-xl bg-white transition duration-1000 hover:border-gray-200 hover:scale-105">
                    <img src="{{ asset('assests/images/icons/react.png') }}" alt="vanilla Javascript" />
                    <h3 class="font-bold text-xl mt-4">Laravel</h3>
                    <p class="skill-description mt-4">
                        Laravel is a free, open-source PHP web framework. Created by Taylor Otwell, it follows the
                        model–view–controller (MVC) architectural pattern.
                    </p>
                </div>
            </div>
        </section>
        {{-- end what i do section --}}


        {{-- Education section start --}}

        <section class="mt-[130px] max-w-screen-xl mx-auto py-11">
            <h3 class="text-center font-bold text-4xl mb-20 uppercase">A summary of My Resume</h3>
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
            <div class="mt-12 text-center" style=" ">
                <a href="{{ asset('Akik Hossain.pdf') }}" role="button"
                    class="download-btn bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500  hover:from-pink-500 hover:to-yellow-500 font-bold text-white text-xl px-8 mr-2 py-4 rounded-lg border-none">
                    <i class="fa-solid fa-download mr-1 animate-bounce"></i> Download CV
                </a>
            </div>
        </section>

        {{-- Education section end --}}

        {{-- Project Section --}}

        <section id="projects" class="mt-[150px] py-[30px] px-[150px] mb-[100px] container mx-auto">
            <h3 class="text-center font-bold text-4xl mb-8">PROJECTS</h3>
            <div class="text-center">
                <p class="text-gray-500 text-xl leading-7 mb-8">
                    I have more than 10 years experience building software for clients all over the world. Below is a
                    quick <br />
                    overview of my main technical skill sets and technologies I use. Want to find out more about my
                    experience? <br />
                    Check out my online resume and project portfolio.
                </p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-12 mb-8">
                <a href="https://github.com/akikhossain/Employee-Management-System" target="_blank" class="block">
                    <div
                        class="flex flex-col justify-between p-8 hover:bg-gray-600 hover:text-white shadow-xl transform rounded-xl bg-white transition duration-1000 hover:scale-105">
                        <img src="{{ asset('assests/images/image.png') }}" alt="Project 1"
                            class="h-52 w-full object-cover rounded-xl" />
                        <h3 class="font-bold text-xl mt-4 text-center uppercase">Employee System | Laravel</h3>
                    </div>
                </a>
                <a href="https://github.com/akikhossain/onlineShop" target="_blank" class="block">
                    <div
                        class="flex flex-col justify-between p-8 hover:bg-gray-600 hover:text-white shadow-xl transform rounded-xl bg-white transition duration-1000 hover:scale-105">
                        <img src="{{ asset('assests/images/image2.png') }}" alt="Project 2"
                            class="h-52 w-full object-cover rounded-xl" />
                        <h3 class="font-bold text-xl mt-4 text-center uppercase">E-Commerce Shop | Laravel</h3>
                    </div>
                </a>
                <a href="https://github.com/akikhossain/quizsystem" target="_blank" class="block">
                    <div
                        class="flex flex-col justify-between p-8 hover:bg-gray-600 hover:text-white shadow-xl transform rounded-xl bg-white transition duration-1000 hover:scale-105">
                        <img src="{{ asset('assests/images/image15.png') }}" alt="Project 2"
                            class="h-52 w-full object-cover rounded-xl" />
                        <h3 class="font-bold text-xl mt-4 text-center uppercase">QUIZ SYSTEM | Laravel</h3>
                    </div>
                </a>
                <a href="http://akikhossain.me/MyTube/" target="_blank" class="block">
                    <div
                        class="flex flex-col justify-between p-8 hover:bg-gray-600 hover:text-white shadow-xl transform rounded-xl bg-white transition duration-1000 hover:scale-105">
                        <img src="{{ asset('assests/images/image3.png') }}" alt="Project 3"
                            class="h-52 w-full object-cover rounded-xl" />
                        <h3 class="font-bold text-xl mt-4 text-center uppercase">MY TUBE | REACT</h3>
                    </div>
                </a>
                <a href="https://652fc06dfd970b09a6df59ff--careerhubbyreact.netlify.app/" target="_blank" class="block">
                    <div
                        class="flex flex-col justify-between p-8 hover:bg-gray-600 hover:text-white shadow-xl transform rounded-xl bg-white transition duration-1000 hover:scale-105">
                        <img src="{{ asset('assests/images/image14.png') }}" alt="Project 3"
                            class="h-52 w-full object-cover rounded-xl" />
                        <h3 class="font-bold text-xl mt-4 text-center uppercase">Career Hub | REACT</h3>
                    </div>
                </a>
                <a href="http://akikhossain.me/Phone-Hunter-API/" target="_blank" class="block">
                    <div
                        class="flex flex-col justify-between p-8 hover:bg-gray-600 hover:text-white shadow-xl transform rounded-xl bg-white transition duration-1000 hover:scale-105">
                        <img src="{{ asset('assests/images/image4.png') }}" alt="Project 3"
                            class="h-52 w-full object-cover rounded-xl" />
                        <h3 class="font-bold text-xl mt-4 text-center uppercase">Phone Hunter | JavaScript</h3>
                    </div>
                </a>
                <a href="http://akikhossain.me/Shop-Craze/" target="_blank" class="block">
                    <div
                        class="flex flex-col justify-between p-8 hover:bg-gray-600 hover:text-white shadow-xl transform rounded-xl bg-white transition duration-1000 hover:scale-105">
                        <img src="{{ asset('assests/images/image5.png') }}" alt="Project 3"
                            class="h-52 w-full object-cover rounded-xl" />
                        <h3 class="font-bold text-xl mt-4 text-center uppercase">Shop-Craze | javascript</h3>
                    </div>
                </a>
                <a href="http://akikhossain.me/Simple-Bank-Manager-Monitor-Deposits-and-Withdrawals/" target="_blank"
                    class="block">
                    <div
                        class="flex flex-col justify-between p-8 hover:bg-gray-600 hover:text-white shadow-xl transform rounded-xl bg-white transition duration-1000 hover:scale-105">
                        <img src="{{ asset('assests/images/image6.png') }}" alt="Project 3"
                            class="h-52 w-full object-cover rounded-xl" />
                        <h3 class="font-bold text-xl mt-4 text-center uppercase">Bank Manager | Javascript</h3>
                    </div>
                </a>
                <a href="http://akikhossain.me/Geometric-Guru/" target="_blank" class="block">
                    <div
                        class="flex flex-col justify-between p-8 hover:bg-gray-600 hover:text-white shadow-xl transform rounded-xl bg-white transition duration-1000 hover:scale-105">
                        <img src="{{ asset('assests/images/image7.png') }}" alt="Project 3"
                            class="h-52 w-full object-cover rounded-xl" />
                        <h3 class="font-bold text-xl mt-4 text-center uppercase">Geometric-Guru | Javascript</h3>
                    </div>
                </a>
                <a href="http://akikhossain.me/Fruit-Brust-with-Daisy-UI/" target="_blank" class="block">
                    <div
                        class="flex flex-col justify-between p-8 hover:bg-gray-600 hover:text-white shadow-xl transform rounded-xl bg-white transition duration-1000 hover:scale-105">
                        <img src="{{ asset('assests/images/image8.png') }}" alt="Project 3"
                            class="h-52 w-full object-cover rounded-xl" />
                        <h3 class="font-bold text-xl mt-4 text-center uppercase">Fruit-Brust</h3>
                    </div>
                </a>
                <a href="http://akikhossain.me/Tea-House-with-Daisy-UI/" target="_blank" class="block">
                    <div
                        class="flex flex-col justify-between p-8 hover:bg-gray-600 hover:text-white shadow-xl transform rounded-xl bg-white transition duration-1000 hover:scale-105">
                        <img src="{{ asset('assests/images/image9.png') }}" alt="Project 3"
                            class="h-52 w-full object-cover rounded-xl" />
                        <h3 class="font-bold text-xl mt-4 text-center uppercase">Tea House | tailwind</h3>
                    </div>
                </a>
                <a href="http://akikhossain.me/Biker-Zone-Project-with-Daisy-UI/" target="_blank" class="block">
                    <div
                        class="flex flex-col justify-between p-8 hover:bg-gray-600 hover:text-white shadow-xl transform rounded-xl bg-white transition duration-1000 hover:scale-105">
                        <img src="{{ asset('assests/images/image10.png') }}" alt="Project 3"
                            class="h-52 w-full object-cover rounded-xl" />
                        <h3 class="font-bold text-xl mt-4 text-center uppercase">Biker Zone | tailwind</h3>
                    </div>
                </a>
                <a href="http://akikhossain.me/GameZoneHub/" target="_blank" class="block">
                    <div
                        class="flex flex-col justify-between p-8 hover:bg-gray-600 hover:text-white shadow-xl transform rounded-xl bg-white transition duration-1000 hover:scale-105">
                        <img src="{{ asset('assests/images/image11.png') }}" alt="Project 3"
                            class="h-52 w-full object-cover rounded-xl" />
                        <h3 class="font-bold text-xl mt-4 text-center uppercase">Game Zone Hub</h3>
                    </div>
                </a>
                <a href="http://akikhossain.me/influence-gear/" target="_blank" class="block">
                    <div
                        class="flex flex-col justify-between p-8 hover:bg-gray-600 hover:text-white shadow-xl transform rounded-xl bg-white transition duration-1000 hover:scale-105">
                        <img src="{{ asset('assests/images/image12.png') }}" alt="Project 3"
                            class="h-52 w-full object-cover rounded-xl" />
                        <h3 class="font-bold text-xl mt-4 text-center uppercase">Influencer Gear</h3>
                    </div>
                </a>
                <a href="http://akikhossain.me/Legal-Solution-with-Daisy-UI/" target="_blank" class="block">
                    <div
                        class="flex flex-col justify-between p-8 hover:bg-gray-600 hover:text-white shadow-xl transform rounded-xl bg-white transition duration-1000 hover:scale-105">
                        <img src="{{ asset('assests/images/image13.png') }}" alt="Project 3"
                            class="h-52 w-full object-cover rounded-xl" />
                        <h3 class="font-bold text-xl mt-4 text-center uppercase">legal solution | tailwind</h3>
                    </div>
                </a>
            </div>
        </section>
    </main>

    {{-- Footer Section --}}

    <footer id="contact"
        class="flex py-36 px-20 gap-20 text-center bg-gradient-to-r from-indigo-300 from-10% via-sky-300 via-30% to-purple-300 to-90%">
        <div class="w-1/2">
            <h3 class="font-bold text-4xl mb-10 text-center uppercase">Lets Connect</h3>
            <p class="text-gray-600 text-center text-lg font-normal mb-10">
                Please fill out the form on this section to contact with me or call
                between <br />
                9:00 A.M and 8.00 P.M ET, Monday through Friday.
            </p>
            {{-- <div class="flex items-center justify-center gap-4 text-4xl">
                <a target="_blank" href="https://www.facebook.com/akikhossain.abid"><i
                        class="fa-brands fa-facebook hover:text-blue-700"></i></a>
                <a target="_blank" href="https://github.com/akikhossain"><i
                        class="fa-brands fa-square-github hover:text-rose-700"></i></a>
                <a target="_blank" href="https://www.linkedin.com/in/akikhossain/"><i
                        class="fa-brands fa-linkedin hover:text-yellow-700"></i></a>
                <a target="_blank" href="https://twitter.com/AKHS87"><i
                        class="fa-brands fa-x-twitter hover:text-green-700"></i></a>
            </div> --}}

            <ul class="social-icons mt-5">
                <li>
                    <a target="_blank" href="https://www.facebook.com/akikhossain.abid">
                        <i class="fab fa-facebook-f icon"></i>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://twitter.com/AKHS87">
                        <i class="fa-brands fa-x-twitter icon"></i>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://www.linkedin.com/in/akikhossain/">
                        <i class="fab fa-linkedin-in icon"></i>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://github.com/akikhossain">
                        <i class="fa-brands fa-square-github icon"></i>
                    </a>
                </li>
            </ul>

        </div>
        <div class="w-1/2">
            <h3 class="font-bold text-4xl mb-10 text-center uppercase">Let’s Message me</h3>
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
                    class="download-btn bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500  hover:from-pink-500 hover:to-yellow-500 font-bold text-white text-xl px-8 mr-2 py-4 border  rounded-lg border-none">
                    Submit
                </a>
            </form>
        </div>
    </footer>

    <script src="https://kit.fontawesome.com/5c95e5cc68.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5c95e5cc68.js" crossorigin="anonymous"></script>
</body>

</html>
