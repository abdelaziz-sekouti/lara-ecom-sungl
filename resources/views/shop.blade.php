@extends('layouts.app')

@section('content')
<!-- Shop Hero -->
<section class="bg-gradient-to-r from-gray-900 to-gray-700 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Shop Our Collection</h1>
        <p class="text-xl opacity-90">Discover the perfect sunglasses for your style</p>
    </div>
</section>

<!-- Filters and Products -->
<section class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Filters Sidebar -->
            <aside class="lg:w-1/4">
                <div class="bg-white rounded-lg shadow-md p-6 sticky top-24">
                    <h3 class="text-lg font-semibold text-gray-900 mb-6">Filters</h3>
                    
                    <!-- Search -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Search</label>
                        <input type="text" placeholder="Search sunglasses..." class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Price Filter -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Price Range</label>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2 text-blue-600">
                                <span class="text-sm">Under $100</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2 text-blue-600">
                                <span class="text-sm">$100 - $150</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2 text-blue-600">
                                <span class="text-sm">$150 - $200</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2 text-blue-600">
                                <span class="text-sm">Over $200</span>
                            </label>
                        </div>
                    </div>

                    <!-- Brand Filter -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Brand</label>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2 text-blue-600">
                                <span class="text-sm">Ray-Ban</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2 text-blue-600">
                                <span class="text-sm">Oakley</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2 text-blue-600">
                                <span class="text-sm">Persol</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2 text-blue-600">
                                <span class="text-sm">Gucci</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2 text-blue-600">
                                <span class="text-sm">Prada</span>
                            </label>
                        </div>
                    </div>

                    <!-- Frame Type Filter -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Frame Type</label>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2 text-blue-600">
                                <span class="text-sm">Full Rim</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2 text-blue-600">
                                <span class="text-sm">Semi-Rimless</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2 text-blue-600">
                                <span class="text-sm">Rimless</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2 text-blue-600">
                                <span class="text-sm">Wayfarer</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2 text-blue-600">
                                <span class="text-sm">Aviator</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2 text-blue-600">
                                <span class="text-sm">Cat-Eye</span>
                            </label>
                        </div>
                    </div>

                    <button class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition">
                        Apply Filters
                    </button>
                </div>
            </aside>

            <!-- Products Grid -->
            <div class="lg:w-3/4">
                <!-- Sort Bar -->
                <div class="bg-white rounded-lg shadow-md p-4 mb-6 flex justify-between items-center">
                    <p class="text-gray-600">Showing <span class="font-semibold">12</span> products</p>
                    <select class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option>Sort by: Featured</option>
                        <option>Price: Low to High</option>
                        <option>Price: High to Low</option>
                        <option>Newest First</option>
                        <option>Best Selling</option>
                    </select>
                </div>

                <!-- Products -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Product 1 -->
                    <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition transform hover:scale-105">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1511499767150-a48a237f0083?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Sunglasses" class="w-full h-64 object-cover rounded-t-lg">
                            <span class="absolute top-4 right-4 bg-red-500 text-white px-2 py-1 rounded text-xs font-semibold">-20%</span>
                        </div>
                        <div class="p-6">
                            <div class="mb-2">
                                <span class="text-sm text-gray-500">Ray-Ban</span>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Classic Aviator</h3>
                            <div class="flex items-center mb-2">
                                <div class="flex text-yellow-400">
                                    ★★★★☆
                                </div>
                                <span class="text-sm text-gray-500 ml-2">(24)</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <div>
                                    <span class="text-2xl font-bold text-blue-600">$119</span>
                                    <span class="text-sm text-gray-500 line-through ml-2">$149</span>
                                </div>
                                <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 2 -->
                    <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition transform hover:scale-105">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1473496169904-658ba7c44d8a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Sunglasses" class="w-full h-64 object-cover rounded-t-lg">
                            <span class="absolute top-4 left-4 bg-green-500 text-white px-2 py-1 rounded text-xs font-semibold">New</span>
                        </div>
                        <div class="p-6">
                            <div class="mb-2">
                                <span class="text-sm text-gray-500">Oakley</span>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Sport Performance</h3>
                            <div class="flex items-center mb-2">
                                <div class="flex text-yellow-400">
                                    ★★★★★
                                </div>
                                <span class="text-sm text-gray-500 ml-2">(18)</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-blue-600">$189</span>
                                <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 3 -->
                    <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition transform hover:scale-105">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1572635196237-14b3f2815032?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1180&q=80" alt="Sunglasses" class="w-full h-64 object-cover rounded-t-lg">
                        </div>
                        <div class="p-6">
                            <div class="mb-2">
                                <span class="text-sm text-gray-500">Persol</span>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Vintage Style</h3>
                            <div class="flex items-center mb-2">
                                <div class="flex text-yellow-400">
                                    ★★★★☆
                                </div>
                                <span class="text-sm text-gray-500 ml-2">(12)</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-blue-600">$225</span>
                                <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 4 -->
                    <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition transform hover:scale-105">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1517406928871-8f1699f43675?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Sunglasses" class="w-full h-64 object-cover rounded-t-lg">
                            <span class="absolute top-4 right-4 bg-orange-500 text-white px-2 py-1 rounded text-xs font-semibold">Popular</span>
                        </div>
                        <div class="p-6">
                            <div class="mb-2">
                                <span class="text-sm text-gray-500">Ray-Ban</span>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Wayfarer Classic</h3>
                            <div class="flex items-center mb-2">
                                <div class="flex text-yellow-400">
                                    ★★★★★
                                </div>
                                <span class="text-sm text-gray-500 ml-2">(36)</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-blue-600">$149</span>
                                <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 5 -->
                    <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition transform hover:scale-105">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1473496169904-658ba7c44d8a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Sunglasses" class="w-full h-64 object-cover rounded-t-lg">
                        </div>
                        <div class="p-6">
                            <div class="mb-2">
                                <span class="text-sm text-gray-500">Gucci</span>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Luxury Cat-Eye</h3>
                            <div class="flex items-center mb-2">
                                <div class="flex text-yellow-400">
                                    ★★★★☆
                                </div>
                                <span class="text-sm text-gray-500 ml-2">(8)</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-blue-600">$329</span>
                                <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 6 -->
                    <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition transform hover:scale-105">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1511499767150-a48a237f0083?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Sunglasses" class="w-full h-64 object-cover rounded-t-lg">
                            <span class="absolute top-4 left-4 bg-purple-500 text-white px-2 py-1 rounded text-xs font-semibold">Limited</span>
                        </div>
                        <div class="p-6">
                            <div class="mb-2">
                                <span class="text-sm text-gray-500">Prada</span>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Round Frame</h3>
                            <div class="flex items-center mb-2">
                                <div class="flex text-yellow-400">
                                    ★★★★★
                                </div>
                                <span class="text-sm text-gray-500 ml-2">(15)</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-blue-600">$389</span>
                                <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 7 -->
                    <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition transform hover:scale-105">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1572635196237-14b3f2815032?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1180&q=80" alt="Sunglasses" class="w-full h-64 object-cover rounded-t-lg">
                        </div>
                        <div class="p-6">
                            <div class="mb-2">
                                <span class="text-sm text-gray-500">Tom Ford</span>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Modern Square</h3>
                            <div class="flex items-center mb-2">
                                <div class="flex text-yellow-400">
                                    ★★★★☆
                                </div>
                                <span class="text-sm text-gray-500 ml-2">(10)</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-blue-600">$275</span>
                                <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 8 -->
                    <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition transform hover:scale-105">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1517406928871-8f1699f43675?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Sunglasses" class="w-full h-64 object-cover rounded-t-lg">
                            <span class="absolute top-4 right-4 bg-blue-500 text-white px-2 py-1 rounded text-xs font-semibold">Sale</span>
                        </div>
                        <div class="p-6">
                            <div class="mb-2">
                                <span class="text-sm text-gray-500">Coach</span>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Retro Inspired</h3>
                            <div class="flex items-center mb-2">
                                <div class="flex text-yellow-400">
                                    ★★★★☆
                                </div>
                                <span class="text-sm text-gray-500 ml-2">(6)</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <div>
                                    <span class="text-2xl font-bold text-blue-600">$159</span>
                                    <span class="text-sm text-gray-500 line-through ml-2">$199</span>
                                </div>
                                <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 9 -->
                    <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition transform hover:scale-105">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1473496169904-658ba7c44d8a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Sunglasses" class="w-full h-64 object-cover rounded-t-lg">
                        </div>
                        <div class="p-6">
                            <div class="mb-2">
                                <span class="text-sm text-gray-500">Bvlgari</span>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Designer Rimless</h3>
                            <div class="flex items-center mb-2">
                                <div class="flex text-yellow-400">
                                    ★★★★★
                                </div>
                                <span class="text-sm text-gray-500 ml-2">(9)</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-blue-600">$450</span>
                                <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="mt-12 flex justify-center">
                    <nav class="flex space-x-2">
                        <button class="px-3 py-2 bg-white border border-gray-300 rounded-md hover:bg-gray-50">←</button>
                        <button class="px-3 py-2 bg-blue-600 text-white rounded-md">1</button>
                        <button class="px-3 py-2 bg-white border border-gray-300 rounded-md hover:bg-gray-50">2</button>
                        <button class="px-3 py-2 bg-white border border-gray-300 rounded-md hover:bg-gray-50">3</button>
                        <button class="px-3 py-2 bg-white border border-gray-300 rounded-md hover:bg-gray-50">→</button>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection