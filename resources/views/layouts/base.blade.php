<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @hasSection('title')

            <title>@yield('title') - {{ config('app.name') }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif

        <!-- Favicon -->
		<link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
        @livewireScripts

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body>
    <nav class="fixed top-0 left-0 w-full bg-black shadow-md z-50 backdrop-blur-md" x-data="{ open: false, dropdown: null }">
    <div class="max-w-none mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-28 items-center">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="#" class="text-xl font-bold text-gray-800">
                    <img src="https://ashmicfence.s3.ap-southeast-2.amazonaws.com/Ashmic-Logo-Square.png" alt="Logo" class="h-22 w-auto">
                </a>
            </div>

            <!-- Menu (Vertically Centered & Aligned to Right) -->
            <div class="hidden md:flex items-center space-x-6">
                <!-- Dropdown: Products -->
                <div class="relative" @mouseover="dropdown = 'products'" @mouseleave="dropdown = null">
                    <a href="#" class="px-4 py-2 font-bold text-gray-100 hover:text-orange-500 uppercase">Products</a>
                    <div 
                        x-show="dropdown === 'products'"
                        x-transition
                        class="absolute left-0 mt-2 w-48 bg-white shadow-lg rounded-lg py-2">
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-orange-600 hover:text-white">Fence</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-orange-600 hover:text-white">Railing</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-orange-600 hover:text-white">Security Grills</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-orange-600 hover:text-white">Security Screening</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-orange-600 hover:text-white">Steel Enclosures</a>
                    </div>
                </div>

                <!-- Dropdown: Services -->
                <div class="relative" @mouseover="dropdown = 'services'" @mouseleave="dropdown = null">
                    <a href="#" class="px-4 py-2 font-bold text-gray-100 hover:text-orange-500 uppercase">Services</a>
                    <div 
                        x-show="dropdown === 'services'"
                        x-transition
                        class="absolute left-0 mt-2 w-48 bg-white shadow-lg rounded-lg py-2">
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-orange-600 hover:text-white">Custom Steel Fabrication</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-orange-600 hover:text-white">Fencing Installation</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-orange-600 hover:text-white">Steel Supply & Distribution</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-orange-600 hover:text-white">Maintenance & Repairs</a>
                    </div>
                </div>

                <!-- Dropdown: Resources -->
                <div class="relative" @mouseover="dropdown = 'resources'" @mouseleave="dropdown = null">
                    <a href="#" class="px-4 py-2 font-bold text-gray-100 hover:text-orange-500 uppercase">Resources</a>
                    <div 
                        x-show="dropdown === 'resources'"
                        x-transition
                        class="absolute left-0 mt-2 w-48 bg-white shadow-lg rounded-lg py-2">
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-orange-600 hover:text-white">Fence News</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-orange-600 hover:text-white">Videos</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-orange-600 hover:text-white">Faqs</a>
                    </div>
                </div>
                <!-- Dropdown: About -->
                <div class="relative" @mouseover="dropdown = 'about'" @mouseleave="dropdown = null">
                                    <a href="#" class="px-4 py-2 font-bold text-gray-100 hover:text-orange-500 uppercase">About</a>
                    <div 
                        x-show="dropdown === 'about'"
                        x-transition
                        class="absolute left-0 mt-2 w-48 bg-white shadow-lg rounded-lg py-2">
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-orange-600 hover:text-white">Company</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-orange-600 hover:text-white">Team</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-orange-600 hover:text-white">Careers</a>
                    </div>
                </div>
                <!-- Other Links (Gallery & Contact Us) -->
                <a href="#" class="px-4 py-2 font-bold text-gray-100 hover:text-orange-500 uppercase">Gallery</a>
                <a href="#" class="px-4 py-2 font-bold text-gray-100 hover:text-orange-500 uppercase">Contact Us</a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button @click="open = !open" class="text-gray-100 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
<div class="md:hidden" x-show="open" x-transition>
    <div class="px-2 pt-2 pb-3 space-y-1 bg-white shadow-md" x-data="{ activeDropdown: null }">
        <a href="#" class="block px-3 py-2 text-gray-800 hover:text-blue-500">Home</a>

        <!-- Products Dropdown -->
        <div>
            <button @click="activeDropdown === 'products' ? activeDropdown = null : activeDropdown = 'products'"
                class="flex justify-between w-full px-3 py-2 text-gray-800 hover:text-blue-500">
                Products
                <svg class="w-5 h-5 transition-transform" :class="activeDropdown === 'products' ? 'rotate-180' : ''"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div x-show="activeDropdown === 'products'" x-collapse class="ml-4 space-y-1">
                <a href="#" class="block px-3 py-2 text-gray-800 hover:bg-gray-200">Fence</a>
                <a href="#" class="block px-3 py-2 text-gray-800 hover:bg-gray-200">Railing</a>
                <a href="#" class="block px-3 py-2 text-gray-800 hover:bg-gray-200">Security Grills</a>
                <a href="#" class="block px-3 py-2 text-gray-800 hover:bg-gray-200">Security Screening</a>
                <a href="#" class="block px-3 py-2 text-gray-800 hover:bg-gray-200">Steel Enclosures</a>
            </div>
        </div>

        <!-- Services Dropdown -->
        <div>
            <button @click="activeDropdown === 'services' ? activeDropdown = null : activeDropdown = 'services'"
                class="flex justify-between w-full px-3 py-2 text-gray-800 hover:text-blue-500">
                Services
                <svg class="w-5 h-5 transition-transform" :class="activeDropdown === 'services' ? 'rotate-180' : ''"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div x-show="activeDropdown === 'services'" x-collapse class="ml-4 space-y-1">
                <a href="#" class="block px-3 py-2 text-gray-800 hover:bg-gray-200">Custom Steel Fabrication</a>
                <a href="#" class="block px-3 py-2 text-gray-800 hover:bg-gray-200">Fencing Installation</a>
                <a href="#" class="block px-3 py-2 text-gray-800 hover:bg-gray-200">Steel Supply & Distribution</a>
                <a href="#" class="block px-3 py-2 text-gray-800 hover:bg-gray-200">Maintenance & Repairs</a>

            </div>
        </div>

        <a href="#" class="block px-3 py-2 text-gray-800 hover:text-blue-500">Gallery</a>
        <a href="#" class="block px-3 py-2 text-gray-800 hover:text-blue-500">Contact Us</a>
    </div>
</div>

</nav>


<!-- Add padding so content isn't hidden under navbar -->
<div class="pt-28">
    <!-- Your content here -->
</div>


        @yield('body')      


        <footer class="bg-black border-t-4 border-orange-500">
    <div class="pt-16 pb-6 mx-auto lg:pt-24 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
            <div>
                <div class="flex justify-center text-teal-300 sm:justify-start">
                    <a href="#" class="text-xl font-bold text-gray-800">
                    <img src="https://ashmicfence.s3.ap-southeast-2.amazonaws.com/Ashmic-Logo-Square.png" alt="Logo" class="h-22 w-auto">
                    </a>
                </div>
                <p
                    class="max-w-md mx-auto mt-6 leading-relaxed text-center text-gray-400 sm:max-w-xs sm:mx-0 sm:text-left"
                    >
                    Our business today is mainly supplying steel products and security fencing. We focus on customer service, updates and advanced manufacturing techniques.
                </p>
                <ul class="flex justify-center gap-6 mt-8 md:gap-8 sm:justify-start">
                    <li>
                        <a
                            href="/"
                            rel="noopener noreferrer"
                            target="_blank"
                            class="text-white transition"
                            >
                            <span class="sr-only">Facebook</span>
                            <svg
                                class="w-6 h-6"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                                aria-hidden="true"
                                >
                                <path
                                    fill-rule="evenodd"
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                    clip-rule="evenodd"
                                    />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a
                            href="/"
                            rel="noopener noreferrer"
                            target="_blank"
                            class="text-white transition"
                            >
                            <span class="sr-only">Instagram</span>
                            <svg
                                class="w-6 h-6"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                                aria-hidden="true"
                                >
                                <path
                                    fill-rule="evenodd"
                                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                    clip-rule="evenodd"
                                    />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a
                            href="/"
                            rel="noopener noreferrer"
                            target="_blank"
                            class="text-white transition"
                            >
                            <span class="sr-only">Twitter</span>
                            <svg
                                class="w-6 h-6"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                                aria-hidden="true"
                                >
                                <path
                                    d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"
                                    />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a
                            href="/"
                            rel="noopener noreferrer"
                            target="_blank"
                            class="text-white transition"
                            >
                            <span class="sr-only">GitHub</span>
                            <svg
                                class="w-6 h-6"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                                aria-hidden="true"
                                >
                                <path
                                    fill-rule="evenodd"
                                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                    clip-rule="evenodd"
                                    />
                            </svg>
                        </a>
                    </li>
                    
                </ul>
            </div>
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:col-span-2 md:grid-cols-4 ">
                <div class="text-center sm:text-left">
                    <p class="text-lg font-medium text-white">About Us</p>
                    <nav class="mt-8">
                        <ul class="space-y-4 text-sm">
                            <li>
                                <a class="text-white transition hover:text-white/75" href="/">
                                Company History
                                </a>
                            </li>
                            <li>
                                <a class="text-white transition hover:text-white/75" href="/">
                                Mission, Vision and Values
                                </a>
                            </li>
                            <li>
                                <a class="text-white transition hover:text-white/75" href="/">
                                Careers
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="text-center sm:text-left">
                    <p class="text-lg font-medium text-white">Products and Services</p>
                    <nav class="mt-8">
                        <ul class="space-y-4 text-sm">
                            <li>
                                <a class="text-white transition hover:text-white/75" href="/">
                                Our Products
                                </a>
                            </li>
                            <li>
                                <a class="text-white transition hover:text-white/75" href="/">
                                Custom Steel Fabrication
                                </a>
                            </li>
                            <li>
                                <a class="text-white transition hover:text-white/75" href="/">
                                Fencing
                                </a>
                            </li>
                            <li>
                                <a class="text-white transition hover:text-white/75" href="/">
                                Steel Supply & Distribution
                                </a>
                            </li>
                            <li>
                                <a class="text-white transition hover:text-white/75" href="/">
                                Maintenance & Repairs
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="text-center sm:text-left">
                    <p class="text-lg font-medium text-white">Helpful Links</p>
                    <nav class="mt-8">
                        <ul class="space-y-4 text-sm">
                            <li>
                                <a class="text-white transition hover:text-white/75" href="/">
                                FAQs
                                </a>
                            </li>
                            <li>
                                <a class="text-white transition hover:text-white/75" href="/">
                                Terms and Conditions
                                </a>
                            </li>
                            <li>
                                <a class="text-white transition hover:text-white/75" href="/">
                                Privacy Policy
                                </a>
                            </li>
       
                        </ul>
                    </nav>
                </div>
                <div class="text-center sm:text-left">
                    <p class="text-lg font-medium text-white">Contact Us</p>
                    <ul class="mt-8 space-y-4 text-sm">
                        <li>
                            <a
                                class="flex items-center justify-center sm:justify-start gap-1.5 group"
                                href="/"
                                >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5 text-white shrink-0"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                                        />
                                </svg>
                                <span class="text-white transition group-hover:text-white/75">
                                info@ashmicfence.com
                                </span>
                            </a>
                        </li>
                        <li>
                            <a
                                class="flex items-center justify-center sm:justify-start gap-1.5 group"
                                href="/"
                                >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5 text-white shrink-0"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
                                        />
                                </svg>
                                <span class="text-white transition group-hover:text-white/75">
                                +6 03 2726 2777 (Office)<br>
                                +6 03 2726 2778 (Fax)

                                </span>
                            </a>
                        </li>
                        <li
                            class="flex items-start justify-center gap-1.5 sm:justify-start"
                            >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5 text-white shrink-0"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                                >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                                    />
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"
                                    />
                            </svg>
                            <address class="-mt-0.5 not-italic text-white">
                            B-5-8 Plaza Mont Kiara, Mont Kiara 50480, Kuala Lumpur Malaysia
                            </address>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
    </div>
    <div class="py-6 border-t border-gray-800">
        <div class="text-center flex flex-col items-center sm:flex-row sm:justify-center sm:space-x-4">
            <p class="text-sm text-gray-400">
                <span class="block sm:inline">All rights reserved.</span>
            </p>
            <p class="mt-2 text-sm text-gray-500 sm:mt-0">
                &copy; 2024 Ashmic Steel and Fencing.
            </p>
        </div>
    </div>
</footer>


    </body>
</html>
