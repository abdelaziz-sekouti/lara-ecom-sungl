@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Page Header -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-900">Shopping Cart</h1>
            <p class="text-gray-600">Review your items and proceed to checkout</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Cart Items -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-lg shadow-md">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h2 class="text-lg font-medium text-gray-900">Your Items</h2>
                        <p class="text-sm text-gray-500 mt-1">
                            <span id="cart-count">0</span> items in your cart
                        </p>
                    </div>
                    
                    <!-- Empty Cart State -->
                    <div id="empty-cart" class="p-12 text-center">
                        <i class="fas fa-shopping-cart text-6xl text-gray-300 mb-4"></i>
                        <h3 class="text-xl font-medium text-gray-900 mb-2">Your cart is empty</h3>
                        <p class="text-gray-500 mb-6">Looks like you haven't added any sunglasses yet.</p>
                        <a href="{{ route('shop') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-300">
                            <i class="fas fa-glasses mr-2"></i>
                            Start Shopping
                        </a>
                    </div>
                    
                    <!-- Cart Items (Hidden by default) -->
                    <div id="cart-items-container" class="hidden">
                        <div class="divide-y divide-gray-200" id="cart-items-container">
                            <!-- Cart items will be dynamically added here -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Order Summary -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-lg shadow-md sticky top-8">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h2 class="text-lg font-medium text-gray-900">Order Summary</h2>
                    </div>
                    <div class="p-6 space-y-4">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Subtotal</span>
                            <span class="font-medium text-gray-900" id="cart-subtotal">$0.00</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Shipping</span>
                            <span class="font-medium text-gray-900" id="cart-shipping">$0.00</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Tax</span>
                            <span class="font-medium text-gray-900" id="cart-tax">$0.00</span>
                        </div>
                        <div class="border-t pt-4">
                            <div class="flex justify-between">
                                <span class="text-lg font-medium text-gray-900">Total</span>
                                <span class="text-xl font-bold text-blue-600" id="cart-total">$0.00</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Checkout Button -->
                    <div class="px-6 py-4 border-t border-gray-200">
                        <a href="{{ route('checkout') }}" id="checkout-button" class="block w-full bg-blue-600 text-white px-4 py-3 rounded-md text-sm font-medium hover:bg-blue-700 transition duration-300 disabled:opacity-50 disabled:cursor-not-allowed text-center">
                            Proceed to Checkout
                        </a>
                        
                        <div class="mt-4 text-center">
                            <a href="{{ route('shop') }}" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                                <i class="fas fa-arrow-left mr-2"></i>
                                Continue Shopping
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Make sure cart is initialized when page loads
document.addEventListener('DOMContentLoaded', function() {
    // Initialize cart if cart.js functions are available
    if (typeof window.updateCartDisplay === 'function') {
        window.updateCartDisplay();
    }
});
</script>
@endsection