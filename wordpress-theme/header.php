<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-white text-slate-900 selection:bg-indigo-100 selection:text-indigo-900'); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <header class="fixed w-full z-50 bg-white/80 backdrop-blur-xl border-b border-slate-100">
        <nav class="max-w-7xl mx-auto px-6 py-5 flex justify-between items-center">
            <div class="logo">
                <?php
                if ( has_custom_logo() ) {
                    the_custom_logo();
                } else {
                    echo '<a href="' . esc_url( home_url( '/' ) ) . '" class="text-2xl font-black tracking-tighter text-slate-900">DIGITAL<span class="text-indigo-600">AGENCY</span></a>';
                }
                ?>
            </div>
            
            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center gap-10">
                <div class="flex gap-10 font-black text-[10px] uppercase tracking-[0.2em] text-slate-400">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-indigo-600">Home</a>
                    <a href="<?php echo is_front_page() ? '#services' : esc_url( home_url( '/#services' ) ); ?>" class="hover:text-indigo-600 transition-colors">Expertise</a>
                    <a href="<?php echo is_front_page() ? '#portfolio' : esc_url( home_url( '/#portfolio' ) ); ?>" class="hover:text-indigo-600 transition-colors">Portfolio</a>
                    <a href="<?php echo is_front_page() ? '#process' : esc_url( home_url( '/#process' ) ); ?>" class="hover:text-indigo-600 transition-colors">Process</a>
                    <a href="<?php echo is_front_page() ? '#testimonials' : esc_url( home_url( '/#testimonials' ) ); ?>" class="hover:text-indigo-600 transition-colors">Partners</a>
                    <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="hover:text-indigo-600 transition-colors">Insights</a>
                    <a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="hover:text-indigo-600 transition-colors">Contact</a>
                </div>
            </div>

            <!-- Mobile Menu Toggle -->
            <button id="menu-toggle" class="lg:hidden w-10 h-10 flex flex-col justify-center gap-1.5 items-end group z-50">
                <span class="w-8 h-0.5 bg-slate-950 rounded-full group-hover:w-10 transition-all origin-right" id="line-1"></span>
                <span class="w-10 h-0.5 bg-slate-950 rounded-full" id="line-2"></span>
                <span class="w-6 h-0.5 bg-slate-950 rounded-full group-hover:w-10 transition-all origin-right" id="line-3"></span>
            </button>

            <!-- Mobile Menu Overlay -->
            <div id="mobile-menu" class="fixed inset-0 bg-white z-40 translate-x-full transition-transform duration-500 flex flex-col items-center justify-center gap-8 lg:hidden">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-4xl font-black text-slate-950 hover:text-indigo-600 transition-colors">Home</a>
                <a href="<?php echo is_front_page() ? '#services' : esc_url( home_url( '/#services' ) ); ?>" class="text-4xl font-black text-slate-950 hover:text-indigo-600 transition-colors">Expertise</a>
                <a href="<?php echo is_front_page() ? '#portfolio' : esc_url( home_url( '/#portfolio' ) ); ?>" class="text-4xl font-black text-slate-950 hover:text-indigo-600 transition-colors">Portfolio</a>
                <a href="<?php echo is_front_page() ? '#process' : esc_url( home_url( '/#process' ) ); ?>" class="text-4xl font-black text-slate-950 hover:text-indigo-600 transition-colors">Process</a>
                <a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="text-4xl font-black text-slate-950 hover:text-indigo-600 transition-colors">Contact</a>
            </div>
        </nav>
    </header>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.getElementById('menu-toggle');
            const mobileMenu = document.getElementById('mobile-menu');
            const line1 = document.getElementById('line-1');
            const line2 = document.getElementById('line-2');
            const line3 = document.getElementById('line-3');
            let isOpen = false;

            menuToggle.addEventListener('click', () => {
                isOpen = !isOpen;
                if (isOpen) {
                    mobileMenu.classList.remove('translate-x-full');
                    line1.style.transform = 'rotate(-45deg) translate(-2px, 6px)';
                    line2.style.opacity = '0';
                    line3.style.transform = 'rotate(45deg) translate(-2px, -6px)';
                } else {
                    mobileMenu.classList.add('translate-x-full');
                    line1.style.transform = 'none';
                    line2.style.opacity = '1';
                    line3.style.transform = 'none';
                }
            });

            // Close menu on link click
            const mobileLinks = mobileMenu.querySelectorAll('a');
            mobileLinks.forEach(link => {
                link.addEventListener('click', () => {
                    isOpen = false;
                    mobileMenu.classList.add('translate-x-full');
                    line1.style.transform = 'none';
                    line2.style.opacity = '1';
                    line3.style.transform = 'none';
                });
            });
        });
    </script>
