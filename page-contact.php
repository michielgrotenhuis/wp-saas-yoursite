<?php
/*
Template Name: Contact Page
*/

get_header(); ?>

<!-- Hero Section -->
<section class="bg-gradient-to-br from-green-50 to-blue-100 py-20">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl lg:text-6xl font-bold text-gray-900 mb-6">
                Get in touch with us
            </h1>
            <p class="text-xl text-gray-600 mb-8 max-w-3xl mx-auto">
                Have questions about our platform? Need help getting started? Our team is here to help you succeed.
            </p>
        </div>
    </div>
</section>

<!-- Contact Options -->
<section class="py-20">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-lg mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Live Chat</h3>
                    <p class="text-gray-600 mb-4">Get instant answers from our support team</p>
                    <button class="text-blue-600 hover:text-blue-800 font-medium">Start Chat →</button>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-lg mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Email Support</h3>
                    <p class="text-gray-600 mb-4">We'll respond within 24 hours</p>
                    <a href="mailto:support@yoursite.biz" class="text-green-600 hover:text-green-800 font-medium">support@yoursite.biz</a>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-purple-100 rounded-lg mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Phone Support</h3>
                    <p class="text-gray-600 mb-4">Mon-Fri, 9AM-6PM EST</p>
                    <a href="tel:+1-555-123-4567" class="text-purple-600 hover:text-purple-800 font-medium">+1 (555) 123-4567</a>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-orange-100 rounded-lg mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Help Center</h3>
                    <p class="text-gray-600 mb-4">Find answers to common questions</p>
                    <a href="/help" class="text-orange-600 hover:text-orange-800 font-medium">Browse Articles →</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form -->
<section class="bg-gray-50 py-20">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Send us a message</h2>
                <p class="text-xl text-gray-600">We'd love to hear from you. Fill out the form below and we'll get back to you soon.</p>
            </div>
            
            <div class="bg-white rounded-lg shadow-sm p-8 lg:p-12 border border-gray-200">
                <form class="space-y-6" id="contact-form">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="first_name" class="block text-sm font-medium text-gray-700 mb-2">First Name *</label>
                            <input type="text" id="first_name" name="first_name" required 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label for="last_name" class="block text-sm font-medium text-gray-700 mb-2">Last Name *</label>
                            <input type="text" id="last_name" name="last_name" required 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                    </div>
                    
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
                            <input type="email" id="email" name="email" required 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                            <input type="tel" id="phone" name="phone" 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                    </div>
                    
                    <div>
                        <label for="company" class="block text-sm font-medium text-gray-700 mb-2">Company</label>
                        <input type="text" id="company" name="company" 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                    
                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subject *</label>
                        <select id="subject" name="subject" required 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="">Select a subject</option>
                            <option value="general">General Inquiry</option>
                            <option value="support">Technical Support</option>
                            <option value="sales">Sales Question</option>
                            <option value="partnership">Partnership Opportunity</option>
                            <option value="feedback">Product Feedback</option>
                            <option value="billing">Billing Question</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message *</label>
                        <textarea id="message" name="message" rows="6" required 
                                  placeholder="Tell us more about your inquiry..."
                                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
                    </div>
                    
                    <div class="flex items-center">
                        <input type="checkbox" id="newsletter" name="newsletter" 
                               class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="newsletter" class="ml-2 block text-sm text-gray-700">
                            I'd like to receive updates about new features and product news
                        </label>
                    </div>
                    
                    <div class="text-center">
                        <button type="submit" class="btn-primary text-lg px-8 py-4">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-20">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
                <p class="text-xl text-gray-600">Quick answers to common questions</p>
            </div>
            
            <div class="space-y-6">
                <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-200">
                    <button class="flex justify-between items-center w-full text-left faq-toggle">
                        <h3 class="text-lg font-semibold text-gray-900">How quickly can I get my store online?</h3>
                        <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-content hidden mt-4">
                        <p class="text-gray-600">Most merchants can set up their store and start selling within minutes using our templates and drag-and-drop builder. For custom designs, it may take a few hours to get everything exactly how you want it.</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-200">
                    <button class="flex justify-between items-center w-full text-left faq-toggle">
                        <h3 class="text-lg font-semibold text-gray-900">What payment methods do you support?</h3>
                        <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-content hidden mt-4">
                        <p class="text-gray-600">We support all major credit cards, PayPal, Apple Pay, Google Pay, and many other payment methods. Our platform integrates with leading payment processors like Stripe, Square, and more.</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-200">
                    <button class="flex justify-between items-center w-full text-left faq-toggle">
                        <h3 class="text-lg font-semibold text-gray-900">Do you offer customer support?</h3>
                        <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-content hidden mt-4">
                        <p class="text-gray-600">Yes! We offer 24/7 chat support, email support with 24-hour response times, phone support during business hours, and a comprehensive help center with tutorials and guides.</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-200">
                    <button class="flex justify-between items-center w-full text-left faq-toggle">
                        <h3 class="text-lg font-semibold text-gray-900">Can I migrate my existing store?</h3>
                        <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-content hidden mt-4">
                        <p class="text-gray-600">Absolutely! We offer free migration services to help you move your products, customers, and order history from platforms like Shopify, WooCommerce, Magento, and others. Our team will handle the technical details.</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-200">
                    <button class="flex justify-between items-center w-full text-left faq-toggle">
                        <h3 class="text-lg font-semibold text-gray-900">What's included in the free trial?</h3>
                        <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-content hidden mt-4">
                        <p class="text-gray-600">Our 14-day free trial includes access to all features, unlimited products, all templates, and full customer support. No credit card required to start, and you can upgrade or cancel anytime.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Office Location -->
<section class="bg-gray-50 py-20">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Visit Our Office</h2>
                <p class="text-xl text-gray-600">We'd love to meet you in person</p>
            </div>
            
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="bg-white rounded-lg p-8 shadow-sm border border-gray-200">
                        <h3 class="text-2xl font-semibold mb-6">San Francisco Headquarters</h3>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-gray-400 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <div>
                                    <p class="font-medium text-gray-900">Address</p>
                                    <p class="text-gray-600">123 Market Street, Suite 456<br>San Francisco, CA 94105</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-gray-400 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <div>
                                    <p class="font-medium text-gray-900">Office Hours</p>
                                    <p class="text-gray-600">Monday - Friday: 9:00 AM - 6:00 PM PST<br>Weekend: By appointment only</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-gray-400 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                <div>
                                    <p class="font-medium text-gray-900">General Inquiries</p>
                                    <p class="text-gray-600">hello@yoursite.biz</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-8 pt-6 border-t border-gray-200">
                            <p class="text-sm text-gray-600 mb-4">
                                Planning a visit? We'd love to give you a tour and demo our platform. Please schedule ahead of time.
                            </p>
                            <button class="btn-secondary">Schedule a Visit</button>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gray-200 rounded-lg h-96 flex items-center justify-center">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-gray-400 rounded-lg mx-auto mb-4 flex items-center justify-center">
                            <svg class="w-8 h-8 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <p class="text-gray-600">Interactive Map</p>
                        <p class="text-sm text-gray-500">San Francisco Office Location</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Contact form handling
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const button = this.querySelector('button[type="submit"]');
            const originalText = button.textContent;
            
            // Show loading state
            button.textContent = 'Sending...';
            button.disabled = true;
            
            // Simulate form submission (replace with actual implementation)
            setTimeout(() => {
                // Show success message
                const successMessage = document.createElement('div');
                successMessage.className = 'bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4';
                successMessage.innerHTML = '<strong>Success!</strong> Your message has been sent. We\'ll get back to you soon.';
                
                this.insertBefore(successMessage, this.firstChild);
                
                // Reset form
                this.reset();
                button.textContent = originalText;
                button.disabled = false;
                
                // Remove success message after 5 seconds
                setTimeout(() => {
                    successMessage.remove();
                }, 5000);
            }, 2000);
        });
    }
    
    // FAQ toggle functionality
    const faqToggles = document.querySelectorAll('.faq-toggle');
    
    faqToggles.forEach(toggle => {
        toggle.addEventListener('click', function() {
            const content = this.nextElementSibling;
            const icon = this.querySelector('svg');
            
            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                icon.classList.add('rotate-180');
            } else {
                content.classList.add('hidden');
                icon.classList.remove('rotate-180');
            }
        });
    });
});
</script>

<?php get_footer(); ?>