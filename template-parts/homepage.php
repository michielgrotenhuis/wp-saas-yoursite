<?php
/**
 * Template part for displaying homepage content
 */
?>

<!-- Hero Section -->
<section class="hero-gradient text-white py-20 lg:py-32">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center fade-in-up">
            <h1 class="text-4xl lg:text-6xl font-bold mb-6 leading-tight">
                <?php echo get_theme_mod('hero_title', 'Build Your Online Store in Minutes'); ?>
            </h1>
            <p class="text-xl lg:text-2xl mb-8 opacity-90 max-w-3xl mx-auto">
                <?php echo get_theme_mod('hero_subtitle', 'No code. No hassle. Just launch and sell.'); ?>
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="<?php echo get_theme_mod('cta_primary_url', '#'); ?>" class="btn-primary text-lg px-8 py-4 rounded-lg font-semibold hover-lift">
                    <?php echo get_theme_mod('cta_primary_text', 'Start Free Trial'); ?>
                </a>
                <a href="#demo" class="btn-secondary text-lg px-8 py-4 rounded-lg font-semibold hover-lift">
                    View Demo
                </a>
            </div>
        </div>
        
        <!-- Hero Image/Dashboard Preview -->
        <div class="mt-16 max-w-5xl mx-auto">
            <div class="bg-white rounded-lg shadow-2xl p-8 transform rotate-1 hover:rotate-0 transition-transform duration-300">
                <div class="bg-gray-100 rounded-lg h-96 flex items-center justify-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/homepage-dashboard.jpg');">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-blue-500 rounded-lg mx-auto mb-4"></div>
                        <p class="text-gray-600 font-medium">Dashboard Preview</p>
                        <p class="text-gray-500 text-sm">Beautiful, intuitive store builder</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Social Proof -->
<section class="bg-gray-50 py-12">
    <div class="container mx-auto px-4">
        <div class="text-center">
            <p class="text-gray-600 mb-8">Trusted by over 10,000 merchants worldwide</p>
            <div class="flex justify-center items-center space-x-8 opacity-60">
                <!-- Logo placeholders -->
                <div class="w-24 h-12 bg-gray-300 rounded flex items-center justify-center">
                    <span class="text-xs text-gray-500">Logo</span>
                </div>
                <div class="w-24 h-12 bg-gray-300 rounded flex items-center justify-center">
                    <span class="text-xs text-gray-500">Logo</span>
                </div>
                <div class="w-24 h-12 bg-gray-300 rounded flex items-center justify-center">
                    <span class="text-xs text-gray-500">Logo</span>
                </div>
                <div class="w-24 h-12 bg-gray-300 rounded flex items-center justify-center">
                    <span class="text-xs text-gray-500">Logo</span>
                </div>
                <div class="w-24 h-12 bg-gray-300 rounded flex items-center justify-center">
                    <span class="text-xs text-gray-500">Logo</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Key Benefits -->
<section class="py-20">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-5xl font-bold text-gray-900 mb-4">
                    Everything you need to sell online
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    From store building to shipping, we've got all the tools to help you succeed
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center feature-card p-6 rounded-lg">
                    <div class="w-16 h-16 bg-blue-100 rounded-lg mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Drag & Drop Builder</h3>
                    <p class="text-gray-600">Build your store with our intuitive drag & drop interface. No coding required.</p>
                </div>
                
                <div class="text-center feature-card p-6 rounded-lg">
                    <div class="w-16 h-16 bg-green-100 rounded-lg mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Secure Payments</h3>
                    <p class="text-gray-600">Accept payments safely with our secure checkout and multiple payment options.</p>
                </div>
                
                <div class="text-center feature-card p-6 rounded-lg">
                    <div class="w-16 h-16 bg-purple-100 rounded-lg mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Marketing & SEO</h3>
                    <p class="text-gray-600">Built-in marketing tools and SEO optimization to grow your business.</p>
                </div>
                
                <div class="text-center feature-card p-6 rounded-lg">
                    <div class="w-16 h-16 bg-orange-100 rounded-lg mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Shipping Made Simple</h3>
                    <p class="text-gray-600">Manage inventory and shipping with automated tools and integrations.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Grid -->
<?php
$features = get_features(6);
if ($features->have_posts()) :
?>
<section class="bg-gray-50 py-20">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-5xl font-bold text-gray-900 mb-4">
                    Powerful features for every business
                </h2>
                <p class="text-xl text-gray-600">
                    Everything you need to create, customize, and grow your online store
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php while ($features->have_posts()) : $features->the_post(); ?>
                <div class="bg-white rounded-lg p-8 feature-card border border-gray-200">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="mb-6">
                            <?php the_post_thumbnail('medium', array('class' => 'w-full h-48 object-cover rounded-lg')); ?>
                        </div>
                    <?php endif; ?>
                    <h3 class="text-xl font-semibold mb-4"><?php the_title(); ?></h3>
                    <p class="text-gray-600 mb-4"><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="text-blue-600 font-medium hover:text-blue-800">
                        Learn More →
                    </a>
                </div>
                <?php endwhile; ?>
            </div>
            
            <div class="text-center mt-12">
                <a href="<?php echo home_url('/features'); ?>" class="btn-secondary">View All Features</a>
            </div>
        </div>
    </div>
</section>
<?php
wp_reset_postdata();
endif;
?>

<!-- Pricing Section -->
<?php
$pricing_plans = get_pricing_plans();
if ($pricing_plans->have_posts()) :
?>
<section class="py-20">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-5xl font-bold text-gray-900 mb-4">
                    Simple, transparent pricing
                </h2>
                <p class="text-xl text-gray-600">
                    Choose the plan that's right for your business
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <?php while ($pricing_plans->have_posts()) : $pricing_plans->the_post(); 
                    $price = get_post_meta(get_the_ID(), '_pricing_price', true);
                    $period = get_post_meta(get_the_ID(), '_pricing_period', true);
                    $features = get_post_meta(get_the_ID(), '_pricing_features', true);
                    $featured = get_post_meta(get_the_ID(), '_pricing_featured', true);
                    $purchase_url = get_post_meta(get_the_ID(), '_pricing_purchase_url', true) ?: '#';
                    $button_text = get_post_meta(get_the_ID(), '_pricing_button_text', true) ?: 'Get Started';
                ?>
                <div class="bg-white rounded-lg p-8 border-2 border-gray-200 feature-card relative <?php echo $featured ? 'border-blue-500 shadow-lg' : ''; ?>">
                    <?php if ($featured) : ?>
                        <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                            <span class="bg-blue-500 text-white px-4 py-2 rounded-full text-sm font-medium">Most Popular</span>
                        </div>
                    <?php endif; ?>
                    
                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold mb-4"><?php the_title(); ?></h3>
                        <div class="mb-4">
                            <span class="text-4xl font-bold">$<?php echo number_format($price, 2); ?></span>
                            <span class="text-gray-600">/ <?php echo $period; ?></span>
                        </div>
                        <p class="text-gray-600"><?php the_excerpt(); ?></p>
                    </div>
                    
                    <?php if ($features) : ?>
                    <div class="mb-8">
                        <ul class="space-y-3">
                            <?php 
                            $feature_list = explode("\n", $features);
                            foreach ($feature_list as $feature) :
                                if (trim($feature)) :
                            ?>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <?php echo trim($feature); ?>
                            </li>
                            <?php 
                                endif;
                            endforeach; 
                            ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                    
                    <a href="<?php echo esc_url($purchase_url); ?>" class="<?php echo $featured ? 'btn-primary' : 'btn-secondary'; ?> w-full text-center block">
                        <?php echo esc_html($button_text); ?>
                    </a>
                </div>
                <?php endwhile; ?>
            </div>
            
            <div class="text-center mt-12">
                <a href="<?php echo home_url('/pricing'); ?>" class="btn-secondary">View Full Pricing</a>
            </div>
        </div>
    </div>
</section>
<?php
wp_reset_postdata();
endif;
?>

<!-- Testimonials -->
<?php
$testimonials = get_testimonials(3);
if ($testimonials->have_posts()) :
?>
<section class="bg-gray-50 py-20">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-5xl font-bold text-gray-900 mb-4">
                    Loved by thousands of merchants
                </h2>
                <p class="text-xl text-gray-600">
                    See what our customers have to say about their success
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php while ($testimonials->have_posts()) : $testimonials->the_post(); ?>
                <div class="bg-white rounded-lg p-8 feature-card border border-gray-200">
                    <div class="mb-6">
                        <div class="flex text-yellow-400 mb-4">
                            <?php for ($i = 0; $i < 5; $i++) : ?>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                            <?php endfor; ?>
                        </div>
                        <blockquote class="text-gray-700 mb-4">
                            "<?php the_content(); ?>"
                        </blockquote>
                    </div>
                    
                    <div class="flex items-center">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="mr-4">
                                <?php the_post_thumbnail('thumbnail', array('class' => 'w-12 h-12 rounded-full object-cover')); ?>
                            </div>
                        <?php endif; ?>
                        <div>
                            <div class="font-semibold text-gray-900"><?php the_title(); ?></div>
                            <div class="text-gray-600 text-sm"><?php the_excerpt(); ?></div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>
<?php
wp_reset_postdata();
endif;
?>

<!-- CTA Section -->
<section class="hero-gradient text-white py-20">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl lg:text-5xl font-bold mb-6">
                Ready to launch your store?
            </h2>
            <p class="text-xl mb-8 opacity-90">
                Start free today—no credit card required. Join thousands of successful merchants.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="<?php echo get_theme_mod('cta_primary_url', '#'); ?>" class="btn-primary text-lg px-8 py-4 bg-white text-purple-600 hover:bg-gray-100">
                    <?php echo get_theme_mod('cta_primary_text', 'Start Free Trial'); ?>
                </a>
                <a href="<?php echo home_url('/contact'); ?>" class="btn-secondary text-lg px-8 py-4 border-white text-white hover:bg-white hover:text-purple-600">
                    Book a Demo
                </a>
            </div>
        </div>
    </div>
</section>
