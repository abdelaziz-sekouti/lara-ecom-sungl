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
}

// Update cart item quantity
function updateQuantity(productId, change) {
    const item = cart.find(item => item.id === productId);
    if (item) {
        item.quantity = Math.max(1, item.quantity + change);
        localStorage.setItem('cart', JSON.stringify(cart));
        updateCartCount();
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
        });
    });
});

// Export functions for use in cart page
window.cartFunctions = {
    addToCart,
    removeFromCart,
    updateQuantity,
    getCartTotal,
    getCart: () => cart
};