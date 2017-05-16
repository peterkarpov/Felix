<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package felix
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php
        if (is_single()) :
            the_title('<h1 class="entry-title">', '</h1>');
        else :
            the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
        endif;

        if ('post' === get_post_type()) : ?>
            <div class="entry-meta">
                <span><?php the_time('j F Y'); ?> by </span>
                <?php the_author(); ?>
                <span> | </span>
                <span class="comments-link"><?php comments_popup_link(__('No comments'), __('1 Comment'), __('% Comments')); ?></span>
            </div><!-- .entry-meta -->
            <?php
        endif; ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php the_content(sprintf(
        /* translators: %s: Name of current post. */
            wp_kses(__('Continue reading %s ', 'felix'), array('span' => array('class' => array()))),
            the_title('<span class="screen-reader-text">"', '"</span>', false)
        ));

        wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'felix'),
            'after' => '</div>',
        )); ?>

    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <!--?php felix_entry_footer(); ?-->
        Posted in <?php the_category(', '); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-## -->
