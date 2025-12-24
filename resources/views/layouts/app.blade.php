<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
 @vite('resources/css/app.css')
    <title>{{ config('app.name', 'Sunglasses Shop') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Scripts -->
    @vite('resources/js/app.js')

    <!-- Alpine.js -->
    <!--<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>  -->
</head>
<body class="font-sans antialiased">
    <div id="app">
        <!-- Simple scroll detection with vanilla JS -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                let scrolled = false;
                let scrollProgress = 0;

                // Scroll to top button visibility management
                function updateScrollToTopButton(show) {
                    const scrollButton = document.getElementById('scroll-to-top');
                    if (scrollButton) {
                        if (show) {
                            scrollButton.style.opacity = '1';
                            scrollButton.style.transform = 'translateY(0)';
                        } else {
                            scrollButton.style.opacity = '0';
                            scrollButton.style.transform = 'translateY(100px)';
                        }
                    }
                }

                window.addEventListener('scroll', function() {
                    const newScrolled = window.pageYOffset > 400;
                    const newScrollProgress = Math.min((window.pageYOffset / (document.documentElement.scrollHeight - window.innerHeight)) * 100, 100);

                    if (newScrolled !== scrolled) {
                        scrolled = newScrolled;
                        // Toggle elements based on scroll
                        const elementsToShow = document.querySelectorAll('.show-on-scroll');
                        const elementsToHide = document.querySelectorAll('.hide-on-scroll');

                        elementsToShow.forEach(el => el.classList.remove('hidden'));
                        elementsToHide.forEach(el => el.classList.add('hidden'));

                        // Update navigation shadow
                        const nav = document.querySelector('nav');
                        if (nav) {
                            if (scrolled) {
                                nav.classList.add('shadow-2xl');
                                nav.classList.remove('shadow-lg');
                            } else {
                                nav.classList.add('shadow-lg');
                                nav.classList.remove('shadow-2xl');
                            }
                        }

                        // Update scroll to top button visibility
                        updateScrollToTopButton(newScrolled);
                    }

                    if (newScrollProgress !== scrollProgress) {
                        scrollProgress = newScrollProgress;
                        // Update progress bar
                        const progressBar = document.querySelector('.scroll-progress-fill');
                        if (progressBar) {
                            progressBar.style.width = scrollProgress + '%';
                        }
                    }
                });

                // Reset scroll to top button on page load (hidden)
                window.addEventListener('load', function() {
                    const scrollButton = document.getElementById('scroll-to-top-button');
                    if (scrollButton) {
                        scrollButton.style.opacity = '0';
                        scrollButton.style.transform = 'translateY(100px)';
                    }
                });
            });
        </script>
        <!-- Scroll Progress Bar -->
        <div class="fixed top-0 left-0 w-full h-1 bg-gray-200 z-50">
            <div class="h-full bg-gradient-to-r from-blue-600 to-purple-600 transition-all duration-150 scroll-progress-fill"
                 style="width: 0%"></div>
        </div>

        <!-- Navigation -->
        <nav class="bg-white shadow-lg sticky top-0 z-50"
             :class="scrolled ? 'shadow-2xl' : 'shadow-lg'">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <!-- Logo -->
                    <div class="flex items-center">
                        <a href="{{ route('home') }}" class="text-2xl font-bold text-gray-900">
                            🕶️ SunLux
                        </a>
                    </div>

                    <!-- Navigation Links -->
                    <div class="hidden md:flex items-center space-x-8">
                        <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition smooth-scroll">Home</a>
                        <a href="{{ route('shop') }}" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition smooth-scroll">Shop</a>
                        <a href="{{ route('cart') }}" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition smooth-scroll">Cart</a>
                        <a href="{{ route('about') }}" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition smooth-scroll">About</a>
                        <a href="{{ route('contact') }}" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition smooth-scroll">Contact</a>
                    </div>

                    <!-- Cart and Auth -->
                    <div class="hidden md:flex items-center space-x-4">
                        <a href="{{ route('cart') }}" class="text-gray-700 hover:text-blue-600 transition relative">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17M7 13l4-4m0 6a1 1 0 11-2 0 1 1 0 012 0zm8 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                            </svg>
                            <!-- Cart Badge -->
                            <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">2</span>
                        </a>

                        @guest
                            <a href="{{ route('login') }}" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">Login</a>
                             <a href="{{ route('register') }}" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">Register</a>
                        @else
                            <div class="relative group">
                                <button class="flex items-center text-gray-700 hover:text-blue-600 transition">
                                    <span class="mr-2">{{ Auth::user()->name }}</span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>
                                <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-10 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Orders</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                                    <form action="{{ route('logout') }}" method="POST" class="hidden" id="logout-form">
                                        @csrf
                                    </form>
                                    <a href="#" onclick="document.getElementById('logout-form').submit()" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</a>
                                </div>
                            </div>
                        @endguest
                    </div>

                    <!-- Mobile menu button -->
                    <div class="md:hidden flex items-center">
                        <button type="button" class="text-gray-700 hover:text-blue-600 focus:outline-none" id="mobile-menu-button">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile menu -->
            <div class="hidden md:hidden" id="mobile-menu">
                <div class="px-2 pt-2 pb-3 space-y-1 bg-white border-t">
                    <a href="{{ route('home') }}" class="block px-3 py-2 text-gray-700 hover:text-blue-600 smooth-scroll">Home</a>
                    <a href="{{ route('shop') }}" class="block px-3 py-2 text-gray-700 hover:text-blue-600 smooth-scroll">Shop</a>
                    <a href="{{ route('cart') }}" class="block px-3 py-2 text-gray-700 hover:text-blue-600 smooth-scroll">Cart</a>
                    <a href="{{ route('about') }}" class="block px-3 py-2 text-gray-700 hover:text-blue-600 smooth-scroll">About</a>
                    <a href="{{ route('contact') }}" class="block px-3 py-2 text-gray-700 hover:text-blue-600 smooth-scroll">Contact</a>
                    @guest
                        <a href="{{ route('login') }}" class="block px-3 py-2 bg-blue-600 text-white rounded-md">Login</a>
                        <a href="{{ route('register') }}" class="block px-3 py-2 bg-blue-600 text-white rounded-md">Register</a>
                    @else
                        <a href="#" class="block px-3 py-2 text-gray-700">Orders</a>
                        <a href="#" class="block px-3 py-2 text-gray-700">Profile</a>
                        <a href="#" onclick="document.getElementById('logout-form').submit()" class="block px-3 py-2 text-gray-700">Logout</a>
                    @endguest
                </div>
            </div>
        </nav>

        <main class="min-h-screen">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                @yield('content')
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-gray-900 text-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div>
                        <h3 class="text-lg font-semibold mb-4">🕶️ SunLux</h3>
                        <p class="text-gray-400">Premium sunglasses for style and protection.</p>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                        <ul class="space-y-2">
                            <li><a href="{{ route('shop') }}" class="text-gray-400 hover:text-white">Shop</a></li>
                            <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-white">About</a></li>
                            <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-white">Contact</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold mb-4">Customer Service</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-400 hover:text-white">Shipping Info</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">Returns</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">Size Guide</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold mb-4">Contact</h4>
                        <p class="text-gray-400">Derb Bouaalam N 185 SYBA</p>
                        <p class="text-gray-400">Marrakesh, Morocco</p>
                        <p class="text-gray-400 mt-2">support@sunlux.com</p>
                    </div>
                </div>
                <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                    <p>&copy; {{ date('Y') }} SunLux. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>

    <!-- Social Sidebar -->
    <div id="social-sidebar"
         class="fixed left-0 top-1/2 transform  z-50 transition-all duration-500 ease-out"
         style="margin-top: 0; opacity: 0; transform: translate(-100%, -50%);">
        <div class="bg-white rounded-r-lg shadow-2xl p-4 space-y-4">
            <a href="https://facebook.com" target="_blank" rel="noopener noreferrer"
               class=" w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center hover:bg-blue-700 transition-colors duration-300 hover:scale-110 transform">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://twitter.com" target="_blank" rel="noopener noreferrer"
               class=" w-12 h-12 bg-sky-500 text-white rounded-full flex items-center justify-center hover:bg-sky-600 transition-colors duration-300 hover:scale-110 transform">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://instagram.com" target="_blank" rel="noopener noreferrer"
               class=" w-12 h-12 bg-linear-to-br from-purple-600 to-pink-600 text-white rounded-full flex items-center justify-center hover:from-purple-700 hover:to-pink-700 transition-all duration-300 hover:scale-110 transform">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer"
               class=" w-12 h-12 bg-blue-700 text-white rounded-full flex items-center justify-center hover:bg-blue-800 transition-colors duration-300 hover:scale-110 transform">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="https://youtube.com" target="_blank" rel="noopener noreferrer"
               class=" w-12 h-12 bg-red-600 text-white rounded-full flex items-center justify-center hover:bg-red-700 transition-colors duration-300 hover:scale-110 transform">
                <i class="fab fa-youtube"></i>
            </a>
            <a href="https://pinterest.com" target="_blank" rel="noopener noreferrer"
               class=" w-12 h-12 bg-red-700 text-white rounded-full flex items-center justify-center hover:bg-red-800 transition-colors duration-300 hover:scale-110 transform">
                <i class="fab fa-pinterest-p"></i>
            </a>
        </div>
    </div>

    <!-- Scroll to Top Button -->
    <button onclick="scrollToTop()"
            id="scroll-to-top"
            class="fixed bottom-8 right-8 w-12 h-12 bg-blue-600 text-white rounded-full shadow-lg hover:bg-blue-700 transition-all duration-300 hover:scale-110 z-40 flex items-center justify-center"
            title="Scroll to top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- WhatsApp Chat Button -->
    <a href="https://wa.me/212612236660?text=Hello%20Sekouti%20Abdelaziz%2C%20I%20am%20interested%20in%20your%20sunglasses."
       target="_blank"
       rel="noopener noreferrer"
       class="fixed bottom-8 left-16 w-14 h-14 bg-green-500 text-white rounded-full shadow-lg hover:bg-green-600 transition-all duration-300 hover:scale-110 z-50 flex items-center justify-center group whatsapp-hover-enhanced whatsapp-bounce whatsapp-mobile-bottom whatsapp-ripple-effect show-on-scroll"
       title="Chat on WhatsApp"
       style="opacity: 1; transform: scale(1) rotate(0deg);">
        <i class="fab fa-whatsapp text-2xl"></i>
        <span class="absolute -top-1 -right-1 w-3 h-3 bg-red-500 rounded-full animate-pulse"></span>
        <!-- Tooltip -->
        <span class="absolute bottom-full right-0 mb-2 px-3 py-1 bg-gray-900 text-white text-sm rounded-lg whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity duration-200 pointer-events-none">
            Chat with us on WhatsApp
            <span class="absolute top-full right-4 w-0 h-0 border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-900"></span>
        </span>
    </a>

    <!-- WhatsApp Chat Button (Scrolled State) -->
    <a href="https://wa.me/212612236660?text=Hello%20Sekouti%20Abdelaziz%2C%20I%20am%20interested%20in%20your%20sunglasses."
       target="_blank"
       rel="noopener noreferrer"
       class="fixed bottom-24 right-8 w-14 h-14 bg-green-500 text-white rounded-full shadow-lg hover:bg-green-600 transition-all duration-300 hover:scale-110 z-50 flex items-center justify-center group whatsapp-hover-enhanced whatsapp-bounce whatsapp-mobile-bottom whatsapp-ripple-effect show-on-scroll"
       title="Chat on WhatsApp"
       style="opacity: 0; transform: scale(0) rotate(12deg);">
        <i class="fab fa-whatsapp text-2xl"></i>
        <span class="absolute -top-1 -right-1 w-3 h-3 bg-red-500 rounded-full animate-pulse"></span>
        <!-- Tooltip -->
        <span class="absolute bottom-full right-0 mb-2 px-3 py-1 bg-gray-900 text-white text-sm rounded-lg whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity duration-200 pointer-events-none">
            Chat with us on WhatsApp
            <span class="absolute top-full right-4 w-0 h-0 border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-900"></span>
        </span>
    </a>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });

        // Social sidebar scroll animation
        let socialScrollTimeout;
        let socialShown = false;

        function showSocialSidebar() {
            const sidebar = document.getElementById('social-sidebar');
            if (!socialShown) {
                socialShown = true;
                sidebar.style.opacity = '1';
                sidebar.style.transform = 'translate(0, -50%)';
            }
        }

        function hideSocialSidebar() {
            const sidebar = document.getElementById('social-sidebar');
            if (socialShown) {
                socialShown = false;
                sidebar.style.opacity = '0';
                sidebar.style.transform = 'translate(-100%, -50%)';
            }
        }

        window.addEventListener('scroll', function() {
            clearTimeout(socialScrollTimeout);

            if (window.pageYOffset > 300) {
                showSocialSidebar();
            } else {
                hideSocialSidebar();
            }

            // Optional: Hide sidebar when user stops scrolling for 3 seconds
            socialScrollTimeout = setTimeout(() => {
                if (window.pageYOffset > 300) {
                    // Keep showing after scroll stops
                }
            }, 3000);
        });
    </script>
</body>
</html>
