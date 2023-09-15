<?php get_header(); ?>

<?php get_template_part('template-parts/sub-main-visual') ?>

<?php get_template_part('template-parts/breadcrumbs') ?>

<div class="l-two-column">
  <div class="l-inner">
    <div class="l-two-column__inner">
      <main class="p-news-post l-two-column__main">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : ?>
            <?php the_post(); ?>
            <!-- p-news-post -->
            <article class="p-news-post__main">
              <div class="p-news-post__meta c-news-meta">
                <?php $cat = get_the_category();
                if ($cat[0]) : ?>
                  <div class="p-news-post__label c-news-meta__label">
                    <a href="<?php echo get_category_link($cat[0]->term_id) ?>" class="p-news-post__cat c-news-meta__cat"><?php echo $cat[0]->cat_name; ?></a>
                  </div>
                <?php endif; ?>
                <time class="c-news-meta__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d') ?></time>
              </div>
              <h1 class="p-news-post__title">
                <?php the_title(); ?>
              </h1>
              <div class="p-news-post__body">
                <div class="p-news-post__thumbnail">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(); ?>
                  <?php else : ?>
                    <img src="<?php echo get_template_directory_uri() ?>/dist/img/noimg.png" alt="no image" />
                  <?php endif; ?>
                </div>
                <!-- /.p-news-post__thumbnail -->
                <?php the_content(); ?>
                <?php
                wp_link_pages(
                  array(
                    'before' => '<div class="p-news-post__pagination c-pagination">',
                    'after' => '</div>',
                    'link_before' => '',
                    'link_after' => '',
                    'next_or_number' => 'number',
                    'separator' => '',
                  )
                );
                ?>
              </div><!-- /.p-news-post__body -->
              <div class="p-news-post__nav-links">
                <div class="p-news-post__prev">
                  <?php previous_post_link('%link', '< 前の記事へ'); ?>
                </div>
                <div class="p-news-post__next">
                  <?php next_post_link('%link', '次の記事へ >'); ?>
                </div>
              </div><!-- /.p-news-post__nav-links -->
            </article>
            <!-- /.p-news-post -->
          <?php endwhile; ?>
        <?php endif; ?>
      </main>
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>