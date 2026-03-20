<?php get_header(); ?>

<main id="primary" class="site-main py-32 bg-slate-50">
    <div class="max-w-7xl mx-auto px-6">
        <header class="mb-20">
            <h1 class="text-4xl md:text-6xl font-black text-slate-900 mb-6 tracking-tight">Blog</h1>
            <p class="text-xl text-slate-500 max-w-2xl">Stay updated with the latest trends in digital transformation.</p>
            <div class="w-20 h-1.5 bg-indigo-600 mt-8 rounded-full"></div>
        </header>

        <div class="grid lg:grid-cols-3 gap-16">
            <div class="lg:col-span-2 space-y-12">
                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                        ?>
                        <article class="bg-white rounded-[2.5rem] overflow-hidden shadow-lg border border-slate-100 flex flex-col md:flex-row group hover:shadow-2xl transition-all duration-300">
                            <div class="md:w-2/5 aspect-video md:aspect-auto overflow-hidden">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail( 'medium_large', array( 'class' => 'w-full h-full object-cover group-hover:scale-110 transition-transform duration-500' ) ); ?>
                                <?php else : ?>
                                    <img src="https://picsum.photos/seed/<?php the_ID(); ?>/400/400" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="">
                                <?php endif; ?>
                            </div>
                            <div class="md:w-3/5 p-8 md:p-10">
                                <div class="flex items-center gap-4 mb-4">
                                    <span class="text-indigo-600 font-bold text-xs uppercase tracking-widest"><?php the_category(', '); ?></span>
                                    <span class="text-slate-400 text-xs"><?php echo get_the_date(); ?></span>
                                </div>
                                <h2 class="text-2xl font-black text-slate-900 mb-4 group-hover:text-indigo-600 transition-colors">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                <p class="text-slate-500 mb-6 line-clamp-2"><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></p>
                                <a href="<?php the_permalink(); ?>" class="text-indigo-600 font-bold flex items-center gap-2">Read More &rarr;</a>
                            </div>
                        </article>
                        <?php
                    endwhile;
                    
                    the_posts_pagination( array(
                        'mid_size'  => 2,
                        'prev_text' => __( '&larr; Previous', 'digital-agency' ),
                        'next_text' => __( 'Next &rarr;', 'digital-agency' ),
                        'class'     => 'flex gap-4 pt-12',
                    ) );
                    
                else :
                    echo '<p class="text-xl text-slate-500">No posts found.</p>';
                endif;
                ?>
            </div>

            <aside class="lg:col-span-1">
                <?php get_sidebar(); ?>
            </aside>
        </div>
    </div>
</main>

<?php get_footer(); ?>
