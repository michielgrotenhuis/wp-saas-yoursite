<?php
/*
Template Name: Templates Page
*/

get_header(); ?>

<!-- Hero Section -->
<section class="bg-gradient-to-br from-purple-50 to-pink-100 py-20">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl lg:text-6xl font-bold text-gray-900 mb-6">
                Beautiful templates for every business
            </h1>
            <p class="text-xl text-gray-600 mb-8 max-w-3xl mx-auto">
                Choose from 100+ professionally designed templates. All mobile-responsive, SEO-optimized, and ready to customize for your brand.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <button class="template-filter-btn active px-6 py-3 bg-purple-500 text-white rounded-lg font-medium hover:bg-purple-600 transition-colors" data-filter="all">All Templates</button>
                <button class="template-filter-btn px-6 py-3 bg-white text-gray-700 rounded-lg font-medium hover:bg-gray-50 transition-colors" data-filter="fashion">Fashion</button>
                <button class="template-filter-btn px-6 py-3 bg-white text-gray-700 rounded-lg font-medium hover:bg-gray-50 transition-colors" data-filter="electronics">Electronics</button>
                <button class="template-filter-btn px-6 py-3 bg-white text-gray-700 rounded-lg font-medium hover:bg-gray-50 transition-colors" data-filter="food">Food & Drink</button>
                <button class="template-filter-btn px-6 py-3 bg-white text-gray-700 rounded-lg font-medium hover:bg-gray-50 transition-colors" data-filter="home">Home & Garden</button>
                <button class="template-filter-btn px-6 py-3 bg-white text-gray-700 rounded-lg font-medium hover:bg-gray-50 transition-colors" data-filter="beauty">Beauty</button>
            </div>
        </div>
    </div>
</section>

<!-- Featured Templates -->
<section class="py-20">
    <div class="container mx-auto px-4">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Featured Templates</h2>
                <p class="text-xl text-gray-600">Our most popular and versatile designs</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                <!-- Template 1 - Fashion -->
                <div class="template-card fashion bg-white rounded-lg shadow-sm overflow-hidden feature-card border border-gray-200">
                    <div class="relative group">
                        <div class="aspect-w-16 aspect-h-12 bg-gradient-to-br from-pink-100 to-purple-100 h-48">
                            <div class="flex items-center justify-center">
                                <div class="text-center">
                                    <div class="w-20 h-20 bg-pink-200 rounded-lg mx-auto mb-4 flex items-center justify-center">
                                        <svg class="w-10 h-10 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                        </svg>
                                    </div>
                                    <p class="text-gray-600 font-medium">Fashion Store</p>
                                </div>
                            </div>
                        </div>
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-opacity flex items-center justify-center">
                            <div class="opacity-0 group-hover:opacity-100 transition-opacity">
                                <a href="#" class="btn-primary mr-3">Preview</a>
                                <a href="#" class="btn-secondary">Use Template</a>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Luxe Fashion</h3>
                        <p class="text-gray-600 mb-4">Perfect for high-end fashion brands with elegant product showcases</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">Fashion</span>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <span class="text-sm text-gray-600 ml-1">4.8</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Template 2 - Electronics -->
                <div class="template-card electronics bg-white rounded-lg shadow-sm overflow-hidden feature-card border border-gray-200">
                    <div class="relative group">
                        <div class="aspect-w-16 aspect-h-12 bg-gradient-to-br from-blue-100 to-indigo-100 h-48">
                            <div class="flex items-center justify-center">
                                <div class="text-center">
                                    <div class="w-20 h-20 bg-blue-200 rounded-lg mx-auto mb-4 flex items-center justify-center">
                                        <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                    <p class="text-gray-600 font-medium">Tech Store</p>
                                </div>
                            </div>
                        </div>
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-opacity flex items-center justify-center">
                            <div class="opacity-0 group-hover:opacity-100 transition-opacity">
                                <a href="#" class="btn-primary mr-3">Preview</a>
                                <a href="#" class="btn-secondary">Use Template</a>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">TechVault</h3>
                        <p class="text-gray-600 mb-4">Modern design for electronics with detailed product specifications</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">Electronics</span>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <span class="text-sm text-gray-600 ml-1">4.9</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Template 3 - Food -->
                <div class="template-card food bg-white rounded-lg shadow-sm overflow-hidden feature-card border border-gray-200">
                    <div class="relative group">
                        <div class="aspect-w-16 aspect-h-12 bg-gradient-to-br from-orange-100 to-red-100 h-48">
                            <div class="flex items-center justify-center">
                                <div class="text-center">
                                    <div class="w-20 h-20 bg-orange-200 rounded-lg mx-auto mb-4 flex items-center justify-center">
                                        <svg class="w-10 h-10 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m-2.4 0L5 21h14"></path>
                                        </svg>
                                    </div>
                                    <p class="text-gray-600 font-medium">Food & Drink</p>
                                </div>
                            </div>
                        </div>
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-opacity flex items-center justify-center">
                            <div class="opacity-0 group-hover:opacity-100 transition-opacity">
                                <a href="#" class="btn-primary mr-3">Preview</a>
                                <a href="#" class="btn-secondary">Use Template</a>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Gourmet Kitchen</h3>
                        <p class="text-gray-600 mb-4">Warm, inviting design perfect for food and beverage stores</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">Food & Drink</span>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <span class="text-sm text-gray-600 ml-1">4.7</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- All Templates Grid -->
<section class="bg-gray-50 py-20">
    <div class="container mx-auto px-4">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">All Templates</h2>
                <p class="text-xl text-gray-600">Browse our complete collection of templates</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6" id="templates-grid">
                <!-- Template Grid Items -->
                <div class="template-card home bg-white rounded-lg shadow-sm overflow-hidden feature-card border border-gray-200">
                    <div class="relative group">
                        <div class="bg-gradient-to-br from-green-100 to-teal-100 h-32">
                            <div class="flex items-center justify-center h-full">
                                <div class="w-16 h-16 bg-green-200 rounded-lg flex items-center justify-center">
                                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-opacity flex items-center justify-center">
                            <div class="opacity-0 group-hover:opacity-100 transition-opacity">
                                <a href="#" class="text-white bg-white bg-opacity-20 px-4 py-2 rounded-lg mr-2 hover:bg-opacity-30">Preview</a>
                                <a href="#" class="text-white bg-blue-500 px-4 py-2 rounded-lg hover:bg-blue-600">Use</a>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <h4 class="font-semibold mb-1">Organic Market</h4>
                        <p class="text-sm text-gray-600 mb-2">Food & Drink</p>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <span class="text-sm text-gray-600 ml-1">4.6</span>
                        </div>
                    </div>
                </div>

                <div class="template-card home bg-white rounded-lg shadow-sm overflow-hidden feature-card border border-gray-200">
                    <div class="relative group">
                        <div class="bg-gradient-to-br from-teal-100 to-green-100 h-32">
                            <div class="flex items-center justify-center h-full">
                                <div class="w-16 h-16 bg-teal-200 rounded-lg flex items-center justify-center">
                                    <svg class="w-8 h-8 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-opacity flex items-center justify-center">
                            <div class="opacity-0 group-hover:opacity-100 transition-opacity">
                                <a href="#" class="text-white bg-white bg-opacity-20 px-4 py-2 rounded-lg mr-2 hover:bg-opacity-30">Preview</a>
                                <a href="#" class="text-white bg-blue-500 px-4 py-2 rounded-lg hover:bg-blue-600">Use</a>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <h4 class="font-semibold mb-1">Garden Oasis</h4>
                        <p class="text-sm text-gray-600 mb-2">Home & Garden</p>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <span class="text-sm text-gray-600 ml-1">4.4</span>
                        </div>
                    </div>
                </div>

                <div class="template-card beauty bg-white rounded-lg shadow-sm overflow-hidden feature-card border border-gray-200">
                    <div class="relative group">
                        <div class="bg-gradient-to-br from-rose-100 to-pink-100 h-32">
                            <div class="flex items-center justify-center h-full">
                                <div class="w-16 h-16 bg-rose-200 rounded-lg flex items-center justify-center">
                                    <svg class="w-8 h-8 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-opacity flex items-center justify-center">
                            <div class="opacity-0 group-hover:opacity-100 transition-opacity">
                                <a href="#" class="text-white bg-white bg-opacity-20 px-4 py-2 rounded-lg mr-2 hover:bg-opacity-30">Preview</a>
                                <a href="#" class="text-white bg-blue-500 px-4 py-2 rounded-lg hover:bg-blue-600">Use</a>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <h4 class="font-semibold mb-1">Glow Studio</h4>
                        <p class="text-sm text-gray-600 mb-2">Beauty</p>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <span class="text-sm text-gray-600 ml-1">4.9</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Load More Button -->
            <div class="text-center mt-12">
                <button class="btn-secondary">Load More Templates</button>
            </div>
        </div>
    </div>
</section>

<!-- Template Features -->
<section class="py-20">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Why Choose Our Templates?</h2>
                <p class="text-xl text-gray-600">Every template is built with best practices and conversion optimization</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-lg mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Mobile Responsive</h3>
                    <p class="text-gray-600">Perfect on every device and screen size</p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-lg mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">SEO Optimized</h3>
                    <p class="text-gray-600">Built-in SEO best practices for better rankings</p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-purple-100 rounded-lg mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Fast Loading</h3>
                    <p class="text-gray-600">Optimized for speed and performance</p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-orange-100 rounded-lg mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Easy Customization</h3>
                    <p class="text-gray-600">Drag & drop customization without coding</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="hero-gradient text-white py-20">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl lg:text-5xl font-bold mb-6">
                Ready to build your store?
            </h2>
            <p class="text-xl mb-8 opacity-90">
                Choose a template and customize it to match your brand in minutes
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="#" class="btn-primary text-lg px-8 py-4 bg-white text-purple-600 hover:bg-gray-100">
                    Start Free Trial
                </a>
                <a href="/pricing" class="btn-secondary text-lg px-8 py-4 border-white text-white hover:bg-white hover:text-purple-600">
                    View Pricing
                </a>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Template filtering
    const filterButtons = document.querySelectorAll('.template-filter-btn');
    const templateCards = document.querySelectorAll('.template-card');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active', 'bg-purple-500', 'text-white'));
            filterButtons.forEach(btn => btn.classList.add('bg-white', 'text-gray-700'));
            
            // Add active class to clicked button
            this.classList.add('active', 'bg-purple-500', 'text-white');
            this.classList.remove('bg-white', 'text-gray-700');
            
            const filter = this.getAttribute('data-filter');
            
            templateCards.forEach(card => {
                if (filter === 'all' || card.classList.contains(filter)) {
                    card.style.display = 'block';
                    card.style.opacity = '1';
                } else {
                    card.style.opacity = '0';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            });
        });
    });
    
    // Search functionality
    const searchInput = document.querySelector('input[placeholder="Search templates..."]');
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            
            templateCards.forEach(card => {
                const title = card.querySelector('h3, h4').textContent.toLowerCase();
                const category = card.querySelector('.text-gray-600, .text-gray-500').textContent.toLowerCase();
                
                if (title.includes(searchTerm) || category.includes(searchTerm)) {
                    card.style.display = 'block';
                    card.style.opacity = '1';
                } else {
                    card.style.opacity = '0';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            });
        });
    }
});
</script>

<?php get_footer(); ?>