@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="text-center">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-purple-400">
                Premium Sunglasses
            </h1>
            <p class="text-xl md:text-2xl text-gray-300 mb-8 max-w-3xl mx-auto">
                Discover our curated collection of luxury eyewear designed for style and protection
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="px-8 py-3 bg-blue-600 hover:bg-blue-700 rounded-lg font-semibold transition-all transform hover:scale-105">
                    Shop New Arrivals
                </button>
                <button class="px-8 py-3 border border-gray-400 hover:border-white rounded-lg font-semibold transition-all">
                    View Collection
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Shop Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Filter and Sort Bar -->
        <div class="bg-white rounded-xl shadow-sm p-6 mb-8">
            <div class="flex flex-col lg:flex-row justify-between items-center gap-4">
                <div class="flex items-center gap-4">
                    <button class="lg:hidden px-4 py-2 bg-gray-100 rounded-lg hover:bg-gray-200 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                    <p class="text-gray-600">
                        Showing <span class="font-semibold text-gray-900">{{ 12 * (request()->get('page', 1) - 1) + 12 }}</span> products
                    </p>
                </div>
                
                <div class="flex flex-col sm:flex-row gap-4 w-full lg:w-auto">
                    <div class="relative">
                        <input type="text" placeholder="Search products..." 
                               class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 w-full sm:w-64">
                        <svg class="absolute left-3 top-2.5 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    
                    <select class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option>Sort by: Featured</option>
                        <option>Price: Low to High</option>
                        <option>Price: High to Low</option>
                        <option>Newest First</option>
                        <option>Best Selling</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Products Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            <!-- Product Card 1 -->
            <div class="bg-white rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden group">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1511499767150-a48a237f0083?w=400&h=300&fit=crop" 
                         alt="Classic Aviator" 
                         class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-4 right-4 flex flex-col gap-2">
                        <span class="bg-red-500 text-white px-3 py-1 rounded-full text-sm font-semibold">-20%</span>
                        <span class="bg-white/90 backdrop-blur px-3 py-1 rounded-full text-sm font-semibold">New</span>
                    </div>
                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-colors duration-300"></div>
                </div>
                <div class="p-6">
                    <div class="mb-3">
                        <span class="text-sm text-gray-500 font-medium">Ray-Ban</span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition">
                        Classic Aviator
                    </h3>
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            ★★★★☆
                        </div>
                        <span class="text-sm text-gray-500 ml-2">(24 reviews)</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-2xl font-bold text-gray-900">$119</span>
                            <span class="text-sm text-gray-500 line-through ml-2">$149</span>
                        </div>
                        <button class="p-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition transform hover:scale-110" 
                                data-add-to-cart 
                                data-product-id="1" 
                                data-name="Classic Aviator" 
                                data-price="119" 
                                data-image="https://images.unsplash.com/photo-1511499767150-a48a237f0083?w=400&h=300&fit=crop">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17M7 13l4-4m0 6a1 1 0 11-2 0 1 1 0 012 0zm8 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="bg-white rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden group">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1473496169904-658ba7c44d8a?w=400&h=300&fit=crop" 
                         alt="Sport Performance" 
                         class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-4 right-4">
                        <span class="bg-green-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Best Seller</span>
                    </div>
                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-colors duration-300"></div>
                </div>
                <div class="p-6">
                    <div class="mb-3">
                        <span class="text-sm text-gray-500 font-medium">Oakley</span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition">
                        Sport Performance
                    </h3>
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            ★★★★★
                        </div>
                        <span class="text-sm text-gray-500 ml-2">(18 reviews)</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-2xl font-bold text-gray-900">$189</span>
                        </div>
                        <button class="p-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition transform hover:scale-110" 
                                data-add-to-cart 
                                data-product-id="2" 
                                data-name="Sport Performance" 
                                data-price="189" 
                                data-image="https://images.unsplash.com/photo-1473496169904-658ba7c44d8a?w=400&h=300&fit=crop">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17M7 13l4-4m0 6a1 1 0 11-2 0 1 1 0 012 0zm8 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="bg-white rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden group">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1572635196237-14b3f2815032?w=400&h=300&fit=crop" 
                         alt="Vintage Style" 
                         class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-4 right-4">
                        <span class="bg-purple-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Limited</span>
                    </div>
                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-colors duration-300"></div>
                </div>
                <div class="p-6">
                    <div class="mb-3">
                        <span class="text-sm text-gray-500 font-medium">Persol</span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition">
                        Vintage Style
                    </h3>
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            ★★★★☆
                        </div>
                        <span class="text-sm text-gray-500 ml-2">(12 reviews)</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-2xl font-bold text-gray-900">$225</span>
                        </div>
                        <button class="p-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition transform hover:scale-110" 
                                data-add-to-cart 
                                data-product-id="3" 
                                data-name="Vintage Style" 
                                data-price="225" 
                                data-image="https://images.unsplash.com/photo-1572635196237-14b3f2815032?w=400&h=300&fit=crop">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17M7 13l4-4m0 6a1 1 0 11-2 0 1 1 0 012 0zm8 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product Card 4 -->
            <div class="bg-white rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden group">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1517406928871-8f1699f43675?w=400&h=300&fit=crop" 
                         alt="Wayfarer Classic" 
                         class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-4 right-4">
                        <span class="bg-orange-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Popular</span>
                    </div>
                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-colors duration-300"></div>
                </div>
                <div class="p-6">
                    <div class="mb-3">
                        <span class="text-sm text-gray-500 font-medium">Ray-Ban</span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition">
                        Wayfarer Classic
                    </h3>
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            ★★★★★
                        </div>
                        <span class="text-sm text-gray-500 ml-2">(36 reviews)</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-2xl font-bold text-gray-900">$149</span>
                        </div>
                        <button class="p-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition transform hover:scale-110" 
                                data-add-to-cart 
                                data-product-id="4" 
                                data-name="Wayfarer Classic" 
                                data-price="149" 
                                data-image="https://images.unsplash.com/photo-1517406928871-8f1699f43675?w=400&h=300&fit=crop">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17M7 13l4-4m0 6a1 1 0 11-2 0 1 1 0 012 0zm8 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product Card 5 -->
            <div class="bg-white rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden group">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1511499767150-a48a237f0083?w=400&h=300&fit=crop" 
                         alt="Luxury Cat-Eye" 
                         class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-4 right-4">
                        <span class="bg-yellow-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Premium</span>
                    </div>
                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-colors duration-300"></div>
                </div>
                <div class="p-6">
                    <div class="mb-3">
                        <span class="text-sm text-gray-500 font-medium">Gucci</span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition">
                        Luxury Cat-Eye
                    </h3>
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            ★★★★☆
                        </div>
                        <span class="text-sm text-gray-500 ml-2">(8 reviews)</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-2xl font-bold text-gray-900">$329</span>
                        </div>
                        <button class="p-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition transform hover:scale-110" 
                                data-add-to-cart 
                                data-product-id="5" 
                                data-name="Luxury Cat-Eye" 
                                data-price="329" 
                                data-image="https://images.unsplash.com/photo-1511499767150-a48a237f0083?w=400&h=300&fit=crop">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17M7 13l4-4m0 6a1 1 0 11-2 0 1 1 0 012 0zm8 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product Card 6 -->
            <div class="bg-white rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden group">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1473496169904-658ba7c44d8a?w=400&h=300&fit=crop" 
                         alt="Round Frame" 
                         class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-4 right-4">
                        <span class="bg-red-500 text-white px-3 py-1 rounded-full text-sm font-semibold">-15%</span>
                    </div>
                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-colors duration-300"></div>
                </div>
                <div class="p-6">
                    <div class="mb-3">
                        <span class="text-sm text-gray-500 font-medium">Prada</span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition">
                        Round Frame
                    </h3>
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            ★★★★★
                        </div>
                        <span class="text-sm text-gray-500 ml-2">(15 reviews)</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-2xl font-bold text-gray-900">$389</span>
                            <span class="text-sm text-gray-500 line-through ml-2">$459</span>
                        </div>
                        <button class="p-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition transform hover:scale-110" 
                                data-add-to-cart 
                                data-product-id="6" 
                                data-name="Round Frame" 
                                data-price="389" 
                                data-image="https://images.unsplash.com/photo-1473496169904-658ba7c44d8a?w=400&h=300&fit=crop">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17M7 13l4-4m0 6a1 1 0 11-2 0 1 1 0 012 0zm8 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product Card 7 -->
            <div class="bg-white rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden group">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1572635196237-14b3f2815032?w=400&h=300&fit=crop" 
                         alt="Modern Square" 
                         class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-4 right-4">
                        <span class="bg-blue-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Trending</span>
                    </div>
                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-colors duration-300"></div>
                </div>
                <div class="p-6">
                    <div class="mb-3">
                        <span class="text-sm text-gray-500 font-medium">Tom Ford</span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition">
                        Modern Square
                    </h3>
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            ★★★★☆
                        </div>
                        <span class="text-sm text-gray-500 ml-2">(10 reviews)</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-2xl font-bold text-gray-900">$275</span>
                        </div>
                        <button class="p-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition transform hover:scale-110" 
                                data-add-to-cart 
                                data-product-id="7" 
                                data-name="Modern Square" 
                                data-price="275" 
                                data-image="https://images.unsplash.com/photo-1572635196237-14b3f2815032?w=400&h=300&fit=crop">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17M7 13l4-4m0 6a1 1 0 11-2 0 1 1 0 012 0zm8 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product Card 8 -->
            <div class="bg-white rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden group">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1517406928871-8f1699f43675?w=400&h=300&fit=crop" 
                         alt="Retro Inspired" 
                         class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-4 right-4">
                        <span class="bg-green-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Eco</span>
                    </div>
                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-colors duration-300"></div>
                </div>
                <div class="p-6">
                    <div class="mb-3">
                        <span class="text-sm text-gray-500 font-medium">Coach</span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition">
                        Retro Inspired
                    </h3>
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            ★★★★☆
                        </div>
                        <span class="text-sm text-gray-500 ml-2">(6 reviews)</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-2xl font-bold text-gray-900">$159</span>
                        </div>
                        <button class="p-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition transform hover:scale-110" 
                                data-add-to-cart 
                                data-product-id="8" 
                                data-name="Retro Inspired" 
                                data-price="159" 
                                data-image="https://images.unsplash.com/photo-1517406928871-8f1699f43675?w=400&h=300&fit=crop">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17M7 13l4-4m0 6a1 1 0 11-2 0 1 1 0 012 0zm8 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="mt-12 flex justify-center">
            <nav class="flex items-center space-x-2">
                @if(request()->get('page') > 1)
                    <a href="?page={{ request()->get('page') - 1 }}" class="p-2 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                    </a>
                @else
                    <button class="p-2 bg-gray-100 border border-gray-200 rounded-lg cursor-not-allowed opacity-50" disabled>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                    </button>
                @endif
                
                @for($i = 1; $i <= 5; $i++)
                    @if($i == request()->get('page', 1))
                        <span class="px-4 py-2 bg-blue-600 text-white rounded-lg">{{ $i }}</span>
                    @else
                        <a href="?page={{ $i }}" class="px-4 py-2 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 transition">{{ $i }}</a>
                    @endif
                @endfor
                
                @if(request()->get('page', 1) < 5)
                    <a href="?page={{ request()->get('page', 1) + 1 }}" class="p-2 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                @else
                    <button class="p-2 bg-gray-100 border border-gray-200 rounded-lg cursor-not-allowed opacity-50" disabled>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                @endif
            </nav>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="py-16 bg-gradient-to-r from-blue-600 to-purple-600 text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Stay in Style</h2>
        <p class="text-xl mb-8 opacity-90">Get exclusive offers and be the first to know about new collections</p>
        <div class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
            <input type="email" placeholder="Enter your email" 
                   class="flex-1 px-4 py-3 rounded-lg text-gray-900 focus:outline-none focus:ring-2 focus:ring-white">
            <button class="px-6 py-3 bg-white text-blue-600 rounded-lg font-semibold hover:bg-gray-100 transition">
                Subscribe
            </button>
        </div>
    </div>
</section>
<script src="{{ asset('js/cart.js') }}"></script>
@endsection