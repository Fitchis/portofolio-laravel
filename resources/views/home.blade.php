@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <!-- Hero Section -->
    <section id="hero-section" class="py-10">
        <div class="max-w-6xl mx-auto flex flex-col-reverse sm:flex-row items-center space-y-8 sm:space-y-0">
            <!-- Image -->
            <div
                class="flex-shrink-0 w-48 h-48 sm:w-64 sm:h-64 rounded-full overflow-hidden shadow-xl border-4 border-gray-600">
                <img src="{{ asset('images/lupi.jpg') }}" alt="Your Name" class="object-cover w-full h-full">
            </div>

            <!-- Text -->
            <div id="hero-text" class="text-center sm:text-left space-y-6 sm:ml-12">
                <h1 class="text-5xl font-extrabold leading-tight animate__animated animate__fadeIn animate__delay-1s">
                    Hi, I'm Andi Luthfi Mohammad Abdillah Amri
                </h1>
                <div class="text-xl sm:text-2xl mt-4">
                    <p id="dynamic-text" class="font-semibold"></p>
                </div>
                <p class="text-xl sm:text-2xl animate__animated animate__fadeIn animate__delay-2s mb-6">
                    I'm a passionate web developer who loves building amazing websites and applications. Take a look at my
                    work and experience!
                </p>
                <div class="flex justify-center sm:justify-start space-x-6 mt-8">
                    <a href="/projects"
                        class="bg-gray-600 text-white font-semibold py-3 px-8 rounded-lg shadow-md transform transition-transform duration-300 hover:scale-105 hover:shadow-lg hover:bg-gray-700">
                        See My Projects
                    </a>
                    <a href="/about"
                        class="bg-transparent border-2 border-gray-600 text-gray-600 font-semibold py-3 px-8 rounded-lg shadow-md transform transition-transform duration-300 hover:scale-105 hover:border-gray-400 hover:text-gray-400">
                        Learn More About Me
                    </a>
                </div>
                <div id="social-links" class="flex justify-center sm:justify-start space-x-6 mt-8">
                    <a href="https://www.linkedin.com/in/andilthfi/" target="_blank" class="hover:text-gray-800">
                        <i class="fab fa-linkedin fa-2x"></i>
                    </a>
                    <a href="https://github.com/Fitchis" target="_blank" class="hover:text-gray-600">
                        <i class="fab fa-github fa-2x"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about-section" class="py-12 shadow-lg">
        <div class="max-w-6xl mx-auto text-center space-y-6">
            <h2 class="text-4xl font-bold">Who Am I?</h2>
            <p class="text-lg max-w-3xl mx-auto">
                I'm a passionate web developer specializing in modern web technologies. I enjoy creating beautiful and
                functional websites using Laravel, TailwindCSS, and other amazing tools.
            </p>
            <a href="/about" class="font-semibold text-xl mt-4 inline-block">
                Read more about me →
            </a>
        </div>
    </section>

    <!-- Skiils Section -->
    <section class="py-12 bg-white">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-4xl font-bold text-gray-800 mb-6">My Skills</h2>
            <p class="text-lg text-gray-600 mt-4 mb-10">Technologies I am proficient in, with a passion for creating clean,
                modern, and efficient solutions.</p>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Skill 1: Laravel -->
                <div class="relative group skill-bar">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Laravel</h3>
                    <div class="relative pt-1">
                        <div class="flex mb-2 items-center justify-between">
                            <span class="text-xs font-semibold inline-block py-1 uppercase">Expert</span>
                            <span class="text-xs font-semibold inline-block py-1 uppercase">86%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full">
                            <div class="bg-red-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full progress-bar"
                                style="width: 90%"></div>
                        </div>
                    </div>
                    <div
                        class="tooltip absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-8 bg-gray-500 text-white text-sm px-4 py-2 rounded-lg shadow-lg opacity-0 group-hover:opacity-100 group-hover:translate-y-2 transition-all duration-300 ease-in-out">
                        Expertise in Laravel Framework for Backend Development
                    </div>
                </div>

                <!-- Skill 2: TailwindCSS -->
                <div class="relative group skill-bar">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">TailwindCSS</h3>
                    <div class="relative pt-1">
                        <div class="flex mb-2 items-center justify-between">
                            <span class="text-xs font-semibold inline-block py-1 uppercase">Advanced</span>
                            <span class="text-xs font-semibold inline-block py-1 uppercase">80%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full">
                            <div class="bg-teal-500 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full progress-bar"
                                style="width: 80%"></div>
                        </div>
                    </div>
                    <div
                        class="tooltip absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-8 bg-gray-500 text-white text-sm px-4 py-2 rounded-lg shadow-lg opacity-0 group-hover:opacity-100 group-hover:translate-y-2 transition-all duration-300 ease-in-out">
                        Advanced Styling with TailwindCSS
                    </div>
                </div>

                <!-- Skill 3: JavaScript -->
                <div class="relative group skill-bar">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">JavaScript</h3>
                    <div class="relative pt-1">
                        <div class="flex mb-2 items-center justify-between">
                            <span class="text-xs font-semibold inline-block py-1 uppercase">Intermediate</span>
                            <span class="text-xs font-semibold inline-block py-1 uppercase">60%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full">
                            <div class="bg-yellow-500 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full progress-bar"
                                style="width: 60%"></div>
                        </div>
                    </div>
                    <div
                        class="tooltip absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-8 bg-gray-500 text-white text-sm px-4 py-2 rounded-lg shadow-lg opacity-0 group-hover:opacity-100 group-hover:translate-y-2 transition-all duration-300 ease-in-out">
                        Intermediate knowledge of JavaScript for Dynamic UIs
                    </div>
                </div>

                <!-- Skill 4: HTML -->
                <div class="relative group skill-bar">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">HTML</h3>
                    <div class="relative pt-1">
                        <div class="flex mb-2 items-center justify-between">
                            <span class="text-xs font-semibold inline-block py-1 uppercase">Advanced</span>
                            <span class="text-xs font-semibold inline-block py-1 uppercase">85%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full">
                            <div class="bg-orange-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full progress-bar"
                                style="width: 85%"></div>
                        </div>
                    </div>
                    <div
                        class="tooltip absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-8 bg-gray-500 text-white text-sm px-4 py-2 rounded-lg shadow-lg opacity-0 group-hover:opacity-100 group-hover:translate-y-2 transition-all duration-300 ease-in-out">
                        Strong foundation in HTML for Web Structure
                    </div>
                </div>

                <!-- Skill 5: ReactJS -->
                <div class="relative group skill-bar">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">ReactJS</h3>
                    <div class="relative pt-1">
                        <div class="flex mb-2 items-center justify-between">
                            <span class="text-xs font-semibold inline-block py-1 uppercase">Beginner</span>
                            <span class="text-xs font-semibold inline-block py-1 uppercase">40%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full">
                            <div class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full progress-bar"
                                style="width: 40%"></div>
                        </div>
                    </div>
                    <div
                        class="tooltip absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-8 bg-gray-500 text-white text-sm px-4 py-2 rounded-lg shadow-lg opacity-0 group-hover:opacity-100 group-hover:translate-y-2 transition-all duration-300 ease-in-out">
                        Basic experience with ReactJS for Dynamic UIs
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="py-12 bg-white">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-4xl font-bold text-gray-800 mb-8">Projects</h2>
            <p class="text-lg text-gray-600 mt-4 mb-10">Here are some of the projects I’ve worked on. Click to learn more
                about each project.</p>

            <div class="projects-grid">
                <!-- Project 1 -->
                <div class="project-card">
                    <img src="{{ asset('images/PasarDigital.png') }}" alt="Project 1"
                        class="w-full h-48 object-cover mb-4 rounded-md">
                    <h3 class="project-title">Pasar Digital</h3>
                    <p class="project-description mt-2">Website yang menyediakan informasi tentang pasar yang ada di daerah
                        Surabaya.</p>
                    <a href="#" class="project-link mt-4 block">View Project</a>
                </div>

                <!-- Project 2 -->
                <div class="project-card">
                    <img src="{{ asset('images/KoneksiKita.png') }}" alt="Project 2"
                        class="w-full h-48 object-cover mb-4 rounded-md">
                    <h3 class="project-title">Koneksi Kita</h3>
                    <p class="project-description mt-2">Website khusus untuk mahasiswa Bisnis Digital Telkom University
                        Surabaya.</p>
                    <a href="#" class="project-link mt-4 block">View Project</a>
                </div>

                <!-- Project 3 -->
                <div class="project-card">
                    <img src="{{ asset('images/ZaStore.png') }}" alt="Project 3"
                        class="w-full h-48 object-cover mb-4 rounded-md">
                    <h3 class="project-title">ZaStoreGames</h3>
                    <p class="project-description mt-2">Website Top-up game termurah dan terpercaya.</p>
                    <a href="https://www.zastoregames.id/id" class="project-link mt-4 block">View Project</a>
                </div>
            </div>
            <!-- Button to see all projects -->
            <div class="mt-8">
                <a href="/projects"
                    class="inline-block bg-gradient-to-r from-gray-500 to-gray-600 text-white py-4 px-10 rounded-full shadow-lg transform transition-all duration-500 ease-in-out hover:scale-110 hover:from-gray-600 hover:to-gray-300 hover:shadow-2xl hover:ring-2 hover:ring-blue-300">
                    See All Projects
                </a>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-16 bg-white text-center relative overflow-hidden">
        <div class="absolute inset-0 bg-gray-500 opacity-10 ">
        </div>
        <div class="max-w-4xl mx-auto space-y-6 relative z-10">
            <!-- Header with animation -->
            <h3
                class="text-3xl font-bold text-gray-800 leading-tight transform transition-all duration-500 hover:text-gray-600 hover:scale-105">
                Ready to Work Together?
            </h3>

            <!-- Description with subtle hover effect -->
            <p class="text-lg text-gray-600 drop-shadow-md transform transition-all duration-500 hover:text-gray-800">
                If you have an exciting project or just want to get in touch, feel free to contact me. Let's create
                something amazing!
            </p>

            <!-- Button with dynamic hover effect -->
            <a href="/contact"
                class="bg-gray-600 text-white font-semibold py-3 px-8 rounded-lg shadow-md transform transition-all duration-300 hover:scale-110 hover:shadow-2xl hover:bg-gray-700 hover:text-yellow-50">
                Contact Me
            </a>
        </div>
    </section>

@endsection
