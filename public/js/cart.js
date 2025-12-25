// Cart functionality
let cart = JSON.parse(localStorage.getItem('cart')) || [];

// Update cart count in navigation
function updateCartCount() {
    const cartBadge = document.querySelector('.cart-badge');
    if (cartBadge) {
        const totalItems = cart.reduce((total, item) => total + parseInt(item.quantity), 0);
        cartBadge.textContent = totalItems;
        cartBadge.style.display = totalItems > 0 ? 'block' : 'none';
    }
}

// Add to cart function
function addToCart(productId, name, price, image, quantity = 1) {
    const existingItem = cart.find(item => item.id === productId);
    
    if (existingItem) {
        existingItem.quantity += quantity;
    } else {
        cart.push({
            id: productId,
            name: name,
            price: price,
            image: image,
            quantity: quantity
        });
    }
    
    localStorage.setItem('cart', JSON.stringify(cart));
    updateCartCount();
    
    // Show success message
    showNotification('Product added to cart!');
}

// Remove from cart
function removeFromCart(productId) {
    cart = cart.filter(item => item.id !== productId);
    localStorage.setItem('cart', JSON.stringify(cart));
    updateCartCount();
    
    // Update cart display if on cart page
    if (typeof window.updateCartDisplay === 'function') {
        window.updateCartDisplay();
    }
}

// Update cart item quantity
function updateQuantity(productId, change) {
    const item = cart.find(item => item.id === productId);
    if (item) {
        item.quantity = Math.max(1, item.quantity + change);
        localStorage.setItem('cart', JSON.stringify(cart));
        updateCartCount();
        
        // Update cart display if on cart page
        if (typeof window.updateCartDisplay === 'function') {
            window.updateCartDisplay();
        }
    }
}

// Get cart total
function getCartTotal() {
    return cart.reduce((total, item) => total + (item.price * item.quantity), 0);
}

// Show notification
function showNotification(message) {
    const notification = document.createElement('div');
    notification.className = 'fixed top-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50 transition-all transform translate-y-0 opacity-0';
    notification.textContent = message;
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.classList.add('translate-y-0', 'opacity-100');
    }, 100);
    
    setTimeout(() => {
        notification.classList.add('translate-y-2', 'opacity-0');
        setTimeout(() => {
            document.body.removeChild(notification);
        }, 300);
    }, 2000);
}

// Initialize cart on page load
document.addEventListener('DOMContentLoaded', function() {
    updateCartCount();
    
    // Add click listeners to "Add to Cart" buttons
    const addToCartButtons = document.querySelectorAll('[data-add-to-cart]');
    addToCartButtons.forEach(button => {
        button.addEventListener('click', function() {
            const productId = this.dataset.productId;
            const name = this.dataset.name;
            const price = parseFloat(this.dataset.price);
            const image = this.dataset.image;
            
            addToCart(productId, name, price, image);
            
            // Update cart display if on cart page
            if (typeof window.updateCartDisplay === 'function') {
                window.updateCartDisplay();
            }
            
            // Update checkout summary if on checkout page
            if (typeof updateCheckoutSummary === 'function') {
                updateCheckoutSummary();
            }
        });
    });
});

// Update cart display on cart page
function updateCartDisplay() {
    const cartContainer = document.getElementById('cart-items-container');
    const emptyCart = document.getElementById('empty-cart');
    const cartItemsContainer = document.getElementById('cart-items-container');
    const cartCount = document.getElementById('cart-count');
    const cartSubtotal = document.getElementById('cart-subtotal');
    const cartShipping = document.getElementById('cart-shipping');
    const cartTax = document.getElementById('cart-tax');
    const cartTotal = document.getElementById('cart-total');
    const checkoutButton = document.getElementById('checkout-button');
    
    if (cart.length === 0) {
        if (emptyCart) emptyCart.style.display = 'block';
        if (cartItemsContainer) cartItemsContainer.classList.add('hidden');
        if (checkoutButton) checkoutButton.disabled = true;
    } else {
        if (emptyCart) emptyCart.style.display = 'none';
        if (cartItemsContainer) cartItemsContainer.classList.remove('hidden');
        if (checkoutButton) checkoutButton.disabled = false;
        
        // Display cart items
        let cartHTML = '';
        let subtotal = 0;
        
        cart.forEach(item => {
            const itemTotal = item.price * item.quantity;
            subtotal += itemTotal;
            
            cartHTML += `
                <div class="p-4 flex items-center space-x-4">
                    <img src="${item.image}" alt="${item.name}" class="w-16 h-16 object-cover rounded">
                    <div class="flex-1">
                        <h4 class="font-medium text-gray-900">${item.name}</h4>
                        <p class="text-sm text-gray-500">$${item.price}</p>
                    </div>
                    <div class="flex items-center space-x-2">
                        <button onclick="window.updateQuantity('${item.id}', -1)" class="p-1 bg-gray-100 rounded hover:bg-gray-200">-</button>
                        <span class="w-8 text-center">${item.quantity}</span>
                        <button onclick="window.updateQuantity('${item.id}', 1)" class="p-1 bg-gray-100 rounded hover:bg-gray-200">+</button>
                    </div>
                    <div class="text-right">
                        <p class="font-medium text-gray-900">$${itemTotal.toFixed(2)}</p>
                        <button onclick="window.removeFromCart('${item.id}')" class="text-red-600 hover:text-red-800 text-sm">Remove</button>
                    </div>
                </div>
            `;
        });
        
        if (cartContainer) cartContainer.innerHTML = cartHTML;
        
        // Update totals
        const shipping = subtotal > 0 ? 10 : 0;
        const tax = subtotal * 0.08;
        const total = subtotal + shipping + tax;
        
        if (cartCount) cartCount.textContent = cart.reduce((total, item) => total + parseInt(item.quantity), 0);
        if (cartSubtotal) cartSubtotal.textContent = `$${subtotal.toFixed(2)}`;
        if (cartShipping) cartShipping.textContent = `$${shipping.toFixed(2)}`;
        if (cartTax) cartTax.textContent = `$${tax.toFixed(2)}`;
        if (cartTotal) cartTotal.textContent = `$${total.toFixed(2)}`;
    }
}

// Export functions for use in cart page
window.updateCartCount = updateCartCount;
window.updateCartDisplay = updateCartDisplay;
window.cartFunctions = {
    addToCart,
    removeFromCart,
    updateQuantity,
    getCartTotal,
    getCart: () => cart
};