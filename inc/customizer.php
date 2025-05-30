<?php
/**
 * Theme customizer options
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Add customizer options
 */
function yoursite_customize_register($wp_customize) {
    
    // Hero section
    $wp_customize->add_section('hero_section', array(
        'title' => __('Hero Section', 'yoursite'),
        'priority' => 30,
    ));
    
    $wp_customize->add_setting('hero_title', array(
        'default' => __('Build Your Online Store in Minutes', 'yoursite'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control('hero_title', array(
        'label' => __('Hero Title', 'yoursite'),
        'section' => 'hero_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('hero_subtitle', array(
        'default' => __('No code. No hassle. Just launch and sell.', 'yoursite'),
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control('hero_subtitle', array(
        'label' => __('Hero Subtitle', 'yoursite'),
        'section' => 'hero_section',
        'type' => 'textarea',
    ));
    
    // CTA Buttons
    $wp_customize->add_setting('cta_primary_text', array(
        'default' => __('Start Free Trial', 'yoursite'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control('cta_primary_text', array(
        'label' => __('Primary CTA Text', 'yoursite'),
        'section' => 'hero_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('cta_primary_url', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control('cta_primary_url', array(
        'label' => __('Primary CTA URL', 'yoursite'),
        'section' => 'hero_section',
        'type' => 'url',
    ));
    
    $wp_customize->add_setting('cta_secondary_text', array(
        'default' => __('View Demo', 'yoursite'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control('cta_secondary_text', array(
        'label' => __('Secondary CTA Text', 'yoursite'),
        'section' => 'hero_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('cta_secondary_url', array(
        'default' => '#demo',
        'sanitize_callback' => 'esc_url_raw',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control('cta_secondary_url', array(
        'label' => __('Secondary CTA URL', 'yoursite'),
        'section' => 'hero_section',
        'type' => 'url',
    ));

    // Header Section
    $wp_customize->add_section('header_section', array(
        'title' => __('Header Settings', 'yoursite'),
        'priority' => 25,
    ));
    
    // Login Button
    $wp_customize->add_setting('header_login_text', array(
        'default' => __('Login', 'yoursite'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control('header_login_text', array(
        'label' => __('Login Button Text', 'yoursite'),
        'section' => 'header_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('header_login_url', array(
        'default' => '/login',
        'sanitize_callback' => 'esc_url_raw',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control('header_login_url', array(
        'label' => __('Login Button URL', 'yoursite'),
        'section' => 'header_section',
        'type' => 'url',
    ));
    
    // CTA Button
    $wp_customize->add_setting('header_cta_text', array(
        'default' => __('Start Free Trial', 'yoursite'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control('header_cta_text', array(
        'label' => __('Header CTA Button Text', 'yoursite'),
        'section' => 'header_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('header_cta_url', array(
        'default' => '/signup',
        'sanitize_callback' => 'esc_url_raw',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control('header_cta_url', array(
        'label' => __('Header CTA Button URL', 'yoursite'),
        'section' => 'header_section',
        'type' => 'url',
    ));
    
    // Company Information Section
    $wp_customize->add_section('company_info', array(
        'title' => __('Company Information', 'yoursite'),
        'priority' => 35,
    ));
    
    $wp_customize->add_setting('company_address', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control('company_address', array(
        'label' => __('Company Address', 'yoursite'),
        'section' => 'company_info',
        'type' => 'textarea',
    ));
    
    $wp_customize->add_setting('company_phone', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control('company_phone', array(
        'label' => __('Company Phone', 'yoursite'),
        'section' => 'company_info',
        'type' => 'tel',
    ));
    
    $wp_customize->add_setting('company_email', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_email',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control('company_email', array(
        'label' => __('Company Email', 'yoursite'),
        'section' => 'company_info',
        'type' => 'email',
    ));
    
    // Social Media Section
    $wp_customize->add_section('social_media', array(
        'title' => __('Social Media Links', 'yoursite'),
        'priority' => 40,
    ));
    
    $social_platforms = array(
        'facebook' => __('Facebook', 'yoursite'),
        'twitter' => __('Twitter', 'yoursite'),
        'linkedin' => __('LinkedIn', 'yoursite'),
        'instagram' => __('Instagram', 'yoursite'),
        'youtube' => __('YouTube', 'yoursite'),
        'github' => __('GitHub', 'yoursite'),
    );
    
    foreach ($social_platforms as $platform => $label) {
        $wp_customize->add_setting('social_' . $platform, array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
            'transport' => 'refresh',
        ));
        
        $wp_customize->add_control('social_' . $platform, array(
            'label' => sprintf(__('%s URL', 'yoursite'), $label),
            'section' => 'social_media',
            'type' => 'url',
        ));
    }
    
    // Footer Section
    $wp_customize->add_section('footer_section', array(
        'title' => __('Footer Settings', 'yoursite'),
        'priority' => 45,
    ));
    
    $wp_customize->add_setting('footer_text', array(
        'default' => sprintf(__('© %s YourSite.biz. All rights reserved.', 'yoursite'), date('Y')),
        'sanitize_callback' => 'wp_kses_post',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control('footer_text', array(
        'label' => __('Footer Copyright Text', 'yoursite'),
        'section' => 'footer_section',
        'type' => 'textarea',
    ));
    
    $wp_customize->add_setting('show_footer_newsletter', array(
        'default' => true,
        'sanitize_callback' => 'yoursite_sanitize_checkbox',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control('show_footer_newsletter', array(
        'label' => __('Show Newsletter Signup in Footer', 'yoursite'),
        'section' => 'footer_section',
        'type' => 'checkbox',
    ));
    
    // Colors Section (extend existing colors)
    $wp_customize->add_setting('primary_color', array(
        'default' => '#667eea',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'primary_color', array(
        'label' => __('Primary Color', 'yoursite'),
        'section' => 'colors',
        'settings' => 'primary_color',
    )));
    
    $wp_customize->add_setting('secondary_color', array(
        'default' => '#764ba2',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'secondary_color', array(
        'label' => __('Secondary Color', 'yoursite'),
        'section' => 'colors',
        'settings' => 'secondary_color',
    )));
    
    // Typography Section
    $wp_customize->add_section('typography', array(
        'title' => __('Typography', 'yoursite'),
        'priority' => 50,
    ));
    
    $wp_customize->add_setting('body_font_family', array(
        'default' => 'Inter',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control('body_font_family', array(
        'label' => __('Body Font Family', 'yoursite'),
        'section' => 'typography',
        'type' => 'select',
        'choices' => array(
            'Inter' => 'Inter',
            'Roboto' => 'Roboto',
            'Open Sans' => 'Open Sans',
            'Lato' => 'Lato',
            'Montserrat' => 'Montserrat',
            'Poppins' => 'Poppins',
        ),
    ));
    
    $wp_customize->add_setting('heading_font_family', array(
        'default' => 'Inter',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control('heading_font_family', array(
        'label' => __('Heading Font Family', 'yoursite'),
        'section' => 'typography',
        'type' => 'select',
        'choices' => array(
            'Inter' => 'Inter',
            'Roboto' => 'Roboto',
            'Open Sans' => 'Open Sans',
            'Lato' => 'Lato',
            'Montserrat' => 'Montserrat',
            'Poppins' => 'Poppins',
        ),
    ));
}
add_action('customize_register', 'yoursite_customize_register');

/**
 * Sanitize checkbox
 */
function yoursite_sanitize_checkbox($checked) {
    return ((isset($checked) && true == $checked) ? true : false);
}

/**
 * Output custom CSS based on customizer settings
 */
function yoursite_customizer_css() {
    $primary_color = get_theme_mod('primary_color', '#667eea');
    $secondary_color = get_theme_mod('secondary_color', '#764ba2');
    $body_font = get_theme_mod('body_font_family', 'Inter');
    $heading_font = get_theme_mod('heading_font_family', 'Inter');
    
    if ($primary_color !== '#667eea' || $secondary_color !== '#764ba2' || $body_font !== 'Inter' || $heading_font !== 'Inter') {
        ?>
        <style type="text/css" id="yoursite-customizer-css">
        <?php if ($body_font !== 'Inter') : ?>
        body {
            font-family: '<?php echo esc_html($body_font); ?>', sans-serif;
        }
        <?php endif; ?>
        
        <?php if ($heading_font !== 'Inter') : ?>
        h1, h2, h3, h4, h5, h6 {
            font-family: '<?php echo esc_html($heading_font); ?>', sans-serif;
        }
        <?php endif; ?>
        
        <?php if ($primary_color !== '#667eea' || $secondary_color !== '#764ba2') : ?>
        .btn-primary,
        .hero-gradient {
            background: linear-gradient(135deg, <?php echo esc_html($primary_color); ?> 0%, <?php echo esc_html($secondary_color); ?> 100%) !important;
        }
        
        .text-primary {
            color: <?php echo esc_html($primary_color); ?> !important;
        }
        
        .bg-primary {
            background-color: <?php echo esc_html($primary_color); ?> !important;
        }
        
        .border-primary {
            border-color: <?php echo esc_html($primary_color); ?> !important;
        }
        
        .btn-secondary:hover {
            border-color: <?php echo esc_html($primary_color); ?> !important;
            color: <?php echo esc_html($primary_color); ?> !important;
        }
        
        .hero-gradient .btn-primary {
            color: <?php echo esc_html($secondary_color); ?> !important;
        }
        <?php endif; ?>
        </style>
        <?php
    }
}
add_action('wp_head', 'yoursite_customizer_css');