<?php get_header(); ?>

<main id="primary" class="site-main pt-48 pb-32">
    <?php
    while ( have_posts() ) :
        the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('max-w-[1200px] mx-auto px-8'); ?>>
            <header class="entry-header mb-24 text-center">
                <div class="inline-flex items-center gap-3 py-2 px-4 rounded-full bg-white/5 text-white/60 text-[10px] font-black tracking-[0.3em] uppercase mb-12 border border-white/10">
                    <?php the_category(', '); ?> — <?php echo get_the_date(); ?>
                </div>
                <?php the_title( '<h1 class="text-5xl md:text-[8rem] font-black serif italic leading-[0.9] tracking-tighter mb-16">', '</h1>' ); ?>
                
                <div class="flex items-center justify-center gap-8">
                    <div class="flex items-center gap-4 text-left">
                        <div class="w-12 h-12 rounded-full bg-white/10 overflow-hidden border border-white/10">
                            <?php echo get_avatar( get_the_author_meta( 'ID' ), 48 ); ?>
                        </div>
                        <div>
                            <div class="text-white font-black text-[10px] uppercase tracking-widest"><?php the_author(); ?></div>
                            <div class="text-white/40 text-[8px] font-bold uppercase tracking-widest mt-0.5">Contributor</div>
                        </div>
                    </div>
                    <div class="w-px h-8 bg-white/10"></div>
                    <div class="text-white/40 text-[10px] font-black uppercase tracking-widest">
                        <?php echo do_shortcode('[reading_time]'); ?> Min Read
                    </div>
                </div>
            </header>

            <?php if ( has_post_thumbnail() ) : ?>
                <div class="mb-24 rounded-[4rem] overflow-hidden border border-white/5 shadow-2xl">
                    <?php the_post_thumbnail( 'full', array( 'class' => 'w-full h-auto grayscale hover:grayscale-0 transition-all duration-1000' ) ); ?>
                </div>
            <?php endif; ?>

            <div class="entry-content prose prose-invert prose-2xl max-w-[800px] mx-auto serif italic text-white/80 leading-relaxed">
                <?php the_content(); ?>
            </div>

            <footer class="entry-footer mt-32 pt-16 border-t border-white/5">
                <div class="flex flex-col md:flex-row justify-between items-center gap-12">
                    <div class="flex gap-8">
                        <a href="#" class="text-white/40 hover:text-white transition-colors text-[10px] font-black uppercase tracking-widest">Share on Twitter</a>
                        <a href="#" class="text-white/40 hover:text-white transition-colors text-[10px] font-black uppercase tracking-widest">Share on LinkedIn</a>
                    </div>
                    <div class="flex gap-4">
                        <?php the_tags( '<span class="bg-white/5 text-white/40 px-4 py-2 rounded-full text-[10px] font-black uppercase tracking-widest border border-white/10">', '</span><span class="bg-white/5 text-white/40 px-4 py-2 rounded-full text-[10px] font-black uppercase tracking-widest border border-white/10">', '</span>' ); ?>
                    </div>
                </div>
            </footer>
        </article>

        <!-- Related Posts -->
        <section class="mt-48 py-32 bg-white text-black rounded-t-[5rem]">
            <div class="max-w-[1800px] mx-auto px-8">
                <h3 class="text-5xl font-black serif italic mb-24">KEEP READING.</h3>
                <div class="grid md:grid-cols-3 gap-16">
                    <?php
                    $related_query = new WP_Query( array( 'posts_per_page' => 3, 'post__not_in' => array( get_the_ID() ) ) );
                    if ( $related_query->have_posts() ) :
                        while ( $related_query->have_posts() ) : $related_query->the_post();
                            ?>
                            <article class="group">
                                <div class="aspect-[4/5] rounded-[2.5rem] overflow-hidden mb-10 border border-black/5 relative">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <?php the_post_thumbnail( 'full', array( 'class' => 'w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700' ) ); ?>
                                    <?php endif; ?>
                                </div>
                                <h4 class="text-3xl font-black serif italic mb-6 leading-tight group-hover:text-black/60 transition-colors">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h4>
                            </article>
                            <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </div>
        </section>
        <?php
    endwhile;
    ?>
</main>

<?php get_footer(); ?>
