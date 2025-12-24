@extends('layouts.app')

@section('content')
<!-- About Hero -->
<section class="bg-gradient-to-br from-blue-600 to-purple-700 text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">About SunLux</h1>
            <p class="text-xl md:text-2xl opacity-90 max-w-3xl mx-auto">
                Premium sunglasses crafted with passion and precision
            </p>
        </div>
    </div>
</section>

<!-- Founder Story -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
                    Our Story
                </h2>
                <div class="prose prose-lg text-gray-600 space-y-4">
                    <p>
                        Founded by <span class="font-semibold text-blue-600">Sekouti Abdelaziz</span>, 
                        SunLux was born from a passion for combining exceptional style with uncompromising quality. 
                        With over 15 years of experience in the eyewear industry, Sekouti envisioned a brand that 
                        would make luxury sunglasses accessible to everyone who values both fashion and function.
                    </p>
                    <p>
                        What started as a small boutique in the heart of Marrakesh has grown into a trusted name 
                        in premium eyewear. Our commitment to quality craftsmanship and customer satisfaction remains 
                        at the core of everything we do.
                    </p>
                    <p>
                        Each pair of sunglasses in our collection is carefully selected to ensure it meets our 
                        exacting standards for style, durability, and UV protection. We believe that great 
                        eyewear shouldn't just look good—it should protect your eyes and boost your confidence.
                    </p>
                </div>
            </div>
            <div class="relative">
                <div class="bg-gradient-to-br from-blue-400 to-purple-400 rounded-2xl p-1">
                    <div class="bg-white rounded-2xl p-8">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" 
                             alt="Sekouti Abdelaziz - Founder" 
                             class="rounded-xl w-full h-auto shadow-lg">
                        <div class="mt-6 text-center">
                            <h3 class="text-2xl font-bold text-gray-900">Sekouti Abdelaziz</h3>
                            <p class="text-gray-600">Founder & CEO</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                Our Values
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                The principles that guide everything we do
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Value 1 -->
            <div class="bg-white rounded-xl shadow-lg p-8 text-center hover:shadow-2xl transition-shadow duration-300">
                <div class="bg-blue-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Expertise</h3>
                <p class="text-gray-600">
                    With over 15 years in the industry, we bring unparalleled knowledge and experience to every product we select.
                </p>
            </div>

            <!-- Value 2 -->
            <div class="bg-white rounded-xl shadow-lg p-8 text-center hover:shadow-2xl transition-shadow duration-300">
                <div class="bg-green-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Quality</h3>
                <p class="text-gray-600">
                    Every pair of sunglasses undergoes rigorous quality checks to ensure it meets our high standards.
                </p>
            </div>

            <!-- Value 3 -->
            <div class="bg-white rounded-xl shadow-lg p-8 text-center hover:shadow-2xl transition-shadow duration-300">
                <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Passion</h3>
                <p class="text-gray-600">
                    We love what we do, and it shows in every aspect of our business—from product selection to customer service.
                </p>
            </div>

            <!-- Value 4 -->
            <div class="bg-white rounded-xl shadow-lg p-8 text-center hover:shadow-2xl transition-shadow duration-300">
                <div class="bg-orange-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Vision</h3>
                <p class="text-gray-600">
                    We believe everyone deserves access to premium eyewear that combines style, protection, and affordability.
                </p>
            </div>

            <!-- Value 5 -->
            <div class="bg-white rounded-xl shadow-lg p-8 text-center hover:shadow-2xl transition-shadow duration-300">
                <div class="bg-red-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Community</h3>
                <p class="text-gray-600">
                    We're proud to be part of the vibrant Marrakesh community and serve customers worldwide.
                </p>
            </div>

            <!-- Value 6 -->
            <div class="bg-white rounded-xl shadow-lg p-8 text-center hover:shadow-2xl transition-shadow duration-300">
                <div class="bg-indigo-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Innovation</h3>
                <p class="text-gray-600">
                    We constantly explore new trends and technologies to bring you the latest in eyewear design and protection.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Our Mission -->
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-8">
            Our Mission
        </h2>
        <p class="text-xl text-gray-600 leading-relaxed">
            At SunLux, our mission is simple: to provide exceptional sunglasses that protect your eyes, 
            enhance your style, and offer unbeatable value. We believe that quality eyewear should be 
            accessible to everyone, which is why we work directly with manufacturers to bring you 
            premium products at fair prices.
        </p>
    </div>
</section>

<!-- Team Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                Meet Our Team
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                The talented individuals who make SunLux possible
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Team Member 1 -->
            <div class="bg-white rounded-xl shadow-lg p-6 text-center">
                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" 
                     alt="Team Member" 
                     class="w-32 h-32 rounded-full mx-auto mb-4 object-cover">
                <h3 class="text-lg font-bold text-gray-900">Sekouti Abdelaziz</h3>
                <p class="text-gray-600">Founder & CEO</p>
            </div>

            <!-- Team Member 2 -->
            <div class="bg-white rounded-xl shadow-lg p-6 text-center">
                <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" 
                     alt="Team Member" 
                     class="w-32 h-32 rounded-full mx-auto mb-4 object-cover">
                <h3 class="text-lg font-bold text-gray-900">Sarah Johnson</h3>
                <p class="text-gray-600">Creative Director</p>
            </div>

            <!-- Team Member 3 -->
            <div class="bg-white rounded-xl shadow-lg p-6 text-center">
                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" 
                     alt="Team Member" 
                     class="w-32 h-32 rounded-full mx-auto mb-4 object-cover">
                <h3 class="text-lg font-bold text-gray-900">Michael Chen</h3>
                <p class="text-gray-600">Operations Manager</p>
            </div>

            <!-- Team Member 4 -->
            <div class="bg-white rounded-xl shadow-lg p-6 text-center">
                <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" 
                     alt="Team Member" 
                     class="w-32 h-32 rounded-full mx-auto mb-4 object-cover">
                <h3 class="text-lg font-bold text-gray-900">Emily Davis</h3>
                <p class="text-gray-600">Customer Success</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-blue-600 text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl lg:text-4xl font-bold mb-6">
            Experience the SunLux Difference
        </h2>
        <p class="text-xl mb-8 opacity-90">
            Join thousands of satisfied customers who trust us for their eyewear needs
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('shop') }}" class="inline-block bg-white text-blue-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition transform hover:scale-105">
                Shop Collection
            </a>
            <a href="{{ route('contact') }}" class="inline-block border-2 border-white text-white px-8 py-3 rounded-full font-semibold hover:bg-white hover:text-blue-600 transition">
                Contact Us
            </a>
        </div>
    </div>
</section>
@endsection