@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50 py-8">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Checkout Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">
                Secure Checkout
            </h1>
            <p class="text-gray-600">
                Complete your order with our secure payment system
            </p>
        </div>

        <form class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left Column - Shipping Information -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Shipping Address -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-xl font-semibold text-gray-900 mb-4">
                        Shipping Information
                    </h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="space-y-2">
                            <label for="first_name" class="block text-sm font-medium text-gray-700">
                                First Name
                            </label>
                            <input type="text" id="first_name" name="first_name" required
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                   placeholder="John">
                        </div>
                        
                        <div class="space-y-2">
                            <label for="last_name" class="block text-sm font-medium text-gray-700">
                                Last Name
                            </label>
                            <input type="text" id="last_name" name="last_name" required
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                   placeholder="Doe">
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label for="email" class="block text-sm font-medium text-gray-700">
                            Email Address
                        </label>
                        <input type="email" id="email" name="email" required
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                               placeholder="john@example.com">
                    </div>

                    <div class="space-y-2">
                        <label for="phone" class="block text-sm font-medium text-gray-700">
                            Phone Number
                        </label>
                        <input type="tel" id="phone" name="phone" required
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                               placeholder="+1 (555) 123-4567">
                    </div>

                    <div class="space-y-2">
                        <label for="address" class="block text-sm font-medium text-gray-700">
                            Street Address
                        </label>
                        <input type="text" id="address" name="address" required
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                               placeholder="123 Main Street">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="space-y-2">
                            <label for="city" class="block text-sm font-medium text-gray-700">
                                City
                            </label>
                            <input type="text" id="city" name="city" required
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                   placeholder="New York">
                        </div>
                        
                        <div class="space-y-2">
                            <label for="state" class="block text-sm font-medium text-gray-700">
                                State
                            </label>
                            <input type="text" id="state" name="state" required
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                   placeholder="NY">
                        </div>
                        
                        <div class="space-y-2">
                            <label for="zip_code" class="block text-sm font-medium text-gray-700">
                                ZIP Code
                            </label>
                            <input type="text" id="zip_code" name="zip_code" required
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                   placeholder="10001">
                        </div>
                    </div>
                </div>

                <!-- Payment Method -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-xl font-semibold text-gray-900 mb-4">
                        Payment Method
                    </h2>
                    
                    <div class="space-y-4">
                        <!-- Credit Card Option -->
                        <label class="flex items-center p-4 border rounded-lg cursor-pointer hover:bg-gray-50 transition">
                            <input type="radio" name="payment_method" value="credit_card" checked class="sr-only">
                            <div class="ml-3">
                                <div class="flex items-center">
                                    <div class="w-12 h-8 bg-blue-600 rounded flex items-center justify-center mr-3">
                                        <svg class="w-6 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M4 4a2 2 0 00-2-2v1a2 2 0 002 2h1a2 2 0 012 2v7a2 2 0 002-2h1a2 2 0 002-2v-7a2 2 0 00-2-2H4a2 2 0 00-2 2v1a2 2 0 002 2h1a2 2 0 012 2v7a2 2 0 002-2h1a2 2 0 002-2V6a2 2 0 00-2-2H4a2 2 0 00-2 2zm1 9h6V5H5v8h6zm-6-3a2 2 0 00-2 2v4a2 2 0 002 2h6a2 2 0 002-2V8a2 2 0 00-2-2z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-medium text-gray-900">Credit Card</p>
                                        <p class="text-sm text-gray-500">Visa, Mastercard, AMEX</p>
                                    </div>
                                </div>
                            </div>
                        </label>

                        <!-- PayPal Option -->
                        <label class="flex items-center p-4 border rounded-lg cursor-pointer hover:bg-gray-50 transition">
                            <input type="radio" name="payment_method" value="paypal" class="sr-only">
                            <div class="ml-3">
                                <div class="flex items-center">
                                    <div class="w-12 h-8 bg-blue-700 rounded flex items-center justify-center mr-3">
                                        <span class="text-white font-bold text-sm">P</span>
                                    </div>
                                    <div>
                                        <p class="font-medium text-gray-900">PayPal</p>
                                        <p class="text-sm text-gray-500">Fast & secure</p>
                                    </div>
                                </div>
                            </div>
                        </label>

                        <!-- Cash on Delivery Option -->
                        <label class="flex items-center p-4 border rounded-lg cursor-pointer hover:bg-gray-50 transition">
                            <input type="radio" name="payment_method" value="cod" class="sr-only">
                            <div class="ml-3">
                                <div class="flex items-center">
                                    <div class="w-12 h-8 bg-green-600 rounded flex items-center justify-center mr-3">
                                        <svg class="w-6 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2-2v2a2 2 0 002-2h10a2 2 0 002 2v6a2 2 0 002 2z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-medium text-gray-900">Cash on Delivery</p>
                                        <p class="text-sm text-gray-500">Pay when you receive</p>
                                    </div>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>
            </div>

            <!-- Right Column - Order Summary -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-lg shadow-md p-6 sticky top-8">
                    <h2 class="text-xl font-semibold text-gray-900 mb-4">
                        Order Summary
                    </h2>
                    
                    <!-- Order Items -->
                    <div class="space-y-4 mb-6">
                        <!-- Order Item 1 -->
                        <div class="flex items-center space-x-4 pb-4 border-b border-gray-200">
                            <img src="https://images.unsplash.com/photo-1511499767150-a48a237f0083?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" 
                                 alt="Classic Aviator" 
                                 class="w-16 h-16 object-cover rounded">
                            <div class="flex-1">
                                <div class="flex justify-between">
                                    <h3 class="text-sm font-medium text-gray-900">Classic Aviator</h3>
                                    <p class="text-sm text-gray-500">x1</p>
                                </div>
                                <p class="text-sm text-gray-600">$129.00</p>
                            </div>
                        </div>

                        <!-- Order Item 2 -->
                        <div class="flex items-center space-x-4 pb-4 border-b border-gray-200">
                            <img src="https://images.unsplash.com/photo-1473496169904-658ba7c44d8a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" 
                                 alt="Sport Pro" 
                                 class="w-16 h-16 object-cover rounded">
                            <div class="flex-1">
                                <div class="flex justify-between">
                                    <h3 class="text-sm font-medium text-gray-900">Sport Pro</h3>
                                    <p class="text-sm text-gray-500">x1</p>
                                </div>
                                <p class="text-sm text-gray-600">$189.00</p>
                            </div>
                        </div>
                    </div>

                    <!-- Price Summary -->
                    <div class="space-y-3">
                        <div class="flex justify-between text-base">
                            <p class="text-gray-600">Subtotal</p>
                            <p class="font-medium text-gray-900">$318.00</p>
                        </div>
                        
                        <div class="flex justify-between text-base">
                            <p class="text-gray-600">Shipping</p>
                            <p class="font-medium text-green-600">Free</p>
                        </div>
                        
                        <div class="flex justify-between text-base">
                            <p class="text-gray-600">Tax</p>
                            <p class="font-medium text-gray-900">$31.80</p>
                        </div>
                        
                        <div class="border-t border-gray-200 pt-3">
                            <div class="flex justify-between">
                                <p class="text-lg font-semibold text-gray-900">Total</p>
                                <p class="text-lg font-bold text-gray-900">$349.80</p>
                            </div>
                        </div>
                    </div>

                    <!-- Place Order Button -->
                    <button type="submit" 
                            class="w-full flex justify-center items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-300">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17M7 13l4-4m0 6a1 1 0 11-2 0 1 1 0 012 0zm8 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z"></path>
                        </svg>
                        Place Order
                    </button>

                    <!-- Security Badge -->
                    <div class="mt-4 flex items-center justify-center text-sm text-gray-500">
                        <svg class="w-4 h-4 mr-2 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Secure checkout powered by SSL encryption
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection