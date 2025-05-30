<?php
/**
 * Theme activation hooks and setup
 */

if (!defined('ABSPATH')) {
    exit;
}
/**
 * Create demo case studies
 * Add this function to your inc/theme-activation.php file
 */

function yoursite_create_demo_case_studies() {
    // Check if case studies already exist
    $existing_case_studies = get_posts(array(
        'post_type' => 'case_studies',
        'numberposts' => 1
    ));
    
    if (!empty($existing_case_studies)) {
        return; // Already created
    }
    
    // Create case study categories first
    yoursite_create_case_study_categories();
    
    // Get category IDs
    $ecommerce_cat = get_term_by('slug', 'ecommerce', 'case_study_industry');
    $healthcare_cat = get_term_by('slug', 'healthcare', 'case_study_industry');
    $fintech_cat = get_term_by('slug', 'fintech', 'case_study_industry');
    $education_cat = get_term_by('slug', 'education', 'case_study_industry');
    
    $web_dev_service = get_term_by('slug', 'web-development', 'case_study_service');
    $marketing_service = get_term_by('slug', 'digital-marketing', 'case_study_service');
    $consulting_service = get_term_by('slug', 'consulting', 'case_study_service');
    
    $case_studies_data = array(
        array(
            'title' => 'Fashion Retailer Triples Online Sales in 6 Months',
            'content' => '<p>StyleHub, a premium fashion retailer, was struggling with an outdated e-commerce platform that couldn\'t handle their growing inventory and customer base. Their conversion rates were below industry standards, and they were losing customers to competitors with better online experiences.</p>

<p>We partnered with StyleHub to completely redesign their online presence, implementing a modern, mobile-first e-commerce platform with advanced personalization features and streamlined checkout processes.</p>

<h3>Key Improvements Made:</h3>
<ul>
<li>Complete platform migration to a scalable solution</li>
<li>Implementation of AI-powered product recommendations</li>
<li>Mobile-optimized design with improved UX/UI</li>
<li>Advanced inventory management system</li>
<li>Integrated customer loyalty program</li>
<li>Performance optimization for faster load times</li>
</ul>

<p>The results exceeded expectations, with StyleHub seeing immediate improvements in both user experience and business metrics. The new platform not only solved their immediate challenges but also positioned them for continued growth in the competitive fashion market.</p>',
            'excerpt' => 'How StyleHub transformed their outdated e-commerce platform and achieved a 200% increase in online revenue through strategic redesign and optimization.',
            'industry' => $ecommerce_cat ? $ecommerce_cat->term_id : null,
            'service' => $web_dev_service ? $web_dev_service->term_id : null,
            'meta' => array(
                '_case_study_client' => 'StyleHub Fashion',
                '_case_study_industry_text' => 'Fashion & Retail',
                '_case_study_website' => 'https://stylehub-demo.com',
                '_case_study_duration' => '6 months',
                '_case_study_technologies' => 'WooCommerce, React, Progressive Web App, AI Recommendations, Analytics',
                '_case_study_challenge' => 'StyleHub was losing customers due to their slow, outdated website that provided a poor mobile experience. Their conversion rate was 40% below industry average, and they couldn\'t effectively manage their growing product catalog.',
                '_case_study_solution' => 'We built a completely new e-commerce platform using modern technologies, focusing on mobile-first design, personalized shopping experiences, and seamless checkout processes. We also integrated advanced analytics and inventory management systems.',
                '_case_study_results' => 'Within 6 months, StyleHub saw a 200% increase in online sales, 85% improvement in mobile conversion rates, and 60% reduction in cart abandonment. Customer satisfaction scores increased by 45%, and average order value grew by 35%.',
                '_case_study_metric_1_label' => 'Sales Increase',
                '_case_study_metric_1_value' => '200%',
                '_case_study_metric_2_label' => 'Mobile Conversion',
                '_case_study_metric_2_value' => '+85%',
                '_case_study_metric_3_label' => 'Cart Abandonment',
                '_case_study_metric_3_value' => '-60%',
                '_case_study_testimonial' => 'The transformation has been incredible. Our new platform not only looks amazing but performs exceptionally well. Sales have tripled, and our customers love the new shopping experience.',
                '_case_study_testimonial_author' => 'Sarah Mitchell, CEO of StyleHub Fashion',
                '_case_study_featured' => '1'
            )
        ),
        array(
            'title' => 'Healthcare Platform Reduces Patient Wait Times by 70%',
            'content' => '<p>MedConnect, a healthcare technology company, needed to streamline their patient management system to reduce wait times and improve patient satisfaction. Their existing system was fragmented and inefficient, leading to poor patient experiences and operational challenges.</p>

<p>We developed a comprehensive digital health platform that integrated appointment scheduling, patient records, and telemedicine capabilities into a single, user-friendly interface.</p>

<h3>Solution Components:</h3>
<ul>
<li>Integrated patient management system</li>
<li>Real-time appointment scheduling</li>
<li>Telemedicine platform integration</li>
<li>Automated patient notifications</li>
<li>Analytics dashboard for healthcare providers</li>
<li>HIPAA-compliant security measures</li>
</ul>

<p>The new platform transformed how MedConnect operates, creating efficiencies that benefit both healthcare providers and patients while maintaining the highest standards of data security and compliance.</p>',
            'excerpt' => 'How MedConnect streamlined their patient management system and dramatically improved operational efficiency while maintaining HIPAA compliance.',
            'industry' => $healthcare_cat ? $healthcare_cat->term_id : null,
            'service' => $web_dev_service ? $web_dev_service->term_id : null,
            'meta' => array(
                '_case_study_client' => 'MedConnect Healthcare',
                '_case_study_industry_text' => 'Healthcare Technology',
                '_case_study_website' => 'https://medconnect-demo.com',
                '_case_study_duration' => '8 months',
                '_case_study_technologies' => 'HIPAA-compliant cloud infrastructure, React Native, Node.js, PostgreSQL, WebRTC',
                '_case_study_challenge' => 'MedConnect struggled with a fragmented system that created long patient wait times, scheduling conflicts, and poor user experience. They needed a comprehensive solution that would streamline operations while maintaining strict healthcare compliance.',
                '_case_study_solution' => 'We built an integrated healthcare platform that unified patient management, scheduling, and telemedicine capabilities. The solution included automated workflows, real-time notifications, and comprehensive analytics while ensuring full HIPAA compliance.',
                '_case_study_results' => 'Patient wait times decreased by 70%, appointment no-shows reduced by 45%, and patient satisfaction scores improved by 60%. The platform also reduced administrative workload by 50% and increased overall clinic efficiency by 40%.',
                '_case_study_metric_1_label' => 'Wait Time Reduction',
                '_case_study_metric_1_value' => '70%',
                '_case_study_metric_2_label' => 'Patient Satisfaction',
                '_case_study_metric_2_value' => '+60%',
                '_case_study_metric_3_label' => 'Admin Efficiency',
                '_case_study_metric_3_value' => '+50%',
                '_case_study_testimonial' => 'This platform has revolutionized how we serve our patients. The efficiency gains are remarkable, and our patient satisfaction scores have never been higher.',
                '_case_study_testimonial_author' => 'Dr. Michael Chen, Chief Medical Officer at MedConnect',
                '_case_study_featured' => '1'
            )
        ),
        array(
            'title' => 'FinTech Startup Scales to 1M Users in 18 Months',
            'content' => '<p>PayFlow, an innovative fintech startup, needed to build a secure, scalable platform for digital payments and financial services. They required enterprise-level security and performance while maintaining the agility to compete with established financial institutions.</p>

<p>We designed and developed a comprehensive fintech platform that handles millions of transactions while providing seamless user experiences across web and mobile applications.</p>

<h3>Technical Achievements:</h3>
<ul>
<li>Bank-grade security implementation</li>
<li>Real-time transaction processing</li>
<li>Multi-currency support</li>
<li>Regulatory compliance automation</li>
<li>Advanced fraud detection</li>
<li>Scalable microservices architecture</li>
</ul>

<p>The platform successfully handled rapid user growth while maintaining 99.9% uptime and meeting all regulatory requirements across multiple jurisdictions.</p>',
            'excerpt' => 'How PayFlow built a secure, scalable fintech platform that attracted over 1 million users while maintaining bank-grade security and compliance.',
            'industry' => $fintech_cat ? $fintech_cat->term_id : null,
            'service' => $web_dev_service ? $web_dev_service->term_id : null,
            'meta' => array(
                '_case_study_client' => 'PayFlow Financial',
                '_case_study_industry_text' => 'Financial Technology',
                '_case_study_website' => 'https://payflow-demo.com',
                '_case_study_duration' => '18 months',
                '_case_study_technologies' => 'Microservices, Kubernetes, React, Node.js, PostgreSQL, Redis, AWS',
                '_case_study_challenge' => 'PayFlow needed to build a fintech platform from scratch that could compete with established players while ensuring bank-grade security, regulatory compliance, and the ability to scale rapidly as they acquired users.',
                '_case_study_solution' => 'We architected a secure, scalable platform using microservices and cloud-native technologies. The solution included real-time payment processing, automated compliance monitoring, advanced fraud detection, and a user-friendly interface across all devices.',
                '_case_study_results' => 'PayFlow successfully onboarded over 1 million users in 18 months, processed $500M+ in transactions, maintained 99.9% uptime, and achieved full regulatory compliance in 15 countries. They also raised $50M in Series B funding.',
                '_case_study_metric_1_label' => 'User Growth',
                '_case_study_metric_1_value' => '1M+',
                '_case_study_metric_2_label' => 'Transaction Volume',
                '_case_study_metric_2_value' => '$500M+',
                '_case_study_metric_3_label' => 'Platform Uptime',
                '_case_study_metric_3_value' => '99.9%',
                '_case_study_testimonial' => 'The platform they built for us has been instrumental in our rapid growth. The architecture scales beautifully, and the security features give both us and our customers complete confidence.',
                '_case_study_testimonial_author' => 'Jennifer Rodriguez, CTO of PayFlow Financial',
                '_case_study_featured' => '1'
            )
        ),
        array(
            'title' => 'EdTech Platform Increases Student Engagement by 300%',
            'content' => '<p>LearnSpace, an educational technology company, wanted to create an interactive learning platform that would engage students and improve learning outcomes. Their existing platform had low engagement rates and limited interactive features.</p>

<p>We developed a modern, gamified learning platform with interactive content, progress tracking, and social learning features that transformed the educational experience.</p>

<h3>Platform Features:</h3>
<ul>
<li>Interactive learning modules</li>
<li>Gamification and achievement systems</li>
<li>Real-time progress tracking</li>
<li>Collaborative learning tools</li>
<li>AI-powered personalized learning paths</li>
<li>Mobile-first responsive design</li>
</ul>

<p>The new platform significantly improved student engagement and learning outcomes while providing educators with powerful tools to track progress and customize curricula.</p>',
            'excerpt' => 'How LearnSpace transformed online education with an interactive, gamified platform that tripled student engagement and improved learning outcomes.',
            'industry' => $education_cat ? $education_cat->term_id : null,
            'service' => $web_dev_service ? $web_dev_service->term_id : null,
            'meta' => array(
                '_case_study_client' => 'LearnSpace Education',
                '_case_study_industry_text' => 'Educational Technology',
                '_case_study_website' => 'https://learnspace-demo.com',
                '_case_study_duration' => '10 months',
                '_case_study_technologies' => 'React, Node.js, MongoDB, WebRTC, Machine Learning APIs, Progressive Web App',
                '_case_study_challenge' => 'LearnSpace had low student engagement rates with their existing platform. Students found the content boring and completion rates were poor. They needed a more interactive, engaging solution that would improve learning outcomes.',
                '_case_study_solution' => 'We created a gamified learning platform with interactive content, achievement systems, and social learning features. The platform uses AI to personalize learning paths and includes real-time collaboration tools for students and educators.',
                '_case_study_results' => 'Student engagement increased by 300%, course completion rates improved by 150%, and learning assessment scores rose by 40%. The platform also saw 80% higher daily active users and 90% positive feedback from educators.',
                '_case_study_metric_1_label' => 'Student Engagement',
                '_case_study_metric_1_value' => '+300%',
                '_case_study_metric_2_label' => 'Completion Rate',
                '_case_study_metric_2_value' => '+150%',
                '_case_study_metric_3_label' => 'Assessment Scores',
                '_case_study_metric_3_value' => '+40%',
                '_case_study_testimonial' => 'The engagement levels we\'re seeing are unprecedented. Students are actually excited to log in and learn, and the analytics help us understand exactly how to improve our curriculum.',
                '_case_study_testimonial_author' => 'Prof. David Thompson, Academic Director at LearnSpace',
                '_case_study_featured' => '0'
            )
        ),
        array(
            'title' => 'Manufacturing Company Automates Operations and Cuts Costs by 40%',
            'content' => '<p>TechManufacturing needed to modernize their operations to remain competitive in a rapidly evolving industry. Their manual processes were inefficient, error-prone, and costly.</p>

<p>We implemented a comprehensive digital transformation strategy that automated key processes and provided real-time visibility into operations.</p>

<h3>Automation Solutions:</h3>
<ul>
<li>Automated inventory management</li>
<li>Production planning optimization</li>
<li>Quality control automation</li>
<li>Real-time monitoring dashboards</li>
<li>Predictive maintenance systems</li>
<li>Supply chain integration</li>
</ul>

<p>The digital transformation resulted in significant cost savings, improved quality, and enhanced operational efficiency across all departments.</p>',
            'excerpt' => 'How TechManufacturing leveraged automation and digital transformation to reduce operational costs and improve efficiency.',
            'industry' => null, // No specific industry category
            'service' => $consulting_service ? $consulting_service->term_id : null,
            'meta' => array(
                '_case_study_client' => 'TechManufacturing Inc.',
                '_case_study_industry_text' => 'Manufacturing',
                '_case_study_website' => 'https://techmanufacturing-demo.com',
                '_case_study_duration' => '12 months',
                '_case_study_technologies' => 'IoT sensors, Machine Learning, Python, PostgreSQL, Power BI, REST APIs',
                '_case_study_challenge' => 'TechManufacturing relied heavily on manual processes that were slow, error-prone, and expensive. They needed to modernize operations to stay competitive while maintaining quality standards.',
                '_case_study_solution' => 'We designed an integrated automation system that streamlined inventory management, production planning, and quality control. The solution included IoT sensors, predictive analytics, and real-time dashboards for complete operational visibility.',
                '_case_study_results' => 'Operational costs decreased by 40%, production efficiency increased by 60%, and quality defects reduced by 75%. The company also achieved 99.5% on-time delivery and reduced inventory carrying costs by 30%.',
                '_case_study_metric_1_label' => 'Cost Reduction',
                '_case_study_metric_1_value' => '40%',
                '_case_study_metric_2_label' => 'Efficiency Gain',
                '_case_study_metric_2_value' => '+60%',
                '_case_study_metric_3_label' => 'Quality Improvement',
                '_case_study_metric_3_value' => '+75%',
                '_case_study_testimonial' => 'The automation has transformed our entire operation. We\'re more efficient, more profitable, and delivering better quality products than ever before.',
                '_case_study_testimonial_author' => 'Mark Stevens, Operations Director at TechManufacturing',
                '_case_study_featured' => '0'
            )
        )
    );
    
    // Create case study posts
    foreach ($case_studies_data as $case_study) {
        $post_id = wp_insert_post(array(
            'post_title' => $case_study['title'],
            'post_content' => $case_study['content'],
            'post_excerpt' => $case_study['excerpt'],
            'post_status' => 'publish',
            'post_type' => 'case_studies'
        ));
        
        if ($post_id && !is_wp_error($post_id)) {
            // Set categories
            if ($case_study['industry']) {
                wp_set_post_terms($post_id, array($case_study['industry']), 'case_study_industry');
            }
            if ($case_study['service']) {
                wp_set_post_terms($post_id, array($case_study['service']), 'case_study_service');
            }
            
            // Add meta fields
            foreach ($case_study['meta'] as $key => $value) {
                update_post_meta($post_id, $key, $value);
            }
        }
    }
}

/**
 * Create case study categories
 */
function yoursite_create_case_study_categories() {
    // Industries
    $industries = array(
        array(
            'name' => 'E-commerce',
            'slug' => 'ecommerce',
            'description' => 'Online retail and e-commerce platforms'
        ),
        array(
            'name' => 'Healthcare',
            'slug' => 'healthcare',
            'description' => 'Healthcare technology and medical platforms'
        ),
        array(
            'name' => 'Financial Technology',
            'slug' => 'fintech',
            'description' => 'Banking, payments, and financial services'
        ),
        array(
            'name' => 'Education',
            'slug' => 'education',
            'description' => 'Educational technology and learning platforms'
        ),
        array(
            'name' => 'Manufacturing',
            'slug' => 'manufacturing',
            'description' => 'Industrial and manufacturing solutions'
        ),
        array(
            'name' => 'SaaS',
            'slug' => 'saas',
            'description' => 'Software as a Service platforms'
        )
    );
    
    foreach ($industries as $industry) {
        if (!term_exists($industry['slug'], 'case_study_industry')) {
            wp_insert_term(
                $industry['name'],
                'case_study_industry',
                array(
                    'slug' => $industry['slug'],
                    'description' => $industry['description']
                )
            );
        }
    }
    
    // Services
    $services = array(
        array(
            'name' => 'Web Development',
            'slug' => 'web-development',
            'description' => 'Custom web application development'
        ),
        array(
            'name' => 'Digital Marketing',
            'slug' => 'digital-marketing',
            'description' => 'SEO, PPC, and digital marketing services'
        ),
        array(
            'name' => 'Consulting',
            'slug' => 'consulting',
            'description' => 'Strategic consulting and digital transformation'
        ),
        array(
            'name' => 'Mobile Development',
            'slug' => 'mobile-development',
            'description' => 'iOS and Android app development'
        ),
        array(
            'name' => 'UI/UX Design',
            'slug' => 'ui-ux-design',
            'description' => 'User interface and experience design'
        )
    );
    
    foreach ($services as $service) {
        if (!term_exists($service['slug'], 'case_study_service')) {
            wp_insert_term(
                $service['name'],
                'case_study_service',
                array(
                    'slug' => $service['slug'],
                    'description' => $service['description']
                )
            );
        }
    }
}

// Add case studies to the existing theme activation function
// Make sure to call this in your main theme activation function:
// yoursite_create_demo_case_studies();
/**
 * Create default integrations and categories
 */
function yoursite_create_default_integrations() {
    // First create categories
    yoursite_create_integration_categories();
    
    // Check if integrations already exist
    $existing_integrations = get_posts(array(
        'post_type' => 'integrations',
        'numberposts' => 1
    ));
    
    if (!empty($existing_integrations)) {
        return; // Already created
    }
    
    // Get category IDs
    $payment_cat = get_term_by('slug', 'payment-gateways', 'integration_category');
    $shipping_cat = get_term_by('slug', 'shipping-fulfillment', 'integration_category');
    $analytics_cat = get_term_by('slug', 'analytics-reporting', 'integration_category');
    $marketing_cat = get_term_by('slug', 'marketing', 'integration_category');
    
    $integrations_data = array(
        // Payment Gateways
        array(
            'title' => 'Nicky',
            'content' => '<h2>Cryptocurrency Payment Solutions</h2>
            <p>Nicky.me offers cutting-edge cryptocurrency payment solutions for your online store, making digital currency transactions fast, secure, and seamless for both merchants and customers.</p>
            
            <h3>Why Choose Nicky?</h3>
            <ul>
            <li><strong>Multi-Currency Support</strong> - Accept Bitcoin, Ethereum, and 50+ cryptocurrencies</li>
            <li><strong>Instant Settlements</strong> - Get paid immediately with real-time processing</li>
            <li><strong>Low Fees</strong> - Competitive rates with transparent pricing</li>
            <li><strong>Secure</strong> - Bank-level security with advanced fraud protection</li>
            <li><strong>Global Reach</strong> - Accept payments from customers worldwide</li>
            </ul>
            
            <h3>Perfect For</h3>
            <p>E-commerce stores, digital services, subscription businesses, and any merchant looking to tap into the growing cryptocurrency market.</p>',
            'excerpt' => 'Accept cryptocurrency payments with Nicky.me\'s secure and fast digital currency processing solutions.',
            'category' => $payment_cat ? $payment_cat->term_id : null,
            'meta' => array(
                '_integration_icon' => 'N',
                '_integration_color' => 'purple',
                '_integration_website' => 'https://nicky.me',
                '_integration_status' => 'available',
                '_integration_popularity' => '4.3',
                '_integration_features' => "Accept 50+ cryptocurrencies\nInstant settlements\nLow transaction fees\nAdvanced security\nGlobal availability",
                '_integration_countries' => 'Global',
                '_integration_pricing' => '1.5% per transaction'
            )
        ),
        array(
            'title' => 'Stripe',
            'content' => '<h2>The Complete Payments Platform</h2>
            <p>Stripe provides a convenient and secure way to receive payments in your store using various credit and debit cards like Visa, MasterCard, American Express, and more.</p>
            
            <h3>Key Features</h3>
            <ul>
            <li><strong>Global Payments</strong> - Accept payments from customers worldwide</li>
            <li><strong>Multiple Payment Methods</strong> - Cards, digital wallets, bank transfers</li>
            <li><strong>Advanced Security</strong> - PCI DSS Level 1 certified</li>
            <li><strong>Real-time Processing</strong> - Instant payment confirmation</li>
            <li><strong>Developer-Friendly</strong> - Comprehensive APIs and documentation</li>
            </ul>
            
            <h3>Trusted by Millions</h3>
            <p>Used by businesses of all sizes, from startups to Fortune 500 companies. Stripe processes billions of dollars annually with industry-leading reliability.</p>',
            'excerpt' => 'Accept credit cards and digital payments securely with Stripe\'s comprehensive payment platform.',
            'category' => $payment_cat ? $payment_cat->term_id : null,
            'meta' => array(
                '_integration_icon' => 'S',
                '_integration_color' => 'blue',
                '_integration_website' => 'https://stripe.com',
                '_integration_status' => 'available',
                '_integration_popularity' => '4.8',
                '_integration_features' => "Accept all major credit cards\nDigital wallets (Apple Pay, Google Pay)\nACH and bank transfers\nSubscription billing\nAdvanced fraud protection",
                '_integration_countries' => 'Global (40+ countries)',
                '_integration_pricing' => '2.9% + 30¢ per transaction'
            )
        ),
        array(
            'title' => 'PayPal',
            'content' => '<h2>Trusted Global Payment Solution</h2>
            <p>PayPal is a popular payment provider that allows you to accept payments in your online store with ease and security, trusted by millions worldwide.</p>
            
            <h3>Why PayPal?</h3>
            <ul>
            <li><strong>Buyer Protection</strong> - Enhanced security for customers</li>
            <li><strong>Quick Setup</strong> - Get started in minutes</li>
            <li><strong>Mobile Optimized</strong> - Seamless mobile checkout experience</li>
            <li><strong>PayPal Credit</strong> - Offer financing options to customers</li>
            <li><strong>Global Brand</strong> - Recognized and trusted worldwide</li>
            </ul>
            
            <h3>Payment Options</h3>
            <p>Accept PayPal payments, credit cards, debit cards, and PayPal Credit all through one integration.</p>',
            'excerpt' => 'Accept secure payments with PayPal\'s trusted global payment platform.',
            'category' => $payment_cat ? $payment_cat->term_id : null,
            'meta' => array(
                '_integration_icon' => 'PP',
                '_integration_color' => 'blue',
                '_integration_website' => 'https://paypal.com',
                '_integration_status' => 'available',
                '_integration_popularity' => '4.6',
                '_integration_features' => "PayPal account payments\nCredit and debit cards\nPayPal Credit financing\nBuyer protection\nMobile-optimized checkout",
                '_integration_countries' => 'Global (200+ countries)', 
                '_integration_pricing' => '2.9% + fixed fee per transaction'
            )
        ),
        // Add Flutterwave
        array(
            'title' => 'Flutterwave',
            'content' => '<h2>Africa\'s Leading Payment Gateway</h2>
            <p>Flutterwave is a robust payment gateway operating in multiple countries, including Nigeria, Ghana, Kenya, and the US, empowering merchants to accept payments from all over the world.</p>
            
            <h3>Pan-African Coverage</h3>
            <ul>
            <li><strong>Multi-Country Support</strong> - Nigeria, Ghana, Kenya, South Africa, and more</li>
            <li><strong>Local Payment Methods</strong> - Mobile money, bank transfers, USSD</li>
            <li><strong>Multiple Currencies</strong> - Accept payments in local currencies</li>
            <li><strong>Compliance</strong> - Fully compliant with local regulations</li>
            </ul>',
            'excerpt' => 'Accept payments across Africa and globally with Flutterwave\'s comprehensive payment solutions.',
            'category' => $payment_cat ? $payment_cat->term_id : null,
            'meta' => array(
                '_integration_icon' => 'FW',
                '_integration_color' => 'orange',
                '_integration_website' => 'https://flutterwave.com',
                '_integration_status' => 'available',
                '_integration_popularity' => '4.4',
                '_integration_features' => "Mobile money payments\nBank transfers\nUSSD payments\nMultiple currencies\nFraud protection",
                '_integration_countries' => 'Africa, US, UK',
                '_integration_pricing' => '1.4% - 3.8% per transaction'
            )
        ),
        // Shipping integrations
        array(
            'title' => 'MyParcel',
            'content' => '<h2>Streamlined Shipping Solutions</h2>
            <p>MyParcel offers comprehensive shipping and fulfillment solutions directly integrated into our platform, making it easy to manage your shipping operations.</p>
            
            <h3>Shipping Made Simple</h3>
            <ul>
            <li><strong>Multi-Carrier Support</strong> - Work with multiple shipping providers</li>
            <li><strong>Label Printing</strong> - Print shipping labels directly from your dashboard</li>
            <li><strong>Tracking Integration</strong> - Automatic tracking updates for customers</li>
            <li><strong>Rate Comparison</strong> - Compare rates across carriers</li>
            </ul>',
            'excerpt' => 'Streamline your shipping operations with MyParcel\'s integrated fulfillment solutions.',
            'category' => $shipping_cat ? $shipping_cat->term_id : null,
            'meta' => array(
                '_integration_icon' => 'MP',
                '_integration_color' => 'blue',
                '_integration_website' => 'https://myparcel.com',
                '_integration_status' => 'available',
                '_integration_popularity' => '4.2',
                '_integration_features' => "Multi-carrier shipping\nLabel printing\nTracking integration\nRate comparison\nBulk shipping",
                '_integration_countries' => 'Europe, US',
                '_integration_pricing' => 'Varies by carrier'
            )
        ),
        // Analytics
        array(
            'title' => 'Google Analytics',
            'content' => '<h2>Comprehensive Website Analytics</h2>
            <p>Google Analytics offers detailed website traffic analysis, helping you understand how visitors interact with your site, which drives better decision-making for your business.</p>
            
            <h3>Powerful Insights</h3>
            <ul>
            <li><strong>Traffic Analysis</strong> - Understand your visitor patterns</li>
            <li><strong>Conversion Tracking</strong> - Monitor your sales funnel</li>
            <li><strong>Audience Insights</strong> - Learn about your customers</li>
            <li><strong>Real-time Data</strong> - See live website activity</li>
            <li><strong>Custom Reports</strong> - Create tailored analytics views</li>
            </ul>',
            'excerpt' => 'Get detailed insights into your website performance with Google Analytics.',
            'category' => $analytics_cat ? $analytics_cat->term_id : null,
            'meta' => array(
                '_integration_icon' => 'GA',
                '_integration_color' => 'red',
                '_integration_website' => 'https://analytics.google.com',
                '_integration_status' => 'available',
                '_integration_popularity' => '4.9',
                '_integration_features' => "Traffic analysis\nConversion tracking\nAudience insights\nReal-time reporting\nCustom dashboards",
                '_integration_countries' => 'Global',
                '_integration_pricing' => 'Free'
            )
        ),
        // Marketing
        array(
            'title' => 'Meta Pixel',
            'content' => '<h2>Facebook & Instagram Marketing</h2>
            <p>Meta Pixel allows you to track customer behavior and ad performance, offering valuable insights to optimize your Facebook and Instagram marketing campaigns.</p>
            
            <h3>Advanced Tracking</h3>
            <ul>
            <li><strong>Conversion Tracking</strong> - Track purchases and key actions</li>
            <li><strong>Audience Building</strong> - Create custom audiences</li>
            <li><strong>Retargeting</strong> - Re-engage website visitors</li>
            <li><strong>Campaign Optimization</strong> - Improve ad performance</li>
            </ul>',
            'excerpt' => 'Optimize your Facebook and Instagram ads with Meta Pixel tracking.',
            'category' => $marketing_cat ? $marketing_cat->term_id : null,
            'meta' => array(
                '_integration_icon' => 'FB',
                '_integration_color' => 'blue',
                '_integration_website' => 'https://business.facebook.com',
                '_integration_status' => 'available',
                '_integration_popularity' => '4.5',
                '_integration_features' => "Conversion tracking\nCustom audiences\nRetargeting campaigns\nLookalike audiences\nCross-platform tracking",
                '_integration_countries' => 'Global',
                '_integration_pricing' => 'Free'
            )
        )
    );
    
    // Create integration posts
    foreach ($integrations_data as $integration) {
        $post_id = wp_insert_post(array(
            'post_title' => $integration['title'],
            'post_content' => $integration['content'],
            'post_excerpt' => $integration['excerpt'],
            'post_status' => 'publish',
            'post_type' => 'integrations'
        ));
        
        if ($post_id && !is_wp_error($post_id)) {
            // Set category
            if ($integration['category']) {
                wp_set_post_terms($post_id, array($integration['category']), 'integration_category');
            }
            
            // Add meta fields
            foreach ($integration['meta'] as $key => $value) {
                update_post_meta($post_id, $key, $value);
            }
        }
    }
}

/**
 * Create integration categories
 */
function yoursite_create_integration_categories() {
    $categories = array(
        array(
            'name' => 'Payment Gateways',
            'slug' => 'payment-gateways',
            'description' => 'Accept payments from customers worldwide'
        ),
        array(
            'name' => 'Shipping & Fulfillment',
            'slug' => 'shipping-fulfillment', 
            'description' => 'Manage shipping and order fulfillment'
        ),
        array(
            'name' => 'Analytics & Reporting',
            'slug' => 'analytics-reporting',
            'description' => 'Track performance and gain insights'
        ),
        array(
            'name' => 'Marketing',
            'slug' => 'marketing',
            'description' => 'Promote your business and reach customers'
        )
    );
    
    foreach ($categories as $category) {
        if (!term_exists($category['slug'], 'integration_category')) {
            wp_insert_term(
                $category['name'],
                'integration_category',
                array(
                    'slug' => $category['slug'],
                    'description' => $category['description']
                )
            );
        }
    }
}
/**
 * Theme activation hook
 */
function yoursite_theme_activation() {
    // Create default pages
    yoursite_create_default_pages();
    
    // Create default posts
    yoursite_create_default_posts();
    
    // Create integrations
    yoursite_create_default_integrations();
    // Create demo content
    yoursite_create_demo_content();
    
    // Set homepage settings
    yoursite_setup_homepage();
    
    // Clean up default content
    yoursite_remove_default_posts();
    
    // Create template parts directory
    yoursite_create_template_parts();
    
    // Flush rewrite rules
    flush_rewrite_rules();
}
add_action('after_switch_theme', 'yoursite_theme_activation');

/**
 * Create default pages
 */
function yoursite_create_default_pages() {
    $pages = array(
        'Features' => array(
            'post_title' => __('Features', 'yoursite'),
            'post_content' => __('Discover the powerful features that make our platform the perfect choice for your online store.', 'yoursite'),
            'post_status' => 'publish',
            'post_type' => 'page',
            'page_template' => 'page-features.php'
        ),
        'Pricing' => array(
            'post_title' => __('Pricing', 'yoursite'),
            'post_content' => __('Choose the perfect plan for your business. All plans include our core features with no hidden fees.', 'yoursite'),
            'post_status' => 'publish',
            'post_type' => 'page',
            'page_template' => 'page-pricing.php'
        ),
        'Templates' => array(
            'post_title' => __('Templates', 'yoursite'),
            'post_content' => __('Browse our collection of professionally designed templates to get your store up and running quickly.', 'yoursite'),
            'post_status' => 'publish',
            'post_type' => 'page',
            'page_template' => 'page-templates.php'
        ),
        'Contact' => array(
            'post_title' => __('Contact', 'yoursite'),
            'post_content' => __('Get in touch with our team. We\'re here to help you succeed with your online store.', 'yoursite'),
            'post_status' => 'publish',
            'post_type' => 'page',
            'page_template' => 'page-contact.php'
        ),
        'About' => array(
            'post_title' => __('About', 'yoursite'),
            'post_content' => __('Learn about our mission to help businesses succeed online with powerful, easy-to-use eCommerce tools.', 'yoursite'),
            'post_status' => 'publish',
            'post_type' => 'page',
            'page_template' => 'page-about.php'
        ),
        'Blog' => array(
            'post_title' => __('Blog', 'yoursite'),
            'post_content' => __('Stay updated with the latest eCommerce trends, tips, and insights from our experts.', 'yoursite'),
            'post_status' => 'publish',
            'post_type' => 'page',
            'page_template' => 'page-blog.php'
        ),
        'API' => array(
            'post_title' => __('API', 'yoursite'),
            'post_content' => __('Integrate with our powerful API to extend your store\'s functionality and connect with other services.', 'yoursite'),
            'post_status' => 'publish',
            'post_type' => 'page',
            'page_template' => 'page-api.php'
        ),
        'Integrations' => array(
            'post_title' => __('Integrations', 'yoursite'),
            'post_content' => __('Connect your store with popular tools and services to streamline your business operations.', 'yoursite'),
            'post_status' => 'publish',
            'post_type' => 'page',
            'page_template' => 'page-integrations.php'
        ),
        'Webinars' => array(
            'post_title' => __('Webinars', 'yoursite'),
            'post_content' => __('Join our expert-led webinar series and learn from industry leaders. Discover the latest trends, strategies, and best practices to grow your business.', 'yoursite'),
            'post_status' => 'publish',
            'post_type' => 'page',
            'page_template' => 'page-webinars.php'
        )
    );
    
    foreach ($pages as $page_data) {
        $existing_page = get_page_by_title($page_data['post_title']);
        if (!$existing_page) {
            $page_id = wp_insert_post($page_data);
            if ($page_id && isset($page_data['page_template'])) {
                update_post_meta($page_id, '_wp_page_template', $page_data['page_template']);
            }
        }
    }
}

/**
 * Set up homepage
 */
function yoursite_setup_homepage() {
    // Create homepage if it doesn't exist
    $homepage = get_page_by_title('Home');
    if (!$homepage) {
        $homepage_id = wp_insert_post(array(
            'post_title' => __('Home', 'yoursite'),
            'post_content' => __('Welcome to your new eCommerce platform.', 'yoursite'),
            'post_status' => 'publish',
            'post_type' => 'page'
        ));
    } else {
        $homepage_id = $homepage->ID;
    }
    
    // Set static front page
    update_option('show_on_front', 'page');
    update_option('page_on_front', $homepage_id);
    
    // Create blog page
    $blog_page = get_page_by_title('News');
    if (!$blog_page) {
        $blog_page_id = wp_insert_post(array(
            'post_title' => __('News', 'yoursite'),
            'post_content' => __('Stay updated with our latest news and insights.', 'yoursite'),
            'post_status' => 'publish',
            'post_type' => 'page'
        ));
        update_option('page_for_posts', $blog_page_id);
    }
}

/**
 * Create default posts
 */
function yoursite_create_default_posts() {
    // Check if we have any posts
    $posts = get_posts(array('numberposts' => 1));
    
    if (empty($posts)) {
        // Create sample blog posts
        $sample_posts = array(
            array(
                'post_title' => __('Welcome to Your New eCommerce Platform', 'yoursite'),
                'post_content' => __('We\'re excited to introduce you to the future of online retail. Our platform makes it easier than ever to create, manage, and grow your online store. Whether you\'re just starting out or looking to scale your existing business, we have the tools and features you need to succeed.

<h2>Getting Started</h2>

Setting up your store has never been simpler. With our intuitive drag-and-drop interface, you can have your online store up and running in minutes, not hours. Choose from our selection of professionally designed templates, customize them to match your brand, and start selling immediately.

<h2>Key Features</h2>

Our platform includes everything you need to run a successful online business:

- Mobile-responsive design that looks great on all devices
- Secure payment processing with multiple payment options
- Inventory management and order tracking
- Built-in SEO tools to help customers find you
- Analytics and reporting to track your success

<h2>Ready to Get Started?</h2>

Join thousands of successful merchants who have chosen our platform to power their online stores. Start your free trial today and see how easy it is to build and grow your business online.', 'yoursite'),
                'post_excerpt' => __('Discover how our eCommerce platform can help you build and grow your online store with ease.', 'yoursite'),
                'post_status' => 'publish',
                'post_author' => 1,
                'post_category' => array(1)
            ),
            array(
                'post_title' => __('5 Essential Tips for Online Store Success', 'yoursite'),
                'post_content' => __('Running a successful online store requires more than just great products. Here are five essential tips that will help you maximize your sales and build a loyal customer base.

<h2>1. Optimize Your Product Photos</h2>

High-quality product photos are crucial for online sales. Customers can\'t touch or try your products, so your photos need to tell the whole story. Use multiple angles, show products in use, and ensure your images are high-resolution and properly lit.

<h2>2. Write Compelling Product Descriptions</h2>

Your product descriptions should do more than just list features. Focus on benefits and how your products solve problems or improve your customers\' lives. Use sensory language and paint a picture of how the product will make them feel.

<h2>3. Streamline Your Checkout Process</h2>

A complicated checkout process is one of the biggest reasons for cart abandonment. Keep it simple with minimal form fields, multiple payment options, and clear progress indicators.

<h2>4. Provide Excellent Customer Service</h2>

Quick response times and helpful service can turn one-time buyers into loyal customers. Use live chat, provide detailed FAQ sections, and always follow up after purchases.

<h2>5. Build Trust with Social Proof</h2>

Customer reviews, testimonials, and trust badges help build confidence in your brand. Display these prominently throughout your site, especially on product pages and checkout.', 'yoursite'),
                'post_excerpt' => __('Learn the five essential strategies that successful online store owners use to maximize sales and build customer loyalty.', 'yoursite'),
                'post_status' => 'publish',
                'post_author' => 1,
                'post_category' => array(1)
            ),
            array(
                'post_title' => __('The Future of eCommerce: Trends to Watch', 'yoursite'),
                'post_content' => __('The eCommerce landscape is constantly evolving. Here are the key trends that will shape the future of online retail and how you can prepare your business for what\'s coming next.

<h2>Mobile-First Shopping</h2>

More than half of all online purchases now happen on mobile devices. If your store isn\'t optimized for mobile, you\'re missing out on a huge portion of potential sales. Ensure your site loads quickly, navigation is thumb-friendly, and checkout works seamlessly on smartphones.

<h2>Personalization at Scale</h2>

Customers expect personalized experiences. Use data and AI to recommend products, customize content, and create targeted marketing campaigns. The more relevant your store feels to each visitor, the more likely they are to make a purchase.

<h2>Sustainable Shopping</h2>

Consumers are increasingly conscious about the environmental impact of their purchases. Highlight your sustainable practices, offer eco-friendly products, and consider carbon-neutral shipping options.

<h2>Social Commerce</h2>

Social media platforms are becoming shopping destinations. Make sure your products are easily discoverable and purchasable directly through social channels like Instagram, Facebook, and TikTok.

<h2>Voice Commerce</h2>

With smart speakers becoming more common, voice-activated shopping is on the rise. Optimize your product listings for voice search and consider how customers might search for your products using natural language.', 'yoursite'),
                'post_excerpt' => __('Stay ahead of the curve with these emerging eCommerce trends that will shape the future of online retail.', 'yoursite'),
                'post_status' => 'publish',
                'post_author' => 1,
                'post_category' => array(1)
            )
        );
        
        foreach ($sample_posts as $post_data) {
            wp_insert_post($post_data);
        }
    }
}

/**
 * Create demo content
 */
function yoursite_create_demo_content() {
    yoursite_create_demo_features();
    yoursite_create_demo_testimonials();
    yoursite_create_demo_pricing();
    yoursite_create_demo_webinars();
}

/**
 * Create demo features
 */
function yoursite_create_demo_features() {
    $existing_features = get_posts(array('post_type' => 'features', 'numberposts' => 1));
    
    if (empty($existing_features)) {
        $demo_features = array(
            array(
                'title' => __('Drag & Drop Store Builder', 'yoursite'),
                'content' => __('Create your perfect online store with our intuitive drag-and-drop interface. No coding required - just drag, drop, and customize to match your brand.', 'yoursite'),
                'excerpt' => __('Build your store visually with our easy-to-use drag-and-drop interface.', 'yoursite')
            ),
            array(
                'title' => __('Mobile-First Design', 'yoursite'),
                'content' => __('All our templates are mobile-responsive and optimized for every device. Your customers will have a seamless shopping experience whether they\'re on desktop, tablet, or mobile.', 'yoursite'),
                'excerpt' => __('Responsive design that looks perfect on all devices.', 'yoursite')
            ),
            array(
                'title' => __('Secure Payment Processing', 'yoursite'),
                'content' => __('Accept payments safely with our PCI-compliant payment processing. Support for all major credit cards, PayPal, Apple Pay, and more payment methods.', 'yoursite'),
                'excerpt' => __('Secure, PCI-compliant payment processing with multiple payment options.', 'yoursite')
            ),
            array(
                'title' => __('Advanced Analytics', 'yoursite'),
                'content' => __('Track your store\'s performance with detailed analytics and reporting. Monitor sales, customer behavior, traffic sources, and conversion rates all in one dashboard.', 'yoursite'),
                'excerpt' => __('Comprehensive analytics to track your store\'s performance and growth.', 'yoursite')
            ),
            array(
                'title' => __('Inventory Management', 'yoursite'),
                'content' => __('Keep track of your products with our powerful inventory management system. Set up automatic low-stock alerts, manage variants, and sync across multiple sales channels.', 'yoursite'),
                'excerpt' => __('Powerful inventory management with automatic alerts and multi-channel sync.', 'yoursite')
            ),
            array(
                'title' => __('SEO Optimization', 'yoursite'),
                'content' => __('Built-in SEO tools help your products get found on search engines. Optimize meta tags, generate sitemaps, and improve your search rankings automatically.', 'yoursite'),
                'excerpt' => __('Built-in SEO tools to help customers find your products online.', 'yoursite')
            )
        );
        
        foreach ($demo_features as $feature_data) {
            wp_insert_post(array(
                'post_title' => $feature_data['title'],
                'post_content' => $feature_data['content'],
                'post_excerpt' => $feature_data['excerpt'],
                'post_status' => 'publish',
                'post_type' => 'features'
            ));
        }
    }
}

/**
 * Create demo testimonials
 */
function yoursite_create_demo_testimonials() {
    $existing_testimonials = get_posts(array('post_type' => 'testimonials', 'numberposts' => 1));
    
    if (empty($existing_testimonials)) {
        $demo_testimonials = array(
            array(
                'title' => 'Sarah Johnson, Fashion Boutique Owner',
                'content' => __('This platform transformed my business! I went from zero to $50K in monthly sales within 6 months. The templates are beautiful and the support team is incredibly helpful.', 'yoursite')
            ),
            array(
                'title' => 'Mike Chen, Electronics Retailer',
                'content' => __('The inventory management features alone saved me 20 hours per week. I can focus on growing my business instead of managing spreadsheets. Highly recommended!', 'yoursite')
            ),
            array(
                'title' => 'Lisa Rodriguez, Handmade Crafts',
                'content' => __('As someone who\'s not tech-savvy, I was worried about building an online store. This platform made it so easy! I had my store up and running in under an hour.', 'yoursite')
            ),
            array(
                'title' => 'David Kim, Fitness Equipment',
                'content' => __('The mobile optimization is fantastic. Over 70% of my customers shop on their phones, and the checkout process is smooth and fast. My conversion rates improved significantly.', 'yoursite')
            )
        );
        
        foreach ($demo_testimonials as $testimonial_data) {
            wp_insert_post(array(
                'post_title' => $testimonial_data['title'],
                'post_content' => $testimonial_data['content'],
                'post_status' => 'publish',
                'post_type' => 'testimonials'
            ));
        }
    }
}

/**
 * Create demo pricing plans
 */
function yoursite_create_demo_pricing() {
    $existing_pricing = get_posts(array('post_type' => 'pricing', 'numberposts' => 1));
    
    if (empty($existing_pricing)) {
        $demo_pricing = array(
            array(
                'title' => __('Starter', 'yoursite'),
                'content' => __('Perfect for new businesses just getting started with online sales.', 'yoursite'),
                'meta' => array(
                    '_pricing_price' => '19',
                    '_pricing_period' => 'month',
                    '_pricing_base_currency' => 'USD',
                    '_pricing_purchase_url' => '#',
                    '_pricing_button_text' => __('Start Free Trial', 'yoursite'),
                    '_pricing_features' => "Up to 100 products\nFree SSL certificate\nEmail support\nMobile responsive themes\nBasic analytics",
                    '_pricing_featured' => '0'
                )
            ),
            array(
                'title' => __('Professional', 'yoursite'),
                'content' => __('Ideal for growing businesses that need more advanced features.', 'yoursite'),
                'meta' => array(
                    '_pricing_price' => '49',
                    '_pricing_period' => 'month',
                    '_pricing_base_currency' => 'USD',
                    '_pricing_purchase_url' => '#',
                    '_pricing_button_text' => __('Start Free Trial', 'yoursite'),
                    '_pricing_features' => "Up to 1,000 products\nFree SSL certificate\nPriority support\nAdvanced analytics\nInventory management\nDiscount codes\nAbandoned cart recovery",
                    '_pricing_featured' => '1'
                )
            ),
            array(
                'title' => __('Enterprise', 'yoursite'),
                'content' => __('For large businesses with high volume and custom requirements.', 'yoursite'),
                'meta' => array(
                    '_pricing_price' => '149',
                    '_pricing_period' => 'month',
                    '_pricing_base_currency' => 'USD',
                    '_pricing_purchase_url' => '#',
                    '_pricing_button_text' => __('Contact Sales', 'yoursite'),
                    '_pricing_features' => "Unlimited products\nDedicated SSL certificate\n24/7 phone support\nAdvanced reporting\nMulti-channel selling\nAPI access\nCustom integrations\nDedicated account manager",
                    '_pricing_featured' => '0'
                )
            )
        );
        
        foreach ($demo_pricing as $plan_data) {
            $post_id = wp_insert_post(array(
                'post_title' => $plan_data['title'],
                'post_content' => $plan_data['content'],
                'post_status' => 'publish',
                'post_type' => 'pricing'
            ));
            
            if ($post_id) {
                foreach ($plan_data['meta'] as $key => $value) {
                    update_post_meta($post_id, $key, $value);
                }
            }
        }
    }
}

/**
 * Create demo webinars
 */
function yoursite_create_demo_webinars() {
    $existing_webinars = get_posts(array('post_type' => 'webinars', 'numberposts' => 1));
    
    if (empty($existing_webinars)) {
        $demo_webinars = array(
            array(
                'title' => __('eCommerce Success Strategies for 2025', 'yoursite'),
                'content' => __('<h2>What You\'ll Learn</h2>
<p>Join us for an in-depth exploration of the latest eCommerce trends and strategies that will help your online store thrive in 2025.</p>

<h3>Key Topics:</h3>
<ul>
<li>Mobile-first shopping experiences</li>
<li>AI-powered personalization</li>
<li>Conversion rate optimization</li>
<li>Customer retention strategies</li>
<li>Marketing automation tactics</li>
</ul>

<h3>Who Should Attend:</h3>
<ul>
<li>eCommerce store owners</li>
<li>Digital marketing managers</li>
<li>Online business consultants</li>
<li>Anyone looking to grow their online sales</li>
</ul>

<p>This comprehensive session includes live Q&A, downloadable resources, and actionable takeaways you can implement immediately.</p>', 'yoursite'),
                'excerpt' => __('Learn the latest trends and strategies that will help your online store thrive in 2025.', 'yoursite'),
                'meta' => array(
                    '_webinar_date' => date('Y-m-d', strtotime('+7 days')),
                    '_webinar_time' => '2:00 PM',
                    '_webinar_timezone' => 'EST',
                    '_webinar_duration' => '60 minutes',
                    '_webinar_speaker' => __('Sarah Johnson, eCommerce Expert', 'yoursite'),
                    '_webinar_speaker_bio' => __('Sarah has helped over 500 online stores increase their revenue by an average of 147%. She\'s the founder of eCommerce Growth Academy.', 'yoursite'),
                    '_webinar_register_url' => '#register',
                    '_webinar_price' => __('Free', 'yoursite'),
                    '_webinar_max_attendees' => '500',
                    '_webinar_status' => 'upcoming',
                    '_webinar_platform' => 'zoom'
                )
            ),
            array(
                'title' => __('Digital Marketing That Actually Works', 'yoursite'),
                'content' => __('<h2>Stop Wasting Money on Marketing</h2>
<p>Learn data-driven strategies that generate real ROI and sustainable growth for your business.</p>

<h3>What We\'ll Cover:</h3>
<ul>
<li>ROI-focused marketing strategies</li>
<li>Social media advertising that converts</li>
<li>Email marketing automation</li>
<li>Content marketing that drives sales</li>
<li>Analytics and performance tracking</li>
</ul>

<p>This 90-minute masterclass includes real case studies, live examples, and a comprehensive Q&A session.</p>', 'yoursite'),
                'excerpt' => __('Learn data-driven strategies that generate real ROI and sustainable growth.', 'yoursite'),
                'meta' => array(
                    '_webinar_date' => date('Y-m-d', strtotime('+14 days')),
                    '_webinar_time' => '3:00 PM',
                    '_webinar_timezone' => 'EST',
                    '_webinar_duration' => '90 minutes',
                    '_webinar_speaker' => __('Mike Chen, Growth Strategist', 'yoursite'),
                    '_webinar_speaker_bio' => __('Mike is a digital marketing strategist who has generated over $50M in revenue for his clients.', 'yoursite'),
                    '_webinar_register_url' => '#register',
                    '_webinar_price' => __('Free', 'yoursite'),
                    '_webinar_max_attendees' => '300',
                    '_webinar_status' => 'upcoming',
                    '_webinar_platform' => 'zoom'
                )
            )
            // Removed past webinars from demo creation
        );
        
        foreach ($demo_webinars as $webinar_data) {
            $post_id = wp_insert_post(array(
                'post_title' => $webinar_data['title'],
                'post_content' => $webinar_data['content'],
                'post_excerpt' => $webinar_data['excerpt'],
                'post_status' => 'publish',
                'post_type' => 'webinars'
            ));
            
            if ($post_id) {
                foreach ($webinar_data['meta'] as $key => $value) {
                    update_post_meta($post_id, $key, $value);
                }
            }
        }
    }
}

/**
 * Clean up WordPress default content
 */
function yoursite_remove_default_posts() {
    // Remove default post
    $default_post = get_post(1);
    if ($default_post && $default_post->post_title === 'Hello world!') {
        wp_delete_post(1, true);
    }
    
    // Remove default page
    $default_page = get_page_by_title('Sample Page');
    if ($default_page) {
        wp_delete_post($default_page->ID, true);
    }
}

/**
 * Create template-parts directory and files
 */
function yoursite_create_template_parts() {
    $template_parts_dir = get_template_directory() . '/template-parts';
    
    if (!file_exists($template_parts_dir)) {
        wp_mkdir_p($template_parts_dir);
    }
    
    $homepage_template = $template_parts_dir . '/homepage.php';
    
    if (!file_exists($homepage_template)) {
        $homepage_content = '<?php
/**
 * Template part for displaying homepage content
 */
?>
<section class="hero-gradient text-white py-20 lg:py-32">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl lg:text-6xl font-bold mb-6 leading-tight">
                <?php echo get_theme_mod("hero_title", __("Build Your Online Store in Minutes", "yoursite")); ?>
            </h1>
            <p class="text-xl lg:text-2xl mb-8 opacity-90 max-w-3xl mx-auto">
                <?php echo get_theme_mod("hero_subtitle", __("No code. No hassle. Just launch and sell.", "yoursite")); ?>
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="<?php echo get_theme_mod("cta_primary_url", "#"); ?>" class="btn-primary text-lg px-8 py-4 rounded-lg font-semibold hover-lift">
                    <?php echo get_theme_mod("cta_primary_text", __("Start Free Trial", "yoursite")); ?>
                </a>
                <a href="<?php echo get_theme_mod("cta_secondary_url", "#demo"); ?>" class="btn-secondary text-lg px-8 py-4 rounded-lg font-semibold hover-lift">
                    <?php echo get_theme_mod("cta_secondary_text", __("View Demo", "yoursite")); ?>
                </a>
            </div>
        </div>
    </div>
</section>';
        
        file_put_contents($homepage_template, $homepage_content);
    }
}