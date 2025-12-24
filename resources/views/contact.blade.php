@extends('layouts.app')

@section('content')
<!-- Contact Hero -->
<section class="bg-gradient-to-br from-blue-600 to-purple-700 text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Get in Touch</h1>
            <p class="text-xl md:text-2xl opacity-90 max-w-3xl mx-auto">
                We'd love to hear from you. Whether you have a question about our products or need assistance with your order.
            </p>
        </div>
    </div>
</section>

<!-- Contact Form and Map -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div>
                <div class="bg-white rounded-xl shadow-lg p-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Send us a Message</h2>
                    
                    <form class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                                    Your Name *
                                </label>
                                <input type="text" 
                                       id="name" 
                                       name="name" 
                                       required
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"
                                       placeholder="John Doe">
                            </div>
                            
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                    Email Address *
                                </label>
                                <input type="email" 
                                       id="email" 
                                       name="email" 
                                       required
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"
                                       placeholder="john@example.com">
                            </div>
                        </div>

                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">
                                Phone Number
                            </label>
                            <input type="tel" 
                                   id="phone" 
                                   name="phone"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"
                                   placeholder="+1 (555) 123-4567">
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">
                                Subject *
                            </label>
                            <select id="subject" 
                                    name="subject"
                                    required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
                                <option value="">Select a subject</option>
                                <option value="product-question">Product Question</option>
                                <option value="order-status">Order Status</option>
                                <option value="return">Return/Refund</option>
                                <option value="wholesale">Wholesale Inquiry</option>
                                <option value="partnership">Partnership</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">
                                Message *
                            </label>
                            <textarea id="message" 
                                      name="message" 
                                      rows="5"
                                      required
                                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition resize-none"
                                      placeholder="Tell us how we can help you..."></textarea>
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" 
                                   id="newsletter" 
                                   name="newsletter"
                                   class="mr-2 text-blue-600 rounded border-gray-300 focus:ring-blue-500">
                            <label for="newsletter" class="text-sm text-gray-600">
                                I'd like to receive updates about new products and special offers
                            </label>
                        </div>

                        <button type="submit" 
                                class="w-full bg-blue-600 text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-700 transition duration-300 transform hover:-translate-y-1 shadow-lg hover:shadow-xl">
                            Send Message
                        </button>
                    </form>
                </div>

                <!-- Contact Info -->
                <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white rounded-xl shadow-lg p-6 flex items-start space-x-4">
                        <div class="bg-blue-100 rounded-full p-3 flex-shrink-0">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-1">Address</h3>
                            <p class="text-gray-600">
                                Derb Bouaalam N 185 SYBA<br>
                                Marrakesh, Morocco
                            </p>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg p-6 flex items-start space-x-4">
                        <div class="bg-green-100 rounded-full p-3 flex-shrink-0">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-1">Phone</h3>
                            <p class="text-gray-600">
                                +212 5XX-XXXXXX<br>
                                Mon-Fri: 9AM-6PM
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Map -->
            <div>
                <div class="bg-white rounded-xl shadow-lg p-6 h-full">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Find Us</h2>
                    
                    <!-- Google Map Embed -->
                    <div class="relative overflow-hidden rounded-lg" style="padding-bottom: 75%;">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13587.123456789!2d-7.981111!3d31.629472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzHCsDE2JzMwnjU3LcKwMDc2wrAxMydmMA!5e0!3m2!1sen!2sma!4v1234567890"
                            width="100%" 
                            height="100%" 
                            style="position: absolute; top: 0; left: 0; border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"
                            class="rounded-lg">
                        </iframe>
                    </div>

                    <div class="mt-6 p-4 bg-blue-50 rounded-lg">
                        <h3 class="text-lg font-semibold text-blue-900 mb-2">Store Hours</h3>
                        <div class="space-y-2 text-blue-800">
                            <div class="flex justify-between">
                                <span>Monday - Friday</span>
                                <span class="font-medium">9:00 AM - 6:00 PM</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Saturday</span>
                                <span class="font-medium">10:00 AM - 4:00 PM</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Sunday</span>
                                <span class="font-medium">Closed</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 p-4 bg-green-50 rounded-lg">
                        <h3 class="text-lg font-semibold text-green-900 mb-2">Quick Ways to Reach Us</h3>
                        <div class="space-y-2">
                            <div class="flex items-center text-green-800">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                <span>support@sunlux.com</span>
                            </div>
                            <div class="flex items-center text-green-800">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                </svg>
                                <span>Live Chat Available</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                Frequently Asked Questions
            </h2>
            <p class="text-xl text-gray-600">
                Quick answers to common questions
            </p>
        </div>

        <div class="space-y-4">
            <!-- FAQ 1 -->
            <div class="bg-gray-50 rounded-lg p-6">
                <button class="w-full text-left flex justify-between items-center" onclick="this.classList.toggle('open')">
                    <h3 class="text-lg font-semibold text-gray-900">Do you offer international shipping?</h3>
                    <svg class="w-5 h-5 text-gray-600 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <p class="text-gray-600 mt-4 hidden">Yes, we ship worldwide! Shipping costs and delivery times vary by location. International orders typically arrive within 7-14 business days.</p>
            </div>

            <!-- FAQ 2 -->
            <div class="bg-gray-50 rounded-lg p-6">
                <button class="w-full text-left flex justify-between items-center" onclick="this.classList.toggle('open')">
                    <h3 class="text-lg font-semibold text-gray-900">What is your return policy?</h3>
                    <svg class="w-5 h-5 text-gray-600 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <p class="text-gray-600 mt-4 hidden">We offer a 30-day return policy for unused items in original packaging. Simply contact our customer service team to initiate a return.</p>
            </div>

            <!-- FAQ 3 -->
            <div class="bg-gray-50 rounded-lg p-6">
                <button class="w-full text-left flex justify-between items-center" onclick="this.classList.toggle('open')">
                    <h3 class="text-lg font-semibold text-gray-900">Are your sunglasses UV protected?</h3>
                    <svg class="w-5 h-5 text-gray-600 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <p class="text-gray-600 mt-4 hidden">All our sunglasses offer 100% UV400 protection, blocking harmful UVA and UVB rays to keep your eyes safe in the sun.</p>
            </div>

            <!-- FAQ 4 -->
            <div class="bg-gray-50 rounded-lg p-6">
                <button class="w-full text-left flex justify-between items-center" onclick="this.classList.toggle('open')">
                    <h3 class="text-lg font-semibold text-gray-900">Do you offer prescription lenses?</h3>
                    <svg class="w-5 h-5 text-gray-600 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <p class="text-gray-600 mt-4 hidden">Currently, we offer non-prescription sunglasses. However, many of our frames can be fitted with prescription lenses by your local optician.</p>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const faqButtons = document.querySelectorAll('.bg-gray-50 button');
    faqButtons.forEach(button => {
        button.addEventListener('click', function() {
            const content = this.nextElementSibling;
            const svg = this.querySelector('svg');
            
            content.classList.toggle('hidden');
            svg.classList.toggle('rotate-180');
        });
    });
});
</script>
@endsection