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

<body>
    <header class="bg-gray-200">
        <div class="flex justify-start items-start">
            <div class="absolute ml-6 mt-1">
                <img id="fadeInOutImage" class="opacity-0 transition-opacity duration-1000"
                    src="{{ asset('assests/images/developer.png') }}" alt="">
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
                                class="bg-orange-600 hover:bg-green-700 font-bold text-white px-4 py-2 border rounded">
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
                <p class="mb-3 text-xl text-gray-500 leading-7">
                    Shot what able cold new see hold.Friendly as an betrayed formerly
                    <br />
                    he. Morning because as to society behaved moments.
                </p>
                <div class="mt-8">
                    <a role="button"
                        class="download-btn bg-orange-600  hover:bg-green-700 font-bold text-white text-xl px-8 mr-2 py-4 border  rounded-lg">
                        <i class="fa-solid fa-download mr-1 animate-bounce"></i> Download CV
                    </a>
                    <a role="button"
                        class="contact-btn bg-orange-600  hover:bg-green-700 font-bold text-white text-xl px-8 py-4 border rounded-lg">
                        <i class="fa-solid fa-phone mr-1"></i> Contact
                    </a>
                </div>
            </div>
            <div class="mt-10">
                <img class="profile w-[500px] h-[550px] object-cover rounded-full border-10 border-gray-500"
                    src="{{ asset('assests/images/akikh.png') }}" alt="akik hossain" />
            </div>

        </div>
    </header>

    <main>
        {{-- about me section --}}
        <section class="mt-[130px] p-[150px] bg-orange-50 rounded-xl container mx-auto">
            <h3 class="text-center font-bold text-4xl mb-4">About Me</h3>
            <p class="text-center text-gray-500 text-xl leading-7	">
                I, m a designer & developer with a passion for web design. I enjoy
                developing simple, clean and <br />
                slick websites that provide real value to the end user. Thousands of
                clients have procured <br />
                exceptional resulfs while working with me. Delivering work within time
                and budget which meets <br />
                clients requirements in our mata.
            </p>
            <div class="flex justify-around text-center mt-12 text-2xl">
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
        <section>
            <h3 class="text-center font-bold text-4xl mb-4">A summary of My Resume</h3>
            <div class="resume-container">
                <div class="resume-column">
                    <h3 class="resume-column-title">My Education</h3>
                    <div class="resume-item">
                        <h2 class="resume-item-title">Master in Computer Engineering</h2>
                        <h3 class="resume-item-institute">
                            Harvard University / 2015 2017
                        </h3>
                        <p class="resume-item-description">
                            List skill/technologies here. You can change the icon above to
                            any of the 1500+ FontAwesome 5 free icons available. Aenean
                            commodo ligula eget dolor
                        </p>
                    </div>
                    <hr />
                    <div class="resume-item">
                        <h2 class="resume-item-title">Master in Computer Engineering</h2>
                        <h3 class="resume-item-institute">
                            Harvard University / 2015 2017
                        </h3>
                        <p class="resume-item-description">
                            List skill/technologies here. You can change the icon above to
                            any of the 1500+ FontAwesome 5 free icons available. Aenean
                            commodo ligula eget dolor
                        </p>
                    </div>
                    <hr />
                    <div class="resume-item">
                        <h2 class="resume-item-title">Master in Computer Engineering</h2>
                        <h3 class="resume-item-institute">
                            Harvard University / 2015 2017
                        </h3>
                        <p class="resume-item-description">
                            List skill/technologies here. You can change the icon above to
                            any of the 1500+ FontAwesome 5 free icons available. Aenean
                            commodo ligula eget dolor
                        </p>
                    </div>
                </div>
                <div class="resume-column">
                    <h3 class="resume-column-title">My Experience</h3>
                    <div class="resume-item">
                        <h2 class="resume-item-title">Sr. Font End Developer</h2>
                        <h3 class="resume-item-institute">Apple Inc / 2020 Current</h3>
                        <p class="resume-item-description">
                            List skill/technologies here. You can change the icon above to
                            any of the 1500+ FontAwesome 5 free icons available. Aenean
                            commodo ligula eget dolor
                        </p>
                    </div>
                    <hr />
                    <div class="resume-item">
                        <h2 class="resume-item-title">Sr. Font End Developer</h2>
                        <h3 class="resume-item-institute">Dribbble Inc / 2018 2022</h3>
                        <p class="resume-item-description">
                            List skill/technologies here. You can change the icon above to
                            any of the 1500+ FontAwesome 5 free icons available. Aenean
                            commodo ligula eget dolor
                        </p>
                    </div>
                    <hr />
                    <div class="resume-item">
                        <h2 class="resume-item-title">Sr. Font End Developer</h2>
                        <h3 class="resume-item-institute">Adobe Inc / 2017 2018</h3>
                        <p class="resume-item-description">
                            List skill/technologies here. You can change the icon above to
                            any of the 1500+ FontAwesome 5 free icons available. Aenean
                            commodo ligula eget dolor
                        </p>
                    </div>
                </div>
            </div>
            <div class="download-cv">
                <button class="btn-primary">
                    <i class="fa-solid fa-download"></i> Download CV
                </button>
            </div>
        </section>
        {{-- End Education section --}}
    </main>

    <script src="https://kit.fontawesome.com/5c95e5cc68.js" crossorigin="anonymous"></script>
</body>

</html>