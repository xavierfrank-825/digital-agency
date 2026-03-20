<?php get_header(); ?>

<main id="primary" class="site-main pt-32 pb-20">
    <div class="max-w-7xl mx-auto px-6">
        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header mb-12">
                    <?php the_title( '<h1 class="text-4xl md:text-6xl font-black text-slate-900 mb-6 tracking-tight">', '</h1>' ); ?>
                    <div class="w-20 h-1.5 bg-indigo-600 rounded-full"></div>
                </header>

                <div class="entry-content prose prose-lg prose-indigo max-w-none text-slate-600 leading-relaxed">
                    <?php
                    the_content();
                    ?>
                </div>
            </article>
            <?php
        endwhile;
        ?>
    </div>
</main>

<?php get_footer(); ?>
