@extends('layouts.app')

@section('title', 'About')

@section('content')
    <div class="max-w-6xl mx-auto px-4 space-y-10">
        <!-- Judul -->
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-6 animate__animated animate__fadeIn animate__delay-1s">
            About Me</h1>

        <!-- Deskripsi Tentang Diri -->
        <div class="text-center mt-6 animate__animated animate__fadeIn animate__delay-1s">
            <p class="text-lg text-gray-600">
                I am a 8th-semester Digital Business student, focusing on Digital Marketing, Front-end Development, and Data
                Analysis. With a passion for digital marketing strategies and web development, I am committed to enhancing
                my skills and knowledge in the digital business world.
            </p>
        </div>

        <!-- Foto Profil dengan Hover Effect -->
        <div class="flex justify-center mt-10 animate__animated animate__zoomIn animate__delay-2s">
            <img src="{{ asset('images/lupi.jpg') }}" alt="Your Profile Picture"
                class="rounded-full w-40 h-40 object-cover shadow-lg transform transition-all duration-300 hover:scale-110 hover:rotate-12 hover:shadow-2xl">
        </div>

        <!-- Kontak & Sosial Media -->
        <div class="mt-16 text-center">
            <h2 class="text-3xl font-semibold text-gray-800 mb-6 animate__animated animate__fadeIn animate__delay-3s">Contact
                Information</h2>
            <p class="text-lg text-gray-600 mb-4 animate__animated animate__fadeIn animate__delay-4s">Feel free to connect
                with me through my contact details or social media profiles.</p>
            <div class="space-x-6">
                <p class="text-xl text-gray-800"><strong>Phone:</strong> 085343557836</p>
                <p class="text-xl text-gray-800"><strong>Email:</strong> <a href="mailto:andilthfi@gmail.com"
                        class="text-blue-500 hover:underline">andilthfi@gmail.com</a></p>
                <p class="text-xl text-gray-800"><strong>LinkedIn:</strong> <a href="https://linkedin.com/in/andilthfi"
                        class="text-blue-500 hover:underline">linkedin.com/in/andilthfi</a></p>
                <p class="text-xl text-gray-800"><strong>Location:</strong> Surabaya, Jawa Timur</p>
            </div>
        </div>

        <!-- Pendidikan -->
        <div class="mt-16">
            <h2
                class="text-3xl font-semibold text-gray-800 text-center mb-6 animate__animated animate__fadeIn animate__delay-5s">
                Education</h2>
            <div class="space-y-4">
                <div
                    class="bg-white p-6 rounded-lg shadow-lg transform transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                    <h3 class="text-2xl font-semibold text-gray-800">Institut Teknologi Telkom Surabaya</h3>
                    <p class="text-gray-600 mt-2">Bachelor's in Digital Business | GPA: 3.44/4.00</p>
                    <p class="text-gray-600 mt-4">Relevant Courses: Introduction to Digital Business Management, Marketing
                        Management, Strategy Management, Digital Marketing, Product Manager, and Big Data.</p>
                </div>
            </div>
        </div>

        <!-- Pengalaman Kerja -->
        <div class="mt-16">
            <h2
                class="text-3xl font-semibold text-gray-800 text-center mb-6 animate__animated animate__fadeIn animate__delay-6s">
                Work Experience</h2>
            <div class="space-y-4">
                <div
                    class="bg-white p-6 rounded-lg shadow-lg transform transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                    <h3 class="text-2xl font-semibold text-gray-800">Operator at Dinas Perpustakaan Dan Kearsipan Daerah
                        Bulukumba</h3>
                    <p class="text-gray-600 mt-2">Worked as an Operator at Dinas Perpustakaan Dan Kearsipan Daerah
                        Bulukumba.</p>
                </div>
                <div
                    class="bg-white p-6 rounded-lg shadow-lg transform transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                    <h3 class="text-2xl font-semibold text-gray-800">Web Developer Intern at Badan Pendapatan Daerah Kota
                        Surabaya</h3>
                    <p class="text-gray-600 mt-2">Part of the Kampus Merdeka program as a Web Developer Intern, working on
                        developing and maintaining internal websites.</p>
                </div>
            </div>
        </div>

        <!-- Penghargaan -->
        <div class="mt-16">
            <h2
                class="text-3xl font-semibold text-gray-800 text-center mb-6 animate__animated animate__fadeIn animate__delay-7s">
                Awards</h2>
            <div class="space-y-4">
                <div
                    class="bg-white p-6 rounded-lg shadow-lg transform transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                    <h3 class="text-2xl font-semibold text-gray-800">1st Place in Videography Competition</h3>
                    <p class="text-gray-600 mt-2">2020-2021 | Theme: Transformation of Education in the 5.0 Era</p>
                </div>
                <div
                    class="bg-white p-6 rounded-lg shadow-lg transform transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                    <h3 class="text-2xl font-semibold text-gray-800">2nd Place in Rektor Cup, Universitas Telkom Surabaya
                    </h3>
                    <p class="text-gray-600 mt-2">2022 | Represented the faculty in eSports competitions.</p>
                </div>
            </div>
        </div>

        <!-- Pengalaman Organisasi -->
        <div class="mt-16">
            <h2
                class="text-3xl font-semibold text-gray-800 text-center mb-6 animate__animated animate__fadeIn animate__delay-8s">
                Organizational Experience</h2>
            <div
                class="bg-white p-6 rounded-lg shadow-lg transform transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                <h3 class="text-2xl font-semibold text-gray-800">Chairperson of IMS (Ikatan Mahasiswa Sulawesi)</h3>
                <p class="text-gray-600 mt-2">2023 | Led the Sulawesi student organization at Tel-U Surabaya.</p>
            </div>
        </div>

        <!-- Sertifikasi -->
        <div class="mt-16">
            <h2
                class="text-3xl font-semibold text-gray-800 text-center mb-6 animate__animated animate__fadeIn animate__delay-9s">
                Certifications</h2>
            <ul class="list-disc space-y-2 text-lg text-gray-600 mx-auto max-w-xl">
                <li>Business Intelligence Tutorial for Beginners</li>
                <li>Data Visualization with Power BI</li>
                <li>Fundamentals of Digital Marketing Certification</li>
                <li>Google Analytics for Beginners Certification</li>
                <li>Google Tag Manager Fundamentals Certification</li>
                <li>Google Ads Search Certification</li>
                <li>Introduction to Data Studio Certification</li>
                <li>Social Media Certification</li>
                <li>SEO Certification Course</li>
                <li>Semrush SEO Toolkit Course</li>
            </ul>
        </div>

        <!-- Keahlian -->
        <div class="mt-16">
            <h2
                class="text-3xl font-semibold text-gray-800 text-center mb-6 animate__animated animate__fadeIn animate__delay-10s">
                Skills</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-8 text-center">
                <!-- HTML5 -->
                <div
                    class="skill-item bg-white shadow-lg rounded-xl p-6 transform transition-all duration-300 hover:scale-110 hover:shadow-2xl hover:translate-y-2">
                    <div class="text-4xl text-orange-600 mb-4">
                        <i class="fab fa-html5"></i>
                    </div>
                    <p class="text-gray-800 font-semibold">HTML5</p>
                    <p class="text-gray-600 mt-2">Semantic Markup for Websites</p>
                </div>

                <!-- CSS3 -->
                <div
                    class="skill-item bg-white shadow-lg rounded-xl p-6 transform transition-all duration-300 hover:scale-110 hover:shadow-2xl hover:translate-y-2">
                    <div class="text-4xl text-blue-600 mb-4">
                        <i class="fab fa-css3-alt"></i>
                    </div>
                    <p class="text-gray-800 font-semibold">CSS3</p>
                    <p class="text-gray-600 mt-2">Styling Web Pages</p>
                </div>

                <!-- Laravel -->
                <div
                    class="skill-item bg-white shadow-lg rounded-xl p-6 transform transition-all duration-300 hover:scale-110 hover:shadow-2xl hover:translate-y-2">
                    <div class="text-4xl text-red-600 mb-4">
                        <i class="fab fa-laravel"></i>
                    </div>
                    <p class="text-gray-800 font-semibold">Laravel</p>
                    <p class="text-gray-600 mt-2">Backend Web Development</p>
                </div>

                <!-- ReactJS -->
                <div
                    class="skill-item bg-white shadow-lg rounded-xl p-6 transform transition-all duration-300 hover:scale-110 hover:shadow-2xl hover:translate-y-2">
                    <div class="text-4xl text-blue-500 mb-4">
                        <i class="fab fa-react"></i>
                    </div>
                    <p class="text-gray-800 font-semibold">ReactJS</p>
                    <p class="text-gray-600 mt-2">Building Interactive UIs</p>
                </div>

                <!-- TailwindCSS -->
                <div
                    class="skill-item bg-white shadow-lg rounded-xl p-6 transform transition-all duration-300 hover:scale-110 hover:shadow-2xl hover:translate-y-2">
                    <div class="text-4xl text-teal-600 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            class="w-16 h-16 mx-auto">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6V3m0 18v-3m0-6h3m-6 0h3m3 3l2 2m-6 0l-2 2m2-6l2-2m0 0l2 2m0 0l-2 2m-4-6l-2-2m4 0l2-2m-6 0L6 6m6 0l2-2" />
                        </svg>
                    </div>
                    <p class="text-gray-800 font-semibold">TailwindCSS</p>
                    <p class="text-gray-600 mt-2">Utility-first CSS Framework</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Add AOS.js library for scroll animations -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
@endsection
