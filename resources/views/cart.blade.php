@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Page Header -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">
                Shopping Cart
            </h1>
            <p class="text-gray-600">
                Review your items and proceed to checkout
            </p>
        </div>

        <!-- Cart Items -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="px-4 py-5 sm:p-6 lg:p-8">
                <!-- Empty Cart State -->
                <div id="empty-cart" class="text-center py-12">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-gray-100 rounded-full mb-4">
                        <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4a4 4 0 008 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17M7 13l4-4m0 6a1 1 0 11-2 0 1 1 0 012 0zm8 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-medium text-gray-900 mb-2">Your cart is empty</h3>
                    <p class="text-gray-500 mb-6">Looks like you haven't added any sunglasses yet.</p>
                    <a href="{{ route('shop') }}" 
                       class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-300">
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5-5m0 0v11a2 2 0 00-2 2H7a2 2 0 00-2 2v10a2 2 0 002-2h1a2 2 0 00-2 2V6a2 2 0 002 2h1a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        Continue Shopping
                    </a>
                </div>

                <!-- Cart Items (Hidden by default) -->
                <div id="cart-items" class="hidden">
                    <div class="space-y-6" id="cart-items-container">
                        <!-- Cart Item 1 -->
                        <div class="flex items-center space-x-4 pb-6 border-b border-gray-200">
                            <img src="https://images.unsplash.com/photo-1511499767150-a48a237f0083?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" 
                                 alt="Classic Aviator" 
                                 class="w-20 h-20 object-cover rounded-lg">
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex justify-between space-x-4">
                                    <div>
                                        <h3 class="text-lg font-medium text-gray-900">Classic Aviator</h3>
                                        <p class="text-sm text-gray-500">Ray-Ban Style</p>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-lg font-medium text-gray-900">$129</p>
                                        <button class="text-red-600 hover:text-red-800 text-sm font-medium">
                                            Remove
                                        </button>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center mt-2">
                                    <div class="flex items-center space-x-2">
                                        <label for="quantity-1" class="text-sm text-gray-600">Quantity:</label>
                                        <select id="quantity-1" class="w-16 border-gray-300 rounded-md text-sm focus:ring-blue-500 focus:border-blue-500">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                    <p class="text-sm text-gray-500">In stock</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Cart functionality
document.addEventListener('DOMContentLoaded', function() {
    // Sample cart data (in real app, this would come from server)
    const cartItems = [
        {
            id: 1,
            name: 'Classic Aviator',
            price: 129,
            quantity: 1,
            image: 'https://images.unsplash.com/photo-1511499767150-a48a237f0083?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80'
        },
        {
            id: 2,
            name: 'Sport Pro',
            price: 189,
            quantity: 1,
            image: 'https://images.unsplash.com/photo-1473496169904-658ba7c44d8a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80'
        }
    ];
    
    if (cartItems.length > 0) {
        // Show cart items, hide empty cart
        document.getElementById('empty-cart').classList.add('hidden');
        document.getElementById('cart-items').classList.remove('hidden');
        
        // Update totals
        updateOrderSummary(cartItems);
    } else {
        // Show empty cart, hide cart items
        document.getElementById('empty-cart').classList.remove('hidden');
        document.getElementById('cart-items').classList.add('hidden');
    }
    
    function updateOrderSummary(items) {
        const subtotal = items.reduce((total, item) => total + (item.price * item.quantity), 0);
        const tax = subtotal * 0.1; // 10% tax
        const total = subtotal + tax;
        
        // In real app, you would update DOM elements here
        console.log('Order subtotal:', subtotal);
        console.log('Order tax:', tax);
        console.log('Order total:', total);
    }
    
    // Add to cart functionality
    window.addToCart = function(productId) {
        console.log('Adding to cart:', productId);
        
        // Show notification
        const notification = document.createElement('div');
        notification.className = 'fixed top-20 right-4 bg-green-500 text-white px-4 py-2 rounded-lg shadow-lg z-50 transition-all duration-300';
        notification.textContent = '✅ Product added to cart!';
        document.body.appendChild(notification);
        
        // Remove notification after 3 seconds
        setTimeout(() => {
            notification.style.opacity = '0';
            setTimeout(() => notification.remove(), 300);
        }, 3000);
        
        // Here you would typically make an API call to add to cart
        // For demo, we'll just show the notification
    };
});
</script>
@endsection