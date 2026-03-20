<?php
/**
 * The sidebar containing the main widget area
 */
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
    // Default sidebar content if no widgets are active
    ?>
    <section class="mb-12">
        <h2 class="text-xl font-black mb-6 pb-2 border-b-2 border-indigo-600 inline-block">Search</h2>
        <form role="search" method="get" class="flex gap-2" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <input type="search" class="flex-1 bg-white border border-slate-200 rounded-xl px-4 py-3 text-slate-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition-all" placeholder="Search..." value="<?php echo get_search_query(); ?>" name="s">
            <button type="submit" class="bg-indigo-600 text-white px-4 py-3 rounded-xl font-bold hover:bg-indigo-700 transition-all">
                &rarr;
            </button>
        </form>
    </section>

    <section class="mb-12">
        <h2 class="text-xl font-black mb-6 pb-2 border-b-2 border-indigo-600 inline-block">Categories</h2>
        <ul class="space-y-3">
            <?php
            $categories = get_categories();
            foreach($categories as $category) {
                echo '<li><a href="' . get_category_link($category->term_id) . '" class="flex justify-between items-center text-slate-600 hover:text-indigo-600 font-bold group transition-all">
                    <span>' . $category->name . '</span>
                    <span class="bg-slate-100 px-2 py-1 rounded-lg text-xs group-hover:bg-indigo-600 group-hover:text-white transition-all">' . $category->count . '</span>
                </a></li>';
            }
            ?>
        </ul>
    </section>

    <section class="mb-12">
        <h2 class="text-xl font-black mb-6 pb-2 border-b-2 border-indigo-600 inline-block">Popular Tags</h2>
        <div class="flex flex-wrap gap-2">
            <?php
            $tags = get_tags(array('orderby' => 'count', 'order' => 'DESC', 'number' => 10));
            foreach ($tags as $tag) {
                echo '<a href="' . get_tag_link($tag->term_id) . '" class="bg-white px-4 py-2 rounded-xl text-sm font-bold text-slate-600 border border-slate-200 hover:border-indigo-600 hover:text-indigo-600 transition-all shadow-sm">' . $tag->name . '</a>';
            }
            ?>
        </div>
    </section>

    <section class="bg-slate-900 rounded-3xl p-8 text-white relative overflow-hidden">
        <div class="relative z-10">
            <h2 class="text-2xl font-black mb-4">Need a Custom Tech Solution?</h2>
            <p class="text-slate-400 mb-6 text-sm">We help businesses build modern digital products that scale.</p>
            <a href="#Contact" class="inline-block bg-indigo-600 text-white px-6 py-3 rounded-xl font-bold hover:bg-indigo-700 transition-all text-sm">
                Get in Touch
            </a>
        </div>
        <div class="absolute top-0 right-0 w-32 h-32 bg-indigo-600/20 rounded-full -mr-16 -mt-16 blur-3xl"></div>
    </section>
    <?php
    return;
}
?>

<div id="secondary" class="widget-area">
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
</div>
