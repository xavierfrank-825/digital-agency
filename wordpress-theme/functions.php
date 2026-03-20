<?php
/**
 * Digital Agency Theme Functions
 * 
 * SEO Recommendation: We highly recommend installing the 'Yoast SEO' 
 * or 'Rank Math' plugin from the WordPress Dashboard to optimize 
 * your agency's search presence.
 */

function digital_agency_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'digital-agency' ),
        'footer'  => __( 'Footer Menu', 'digital-agency' ),
    ) );
}
add_action( 'after_setup_theme', 'digital_agency_setup' );

/**
 * Handle Contact Form Submission
 */
function handle_contact_form_submission() {
    // Verify nonce
    if ( ! isset( $_POST['contact_form_nonce_field'] ) || ! wp_verify_nonce( $_POST['contact_form_nonce_field'], 'contact_form_nonce' ) ) {
        wp_die( 'Security check failed' );
    }

    // Sanitize input data
    $name    = sanitize_text_field( $_POST['contact_name'] );
    $email   = sanitize_email( $_POST['contact_email'] );
    $subject = sanitize_text_field( $_POST['contact_subject'] );
    $message = sanitize_textarea_field( $_POST['contact_message'] );

    // In a real scenario, you would use wp_mail() here:
    // $to = 'abiramvr9@gmail.com';
    // $body = "Name: $name \nEmail: $email \nSubject: $subject \n\nMessage: \n$message";
    // wp_mail( $to, "New Contact Form Submission: $subject", $body );

    // Redirect back with success message
    wp_redirect( add_query_arg( 'contact_success', '1', home_url( '/contact-us' ) ) );
    exit;
}
add_action( 'admin_post_submit_contact_form', 'handle_contact_form_submission' );
add_action( 'admin_post_nopriv_submit_contact_form', 'handle_contact_form_submission' );

function digital_agency_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Blog Sidebar', 'digital-agency' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here.', 'digital-agency' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s mb-12">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title text-xl font-black mb-6 pb-2 border-b-2 border-indigo-600 inline-block">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'digital_agency_widgets_init' );

function digital_agency_scripts() {
    wp_enqueue_style( 'digital-agency-style', get_stylesheet_uri() );
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap', array(), null );
    wp_enqueue_script( 'tailwind', 'https://cdn.tailwindcss.com', array(), null, false );
}
add_action( 'wp_enqueue_scripts', 'digital_agency_scripts' );
