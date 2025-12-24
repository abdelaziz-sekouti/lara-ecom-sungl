@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative bg-linear-to-r from-blue-600 to-purple-700 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">
                Find Your Perfect Style
            </h1>
            <p class="text-xl md:text-2xl mb-8 opacity-90">
                Premium sunglasses that combine fashion and protection
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('shop') }}" class="inline-block bg-white text-blue-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition transform hover:scale-105 z-50">
                    Shop Now
                </a>

            </div>
        </div>
    </div>
    <div class="absolute inset-0 bg-black opacity-10"></div>
</section>

<!-- Featured Products -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Featured Sunglasses</h2>
            <p class="text-lg text-gray-600">Handpicked selection of our most popular styles</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Featured Product 1 -->
            <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition transform hover:scale-105">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1511499767150-a48a237f0083?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Classic Aviator" class="w-full h-48 object-cover rounded-t-lg">
                    <span class="absolute top-4 left-4 bg-red-500 text-white px-2 py-1 rounded text-xs font-semibold">Best Seller</span>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Classic Aviator</h3>
                    <p class="text-gray-600 text-sm mb-2">Ray-Ban Style</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-blue-600">$149</span>
                        <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <!-- Featured Product 2 -->
            <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition transform hover:scale-105">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1572635196237-14b3f2815032?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1180&q=80" alt="Cat Eye" class="w-full h-48 object-cover rounded-t-lg">
                    <span class="absolute top-4 left-4 bg-green-500 text-white px-2 py-1 rounded text-xs font-semibold">New</span>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Elegant Cat-Eye</h3>
                    <p class="text-gray-600 text-sm mb-2">Trendy Design</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-blue-600">$189</span>
                        <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <!-- Featured Product 3 -->
            <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition transform hover:scale-105">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1473496169904-658ba7c44d8a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Wayfarer" class="w-full h-48 object-cover rounded-t-lg">
                    <span class="absolute top-4 left-4 bg-orange-500 text-white px-2 py-1 rounded text-xs font-semibold">Popular</span>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Classic Wayfarer</h3>
                    <p class="text-gray-600 text-sm mb-2">Timeless Style</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-blue-600">$129</span>
                        <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <!-- Featured Product 4 -->
            <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition transform hover:scale-105">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1517406928871-8f1699f43675?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Sport Sunglasses" class="w-full h-48 object-cover rounded-t-lg">
                    <span class="absolute top-4 left-4 bg-purple-500 text-white px-2 py-1 rounded text-xs font-semibold">Sport</span>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Sport Pro</h3>
                    <p class="text-gray-600 text-sm mb-2">Performance Design</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-blue-600">$199</span>
                        <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('shop') }}" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-full font-semibold hover:bg-blue-700 transition">
                View All Products
            </a>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Secure Shopping</h3>
                <p class="text-gray-600">100% secure payment processing</p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Free Shipping</h3>
                <p class="text-gray-600">Free shipping on orders over $50</p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Quality Guarantee</h3>
                <p class="text-gray-600">30-day return policy</p>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="py-16 bg-blue-600 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold mb-4">Stay in Style</h2>
        <p class="text-xl mb-8 opacity-90">Subscribe for exclusive offers and new arrivals</p>
        <form class="max-w-md mx-auto flex flex-col sm:flex-row gap-4">
            <input type="email" placeholder="Enter your email" class="flex-1 px-4 py-3 rounded-lg text-gray-900 focus:outline-none focus:ring-2 focus:ring-white">
            <button type="submit" class="bg-white text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
                Subscribe
            </button>
        </form>
    </div>
</section>
@endsection
