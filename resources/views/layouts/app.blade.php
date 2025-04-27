<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio">
    <title>@yield('title', 'Portfolio')</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    @vite('resources/css/app.css')
    <style>
        @keyframes fadeScaleInOut {
            0% {
                opacity: 0;
                transform: scale(0.9);
                color: #4A5568;
            }

            50% {
                opacity: 1;
                transform: scale(1.1);
                color: #3182CE;
                /* gray color on mid-animation */
            }

            100% {
                opacity: 0;
                transform: scale(0.9);
                color: #4A5568;
            }
        }

        #dynamic-text {
            display: inline-block;
            font-weight: bold;
            font-size: 1.5rem;
            letter-spacing: 1px;
            white-space: nowrap;
            opacity: 0;
            transform: scale(0.9);
            animation: fadeScaleInOut 6s ease-in-out infinite;
            transition: color 0.3s ease;
            background-image: linear-gradient(to right, #44494d, #63B3ED);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        #hero-text h1 {
            animation: fadeInUp 1s ease-out forwards;
        }

        #hero-text p {
            animation: fadeInUp 1.2s ease-out forwards;
        }

        #hero-text a {
            position: relative;
            display: inline-block;
            padding-bottom: 4px;
            font-weight: 600;
            transition: color 0.3s ease, padding 0.3s ease;
        }

        #hero-text a:hover {
            color: #b9c0c5;
            padding-bottom: 8px;
        }

        #hero-section img {
            border-radius: 50%;
            border: 4px solid #44494d;
            /* Border warna biru */
            transition: all 0.3s ease;
        }

        #hero-section img:hover {
            transform: scale(1.1);
            /* Efek zoom saat hover */
        }

        #social-links a {
            transition: color 0.3s ease;
        }

        #social-links a:hover {
            transform: scale(1.2);
            /* Efek zoom untuk ikon media sosial */
        }

        /* about section style */
        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        #about-section {

            color: rgb(8, 8, 8);
            /* Text color changed to white */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        #about-section h2 {
            animation: fadeInUp 1s ease-out forwards;
        }

        #about-section p {
            animation: fadeInUp 1.2s ease-out forwards;
        }

        #about-section a {
            position: relative;
            display: inline-block;
            padding-bottom: 4px;
            font-weight: 600;
            color: #808a92;
            /* Lighter gray for the link */
            transition: color 0.3s ease, padding 0.3s ease;
        }

        #about-section a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #44494d;
            /* Lighter gray underline */
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        #about-section a:hover {
            color: #3182CE;
            /* Darker gray on hover */
            padding-bottom: 8px;
        }

        #about-section a:hover::after {
            transform: scaleX(1);
        }

        /* Animasi untuk Skill Card */
        @keyframes scaleUp {
            0% {
                transform: scale(1);
            }

            100% {
                transform: scale(1.1);
            }
        }

        /* Animasi untuk Card Projects */
        @keyframes zoomIn {
            0% {
                transform: scale(0.95);
                opacity: 0;
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        /* Project Card */
        .project-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 10px;
            padding: 20px;
            background: white;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            position: relative;
            opacity: 0;
            animation: zoomIn 0.6s ease-out forwards;
        }

        /* Hover Effects */
        .project-card:hover {
            transform: translateY(-5px);
            /* Slightly move the card up */
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            cursor: pointer;
        }

        /* Title Styling */
        .project-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #2d3748;
            transition: color 0.3s ease;
        }

        .project-card:hover .project-title {
            color: #3182CE;
            /* Change color on hover */
        }

        /* Project Description Styling */
        .project-description {
            color: #718096;
            font-size: 1rem;
            transition: color 0.3s ease;
        }

        .project-card:hover .project-description {
            color: #4A5568;
            /* Darker color on hover */
        }

        /* View Project Link */
        .project-link {
            display: inline-block;
            margin-top: 10px;
            font-size: 1rem;
            color: #3182CE;
            font-weight: 600;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .project-link:hover {
            color: #2B6CB0;
            /* Slightly darker gray */
            transform: translateX(5px);
        }

        /* Fade In Effect for Grid */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 20px;
            opacity: 0;
            animation: fadeInUp 1s ease-out forwards;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-900">

    <header class="bg-gray-900 text-white p-6 shadow-lg sticky top-0 z-50 transition-all duration-300 ease-in-out"
        id="header">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <!-- Logo or Portfolio Title -->
            <a href="/"
                class="text-3xl font-extrabold tracking-wide hover:text-blue-500 transform transition-all duration-300">
                My Portfolio
            </a>

            <!-- Mobile Hamburger Icon -->
            <div class="lg:hidden">
                <button id="menu-toggle" class="text-3xl">
                    <i class="fas fa-bars"></i>
                </button>
            </div>

            <!-- Navigation Menu -->
            <nav class="hidden lg:flex space-x-6">
                <a href="/"
                    class="px-6 py-2 text-lg font-medium text-gray-200 hover:text-white transition duration-300 transform hover:scale-105">Home</a>
                <a href="/about"
                    class="px-6 py-2 text-lg font-medium text-gray-200 hover:text-white transition duration-300 transform hover:scale-105">About</a>
                <a href="/projects"
                    class="px-6 py-2 text-lg font-medium text-gray-200 hover:text-white transition duration-300 transform hover:scale-105">Projects</a>
                <a href="/contact"
                    class="px-6 py-2 text-lg font-medium text-gray-200 hover:text-white transition duration-300 transform hover:scale-105">Contact</a>
            </nav>

            <!-- Mobile Navigation (Hidden by default) -->
            <nav id="mobile-menu"
                class="lg:hidden absolute top-0 left-0 w-full bg-gray-900 text-white flex flex-col items-center space-y-6 py-6 px-6 hidden">
                <a href="/"
                    class="text-2xl font-medium text-gray-200 hover:text-white transition duration-300">Home</a>
                <a href="/about"
                    class="text-2xl font-medium text-gray-200 hover:text-white transition duration-300">About</a>
                <a href="/projects"
                    class="text-2xl font-medium text-gray-200 hover:text-white transition duration-300">Projects</a>
                <a href="/contact"
                    class="text-2xl font-medium text-gray-200 hover:text-white transition duration-300">Contact</a>
            </nav>
        </div>
    </header>

    <main class="py-8">
        @yield('content')
    </main>

    <footer class="bg-gray-900 text-white py-8">
        <div class="max-w-6xl mx-auto flex justify-between items-center px-4">
            <!-- Social Media Links with Hover Effect -->
            <div class="space-x-6 flex justify-center sm:justify-start">
                <a href="https://www.linkedin.com/in/andilthfi/"
                    class="text-lg hover:text-blue-400 transform transition-all duration-300 hover:scale-105">
                    <i class="fab fa-linkedin"></i> LinkedIn
                </a>
                <a href="https://github.com/Fitchis"
                    class="text-lg hover:text-blue-400 transform transition-all duration-300 hover:scale-105">
                    <i class="fab fa-github"></i> GitHub
                </a>
            </div>
        </div>

        <!-- Separator Line -->
        <div class="w-full border-t border-gray-700 my-4"></div>

        <!-- Footer Copyright -->
        <div class="text-center mt-4 text-sm text-gray-400">
            &copy; 2025 Portfolio Andi Luthfi Moh A A. All Rights Reserved.
        </div>
    </footer>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const dynamicText = document.getElementById("dynamic-text");
            const textOptions = [
                "I'm a web developer.",
                "I'm a business consultant.",
                "I'm a gamer.",
                "I'm a freelancer.",
                "I'm a streamer."
            ];
            let index = 0;

            function changeText() {
                dynamicText.textContent = textOptions[index];
                index = (index + 1) % textOptions.length;
            }

            // Initial text change
            changeText();

            // Change text every 6 seconds, to match the fade animation duration
            setInterval(changeText, 6000);
        });
    </script>
    <script>
        // Add sticky header effect when scrolling
        window.onscroll = function() {
            stickyHeader()
        };

        var header = document.getElementById("header");
        var sticky = header.offsetTop;

        function stickyHeader() {
            if (window.pageYOffset > sticky) {
                header.classList.add("bg-gray-800", "shadow-xl");
                header.classList.remove("bg-gray-900");
            } else {
                header.classList.add("bg-gray-900");
                header.classList.remove("bg-gray-800", "shadow-xl");
            }
        }
    </script>
    <script>
        // Toggle mobile menu visibility
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Close the mobile menu when clicking outside of it
        document.addEventListener('click', (e) => {
            if (!mobileMenu.contains(e.target) && !menuToggle.contains(e.target)) {
                mobileMenu.classList.add('hidden');
            }
        });
    </script>
</body>

</html>
